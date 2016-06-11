<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Shape
 * @since Shape 2.0
 */
?><!DOCTYPE html>
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'shape' ), max( $paged, $page ) );

	?></title>

	<!-- GOOGLE FONTS -->
	<link href='https://fonts.googleapis.com/css?family=Bree+Serif|Patua+One|Ultra|Maiden+Orange|Kreon:400,300,700|' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px|Abel' rel='stylesheet' type='text/css'>
	<!-- GOOGLE FONTS END -->
	
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title">
				<a href="<?php echo home_url( '/' ); ?>"><img class="mark" src="/arthurenglish/wp-content/themes/Arthur/images/arthurcrown.svg") no-repeat></a>
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</h1>
			

			<ul class="social">
				<li><a href="mailto:info@nihon-arthur.com"><span class="icon"><?php echo do_shortcode("[wp-svg-icons icon=mail-4 wrap=span]"); ?></span></a></li>
				<li><a href="https://www.facebook.com/arthur.cskysh"><span class="icon"><?php echo do_shortcode("[wp-svg-icons icon=facebook-3 wrap=span]"); ?></span></a></li>
				<li><a href="https://www.twitter.com"><span class="icon"><?php echo do_shortcode("[wp-svg-icons icon=twitter-3 wrap=span]"); ?></span></a></li>
			</ul>


			<nav role="navigation" class="site-navigation main-navigation">
				<h1 class="assistive-text"><?php _e( 'Menu', 'shape' ); ?></h1>
				<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'shape' ); ?>"><?php _e( 'Skip to content', 'shape' ); ?></a></div>

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- .site-navigation .main-navigation -->
		</hgroup>

		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) { ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
			</a>
		<?php } // if ( ! empty( $header_image ) ) ?>

		
	</header><!-- #masthead .site-header -->

<!-- 	METASLIDER -->

    
    <?php 
    echo do_shortcode("[metaslider id=6 restrict_to=home]");?>

	<div id="main" class="site-main">


