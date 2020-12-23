<?php

// Shortcode Pop Up
function popup_master_func( $atts ) {
	global $geniorama;

	if ($geniorama['on-off-popup']) {
		// Attributes
		$atts = shortcode_atts(
			array(
				'titulo' 		=> '',
				'texto' 		=> '',
				'imagen'		=> '',
				'formulario' 	=> ''
			),
			$atts,
			'popup_master'
		);

		$titulo_popup = $geniorama["title-popup"];
		$texto_popup = $geniorama["body-text-popup"];
		if ($geniorama["shortcode-form"]) {
			$formulario_popup = $geniorama["shortcode-form"];
		}
		$imagen_popup = $geniorama["img-popup"]['url'];
		$estilo_popup = $geniorama["popup-style"];

		if ($estilo_popup == 3) {
			$class_width = "width-50";
		} else {
			$class_width = "width-60";
		}

		$content = '<div class="popup-master '.$class_width.'" id="popup-master">';
		$content .= '<button class="close-popup button-icon link-half-rounded principal-button small-button"><i class="fas fa-times"></i></button>';
		switch ($estilo_popup) {
			case 1: //IMAGE RIGHT
				$content .= '<div class="row justify-content-center align-items-center popup-image-right">';
				//Col content
				$content .= '<div class="col-12 col-md-6 p-0 text-center">';
				$content .= '<div class="content-popup">';
				$content .= '<h3>'.$titulo_popup.'</h3>';
				$content .= '<p>'.$texto_popup.'</p>';
				if(isset($formulario_popup)){
				   $content .=  do_shortcode($formulario_popup);
				}
				$content .= '</div>';
				$content .= '</div>';
				//Col image
				$content .= '<div class="col-12 col-md-6 p-0">';
				$content .= '<div class="image-popup">';
				$content .= '<img src='.$imagen_popup.' class="img-popup">';
				$content .= '</div>';
				$content .= '</div>';
				//End row
				$content .= '</div>';
				break;

			case 2:
				$content .= '<div class="row justify-content-center align-items-center popup-image-left">';
				//Col image
				$content .= '<div class="col-12 col-md-6 p-0">';
				$content .= '<div class="image-popup">';
				$content .= '<img src='.$imagen_popup.' class="img-popup">';
				$content .= '</div>';
				$content .= '</div>';

				//Col content
				$content .= '<div class="col-12 col-md-6 p-0 text-center">';
				$content .= '<div class="content-popup">';
				$content .= '<h3>'.$titulo_popup.'</h3>';
				$content .= '<p>'.$texto_popup.'</p>';
				if(isset($formulario_popup)){
					$content .=  do_shortcode($formulario_popup);
				 }
				$content .= '</div>';
				$content .= '</div>';
				//End row
				$content .= '</div>';
				break;
			
			case 3:
				$content .= '<div class="row justify-content-center align-items-center popup-image-top">';
				//Col image
				$content .= '<div class="col-12 p-0">';
				$content .= '<div class="image-popup">';
				$content .= '<img src='.$imagen_popup.' class="img-popup">';
				$content .= '</div>';
				$content .= '</div>';

				//Col content
				$content .= '<div class="col-12 col-md-6 p-0 text-center">';
				$content .= '<div class="content-popup">';
				$content .= '<h3>'.$titulo_popup.'</h3>';
				$content .= '<p>'.$texto_popup.'</p>';
				if(isset($formulario_popup)){
					$content .=  do_shortcode($formulario_popup);
				}
				$content .= '</div>';
				$content .= '</div>';
				//End row
				$content .= '</div>';
				break;
		}

		$content .= '</div>';

		$time_popup = $geniorama['time-popup'];

		$string  = '<div class="modal-custom" id="popup-modal" data-time="'.$time_popup.'">';
		$string .= $content;
		$string .= '</div>';

		return $string;
	} else {
		return false;
	}
	

}
add_shortcode( 'popup_master', 'popup_master_func' );



/*========================= COUNTER =========================*/
function counter_master_func( $atts ) {
	$counter = '';
	// Attributes
	$atts = shortcode_atts(
		array(
			'icon' => '',
			'counter' => '',
			'name' => '',
			'id-counter' => '',
		),
		$atts,
		'counter_master'
	);

	$counter .= '<div id='.$atts['id-counter'].' class="container-counter text-center">
					<div class="m-auto circle d-flex flex-column alig-items-center justify-content-center text-center"> 
						<i class="fas '.$atts['icon'].'"></i>
					</div>    
						<h3 class="counter">'.$atts['counter'].'</h3>
						<h2 class="name-counter">'.$atts['name'].'</h2>';

	$counter .='</div>';
	return $counter;
}

add_shortcode( 'counter_master', 'counter_master_func' );
