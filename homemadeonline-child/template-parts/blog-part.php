<?php 

    $posts = get_posts(array(
        'numberposts'      	=> 500,
        'post_type'			=> 'post',
        'orderby'        	=> 'date'
    ));

    if( $posts ): ?>
        
        <?php foreach( $posts as $post ): 
            
            setup_postdata( $post ); ?>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 py-4 posts">
                <a href="<?php echo get_post_permalink(); ?>">

                    <?php	/* Check for an image and use a placeholder if none */ 
                        if (get_the_post_thumbnail( $post->ID )) {
                        echo get_the_post_thumbnail( $post->ID, 'thumbnail', array('class' => 'border border-secondary')); 
                    } else { ?>
                        <img class="border border-warning" src="<?php echo get_site_url(); ?>/wp-content/uploads/stall_placeholder_01.png" alt="Stall placeholder">
                    <?php } ?>
                </a>
                <h5>
                    <b class="text-secondary"><?php the_title(); ?></b>
                </h5>
                <p>
                    <?php the_excerpt(); ?> <a href="<?php echo get_post_permalink(); ?>"><b>...Read more</b></a>
                </p>
            </div>

        <?php endforeach; ?>
    
    <?php wp_reset_postdata(); ?>

<?php endif; ?>