<?php
if ( ! function_exists( 'mage_hd_theme_setup' ) ) :

function mage_hd_theme_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'mage_hd_theme', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    //Support custom logo
    add_theme_support( 'custom-logo' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'mage_hd_theme' ),
        'social'  => __( 'Social Links Menu', 'mage_hd_theme' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // mage_hd_theme_setup

add_action( 'after_setup_theme', 'mage_hd_theme_setup' );


if ( ! function_exists( 'mage_hd_theme_init' ) ) :

function mage_hd_theme_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // mage_hd_theme_setup

add_action( 'init', 'mage_hd_theme_init' );


if ( ! function_exists( 'mage_hd_theme_custom_image_sizes_names' ) ) :

function mage_hd_theme_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'mage_hd_theme_custom_image_sizes_names' );
endif;// mage_hd_theme_custom_image_sizes_names



if ( ! function_exists( 'mage_hd_theme_widgets_init' ) ) :

function mage_hd_theme_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'mage_hd_theme_widgets_init' );
endif;// mage_hd_theme_widgets_init



if ( ! function_exists( 'mage_hd_theme_customize_register' ) ) :

function mage_hd_theme_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'mage_hd_theme_customize_register' );
endif;// mage_hd_theme_customize_register


if ( ! function_exists( 'mage_hd_theme_enqueue_scripts' ) ) :
    function mage_hd_theme_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'mage_hd_theme-script' );
    wp_enqueue_script( 'mage_hd_theme-script', 'https://cdn.tailwindcss.com/', [], '1.0.0', false);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'mage_hd_theme-tailwind' );
    wp_enqueue_style( 'mage_hd_theme-tailwind', 'https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css', [], '1.0.0', 'all');

    wp_deregister_style( 'mage_hd_theme-style' );
    wp_enqueue_style( 'mage_hd_theme-style', 'https://fonts.googleapis.com/css2?family=Audiowide&display=swap', [], '1.0.0', 'all');

    wp_deregister_style( 'mage_hd_theme-style-1' );
    wp_enqueue_style( 'mage_hd_theme-style-1', 'https://fonts.googleapis.com/css2?family=Questrial&display=swap', [], '1.0.0', 'all');

    wp_deregister_style( 'mage_hd_theme-style-2' );
    wp_enqueue_style( 'mage_hd_theme-style-2', 'https://fonts.googleapis.com/css2?family=Campton:wght@400&display=swap', [], '1.0.0', 'all');

    wp_deregister_style( 'mage_hd_theme-theme' );
    wp_enqueue_style( 'mage_hd_theme-theme', get_template_directory_uri() . '/theme.css', [], '1.0.0', 'all');

    wp_deregister_style( 'mage_hd_theme-style-3' );
    wp_enqueue_style( 'mage_hd_theme-style-3', get_bloginfo('stylesheet_url'), [], '1.0.0', 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'mage_hd_theme_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
if( !class_exists( 'PG_Helper_v2' ) ) { require_once "inc/wp_pg_helpers.php"; }
if( !class_exists( 'PG_Smart_Walker_Nav_Menu' ) ) { require_once "inc/wp_smart_navwalker.php"; }

    /* Pinegrow generated Include Resources End */
?>