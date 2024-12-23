<?php
/**
 * wp-architech functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp-architech
 */

if ( ! defined( 'time()' ) ) {
	// Replace the version number of the theme on each release.
	define( 'time()', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_architec_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on wp-architech, use a find and replace
		* to change 'wp-architech' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'wp-architech', get_template_directory() . '/languages' );

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
	

		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'wp-architech' ),
	    	'support_menu'  => __( 'Support Menu', 'wp-architech' ),
		) );



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
			'wp_architec_custom_background_args',
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
add_action( 'after_setup_theme', 'wp_architec_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_architec_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_architec_content_width', 640 );
}
add_action( 'after_setup_theme', 'wp_architec_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_architec_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wp-architech' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wp-architech' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wp_architec_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wp_architec_scripts() {
    // Enqueue styles



wp_enqueue_style('bootstrap_css',get_template_directory_uri().'/assets/css/bootstrap.css',array(),1.0);
wp_enqueue_style('switcher',get_template_directory_uri().'/assets/css/color-switcher-design.css',array(),1.0);
wp_enqueue_style('theme',get_template_directory_uri().'/assets/css/color-themes/default-theme.css',array(),1.0);
wp_enqueue_style('main-style',get_template_directory_uri().'/assets/css/style.css',array(),1.0);
wp_enqueue_style('responsive',get_template_directory_uri().'/assets/css/responsive.css',array(),1.0);




wp_enqueue_script('jquery',get_template_directory_uri().'/assets/js/jquery.js',array(),1.0,true);
wp_enqueue_script('popper',get_template_directory_uri().'/assets/js/popper.min.js',array(),1.0,true);
wp_enqueue_script('bootstrap_script',get_template_directory_uri().'/assets/js/bootstrap.min.js',array(),1.0,true);
wp_enqueue_script('fancybox',get_template_directory_uri().'/assets/js/jquery.fancybox.js',array(),1.0,true);
wp_enqueue_script('owl',get_template_directory_uri().'/assets/js/owl.js',array(),1.0,true);
wp_enqueue_script('wow',get_template_directory_uri().'/assets/js/wow.js',array(),1.0,true);
wp_enqueue_script('appear',get_template_directory_uri().'/assets/js/appear.js',array(),1.0,true);
wp_enqueue_script('mixitup',get_template_directory_uri().'/assets/js/mixitup.js',array(),1.0,true);
wp_enqueue_script('main-script',get_template_directory_uri().'/assets/js/script.js',array(),1.0,true);

if (is_singular() && comments_open() && get_option('thread_comments')) {
wp_enqueue_script('comment-reply');
}
}
add_action('wp_enqueue_scripts', 'wp_architec_scripts');

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

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme Options',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'theme-option',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

}

require_once('custom-post-type/project-post-type.php');