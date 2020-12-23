<?php
/**
 * Template part for displaying bottom footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Master_Template
 */

global $geniorama
?>

<div class="bottom-footer p-2 pt-4">
	<div class="container">
		<div class="d-flex justify-content-center align-items-center">
			<?php $val_ex = $geniorama['opt-multi-select-social-buttons']; foreach($val_ex as $valor_campo): ?>
				<?php if ($valor_campo == '4'): ?>
					<div class="cont-social m-auto">
						<ul class="nav social-nav">
							<?php show_social_buttons('social-nav'); ?>
						</ul>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
			<?php if($geniorama['editor-bottom-footer']): ?>
				<div class="cont-copyright m-auto">
					<?php echo $geniorama['editor-bottom-footer']; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>