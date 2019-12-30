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
				<div class="section-title">
					<div class="section-title-text"><?php the_field('section-contact-title'); ?></div>
					<div class="section-title-bottom"></div>
				</div>
				<div class="section-body">
					<?php the_field('section-contact-content'); ?>
				</div>
				<?php if( have_rows('contact-info') ): 
					$i = 0;
					?>
					
					<div class="events-wrapper">
						<div class="frow justify-between">
							<?php while( have_rows('contact-info') ): the_row(); 

							$i++;

							if( $i > 3 )
							{
								break;
							}

							// vars
							$image = get_sub_field('event-img');
							$title = get_sub_field('event-title');
							$date = get_sub_field('event-date');
							$time = get_sub_field('event-time');
							$address = get_sub_field('event-address');
							$description = get_sub_field('event-description');
							$link = get_sub_field('event-link');

							?>

							<div class="events-single">
								<div class="events-img">
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
								</div>
								<div class="events-meta">
									<div class="events-title"><?php echo $title; ?></div>
									<div class="events-date">
										<span class="date-icon">
											<img src="<?php echo get_field('event-calendar-icon')['url']; ?>" />
										</span>&nbsp;&nbsp;
										<?php echo $date; ?> @ <span class="time">
											<?php echo $time; ?>
										</span>
									</div>
									<div class="events-address">
										<span class="add-icon">
											<img src="<?php echo get_field('event-address-icon')['url']; ?>" />
										</span>&nbsp;&nbsp;
										<?php echo $address; ?>
									</div>
									<div class="events-description">
										<?php echo $description; ?>
									</div>
								</div>
								<a href="<?php echo $link; ?>">
									<div>RSVP</div>
								</a>
							</div>

							<?php endwhile; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</section>

		<section class="section-testimonials">
			<div class="section-testimonials-bg" style="background-image: url(<?php the_field('services-testimonial-img'); ?>);">
				<div class="bhm-wrapper-testimonial">
					<div class="testimonials-content"><?php the_field('services-testimonial-content'); ?></div>
					<div class="testimonials-readmore"><?php the_field('services-testimonial-readmore'); ?></div>
					<a class="bhm-btn-base" href="<?php echo the_field('services-testimonial-link'); ?>" target="_blank"><div><?php the_field('services-testimonial-link-title'); ?></div></a>
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
		
		
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
