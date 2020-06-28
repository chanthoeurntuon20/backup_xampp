<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package satrah
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div id="secondary" class="widget-area <?php do_action('satrah_secondary-width') ?>" role="complementary">	
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
