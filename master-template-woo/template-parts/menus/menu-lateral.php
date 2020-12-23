<?php

global $geniorama;
?>

<div class="box-menu-lateral box-shadow" id="box-menu-lateral">
    <div class="header">
        <div class="box-logo">
            <a href="<?php site_url(); ?>"><?php echo show_logo($geniorama['opt-logo-select-menu-lateral']); ?></a>
        </div>
        <button class="button-menu-toggle button-menu-lateral close-menu" data-target="#box-menu-lateral">
            <span class="line"></span>
        </button>
    </div>

    <?php get_template_part('template-parts/menus/menu-nav-lateral'); ?>

    <?php if($geniorama['opt-multi-select-social-buttons']): ?>
        <?php $val_ex = $geniorama['opt-multi-select-social-buttons']; foreach($val_ex as $valor_campo): ?>
            <?php if ($valor_campo == '3'): ?>
                <div class="box-social-icons">
                    <?php if($geniorama['texto-redes-menu-lateral']): ?>
                    <p class="text-follow"><?php echo $geniorama['texto-redes-menu-lateral']; ?></p>
                    <?php endif; ?>
                    <ul class="nav">
                        <?php show_social_buttons("menu-lateral-buttons"); ?>        
                    </ul>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
</div>