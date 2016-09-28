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

		<div class="homepage-image">
			<div class="row home">
				<div class="col-md-12 homepage-text">
					<div class="text-container">
						<p class="homepage-title">Austin McCracken Portfolio</p>
						<hr class="title-line"></hr>
						<p class="homepage-description">Apprentice Software Developer</p>
					</div>
				</div>
			</div>
		</div>


		<div id="content" class="container homepage-content">
			<div class="container-fluid home-content">
				<div class="row">
					<div class="col-md-12">

					</div>
				</div>

				<div class="row homepage-content">
					<div class="col-md-4">
						<div class="container-fluid maxx">
							<h1 class="content-title"><a href="maxx">Projects</a></h1>
							<a href="maxx">
								<img class="img-thumbnail" id="maxx" src="/wp-content/themes/portfolio/images/maxx3.png">
							</a>
							<p class="detail">Over the past year, I have worked as an Apprentice Software Developer
								at MAXX Potential.  My umbrella of work has been very diverse and expands over several software
								disciplines including Mobile App Development, Web Development, Quality Assurance, and Testing.
							</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="container-fluid bio">
							<h1 class="content-title"><a href="bio">About Me</a></h1>
							<a href="bio">
								<img class="img-thumbnail" id="bio" src="/wp-content/themes/portfolio/images/austin-prof2.png">
							</a>
							<p class="detail">Welcome!  My name is Austin McCracken, I am a 23 year old software
								developer apprentice from Richmond, Virginia who is currently studying Computer Science
								at Virginia Commonwealth University.  I am extremely passionate about the
								computer science field and my work.
							</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="container-fluid vcu">
							<h1 class="content-title"><a href="vcu">Computer Science</a></h1>
							<a href="vcu">
								<img class="img-thumbnail" id="vcu" src="/wp-content/themes/portfolio/Images/vcubig.JPG">
							</a>
							<p class="detail">I am currently studying Computer Science at Virginia Commonwealth
								University.  The courses and projects that I have experienced throughout my undergraduate
								career have been essential to attaining the Software Development knowledge that I have
								today.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>



<?php

get_sidebar();
get_footer();
