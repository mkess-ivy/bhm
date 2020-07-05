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
						<section class="section-wrapper section-services">
							<div class="section-title-wrapper initial-title">
								<div class="section-title-text"><?php the_field('section-events-title'); ?></div>
								<div class="section-title-bottom"></div>
							</div>
							<div class="section-body reveal">
								<?php the_field('section-events-description'); ?>
							</div>
							<div class="calendar-wrapper">
								<img src="<?php echo esc_url(get_field('calendar-img')['url']); ?>" />
								<div class="section-body reveal">
								<?php the_field('calendar-description'); ?>
							</div>
							<div class="calendar-pdf-wrapper">
								<a href="<?php echo the_field('calendar-pdf-link'); ?>" target="_blank"><?php echo the_field('calendar-pdf-title'); ?></a>
							</div>
							<div class="calendar-link-wrapper">
								<a class="bhm-btn-base" href="<?php echo the_field('calendar-link'); ?>" target="_blank"><div><?php the_field('calendar-link-title'); ?></div></a>
							</div>
						</div>
					</div>
				</section>
				<!-- <section class="gallery-wrapper">
					<div class="section-title initial-title">
						<div class="section-title-text"><?php the_field('gallery-title'); ?></div>
						<div class="section-title-bottom"></div>
					</div>
					<div class="section-body reveal">
						<?php the_field('gallery-description'); ?>
					</div>
					<div class="section-wrapper">
						<div class="frow justify-between">
							<?php query_posts(array('post_type' => 'post','posts_per_page' => 3, 'orderby' => 'date'));
								
								if(have_posts()) : while(have_posts()) : the_post(); ?>
							
								<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
							
								<div class="gallery-img single" style="background-image:url('<?php echo $backgroundImg[0]; ?>'); ">
									<div class="frow centered-column">
										<div class="gallery-title"><?php the_title(); ?></div>
										<a class="gallery-cta-link" href="<?php echo esc_url( get_permalink() ); ?>">
											<div class="gallery-cta">
												<?php esc_html_e( 'View Gallery', 'textdomain' ); ?>
											</div>
										</a>
									</div>
								</div>
							
							<?php endwhile; ?>
						</div>
					</div>
						

					<?php endif; wp_reset_query(); ?>
				</section> -->
				<section class="section-testimonials">
					<div class="section-testimonials-bg" style="background-image: url(<?php echo esc_url(get_field('events-testimonial-img')['url']); ?>);">
						
							<div class="testimonials-content"><?php the_field('events-testimonial-content'); ?></div>
							<div class="testimonials-author">&ndash;&nbsp;<?php the_field('events-testimonial-author'); ?></div>
						
					</div>
				</section>
				
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();