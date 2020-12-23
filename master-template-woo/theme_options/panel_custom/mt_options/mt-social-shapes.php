<?php

/*============= SOCIAL SHAPES ================*/
Redux::setSection( $opt_name, array(
    'title'            => __( 'Redes sociales', 'master-template-woo' ),
    'id'               => 'social-shapes',
    'customizer_width' => '400px',
    'icon'             => 'el el-rss',
    'fields'           => array(
        //Facebook
        array(
            'id'          => 'float-fb-button',
            'type'        => 'switch', 
            'title'       => __('Facebook', 'master-template-woo'),
            'on'          => __('Mostrar', 'master-template-woo-woo'),
            'off'         => __('Ocultar', 'master-template-woo-woo'),
            'default'     => false,
        ),

        array(
            'id'            => 'social-fb',
            'title'         => '',
            'subtitle'      => __('Enlace a Fanpage o Perfil de Facebook', 'master-template-woo-woo'),
            'type'          => 'text',
            'placeholder'   => 'ej: https://www.facebook.com/myprofile',
            'default'       => 'https://www.facebook.com/',
            'required'  => array('float-fb-button', '=', '1' )
        ),

        //Instagram
        array(
            'id'          => 'float-ins-button',
            'type'        => 'switch', 
            'title'       => __('Instagram', 'master-template-woo'),
            'on'          => __('Mostrar', 'master-template-woo-woo'),
            'off'         => __('Ocultar', 'master-template-woo-woo'),
            'default'     => false,
        ),

        array(
            'id'            => 'social-ins',
            'title'         => '',
            'subtitle'      => __('Enlace a página de Instagram', 'master-template-woo-woo'),
            'type'          => 'text',
            'placeholder'   => 'ej: https://www.instagram.com/myprofile',
            'default'       => 'https://www.instagram.com/',
            'required'  => array('float-ins-button', '=', '1' )
        ),

        //Twitter
        array(
            'id'          => 'float-tw-button',
            'type'        => 'switch', 
            'title'       => __('Twitter', 'master-template-woo'),
            'on'          => __('Mostrar', 'master-template-woo-woo'),
            'off'         => __('Ocultar', 'master-template-woo-woo'),
            'default'     => false,
        ),

        array(
            'id'            => 'social-tw',
            'title'         => '',
            'subtitle'      => __('Enlace a página de Twitter', 'master-template-woo-woo'),
            'type'          => 'text',
            'placeholder'   => 'ej: https://www.twitter.com/myprofile',
            'default'       => 'https://twitter.com/?lang=es',
            'required'  => array('float-tw-button', '=', '1' )
        ),

        //Linked In
        array(
            'id'          => 'float-li-button',
            'type'        => 'switch', 
            'title'       => __('Linked In', 'master-template-woo'),
            'on'          => __('Mostrar', 'master-template-woo-woo'),
            'off'         => __('Ocultar', 'master-template-woo-woo'),
            'default'     => false,
        ),

        array(
            'id'            => 'social-li',
            'title'         => '',
            'subtitle'      => __('Enlace a página o perfil de Linked In', 'master-template-woo-woo'),
            'type'          => 'text',
            'placeholder'   => 'ej: https://www.linkedin.com/myprofile',
            'default'       => 'https://co.linkedin.com/',
            'required'  => array('float-li-button', '=', '1' )
        ),

        //YouTube
        array(
            'id'          => 'float-yt-button',
            'type'        => 'switch', 
            'title'       => __('YouTube', 'master-template-woo'),
            'on'          => __('Mostrar', 'master-template-woo-woo'),
            'off'         => __('Ocultar', 'master-template-woo-woo'),
            'default'     => false,
        ),

        array(
            'id'            => 'social-yt',
            'title'         => '',
            'subtitle'      => __('Enlace a canal de YouTube', 'master-template-woo-woo'),
            'type'          => 'text',
            'placeholder'   => 'ej: https://www.youtube.com/myprofile',
            'default'       => 'https://www.youtube.com/',
            'required'      => array('float-yt-button', '=', '1' ),
        ),

        //Pinterest
        array(
            'id'          => 'float-pt-button',
            'type'        => 'switch', 
            'title'       => __('Pinterest', 'master-template-woo'),
            'on'          => __('Mostrar', 'master-template-woo-woo'),
            'off'         => __('Ocultar', 'master-template-woo-woo'),
            'default'     => false,
            
        ),

        array(
            'id'            => 'social-pt',
            'title'         => '',
            'subtitle'      => __('Enlace a perfil de Pinterest', 'master-template-woo-woo'),
            'type'          => 'text',
            'placeholder'   => 'ej: https://www.youtube.com/myprofile',
            'default'       => 'https://co.pinterest.com/',
            'required'  => array('float-pt-button', '=', '1' ),
        ),

        array(
            'id'       => 'opt-multi-select-social-buttons',
            'type'     => 'select',
            'multi'    => true,
            'title'    => __('Mostrar botones en', 'master-template-woo-woo'),
            'desc'        => __('Puedes mostrar estos botones en diferentes secciones de la página: Botones Flotantes, Footer, Menú Lateral, Encabezado Superior', 'master-template-woo-woo'), 
            'options'  => array(
                '1' => 'Botones flotantes',
                '2' => 'Encabezado superior',
                '3' => 'Menú Lateral',
                '4' => 'Footer inferior'),
            'default'  => array('2','3')
        ),

    )
) );
