<!-- Social Icons -->
<div class="social-icons pt-5 links">

    <?php if ( get_option('facebook_url') ) { ?>
        <div class="pr-2 py-2">
            <a href="<?php echo get_option('facebook_url'); ?>" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
        </div>
    <?php } ?>

    <?php if ( get_option('instagram_url') ) { ?>
        <div class="pr-2 py-2">
            <a href="<?php echo get_option('instagram_url'); ?>" target="_blank">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
        </div>
    <?php } ?>

    <?php if ( get_option('pinterest_url') ) { ?>
        <div class="pr-2 py-2">
            <a href="<?php echo get_option('pinterest_url'); ?>" target="_blank">
                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
            </a>
        </div>
    <?php } ?>

</div>