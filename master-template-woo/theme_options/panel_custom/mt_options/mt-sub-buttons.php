<?php

//Buttons
Redux::setSection( $opt_name, array(
    'title'            => __( 'Botones', 'master-template-woo' ),
    'id'               => 'opt-style-buttons',
    'subsection'       => true,
    'customizer_width' => '450px',
    'fields'           => array(
        array(
            'id'          => 'section-style-master-buttons',
            'type'        => 'section', 
            'title'       => __('"Button Master"', 'master-template-woo'),
            'subtitle'    => __('Se aplica a los botones generados por el tema', 'master-template-woo'),
            'indent'     => true
        ),


        array(
            'id'       => 'select-button-style',
            'type'     => 'image_select',
            'title'    => __( 'Tipo Botones', 'master-template-woo' ),
            'options'  => array(
                '1'       => array(
                    'alt' => 'Redondo',
                    'img' => get_template_directory_uri() . '/assets/img/rounded-button.jpg',
                ),

                '2'       => array(
                    'alt' => 'Esquinas redondeadas',
                    'img' => get_template_directory_uri() . '/assets/img/half-rounded-button.jpg',
                ),

                '3'       => array(
                    'alt' => 'Recto',
                    'img' => get_template_directory_uri() . '/assets/img/squared-button.jpg',
                )
            ),

            'default'     => '1'
        ),

        //Principal Button
        array(
            'id'          => 'section-principal-button',
            'type'        => 'section', 
            'title'       => __('Botón principal', 'master-template-woo'),
            'indent' => true,
            
        ),

        array(
            'id'          => 'button-principal-bg',
            'type'        => 'color', 
            'title'       => __('Color fondo', 'master-template-woo'),
            'output'      => array(
                'background-color' => '.principal-button, .filter-toggle.active a',
            ),
            'default'     => '#EA472F',
        ),
        

        array(
            'id'          => 'hover-button-cta-bg',
            'type'        => 'color', 
            'title'       => __('Color fondo (Hover)', 'master-template-woo'),
            'output'      => array(
                'background-color' => '.principal-button:hover',
            ),
            'default'     => '#c93e2c',
        ),

        array(
            'id'          => 'opt-button-principal-color',
            'type'        => 'link_color', 
            'title'       => __('Color texto botón', 'master-template-woo'),
            'output'      => '.principal-button',
            'default'  => array(
                'regular'  => '#fff',
                'hover'    => '#fff',
                'active'   => '#f2f2f2',
                'visited'  => '#f2f2f2',
            ),
        ),

        array(
            'id'       => 'principal-button-border',
            'type'     => 'border',
            'title'    => __('Opciones borde', 'master-template-woo'),
            'output'   => array('.principal-button'),
            'default'  => array(
                'border-style'  => 'none'
            ),
        ),

        array(
            'id'       => 'principal-button-border-hover',
            'type'     => 'border',
            'title'    => __('Opciones borde (hover)', 'master-template-woo'),
            'output'   => array('.principal-button:hover'),
            'default'  => array(
                'border-style'  => 'none'
            ),
        ),


        //Secondary Button
        array(
            'id'          => 'section-secondary-button',
            'type'        => 'section', 
            'title'       => __('Botón secundario', 'master-template-woo'),
            'indent' => true,
            
        ),

        array(
            'id'          => 'button-secondary-bg',
            'type'        => 'color', 
            'title'       => __('Color fondo', 'master-template-woo'),
            'output'      => array(
                'background-color'   => '.secondary-button',
            ),
            'default'     => '#84B300',
        ),

        array(
            'id'          => 'hover-button-secondary-bg',
            'type'        => 'color', 
            'title'       => __('Color fondo (Hover)', 'master-template-woo'),
            'output'      => array(
                'background-color'   => '.secondary-button:hover',
            ),
            'default'     => '#739908',
        ),

        array(
            'id'          => 'opt-button-secondary-color',
            'type'        => 'link_color', 
            'title'       => __('Color texto', 'master-template-woo'),
            'output'      => '.secondary-button',
            'default'  => array(
                'regular'  => '#fff',
                'hover'    => '#fff',
                'active'   => '#f2f2f2',
                'visited'  => '#f2f2f2',
            ),
        ),

        array(
            'id'       => 'secondary-button-border',
            'type'     => 'border',
            'title'    => __('Opciones borde', 'master-template-woo'),
            'output'   => '.secondary-button',
            'default'  => array(
                'border-style'  => 'none',
            ),
        ),

        array(
            'id'       => 'secondary-button-border-hover',
            'type'     => 'border',
            'title'    => __('Opciones borde (hover)', 'master-template-woo'),
            'output'   => '.secondary-button:hover',
            'default'  => array(
                'border-style'  => 'none',
            ),
        ),

        //Aux Button
        array(
            'id'          => 'section-aux-button',
            'type'        => 'section', 
            'title'       => __('Botón auxiliar', 'master-template-woo'),
            'indent' => true,
            
        ),

        array(
            'id'          => 'button-aux-bg',
            'type'        => 'color', 
            'title'       => __('Color fondo', 'master-template-woo'),
            'output'      => array(
                'background-color'   => '.aux-button',
            ),
            'default'     => '#84B300',
        ),

        array(
            'id'          => 'hover-button-aux-bg',
            'type'        => 'color', 
            'title'       => __('Color fondo (Hover)', 'master-template-woo'),
            'output'      => array(
                'background-color'   => '.aux-button:hover',
            ),
            'default'     => '#739908',
        ),

        array(
            'id'          => 'opt-button-aux-color',
            'type'        => 'link_color', 
            'title'       => __('Color texto', 'master-template-woo'),
            'output'      => '.aux-button',
            'default'  => array(
                'regular'  => '#fff',
                'hover'    => '#fff',
                'active'   => '#f2f2f2',
                'visited'  => '#f2f2f2',
            ),
        ),

        array(
            'id'       => 'aux-button-border',
            'type'     => 'border',
            'title'    => __('Opciones borde', 'master-template-woo'),
            'output'   => '.aux-button',
            'default'  => array(
                'border-style'  => 'none',
            ),
        ),

        array(
            'id'       => 'aux-button-border-hover',
            'type'     => 'border',
            'title'    => __('Opciones borde (hover)', 'master-template-woo'),
            'output'   => '.aux-button',
            'default'  => array(
                'border-style'  => 'none',
            ),
        ),


        //Text Link
        array(
            'id'       => 'section-text-link',
            'type'     => 'section',
            'title'    => __('Enlaces', 'master-template-woo'),
            'indent'  => true,
        ),

        array(
            'id'       => 'color-text-link',
            'type'     => 'link_color',
            'title'    => __('Color', 'master-template-woo'),
            'output'   => '.text-link',
            'default'  => array(
                'regular'  => '#1e73be',
                'hover'    => '#1a5991',
                'active'   => '#1a5991',
                'visited'  => '#1a5991',
            ),
        ),

        
        array(
            'id'          => 'section-opt-float-buttons',
            'type'        => 'section', 
            'title'       => __('Opciones botones flotantes', 'master-template-woo'),
            'indent'     => true
        ),

        array(
            'id'          => 'active-buttons',
            'type'        => 'switch', 
            'title'       => __('Botones Flotantes', 'master-template-woo'),
            'on'          => __('Mostrar', 'master-template-woo'),
            'off'          => __('Ocultar', 'master-template-woo'),
            'default'     => '1'
        ),

        array(
            'id'       => 'style-alignment-float-buttons',
            'type'     => 'select',
            'title'    => __('Fijar en', 'master-template-woo'),
            'options'  => array(
                '1' => 'Centro',
                '2' => 'Derecha',
                '3' => 'Izquierda'
            ),
            'default'  => '2',
            'required'  => array('active-buttons', '=', '1' ),
        ),

        array(
            'id'       => 'type-float-buttons',
            'type'     => 'select',
            'title'    => __('Tipo enlace', 'master-template-woo'),
            'options'  => array(
                '1' => 'Botón',
                '2' => 'Link',
            ),
            'default'  => '1',
            'required'  => array('active-buttons', '=', '1' ),
        ),

        array(
            'id'       => 'style-color-float-buttons',
            'type'     => 'select',
            'title'    => __('Estilo', 'master-template-woo'),
            'options'  => array(
                '1' => 'Principal',
                '2' => 'Secundario',
                '3' => 'Auxiliar'
            ),
            'default'  => '1',
            'required'  => array(
                array('active-buttons', '=', '1' ),
                array('type-float-buttons', '=', '1')
            ),
        ),

        array(
            'id'       => 'color-float-link',
            'type'     => 'link_color',
            'title'    => __('Color', 'master-template-woo'),
            'output'   => '.float-buttons .type-link',
            'default'  => array(
                'regular'  => '#1e73be',
                'hover'    => '#1a5991',
                'active'   => '#1a5991',
                'visited'  => '#1a5991',
            ),
            'required'  => array(
                array('active-buttons', '=', '1' ),
                array('type-float-buttons', '=', '2')
            ),
        ),

        array(
            'id'       => 'size-float-buttons',
            'type'     => 'select',
            'title'    => __('Tamaño', 'master-template-woo'),
            'options'  => array(
                '1' => 'Normal',
                '2' => 'Largo',
                '3' => 'Pequeño'
            ),
            'default'  => '1',
            'required'  => array('active-buttons', '=', '1' ),
        ),

        array(
            'id'          => 'other-float-buttons',
            'type'        => 'section', 
            'title'       => __('Otros botones', 'master-template-woo'),
            'indent'     => true,
            'required'  => array('active-buttons', '=', '1' ),
        ),

        array(
            'id'          => 'float-top-button',
            'type'        => 'switch', 
            'title'       => __('Regresar arriba', 'master-template-woo'),
            'default'     => 1,
            'required'  => array('active-buttons', '=', '1' ),
        ),        
    ),
) );
