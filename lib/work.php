<?php

namespace Roots\Sage\Work;

/**
* Registers a new post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
function work() {

	$labels = array(
		'name'                => __( 'Works', 'jchck_' ),
		'singular_name'       => __( 'Work', 'jchck_' ),
		'add_new'             => _x( 'Add New Work', 'jchck_', 'jchck_' ),
		'add_new_item'        => __( 'Add New Work', 'jchck_' ),
		'edit_item'           => __( 'Edit Work', 'jchck_' ),
		'new_item'            => __( 'New Work', 'jchck_' ),
		'view_item'           => __( 'View Work', 'jchck_' ),
		'search_items'        => __( 'Search Works', 'jchck_' ),
		'not_found'           => __( 'No Works found', 'jchck_' ),
		'not_found_in_trash'  => __( 'No Works found in Trash', 'jchck_' ),
		'parent_item_colon'   => __( 'Parent Work:', 'jchck_' ),
		'menu_name'           => __( 'Works', 'jchck_' ),
	);

	$args = array(
		'labels'                   => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor'
		)
	);

	register_post_type( 'work', $args );
}

add_action( 'init', __NAMESPACE__ . '\\work' );
