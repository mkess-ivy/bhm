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
			<section class="bhm-programs reveal">
				<div class="section-title initial-title">
					<div class="section-title-text"><?php the_field('section-programs-title'); ?></div>
					<div class="section-title-bottom"></div>
				</div>
				<div class="section-body">
					<?php the_field('section-programs-content'); ?>
				</div>
				<div class="programs-wrapper">
					<?php if ( have_rows('service-program-section') ): ?>

					<div class="frow justify-between">
						<?php while ( have_rows('service-program-section')): the_row();
							// vars
							$program_title = get_sub_field('program-single-title');
							$program_content = get_sub_field('program-single-content');
						?>
						<div class="programs-single">
							<div class="programs-icon">
								<img src="<?php echo get_field('programs-icon')['url'] ?>" />
							</div>
							<div class="programs-title"><?php echo $program_title; ?></div>
							<div class="programs-content"><?php echo $program_content;?></div>
						</div>
						<?php endwhile; ?>
					</div>
					<?php endif; ?>
				</div>
			</section>
		</div>

		<section class="section-testimonials">
			<div class="section-testimonials-bg" style="background-image: url(<?php the_field('services-cta-img'); ?>);">
				
					<div class="testimonials-content"><?php the_field('services-cta-content'); ?></div>
					<div class="testimonials-readmore"><?php the_field('services-cta-readmore'); ?></div>
					<a class="bhm-btn-base" href="<?php echo the_field('services-cta-link'); ?>" target="_blank"><div><?php the_field('services-cta-link-title'); ?></div></a>
				
			</div>
		</section>

		<section class="section-services reveal">
			<div class="bhm-wrapper">
				<div class="section-title">
					<div class="section-title-text"><?php the_field('section-services-title'); ?></div>
					<div class="section-title-bottom"></div>
				</div>
				<div class="section-body">
					<?php the_field('section-services-content'); ?>
				</div>
				<div class="services-wrapper">
					<?php if (have_rows('services-section')): ?>
					<div class="frow justify-between">
						<?php while (have_rows('services-section')): the_row();

						// vars
						$service_icon = get_sub_field('service-icon');
						$service_title = get_sub_field('service-title');
						$service_content = get_sub_field('service-content');

						?>
						<div class="services-single">
							<div class="services-icon">
								<img src="<?php echo $service_icon['url'] ?>" class="services-icon-size" />
							</div>
							<div class="services-title"><?php echo $service_title; ?></div>
							<div class="services-content"><?php echo $service_content ?></div>
						</div>
						<?php endwhile; ?>
					</div>
					<?php endif; ?>
				</div>
				<div class="eligibility-wrapper">
					<div class="section-title">
						<div class="section-title-text"><?php the_field('eligibility-title'); ?></div>
						<div class="section-title-bottom"></div>
					</div>
					<div class="section-body">
						<?php the_field('eligibility-description'); ?>
					</div>
					<?php if (have_rows('eligibility-list-items')): ?>
					<ul class="eligibility-list">
						<?php while (have_rows('eligibility-list-items')): the_row();
							// vars
							$item = get_sub_field('item');
						?>
						<li><span><img src="<?php echo get_field('eligibility-list-icon')['url'] ?>" /></span><?php echo $item; ?></li>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>
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
		<section class="section-resources reveal">
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
		
		<section class="section-partners reveal">
			<div class="bhm-wrapper">
				<div class="section-title">
					<div class="section-title-text"><?php the_field('partners-title', 'option'); ?></div>
					<div class="section-title-bottom"></div>
				</div>
				<div class="partners-content">
					
					<div class="frow justify-start">
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
