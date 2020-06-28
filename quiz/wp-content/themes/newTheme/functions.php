<?php 
    function menu(){
        register_nav_menus(array(
            'primary'=>__('Primary Menu'),
            'footer'=>__('Footer Menu'),
        ));
    }
    add_action('after_setup_theme','menu');
    function feature(){
       add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme','feature');
?>