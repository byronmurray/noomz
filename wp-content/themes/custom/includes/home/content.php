<div class="cover"> <!-- include partials -->
  <div class="cover__content">
    <div class="cover__name">Chris Newman</div>
    <h2 class="cover__title">street artist</h2>

      <?php
          wp_nav_menu( array(
              'menu'              => 'portfolio',
              'theme_location'    => 'portfolio',
              'menu_class'        => 'cover__catergory-list',
              'container'         =>  false,
              )
          );
      ?>

  </div>

</div>
