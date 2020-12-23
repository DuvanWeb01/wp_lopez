<?php

Redux::setSection($opt_name, array(
    'id'                => 'options-navigation-blog',
    'title'             => __('Navegación','master-template-woo'),
    'subsection'        => true,
    'fields'            => array(
        array(
            'id'            => 'opt-blog-links-post',
            'title'         => __('Links', 'master-template-woo'),
            'subtitle'         => __('Enlaces para ir al siguiente o anterior post', 'master-template-woo'),
            'type'          => 'section',
            'indent'        => true
        ),

        array(
            'id'            => 'on-off-links-post',
            'title'         => __('Activar enlaces', 'master-template-woo'),
            'type'          => 'switch',
            'default'       => true
        ),

        array(
            'id'       => 'opt-text-links-post',
            'type'     => 'select',
            'title'    => __('Texto de enlaces', 'redux-framework-demo'),
            'options'  => array(
                '1' => 'Título del post',
                '2' => 'Texto personalizado'
            ),
            'default'  => '1',
            'required' => array('on-off-links-post', '=', true)
        ),

        array(
            'id'            => 'prev-title-post',
            'title'         => __('Texto para post anterior', 'master-template-woo'),
            'subtitle'      => __('Para mostrar el título puedes usar "%title"'),
            'type'          => 'text',
            'placeholder'   => 'ej: Anterior',
            'default'       => 'Anterior',
            'required'      => array(
                array('on-off-links-post', '=', true),
                array('opt-text-links-post', '=', 2)
            ),
        ),

        array(
            'id'            => 'next-title-post',
            'title'         => __('Texto para post siguiente', 'master-template-woo'),
            'subtitle'      => __('Para mostrar el título puedes usar "%title"'),
            'type'          => 'text',
            'placeholder'   => 'ej: Siguiente',
            'default'       => 'Siguiente',
            'required'      => array(
                array('on-off-links-post', '=', true),
                array('opt-text-links-post', '=', 2)
            ),
        ),

        array(
            'id'            => 'color-bg-nav-links',
            'title'         => __('Color fondo', 'master-template-woo'),
            'type'          => 'color_rgba',
            'output'        => array(
                'background-color'      => '.entry-content .nav-links'
            ),
            'default'       => '#f8f8f8',
            'required' => array('on-off-links-post', '=', true)
        ),

        array(
            'id'             => 'opt-spacing-links-post',
            'type'           => 'spacing',
            'output'         => '.entry-content .nav-links',
            'mode'           => 'padding',
            'units'          => array('em', 'px'),
            'units_extended' => 'false',
            'title'          => __('Espaciado interior (padding)', 'master-template-woo'),
            'default'            => array(
                'margin-top'     => '2em', 
                'margin-right'   => '2em', 
                'margin-bottom'  => '2em', 
                'margin-left'    => '2em',
                'units'          => 'em', 
            ),
            'required' => array('on-off-links-post', '=', true)
        ),

        array(
            'id'            => 'style-text-links-post',
            'title'         => __('Color enlaces','master-template-woo'),
            'type'          => 'link_color',
            'output'        => '.entry-content .nav-links a',
            'default'       => array(
                'regular'   => '#252525',
                'hover'     => 'orange',
                'active'    => 'orange',
                'visited'   => 'purple'
            ),
            'required' => array('on-off-links-post', '=', true)
        ),

        array(
            'id'            => 'type-text-links-post',
            'title'         => __('Texto enlaces', 'master-template-woo'),
            'type'          => 'typography',
            'google'        => true,
            'font-backup'   => true,
            'color'         => false,
            'units'         => 'em',
            'output'        => '.entry-content .nav-links a',
            'required' => array('on-off-links-post', '=', true)
        ),
        
    )
));