<?php
/**
 * Template Name: Events Page
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
			
		</div>

		<section class="section-testimonials">
			<div class="section-testimonials-bg" style="background-image: url(<?php the_field('services-testimonial-img'); ?>);">
				<div class="bhm-wrapper">
					<div class="testimonials-content"><?php the_field('services-testimonial-content'); ?></div>
					<div class="testimonials-readmore"><?php the_field('services-testimonial-readmore'); ?></div>
					<a class="bhm-btn-base" href="<?php echo the_field('services-testimonial-link'); ?>" target="_blank"><div><?php the_field('services-testimonial-link-title'); ?></div></a>
				</div>
			</div>
		</section>

		
		
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
