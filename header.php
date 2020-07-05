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
	<meta name="author" content="SVNCRWNS" />
  	<meta name="description" content="BHMHS is a behavioral health organization serving the state of Maryland.  We provide PRP, employment programs, and DUI resources." />
	<meta name="keywords" content="youth mental health, adult mental health, baltimore, medication management, driving under influence, employment programs, Maryland Behavioral Health, Baltimore PRP, best PRP in Maryland" />
	<!-- Meta OG Tags -->
	<meta name="og:title" content="Beautiful Hearts and Minds Health Services" />
	<meta name="og:title" content="Behavioral Health Organization in Maryland" />
	<meta property="og:url" content="http://www.bhmhs.org" />
	<meta property="og:image" content="http://www.bhmhs.org/wp-content/uploads/2020/07/og-img.png" />

  <link rel="shortcut icon" href="http://www.bhmhs.org/wp-content/uploads/2020/07/favicon.jpg" type="image/png" />  

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
		<button class="hamburger hamburger--squeeze" type="button">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>
		<div class="overlay overlay-data">

			<div class="overlay_container clear">
				<nav>
					
						<a href="/" alt="Home"><img class="overlay-logo" src="<?php echo get_field('overlay_logo', 'option')['url'] ?>" /></a>
					
						<?php
							wp_nav_menu( array(
								'theme_location' => 'mobile-menu',
								'menu_id'        => 'primary-menu',
							) );
						?>
					</div>
				</nav>
			</div>

		</div>
	</div>
</div>

<div class="main-content-area full">
	<div class="main-page">
		<div id="content" class="site-content">
