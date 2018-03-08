<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><?php the_title() ?></h2>
    <?php the_content(); ?>

  <?php endwhile; else: ?>

  <div class="page-header">
    <h1>Oh no!</h1>
  </div>

  <p>No content is appearing for this page!</p>

<?php endif; ?>
