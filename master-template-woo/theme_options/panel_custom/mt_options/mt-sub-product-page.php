<?php

//Page product
Redux::setSection( $opt_name, array(
    'title'            => __( 'Product page', 'master-template-woo' ),
    'id'               => 'opt-woo-product',
    'desc'             => __( 'Options for Product page of Woocommerce', 'master-template-woo' ),
    'customizer_width' => '400px',
    'subsection'       => true,
    'fields'           => array(
        array(
            'id'            => 'woo-subheader-on-off',
            'title'         => 'Enable Sub Header',
            'type'          => 'switch',
            'default'       => true
        ),

        array(
            'id'       => 'woo-select-product-subheader',
            'type'     => 'select',
            'title'    => __('Image Subheader', 'master-template-woo'), 
            'subtitle' => __('Select a option image subheader', 'master-template-woo'),
            'options'  => array(
                '1' => 'Custom Image',
                '2' => 'Attachment Image'
            ),
            'default'  => '1',
            'required' => array('woo-subheader-on-off','=',true)
        ),

        array(
            'id'       => 'woo-img-product',
            'type'     => 'media', 
            'url'      => true,
            'title'    => __('Image Sub Header', 'master-template-woo'),
            'subtitle' => __('Upload your custom image', 'master-template-woo'),
            'desc'     => __('Width: 1920px, heigth: 1080px', 'master-template-woo'),
            'default'  => array(
                'url'=>'http://localhost/masterpage_ecommerce/wp-content/uploads/2019/07/adults-collaborate-collaboration-1036641.jpg'
            ),
            'required' => array('woo-select-product-subheader','=','1')
        ),

        array(
            'id'            => 'woo-comments-on-off',
            'title'         => 'Enable Comments Section',
            'type'          => 'switch',
            'default'       => false
        ),
    )
) );