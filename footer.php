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
						<div class="footer-menu-title"><?php the_field('quick_links_title', 'option'); ?></div>
						<nav class="footer-navigation">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
							) );
							?>
						</nav><!-- #site-navigation -->
					</div>
					<div class="contact">
						<div class="footer-menu-title"><?php the_field('get_connected_title', 'option'); ?></div>
						<div class="git-items-wrapper">
							<div class="item">
								<span class="bullet-img"><img src="<?php echo get_field('address_icon', 'option')['url'] ?>" /></span>
								<span class="bullet-text"><?php the_field('street_address', 'option'); ?><span class="city"><?php get_field('city_state_zip', 'option'); ?></span>
								</span>
							</div>
							<div class="item">
								<span class="bullet-img"><img src="<?php echo get_field('phone_icon', 'option')['url'] ?>" /></span>
								<span class="bullet-text"><?php the_field('office_number', 'option'); ?></span>
							</div>
							<div class="item">
								<span class="no-bullet-img"></span>
								<span class="bullet-text no-bullet"><?php the_field('fax_number', 'option'); ?></span>
							</div>
							<div class="item">
								<span class="no-bullet-img"></span>
								<span class="bullet-text no-bullet"><?php the_field('emergency_number', 'option'); ?></span>
							</div>
							<div class="item">
								<span class="bullet-img"><img src="<?php echo get_field('mail_icon', 'option')['url'] ?>" /></span>
								<span class="bullet-text mail-icon"><a href="<?php the_field('email_link', 'option'); ?>"><?php the_field('email_address', 'option'); ?></a></span>
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
