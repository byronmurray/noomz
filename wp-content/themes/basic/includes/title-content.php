<!-- title and content -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <h2 class="mb-3 text-capitalize"><?php the_title( ) ?></h2>
  <div class="lead-para"><?php the_content( ) ?></div>
<?php endwhile; endif; ?>
<div class="divider"></div>