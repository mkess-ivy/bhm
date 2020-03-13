<?php
/**
 * Template Name: Contact Page
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

		
		<section class="contact-info-section">
			<div class="bhm-wrapper">
				<div class="section-title initial-title reveal">
					<div class="section-title-text"><?php the_field('section-contact-title'); ?></div>
					<div class="section-title-bottom"></div>
				</div>
				<div class="section-body reveal">
					<?php the_field('section-contact-content'); ?>
				</div>
				<?php if( have_rows('contact-info') ): 
					$i = 0;
					?>
					
					<div class="contact-info-wrapper reveal">
						<div class="frow justify-between">
							<?php while( have_rows('contact-info') ): the_row(); 

							$i++;

							if( $i > 3 )
							{
								break;
							}

							// vars
							$icon = get_sub_field('contact-icon');
							$link = get_sub_field('contact-link');
							$description = get_sub_field('contact-text');
							

							?>

							<div class="contact-info-single">
								<div class="contact-icon">
									<a href="<?php echo $link; ?>"><img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt'] ?>" /></a>
								</div>
								<div class="contact-description">
									<?php echo $description; ?>
								</div>
							</div>

							<?php endwhile; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</section>

		<section class="section-testimonials reveal">
			<div class="section-testimonials-bg" style="background-image: url(<?php the_field('contact-testimonial-img'); ?>);">
				
					<div class="testimonials-content"><?php the_field('contact-testimonial-content'); ?></div>
					<div class="testimonials-readmore"><?php the_field('contact-testimonial-readmore'); ?></div>
					<a class="bhm-btn-base" href="<?php echo the_field('contact-testimonial-link'); ?>" target="_blank"><div><?php the_field('contact-testimonial-link-title'); ?></div></a>
				
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
		
		<section class="contact-details reveal">
			<div class="frow justify-between">
				<div class="contact-details-img" style="background-image:url(<?php the_field('contact-details-img'); ?>);"></div>
				<div class="contact-details-info">
					<div class="frow centered-column">
						<div class="contact-details-title"><?php the_field('contact-details-title'); ?></div>
						<div class="contact-details-add">
							<?php the_field('contact-details-address'); ?>
						</div>
						<a class="bhm-btn-base" href="<?php echo the_field('contact-details-link'); ?>" target="_blank">
							<div class="contact-details-cta">
								<?php the_field('contact-details-link-title'); ?>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
