<?php
/**
 * satrah Theme Customizer
 *
 * @package satrah
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function satrah_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

}
add_action( 'customize_register', 'satrah_customize_register' );

//Load All Individual Settings Based on Sections/Panels.
require_once get_template_directory().'/modules/customizer/_sanitization.php';
require_once get_template_directory().'/modules/customizer/header.php';
require_once get_template_directory().'/modules/customizer/social-icons.php';