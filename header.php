<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package loulou
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>  <?php if ( is_page( 16 ) ) { ?> onload="initialize()" <?php } ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="side-header-top">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1><!--
			--><h2 class="site-description"><?php _e( 'Breakfast &#8226; Brunch &#8226; Lunch &#8226; Dinner', 'loulou' ); ?></h2>
			</div><!-- .site-branding --><!--
		
		--><div class="nav-social">
				<div class="bt-newsletter">
					<a href="#block-newsletter" class="button-news-fancy">Newsletter</a>
				</div><!--
				--><?php get_template_part( 'menu', 'social' ); ?>
				<!-- #social menu -->
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( '&#9776; Menu', 'loulou' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'loulou' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

		<div class="hack-border-white"></div>