<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Toolbox
 * @since Toolbox 0.1
 */
?>

	<footer id="colophon" class="foot" role="contentinfo">
		<div id="site-generator">
			<?php do_action( 'toolbox_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'toolbox' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'toolbox' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'toolbox' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( '%1$s based on %2$s.', 'toolbox' ), '<a href="http://contolini.com/" rel="designer">WP OOCSS theme</a>', '<a href="http://wordpress.org/extend/themes/toolbox" rel="designer">Toolbox</a>' ); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>