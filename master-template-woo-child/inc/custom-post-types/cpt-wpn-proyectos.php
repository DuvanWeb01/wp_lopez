<?php

/*CPT PROYECTOS*/
if ( ! function_exists('wpn_proyectos') ) {

	// Register Custom Post Type
	function wpn_proyectos() {
	
		$labels = array(
			'name'                  => _x( 'Proyectos', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Proyecto', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Proyectos', 'text_domain' ),
			'name_admin_bar'        => __( 'Proyectos', 'text_domain' ),
			'archives'              => __( 'Archivo de proyectos', 'text_domain' ),
			'attributes'            => __( 'Atributos de proyectos', 'text_domain' ),
			'parent_item_colon'     => __( 'Proyecto padre', 'text_domain' ),
			'all_items'             => __( 'Todos los proyectos', 'text_domain' ),
			'add_new_item'          => __( 'Añadir nuevo proyecto', 'text_domain' ),
			'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
			'new_item'              => __( 'Nuevo proyecto', 'text_domain' ),
			'edit_item'             => __( 'Editar proyecto', 'text_domain' ),
			'update_item'           => __( 'Actualizar proyecto', 'text_domain' ),
			'view_item'             => __( 'Ver proyecto', 'text_domain' ),
			'view_items'            => __( 'Ver proyectos', 'text_domain' ),
			'search_items'          => __( 'Buscar proyecto', 'text_domain' ),
			'not_found'             => __( 'No encontrado', 'text_domain' ),
			'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
			'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
			'set_featured_image'    => __( 'Configurar imagen destacada', 'text_domain' ),
			'remove_featured_image' => __( 'Borrar imagen destacada', 'text_domain' ),
			'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
			'insert_into_item'      => __( 'Insertar en el proyecto', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Actualizar en este proyecto', 'text_domain' ),
			'items_list'            => __( 'Listado de proyectos', 'text_domain' ),
			'items_list_navigation' => __( 'Lista navegable de proyectos', 'text_domain' ),
			'filter_items_list'     => __( 'Filtro de lista de proyctos', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Proyecto', 'text_domain' ),
			'description'           => __( 'Entradas de proyectos', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-images-alt',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'Proyectos', $args );
	
	}
	add_action( 'init', 'wpn_proyectos', 0 );
	
}