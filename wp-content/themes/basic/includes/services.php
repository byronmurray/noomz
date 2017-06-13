<section class="gallery-4 text-center">
  <div class="container">

    <?php get_template_part( 'includes/title-content' ) ?>

    <div class="row">

      <?php $loop = new WP_Query( array( 'post_type' => 'services', 'posts_per_page' => 10, 'order' => 'ASC' ) ); ?>
         
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <!-- ROW OF COLUMNS -->
        <div class="col-sm-6 col-md-4 col-gallery">
          <div class="box">

            <div style="background: url(<?php echo get_the_post_thumbnail_url() ?>) center center;" class="img-fluid blog-feature">
              <img src="<?php echo get_template_directory_uri() . '/images/background.png' ?>">
            </div>
            <h4 class="mt-4 ml-4 mr-4"><?php echo blog_title(get_the_title()) ?></h4>
            <?php the_excerpt() ?>
            <p class="end"><a class="btn btn-outline-secondary" href="<?php the_permalink(); ?>" role="button">Read More</a></p>
          </div>

        </div>
      
        <?php endwhile; ?>
      
      </div>
   
    
  </div>
</section>