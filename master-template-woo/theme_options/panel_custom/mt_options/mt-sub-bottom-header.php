<?php

//Bottom Header
Redux::setSection( $opt_name, array(
    'title'            => __( 'Encabezado principal', 'master-template-woo' ),
    'id'               => 'bottom-header',
    'subsection'       => true,
    'customizer_width' => '450px',
    'fields'           => array(
        array(
            'id'       => 'header-bottom-on-off',
            'type'     => 'switch',
            'title'    => __( 'Mostrar / Ocultar', 'master-template-woo-woo' ),
            'subtitle' => __('Muestra u oculta el menú principal','master-template-woo-woo'),
            'on'        => 'Mostrar',
            'off'       => 'Ocultar',
            'default'  => '1'
        ),

        array(
            'id'       => 'button-set-multi-header-bottom',
            'type'     => 'button_set',
            'title'    => __('Opciones Encabezado Principal', 'master-template-woo-woo'),
            'subtitle' => __('Activa diferentes opciones para el encabezado', 'master-template-woo-woo'),
            'multi'    => true,
            'options' => array(
                '1' => 'Ancho Completo', 
                '2' => 'Posición Absoluta'
             ),
            'required'  => array( 'header-bottom-on-off', '=', true ),
        ),

        array(
            'id'       => 'header-bottom-style',
            'type'     => 'image_select',
            'title'    => __( 'Estilo encabezado', 'master-template-woo' ),
            'options'  => array(
                '1'       => array(
                    'alt' => 'Left Logo',
                    'img' => get_template_directory_uri() . '/assets/img/logo-left.jpg',
                ),

                '2'       => array(
                    'alt' => 'Center Logo',
                    'img' => get_template_directory_uri() . '/assets/img/logo-center.jpg',
                ),

                '3'       => array(
                    'alt' => 'Right Logo',
                    'img' => get_template_directory_uri() . '/assets/img/logo-right.jpg',
                ),

                '4'       => array(
                    'alt' => 'Superior Logo',
                    'img' => get_template_directory_uri() . '/assets/img/logo-superior.jpg',
                ),
            ),

            'default'  => 1,

            'required'  => array( 'header-bottom-on-off', '=', true ),
        ),

        array(
            'id'       => 'on-off-sticky-header',
            'type'     => 'switch', 
            'title'    => __('Encabezado fijo', 'redux-framework-demo'),
            'subtitle' => __('Se fija el encabezado al hacer Scroll', 'redux-framework-demo'),
            'default'  => true,
            'required'  => array( 'header-bottom-on-off', '=', true ),
        ),

        //Static Header
        array(
            'id'          => 'section-static-header',
            'type'        => 'section', 
            'title'       => __('Opciones encabezado estático', 'master-template-woo'),
            'indent'      => true,
            'required'  => array( 'header-bottom-on-off', '=', true ),
        ),

        array(
            'id'       => 'opt-logo-select',
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
            'id'          => 'opt-header-bg',
            'type'        => 'color_rgba', 
            'title'       => __('Color fondo', 'master-template-woo'),
            'output'      => array(
                'background-color' => '.bottom-header',
            ),
            'default'  => '#fff',
            'required'  => array( 'header-bottom-on-off', '=', true ),
        ),

        array(
            'id'          => 'opt-nav-color',
            'type'        => 'link_color', 
            'title'       => __('Color enlaces menú', 'master-template-woo'),
            'output'      => '.static-header .nav-link',
            'default'  => array(
                'regular'  => '#252525',
                'hover'    => '#EA472F',
                'active'   => '#ea472f',
                'visited'  => '#ea472f',
            ),
            'required'  => array( 'header-bottom-on-off', '=', true ),
        ),


        //Sticky Header
        array(
            'id'          => 'section-sticky-header',
            'type'        => 'section', 
            'title'       => __('Opciones encabezado fijo', 'master-template-woo'),
            'indent'      => true,
            'required'  => array( 'on-off-sticky-header', '=', true ),
        ),


        array(
            'id'       => 'opt-logo-sticky-select',
            'type'     => 'select',
            'title'    => __('Selecciona un tipo de logo', 'master-template-woo'),
            'options'  => array(
                '1' => 'Logo Oscuro',
                '2' => 'Logo Claro'
            ),
            'default'  => '1',
            'required'  => array( 'on-off-sticky-header', '=', true ),
        ),

        array(
            'id'          => 'opt-header-sticky-bg',
            'type'        => 'color_rgba', 
            'title'       => __('Color fondo', 'master-template-woo'),
            'output'      => array(
                'background-color' => '.sticky-header'),
            'required'  => array( 'on-off-sticky-header', '=', true ),
        ),

        array(
            'id'          => 'opt-nav-sticky-color',
            'type'        => 'link_color', 
            'title'       => __('Color enlaces menú', 'master-template-woo'),
            'output'      => '.sticky-header .nav-link',
            'default'  => array(
                'regular'  => '#fff',
                'hover'    => '#f2f2f2',
                'active'   => '#f2f2f2',
                'visited'  => '#f2f2f2',
            ),
            'required'  => array( 'on-off-sticky-header', '=', true ),
        ),
    )
) );