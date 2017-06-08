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
        <h2>Welcome</h2>
        <p class="lead mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse cursus erat sed sem sagittis cursus.</p>
        <div class="divider"></div>
      </div>  
    </div>
    <div class="row text-center">
      <div class="col-sm-6 col-md-4 col-gallery">
        <div class="box">
          <img src="<?php echo get_template_directory_uri() ?>/images/placeholder-image-1.jpg" class="img-fluid rounded-corners">
          <h4 class="mt-4 ml-4 mr-4">About us</h4>
          <p class="ml-4 mr-4">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
          <p><a class="btn btn-outline-secondary" href="#" role="button">More details</a></p>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-gallery">
        <div class="box">
          <img src="<?php echo get_template_directory_uri() ?>/images/placeholder-image-2.jpg" class="img-fluid rounded-corners">
          <h4 class="mt-4 ml-4 mr-4">Services</h4>
          <p class="ml-4 mr-4">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
          <p><a class="btn btn-outline-secondary" href="#" role="button">More details</a></p>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-gallery">
        <div class="box">
          <img src="<?php echo get_template_directory_uri() ?>/images/placeholder-image-3.jpg" class="img-fluid rounded-corners">
          <h4 class="mt-4 ml-4 mr-4">Contact us</h4>
          <p class="ml-4 mr-4">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
          <p><a class="btn btn-outline-secondary" href="#" role="button">More details</a></p>
        </div>
      </div>
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
 
<!--  Testimonials -->
<section class="testimonial-4 text-center">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 offset-sm-2">
        <blockquote>
          <p class="quote-text">"We shall not cease from exploration, and the end of all our exploring will be to arrive where we started and know the place for the first time."</p>
          <p><span class="quote-author">T. S. Elliot</span></p>
        </blockquote>
      </div>
    </div>
  </div>
</section>

<!-- Call to action -->
<section class="cta-1 text-center">
  <div class="container">
    <h2>Join us today</h2>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <form class="subscribe">
      <div class="form-group row pt-5 pb-2">
        <div class="col-md-4 mb-3">
          <input type="text" class="form-control-custom" id="inputName" placeholder="Your Name">
        </div>
        <div class="col-md-4 mb-3">
          <input type="email" class="form-control-custom" id="inputEmail" placeholder="Your Email">
        </div>
        <div class="col-md-4">
          <button type="submit" class="btn btn-lg btn-primary">Notify Me</button>
        </div>
      </div>
    </form>
  </div>
</section>

<?php get_footer(); ?>