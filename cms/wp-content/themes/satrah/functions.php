<?php
	
//Import Admin Modules
require get_template_directory() . '/modules/admin_modules/register_styles.php';
require get_template_directory() . '/modules/admin_modules/register_widgets.php';
require get_template_directory() . '/modules/admin_modules/theme_setup.php';
require get_template_directory() . '/modules/admin_modules/excerpt_length.php';

/*
**	Determining Sidebar and Primary Width
*/
function satrah_primary_class() {
	$class = "md-8";
	echo esc_attr($class);
}
add_action('satrah_primary-width', 'satrah_primary_class');

function satrah_secondary_class() {
	$class = "md-4";
	echo esc_attr($class);
}
add_action('satrah_secondary-width', 'satrah_secondary_class');


/*
** Function to Get Theme Layout 
*/
function satrah_get_blog_layout(){
	$ldir = 'modules/content/content';
	if (get_theme_mod('satrah_blog_layout') ) :
		get_template_part( $ldir , get_theme_mod('satrah_blog_layout') );
	else :
		get_template_part( $ldir ,'satrah');	
	endif;	
}
add_action('satrah_blog_layout', 'satrah_get_blog_layout');
	
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/modules/customizer/init.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
