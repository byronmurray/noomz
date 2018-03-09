<?php get_header(); ?>

<?php $terms = get_the_terms( get_the_ID(), 'portfolios' ); ?>

<div class="side-menu__container">


  <?php get_template_part( 'includes/side_menu' ) ?>

  <div class="side-menu__content portfolio">

    <div class="portfolio__item-featured" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>) ">

      <div class="portfolio__content">
        <?php get_template_part( 'includes/loop' ) ?> <!-- be able to hide text. -->
        <!-- if gallery put in slide show, maybe just do this any ways -->
      </div>

    </div>

    <?php

      $images = get_field('gallery');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)

      if( $images ): ?>
          <ul>
              <?php foreach( $images as $image ): ?>
                  <li>
                  	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                  </li>
              <?php endforeach; ?>
          </ul>
      <?php endif; ?>

    <?php $args = array(
         'post_type' => 'portfolio',
         'post__not_in' => array(get_the_ID()),
         'tax_query' => array(
              array(
                  'taxonomy' => 'portfolios',
                  'field'    => 'slug',
                  'terms'    => $terms[0]->name,
              ),
          ),
         // get related posts with same catergory
         // exclude curret item
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
