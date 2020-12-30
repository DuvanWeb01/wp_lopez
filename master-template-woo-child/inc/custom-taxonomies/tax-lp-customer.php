<?php

if ( ! function_exists( 'lp_customer_func' ) ) {

    // Register Custom Taxonomy
    function lp_customer_func() {
    
        $labels = array(
            'name'                       => _x( 'Clientes', 'Taxonomy General Name', 'master-template-woo' ),
            'singular_name'              => _x( 'Cliente', 'Taxonomy Singular Name', 'master-template-woo' ),
            'menu_name'                  => __( 'Clientes', 'master-template-woo' ),
            'all_items'                  => __( 'Todos los Clientes', 'master-template-woo' ),
            'parent_item'                => __( 'Parent Item', 'master-template-woo' ),
            'parent_item_colon'          => __( 'Parent Item:', 'master-template-woo' ),
            'new_item_name'              => __( 'New Item Name', 'master-template-woo' ),
            'add_new_item'               => __( 'Add New Item', 'master-template-woo' ),
            'edit_item'                  => __( 'Edit Item', 'master-template-woo' ),
            'update_item'                => __( 'Update Item', 'master-template-woo' ),
            'view_item'                  => __( 'View Item', 'master-template-woo' ),
            'separate_items_with_commas' => __( 'Separate items with commas', 'master-template-woo' ),
            'add_or_remove_items'        => __( 'Add or remove items', 'master-template-woo' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'master-template-woo' ),
            'popular_items'              => __( 'Popular Items', 'master-template-woo' ),
            'search_items'               => __( 'Search Items', 'master-template-woo' ),
            'not_found'                  => __( 'Not Found', 'master-template-woo' ),
            'no_terms'                   => __( 'No items', 'master-template-woo' ),
            'items_list'                 => __( 'Items list', 'master-template-woo' ),
            'items_list_navigation'      => __( 'Items list navigation', 'master-template-woo' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
        );
        register_taxonomy( 'lp_customer', array( 'proyectos' ), $args );
    
    }
    add_action( 'init', 'lp_customer_func', 0 );
    
}