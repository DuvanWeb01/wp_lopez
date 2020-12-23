<?php 

global $geniorama;
?>

<div class="box-logo-and-button">
    <div class="box-logo">
        <a href="<?php echo get_home_url(); ?>"><?php echo show_logo($geniorama['mobile-opt-logo-select']); ?></a>
    </div>  
    <?php get_template_part('template-parts/buttons/button-menu-mobile'); ?>
</div>