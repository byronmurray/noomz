<?php /* Template Name: Internal Pages */ ?>
<?php get_header(); ?>

<div class="conatiner split-layout">

  <div class="split-layout__feature-image" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>) ">
    <div class="split-layout__heading">
      <h1><?php the_title() ?></h1>
      <div class="social">
        <a title="blank" target="_blank" href=""><i class="fas fa-phone"></i></a>
        <a title="blank" target="_blank" href=""><i class="fas fa-envelope"></i></a>
        <a title="blank" target="_blank" href=""><i class="fab fa-instagram"></i></a>
        <a title="blank" target="_blank" href=""><i class="fab fa-facebook-f"></i></a>
      </div>
    </div>
  </div>

  <div class="split-layout__content-wrap">

      <div class="split-layout__content">
        <?php get_template_part( 'includes/loop' ) ?>
      </div>

      <div class="split-layout__footer">
          <div class="copyright">webiste by <a href="#">Byron Murray</a>  </div>
      </div>


  </div>

</div>



<?php get_footer(); ?>
