<?php 
function register_theme_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Primary Menu' ),
      'footer' => __( 'Footer Menu' )
    )
  );
}


add_action( 'init', 'register_theme_menus' );
// add_filter( 'show_admin_bar', '__return_false' );

add_theme_support( 'post-thumbnails' );

/*add_image_size( 'hero_image', 1900, 300, array( 'center', 'center' ) );*/

