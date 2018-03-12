<div class="cover"> <!-- include partials -->

  <?php

  $categories = get_terms( 'portfolios', array(
      'hide_empty' => false
  ) );

  ?>

  <?php foreach ($categories as $category) : ?>
    <?php $image = get_field('image', $category->taxonomy . '_' . $category->term_id); ?>



    <div class="catergory-split" style="background: url(<?php echo $image['url'] ?>)">
      <div class="catergory-split__content">
        <h2><?php echo $category->name ?></h2>
        <hr>
        <a class="button__view" href="<?php echo $category->taxonomy . '/' . $category->slug ?>">View Work</a>
      </div>
    </div>




  <?php endforeach;  ?>


</div>
