<?php
/**
 * Template Name: Homemade Online - Default
 *
 * Default Template for Homemade Online
 *
 * @package understrap
 */

 // Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row h-100">

			<!-- Side menu -->
			<?php get_template_part( 'template-parts/side-menu' ); ?>


			<div class="col-sm-12 col-md-10 padding-large">
				<main class="site-main" id="main">


					<div class="row">

						<div class="col-12">
							<?php while ( have_posts() ) : the_post(); ?>

								<?php get_template_part( 'loop-templates/content', 'page' ); ?>

							<?php endwhile; // end of the loop. ?>
						</div>

						<div class="col-sm-12 col-md-4">
							<?php
								// Filter
							?>
						</div>

					</div>

				</main>
			</div>
			
		</div>

	</div>

</div>

<?php get_footer();