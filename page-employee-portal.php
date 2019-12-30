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
		
		<section class="contact-info-section">
			<div class="bhm-wrapper">
				<div class="section-title initial-title">
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
									<a href="<?php echo $link ?>" target="_blank">
										<div class="ep-link">
											<?php echo $link_title ?>
										</div>
									</a>
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
