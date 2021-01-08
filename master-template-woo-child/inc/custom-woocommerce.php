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
	$product_url = get_home_url()."/?add-to-cart=" . $product->get_id();
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

// Orden campos Checkout
add_filter("woocommerce_checkout_fields", "custom_override_checkout_fields", 1);
function custom_override_checkout_fields($fields) {
	$fields['billing']['billing_email']['priority'] = 1;
    $fields['billing']['billing_first_name']['priority'] = 2;
	$fields['billing']['billing_last_name']['priority'] = 3;
	$fields['billing']['billing_state']['priority'] = 4;
	$fields['billing']['billing_city']['priority'] = 5;
	$fields['billing']['billing_address_1']['priority'] = 6;
	$fields['billing']['billing_address_2']['priority'] = 7;
	$fields['billing']['billing_phone']['priority'] = 8;
    $fields['billing']['billing_company']['priority'] = 9;
    $fields['billing']['billing_country']['priority'] = 10;
    
    
    
    $fields['billing']['billing_postcode']['priority'] = 11;
    
    
    return $fields;
}

add_filter( 'woocommerce_default_address_fields', 'custom_override_default_locale_fields' );
function custom_override_default_locale_fields( $fields ) {
	$fields['state']['priority'] = 4;
    $fields['city']['priority'] = 5;
    $fields['address_1']['priority'] = 6;
    $fields['address_2']['priority'] = 7;
    return $fields;
}

// Nuevo campo Checkout
add_filter('woocommerce_billing_fields', 'custom_woocommerce_billing_fields');
function custom_woocommerce_billing_fields($fields)
{

    $fields['billing_options'] = array(
        'label' => __('Número de documento', 'woocommerce'), // Add custom field label
        'placeholder' => _x('N° de documento*', 'placeholder', 'woocommerce'), // Add custom field placeholder
        'required' => true, // if field is required or not
        'clear' => false, // add clear or not
        'type' => 'text', // add field type
        'class' => array('my-css')    // add class name
    );

    return $fields;
}

function claserama_edit_checkout_fields($fields){
	unset($fields['billing']['billing_country']);
	unset($fields['billing']['billing_postcode']);
	unset($fields['billing']['billing_company']);
	return $fields;
}
add_filter('woocommerce_checkout_fields','claserama_edit_checkout_fields');

add_filter( 'woocommerce_checkout_fields' , 'override_billing_checkout_fields', 20, 1 );
function override_billing_checkout_fields( $fields ) {

	$fields['billing']['billing_email']['placeholder'] = 'Correo electrónico*';
	$fields['billing']['billing_first_name']['placeholder'] = 'Nombre*';
	$fields['billing']['billing_last_name']['placeholder'] = 'Apellidos*';
	$fields['billing']['billing_state']['placeholder'] = 'Departamento';
	$fields['billing']['billing_city']['placeholder'] = 'Ciudad / Municipio';
	$fields['billing']['billing_address_1']['placeholder'] = 'Dirección recidencia*';
	$fields['billing']['billing_address_2']['placeholder'] = 'Apto, casa, local';
	$fields['billing']['billing_phone']['placeholder'] = 'Celular o teléfono*';
	

	return $fields;
}

add_filter('woocommerce_checkout_fields', 'custom_checkout_billing_fields', 20, 1);
function custom_checkout_billing_fields($fields)
{
$domain = 'woocommerce';

// Cambiar tamaño campos

$fields['billing']['billing_state']['class'] = array('form-row-first'); //  50%
$fields['billing']['billing_city']['class'] = array('form-row-last'); //  50%

return $fields;
}

