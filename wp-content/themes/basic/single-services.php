<?php get_header(); ?>
<section class="cover-blog text-center" style="background: #2b2d34 url(<?php echo get_the_post_thumbnail_url() ?>) center;">
  <div class="feature-hero" id="blog">
    <div class="container">
      <h1 class="jumbotron-heading"><?php the_title( ); ?></h1>
      <div class="divider"></div>
      <p class="lead font-weight-bold">A collection of coded HTML and CSS elements to help your build your basic website. Clean design, fully responsive and based on Bootstrap 4.</p>
      <p class="lead"><em>
        Published on <?php echo the_time('l, F jS, Y');?>
        <!-- in <?php the_category( ', ' ); ?>.
        <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a> -->
      </em></p>
    </div>
  </div>
</section>

<!-- Features images -->

<section class="blog-post">
  <div class="container">
    <div class="row justify-center">
      <div class="col-md-12">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

      </div>  
    </div>
  </div>
</section>

<!-- Other blog posts, services or products -->

<?php get_template_part( 'includes/services' ) ?>

<?php get_template_part( 'includes/newsletter' ) ?>

<?php get_footer(); ?>