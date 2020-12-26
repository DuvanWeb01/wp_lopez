<?php

/*Carousel Tipos -  Fijas*/
function car_vallas_fijas_shortcode(){

	$string = '<div class="lp-tipos row">';
	$string .= '<div class="col-12 col-md-7 lp-tipos__car">';
	$string .= '<img src="'.get_home_url().'/wp-content/uploads/2020/12/img-tipos-e1608239161215.png" alt="">';
	$string .= '<img src="'.get_home_url().'/wp-content/uploads/2020/12/img-tipos-e1608239161215.png" alt="">';
	$string .= '</div>';
	$string .= '<div class="col-12 col-md-5 lp-tipos__cont">';
	$string .= '<h3 class="lp-tipos__title">VALLAS FIJAS</h3>';
	$string .= '<p class="lp-tipos__desc">Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>';
	$string .= '</div>';
	$string .= '</div>';

	return $string;
}
add_shortcode( 'car_vallas_fijas', 'car_vallas_fijas_shortcode' );