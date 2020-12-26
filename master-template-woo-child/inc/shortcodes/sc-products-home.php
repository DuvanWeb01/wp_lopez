<?php

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