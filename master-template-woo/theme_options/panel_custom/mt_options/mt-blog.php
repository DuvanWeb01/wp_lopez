<?php

Redux::setSection( $opt_name, array(
    'title'            => __( 'Blog', 'master-template-woo' ),
    'id'               => 'opt-blog',
    'customizer_width' => '400px',
    'icon'             => 'el el-file-edit'
) );

include "mt-sub-sidebar.php";
include "mt-sub-options-navigation.php";