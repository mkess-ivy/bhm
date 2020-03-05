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
			<div class="bhm-wrapper">
				<div class="frow justify-between">
					<div class="footer-logo"><a href="/"><img src="<?php echo get_field('bhm_footer_logo', 'option')['url'] ?>" /></a></div>
					<div class="quick-links">
						<div class="footer-menu-title">Quick Links</div>
						<ul class="quick-links-menu">
							<li><a href="#">Home</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Employee Portal</a></li>
							<li><a href="#">FAQs</a></li>
						</ul>
					</div>
					<div class="contact">
						<div class="footer-menu-title">Get in Touch</div>
						<ul>
							<li><span><img src="<?php echo get_field('address_icon', 'option')['url'] ?>" /></span>&nbsp;&nbsp;1404 West Baltimore Street <span class="city">Baltimore, Maryland 21223</span></li>
							<li><span><img src="<?php echo get_field('phone_icon', 'option')['url'] ?>" /></span>&nbsp;&nbsp;410-800-2121 (office)</li>
							<li>443-478-4716 (fax)</li>
							<li>443-938-9944 (emergency)</li>
							<li class="mail_footer"><span><img src="<?php echo get_field('mail_icon', 'option')['url'] ?>" /></span>&nbsp;&nbsp;<a href="mailto:admin@bhmhs.org">admin@bhmhs.org</a></li>
						</ul>
					</div>
					<div class="award-logo"><a href="/"><img src="<?php echo get_field('awards_logo', 'option')['url'] ?>" /></a></div>
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- .main-page -->
</div><!-- .footer-area .full -->

<?php wp_footer(); ?>

</body>
</html>
