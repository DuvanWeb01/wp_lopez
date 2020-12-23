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

<!-------------------------------Logo Superior--------------------------------->

<!--Static Header -->
<div class="bottom-header static-header type-logo-superior">
	<div class="<?php select_width($geniorama['button-set-multi-header-bottom']); ?>">
		<!-- Header mobile -->
		<?php get_template_part('template-parts/header/header-mobile'); ?>

		<div class="box-logo-and-nav">
            <div class="box-logo">
                <a href="<?php echo get_home_url(); ?>"><?php echo show_logo($geniorama['opt-logo-sticky-select']); ?></a>
            </div>
            <?php get_template_part('template-parts/menus/menu-principal'); ?>
                
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


<?php if($geniorama['on-off-sticky-header']): ?>
    <!--Sticky Header -->
    <div class="bottom-header sticky-header type-logo-left">
        <div class="<?php select_width($geniorama['button-set-multi-header-bottom']); ?>">
            <!-- Header mobile -->
			<?php get_template_part('template-parts/header/header-mobile'); ?>

            <div class="box-logo-and-nav hide-on-mobile">
                <div class="box-logo">
                    <a href="<?php echo get_home_url(); ?>"><?php echo show_logo($geniorama['opt-logo-sticky-select']); ?></a>
                </div>

                <div class="box-nav-and-buttons">
                    <?php get_template_part('template-parts/menus/menu-principal'); ?>
                    
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
    <?php endif; ?>