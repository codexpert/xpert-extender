<?php

// Register Custom Page Section
function custom_post_type() {

	$labels = array(
		'name'                => _x( 'Page Sections', 'Page Section General Name', 'xpert_xtender' ),
		'singular_name'       => _x( 'Page Section', 'Page Section Singular Name', 'xpert_xtender' ),
		'menu_name'           => __( 'Page Sections', 'xpert_xtender' ),
		'name_admin_bar'      => __( 'Page Section', 'xpert_xtender' ),
		'parent_item_colon'   => __( 'Parent Section:', 'xpert_xtender' ),
		'all_items'           => __( 'All Sections', 'xpert_xtender' ),
		'add_new_item'        => __( 'Add New Section', 'xpert_xtender' ),
		'add_new'             => __( 'Add New', 'xpert_xtender' ),
		'new_item'            => __( 'New Section', 'xpert_xtender' ),
		'edit_item'           => __( 'Edit Section', 'xpert_xtender' ),
		'update_item'         => __( 'Update Section', 'xpert_xtender' ),
		'view_item'           => __( 'View Section', 'xpert_xtender' ),
		'search_items'        => __( 'Search Section', 'xpert_xtender' ),
		'not_found'           => __( 'Not found', 'xpert_xtender' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'xpert_xtender' ),
	);
	$args = array(
		'label'               => __( 'page_section', 'xpert_xtender' ),
		'description'         => __( 'Page Section Description', 'xpert_xtender' ),
		'labels'              => $labels,
		'supports'            => array( ),
		'taxonomies'          => array(),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'page_section', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );