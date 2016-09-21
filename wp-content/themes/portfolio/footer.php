<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php
		/**
		 * Created by PhpStorm.
		 * User: brian
		 * Date: 8/26/16
		 * Time: 12:54 PM
		 */
		?>

		<div id="footer">
			<?php wp_footer() ?>

			<div class="row">
				<div class="col-xs-4">
					<a href="https://www.linkedin.com/in/brian-simoni-4b7b8810a"><img src="/wp-content/themes/simoni/images/linkedin-icon.png"></a>
				</div>
				<div class="col-xs-4">
					<a href="https://github.com/briansimoni"><img src="/wp-content/themes/simoni/images/github.png"></a>
				</div>
				<div class="col-xs-4">
					<a href="https://www.facebook.com/brian.simoni.5"><img src="/wp-content/themes/simoni/images/fb.png"></a>
				</div>
			</div>

			<div class="row legal">
				<div class="col-md-12">
					<!-- hidden link -->
					<p><a href="/resume">2016 Austin McCracken Theme</a></p>
				</div>
			</div>
		</div><!-- #footer -->

		</div><!-- #wrapper -->

		<script>hljs.initHighlightingOnLoad();</script>
		</body>

		</html>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'portfolio' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'portfolio' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'portfolio' ), 'portfolio', '<a href="http://underscores.me/" rel="designer">Austin McCracken</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
