<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package corkboard
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php wp_nav_menu( array('theme_location' => 'menu-2', 'menu-id' => 'Social-Media' ) ); ?>

		<div class="site-info">
			<span>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'corkboard' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'corkboard' ), 'WordPress' ); ?></a>
			</span>
			<!-- <span class="sep"> | </span> -->
			<span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'corkboard' ), 'corkboard', '<a href="https://automattic.com/" rel="designer">Shelby Pumphrey</a>' ); ?>
			</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
