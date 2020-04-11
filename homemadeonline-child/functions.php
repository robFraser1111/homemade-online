<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
    $the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );





// Register a Stall Post Type
function wpdocs_codex_stall_init() {
    $labels = array(
        'name'                  => __( 'Stalls', 'textdomain' ),
        'singular_name'         => __( 'Stall', 'textdomain' ),
        'menu_name'             => __( 'Stalls', 'textdomain' ),
        'name_admin_bar'        => __( 'Stall', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Stall', 'textdomain' ),
        'new_item'              => __( 'New Stall', 'textdomain' ),
        'edit_item'             => __( 'Edit Stall', 'textdomain' ),
        'view_item'             => __( 'View Stall', 'textdomain' ),
        'all_items'             => __( 'All Stalls', 'textdomain' ),
        'search_items'          => __( 'Search Stalls', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Stalls:', 'textdomain' ),
        'not_found'             => __( 'No stalls found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No stalls found in Trash.', 'textdomain' ),
        'featured_image'        => __( 'Stall Cover Image', 'textdomain' ),
        'set_featured_image'    => __( 'Set cover image', 'textdomain' ),
        'remove_featured_image' => __( 'Remove cover image', 'textdomain' ),
        'use_featured_image'    => __( 'Use as cover image', 'textdomain' ),
        'archives'              => __( 'Stall archives', 'textdomain' ),
        'insert_into_item'      => __( 'Insert into stall', 'textdomain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this stall', 'textdomain' ),
        'filter_items_list'     => __( 'Filter stalls list', 'textdomain' ),
        'items_list_navigation' => __( 'Stalls list navigation', 'textdomain' ),
        'items_list'            => __( 'Stalls list', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'stall' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'taxonomies' 	     => array('post_tag'),
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-store',
        'supports'           => array( 'title', 'thumbnail' ),
    );
 
    register_post_type( 'stall', $args );
}
 
add_action( 'init', 'wpdocs_codex_stall_init' );






// Remove Ellipsis from Excerpts
function change_excerpt( $text )
{
	$pos = strrpos( $text, '[');
	if ($pos === false)
	{
		return $text;
	}
	
	return rtrim (substr($text, 0, $pos) );
}
add_filter('get_the_excerpt', 'change_excerpt');

remove_filter( 'the_excerpt', 'wpautop' );



// Custom Login Logo
function my_login_logo_one() { ?>

    <style type="text/css"> 
        body.login div#login h1 a {
        background-image: url(<?php echo get_site_url(); ?>/wp-content/uploads/homemade_online_favicon_01.png )!important;
        padding-bottom: 30px; 
        } 
    </style>

        <?php } 
add_action( 'login_enqueue_scripts', 'my_login_logo_one' );




// Theme settings page
include_once("theme-settings.php");