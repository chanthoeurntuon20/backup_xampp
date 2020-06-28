<?php
/**
 * Enqueue scripts and styles.
 */
function satrah_scripts() {
    wp_enqueue_style( 'satrah-style', get_stylesheet_uri() );

    wp_enqueue_style( 'satrah-main-theme-style', get_template_directory_uri() . '/assets/theme-styles/css/default.css', array(), mt_rand(0,900000));
			
    wp_enqueue_script( 'bigslide', get_template_directory_uri() . '/assets/js/bigSlide.min.js', array('jquery'), null, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    
    wp_enqueue_style('satrah-title-font', '//fonts.googleapis.com/css?family=Overpass:300,400,600,700,400italic,700italic' );

    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'satrah_scripts' );