<?php 
    function menu(){
        register_nav_menus(array(
            'primary'=> __('Primary Menu'),
            'footer'=> __('Footer Menu')
        ));
    }
    add_action('after_setup_theme','menu');
   function add_feature(){
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(500,500);
}
add_action('after_setup_theme','add_feature');

    function idparent(){
        global $post;
        $id = $post->ID;
        if($post->post_parent){
            $ancestor = get_post_ancestors($id);
            return $ancestor[0];//incase there are many level just show first level
        }
        return $id;
    }
  
    function init_widget($id){
            register_sidebar(array(
                'name'=>'Sidebar',
                'id'=>'sidebar',
                'before_widget'=>'<div class = "showcase">',
                'after_widget'=>'</div>',
                'before_title'=>'<h3 style="color:red">',
                'after_title'=>'</h3>',
            ));
            register_sidebar(array(
                'name'=>'showCase',
                'id'=>'showcase',
                'before_widget'=>'',
                'after_widget'=>'',
                'before_title'=>'<h3 style="color:red">',
                'after_title'=>'</h3>',
            ));
             register_sidebar(array(
                'name'=>'box1',
                'id'=>'box1',
                'before_widget'=>'',
                'after_widget'=>'',
                'before_title'=>'<h3 style="color:red">',
                'after_title'=>'</h3>',
            ));
             register_sidebar(array(
                'name'=>'box2',
                'id'=>'box2',
                'before_widget'=>'',
                'after_widget'=>'',
                'before_title'=>'<h3 style="color:red">',
                'after_title'=>'</h3>',
            ));
            register_sidebar(array(
                'name'=>'box3',
                'id'=>'box3',
                'before_widget'=>'',
                'after_widget'=>'',
                'before_title'=>'<h3 style="color:red">',
                'after_title'=>'</h3>',
            ));
}
add_action('widgets_init','init_widget');
function feature_image(){
    add_theme_support('post_thumbnails');
    set_post_thumbnail_size(200,200);
}
add_action('after_setup_theme','feature_image');
?>

