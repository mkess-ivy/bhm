<?php
/**
 * Template Name: About Page
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
			<section class="bhm-about">
				

				<?php if( have_rows ('about-section') ):
					$i = 0;
					?>


					<div class="section-title initial-title">
						<div class="section-title-text"><?php the_field('about-section-title'); ?></div>
						<div class="section-title-bottom"></div>
					</div>
					
					<div class="frow justify-between">
						<?php while( have_rows ('about-section') ): the_row();

						$i++;

						if( $i > 3 )
						{
							break;
						}

						// vars
						$icon = get_sub_field('about-icon');
						$title = get_sub_field('about-title');
						$content = get_sub_field('about-content');

						?>

						<div class="bhm-about-single">
							<div class="bhm-icon">
								<img src="<?php echo $icon['url'] ?>" class="bhm-icon-size" />
							</div>
							<div class="bhm-about-single-title"><?php echo $title; ?></div>
							<div class="bhm-about-single-content"><?php echo $content; ?></div>
						</div>
						
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</section>

			<section class="bhm-values">
				<div class="section-title">
					<div class="section-title-text"><?php the_field('core-values-title'); ?></div>
					<div class="section-title-bottom"></div>
				</div>
				<div class="section-body core-values">
					<?php the_field('core-values-content'); ?>
				</div>
			</section>
		</div>

		<section class="section-testimonials">
			<div class="section-testimonials-bg" style="background-image: url(<?php the_field('about-testimonial-img'); ?>);">
				
					<div class="testimonials-content"><?php the_field('about-testimonial-content'); ?></div>
					<div class="testimonials-author"><?php the_field('about-testimonial-author'); ?></div>
				
			</div>
		</section>

		<section class="section-team">
			<div class="bhm-wrapper">
				<div class="section-title">
					<div class="section-title-text"><?php the_field('section-team-title'); ?></div>
					<div class="section-title-bottom"></div>
				</div>
				
				<?php if ( have_rows('team-member-section') ): ?>
				<div class="team-wrapper">
					<div class="frow justify-between">
						<?php while( have_rows('team-member-section') ): the_row();

							// vars
							$team_image = get_sub_field('team-member-img');
							$team_name = get_sub_field('team-member-name');
							$team_position = get_sub_field('team-member-position');

						?>

							<div class="team-single">
								<div class="team-image">
									<img src="<?php echo $team_image['url'] ?>" />
								</div>
								<div class="team-meta">
									<div class="team-name"><?php echo $team_name;?></div>
									<div class="team-position"><?php echo $team_position;?></div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
				<?php endif; ?>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
