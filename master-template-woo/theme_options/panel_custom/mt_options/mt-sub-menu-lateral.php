<?php

//Menu Lateral
Redux::setSection( $opt_name, array(
    'title'             => __('Menú Lateral', 'master-template-woo'),
    'id'                => 'opt-menu-lateral',
    'subsection'        => true,
    'customizer_width'  => '450px',
    'fields'            => array(

        array(
            'id'        => 'menu_lateral',
            'type'      => 'switch',
            'title'     => esc_html__('Menú Lateral', 'master-template-woo'),
            'default'   => false,
            'required'  => array( 'header-bottom-style', '!=', '3' ),
        ),

        array(
            'id'       => 'opt-logo-select-menu-lateral',
            'type'     => 'select',
            'title'    => __('Logo Menú Lateral', 'master-template-woo'),
            'options'  => array(
                '1' => 'Logo Oscuro',
                '2' => 'Logo Claro'
            ),
            'default'  => '1',
            'required'    => array( 'menu_lateral', '=', true ),
        ),

        array(
            'id'       => 'menu-lateral-dimensions',
            'type'     => 'dimensions',
            'units'    => array('em','px','%'),
            'title'    => __('Dimensiones (Width/Height)', 'redux-framework-demo'),
            'default'  => array(
                'Width'   => '200', 
                'Height'  => '100'
            ),
            'output'    => '.box-menu-lateral',
            'required'    => array( 'menu_lateral', '=', true ),

        ),


        array(
            'id'          => 'bg-menu-lateral',
            'type'        => 'color_rgba', 
            'title'       => __('Color fondo', 'master-template-woo'),
            'output'      => array(
                'background-color' => '.box-menu-lateral'),
            'required'    => array( 'menu_lateral', '=', true ),
        ),

        array(
            'id'          => 'color-text-menu-lateral',
            'type'        => 'link_color', 
            'title'       => __('Color enlaces menú', 'master-template-woo'),
            'output'      => '.box-menu-lateral .menu-item .nav-link',
            'default'  => array(
                'regular'  => '#303030',
                'hover'    => '#ccc',
                'active'   => '#ccc',
                'visited'  => '#ccc',
            ),
            'required'    => array( 'menu_lateral', '=', true ),
        ),

        array(
            'id'          => 'section-opt-button-menu-lateral',
            'type'        => 'section', 
            'title'       => __('Botón "Open - Menú Lateral" Encabezado estático', 'master-template-woo'),
            'indent'     => true,
            'required'    => array( 'menu_lateral', '=', true ),

        ),

        array(
            'id'       => 'button-menu-lateral-style',
            'type'     => 'image_select',
            'title'    => __( 'Estilo botón', 'master-template-woo' ),
            'options'  => array(
                '1'       => array(
                    'alt' => 'Button Lines',
                    'img' => get_template_directory_uri() . '/assets/img/button-toggle-line.jpg',
                ),

                '2'       => array(
                    'alt' => 'Button Grid',
                    'img' => get_template_directory_uri() . '/assets/img/button-toggle-grid.jpg',
                ),

            ),

            'default'  => 1,

            'required'  => array( 'menu_lateral', '=', true ),
        ),

        array(
            'id'       => 'bg-open-button-lateral',
            'type'     => 'color_rgba',
            'title'    => __('Color fondo', 'master-template-woo'),
            'default'  => '#fff',
            'output'   => array(
                'background-color' => '.static-header .button-menu-lateral.open-menu'
            ),
            'required'    => array( 'menu_lateral', '=', true )
        ),

        array(
            'id'       => 'color-open-button-lateral',
            'type'     => 'color',
            'title'    => __('Color contenido', 'master-template-woo'),
            'default'  => '#fff',
            'output'   => array(
                'background-color' => '.static-header .button-menu-lateral.open-menu .line, .static-header .button-menu-lateral.open-menu .line:before, .static-header .button-menu-lateral.open-menu .line:after, .static-header .button-style-grid.open-menu .square'
            ),
            'required'    => array( 'menu_lateral', '=', true )
        ),

        array(
            'id'       => 'border-open-button-lateral',
            'type'     => 'border',
            'title'    => __('Borde', 'master-template-woo'),
            'output'   => '.static-header .button-menu-lateral.open-menu',
            'default'  => array(
                'border-color'  => '#000', 
                'border-style'  => 'solid', 
                'border-top'    => '1px', 
                'border-right'  => '1px', 
                'border-bottom' => '1px', 
                'border-left'   => '1px'
            ),
            'required'    => array( 'menu_lateral', '=', true )
        ),

        array(
            'id'          => 'section-opt-button-menu-lateral-sticky',
            'type'        => 'section', 
            'title'       => __('Botón "Open - Menú Lateral" Encabezado fijo', 'master-template-woo'),
            'indent'     => true,
            'required'    => array( 'menu_lateral', '=', true )

        ),

        array(
            'id'       => 'bg-open-button-lateral-sticky',
            'type'     => 'color_rgba',
            'title'    => __('Color fondo', 'master-template-woo'),
            'default'  => '#fff',
            'output'   => array(
                'background-color' => '.sticky-header .button-menu-lateral.open-menu'
            ),
            'required'    => array( 'menu_lateral', '=', true )
        ),

        array(
            'id'       => 'color-open-button-lateral-sticky',
            'type'     => 'color',
            'title'    => __('Color contenido', 'master-template-woo'),
            'default'  => '#fff',
            'output'   => array(
                'background-color' => '.sticky-header .button-menu-lateral.open-menu .line, .sticky-header .button-menu-lateral.open-menu .line:before, .sticky-header .button-menu-lateral.open-menu .line:after, .sticky-header .button-style-grid .square'
            ),
            'required'    => array( 'menu_lateral', '=', true )
        ),

        array(
            'id'       => 'border-open-button-lateral-sticky',
            'type'     => 'border',
            'title'    => __('Borde', 'master-template-woo'),
            'output'   => '.sticky-header .button-menu-lateral.open-menu',
            'default'  => array(
                'border-color'  => '#000', 
                'border-style'  => 'solid', 
                'border-top'    => '1px', 
                'border-right'  => '1px', 
                'border-bottom' => '1px', 
                'border-left'   => '1px'
            ),
            'required'    => array( 'menu_lateral', '=', true )
        ),

        array(
            'id'          => 'section-close-button-menu-lateral',
            'type'        => 'section', 
            'title'       => __('Botón "Close - Menú Lateral"', 'master-template-woo'),
            'indent'     => true,
            'required'    => array( 'menu_lateral', '=', true )

        ),

        array(
            'id'       => 'bg-close-button-lateral',
            'type'     => 'color_rgba',
            'title'    => __('Color fondo', 'master-template-woo'),
            'default'  => '#fff',
            'output'   => array(
                'background-color' => '.button-menu-lateral.close-menu'
            ),
            'required'    => array( 'menu_lateral', '=', true )
        ),

        array(
            'id'       => 'color-close-button-lateral',
            'type'     => 'color',
            'title'    => __('Color contenido', 'master-template-woo'),
            'default'  => '#fff',
            'output'   => array(
                'background-color' => '.button-menu-lateral.close-menu .line, .button-menu-lateral.close-menu .line:before, .button-menu-lateral.close-menu .line:after, .button-menu-lateral.close-menu .square'
            ),
            'required'    => array( 'menu_lateral', '=', true )
        ),

        array(
            'id'       => 'border-close-button-lateral',
            'type'     => 'border',
            'title'    => __('Borde', 'master-template-woo'),
            'output'   => '.button-menu-lateral.close-menu',
            'default'  => array(
                'border-color'  => '#000', 
                'border-style'  => 'solid', 
                'border-top'    => '1px', 
                'border-right'  => '1px', 
                'border-bottom' => '1px', 
                'border-left'   => '1px'
            ),
            'required'    => array( 'menu_lateral', '=', true )
        ),

        array(
            'id'            => 'section-menu-lateral-buttons',
            'title'         => __('Botones Redes Sociales', 'master-template-woo-woo'),
            'type'          => 'section',
            'indent'        => true,
            'required'    => array( 
                array('opt-multi-select-social-buttons', '=', '3'),
                array('menu_lateral', '=', true )     
            ),
        ),

        array(
            'id'       => 'texto-redes-menu-lateral',
            'title'    => __('Texto menú redes', 'master-template-woo-woo'),
            'type'          => 'text',
            'default'  => "Siguenos en"
        ),

        array(
            'id'       => 'type-menu-lateral-buttons',
            'type'     => 'select',
            'title'    => __('Tipo enlace', 'master-template-woo'),
            'options'  => array(
                '1' => 'Botón',
                '2' => 'Link',
            ),
            'default'  => '1',
            'required'  => array(
                array('opt-multi-select-social-buttons', '=', '3'),
                array('menu_lateral', '=', true )
            ),
        ),

        array(
            'id'          => 'color-menu-lateral-links',
            'type'        => 'link_color', 
            'title'       => __('Color texto enlaces', 'master-template-woo'),
            'output'      => array(
                'color' => '.box-menu-lateral .type-link',
            ),
            'default'  => array(
                'regular'  => '#1e73be',
                'hover'    => '#dd3333',
                'active'   => '#8224e3',
                'visited'  => '#8224e3',
            ),
            'required'  => array(
                array('menu_lateral', '=', true ),
                array('opt-multi-select-social-buttons', '=', '3'),
                array('type-menu-lateral-buttons', '=', '2')
            )
        ),

        array(
            'id'       => 'style-color-menu-lateral-buttons',
            'type'     => 'select',
            'title'    => __('Estilo', 'master-template-woo'),
            'options'  => array(
                '1' => 'Principal',
                '2' => 'Secundario',
                '3' => 'Auxiliar'
            ),
            'default'  => '1',
            'required'    => array( 
                array('opt-multi-select-social-buttons', '=', '3'),
                array('menu_lateral', '=', true ),
                array('type-menu-lateral-buttons', '=', '1')

            ),
        ),

        array(
            'id'       => 'size-menu-lateral-buttons',
            'type'     => 'select',
            'title'    => __('Tamaño', 'master-template-woo'),
            'options'  => array(
                '1' => 'Normal',
                '2' => 'Largo',
                '3' => 'Pequeño'
            ),
            'default'  => '1',
            'required'    => array( 
                array('opt-multi-select-social-buttons', '=', '3'),
                array('menu_lateral', '=', true )     
            ),
        ),
    )
));