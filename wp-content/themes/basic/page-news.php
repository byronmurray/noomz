<?php get_header(); ?>

<section class="gallery-3 text-center">
  <div class="container">

    <?php get_template_part( 'includes/title-content' ) ?>

    <div class="row">

      <?php 
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
           
          $args = array(
             'posts_per_page' => 9,
             'paged' => $paged
          );
      ?>

      <?php $loop = new WP_Query( $args ); ?>
      <?php if ($loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <!-- ROW OF COLUMNS -->
        <div class="col-sm-6 col-md-4 col-gallery">

          <div style="background: url(<?php echo get_the_post_thumbnail_url() ?>) center center;" class="img-fluid rounded-corners blog-feature">
            <img src="<?php echo get_template_directory_uri() . '/images/background.png' ?>" class="img-fluid rounded-corners">
          </div>
          <h4 class="mt-4"><?php echo blog_title(get_the_title()) ?></h4>
          <?php the_excerpt() ?>
          <p class="end"><a class="btn btn-outline-secondary" href="<?php the_permalink(); ?>" role="button">Read More</a></p>
        </div>
      
      <?php endwhile; ?>
      
      </div>

      <!-- <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
      <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div> -->

      <?php if (function_exists("pagination")) { ?>
          <?php pagination($loop->max_num_pages); ?>
      <?php } ?>

      <?php endif; ?>
      
    
  </div>
</section>

<?php get_footer(); ?>