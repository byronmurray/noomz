<?php get_header(); ?>

<div class="side-menu__container">

  <?php get_template_part( 'includes/side_menu' ) ?>

  <div class="side-menu__content portfolio">
    <?php $args = array(
         'post_type' => 'portfolio',
       );

    $art = new WP_Query($args);
    if ( $art->have_posts() ) : while ( $art->have_posts() ) : $art->the_post(); ?>

      <div class="portfolio__item" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>) ">
        <a class="portfolio__link" href="<?php the_permalink() ?>">
          <div class="portfolio__content">
            <h2><?php the_title() ?></h2>
            <!-- <hr> -->
            <a class="button" href="<?php the_permalink() ?>">View Work</a>
          </div>
        </a>
      </div>

    <?php endwhile; endif; ?>

  </div>


</div>


<?php get_footer(); ?>
