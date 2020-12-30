<?php

if(!function_exists('lp_breadcrumbs_func')){
    function lp_breadcrumbs_func(){
        ob_start();
        ?>
            <div class="lp-breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                <div class="container">
                    <?php 
                        if (function_exists('bcn_display')) {
                            bcn_display();
                        }
                    ?>
                </div>
            </div>
        <?php
        return ob_get_clean();
    }

    add_shortcode( 'lp_breadcrumbs', 'lp_breadcrumbs_func' );
}