<?php get_header(); ?>

<!-- About us -->
<section class="team-4 text-center">
  <div class="container">

    <?php get_template_part( 'includes/title-content' ) ?>
    
    <div class="row">

      <?php $loop = new WP_Query( array( 'post_type' => 'staff', 'posts_per_page' => 10, 'order' => 'ASC' ) ); ?>

      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="col-md-3 col-team">
          <figure>
              <img class="rounded-corners img-fluid" src="<?php the_post_thumbnail_url(  ) ?>" width="240" height="240">
          </figure>
          <h4><?php the_title( ); ?></h4>
          <p><span class="emphasis"><?php echo get_post_meta( get_the_ID(), 'job_title', true)  ?></span></p>
          <p><?php the_content( ); ?></p>
        </div>

      <?php endwhile; ?>
      
    </div>
    
  </div>
</section>

<?php get_template_part( 'includes/testimonials' ) ?>

<?php get_footer(); ?>