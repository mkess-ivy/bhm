<?php
/**
 * Template Name: Employee Portal Page
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

		<?php if( !post_password_required( $post )): ?>
			<section class="section-services section-wrapper">
				<div class="bhm-wrapper">
					<div class="section-title-wrapper initial-title">
						<div class="section-title-text"><?php the_field('section-ep-title'); ?></div>
						<div class="section-title-bottom"></div>
					</div>
					<div class="section-body">
						<?php the_field('section-ep-content'); ?>
					</div>

					<?php if( have_rows('single-ep') ): ?>

						<div class="ep-wrapper">
							<div class="frow justify-between">
								<?php while( have_rows('single-ep') ): the_row();

								// vars
								$title = get_sub_field('ep-title');
								$time = get_sub_field('ep-time');
								$description = get_sub_field('ep-description');
								$link = get_sub_field('ep-link');
								$link_title = get_sub_field('ep-link-title');
								$link002 = get_sub_field('ep-link-002');
								$link002_title = get_sub_field('ep-link-title-002');

								?>

								<div class="single-ep">
									<div class="ep-title">
										<?php echo $title; ?>
									</div>
									<div class="ep-meta">
										<div class="ep-time">
											<?php echo $time; ?>
										</div>
										<div class="ep-description">
											<?php echo $description; ?>
										</div>

										<div class="frow column-center">
											<a class="bhm-btn-base btn-space" href="<?php echo $link ?>" target="_blank">
												<div class="ep-link">
													<?php echo $link_title ?>
												</div>
											</a>

											<?php if( $link002 ): ?>

												<a class="bhm-btn-base btn-space" href="<?php echo $link002 ?>" target="_blank">
													<div class="ep-link">
														<?php echo $link002_title ?>
													</div>
												</a>
											<?php endif; ?>
										</div>

									</div>
								</div>

								<?php endwhile; ?>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</section>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
