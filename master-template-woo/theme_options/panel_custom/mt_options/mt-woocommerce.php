<?php
if (class_exists('woocommerce')) {
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Woocommerce', 'master-template-woo' ),
        'id'               => 'opt-woocommerce',
        'desc'             => __( 'Options for Woocommerce', 'master-template-woo' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-shopping-cart'
    ) );
    include "mt-sub-wc-general-options.php";
    include "mt-sub-product-page.php";
}