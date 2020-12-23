<?php
/**
 * Master Template Woo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Master_Template_Woo
 */

if ( ! function_exists( 'master_template_woo_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function master_template_woo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Master Template Woo, use a find and replace
		 * to change 'master-template-woo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'master-template-woo', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Menú principal', 'master-template-woo' ),
			'menu-2' => esc_html__( 'Menú secundario', 'master-template-woo' ),
			'menu-3' => esc_html__( 'Menú lateral', 'master-template-woo' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'master_template_woo_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		add_image_size( 'portada', 1920, 1280, true );
		
	}
endif;
add_action( 'after_setup_theme', 'master_template_woo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function master_template_woo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'master-template-woo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'master-template-woo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	if(class_exists('woocommerce')){
		register_sidebar( array(
			'name'          => __( 'Master Sidebar Woocommerce', 'master-template-woo' ),
			'id'            => 'master-sidebar-products',
			'description'   => __( 'Widget para página de productos', 'master-template-woo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	};

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'master-template-woo' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Añade este widget a tu pie de página.', 'master-template-woo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'master-template-woo' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Añade este widget a tu pie de página.', 'master-template-woo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	global $geniorama;

	if ($geniorama['columns-footer'] != '3') {
		register_sidebar( array(
			'name'          => __( 'Footer 3', 'master-template-woo' ),
			'id'            => 'sidebar-4',
			'description'   => __( 'Añade este widget a tu pie de página.', 'master-template-woo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}

	
	if ($geniorama['columns-footer'] == '2') {
		register_sidebar( array(
			'name'          => __( 'Footer 4', 'master-template-woo' ),
			'id'            => 'sidebar-5',
			'description'   => __( 'Añade este widget a tu pie de página.', 'master-template-woo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
}
add_action( 'widgets_init', 'master_template_woo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function master_template_woo_scripts() {
	wp_enqueue_style( 'master-template-woo-style', get_stylesheet_uri() );

	wp_enqueue_style( 'general-style', get_template_directory_uri() . '/assets/dist/css/main-styles.css', '1.1' );

	wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/assets/fontawesome-free-5.13.0-web/css/all.css', '5.3' );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/dist/js/bundle.js', array('jquery'), '1.1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'master_template_woo_scripts' );


//Add Redux Framework

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/theme_options/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/theme_options/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/theme_options/panel_custom/config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/theme_options/panel_custom/config.php' );
}



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Utils functions
 */
require get_template_directory() . '/inc/utils.php';

/**
 * Styles functions
 */
require get_template_directory() . '/inc/master-styles.php';


/**
 * Show Master Components
 */
require get_template_directory() . '/inc/master-components.php';

/**
 * Master Shortcodes
 */
require get_template_directory() . '/inc/master-shortcodes.php';


/**
 * Master Custom Fields
 */
require get_template_directory() . '/inc/master-custom-fields.php';

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
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

