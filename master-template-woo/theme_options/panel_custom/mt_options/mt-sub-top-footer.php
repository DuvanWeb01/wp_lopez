<?php

Redux::setSection($opt_name, array(
    'title'            => __( 'Footer Superior', 'master-template-woo' ),
    'id'               => 'opt-top-footer',
    'customizer_width' => '400px',
    'subsection'       => true,
    'fields'           => array(
        array(
            'id'       => 'on-off-top-footer',
            'type'     => 'switch',
            'title'    => __( 'Pie de página superior', 'master-template-woo-woo' ),
            'on'       => __('Mostrar', 'master-template-woo-woo'),
            'off'       => __('Ocultar', 'master-template-woo-woo'),
            'default'  => true,
        ),

        array(
            'id'       => 'footer-full-w-on-off',
            'type'     => 'switch',
            'title'    => __( 'Ancho completo', 'master-template-woo' ),
            'on'       => __('Ancho completo', 'master-template-woo-woo'),
            'off'       => __('Contenedor', 'master-template-woo-woo'),
            'default'  => '2',
            'required'  => array('on-off-top-footer' , '=', true)
        ),

        array(
            'id'       => 'columns-footer',
            'type'     => 'button_set',
            'title'    => __('Columnas pie de página', 'master-template-woo-woo'),
            'options' => array(
                '1' => '3 Columnas', 
                '2' => '4 Columnas',
                '3' => '2 Columnas'
                ), 
            'default' => '2',
            'required'  => array('on-off-top-footer' , '=', true)
        ),

        array(
            'id'       => 'section-color-footer',
            'type'     => 'section',
            'title'    => __('Color footer', 'master-template-woo'),
            'indent'  => true,
        ),


        array(
            'id'          => 'opt-footer-color',
            'type'        => 'color', 
            'title'       => __('Background Footer Color', 'master-template-woo'),
            'subtitle'       => __('Choose the color for Bakcground Footer', 'master-template-woo'),
            'output'      => array(
                'background-color' => '.top-footer'
            ),
            'default'  => '#252525',
            'required'  => array('on-off-top-footer' , '=', true)
        ),

        array(
            'id'          => 'opt-text-top-footer',
            'type'        => 'typography', 
            'title'       => __('Texto encabezado superior', 'master-template-woo'),
            'google'      => true,
            'font-backup' => true,
            'text-align'  => false,
            'units'       => 'em',
            'output'      => array('.top-footer p, .top-footer li'),
            'default'     => array(
                'color'       => '#fff', 
                'font-style'  => '400', 
                'font-family' => 'Roboto',
                'font-size'   => '1em',
            ),
            'required'  => array('on-off-top-footer' , '=', true)
        ),

    )
));