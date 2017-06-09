<?php 

function services_cpt() {
    $args = array(
        'label'  => 'Services',
        'public' => true,
        'supports' => array( 'title', 'editor', 'thumbnail'),
    );

    register_post_type( 'services', $args );
}

add_action( 'init', 'services_cpt' );


function testimonials_cpt() {
    $args = array(
        'label'  => 'Testimonials',
        'public' => true,
        'supports' => array( 'title', 'editor'),
        'public' => false,  // it's not public, it shouldn't have it's own permalink, and so on
        'publicly_queryable' => true,  // you should be able to query it
        'show_ui' => true,  // you should be able to edit it in wp-admin
        'exclude_from_search' => true,  // you should exclude it from search results
        'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
        'has_archive' => false,  // it shouldn't have archive page
        'rewrite' => false,  // it shouldn't have rewrite rules
    );

    register_post_type( 'testimonials', $args );
}

add_action( 'init', 'testimonials_cpt' );





function staff_cpt() {
    $args = array(
        'label'  => 'Staff',
        'public' => true,
        'supports' => array( 'title', 'editor', 'thumbnail'),
        'public' => false,  // it's not public, it shouldn't have it's own permalink, and so on
        'publicly_queryable' => true,  // you should be able to query it
        'show_ui' => true,  // you should be able to edit it in wp-admin
        'exclude_from_search' => true,  // you should exclude it from search results
        'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
        'has_archive' => false,  // it shouldn't have archive page
        'rewrite' => false,  // it shouldn't have rewrite rules
    );

    register_post_type( 'staff', $args );
}

add_action( 'init', 'staff_cpt' );


function add_fields(){
    /*add_meta_box( $id, $title, $callback, $page, $context, $priority );*/
    add_meta_box( 'job-title', 'Job Title', 'job_title', "staff", "side", "low" );
}
add_action('admin_init', 'add_fields');


function job_title(){
  global $post;
  $custom = get_post_custom($post->ID);
  $job_title = $custom["job_title"][0];
  ?>
  <label>Year:</label>
  <input name="job_title" value="<?php echo $job_title; ?>" />
  <?php
}


/*Save data to post meta table*/

function save_details(){
  global $post;
 
  update_post_meta($post->ID, "job_title", $_POST["job_title"]);
}
add_action('save_post', 'save_details');