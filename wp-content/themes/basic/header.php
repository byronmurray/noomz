<!DOCTYPE html>
<html class="no-js">
<head>
  <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://developers.google.com/maps/documentation/javascript/demos/demos.css">

  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
  You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<nav class="navbar navbar-toggleable-sm navbar-custom navbar-inverse">
  <div class="container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/">Startup Basic</a>
    <div class="collapse navbar-collapse pull-xs-right justify-content-end" id="navbarToggler">
      
        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'menu_class'        => 'navbar-nav mt-2 mt-md-0',
                )
            );
        ?>
    </div>
  </div>
</nav>
