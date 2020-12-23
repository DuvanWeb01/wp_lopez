<?php
/**
 * Master Template Woo Theme Customizer
 *
 * @package Master_Template_Woo
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function master_template_woo_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'master_template_woo_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'master_template_woo_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'master_template_woo_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function master_template_woo_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function master_template_woo_customize_partial_blogdescription() {
	bloginfo( 'description' );
}


/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function master_template_woo_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'master_template_woo_pingback_header' );


//FORM COMMENTS


add_filter( 'comment_form_defaults', 'dcms_modify_fields_form' );

function dcms_modify_fields_form( $args ){

	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$author = '<input class="form-control" placeholder="'.__( 'Name' ) . ( $req ? ' *' : '' ).'" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30"' . $aria_req . ' />';
	$email = '<input class="form-control" placeholder="'.__( 'Email' ) . ( $req ? ' *' : '' ).'" id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) .'" size="30"' . $aria_req . ' />';
	$url = '<input class="form-control" placeholder="'.__( 'Website' ).'" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .'" size="30" />';
	$comment = '<textarea class="form-control" placeholder="'. _x( 'Comment', 'noun' ).'" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>';

	$args['fields']['author'] = $author;
	$args['fields']['email'] = $email;
	$args['fields']['url'] = $url;
	$args['comment_field'] = $comment;

	return $args;
}

add_filter ('comment_form_field_url', function ($url) {
	return;
  });
  

function button_submit_comment_func($button){
	$button = "<button type='submit' class='button-master principal-button normal-button'>Publicar comentario</button>";

	return $button;
}

add_filter('comment_form_submit_button', 'button_submit_comment_func');

function checkbox_cookies_func($input_check){
	$input_check  = "<div class ='form-check'>";
	$input_check .= "<input class='form-check-input' type='checkbox' name='wp-comment-cookies-consent' id='wp-comment-cookies-consent' value='yes'>";
	$input_check .= "<label class='form-check-label' for='wp-comment-cookies-consent'><p>He leído y acepto la <a href='#' class='text-link'>política de privacidad</a></p></label>";
	$input_check .= "</div>";

	return $input_check;
}

add_filter('comment_form_field_cookies', 'checkbox_cookies_func');


//Add Class Menu link
add_filter('nav_menu_link_attributes','clase_link', 10, 3);

function clase_link($atts, $item, $args){

	$class = 'nav-link';

	$atts['class'] = $class;

	return $atts;

}