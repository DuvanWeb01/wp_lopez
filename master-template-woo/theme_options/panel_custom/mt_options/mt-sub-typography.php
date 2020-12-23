<?php

//Typography
Redux::setSection( $opt_name, array(
    'title'            => __( 'Tipografía', 'master-template-woo' ),
    'id'               => 'typography-body',
    'subsection'       => true,
    'customizer_width' => '450px',
    'fields'           => array(
        

        array(
            'id'          => 'opt-typography',
            'type'        => 'typography', 
            'title'       => __('h1', 'master-template-woo'),
            'google'      => true, 
            'font-backup' => true,
            'units'       =>'em',
            'text-align'  => false,
            'subsets'     => false,
            'output'      => 'h1',
            'default'     => array(
                'color'       => '#333', 
                'font-style'  => '700', 
                'font-family' => 'Poppins', 
                'google'      => true,
                'font-size'   => '2', 
                'line-height' => '2.5'
            ),
        ),

        array(
            'id'          => 'opt-typography-auxiliar',
            'type'        => 'typography', 
            'title'       => __('h2, h3', 'master-template-woo'),
            'google'      => true, 
            'font-backup' => true,
            'units'       =>'em',
            'text-align'  => false,
            'subsets'     => false,
            'output'      => 'h2, h3',
            'default'     => array(
                'color'       => '#333', 
                'font-style'  => '700', 
                'font-family' => 'Poppins', 
                'google'      => true,
                'font-size'   => '2', 
                'line-height' => '2.5'
            ),
        ),

        array(
            'id'          => 'opt-typography-secondary',
            'type'        => 'typography', 
            'title'       => __('h4, h5', 'master-template-woo'),
            'google'      => true, 
            'font-backup' => true,
            'units'       =>'em',
            'text-align'  => false,
            'subsets'     => false,
            'output'      => 'h4, h5',
            'default'     => array(
                'color'       => '#333', 
                'font-style'  => '700', 
                'font-family' => 'Poppins', 
                'google'      => true,
                'font-size'   => '2', 
                'line-height' => '2.5'
            ),
        ),


        array(
            'id'          => 'opt-pr-typography',
            'type'        => 'typography', 
            'title'       => __('Parrafos (p, span, li)', 'master-template-woo'),
            'google'      => true, 
            'font-backup' => true,
            'units'       =>'em',
            'text-align'  => false,
            'subsets'     => false,
            'output'      => 'p, li, span',
            'letter-spacing' => true,
            'default'     => array(
                'color'       => '#757575', 
                'font-style'  => '500', 
                'font-family' => 'Roboto', 
                'google'      => true,
                'font-size'   => '1', 
                'line-height' => '1.5',
                'letter-spacing' => '.1'
            ),
        ),

        array(
            'id'          => 'opt-buttons-typography',
            'type'        => 'typography', 
            'title'       => __('Botones', 'master-template-woo'),
            'google'      => true, 
            'font-backup' => true,
            'units'       =>'em',
            'text-align'  => false,
            'subsets'     => false,
            'line-height' => false,
            'color'       => false,
            'letter-spacing' => true,
            'output'      => '.button-master',
            'default'     => array( 
                'font-style'  => '500', 
                'font-family' => 'Roboto', 
                'google'      => true,
                'font-size'   => '1',
                'letter-spacing' => '.1'
            ),
        ),

        array(
            'id'            => 'section-typography-menus',
            'title'         => __('Menús', 'master-template-woo'),
            'type'          => 'section',
            'indent'        => true
        ),

        array(
            'id'          => 'opt-typography-menu',
            'type'        => 'typography', 
            'title'       => __('Menú Principal y/o Secundario', 'master-template-woo'),
            'google'      => true, 
            'font-backup' => true,
            'units'       =>'em',
            'text-align'  => false,
            'subsets'     => false,
            'color'     => false,
            'font-size'   => true,
            'line-height' => true,
            'font-style'  => false, 
            'output'      => '.bottom-header .menu-item .nav-link',
            'default'     => array(
                'font-family' => 'Poppins',
                'font-style'  => '500',
            ),
        ),

        array(
            'id'          => 'opt-typography-menu-lateral',
            'type'        => 'typography', 
            'title'       => __('Menú Lateral', 'master-template-woo'),
            'google'      => true, 
            'font-backup' => true,
            'units'       =>'em',
            'text-align'  => false,
            'subsets'     => false,
            'color'     => false,
            'font-size'   => true,
            'line-height' => true,
            'font-style'  => false, 
            'output'      => '.box-menu-lateral .menu-item .nav-link',
            'default'     => array(
                'font-family' => 'Poppins',
                'font-style'  => '500',
                'font-size'   => '2'
            ),
            'required'    => array('menu_lateral', '=', true)
        ),


        array(
            'id'          => 'opt-typography-menu-header-top',
            'type'        => 'typography', 
            'title'       => __('Menú superior', 'master-template-woo'),
            'google'      => true, 
            'font-backup' => true,
            'units'       =>'em',
            'text-align'  => false,
            'subsets'     => false,
            'color'     => false,
            'font-size'   => true,
            'line-height' => true,
            'font-style'  => false, 
            'output'      => '.box-info-menu span',
            'default'     => array(
                'font-family' => 'Poppins',
                'font-style'  => '500',
                'font-size'   => '.9'
            ),
            'required'    => array('header-top-on-off', '=', true)
        ),
    )
) );