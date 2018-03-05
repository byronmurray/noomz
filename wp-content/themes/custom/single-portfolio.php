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

    $art = new WP_Query($args); ?>
    <?php if ( $art->have_posts() ) : while ( $art->have_posts() ) : $art->the_post(); ?>

      <?php get_template_part( 'includes/portfolio/item' ) ?>

    <?php endwhile; endif; ?>

  </div>

</div>


<?php get_footer(); ?>
