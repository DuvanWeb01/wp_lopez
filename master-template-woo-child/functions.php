<?php

function enqueue_styles_child_theme() {

	$parent_style = 'master-template-woo-style';
	$child_style  = 'master-template-woo-child-style';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( $child_style, get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version'));
	wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/assets/css/slick.css', '4.1' );
	wp_enqueue_style( 'custom-style-css', get_stylesheet_directory_uri() . '/assets/css/custom-style.css', '1.0' );
	wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'custom-child-js', get_stylesheet_directory_uri() . '/assets/js/custom-child.js', array('jquery'), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'enqueue_styles_child_theme' );

// SHORTCODE PRODUCTS HOME
function products_home_shortcode() {
	$string = '<div class="lp-carousel">';
	$args = array(
		'post_type' => 'product',
		'posts_per_page' => 6,
	);
	$post_query = new WP_Query($args);
	if($post_query->have_posts() ) {
		while($post_query->have_posts() ) {
			$post_query->the_post();
			global $product;

			$price = $product->get_price_html();
			$limit_desc = get_the_excerpt();

			$string .= '<div class="lp-carousel__item">';
			$string .= '<div class="lp-carousel__card">';
			$string .= '<div class="lp-carousel__cont-img">';
			$string .= get_the_post_thumbnail($post = null, $size = "post-full", $attr = "class=lp-carousel__img img-fluid");
			$string .= '</div>';
			$string .= '<a href="'.get_the_permalink().'" class="lp-carousel__body-card">';
			$string .= '<a href="'.get_the_permalink().'" class="lp-carousel__info">';
			$string .= '<h3 class="lp-carousel__title">'.get_the_title().'</h3>';
			$string .= '<span class="lp-carousel__line"></span>';
			$string .= '<p class="lp-carousel__btn">VER MÁS</p>';
			$string .= '</a>';
			$string .= '</a>';
			$string .= '</div>';
			$string .= '</div>';
		}
	}

	$string .= '</div>';
	wp_reset_query ();

	return $string;
}
add_shortcode( 'products_home', 'products_home_shortcode' );

/*CPT PROYECTOS*/
if ( ! function_exists('wpn_proyectos') ) {

	// Register Custom Post Type
	function wpn_proyectos() {
	
		$labels = array(
			'name'                  => _x( 'Proyectos', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Proyecto', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Proyectos', 'text_domain' ),
			'name_admin_bar'        => __( 'Proyectos', 'text_domain' ),
			'archives'              => __( 'Archivo de proyectos', 'text_domain' ),
			'attributes'            => __( 'Atributos de proyectos', 'text_domain' ),
			'parent_item_colon'     => __( 'Proyecto padre', 'text_domain' ),
			'all_items'             => __( 'Todos los proyectos', 'text_domain' ),
			'add_new_item'          => __( 'Añadir nuevo proyecto', 'text_domain' ),
			'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
			'new_item'              => __( 'Nuevo proyecto', 'text_domain' ),
			'edit_item'             => __( 'Editar proyecto', 'text_domain' ),
			'update_item'           => __( 'Actualizar proyecto', 'text_domain' ),
			'view_item'             => __( 'Ver proyecto', 'text_domain' ),
			'view_items'            => __( 'Ver proyectos', 'text_domain' ),
			'search_items'          => __( 'Buscar proyecto', 'text_domain' ),
			'not_found'             => __( 'No encontrado', 'text_domain' ),
			'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
			'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
			'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
			'remove_featured_image' => __( 'Borrar imagen destacada', 'text_domain' ),
			'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
			'insert_into_item'      => __( 'Insertar en el proyecto', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Actualizar en este proyecto', 'text_domain' ),
			'items_list'            => __( 'Listado de proyectos', 'text_domain' ),
			'items_list_navigation' => __( 'Lista navegable de proyectos', 'text_domain' ),
			'filter_items_list'     => __( 'Filtro de lista de proyctos', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Proyecto', 'text_domain' ),
			'description'           => __( 'Entradas de proyectos', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-images-alt',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'Proyectos', $args );
	
	}
	add_action( 'init', 'wpn_proyectos', 0 );
	
	}

// SHORTCODE PROYECTS HOME
function proyects_home_shortcode() {
	$string = '<div class="lp-carousel-proyects">';
	$args = array(
		'post_type' => 'Proyectos',
		'posts_per_page' => 6,
	);
	$post_query = new WP_Query($args);
	if($post_query->have_posts() ) {
		while($post_query->have_posts() ) {
			$post_query->the_post();


			$string .= '<div class="lp-carousel-proyects__item">';
			$string .= get_the_post_thumbnail($post = null, $size = "post-full", $attr = "class=lp-carousel-proyects__img img-fluid");
			$string .= '</div>';
		}
	}

	$string .= '</div>';
	wp_reset_query ();

	return $string;
}
add_shortcode( 'proyects_home', 'proyects_home_shortcode' );

/*Carousel Tipos -  Fijas*/
function car_vallas_fijas_shortcode(){

	$string = '<div class="lp-tipos row">';
	$string .= '<div class="col-12 col-md-7 lp-tipos__car">';
	$string .= '<img src="http://localhost/lopez-publicidad/wp-content/uploads/2020/12/img-tipos-e1608239161215.png" alt="">';
	$string .= '<img src="http://localhost/lopez-publicidad/wp-content/uploads/2020/12/img-tipos-e1608239161215.png" alt="">';
	$string .= '</div>';
	$string .= '<div class="col-12 col-md-5 lp-tipos__cont">';
	$string .= '<h3 class="lp-tipos__title">VALLAS FIJAS</h3>';
	$string .= '<p class="lp-tipos__desc">Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>';
	$string .= '</div>';
	$string .= '</div>';

	return $string;
}
add_shortcode( 'car_vallas_fijas', 'car_vallas_fijas_shortcode' );

/*Carousel Tipos -  Rotativas*/
function car_vallas_rotativas_shortcode(){

	$string = '<div class="lp-tipos row">';
	$string .= '<div class="col-12 col-md-7 lp-tipos__car">';
	$string .= '<img src="http://localhost/lopez-publicidad/wp-content/uploads/2020/12/img-tipos-e1608239161215.png" alt="">';
	$string .= '<img src="http://localhost/lopez-publicidad/wp-content/uploads/2020/12/img-tipos-e1608239161215.png" alt="">';
	$string .= '</div>';
	$string .= '<div class="col-12 col-md-5 lp-tipos__cont">';
	$string .= '<h3 class="lp-tipos__title">VALLAS ROTATIVAS</h3>';
	$string .= '<p class="lp-tipos__desc">Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>';
	$string .= '</div>';
	$string .= '</div>';

	return $string;
}
add_shortcode( 'car_vallas_rotativas', 'car_vallas_rotativas_shortcode' );

/*Carousel Tipos -  Obras*/
function car_vallas_obras_shortcode(){

	$string = '<div class="lp-tipos row">';
	$string .= '<div class="col-12 col-md-7 lp-tipos__car">';
	$string .= '<img src="http://localhost/lopez-publicidad/wp-content/uploads/2020/12/img-tipos-e1608239161215.png" alt="">';
	$string .= '<img src="http://localhost/lopez-publicidad/wp-content/uploads/2020/12/img-tipos-e1608239161215.png" alt="">';
	$string .= '</div>';
	$string .= '<div class="col-12 col-md-5 lp-tipos__cont">';
	$string .= '<h3 class="lp-tipos__title">VALLAS OBRAS</h3>';
	$string .= '<p class="lp-tipos__desc">Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>';
	$string .= '</div>';
	$string .= '</div>';

	return $string;
}
add_shortcode( 'car_vallas_obras', 'car_vallas_obras_shortcode' );

/*Carousel Tipos -  Otras*/
function car_vallas_otras_shortcode(){

	$string = '<div class="lp-tipos row">';
	$string .= '<div class="col-12 col-md-7 lp-tipos__car">';
	$string .= '<img src="http://localhost/lopez-publicidad/wp-content/uploads/2020/12/img-tipos-e1608239161215.png" alt="">';
	$string .= '<img src="http://localhost/lopez-publicidad/wp-content/uploads/2020/12/img-tipos-e1608239161215.png" alt="">';
	$string .= '</div>';
	$string .= '<div class="col-12 col-md-5 lp-tipos__cont">';
	$string .= '<h3 class="lp-tipos__title">VALLAS OTRAS</h3>';
	$string .= '<p class="lp-tipos__desc">Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>';
	$string .= '</div>';
	$string .= '</div>';

	return $string;
}
add_shortcode( 'car_vallas_otras', 'car_vallas_otras_shortcode' );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );

add_action( 'after_setup_theme', 'martin_custom_shop_woocommmerce' );
function martin_custom_shop_woocommmerce() {

    remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
 
    remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );

    remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
   
}

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
add_action( 'woocommerce_after_shop_loop_item', 'add_description_and_text', 10 );
function add_description_and_text(){
	global $product;

	$name_product = $product->get_name();
	$description = $product->get_description();
	//$product_url = get_permalink( $product->get_id() );
	$product_url = "http://univercity.com.co/demo/rv/?add-to-cart=" . $product->get_id();
	$img_product = $product->get_image();
	$sku = $product->get_sku();


	
	$string = '';
    $string .= '<div class="lp-product">';
    $string .= $img_product;
   
    $string .= '<div class="lp-product__body">';
	$string .= '<h3 class="lp-product__title">'.$name_product.'</h3>';
	$string .= '<span class="lp-product__sku">Ref: '.$sku.'</span>';
	$string .= '<div class="lp-product__btn">';
	$string .= do_shortcode('[yith_wcwl_add_to_wishlist]');
	$string .= '<a href="'.$product_url.'" class="lp-product__cart"><i class="fas fa-cart-plus"></i></a>';
	$string .= '</div>';
	$string .= '<div class="lp-product__details">';
	$string .= '<a href="'.get_the_permalink().'" class="lp-product__btn-details button-master principal-button button-rounded normal-button">VER DETALLES</a>';
	$string .= '</div>';
	$string .= '</div>';
	
    $string .= '</div>';

	echo $string;
}

//Quitar pestaña de descripción
add_filter( 'woocommerce_product_tabs', 'ayudawp_remove_description_tab', 50 );
function ayudawp_remove_description_tab( $tabs ) {
    unset( $tabs['description'] );      	// quita la pestaña descripción
    unset( $tabs['reviews'] ); 			// quita la pestaña valoraciones
    unset( $tabs['additional_information'] );  	// quita la pestaña información adicional
    return $tabs;
}