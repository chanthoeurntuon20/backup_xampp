
<?php
function add_feature(){
    add_theme_support('post-thumbnails');//add feature to theme(add image to post);
}
add_action('after_setup_theme','add_feature');
function idparent(){
    global $post;
    $id = $post->ID;
    if($post->post_parent){
        $ancestor = get_post_ancestors($id);
        return $ancestor[0];
    }else{
        return $id;
    }
}
?>