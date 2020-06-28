<?php
/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function satrah_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'satrah' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title title-font"><span>',
        'after_title'   => '</span></h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 1', 'satrah' ), /* Primary Sidebar for Everywhere else */
        'id'            => 'footer-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title title-font"><span>',
        'after_title'   => '</span></h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'satrah' ), /* Primary Sidebar for Everywhere else */
        'id'            => 'footer-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title title-font"><span>',
        'after_title'   => '</span></h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'satrah' ), /* Primary Sidebar for Everywhere else */
        'id'            => 'footer-3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title title-font"><span>',
        'after_title'   => '</span></h3>',
    ) );

}
add_action( 'widgets_init', 'satrah_widgets_init' );