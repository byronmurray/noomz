<?php get_header(); ?>

<div class="side-menu__container">

  <?php get_template_part( 'includes/side_menu' ) ?>

  <div class="side-menu__content portfolio">
    <?php $args = array(
         'post_type' => 'portfolio',
       );

    $art = new WP_Query($args);
    if ( $art->have_posts() ) : while ( $art->have_posts() ) : $art->the_post(); ?>

      <?php get_template_part( 'includes/portfolio/item' ) ?>
      

    <?php endwhile; endif; ?>

  </div>


</div>


<?php get_footer(); ?>
