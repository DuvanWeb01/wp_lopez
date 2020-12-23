<?php

Redux::setSection( $opt_name, array(
    'id'               => 'wc-general-options',
    'title'            => __('Opciones generales', 'master-template-woo'),
    'subsection'       => true,
    'fields'           => array(
        array(
            'id'            => 'wc-prod-per-page',
            'title'         => __('Productos por página','master-template-woo'),
            'subtitle'      => __('Aplica para páginas internas como categorías', 'master-template-woo'),
            'type'          => 'slider',
            'min'           => 1,
            'step'          => 1,
            'max'           => 12,
            'display_value' => 'label',
            'default'       => 12
        ),

        array(
            'id'            => 'wc-show-menu-buttons',
            'title'         => __('Mostrar botones en menú principal', 'master-template-woo'),
            'type'          => 'switch',
            'default'       => true
        ),

        array(
            'id'            => 'wc-num-cols',
            'title'         => __('Número de columnas', 'master-template'),
            'type'          => 'button_set',
            'options'       => array(
                '1'       => '3 cols',
                '2'       => '4 cols'
            ),
            'default'       => '1'
        ),

        array(
            'id'            => 'wc-section-releated-products',
            'title'         => __('Productos relacionados', 'master-template-woo'),
            'type'          => 'section',
            'indent'        => true
        ),

        array(
            'id'            => 'wc-prod-releated-per-page',
            'title'         => __('Productos por página','master-template-woo'),
            'type'          => 'slider',
            'min'           => 1,
            'step'          => 1,
            'max'           => 6,
            'display_value' => 'label',
            'default'       => 3
        ),

        array(
            'id'            => 'wc-num-releated-cols',
            'title'         => __('Número de columnas', 'master-template'),
            'type'          => 'button_set',
            'options'       => array(
                '1'       => '3 cols',
                '2'       => '4 cols'
            ),
            'default'       => '1'
        ),

        array(
            'id'             => 'wc-pages-navigation',
            'title'          => __('Navegación', 'master-template-woo'),
            'type'           => 'section',
            'indent'         => true  
        ),

        array(
            'id'             => 'wc-pagination-links',
            'title'          => 'Links de paginación',
            'type'           => 'link_color',
            'output'         => '.woocommerce-pagination .page-numbers a'
        ),

        
       array(
            'id'       => 'wc-pagination-border',
            'type'     => 'border',
            'title'    => __('Bordes botones', 'master-template-woo'),
            'output'   => array('.woocommerce nav.woocommerce-pagination ul li'),
            'all'      => false,
            'default'  => array(
                'border-color'  => '#1e73be', 
                'border-style'  => 'solid', 
                'border-top'    => '3px', 
                'border-right'  => '0px', 
                'border-bottom' => '3px', 
                'border-left'   => '3px'
            )
        ),

        array(
            'id'       => 'button-pagination-bg',
            'type'     => 'color',
            'title'    => __('Fondo boton :hover , página activa', 'master-template-woo'),
            'output'   => array(
                'background-color' => '.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current'
            ),
        ),

        array(
            'id'       => 'button-pagination-color-active',
            'type'     => 'color',
            'title'    => __('Color boton texto :hover , página activa', 'master-template-woo'),
            'output'   => array('.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current'),
        ),

        array(
            'id'       => 'button-pagination-border-radius',
            'type'     => 'css_layout',
            'title'    => __('Redondeado boton texto :hover , página activa', 'master-template-woo'),
        ),

    )
));