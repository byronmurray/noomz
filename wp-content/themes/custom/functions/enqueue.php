<?php

function theme_scripts() {

	wp_enqueue_style( 'slickcss', get_stylesheet_directory_uri() . '/css/slick.css');
	wp_enqueue_style( 'slickcsstheme', get_stylesheet_directory_uri(). '/css/slick-theme.css');
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/app.css' );

	wp_enqueue_script( 'slickjs', get_stylesheet_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'slickjs-init', get_stylesheet_directory_uri(). '/js/slick-init.js', array( 'slickjs' ), '', true );
	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true );

}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );
