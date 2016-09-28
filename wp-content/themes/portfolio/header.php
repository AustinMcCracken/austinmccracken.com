<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'portfolio' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div>
		<!-- .site-branding -->

<!--		<nav class="navbar navbar-default navbar-fixed-top">-->
<!---->
<!--			<div class="container-fluid">-->
<!--				-->
<!--				<div class="navbar-header">-->
<!--					<a class="navbar-brand" href="#">WebSiteName</a>-->
<!--					<img id="nav-maxx" src="/wp-content/themes/portfolio/images/maxx3.png"/>-->
<!--				</div>-->
<!---->
<!--				<ul class="nav navbar-nav">-->
<!--					<li class="nav-item" id="nav-button">-->
<!--						<a href="/">-->
<!--							<span class="home-span">Home</span>-->
<!--						</a>-->
<!--					</li>-->
<!--					<li class="nav-item" id="nav-button">-->
<!--						<a href="/">-->
<!--							<span>Projects</span>-->
<!--						</a>-->
<!--					</li>-->
<!--					<li class="nav-item" id="nav-button">-->
<!--						<a href="/">-->
<!--							<span>Computer Science</span>-->
<!--						</a>-->
<!--					</li>-->
<!--					<li class="nav-item" id="nav-button">-->
<!--						<a href="/">-->
<!--							<span>About me</span>-->
<!--						</a>-->
<!--					</li>-->
<!--				</ul>-->
<!--			</div>-->
<!--		</nav>-->

		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">

					<img class="logo" src="/wp-content/themes/portfolio/images/austin_mccracken_logo.png">
					<a class="navbar-brand" href="#">Austin McCracken</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="#">Home</a></li>
					<li><a href="#">Projects</a></li>
					<li><a href="#">VCU</a></li>
					<li><a href="#">About Me</a></li>
				</ul>
			</div>
		</nav>

	</header><!-- #masthead -->
