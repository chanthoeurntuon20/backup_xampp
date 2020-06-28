<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package satrah
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function satrah_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer' => false,
		'type' => 'click',
		'render' => 'satrah_jetpack_render_posts',
		'posts_per_page' => 10
	) );
}
add_action( 'after_setup_theme', 'satrah_jetpack_setup' );

function satrah_jetpack_render_posts() {
		while( have_posts() ) {
	    the_post();
	    do_action('satrah_blog_layout'); 
	}
}

function satrah_filter_jetpack_infinite_scroll_js_settings( $settings ) {
    $settings['text'] = __( 'Load more posts...', 'satrah' );
    return $settings;
}
add_filter( 'infinite_scroll_js_settings', 'satrah_filter_jetpack_infinite_scroll_js_settings' );