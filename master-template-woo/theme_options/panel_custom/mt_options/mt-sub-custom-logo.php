<?php

//Custom Logo
Redux::setSection( $opt_name, array(
    'title'            => __( 'Logo personalizado', 'master-template-woo' ),
    'id'               => 'logo-header',
    'subsection'       => true,
    'customizer_width' => '450px',
    'fields'           => array(
        array(
            'id'       => 'img-logo-dark',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Logo Oscuro', 'master-template-woo'),
            'desc'     => __('Imagen del logo en versión oscura', 'master-template-woo'),
            'desc'     => __('Medidas sugeridas Ancho: 300px, Alto: 300px', 'master-template-woo'),
            'default'  => array(
                'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
            ),
        ),

        array(
            'id'       => 'img-logo-light',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Logo Claro', 'master-template-woo'),
            'desc'     => __('Imagen del logo en versión clara', 'master-template-woo'),
            'desc'     => __('Width: 300px, heigth: 300px', 'master-template-woo'),
            'default'  => array(
                'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
            ),
        ),
    )
) );