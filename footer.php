<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank_theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-3-grid footer-grid">
			<div class="first-item grid-item-align grid-item-justify">
				<a href="/contact"><button>Get in Touch</button></a>
			</div>
			<div class="second-item grid-item-align grid-item-justify">
				<p class="footer-text">British Canoeing Quality Mark Provider</p>
				<a href="https://www.canoescotland.org/"><img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/scottish-canoe-association-logo.png"></a>
			</div>
			<div class="third-item grid-item-align grid-item-justify">
				<a href="https://www.facebook.com/deveronpaddlers/"><button>Find us on Facebook</button></a>
			</div>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'blanktheme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf( esc_html__( 'Proudly powered by %s', 'blanktheme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> <a href="/contact">Contact Us</a>    |    We Use Cookies     |     gdpr Copyright  ©  Deveron Paddlers 2019  </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'blanktheme' ), 'blanktheme', '<a href="http://underscores.me/">Finlay Brooker</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

	</body>
	</html>
