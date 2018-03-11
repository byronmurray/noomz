<div class="cover"> <!-- include partials -->
  <div class="cover__content">
    <div class="title__sub">Chris Newman</div>
    <h2 class="title__main">street artist</h2>

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
