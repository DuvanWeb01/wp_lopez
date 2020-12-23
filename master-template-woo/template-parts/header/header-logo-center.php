<?php
/**
 * Template part for displaying page content in header
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Master_Template
 */

global $geniorama
?>

<!--Static Header -->
<div class="bottom-header static-header type-logo-center">
    <div class="<?php select_width($geniorama['button-set-multi-header-bottom']); ?>">
		<!-- Header mobile -->
		<?php get_template_part('template-parts/header/header-mobile'); ?>
		
		<div class="box-nav-and-buttons hide-on-mobile">
			<div class="row justify-content-between align-items-center">
				<div class="col-12 col-md-5">
					<?php get_template_part('template-parts/menus/menu-principal'); ?>
				</div>
				<div class="col-12 col-md-2">
					<div class="box-logo">
						<a href="<?php echo get_home_url(); ?>"><?php echo show_logo($geniorama['opt-logo-select']); ?></a>
					</div>
				</div>
				<div class="col-12 col-md-5">
					<div class="d-flex justify-content-end">
						<?php get_template_part('template-parts/menus/menu-secondary'); ?>
						<?php if($geniorama['wc-show-menu-buttons'] || $geniorama['menu_lateral']): ?>
							<div class="box-buttons">
								<?php 
									if($geniorama['wc-show-menu-buttons']){
										get_template_part('template-parts/buttons/buttons-menu-wc');
									}
								?>

								<?php 
									if ($geniorama['menu_lateral']){
										get_template_part('template-parts/buttons/button-menu-lateral');
									}
								?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!--Sticky Header -->
<?php if($geniorama['on-off-sticky-header']): ?>
<div class="bottom-header sticky-header type-logo-center">
	<div class="<?php select_width($geniorama['button-set-multi-header-bottom']); ?>">
		<!-- Header mobile -->
		<?php get_template_part('template-parts/header/header-mobile'); ?>

		<div class="box-nav-and-buttons hide-on-mobile">
			<div class="row justify-content-between align-items-center">
				<div class="col-12 col-md-5">
					<?php get_template_part('template-parts/menus/menu-principal'); ?>
				</div>
				<div class="col-12 col-md-2">
					<div class="box-logo">
						<a href="<?php echo get_home_url(); ?>"><?php echo show_logo($geniorama['opt-logo-sticky-select']); ?></a>
					</div>
				</div>
				<div class="col-12 col-md-5">
					<div class="d-flex justify-content-end">
						<?php get_template_part('template-parts/menus/menu-secondary'); ?>
						<?php if($geniorama['wc-show-menu-buttons'] || $geniorama['menu_lateral']): ?>
							<div class="box-buttons">
								<?php 
									if($geniorama['wc-show-menu-buttons']){
										get_template_part('template-parts/buttons/buttons-menu-wc');
									}
								?>

								<?php 
									if ($geniorama['menu_lateral']){
										get_template_part('template-parts/buttons/button-menu-lateral');
									}
								?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>