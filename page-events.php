<?php
/**
 * Template Name: Events Page
 *
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<div class="wrap-page">
				<section class="event-section">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();     get_template_part( 'template-parts/content', 'page' );
					 
						endwhile; // End of the loop.
						endif;
					 ?>
					
					<div class="bhm-wrapper">
						<div class="section-title">
							<div class="section-title-text"><?php the_field('section-events-title'); ?></div>
							<div class="section-title-bottom"></div>
						</div>
						
						<?php if( have_rows('single-event') ): 
							$i = 0;
							?>
							
							<div class="events-wrapper">
								<div class="frow justify-between">
									<?php while( have_rows('single-event') ): the_row(); 

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
				<section class="gallery-wrapper">
					
					<div class="frow justify-between">
						<?php query_posts(array('post_type' => 'post','orderby' => 'date'));
							
							if(have_posts()) : while(have_posts()) : the_post(); ?>
						
							<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
						
							<div class="gallery-img single" style="background-image:url('<?php echo $backgroundImg[0]; ?>'); ">
								<div class="frow centered-column">
									<div class="gallery-title"><?php the_title(); ?></div>
									<a href="<?php echo esc_url( get_permalink() ); ?>">
										<div class="gallery-cta">
											<?php esc_html_e( 'View Gallery', 'textdomain' ); ?>
										</div>
									</a>
								</div>
							</div>
						
						<?php endwhile; ?>
					</div>
						

					<?php endif; wp_reset_query(); ?>
				</section>
				<section class="section-testimonials">
					<div class="section-testimonials-bg" style="background-image: url(<?php the_field('events-testimonial-img'); ?>);">
						<div class="bhm-wrapper-testimonial">
							<div class="testimonials-content"><?php the_field('events-testimonial-content'); ?></div>
							<div class="testimonials-author">&ndash;&nbsp;<?php the_field('events-testimonial-author'); ?></div>
						</div>
					</div>
				</section>
				
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();