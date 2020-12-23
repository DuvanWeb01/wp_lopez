<?php

Redux::setSection($opt_name, array(
    'title'            => __( 'Footer inferior', 'master-template-woo' ),
    'id'               => 'opt-bottom-footer',
    'customizer_width' => '400px',
    'subsection'       => true,
    'fields'           => array(
        array(
            'id'            => 'on-off-bottom-footer',
            'title'         => __('Mostrar/Ocultar', 'master-template-woo-woo'),
            'type'          => 'switch',
            'on'            => __('Mostrar', 'master-template-woo-woo'),
            'off'           => __('Ocultar', 'master-template-woo-woo'),
            'default'       => true
        ),

        array(
            'id'            => 'editor-bottom-footer',
            'title'         => 'Texto/HTML',
            'type'          => 'editor',
            'args'   => array(
                'teeny'            => true,
                'textarea_rows'    => 10
            ),

            'required'      => array('on-off-bottom-footer', '=', true)
        ),

        array(
            'id'          => 'opt-bottom-footer-color',
            'type'        => 'color', 
            'title'       => __('Background Bottom Footer Color', 'master-template-woo'),
            'output'      => array(
                'background-color' => '.bottom-footer',
            ),
            'default'  => '#252525',
        ),


        array(
            'id'            => 'section-social-nav',
            'title'         => __( 'Redes Sociales', 'master-template-woo' ),
            'type'          => 'section',
            'indent'       => true,
            'required'      => array('opt-multi-select-social-buttons', '=', '4')
        ),

        array(
            'id'       => 'type-social-nav',
            'type'     => 'select',
            'title'    => __('Tipo enlace', 'master-template-woo'),
            'options'  => array(
                '1' => 'Botón',
                '2' => 'Link',
            ),
            'default'  => '1',
            'required' => array('opt-multi-select-social-buttons', '=', '4')
        ),

        array(
            'id'       => 'size-social-nav',
            'type'     => 'select',
            'title'    => __('Size button social nav', 'master-template-woo'),
            'options'  => array(
                '1' => 'Normal',
                '2' => 'Large',
                '3' => 'Small'
            ),
            'default'  => '1'
        ),

        array(
            'id'       => 'style-color-social-nav',
            'type'     => 'select',
            'title'    => __('Color Buttons Social', 'master-template-woo'),
            'options'  => array(
                '1' => 'Principal',
                '2' => 'Secondary',
                '3' => 'Auxiliar'
            ),
            'default'  => '1',
            'required'  => array('type-social-nav', '=', '1' ),
        ),

        array(
            'id'       => 'color-link-social-nav',
            'type'     => 'link_color',
            'title'    => __('Color enlaces', 'master-template-woo'),
            'output'   => '.site-footer .type-link',
            'default'  => array(
                'regular'  => '#1e73be',
                'hover'    => '#1a5991',
                'active'   => '#1a5991',
                'visited'  => '#1a5991',
            ),
            'required'  => array('type-social-nav', '=', '2' ),
        ),
    )
));