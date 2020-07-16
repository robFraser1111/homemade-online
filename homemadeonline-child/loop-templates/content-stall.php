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

		<div class="row links">

			<div class="col-lg-6 order-2 order-lg-1">
				<?php the_field('stalls_description'); ?>

				<h5 class="pt-4" style="color: #344c7d;"><b>Contact:</b></h4>

				<!-- Links -->
				<?php if ( get_field('website') ) { ?>
					<div class="py-2 pr-3" style="display: inline-block;">
						<a href="<?php the_field('website'); ?>" target="_blank">
							<i class="fa fa-home" aria-hidden="true"></i>
						</a>
					</div>
				<?php } ?>
			

				<?php if ( get_field('email') ) { ?>
					<div class="py-2 pr-3" style="display: inline-block">
						<a href="mailto:<?php the_field('email'); ?>">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</a>
					</div>
				<?php } ?>

				<?php if ( get_field('phone') ) { ?>
					<div class="py-2 pr-3" style="display: inline-block">
						<a href="tel:<?php the_field('phone'); ?>">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</a>
					</div>
				<?php } ?>

				<?php if ( get_field('facebook') ) { ?>
					<div class="py-2 pr-3" style="display: inline-block">
						<a href="<?php the_field('facebook'); ?>" target="_blank">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
					</div>
				<?php } ?>

				<?php if ( get_field('instagram') ) { ?>
					<div class="py-2 pr-3" style="display: inline-block">
						<a href="<?php the_field('instagram'); ?>" target="_blank">
							<i class="fa fa-instagram" aria-hidden="true"></i>
						</a>
					</div>
				<?php } ?>

				<?php if ( get_field('pinterest') ) { ?>
					<div class="py-2 pr-3" style="display: inline-block">
						<a href="<?php the_field('pinterest'); ?>" target="_blank">
							<i class="fa fa-pinterest-p" aria-hidden="true"></i>
						</a>
					</div>
				<?php } ?>

			</div>

			<!-- Image -->
			<div class="col-lg-6 order-1 order-lg-2 pb-2">
				<?php	/* Check for an image and use a placeholder if none */ 
					if (get_the_post_thumbnail( $post->ID, 'large' )) {
					echo get_the_post_thumbnail( $post->ID, 'large', array('class' => 'border border-secondary')); 
				} else { ?>
					<img class="border border-warning" src="<?php echo get_site_url(); ?>/wp-content/uploads/stall_placeholder_01.png" alt="Stall placeholder">
				<?php } ?>
			</div>
			
		</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
