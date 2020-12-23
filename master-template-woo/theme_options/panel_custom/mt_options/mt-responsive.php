<?php

Redux::setSection( $opt_name, array(
    'title'            => __( 'Ajustes Responsive', 'master-template-woo' ),
    'desc'         => __('Aplica estas opciones a la versión móvil', 'master-template-woo-woo'),
    'id'               => 'opt-responsive',
    'customizer_width' => '400px',
    'icon'             => 'el el-screen',
    'fields'           => array(
        array(
            'id'        => 'mobile-top-header-on-off',
            'title'     => __('Encabezado superior', 'master-template-woo-woo'),
            'type'      => 'switch',
            'default'   => true,
            'required'  => array('header-top-on-off' , '=', true)
        ),


        array(
            'id'        => 'mobile-header-bottom',
            'title'     =>  __('Encabezado principal', 'master-template-woo'),
            'type'      => 'section',
            'indent'    => true,
            'required'  => array( 'header-bottom-on-off', '=', true ),
        ),

        array(
            'id'       => 'mobile-opt-logo-select',
            'type'     => 'select',
            'title'    => __('Selecciona un tipo de logo', 'master-template-woo'),
            'options'  => array(
                '1' => 'Logo Oscuro',
                '2' => 'Logo Claro'
            ),
            'default'  => '1',
            'required'  => array( 'header-bottom-on-off', '=', true ),
        ),

        array(
            'id'       => 'mobile-bg-bottom-header',
            'type'     => 'color_rgba',
            'title'    => __('Color de fondo', 'master-template-woo'),
            'output'   => array(
                'background-color' => '.box-logo-and-button'
            ),
            'default'  => '#f8f8f8',
            'required'  => array( 'header-bottom-on-off', '=', true ),
        ),
        

        array(
            'id'        => 'section-button-toggle',
            'title'     => __('Botón Menú', 'master-template-woo'),
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'id'       => 'round-button-toggle',
            'title'    => __('Estilo botón','master-template-woo'),
            'type'     => 'select',
            'options'  => array(
                'rounded-0'     => 'Cuadrado',
                'rounded'     => 'Esquinas redondeadas',
                'rounded-circle'     => 'Circulo'
            ),
            'default' => 'rounded-0'
        ),

        array(
            'id'       => 'border-button-menu-toggle',
            'type'     => 'border',
            'title'    => __('Borde', 'redux-framework-demo'),
            'output'   => array('.button-menu-mobile'),
            'default'  => array(
                'border-color'  => '#1e73be', 
                'border-style'  => 'solid', 
                'border-top'    => '3px', 
                'border-right'  => '3px', 
                'border-bottom' => '3px', 
                'border-left'   => '3px'
            )
        ),

        array(
            'id'       => 'bg-color-button-menu-toggle',
            'type'     => 'color_rgba',
            'title'    => __('Color fondo botón', 'master-template-woo'),
            'default'  => '#ffffff',
            'output'   => array(
                'background-color'   => '.button-menu-mobile'
            )
        ),

        array(
            'id'       => 'color-button-menu-toggle',
            'type'     => 'color_rgba',
            'title'    => __('Color lineas', 'master-template-woo'),
            'default'  => '#ffffff',
            'output'   => array(
                'background-color'   => '.button-menu-mobile .line, .button-menu-mobile .line:after, .button-menu-mobile .line:before'
            )
        ),
    )
));