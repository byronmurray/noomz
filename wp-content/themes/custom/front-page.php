<?php get_header(); ?>

<div class="cover"> <!-- include partials -->
  <div class="cover__content">
    <div class="cover__name">Chris Newman</div>
    <h2 class="cover__title">street artist</h2>
    <img src="" alt="">
    <div class="cover__catergory-list"> <!-- include side-menu -->
      <a href="portfolios/street-art">street art</a>
      <a href="portfolios/graphic-design">graphic design</a>
      <a href="portfolios/media-coverage">media coverage</a>
      <a href="portfolios/fine-art">fine art</a>
      <a href="portfolios/photography">photography</a>
    </div>
  </div>

</div>


<div class="cover__footer"> <!-- include partials | home-footer -->
  <?php get_template_part( 'includes/social' ) ?>
</div>


<?php get_footer(); ?>
