<?php

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 18;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


function blog_title( $title ) {
	$max = 50;

	if( strlen( $title ) > $max ) {
		return substr( $title, 0, $max ). " &hellip;";
	} else {
		return $title;
	}
}

/**
 * Require a featured image to be set before a post can be published.
 */
add_filter( 'wp_insert_post_data', function ( $data, $postarr ) {
    $post_id              = $postarr['ID'];
    $post_status          = $data['post_status'];
    $original_post_status = $postarr['original_post_status'];
    if ( $post_id && 'publish' === $post_status && 'publish' !== $original_post_status ) {
        $post_type = get_post_type( $post_id );
        if ( post_type_supports( $post_type, 'thumbnail' ) && ! has_post_thumbnail( $post_id ) ) {
            $data['post_status'] = 'draft';
        }
    }
    return $data;
}, 10, 2 );

add_action( 'admin_notices', function () {
    $post = get_post();
    if ( get_post() && 'publish' !== get_post_status( $post->ID ) && ! has_post_thumbnail( $post->ID ) ) { ?>
        <div id="message" class="error">
            <p>
                <strong><?php _e( 'Please set a Featured Image. This post cannot be published without one.' ); ?></strong>
            </p>
        </div>
    <?php
    }
} );


/**
 * numbered pagination
 *
 * @param int $pages num of pages.
 * @param int $range
 */

// numbered pagination
function pagination($pages = '', $range = 4)
{  
	$showitems = ($range * 2)+1;  

	global $paged;
	if(empty($paged)) $paged = 1;

	if($pages == '') {

		global $wp_query;

		$pages = $wp_query->max_num_pages;

		if(!$pages) {
			$pages = 1;
		}
	}   
 
    if(1 != $pages) {
        echo "<nav class='pagination-nav'>";
        echo "<ul class='pagination'>";

            if($paged == 1) {
             	echo '<li class="page-item disabled">';
			} else {
				echo '<li class="page-item">';
			}

            echo '<a class="page-link" href='.get_pagenum_link($paged - 1).' tabindex="-1">Previous</a>';
    		echo '</li>';
     
			for ($i=1; $i <= $pages; $i++){
				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
					if ($paged == $i) {
						echo '<li class="page-item active">';
					} else {
						echo '<li class="page-item">';
					}
					echo '<a class="page-link" href='.get_pagenum_link($i).'>'.$i.'</a></li>';
				}
			}

			if ($paged < $pages ) {
				echo '<li class="page-item">';
			} else {
				echo '<li class="page-item disabled">';
			}

			echo '<a class="page-link" href='.get_pagenum_link($paged + 1).' tabindex="-1">Next</a>';
			echo '</li>'; 

        echo "</ul>";
        echo "</nav>";
    }
}