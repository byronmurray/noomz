<?php get_header(); ?>

<div class="side-menu__container">

  <?php get_template_part( 'includes/side_menu' ) ?>

  <div class="side-menu__content ">
    <?php get_template_part('includes/portfolio/single') ?>
  </div>

</div>

<div class="side-menu__content portfolio">

  <?php $terms = get_the_terms( get_the_ID(), 'portfolios' ); ?>
  <?php $args = array(
       'post_type' => 'portfolio',
       'post__not_in' => array(get_the_ID()), // exclude curret item
       'tax_query' => array( // get related posts with same catergory
            array(
                'taxonomy' => 'portfolios',
                'field'    => 'slug',
                'terms'    => $terms[0]->name,
            ),
        ),
     );

    $art = new WP_Query($args);
    if ( $art->have_posts() ) : while ( $art->have_posts() ) : $art->the_post(); ?>

      <div class="portfolio__item" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>) ">
        <a class="portfolio__link" href="<?php the_permalink() ?>">
          <div class="portfolio__content">
            <h2><?php the_title() ?></h2>
            <hr>
            <a class="button" href="<?php the_permalink() ?>">View Work</a>
          </div>
        </a>
      </div>

    <?php endwhile; endif; ?>

  </div>


</div>


<?php get_footer(); ?>
