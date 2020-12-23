<?php

Redux::setSection( $opt_name, array(
    'title'            => __( 'Pie de página', 'master-template-woo' ),
    'id'               => 'opt-footer',
    'customizer_width' => '400px',
    'icon'             => 'el el-tasks',
    'fields'           => array(
        array(
            'id'          => 'opt-title-footer-text',
            'type'        => 'typography', 
            'title'       => __('Títulos', 'master-template-woo'),
            'google'      => true,
            'font-backup' => true,
            'text-align'  => false,
            'units'       => 'em',
            'output'      => '.site-footer .widget-title',
            'default'     => array(
                'color'       => '#fff', 
                'font-style'  => '700', 
                'font-family' => 'Montserrat',
                'font-size'   => '1.5em',
            ),
        ),

        array(
            'id'       => 'footer-text-link',
            'type'     => 'link_color',
            'title'    => __('Footer Link Color', 'master-template-woo'),
            'output'   => '.site-footer .text-link, .site-footer .nav-link, .site-footer .menu .menu-item .nav-link',
            'default'  => array(
                'regular'  => '#1e73be',
                'hover'    => '#1a5991',
                'active'   => '#1a5991',
                'visited'  => '#1a5991',
            ),
        ),

    )
) );

include "mt-sub-top-footer.php";
include "mt-sub-bottom-footer.php";