<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">


		<div class="row">
			<div class="col-md-2 padding-large bg-light d-none d-sm-none d-md-block">
				<!-- Footer Text -->
				<div class="side-menu-footer text-primary">
        			<?php get_template_part( 'template-parts/footer', 'part' ); ?>
    			</div>
			</div>
			<div class="col-md-10 d-none d-sm-none d-md-block">

			</div>
		</div>
	
	
		<div class="row">

			<div class="col-md-12 d-block d-sm-block d-md-none bg-primary">

				<footer class="site-footer" id="colophon">

					<div class="site-info text-light">

						<div class="row wrapper align-items-end">
							<div class="col-sm-6">
	
								<p class="text-light">Homemade Online Vic, 2020</p>
								<?php wp_nav_menu(
									array(
										'theme_location'  => 'primary',
										'container_class' => 'footer-sitemap',
										'container_id'    => '',
										'menu_class'      => 'navbar-nav ml-auto text-left bottom-menu',
										'fallback_cb'     => '',
										'menu_id'         => 'main-menu',
										'depth'           => 2,
										'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
									)
								); ?>
	
							</div>
							<div class="col-sm-6">
	
								<!-- Footer Text -->
								<?php get_template_part( 'template-parts/footer', 'part' ); ?>
	
								<!-- Social Icons -->
								<?php get_template_part( 'template-parts/social', 'part' ); ?>
							
							</div>
						</div>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

