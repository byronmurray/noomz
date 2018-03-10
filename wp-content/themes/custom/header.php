<!DOCTYPE html>
<html class="no-js">
<head>
  <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

  <!-- slick slider CDNs -->
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/slick-theme.css"/> -->


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
  You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<nav class="navbar">
    <div class="navbar__brand">
      <a href="/"><?php echo get_option('blogname'); ?></a>
    </div>

    <?php
        wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'menu_class'        => 'navbar__nav',
            )
        );
    ?>

</nav>
