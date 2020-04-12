<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://use.typekit.net/kjc0otc.css">
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" class="d-block d-sm-block d-md-none">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-md" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

		<?php if ( 'container' === $container ) : ?>
			<div class="container">
		<?php endif; ?>

			<a href="<?php echo get_site_url() ?>">
				<div id="menu-logo">
					<?php get_template_part( 'template-parts/logo', 'part' ); ?>
				</div>
			</a>
			<h1 class="navbar-brand mb-0">
				<a class="text-primary" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
					<b><?php bloginfo( 'name' ); ?></b>
				</a>
			</h1>

			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
				<div>
					<svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" viewBox="0 0 40 32">
						<g id="Menu" transform="translate(0 1)">
							<line id="Bottom" x2="40" transform="translate(0 30)" fill="none" stroke="#f67280" stroke-width="2"/>
							<line id="Middle" x2="40" transform="translate(0 15)" fill="none" stroke="#c06c84" stroke-width="2"/>
							<line id="Top" x2="40" fill="none" stroke="#6c5b7b" stroke-width="2"/>
						</g>
					</svg>
				</div>
			</button>
	

			<!-- The WordPress Menu goes here -->
			<?php wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarNavDropdown',
					'menu_class'      => 'navbar-nav ml-auto text-right top-menu',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 2,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			); ?>

			<?php if ( 'container' === $container ) : ?>
				</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
