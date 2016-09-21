<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Portfolio
 */

get_header();

	?>
	<div id="content" class="container homepage-content">

		<div class="container bio">

			<div class="col-md-6">
				<div class="left-text">
					<h1 class="left"><a href="bio">About Me</a></h1>
					<p class="info-text-left">Welcome! My name is Austin McCracken, I am a 23 year old software
						developer apprentice from Richmond, Virginia who is currently studying Computer Science
						 at Virginia Commonwealth University! I am extremely passionate about the
						computer science field and my work as a software developer.  I would love to show you a
						glimpse into my work over the past few years!</p>
				</div>
			</div>

			<div class="col-md-6">
				<a href="bio">
					<img class="img-circle" id="bio" src="/wp-content/themes/portfolio/Images/austin.jpg">
				</a>

			</div>
		</div>

		<div class="container maxx">

			<div class="col-md-6">
				<a href="maxx">
					<img class="img-circle" id="maxx" src="/wp-content/themes/portfolio/images/maxx3.png">
				</a>
			</div>

			<div class="col-md-6">
				<div class="right-text">
					<h1 class="right"><a href="maxx">Software Developer Apprentice</a></h1>
				</div>
			</div>

		</div>

		<div class="container vcu">
			<div class="col-md-6">
				<div class="left-text">
					<h1 class="left"><a href="vcu">Computer Science at VCU</a></h1>
				</div>
			</div>

			<div class="col-md-6">
				<a href="vcu">
					<img class="img-circle" id="vcu" src="/wp-content/themes/portfolio/Images/vcubig.JPG">
				</a>
			</div>
		</div>

	</div>

<?php

get_sidebar();
get_footer();
