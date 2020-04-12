<div class="side-menu d-none d-sm-none d-md-block col-md-2 bg-light padding-large">

    <!-- Your site title as branding in the menu -->
    <a href="<?php echo get_site_url() ?>">
        <div id="menu-logo">
            <?php get_template_part( 'template-parts/logo', 'part' ); ?>
        </div>
    </a>
    <h1 class="navbar-brand mb-0">
        <a class="text-primary" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
            <?php bloginfo( 'name' ); ?>
        </a>
    </h1>
    <!-- end custom logo -->

    <?php wp_nav_menu(
        array(
            'theme_location'  => 'primary',
            'container_class' => 'pt-5',
            'container_id'    => 'navbarNavDropdown',
            'menu_class'      => 'navbar-nav ml-auto text-primary',
            'fallback_cb'     => '',
            'menu_id'         => 'main-menu',
            'depth'           => 2,
            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
        )
    ); ?>


    <!-- Social Icons -->
    <?php get_template_part( 'template-parts/social', 'part' ); ?>


</div>