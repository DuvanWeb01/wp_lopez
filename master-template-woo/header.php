<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Master_Template
 */
global $geniorama;

$exibirModal = false;

if($geniorama['on-off-popup']){
	# Iniciando la variable de control que permitirá mostrar o no el modal
	# Verificando si existe o no la cookie
	if(!isset($_COOKIE["mostrarModal"]))
	{
	# Caso no exista la cookie entra aqui
	# Creamos la cookie con la duración que queramos
	
	//$expirar = 3600; // muestra cada 1 hora
	//$expirar = 10800; // muestra cada 3 horas
	//$expirar = 21600; //muestra cada 6 horas
	if($geniorama['time-cookie']){
	  $expirar = $geniorama['time-cookie']; //muestra cada 12 horas
	} else {
	  $expirar = 0; //muestra cada 12 horas
	}
	
	//$expirar = 86400;  // muestra cada 24 horas
	setcookie('mostrarModal', 'SI', (time() + $expirar)); // mostrará cada 12 horas.
	# Ahora nuestra variable de control pasará a tener el valor TRUE (Verdadero)
	$exibirModal = true;
	}
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php 

if($exibirModal){
	if ($geniorama['on-off-popup'] && is_front_page()) {
		echo do_shortcode('[popup_master]');
	} elseif ($geniorama['opt-radio-popup'] == 1){
		echo do_shortcode('[popup_master]');
	}
}

?>
<div id="page" class="site">
	<header id="masthead" class="site-header <?php
			if($geniorama['button-set-multi-header-bottom']){
				foreach($geniorama['button-set-multi-header-bottom'] as $clase_encabezado){
					if ($clase_encabezado == '2') {
						echo "absolute-header";
					}
				}
			}
			?>">
		<!--Start Top Header-->
		<?php if ($geniorama['header-top-on-off']): ?>
			<?php get_template_part( 'template-parts/header/top-header'); ?>
		<?php endif; ?>

		<!--Start Bottom Header-->
		<?php if ($geniorama['header-bottom-on-off'] == '1'): ?>
			<!-------------------------------Logo left--------------------------------->
			<?php if ($geniorama['header-bottom-style'] == '1'): ?>
				<?php get_template_part( 'template-parts/header/header','logo-left'); ?>
			<?php endif; ?>
			
			<!-------------------------------Logo center--------------------------------->
			<?php if ($geniorama['header-bottom-style'] == '2'): ?>
				<?php get_template_part( 'template-parts/header/header','logo-center'); ?>
			<?php endif; ?>


			<!-------------------------------Logo Right--------------------------------->
			<?php if ($geniorama['header-bottom-style'] == '3'): ?>
				<?php get_template_part( 'template-parts/header/header','logo-right'); ?>
			<?php endif; ?>

			<!-------------------------------Logo Superior--------------------------------->
			<?php if ($geniorama['header-bottom-style'] == '4'): ?>
				<?php get_template_part( 'template-parts/header/header','logo-superior'); ?>
			<?php endif; ?>

		<?php endif; ?>
	</header><!-- #masthead -->

	<!-- Modal search -->
	<?php get_template_part('template-parts/search/modal-search'); ?>
	<!-- Menu mobile -->
	<?php get_template_part('template-parts/menus/menu-mobile'); ?>

	<!--Menu lateral-->
	<?php if ($geniorama['menu_lateral']): ?>
		<?php get_template_part( 'template-parts/menus/menu-lateral'); ?>
	<?php endif; ?>
	<div id="content" class="site-content">
