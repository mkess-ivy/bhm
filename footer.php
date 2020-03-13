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
			<div class="bhm-wrapper footer-menu">
				<div class="frow justify-between">
					<div class="footer-logo"><a href="/"><img src="<?php echo get_field('bhm_footer_logo', 'option')['url'] ?>" /></a></div>
					<div class="quick-links">
						<div class="footer-menu-title">Quick Links</div>
						<nav class="footer-navigation">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
							) );
							?>
						</nav><!-- #site-navigation -->
					</div>
					<div class="contact">
						<div class="footer-menu-title">Get in Touch</div>
						<div class="git-items-wrapper">
							<div class="item">
								<span class="bullet-img"><img src="<?php echo get_field('address_icon', 'option')['url'] ?>" /></span>
								<span class="bullet-text">1404 West Baltimore Street<span class="city">Baltimore, Maryland 21223</span>
								</span>
							</div>
							<div class="item">
								<span class="bullet-img"><img src="<?php echo get_field('phone_icon', 'option')['url'] ?>" /></span>
								<span class="bullet-text">410-800-2121 (office)</span>
							</div>
							<div class="item">
								<span class="no-bullet-img"></span>
								<span class="bullet-text no-bullet">443-478-4716 (fax)</span>
							</div>
							<div class="item">
								<span class="no-bullet-img"></span>
								<span class="bullet-text no-bullet">443-938-9944 (emergency)</span>
							</div>
							<div class="item">
								<span class="bullet-img"><img src="<?php echo get_field('mail_icon', 'option')['url'] ?>" /></span>
								<span class="bullet-text mail-icon"><a href="mailto:admin@bhmhs.org">admin@bhmhs.org</a></span>
							</div>
						</div>
					</div>
					<div class="award-logo"><a href="<?php echo get_field('awards_url', 'option') ?>" target="_blank"><img src="<?php echo get_field('awards_logo', 'option')['url'] ?>" /></a></div>
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- .main-page -->
</div><!-- .footer-area .full -->

<?php wp_footer(); ?>

</body>
</html>
