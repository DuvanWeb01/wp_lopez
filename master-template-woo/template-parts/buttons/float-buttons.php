<?php

/**

 * Template part for displaying float buttons

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package Master_Template

 */



global $geniorama

?>

<!-- FLOAT BUTTONS -->
<div class="float-buttons <?php echo get_alignment_classes('float-buttons'); ?> animation-up">
    <ul class="nav flex-column">
        <?php $val_ex = $geniorama['opt-multi-select-social-buttons']; foreach($val_ex as $valor_campo): ?>
            <?php if ($valor_campo == '1'): ?>
                <?php show_social_buttons("float-buttons") ?>
            <?php endif; ?>
        <?php endforeach; ?>
        
        <?php if ($geniorama['float-top-button']): ?>
            <?php show_btt_button("float-buttons") ?>
        <?php endif; ?>
    </ul>
</div>

