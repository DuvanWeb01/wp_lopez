<?php
/**
 * Template part for displaying page content in top header
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Master_Template
 */

global $geniorama
?>


<div class="box-top-header <?php echo(!$geniorama['mobile-top-header-on-off']) ? "hide-on-mobile": "" ?>">
	<div class="content <?php echo ($geniorama['header-top-full-w-on-off']) ? "full-width": "container" ?>">
		<?php get_template_part("template-parts/buttons/info-buttons") ?>
		
		<?php if($geniorama['opt-multi-select-social-buttons'] || $geniorama['search-on-off']): ?>
			<ul class="nav">
				<?php if($geniorama['opt-multi-select-social-buttons']): ?>
					<?php $val_ex = $geniorama['opt-multi-select-social-buttons']; foreach($val_ex as $valor_campo): ?>
						<?php if ($valor_campo == '2'): ?>
							<?php show_social_buttons("top-header-buttons"); ?>
						<?php endif; ?>
					<?php endforeach; ?>
				<?php endif; ?>
				
				<!-- Search button-->
				<?php if($geniorama['search-on-off']): ?>
					<?php show_search_button("top-header-buttons") ?>
				<?php endif; ?>
			</ul>
		<?php endif; ?>
	</div>
</div>