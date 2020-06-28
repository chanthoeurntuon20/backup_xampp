<?php
/**
 * Sample implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * You can add an optional custom header image to header.php like so ...

	<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>

 *
 * @package satrah
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses satrah_header_style()
 * @uses satrah_admin_header_style()
 * @uses satrah_admin_header_image()
 */
function satrah_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'satrah_custom_header_args', array(
		'default-text-color'     => '#000',
		'width'  				 => 1440,
		'height'				 => 380,
		'flex-height'            => true,
		'wp-head-callback'       => 'satrah_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'satrah_custom_header_setup' );

if ( ! function_exists( 'satrah_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see satrah_custom_header_setup().
 */
function satrah_header_style() {
	?>
	<style>
	#masthead {
			background-size: <?php echo esc_html(get_theme_mod('satrah_himg_style','cover')); ?>;
			background-position-x: <?php echo esc_html(get_theme_mod('satrah_himg_align','center')); ?>;
			background-repeat: <?php echo  esc_html(get_theme_mod('satrah_himg_repeat')) ? "repeat" : "no-repeat" ?>;
		}
	</style>	
	<?php
}
endif; // satrah_header_style