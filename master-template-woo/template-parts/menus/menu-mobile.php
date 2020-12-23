<?php

global $geniorama;
?>

<div class="box-menu-nav-mobile box-shadow">
    <div class="box-logo">
        <a href="<?php site_url(); ?>"><?php echo show_logo($geniorama['opt-logo-select']); ?></a>
    </div>
    <?php get_template_part('template-parts/menus/menu-principal'); ?>
</div>