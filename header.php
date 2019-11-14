<?php
/**
 * Theme Header
 *
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bhmhs001
 */


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="header-area full">
	<div class="main-page">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bhm' ); ?></a>

		<?php
			$bhm_logo = get_field('bhm_logo');
		?>
		<header id="masthead" class="site-header inner">
			<div class="site-branding">
				<div class="site-logo">
					<img src="<?php echo get_field('bhm_logo')['url'] ?>" />
				</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bhm' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'fallback_cb'	 => '__return_false',
				) );
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
	</div>
</div>

<div class="main-content-area full">
	<div class="main-page">
		<div id="content" class="site-content">
