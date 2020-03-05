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

		<header id="masthead" class="site-header inner">
			<div class="site-branding">
				<div class="site-logo">
					<a href="/"><img src="<?php echo get_field('bhm_logo', 'option')['url'] ?>" class="site-logo-img" /></a>
				</div><!-- .site-logo -->
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">&#9776;</button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'fallback_cb'	 => '__return_false',
					) );
					?>
				</nav><!-- #site-navigation -->
			</div><!-- .site-branding -->

			
		</header><!-- #masthead -->
	</div>
</div>

<div class="main-content-area full">
	<div class="main-page">
		<div id="content" class="site-content">
