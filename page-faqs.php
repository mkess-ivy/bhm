<?php
/**
 * Template Name: FAQs Page
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

		<section class="section-services section-wrapper">
			<div class="bhm-wrapper">
				<div class="section-title-wrapper initial-title">
					<div class="section-title-text"><?php the_field('section-faqs-title'); ?></div>
					<div class="section-title-bottom"></div>
				</div>
				<div class="section-body">
					<?php the_field('section-faqs-content'); ?>
				</div>

				<?php if( have_rows('single-faqs') ): ?>

					<div class="faqs-wrapper">

							<?php while( have_rows('single-faqs') ): the_row();

							// vars
							$question = get_sub_field('faq-question');
							$answer = get_sub_field('faq-answer');

							?>

							<div class="faq-single">
								<div class="faq-question">
									<?php echo $question; ?>
								</div>
								<div class="faq-answer">
									<?php echo $answer; ?>
								</div>
							</div>

							<?php endwhile; ?>

					</div>
				<?php endif; ?>
			</div>
		</section>

		<section class="section-resources reveal">
			<div class="bhm-wrapper">
				<div class="section-title-wrapper">
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
							<a class="bhm-btn-base" href="<?php echo the_field('schedule-link', 'option'); ?>" target="_blank"><div><?php the_field('schedule-form-link-title', 'option'); ?></div></a>
						</div>
					</div>
				</div>
				<div class="referral-wrapper">
					<div class="section-body">
						<?php the_field('resources-description-002', 'option'); ?>
					</div>
					<div class="forms-wrapper">
						<div class="forms-single">
							<a class="bhm-btn-base" href="<?php echo the_field('referral-form-link', 'option'); ?>" target="_blank"><div><?php the_field('referral-form-link-title', 'option'); ?></div></a>
						</div>
					</div>
				</div>

			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
