<?php

// add nav menus
function wpb_theme_setup(){
    add_theme_support('post-thumbnails'); // added featured image here
    register_nav_menus(array(
            'primary'=> __('Primary Menu')

    ));
}





?>