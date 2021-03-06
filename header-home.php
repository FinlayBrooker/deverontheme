<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section for the home page and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blanktheme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="menu-bar">
		<div class="site-branding">
			<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/deveron-logo.svg"></a>
			<?php
			//the_custom_logo();
			?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i><i class="fas fa-times"></i><?php esc_html_e( '', 'blanktheme' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
</div>
<div class="filler"></div>
		<?php
			echo do_shortcode('[smartslider3 slider="2"]');
		?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
