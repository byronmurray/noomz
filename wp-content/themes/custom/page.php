<?php get_header(); ?>

<div class="conatiner split-layout">

  <div class="split-layout__feature-image" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>) ">

    <div class="split-layout__heading"> <!-- include partials -->
      <h1 class="title__page-header"><?php the_title() ?></h1>
      <hr>
    </div>

    <?php get_template_part( 'includes/social' ) ?>

  </div>

  <div class="split-layout__content-wrap">

    <div class="split-layout__content"> <!-- include partials -->
      <?php get_template_part( 'includes/loop' ) ?>
    </div>

  </div>

</div>

<div class="split-layout__footer"> <!-- include partials -->
    <div class="copyright">webiste by <a href="#">Byron Murray</a>  </div>
</div>



<?php get_footer(); ?>
