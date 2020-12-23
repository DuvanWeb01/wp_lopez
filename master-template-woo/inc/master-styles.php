<?php

// Select Width
function select_width($option){
	if($option && is_array($option)){
		foreach ($option as $class_width) {
			if($class_width == "1"){
				echo "full-width";
				break;
			} else {
				echo "container";
				break;
			}
		}
	} elseif ($option && is_bool($option)){
		echo "container";
	} else {
		echo "container";
	}
}

/*=================================================
==================CLASES BUTTONS ================ */


//Type class - button or link
function get_class_button($thebutton){

	global $geniorama;

	switch ($geniorama['type-'.$thebutton.'']) {
		case 1:
			$class_button_type = 'button-icon';
			break;
		case 2:
			$class_button_type = 'type-link';
			break;
	}

	//Color Button
	switch ($geniorama['style-color-'.$thebutton.'']) {
		case 1:
			$class_button_color = 'principal-button';
			break;
		case 2:
			$class_button_color = 'secondary-button';
			break;
		case 3:
			$class_button_color = 'aux-button';
			break;
	}

	//Size Button
	switch ($geniorama['size-'.$thebutton.'']) {
		case 1:
			$class_button_size = 'normal-button';
			break;
		case 2:
			$class_button_size = 'large-button';
			break;
		case 3:
			$class_button_size = 'small-button';
			break;
	}


	//Style Button
	switch ($geniorama['select-button-style']) {
		case 1:
			$class_button = "link-rounded";
			break;
		case 2:
			$class_button = "link-half-rounded";
			break;
		case 3:
			$class_button = "link-squared";
			break;
	}

	$classes_button = $class_button_type . " " . $class_button_color . " " . $class_button_size . " " . $class_button;

	return $classes_button;
}

function add_class_button($thebutton){
	echo get_class_button($thebutton);
}

// Alignment Class
function get_alignment_classes($element){
	global $geniorama;

	switch ($geniorama['style-alignment-'.$element.'']) {
		case 1:
			$class_aligment = "alignment-center";
			break;
		case 2:
			$class_aligment = "alignment-right";
			break;
		case 3:
			$class_aligment = "alignment-left";
			break;
		
	}

	return $class_aligment;
}

function alignment_classes($element){
	echo get_alignment_classes($element);
}


// Subheader class
function add_class_subheader($tipo){
	global $geniorama;
	if ($tipo == 'alignment') {
        switch ($geniorama['opt-content-ha-subheaders']) {
            case '1':
                $alHorizontal = "text-left";
                break;

            case '2':
                $alHorizontal = "text-right";
                break;

            case '3':
                $alHorizontal = "text-center";
                break;
		}
		return $alHorizontal;
        
    } elseif ($tipo == 'banner') {
		if ($geniorama['opt-bg-subheaders'] === '1') {
			$classBanner = 'opacity-layer';
		} else{
			$classBanner = 'banner-solid';
		}

		return $classBanner;
	}
}