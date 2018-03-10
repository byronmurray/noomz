<div class="portfolio__item" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>) ">

  <div class="portfolio__background">
    <a class="portfolio__link" href="<?php the_permalink() ?>"></a>
    <div class="portfolio__content">
      <h2><?php the_title() ?></h2>
      <hr>
      <a class="button__view" href="<?php the_permalink() ?>">View Work</a>
    </div>
  </div>

</div>
