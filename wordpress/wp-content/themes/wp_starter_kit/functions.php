<?php
/**
 * wp-starter-kit functions and definitions
 *
 * @package wp-starter-kit
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'wp_starter_kit_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_starter_kit_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on wp-starter-kit, use a find and replace
	 * to change 'wp-starter-kit' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'wp-starter-kit', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'wp-starter-kit' ),
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
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wp_starter_kit_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // wp_starter_kit_setup
add_action( 'after_setup_theme', 'wp_starter_kit_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function wp_starter_kit_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'wp-starter-kit' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'wp_starter_kit_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wp_starter_kit_scripts() {

	wp_enqueue_style( 'h5bp', get_template_directory_uri() . '/styles/h5bp.css', false, '1.0', 'all' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/styles/main.css', false, '1.0', 'all' );
	wp_enqueue_style( 'components', get_template_directory_uri() . '/styles/components/components.css', false, '1.0', 'all' );


	wp_enqueue_script( 'wp-starter-kit-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'wp-starter-kit-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'wp-starter-kit-main', get_template_directory_uri() . '/js/main.js', array(), '20140703', true );

	wp_enqueue_script( 'wp-starter-kit-customizer', get_template_directory_uri() . '/js/customizer.js', array(), '20140703', true );


	wp_enqueue_style( 'wp-starter-kit-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_starter_kit_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
