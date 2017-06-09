<!--  Testimonials -->
<section class="testimonial-4 text-center">
  <div class="container">
    <div class="row">

      <div id="testimonials" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

          <?php $loop = new WP_Query( array( 'post_type' => 'testimonials', 'posts_per_page' => 10, 'order' => 'ASC' ) );
          $i = 0;
          
          while ( $loop->have_posts() ) : $loop->the_post(); ?>

          <?php if ($i == 0): ?>

          <div class="carousel-item testimonial-item active">

          <?php else: ?>

          <div class="carousel-item testimonial-item">

          <?php endif; ?>
          
          <!-- <img class="d-block img-fluid" src="<?php echo get_template_directory_uri() ?>/images/placeholder-image-1.jpg" alt="First slide"> -->

            <blockquote>
              <?php the_content( ); ?>
              <span class="quote-author"><?php the_title( ); ?></span>
            </blockquote>


        </div> <!-- item -->

        <?php $i++; endwhile; ?>
      </div>

    </div>
  </div>
</section>