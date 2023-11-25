<?php
/**
 * acwebsite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package acwebsite
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function acwebsite_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on acwebsite, use a find and replace
		* to change 'acwebsite' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'acwebsite', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'acwebsite' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'acwebsite_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'acwebsite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function acwebsite_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'acwebsite_content_width', 640 );
}
add_action( 'after_setup_theme', 'acwebsite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function acwebsite_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'acwebsite' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'acwebsite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'acwebsite_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function acwebsite_scripts() {

    //STYLES
	wp_enqueue_style( 'acwebsite-style', get_stylesheet_uri(), array(), _S_VERSION );

	//Bootstrap css
    wp_enqueue_style( 'acwebsite-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION );

    //Line Icons css
    wp_enqueue_style( 'acwebsite-lineicons', get_template_directory_uri() . '/assets/css/LineIcons.css', array(), _S_VERSION );

    //Magnific Popup css
    wp_enqueue_style( 'acwebsite-magnificpopup.css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), _S_VERSION );

    //Default css
    wp_enqueue_style( 'acwebsite-main', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );
    wp_enqueue_style( 'acwebsite-default', get_template_directory_uri() . '/assets/css/default.css', array(), _S_VERSION );

	wp_style_add_data( 'acwebsite-style', 'rtl', 'replace' );


	//SCRIPTS
	wp_enqueue_script( 'acwebsite-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );

	//jquery js
    wp_enqueue_script( 'acwebsite-modernizer', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.6.0.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'acwebsite-jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js', array(), _S_VERSION, true );

    //Bootstrap js
    wp_enqueue_script( 'acwebsite-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'acwebsite-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), _S_VERSION, true );

    //Magnific Popup js
    wp_enqueue_script( 'acwebsite-magnificpopup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), _S_VERSION, true );

    //Parallax js
    wp_enqueue_script( 'acwebsite-Parallax', get_template_directory_uri() . '/assets/js/parallax.min.js', array(), _S_VERSION, true );

    //Counter Up js
    wp_enqueue_script( 'acwebsite-waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'acwebsite-counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), _S_VERSION, true );

    //Appear js
    wp_enqueue_script( 'acwebsite-appear', get_template_directory_uri() . '/assets/js/jquery.appear.min.js', array(), _S_VERSION, true );

    //Scrolling js
    wp_enqueue_script( 'acwebsite-scrolling', get_template_directory_uri() . '/assets/js/scrolling-nav.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'acwebsite-easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array(), _S_VERSION, true );

    //Main js
    wp_enqueue_script( 'acwebsite-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'acwebsite_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/**
 * Post type Portfolio.
 */
require get_template_directory() . '/post-types/post-portfolio.php';

/**
 * Post type Sertificates.
 */
require get_template_directory() . '/post-types/post-sertificates.php';


