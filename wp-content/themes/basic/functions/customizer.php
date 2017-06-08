<?php

function mytheme_customize_register( $wp_customize ) {

  /*-----------------------------------------------------------------------*/
  /*                   HOME PAGE CALL TO ACTION*/
  /*-----------------------------------------------------------------------*/

    /*Add cover page section*/ 
    $wp_customize->add_section( 'featured_content' , array(
      'title'      => __( 'Cover Page', 'cover-section' ),
      'priority'   => 30,
    ) );

    /*----------------------------------------------------------------------*/

    /*add settings image for Background*/
    $wp_customize->add_setting( 'cover-image' , array(
      'default'   => get_template_directory_uri() .  '/images/cover-bg-1.jpg',
      'type'    => 'theme_mod',
    ) );
   
    /*Add image controls*/
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cover-image', array(
      'label' => __( 'Cover background image. For best results upload an image greater than 1900x1000 pixels', 'cover-section' ),
      'section' => 'featured_content',
      'mime_type' => 'image',
    ) ) );
 
    /*add settings for mission box*/
    $wp_customize->add_setting( 'brand-name' , array(
      'default'     => 'Mission',
      'transport'   => 'refresh',
    ) );
   
    /*Add header controls*/
    $wp_customize->add_control('brand-name', array(
      'label'        => __( 'Website Title', 'cover-section' ),
      'section'    => 'featured_content',
      'type'   => 'text',
    ) );

    /*add settings for text box*/
    $wp_customize->add_setting( 'brand-tagline' , array(
      'default'     => 'Our College motto is “Through Faith and Love”. This reflects our Lasallian philosophy which is built on the four pillars of Faith, Compassion, Prayer and Action.

	     To develop lifelong learners with a commitment to excellence, and a desire to contribute to society and the church’s mission.',
      'transport'   => 'refresh',
    ) );
   
    /*Add textarea controls*/
    $wp_customize->add_control('brand-tagline', array(
      'label'        => __( 'Mission Statement', 'cover-section' ),
      'section'    => 'featured_content',
      'type'   => 'textarea',
    ) );
 
   
    /*add settings for call to action button 1*/
    $wp_customize->add_setting( 'main-call-link' , array(
      'default'     =>  get_bloginfo( 'url' ),
      'transport'   => 'refresh',
  ) );

    /*Add link controls*/
    $wp_customize->add_control('main-call-link', array(
    'label'        => __( 'Main call to action link', 'cover-section' ),
    'section'    => 'featured_content',
    'type'   => 'text',
  ) );


    /*add settings for text box*/
    $wp_customize->add_setting( 'main-call-text' , array(
      'default'     => 'Heading',
      'transport'   => 'refresh',
    ) );
   
    /*Add header controls*/
    $wp_customize->add_control('main-call-text', array(
    'label'        => __( 'Main call to action text', 'cover-section' ),
    'section'    => 'featured_content',
    'type'   => 'text',
    ) );



      /*add settings for call to action button 2*/
    $wp_customize->add_setting( 'secondary-call-link' , array(
      'default'     =>  get_bloginfo( 'url' ),
      'transport'   => 'refresh',
  ) );

    /*Add link controls*/
    $wp_customize->add_control('secondary-call-link', array(
    'label'        => __( 'Secondary call to action link', 'cover-section' ),
    'section'    => 'featured_content',
    'type'   => 'text',
  ) );


    /*add settings for text box*/
    $wp_customize->add_setting( 'secondary-call-text' , array(
      'default'     => 'Heading',
      'transport'   => 'refresh',
    ) );
   
    /*Add header controls*/
    $wp_customize->add_control('secondary-call-text', array(
    'label'        => __( 'Secondary call to action text', 'cover-section' ),
    'section'    => 'featured_content',
    'type'   => 'text',
    ) );

    /* ------------------------------------------------------------------------*/

}


add_action( 'customize_register', 'mytheme_customize_register' );