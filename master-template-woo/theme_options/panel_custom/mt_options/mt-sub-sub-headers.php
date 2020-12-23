<?php

//Sub Header
Redux::setSection($opt_name, array(
    'title'            => __( 'Sub Headers', 'master-template-woo' ),
    'id'               => 'opt-subheaders',
    'subsection'       => true,
    'customizer_width' => '450px',
    'fields'           => array(
        array(
            'id'        => 'section-style-subheaders',
            'title'     => __('Estilo','master-template-woo'),
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'id'        => 'opt-bg-subheaders',
            'title'     => __('Fondo','master-template-woo'),
            'type'      => 'select',
            'options'   => array(
                '1'     => __('Imagen de fondo', 'master-template-woo') ,
                '2'     => __('Color Sólido', 'master-template-woo') 
            ),
            'default'   => '1'
        ),

        array(
            'id'        => 'opt-content-ha-subheaders',
            'title'     => __('Alineación de contenido (Horizontal)','master-template-woo'),
            'type'      => 'select',
            'options'   => array(
                '1'     => __('Izquierda','master-template-woo'),
                '2'     => __('Derecha','master-template-woo'),
                '3'     => __('Centro','master-template-woo')
            ),
            'default'   => '1'
        ),

        array(
            'id'        => 'opt-content-image-subheaders',
            'title'     => __('Imagen por defecto','master-template-woo'),
            'desc'      => __('Esta es la imagen que se mostrará en el Subheader si no especificas una imagen para cada página','master-template-woo'),
            'type'      => 'media',
            'url'       => true,
            'default'   => array(
                'url'   => 'https://images.pexels.com/photos/63901/pexels-photo-63901.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940'
            ),
            'required'  => array('opt-bg-subheaders', '=', '1')
        ),

        array(
            'id'        => 'section-breadcrumbs',
            'title'     => __('Breadcrumbs','master-template-woo'),
            'subtitle'  => __('Debes instalar y habilitar el plugin Breadcrumbs NavXT', 'master-template-woo'),
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'id'        => 'breadcrumbs-on-off',
            'title'     => __('Habilitar Breadcrumbs','master-template-woo'),
            'type'      => 'switch',
            'on'        => __('Mostrar','master-template-woo'),
            'off'       => __('Ocultar','master-template-woo'),
            'default'   => true
        ),

        array(
            'id'        => 'section-color-subheader',
            'title'     => __('Colores Subheader', 'master-template-woo'),
            'type'      => 'section',
            'indent'    => true
        ),

        array(
            'id'          => 'bg-layer-subheader-color',
            'type'        => 'color_rgba', 
            'title'       => __('Capa de imagen', 'master-template-woo'),
            'output'      => array(
                'background-color' => '.sub-heading-section.opacity-layer:before',
            ),
            'default'     => '#EA472F',
            'required'    => array('opt-bg-subheaders','=','1')
        ),

        array(
            'id'          => 'bg-subheader-color',
            'type'        => 'color', 
            'title'       => __('Color de fondo', 'master-template-woo'),
            'output'      => array(
                'background-color' => '.sub-heading-section',
            ),
            'default'     => '#EA472F',
            'required'    => array('opt-bg-subheaders','=','2')
        ),

        array(
            'id'          => 'color-text-subheader',
            'type'        => 'color', 
            'title'       => __('Título', 'master-template-woo'),
            'output'      => '.sub-heading-section .content-box h1',
            'default'     => '#EA472F',
        ),

        array(
            'id'          => 'color-breadcrumbs-subheader',
            'type'        => 'color', 
            'title'       => __('Texto Breadcrumbs', 'master-template-woo'),
            'output'      => '.sub-heading-section .breadcrumbs span',
            'default'     => '#EA472F',
            'required'  => array('breadcrumbs-on-off','=',true)
        ),

        array(
            'id'          => 'color-link-breadcrumbs-subheader',
            'type'        => 'link_color', 
            'title'       => __('Enlaces Breadcrumbs', 'master-template-woo'),
            'output'      => '.sub-heading-section .breadcrumbs a span',
            'default'  => array(
                'regular'  => '#1e73be',
                'hover'    => '#dd3333',
                'active'   => '#8224e3',
                'visited'  => '#8224e3',
            ),
            'required'  => array('breadcrumbs-on-off','=',true)
        ),

        array(
            'id'          => 'color-separator-breadcrumbs-subheader',
            'type'        => 'color', 
            'title'       => __('Separador Breadcrumbs', 'master-template-woo'),
            'output'      => '.sub-heading-section .breadcrumbs',
            'default'     => '#EA472F',
            'required'  => array('breadcrumbs-on-off','=',true)
        ),
    )
));