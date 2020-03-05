<?php
/**
 * Template Name: Home Page
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

	<div id="primary" class="content-area home">
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
			<section class="bhm-welcome">
				<div class="section-title initial-title">
					<div class="section-title-text"><?php the_field('welcome-home-title'); ?></div>
					<div class="section-title-bottom"></div>
				</div>
				<div class="accred-logo"><img class="accred-logo-img" src="<?php echo esc_url(get_field('welcome-home-img')['url']); ?>" /></div>
				<div class="section-body">
				<?php the_field('welcome-home-content'); ?>
				</div>
			</section>
		</div>
		<section class="section-highlight">
			<div class="frow justify-start">
				<div class="highlight-img" style="background-image: url(<?php the_field('highlight-img'); ?>);"></div>
				<div class="highlight-content">
					<div class="highlight-title">
						<div class="highlight-title-text"><?php the_field('highlight-title'); ?></div>
						<div class="highlight-title-bottom"></div>
					</div>
					<div class="highlight-copy"><?php the_field('highlight-text'); ?></div>
				</div>
			</div>
		</section>
		<div class="bhm-wrapper">
			<section class="section-programs">
				<div class="section-title">
					<div class="section-title-text"><?php the_field('programs-title'); ?></div>
					<div class="section-title-bottom"></div>
				</div>
				<div class="programs-content section-body">
					<?php the_field('programs-content'); ?>
				</div>
				<div class="programs-grid">
					<?php if ( have_rows('home-programs-section') ): ?>
					<div class="frow justify-between">
						<?php while ( have_rows('home-programs-section') ): the_row();

							// vars

							$program_title = get_sub_field('program-single-title');
							$program_content = get_sub_field('program-single-content');

						?>
						<div class="programs-single">
							<div class="programs-single-title"><?php echo $program_title; ?></div>
							<div class="programs-single-content"><?php echo $program_content; ?></div>
						</div>
						<?php endwhile; ?>
					</div>
					<?php endif; ?>
				</div>
			</section>
		</div>
		
		<section class="section-testimonials">
			<div class="section-testimonials-bg" style="background-image: url(<?php the_field('home-testimonial-img'); ?>);">
				<div class="testimonials-content"><?php the_field('home-testimonial-msg');?></div>
				<a class="bhm-btn-base" href="<?php echo the_field('home-testimonial-link'); ?>" target="_blank"><div><?php the_field('home-testimonial-link-title'); ?></div></a>
			</div>
		</section>
		
		
		<section class="section-partners">
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
