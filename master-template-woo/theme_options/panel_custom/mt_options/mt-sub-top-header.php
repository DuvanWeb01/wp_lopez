<?php

//Top Header
Redux::setSection( $opt_name, array(
    'title'            => __( 'Encabezado superior', 'master-template-woo' ),
    'id'               => 'top-header',
    'subsection'       => true,
    'customizer_width' => '450px',
    'fields'           => array(
        array(
            'id'       => 'header-top-on-off',
            'type'     => 'switch',
            'title'    => __( 'Mostrar / Ocultar', 'master-template-woo' ),
            'subtitle' => __( 'Muestre u oculte el encabezado superior', 'master-template-woo' ),
            'on'        => 'Mostrar',
            'off'       => 'Ocultar',
            'default'  => true
        ),

        array(
            'id'       => 'header-top-full-w-on-off',
            'type'     => 'switch',
            'title'    => __( 'Ancho completo', 'master-template-woo' ),
            'subtitle' => __( 'Muestre el encabezado de ancho completo o dentro de un contenedor', 'master-template-woo' ),
            'default'  => '2',
            'on'        => 'Ancho completo',
            'off'       => 'Contenedor',
            'default'   => false,
            'required'  => array( 'header-top-on-off', '=', '1' ),
        ),

        array(
            'id'        => 'top-header-icons',
            'title'     => __('Iconos', 'master-template-woo'),
            'type'      => 'section',
            'subtitle'  => __('Use las clases de Fontawesome 5', 'master-template-woo'),
            'indent'    => true,
            'required'  => array( 'header-top-on-off', '=', '1' ),
        ),

        array(
            'id'        => 'icon-mail',
            'title'     => __('Icono correo', 'master-template-woo'),
            'desc'      => __('Ejemplo: "far fa-envelope"'),
            'type'      => 'text',
            'default'   => 'far fa-envelope',
            'required'  => array( 'header-top-on-off', '=', '1' ),
        ),

        array(
            'id'        => 'icon-phone',
            'title'     => __('Icono teléfono', 'master-template-woo'),
            'desc'      => __('Ejemplo: "fas fa-phone"'),
            'type'      => 'text',
            'default'   => 'fas fa-phone',
            'required'  => array( 'header-top-on-off', '=', '1' ),
        ),

        array(
            'id'        => 'icon-address',
            'title'     => __('Icono Dirección', 'master-template-woo'),
            'desc'      => __('Ejemplo: "fas fa-map-marker-alt"'),
            'type'      => 'text',
            'default'   => 'fas fa-map-marker-alt',
            'required'  => array( 'header-top-on-off', '=', '1' ),
        ),

        array(
            'id'        => 'icon-mobile-phone',
            'title'     => __('Icono teléfono móvil', 'master-template-woo'),
            'desc'      => __('Ejemplo: "fas fa-map-marker-alt"'),
            'type'      => 'text',
            'default'   => 'fab fa-whatsapp',
            'required'  => array( 'header-top-on-off', '=', '1' ),
        ),

        array(
            'id'      => 'section-search-start',
            'type'    => 'section',
            'title'   => __('Barra de búsqueda', 'master-template-woo'),
            'indent' => true,
            'required'  => array( 'header-top-on-off', '=', '1' ),
        ),

        array(
            'id'       => 'search-on-off',
            'type'     => 'switch',
            'title'    => __( 'Mostrar / Ocultar', 'master-template-woo' ),
            'subtitle'    => __( 'Muestre u oculte la barra de búsqueda en el encabezado superior', 'master-template-woo' ),
            'default'  => '1',
            'required'  => array( 'header-top-on-off', '=', '1' ),
        ),

         //Color Top Header
         array(
            'id'        => 'section-color-top-header',
            'title'     => 'Colores encabezado superior',
            'type'      => 'section',
            'indent'    => true,
            'required'  => array( 'header-top-on-off', '=', '1' ),
        ),

        array(
            'id'          => 'opt-header-top-bg',
            'type'        => 'color', 
            'title'       => __('Color Fondo', 'master-template-woo'),
            'output'      => array(
                'background' => '.box-top-header',
            ),
            'default'  => '#353535',
            'required'  => array( 'header-top-on-off', '=', '1' ),
        ),

        array(
            'id'          => 'opt-header-top-text',
            'type'        => 'color', 
            'title'       => __('Color texto', 'master-template-woo'),
            'output'      => array(
                'color' => '.box-top-header p',
            ),
            'default'  => '#ccc',
            'required'  => array( 'header-top-on-off', '=', '1' ),
        ),

        array(
            'id'          => 'opt-header-top-link',
            'type'        => 'link_color', 
            'title'       => __('Color texto enlaces', 'master-template-woo'),
            'output'      => array(
                'color' => '.box-info-menu .nav-link',
            ),
            'default'  => array(
                'regular'  => '#1e73be',
                'hover'    => '#dd3333',
                'active'   => '#8224e3',
                'visited'  => '#8224e3',
            ),
            'required'  => array( 'header-top-on-off', '=', '1' ),
        ),

        array(
            'id'          => 'section-opt-top-header-buttons',
            'type'        => 'section', 
            'title'       => __('Opciones botones Encabezado superior', 'master-template-woo'),
            'indent'     => true,
            'required'  => array( 'header-top-on-off', '=', true ),
        ),

        array(
            'id'       => 'type-top-header-buttons',
            'type'     => 'select',
            'title'    => __('Tipo enlace', 'master-template-woo'),
            'options'  => array(
                '1' => 'Botón',
                '2' => 'Link',
            ),
            'default'  => '1',
            'required'  => array( 'header-top-on-off', '=', true ),
        ),

        array(
            'id'       => 'style-color-top-header-buttons',
            'type'     => 'select',
            'title'    => __('Estilo', 'master-template-woo'),
            'options'  => array(
                '1' => 'Principal',
                '2' => 'Secundario',
                '3' => 'Auxiliar'
            ),
            'default'  => '1',
            'required'  => array( 
                array('header-top-on-off', '=', true),
                array('type-top-header-buttons', '=', '1')
             ),
        ),

        array(
            'id'          => 'color-link-buttons',
            'type'        => 'link_color', 
            'title'       => __('Color texto enlaces', 'master-template-woo'),
            'output'      => array(
                'color' => '.box-top-header .type-link',
            ),
            'default'  => array(
                'regular'  => '#1e73be',
                'hover'    => '#dd3333',
                'active'   => '#8224e3',
                'visited'  => '#8224e3',
            ),
            'required'  => array(
                array('header-top-on-off', '=', true),
                array('type-top-header-buttons', '=', '2')
            )
        ),

        array(
            'id'       => 'size-top-header-buttons',
            'type'     => 'select',
            'title'    => __('Tamaño', 'master-template-woo'),
            'options'  => array(
                '1' => 'Normal',
                '2' => 'Largo',
                '3' => 'Pequeño'
            ),
            'default'  => '3',
            'required'  => array( 'header-top-on-off', '=', true ),
        ),

    )
) );