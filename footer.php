<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bhmhs001
 */

?>

		</div><!-- #content -->
	</div><!-- .main-page -->
</div><!--  .header-area full-->

<div class="footer-area full">
	<div class="main-page">
		<footer id="colophon" class="site-footer inner">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bhm' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'bhm' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'bhm' ), 'bhm', '<a href="http://www.svncrwns.com">SVNCRWNS</a>' );
					?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- .main-page -->
</div><!-- .footer-area .full -->

<?php wp_footer(); ?>

</body>
</html>
