<?php

Redux::setSection( $opt_name, array(
    'title'            => __( 'Header', 'master-template-woo' ),
    'id'               => 'opt-header',
    'customizer_width' => '400px',
    'icon'             => 'el el-edit'
) );

include "mt-sub-top-header.php";
include "mt-sub-bottom-header.php";
include "mt-sub-menu-lateral.php";