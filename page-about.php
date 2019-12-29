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
				<div class="section-title initial-title">
					<div class="section-title-text"><?php the_field('about-section-title'); ?></div>
					<div class="section-title-bottom"></div>
				</div>
				<div class="frow justify-between">
					<div class="bhm-about-single">
						<div class="bhm-icon">
							<img src="<?php echo get_field('mission-icon')['url'] ?>" class="bhm-icon-size" />
						</div>
						<div class="bhm-about-single-title"><?php the_field('mission-title'); ?></div>
						<div class="bhm-about-single-content"><?php the_field('mission-content'); ?></div>
					</div>
					<div class="bhm-about-single">
						<div class="bhm-icon">
							<img src="<?php echo get_field('vision-icon')['url'] ?>" class="bhm-icon-size" />
						</div>
						<div class="bhm-about-single-title"><?php the_field('vision-title'); ?></div>
						<div class="bhm-about-single-content"><?php the_field('vision-content'); ?></div>
					</div>
					<div class="bhm-about-single">
						<div class="bhm-icon">
							<img src="<?php echo get_field('philosophy-icon')['url'] ?>" class="bhm-icon-size" />
						</div>
						<div class="bhm-about-single-title"><?php the_field('philosophy-title'); ?></div>
						<div class="bhm-about-single-content"><?php the_field('philosophy-content'); ?></div>
					</div>
				</div>
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
				<div class="bhm-wrapper-testimonial">
					<div class="testimonials-content"><?php the_field('about-testimonial-content'); ?></div>
					<div class="testimonials-author"><?php the_field('about-testimonial-author'); ?></div>
				</div>
			</div>
		</section>

		<section class="section-team">
			<div class="bhm-wrapper">
				<div class="section-title">
					<div class="section-title-text"><?php the_field('section-team-title'); ?></div>
					<div class="section-title-bottom"></div>
				</div>
				<div class="team-wrapper">
					<div class="frow justify-between">
						<div class="team-single">
							<div class="team-image">
								<img src="<?php echo get_field('team-member1-img')['url'] ?>" />
							</div>
							<div class="team-meta">
								<div class="team-name"><?php the_field('team-member1-name');?></div>
								<div class="team-position"><?php the_field('team-member1-position');?></div>
							</div>
						</div>
						<div class="team-single">
							<div class="team-image">
								<img src="<?php echo get_field('team-member2-img')['url'] ?>" />
							</div>
							<div class="team-meta">
								<div class="team-name"><?php the_field('team-member2-name');?></div>
								<div class="team-position"><?php the_field('team-member2-position');?></div>
							</div>
						</div>
						<div class="team-single">
							<div class="team-image">
								<img src="<?php echo get_field('team-member3-img')['url'] ?>" />
							</div>
							<div class="team-meta">
								<div class="team-name"><?php the_field('team-member3-name');?></div>
								<div class="team-position"><?php the_field('team-member3-position');?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
