<?php

/*============= POP UP ================*/
Redux::setSection( $opt_name, array(
    'id'               => 'opt-popup',
    'title'            => __('Pop Up', 'master-template-woo'),
    'icon'             => 'el el-star',
    'fields'           => array(
        array(
            'id'        => 'on-off-popup',
            'title'     => __('Habilitar Pop Up'),
            'type'      => 'switch',
            'default'   => false
        ),

        array(
            'id'       => 'opt-radio-popup',
            'type'     => 'radio',
            'title'    => __('¿En dónde mostrarás el Pop Up?', 'master-template-woo'),
            //Must provide key => value pairs for radio options
            'options'  => array(
                '1' => 'Todas las páginas', 
                '2' => 'Página de inicio',
                '3' => 'Una página específica'
            ),

            'default' => '1',
            'required'  => array( 'on-off-popup', '=', true )
        ),

        array(
            'id'        => 'info-popup',
            'desc'     => __('Para usar el Pop Up, pega este shortcode en donde lo necesites', 'master-template-woo'),
            'title'     => "[popup_master]",
            'type'      => 'info',
            'style'     => 'warning',
            'required'  => array( 'opt-radio-popup', '=', '3' )
        ),

        array(
            'id'            => 'time-popup',
            'title'         => __('Tiempo', 'master-template-woo'),
            'desc'          => __('Escribe en milisegundos el tiempo que debe retardar el Pop Up en aparecer'),
            'placeholder'   => __('ej: 3000'),
            'type'          => 'text',
            'default'       => '3000',
            'required'  => array( 'on-off-popup', '=', true )
        ),

        array(
            'id'            => 'time-cookie',
            'title'         => __('Tiempo de limpieza de la cookie', 'master-template-woo'),
            'desc'          => __('Escribe en milisegundos el tiempo que debe renovarse la cookie para que el pop-up aparezca de nuevo al mismo usuario. Por ej: 3600, corresponde a 1 hora. Déjalo vacío si quieres que aparezca siempre'),
            'placeholder'   => __('ej: 3600'),
            'type'          => 'text',
            'validate'      => 'numeric',
            'default'       => '3000',
            'required'  => array( 'on-off-popup', '=', true )
        ),

        array(
            'id'       => 'popup-style',
            'type'     => 'image_select',
            'title'    => __( 'Estilo Pop Up', 'master-template-woo' ),
            'options'  => array(
                '1'       => array(
                    'alt' => 'Imagen Derecha',
                    'img' => get_template_directory_uri() . '/assets/img/pop-up-content-img-right.jpg',
                ),

                '2'       => array(
                    'alt' => 'Imagen Izquierda',
                    'img' => get_template_directory_uri() . '/assets/img/pop-up-content-img-left.jpg',
                ),

                '3'       => array(
                    'alt' => 'Imagen Arriba',
                    'img' => get_template_directory_uri() . '/assets/img/pop-up-content-img-top.jpg',
                ),
            ),

            'default'  => 1,

            'required'  => array( 'on-off-popup', '=', true ),
        ),

        array(
            'id'            => 'img-popup',
            'title'         => __('Imagen Pop Up', 'master-template'),
            'subtitle'      => __('Para imagen vertical se recomienda un tamaño de 400px * 480px, para imagen horizontal 580px * 204px'),
            'type'          => 'media',
            'url'           => true,
            'required'  => array( 'on-off-popup', '=', true ),
        ),

        array(
            'id'            => 'title-popup',
            'title'         => __('Título (opcional)', 'master-template-woo'),
            'type'          => 'text',
            'required'  => array( 'on-off-popup', '=', true )
        ),

        array(
            'id'            => 'body-text-popup',
            'title'         => __('Cuerpo de texto', 'master-template-woo'),
            'type'          => 'textarea',
            'required'  => array( 'on-off-popup', '=', true )
        ),

        array(
            'id'            => 'shortcode-form',
            'title'         => __('Shortcode Formulario', 'master-template-woo'),
            'type'          => 'text',
            'required'  => array( 'on-off-popup', '=', true )
        )
    ) 
));
