<?php

function enqueue_styles_child_theme() {

	$parent_style = 'master-template-woo-style';
	$child_style  = 'master-template-woo-child-style';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( $child_style, get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version'));
	wp_enqueue_style( 'fonts-css', get_stylesheet_directory_uri() . '/assets/fonts.css', '1.0' );
	wp_enqueue_style( 'lighbox-css', get_stylesheet_directory_uri() . '/assets/css/lightbox.min.css', '1.0' );
	wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/assets/css/slick.css', '4.1' );
	wp_enqueue_style( 'custom-style-css', get_stylesheet_directory_uri() . '/assets/css/custom-style.css', '1.0' );
	
	wp_enqueue_script( 'lighbox-js', get_stylesheet_directory_uri() . '/assets/js/lightbox.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'custom-child-js', get_stylesheet_directory_uri() . '/assets/js/custom-child.js', array('jquery'), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'enqueue_styles_child_theme' );


require "inc/custom-post-types/cpt-wpn-proyectos.php";
require "inc/custom-taxonomies/tax-lp-customer.php";
require "inc/shortcodes/sc-products-home.php";
require "inc/shortcodes/sc-projects-home.php";
require "inc/shortcodes/sc-vallas-fijas.php";
require "inc/shortcodes/sc-vallas-rotativas.php";
require "inc/shortcodes/sc-vallas-obras.php";
require "inc/shortcodes/sc-vallas-otras.php";
require "inc/shortcodes/sc-breadcrumbs.php";
require "inc/shortcodes/sc-subheader-shop.php";
require "inc/custom-woocommerce.php";

// add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

// function add_my_post_types_to_query( $query ) {
// 	if ( (is_single() || is_home() || is_category() ) && $query->is_main_query() )
// 		$query->set( 'post_type', array( 'post', 'product', 'Proyectos' ) );

// 	return $query;
// }

