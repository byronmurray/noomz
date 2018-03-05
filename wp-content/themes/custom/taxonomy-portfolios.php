<?php get_header(); ?>

<div class="side-menu__container">

  <?php get_template_part( 'includes/side_menu' ) ?>

  <div class="side-menu__content portfolio">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'includes/portfolio/item' ) ?>

    <?php endwhile; endif; ?>
  </div>


</div>


<?php get_footer(); ?>
