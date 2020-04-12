<?php
/**
 * Single post partial template for Stalls
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<a href="<?php the_field('stalls_website'); ?>" target="_blank">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</a>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<div class="row">

			<div class="col-md-6 order-2 order-md-1">
				<?php the_field('stalls_description'); ?>
			</div>

			<div class="col-md-6 order-1 order-md-2 pb-2">
				<a href="<?php the_field('stalls_website'); ?>" target="_blank">
					<?php	/* Check for an image and use a placeholder if none */ 
						if (get_the_post_thumbnail( $post->ID, 'large' )) {
						echo get_the_post_thumbnail( $post->ID, 'large', array('class' => 'border border-secondary')); 
					} else { ?>
						<img class="border border-warning" src="<?php echo get_site_url(); ?>/wp-content/uploads/stall_placeholder_01.png" alt="Stall placeholder">
					<?php } ?>
				</a>
			</div>
			
		</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
