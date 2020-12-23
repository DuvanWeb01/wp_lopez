<?php

Redux::setSection($opt_name, array(
    'title'             => __('Sidebar', 'master-template-woo'),
    'id'                => 'opt-general-sidebar',
    'subsection'        => true,
    'customizer_width'  => '450px',
    'fields'           => array(
        array(
            'id'            => 'sect-searchbar',
            'type'          => 'section',
            'indent'        => true,
            'title'         => __('Widget de búsqueda', 'master-template-woo'),
        ),

        array(
            'id'            => 'opt-type-searchbar',
            'title'         => __('Tipo de Input', 'master-template-woo'),
            'type'          => 'radio',
            'options'       => array(
                '1'  => 'Sin botón',
                '2'  => 'En fila',
                '3'  => 'Botón debajo'
            ),
            'default'       => '2'
        ),

        array(
            'id'            => 'opt-text-button-searchbar',
            'title'         => __('Texto del botón', 'master-template-woo'),
            'type'          => 'text',
            'default'       => 'Buscar',
            'required'  => array('opt-type-searchbar', '=', '3' )
        ),

        array(
            'id'            => 'opt-text-placeholder-searchbar',
            'title'         => __('Texto del campo', 'master-template-woo'),
            'type'          => 'text',
            'default'       => 'Ingresa tu búsqueda'
        ),

        array(
            'id'            => 'opt-text-label-searchbar',
            'title'         => __('Texto del label', 'master-template-woo'),
            'type'          => 'text',
            'default'       => 'Buscar por:',
            'required'  => array('opt-type-searchbar', '=', '1' )
        ),

        array(
            'id'            => 'sect-other-widgets',
            'type'          => 'section',
            'indent'        => true,
            'title'         => __('Otros Widgets', 'master-template-woo'),
        ),
        
        array(
            'id'          => 'opt-titles-typography',
            'type'        => 'typography', 
            'title'       => __('Títulos', 'redux-framework-demo'),
            'google'      => true, 
            'font-backup' => true,
            'output'      => array('.sidebar-single .widget .widget-title'),
            'units'       =>'em',
            'default'     => array(
                'color'       => '#000', 
                'font-style'  => '700', 
                'font-family' => 'Poppins', 
                'google'      => true,
                'font-size'   => '1', 
                'line-height' => '1.5'
            ),
        ),

        array(
            'id'          => 'opt-paragraph-typography',
            'type'        => 'typography', 
            'title'       => __('Listas', 'redux-framework-demo'),
            'google'      => true, 
            'font-backup' => true,
            'output'      => array('.sidebar-single .widget li, .sidebar-single .widget li a'),
            'units'       =>'em',
            'default'     => array(
                'color'       => '#000', 
                'font-style'  => '700', 
                'font-family' => 'Poppins', 
                'google'      => true,
                'font-size'   => '1', 
                'line-height' => '1.5'
            ),
        ),

        array(
            'id'            => 'color-links-sidebar',
            'title'         => __('Color de enlaces', 'master-template-woo'),
            'type'          => 'link_color',
            'output'        => ".widget-area .widget ul li a"
        ),

        array(
            'id'            => 'separator-widgets-sidebar',
            'title'         => __('Separador de Widgets', 'master-template-woo'),
            'type'          => 'border',
            'top'           => false,
            'left'          => false,
            'right'         => false,
            'output'        => array(
                'border-bottom'       => '.widget-area .widget'
            ),
        )
    )
));