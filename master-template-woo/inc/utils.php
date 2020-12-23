<?php

//Sanitize phone
function sanitizePhone($phone_number){
	$tel = str_replace(array('/' , '(' , ')' , '-' , ' ', '+'), '', $phone_number);
	return $tel;
}

//Api whatsapp
function api_whatsapp(){
	global $geniorama;
	if ($geniorama['opt-whp']) {
		$number_whatsapp = sanitizePhone($geniorama['opt-whp']);
	}

	if ($geniorama['opt-whp-msje']) {
		$message_whatsapp = __($geniorama['opt-whp-msje'], 'master-template-woo');
	} else{
		$message_whatsapp = 'Hola';
	}

	$data_wp = [
		"number" => $number_whatsapp,
		"msje"	 => $message_whatsapp
	];

	$api_whatsapp = 'https://api.whatsapp.com/send?phone=' . $number_whatsapp . '&text=' . $message_whatsapp;

	return $api_whatsapp;
}
