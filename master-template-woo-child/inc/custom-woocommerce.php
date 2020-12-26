<?php

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

// Subheader tienda

function hello_world(){
	echo do_shortcode( '[lp_subheader_shop]' );
}


add_action( 'woocommerce_before_main_content', 'hello_world' );