<?php
/**
 * wprogers functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wprogers
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
function wprogers_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on wprogers, use a find and replace
		* to change 'wprogers' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'wprogers', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'wprogers' ),
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
			'wprogers_custom_background_args',
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
add_action( 'after_setup_theme', 'wprogers_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wprogers_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wprogers_content_width', 640 );
}
add_action( 'after_setup_theme', 'wprogers_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wprogers_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wprogers' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wprogers' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wprogers_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wprogers_scripts() {
	wp_enqueue_style( 'wprogers-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'wprogers-style', 'rtl', 'replace' );

	$theme_css_path = get_template_directory_uri() . '/assets/css/';

    // Elementor Core Styles
    wp_enqueue_style('elementor-icons', $theme_css_path . 'elementor-icons.min.css', array(), '5.31.0');
    wp_enqueue_style('elementor-frontend', $theme_css_path . 'frontend.min.css', array(), '3.24.2');
    wp_enqueue_style('swiper', $theme_css_path . 'swiper.min.css', array(), '8.4.5');
    wp_enqueue_style('e-swiper', $theme_css_path . 'e-swiper.min.css', array(), '3.24.2');
    
    // Elementor Widget Styles
    wp_enqueue_style('widget-image', $theme_css_path . 'widget-image.min.css', array(), '3.24.2');
    wp_enqueue_style('widget-text-editor', $theme_css_path . 'widget-text-editor.min.css', array(), '3.24.2');
    
    // Elementor Animation
    wp_enqueue_style('e-animation-fadeInUp', $theme_css_path . 'fadeInUp.min.css', array(), '3.24.2');

    // Elementor Page-Specific Styles
    wp_enqueue_style('elementor-post-5', $theme_css_path . 'post-5.css', array(), '1726653653');
    wp_enqueue_style('elementor-global', $theme_css_path . 'global.css', array(), '1726653653');
    wp_enqueue_style('elementor-post-8128', $theme_css_path . 'post-8128.css', array(), '1726661732');

    // Plugin Styles
    wp_enqueue_style('meks-instagram-widget', $theme_css_path . 'widget.css', array(), '6.7.2');
    wp_enqueue_style('daisy-core', $theme_css_path . 'daisy-core.css', array(), '6.7.2');

	// Theme and Plugin Styles
	wp_enqueue_style('bootstrap', $theme_css_path . 'bootstrap.min.css', array(), '1.0');
	wp_enqueue_style('icomoon-svg', $theme_css_path . 'icomoon-svg.css', array(), '1.0');
	wp_enqueue_style('animate', $theme_css_path . 'animate.min.css', array(), '1.0');
	wp_enqueue_style('magnific-popup', $theme_css_path . 'magnific-popup.css', array(), '1.0');
	wp_enqueue_style('daisy-default', $theme_css_path . 'default.css', array(), '1.0');
	wp_enqueue_style('daisy-style', $theme_css_path . 'style.css', array(), '1.0');

	// Enqueue Font Awesome Styles
    wp_enqueue_style('fontawesome', $theme_css_path . 'fontawesome.min.css', array(), '5.15.3');
    wp_enqueue_style('fa-solid', $theme_css_path . 'solid.min.css', array(), '5.15.3');
    wp_enqueue_style('fa-regular', $theme_css_path . 'regular.min.css', array(), '5.15.3');

	wp_enqueue_style('all-min-css', get_template_directory_uri() . '/assets/css/all.min.css', array(), '1.0.0', 'all');
	wp_enqueue_script( 'wprogers-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	$theme_js_path = get_template_directory_uri() . '/assets/js/';

    // Deregister default WordPress jQuery
    wp_deregister_script('jquery');
    wp_deregister_script('jquery-migrate');
	// Enqueue jQuery and jQuery Migrate
	wp_enqueue_script('jquery', $theme_js_path . 'jquery.min.js', array(), '3.7.1', true);
	wp_enqueue_script('jquery-migrate', $theme_js_path . 'jquery-migrate.min.js', array('jquery'), '3.4.1', true);

	// Enqueue JavaScript files
	wp_enqueue_script('fluent-form-submission', $theme_js_path . 'form-submission.js', array('jquery'), '5.2.2', true);
	wp_enqueue_script('daisy-core', $theme_js_path . 'daisy-core.js', array('jquery'), '6.7.2', true);
	wp_enqueue_script('imagesloaded', $theme_js_path . 'imagesloaded.min.js', array('jquery'), '5.0.0', true);
	wp_enqueue_script('bootstrap', $theme_js_path . 'bootstrap.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('appear', $theme_js_path . 'appear.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('swiper', $theme_js_path . 'swiper.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('wow', $theme_js_path . 'wow.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('magnific-popup', $theme_js_path . 'magnific-popup.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('js-cookie', $theme_js_path . 'js-cookie.js', array('jquery'), '1.0', true);
	wp_enqueue_script('style-switcher', $theme_js_path . 'style-switcher.js', array('jquery'), '1.0', true);
	wp_enqueue_script('waypoints', $theme_js_path . 'waypoints.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('counterup', $theme_js_path . 'jquery.counterup.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('theia-sticky', $theme_js_path . 'theia-sticky-sidebar.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('main', $theme_js_path . 'main.js', array('jquery'), '1.0', true);
	wp_enqueue_script('swiper-func', $theme_js_path . 'swiper-func.js', array('jquery'), '1.0', true);
	wp_enqueue_script('isotope-pkgd', $theme_js_path . 'isotope.pkgd.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('isotope-func', $theme_js_path . 'isotope-func.js', array('jquery'), '1.0', true);

	// Enqueue Elementor JS files
	wp_enqueue_script('elementor-webpack-runtime', $theme_js_path . 'webpack.runtime.min.js', array('jquery'), '3.24.2', true);
	wp_enqueue_script('elementor-frontend-modules', $theme_js_path . 'frontend-modules.min.js', array('jquery'), '3.24.2', true);
	wp_enqueue_script('elementor-frontend', $theme_js_path . 'frontend.min.js', array('jquery', 'elementor-frontend-modules'), '3.24.2', true);

	// Enqueue jQuery UI Core
	wp_enqueue_script('jquery-ui-core', includes_url('js/jquery/ui/core.min.js'), array('jquery'), '1.13.3', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wprogers_scripts' );

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


function register_custom_menu() {
    register_nav_menu('primary-menu', __('Primary Menu'));
    register_nav_menu('services-menu', __('Services Menu'));
    register_nav_menu('other-menu', __('Other Menu'));
}

add_action('after_setup_theme', 'register_custom_menu');
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<ul class="sub-menu">';
    }

    function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= '</ul>';
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = join(' ', array_filter($item->classes));
        $output .= '<li class="menu-item ' . esc_attr($classes) . '">';
        $output .= '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= '</li>';
    }
}
