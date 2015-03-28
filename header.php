<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Rookie
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'rookie' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-area">
			<div id="tertiary" class="site-widgets" role="complementary">
				<?php dynamic_sidebar( 'header-1' ); ?>
			</div>

			<?php if ( get_header_image() ) { ?>
			<div class="site-branding site-branding-custom-header" style="background-image: url(<?php header_image(); ?>);">
			<?php } else { ?>
			<div class="site-branding">
			<?php } ?>
				<?php
				$options = get_option( 'themeboy', array() );
				if ( array_key_exists( 'logo_url', $options ) && ! empty( $options['logo_url'] ) ) {
					$logo = $options['logo_url'];
					$logo = esc_url( $logo );
					?>
					<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
				<?php } ?>
				<?php if ( display_header_text() ) { ?>
				<hgroup>
					<h1 class="site-title" style="color: #<?php header_textcolor(); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description" style="color: #<?php header_textcolor(); ?>"><?php bloginfo( 'description' ); ?></h2>
				</hgroup>
				<?php } ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'rookie' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
