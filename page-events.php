<?php
/**
 * Template Name: Service Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bhmhs001
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		<div class="bhm-wrapper">
			<section class="bhm-programs">
				<div class="section-title initial-title">
					<div class="section-title-text"><?php the_field('section-programs-title'); ?></div>
					<div class="section-title-bottom"></div>
				</div>
				<div class="section-body">
					<?php the_field('section-programs-content'); ?>
				</div>
				<div class="programs-wrapper">
					<div class="frow justify-between">
						<div class="programs-single">
							<div class="programs-icon">
								<img src="<?php echo get_field('programs-icon')['url'] ?>" />
							</div>
							<div class="programs-title"><?php the_field('programs1-title'); ?></div>
							<div class="programs-content"><?php the_field('programs1-content');?></div>
						</div>
						<div class="programs-single">
							<div class="programs-icon">
								<img src="<?php echo get_field('programs-icon')['url'] ?>" />
							</div>
							<div class="programs-title"><?php the_field('programs2-title'); ?></div>
							<div class="programs-content"><?php the_field('programs2-content'); ?></div>
						</div>
						<div class="programs-single">
							<div class="programs-icon">
								<img src="<?php echo get_field('programs-icon')['url'] ?>" />
							</div>
							<div class="programs-title"><?php the_field('programs3-title'); ?></div>
							<div class="programs-content"><?php the_field('programs3-content'); ?></div>
						</div>
						<div class="programs-single">
							<div class="programs-icon">
								<img src="<?php echo get_field('programs-icon')['url'] ?>" />
							</div>
							<div class="programs-title"><?php the_field('programs4-title'); ?></div>
							<div class="programs-content"><?php the_field('programs4-content'); ?></div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<section class="section-testimonials">
			<div class="section-testimonials-bg" style="background-image: url(<?php the_field('services-testimonial-img'); ?>);">
				<div class="bhm-wrapper">
					<div class="testimonials-content"><?php the_field('services-testimonial-content'); ?></div>
					<div class="testimonials-readmore"><?php the_field('services-testimonial-readmore'); ?></div>
					<a class="bhm-btn-base" href="<?php echo the_field('services-testimonial-link'); ?>" target="_blank"><div><?php the_field('services-testimonial-link-title'); ?></div></a>
				</div>
			</div>
		</section>

		<section class="section-services">
			<div class="bhm-wrapper">
				<div class="section-title">
					<div class="section-title-text"><?php the_field('section-services-title'); ?></div>
					<div class="section-title-bottom"></div>
				</div>
				<div class="section-body">
					<?php the_field('section-services-content'); ?>
				</div>
				<div class="services-wrapper">
					<div class="frow justify-between">
						<div class="services-single">
							<div class="services-icon">
								<img src="<?php echo get_field('service1-icon')['url'] ?>" class="services-icon-size" />
							</div>
							<div class="services-title"><?php the_field('service1-title'); ?></div>
							<div class="services-content"><?php the_field('service1-content'); ?></div>
						</div>
						<div class="services-single">
							<div class="services-icon">
								<img src="<?php echo get_field('service2-icon')['url'] ?>" class="services-icon-size" />
							</div>
							<div class="services-title"><?php the_field('service2-title'); ?></div>
							<div class="services-content"><?php the_field('service2-content'); ?></div>
						</div>
						<div class="services-single">
							<div class="services-icon">
								<img src="<?php echo get_field('service3-icon')['url'] ?>" class="services-icon-size" />
							</div>
							<div class="services-title"><?php the_field('service3-title'); ?></div>
							<div class="services-content"><?php the_field('service3-content'); ?></div>
						</div>
					</div>
				</div>
				<div class="eligibility-wrapper">
					<div class="section-title">
						<div class="section-title-text"><?php the_field('eligibility-title'); ?></div>
						<div class="section-title-bottom"></div>
					</div>
					<div class="section-body">
						<?php the_field('eligibility-description'); ?>
					</div>
					<ul class="eligibility-list">
						<li><span><img src="<?php echo get_field('eligibility-list-icon')['url'] ?>" /></span><?php the_field('eligibility-list-item1'); ?></li>
						<li><span><img src="<?php echo get_field('eligibility-list-icon')['url'] ?>" /></span><?php the_field('eligibility-list-item2'); ?></li>
						<li><span><img src="<?php echo get_field('eligibility-list-icon')['url'] ?>" /></span><?php the_field('eligibility-list-item3'); ?></li>
						<li><span><img src="<?php echo get_field('eligibility-list-icon')['url'] ?>" /></span><?php the_field('eligibility-list-item4'); ?></li>
						<li><span><img src="<?php echo get_field('eligibility-list-icon')['url'] ?>" /></span><?php the_field('eligibility-list-item5'); ?></li>
						<li><span><img src="<?php echo get_field('eligibility-list-icon')['url'] ?>" /></span><?php the_field('eligibility-list-item6'); ?></li>
					</ul>
				</div>
			</div>	
		</section>
		<section class="section-highlight">
			<div class="frow justify-start">
				<div class="highlight-img client-highlight-img" style="background-image: url(<?php the_field('client-highlight-img'); ?>);"></div>
				<div class="highlight-content">
					<div class="highlight-title">
						<div class="highlight-title-text"><?php the_field('client-highlight-title'); ?></div>
						<div class="highlight-title-bottom"></div>
					</div>
					<div class="highlight-copy"><?php the_field('client-highlight-testimonial1'); ?>
						<div class="highlight-author">&ndash;&nbsp;<?php the_field('client-highlight-testimonial1-author'); ?></div>
					</div>
					
				</div>
			</div>
		</section>
		<section class="section-resources">
			<div class="bhm-wrapper">
				<div class="section-title">
					<div class="section-title-text"><?php the_field('resources-title', 'option'); ?></div>
					<div class="section-title-bottom"></div>
				</div>
				<div class="section-body">
					<?php the_field('resources-description', 'option'); ?>
				</div>
				<div class="forms-wrapper">
					<div class="frow justify-between">
						<div class="forms-single">
							<a class="bhm-btn-base" href="<?php echo the_field('client-form-link', 'option'); ?>" target="_blank"><div><?php the_field('client-form-link-title', 'option'); ?></div></a>
						</div>
						<div class="forms-single">
							<a class="bhm-btn-base" href="<?php echo the_field('referral-form-link', 'option'); ?>" target="_blank"><div><?php the_field('referral-form-link-title', 'option'); ?></div></a>
						</div>
						<div class="forms-single">
							<a class="bhm-btn-base" href="<?php echo the_field('schedule-link', 'option'); ?>" target="_blank"><div><?php the_field('schedule-form-link-title', 'option'); ?></div></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="section-partners">
			<div class="bhm-wrapper">
				<div class="section-title">
					<div class="section-title-text"><?php the_field('partners-title', 'option'); ?></div>
					<div class="section-title-bottom"></div>
				</div>
				<div class="partners-content">
					
					<div class="frow justify-between">
						<div class="partners-single"><img src="<?php echo get_field('partner-logo-one', 'option')['url'] ?>" class="partner-logo-img" /></div>
						<div class="partners-single"><img src="<?php echo get_field('partner-logo-two', 'option')['url'] ?>" class="partner-logo-img" /></div>
						<div class="partners-single"><img src="<?php echo get_field('partner-logo-three', 'option')['url'] ?>" class="partner-logo-img" /></div>
						<div class="partners-single"><img src="<?php echo get_field('partner-logo-four', 'option')['url'] ?>" class="partner-logo-img" /></div>
						<div class="partners-single"><img src="<?php echo get_field('partner-logo-five', 'option')['url'] ?>" class="partner-logo-img" /></div>
					</div>
				</div>
			</div>
		</section>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
