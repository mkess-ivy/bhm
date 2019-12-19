<?php
/**
 * Template Name: Front Page
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
			<section class="bhm-welcome">
				<div class="section-title">
					<div class="section-title-text"><?php the_field('welcome-home-title'); ?></div>
					<div class="section-title-bottom"></div>
				</div>
				<div class="accred-logo"><img src="<?php echo esc_url(get_field('welcome-home-img')['url']); ?>" /></div>
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
		<section class="section-programs">
			<div class="section-title">Our Programs</div>
			<div class="programs-content">
				BHMHS provides support to parents by partnering with several local nonprofits, after school programs, camps, recreation centers, and mentoring programs that focus on at-risk youth and adults.  We provide Psychiatric Rehabilitation Programs (PRP) that are designed to redirect and inspire our clients to devote their time and energy toward meaningful activities such as community service, conflict resolution, anti-bullying and positive social skills.
			</div>
			<div class="programs-grid">
				<div class="programs-single">
					<div class="programs-single-title">Adult PRP</div>
					<div class="programs-single-content">Serving adults that experience disorders, trauma, or depression.  Providing resources to strengthen families and communities</div>

				</div>
				<div class="programs-single">
					<div class="programs-single-title">Youth PRP</div>
					<div class="programs-single-content">Serving youth that experience behavioral issues related to family, environment or socio-economic factors</div>

				</div>
				<div class="programs-single">
					<div class="programs-single-title">Therapy</div>
					<div class="programs-single-content">Providing group and one-one therapy services related to family, mental health and communication skills building</div>

				</div>
				<div class="programs-single">
					<div class="programs-single-title">Medication Management</div>
					<div class="programs-single-content">Involves treatment planning, symptoms management and medication management</div>

				</div>
			</div>
		</section>
		<section class="section-testimonials">
			<div class="testimonials-content">70% of the adult population experience traumatic events at least once during their lifetime. Want to speak with someone on our team?</div>
			<a class="bhm-btn-base"><div>New Client Form</div></a>
		</section>
		<section class="section-partners">
			<div class="partners-content">
				<div class="partners-single">univ md logo</div>
				<div class="partners-single">univ md logo</div>
				<div class="partners-single">univ md logo</div>
				<div class="partners-single">univ md logo</div>
				<div class="partners-single">univ md logo</div>
				<div class="partners-single">univ md logo</div>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
