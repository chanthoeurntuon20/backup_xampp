
<?php
function add_feature(){
    // add feature to theme(add image to post);
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(500,500);
}
add_action('after_setup_theme','add_feature');

function menu(){
    register_nav_menus(array( 
        'primary'=>__('Primary Menu'),
        'footer'=> __('Footer Menu'), 
    ));
    add_action('after_setup_theme','menu');
}

function init_widget(){
    register_sidebar();
}
add_action('widgets_init','init_widget');
?>

