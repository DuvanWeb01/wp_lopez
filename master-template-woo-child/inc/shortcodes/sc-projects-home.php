<?php

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