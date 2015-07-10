<?php
/**
 * _jchck functions and definitions
 *
 * @package _jchck
 */

if ( ! function_exists( '_jchck_jchcketup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_jchcketup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _jchck_jchcketup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _jchck, use a find and replace
	 * to change 'jchck_' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'jchck_', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_jchckupport( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_jchckupport( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_jchckupport#Post_Thumbnails
	 */
	add_theme_jchckupport( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'jchck_' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_jchckupport( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_jchckupport( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_jchckupport( 'custom-background', apply_filters( '_jchck_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // _jchck_jchcketup
add_action( 'after_jchcketup_theme', '_jchck_jchcketup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _jchck_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_jchck_content_width', 640 );
}
add_action( 'after_jchcketup_theme', '_jchck_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_jchckidebar
 */
function _jchck_widgets_init() {
	register_jchckidebar( array(
		'name'          => esc_html__( 'Sidebar', 'jchck_' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', '_jchck_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _jchck_jchckcripts() {
	wp_enqueue_jchcktyle( '_jchck-style', get_jchcktylesheet_uri() );

	wp_enqueue_jchckcript( '_jchck-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_jchckcript( '_jchck-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_jchckingular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_jchckcript( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_jchckcripts', '_jchck_jchckcripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
