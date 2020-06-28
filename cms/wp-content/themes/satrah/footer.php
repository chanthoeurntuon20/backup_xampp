<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package satrah
 */
?>

	</div><!-- #content -->
</div><!-- #page -->

	<?php get_sidebar('footer'); ?>

	<footer id="colophon" class="site-footer title-font" role="contentinfo">
		<div class="container">
		<div class="site-info">
			<?php _e('Designed by','satrah') ?> <a href="<?php echo esc_url('https://codetorank.com/satrah/') ?>" rel="nofollow"><?php _e('CodetoRank.com','satrah') ?></a>. 
			<?php echo '&copy; '.date_i18n( __( 'Y', 'satrah' ) ).' '.get_bloginfo('name').__('. All Rights Reserved. ','satrah');  ?>
		</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
	
	

<nav id="menu" class="panel" role="navigation">
	 <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
</nav>

<?php wp_footer(); ?>


</body>
</html>
