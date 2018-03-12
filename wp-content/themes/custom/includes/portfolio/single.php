<div class="slider">

  <?php  $images = get_field('gallery'); ?>

  <?php if( $images ): ?>

    <?php foreach( $images as $image ): ?>

    <div class="slider-item" style="background: url(<?php echo $image['url']; ?>)"> <!-- repeating this -->
      <div class="portfolio__content">
        <?php get_template_part( 'includes/loop' ) ?>
      </div>
      <span id="toggle-text" class="button" href="#">< hide text</span>
    </div>

    <?php endforeach; ?>

    </div>

    <?php else: ?>

    <div class="slider-item" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>) "> <!-- repeating this -->
      <div class="portfolio__content">
        <?php get_template_part( 'includes/loop' ) ?>
      </div>
      <span id="toggle-text" class="button" href="#">< hide text</span>
    </div>

  <?php endif;  ?>

</div>
