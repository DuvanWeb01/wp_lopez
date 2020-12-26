<?php

if(!function_exists('lp_subheader_shop_func')){
    function lp_subheader_shop_func(){
        ob_start();
        ?>
        <div class="lp-subheader-shop text-center py-5" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-subheader-shop.jpg');">
            <div class="container">
                <h1 class="header-title">TIENDA VIRTUAL <hr class="title-divider"></h1>
                <form action="" class="lp-search-form" role="search" method="get" action="<?php echo home_url('/'); ?>">
                    <input type="search" class="form-control" placeholder="¿Qué estás buscando?" value="<?php echo get_search_query(); ?>" name="s">
                    <input type="hidden" name="post_type" value="product">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
                <p>Busca, y compra todo lo que necesites</p>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
    add_shortcode( 'lp_subheader_shop', 'lp_subheader_shop_func' );
}