<?php

  $images = get_field('gallery');

  if( $images ): ?>

  <div class="slider">

  <?php foreach( $images as $image ): ?>

  <div class="slider-item" style="background: url(<?php echo $image['url']; ?>)">
    <div class="portfolio__content">
      <?php get_template_part( 'includes/loop' ) ?> <!-- be able to hide text. -->
      <!-- if gallery put in slide show, maybe just do this any ways -->
    </div>
  </div>

  <?php endforeach; ?>

  </div>

<?php else: ?>

  <div class="slider-item" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>) ">
    <div class="portfolio__content">
      <?php get_template_part( 'includes/loop' ) ?> <!-- be able to hide text. -->
      <!-- if gallery put in slide show, maybe just do this any ways -->
    </div>
  </div>

<?php endif;  ?>
