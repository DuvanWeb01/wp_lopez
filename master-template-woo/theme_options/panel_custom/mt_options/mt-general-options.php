<?php

Redux::setSection( $opt_name, array(
    'title'            => __( 'Opciones Generales', 'master-template-woo' ),
    'id'               => 'opt-general',
    'customizer_width' => '400px',
    'icon'             => 'el el-photo'
) );

include "mt-sub-custom-logo.php";
include "mt-sub-buttons.php";
include "mt-sub-sub-headers.php";
include "mt-sub-typography.php";