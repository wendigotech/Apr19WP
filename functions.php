<?php
if ( ! function_exists( 'Apr19_setup' ) ) :

function Apr19_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'Apr19', get_template_directory() . '/languages' );
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
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'Apr19' ),
        'social'  => __( 'Social Links Menu', 'Apr19' ),
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
endif; // Apr19_setup

add_action( 'after_setup_theme', 'Apr19_setup' );


if ( ! function_exists( 'Apr19_init' ) ) :

function Apr19_init() {

    
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
endif; // Apr19_setup

add_action( 'init', 'Apr19_init' );


if ( ! function_exists( 'Apr19_custom_image_sizes_names' ) ) :

function Apr19_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'Apr19_custom_image_sizes_names' );
endif;// Apr19_custom_image_sizes_names



if ( ! function_exists( 'Apr19_widgets_init' ) ) :

function Apr19_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    register_sidebar( array(
        'name' => __( 'Sidebar1', 'Apr19' ),
        'id' => 'sidebar1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'Apr19_widgets_init' );
endif;// Apr19_widgets_init



if ( ! function_exists( 'Apr19_customize_register' ) ) :

function Apr19_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'footer_section', array(
        'title' => __( 'Footer Controls', 'Apr19' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'footer_img1_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_img1_link', array(
        'label' => __( 'Image 1 Link', 'Apr19' ),
        'type' => 'url',
        'section' => 'footer_section'
    ));

    $wp_customize->add_setting( 'footer_img1', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_img1', array(
        'label' => __( 'Image 1', 'Apr19' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'footer_section'
    ) ) );

    $wp_customize->add_setting( 'footer_img2_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_img2_link', array(
        'label' => __( 'Image 2 Link', 'Apr19' ),
        'type' => 'url',
        'section' => 'footer_section'
    ));

    $wp_customize->add_setting( 'footer_img2', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_img2', array(
        'label' => __( 'Image 2', 'Apr19' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'footer_section'
    ) ) );

    $wp_customize->add_setting( 'footer_img3_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_img3_link', array(
        'label' => __( 'Image 3 Link', 'Apr19' ),
        'type' => 'url',
        'section' => 'footer_section'
    ));

    $wp_customize->add_setting( 'footer_img3', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_img3', array(
        'label' => __( 'Image 3', 'Apr19' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'footer_section'
    ) ) );

    $wp_customize->add_setting( 'footer_text', array(
        'type' => 'theme_mod',
        'default' => __( '&copy; 2018 Florence, all rights reserved', 'Apr19' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer_text', array(
        'label' => __( 'Footer Text', 'Apr19' ),
        'type' => 'textarea',
        'section' => 'footer_section'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'Apr19_customize_register' );
endif;// Apr19_customize_register


if ( ! function_exists( 'Apr19_enqueue_scripts' ) ) :
    function Apr19_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'scrollreveal' );
    wp_enqueue_script( 'scrollreveal', 'https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js', false, null, false);

    wp_deregister_script( 'main' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/js/main.min.js', false, null, true);

    wp_deregister_script( 'nav' );
    wp_enqueue_script( 'nav', get_template_directory_uri() . '/src/js/nav.min.js', false, null, true);

    wp_enqueue_script( 'jquery' );
    wp_deregister_script( 'popper' );
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'https://fonts.googleapis.com/css?family=Heebo:400,400i,700|Titillium+Web:600', false, null, 'all');

    wp_deregister_style( 'all' );
    wp_enqueue_style( 'all', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/css/style.css', false, null, 'all');

    wp_deregister_style( 'custom' );
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/custom.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'Apr19_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/wp_pg_helpers.php";
require_once "inc/wp_smart_navwalker.php";

    /* Pinegrow generated Include Resources End */
?>