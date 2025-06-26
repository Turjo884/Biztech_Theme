<?php
if ( ! function_exists( 'biztech_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Biztech 1.0
 */
function biztech_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on biztech, use a find and replace
	 * to change 'biztech' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'biztech', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded  tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	// set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
         'main-menu' => __( 'Main Menu',  'biztech' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		 'aside', 'image', 'video', 'quote', 'gallery', 'status', 'audio', 'chat'
	) );

}
endif; // biztech_setup
add_action( 'after_setup_theme', 'biztech_setup' );

// biztech css and js
function biztech_scripts() {
    // CSS
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '5.2.0', 'all' );

    wp_enqueue_style( 'color', get_template_directory_uri() . '/assets/css/color.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'elpath', get_template_directory_uri() . '/assets/css/elpath.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'font-awesome-all', get_template_directory_uri() . '/assets/css/font-awesome-all.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css', array(), '1.12.1', 'all' );

    wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'rtl', get_template_directory_uri() . '/assets/css/rtl.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'jquery-fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'page-title', get_template_directory_uri() . '/assets/css//elements-css/page-title.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'news', get_template_directory_uri() . '/assets/css//elements-css/news.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'blog', get_template_directory_uri() . '/assets/css//elements-css/blog.css', array(), '1.0.0', 'all' );

    wp_enqueue_style( 'style', get_stylesheet_uri() );


    // JS
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array( 'jquery' ), '1.0.0', true );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '5.2.0', true );

	wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl.js', array( 'jquery' ), '2.3.4', true );

	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array( 'jquery' ), '1.0.1', true );

	wp_enqueue_script( 'validation', get_template_directory_uri() . '/assets/js/validation.js', array( 'jquery' ), '1.14.0', true );

	wp_enqueue_script( 'jquery-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', array( 'jquery' ), '3.2.10', true );

	wp_enqueue_script( 'appear', get_template_directory_uri() . '/assets/js/appear.js', array( 'jquery' ), '1.0.0', true );

	wp_enqueue_script( 'scrollbar', get_template_directory_uri() . '/assets/js/scrollbar.js', array( 'jquery' ), '1.0.0', true );

	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.js', array( 'jquery' ), '2.1.1', true );

	wp_enqueue_script( 'jquery-nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array( 'jquery' ), '1.0', true );

	wp_enqueue_script( 'parallax-scroll', get_template_directory_uri() . '/assets/js/parallax-scroll.js', array( 'jquery' ), '1.0', true );

	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array( 'jquery' ), '1.11.4', true );

	wp_enqueue_script( 'jquery-bootstrap-touchspin', get_template_directory_uri() . '/assets/js/jquery.bootstrap-touchspin.js', array( 'jquery' ), '1.0.0', true );

	wp_enqueue_script( 'gmaps', get_template_directory_uri() . '/assets/js/gmaps.js', array( 'jquery' ), '1.0.0', true );

	wp_enqueue_script( 'map-helper', get_template_directory_uri() . '/assets/js/map-helper.js', array( 'jquery' ), '1.0.0', true );

	wp_enqueue_script( 'pagenav', get_template_directory_uri() . '/assets/js/pagenav.js', array( 'jquery' ), '3.0.0', true );

	wp_enqueue_script( 'product-filter', get_template_directory_uri() . '/assets/js/product-filter.js', array( 'jquery' ), '1.0.0', true );

	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'biztech_scripts' );

if ( class_exists( 'Kirki' ) ){
	include_once('inc/biztech-kirki.php');
}

include_once('inc/nav-walker.php');
include_once('inc/template-function.php');