<?php

/*============= INFO CONTACT ================*/
Redux::setSection( $opt_name, array(
    'title'            => __( 'Datos de Contacto', 'master-template-woo' ),
    'id'               => 'opt-contact',
    'desc'             => __( 'Información de contacto de la empresa', 'master-template-woo' ),
    'customizer_width' => '400px',
    'icon'             => 'el el-address-book',
    'fields'           => array(
        //Address

        array(
            'id'            => 'section-address',
            'title'         => 'Dirección Local/Oficina',
            'type'          => 'section',
            'indent'        => true
        ),

        array(
            'id'            => 'opt-address',
            'title'         => 'Dirección',
            'type'          => 'text'
        ),
        
        array(
            'id'            => 'opt-url-address',
            'title'         => 'Enlace de Google Maps',
            'type'          => 'text',
            'default'       => '#'
        ),

        array(
            'id'     => 'section-end',
            'type'   => 'section',
            'indent' => false,
        ),

        //Section end

        //Phone
        array(
            'id'            => 'opt-phone',
            'title'         => 'Teléfono',
            'type'          => 'text'
        ),

        //Whatsapp
        array(
            'id'            => 'section-whatsapp',
            'title'         => 'Whatsapp',
            'type'          => 'section',
            'indent'        => true
        ),

        array(
            'id'          => 'float-what-button',
            'type'        => 'switch', 
            'title'       => __('Botón Whatsapp', 'master-template-woo'),
            'on'          => __('Mostrar', 'master-template-woo'),
            'off'          => __('Ocultar', 'master-template-woo'),
            'default'     => true,
            'required'  => array('active-buttons', '=', '1' ),
        ),

        array(
            'id'            => 'opt-whp',
            'title'         => 'Teléfono Whatsapp',
            'type'          => 'text'
        ),

        array(
            'id'            => 'opt-whp-msje',
            'title'         => 'Mensaje predeterminado (API Whatsapp)',
            'type'          => 'text',
            'default'       => 'Hola, deseo información sobre'
        ),

        array(
            'id'     => 'section-end',
            'type'   => 'section',
            'indent' => false,
        ),

        //Section end

        //Website
        array(
            'id'            => 'opt-web',
            'title'         => 'Link del Sitio Web',
            'type'          => 'text',
            'default'       => '#'
        ),

        array(
            'id'            => 'opt-email-info',
            'title'         => 'Correo informativo',
            'type'          => 'text',
            'default'       => '#'
        )
    )
) );