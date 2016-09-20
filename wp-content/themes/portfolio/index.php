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
			<div class="col-md-12">
				<div>
					<a href="bio">
						<img class="img-circle" id="bio" src="/wp-content/themes/portfolio/images/austin.jpg">
					</a>
				</div>
				<p>Austin McCracken Bio</p>
			</div>
		</div>


		<div class="container maxx">
			<div class="col-md-12">
				<div>
					<a href="software">
						<img class="img-circle" id="maxx" src="/wp-content/themes/portfolio/images/MAXX2.jpg">
					</a>
				</div>
				<p>Junior Software Developer Apprentice at Maxx Potential</p>
			</div>
		</div>

		<div class="container vcu"
			<div class="col-md-12">
				<div>
					<a href="compsci">
						<img class="img-circle" id="vcu" src="/wp-content/themes/portfolio/images/vcubig.jpg">
					</a>
				</div>
				<p>Computer Science at Virginia Commonwealth University</p>
			</div>
		</div>

	</div>

<?php

get_sidebar();
get_footer();
