<?php

function get_hero_image() {

    echo '<div class="hero-image" style="background-image: url(' . 
    get_template_directory_uri() . '/images/hero/hero-' . rand(1,3) .'.jpg);"></div>';

}
