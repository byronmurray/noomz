<?php get_header(); ?>
<section class="cover-1 text-center" style="background: #2b2d34 url(<?php echo get_theme_mod('cover-image', get_template_directory_uri() . '/images/cover-bg-1.jpg') ?>) center;">
  <div class="cover-container pb-5" id="welcome">
    <div class="cover-inner container">
        <h1 class="jumbotron-heading">Say <em>hello</em> to our  <strong>Basic Startup Theme</strong></h1>
        <p class="lead">A collection of coded HTML and CSS elements to help your build your basic website. Clean design, fully responsive and based on Bootstrap 4.</p>
        <p>
          <a href="#" class="btn btn-primary btn-lg mb-2 mr-2 ml-2">Main call to action</a>
          <a href="#" class="btn btn-outline-white btn-lg mb-2 ml-2 ml-2">Secondary action</a>
        </p>
    </div>
  </div>
</section>


<!-- Features images -->

<section class="gallery-4 text-center">
  <div class="container">
    <div class="row justify-center">
      <div class="col-md-8 text-center">
        <?php get_template_part( 'includes/title-content' ) ?>
      </div>  
    </div>

    

    <div class="row text-center">


      <?php $pages = get_pages(); 
      
      foreach ($pages as $page) {
        if ($page->post_excerpt && $page->post_excerpt) { ?>
          <div class="col-sm-6 col-md-4 col-gallery">
            <div class="box">
              <img src="<?php echo get_the_post_thumbnail_url($page->ID) ?>" alt="">
              <h4 class="mt-4 ml-4 mr-4"><?php echo $page->post_title; ?></h4>
              <p class="ml-4 mr-4"><?php echo $page->post_excerpt; ?></p>
              <p class="end"><a class="btn btn-outline-secondary" href="/<?php echo $page->post_name; ?>" role="button">More details</a></p>
            </div>
          </div>
        <?php }
      }

      ?>

    </div>
  </div>
</section>

<!-- Features icons -->
<section class="features-4 text-center" id="services">
  <div class="container">
    <div class="row justify-center">
      <div class="col-md-8 text-center">
        <h2>Welcome</h2>
        <p class="lead mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse cursus erat sed sem sagittis cursus.</p>
        <div class="divider"></div>
      </div>  
    </div>
    <div class="row">
      <div class="col-md-3 col-feature">
        <div class="rounded-circle justify-center">
          <em class="fa fa-2x fa-paint-brush"></em>
        </div>
        <h4>About us</h4>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
      </div>
      <div class="col-md-3 col-feature">
        <div class="rounded-circle justify-center">
          <em class="fa fa-2x fa-mobile"></em>
        </div>
        <h4>Services</h4>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
      </div>
      <div class="col-md-3 col-feature">
        <div class="rounded-circle justify-center">
          <em class="fa fa-2x fa-code"></em>
        </div>
        <h4>Latest News</h4>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
      </div>
      <div class="col-md-3 col-feature">
        <div class="rounded-circle justify-center">
          <em class="fa fa-2x fa-pencil"></em>
        </div>
        <h4>Contact us</h4>
        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
      </div>
    </div>
  </div>
</section>

<?php get_template_part( 'includes/testimonials' ) ?>

<?php get_template_part( 'includes/newsletter' ) ?>

<?php get_footer(); ?>