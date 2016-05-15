<?php

namespace Jchck\Work;

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
		'name'                => __( 'Case Studies', 'jchck' ),
		'singular_name'       => __( 'Case Study', 'jchck' ),
		'add_new'             => _x( 'Add New Case Study', 'jchck', 'jchck' ),
		'add_new_item'        => __( 'Add New Case Study', 'jchck' ),
		'edit_item'           => __( 'Edit Case Study', 'jchck' ),
		'new_item'            => __( 'New Case Study', 'jchck' ),
		'view_item'           => __( 'View Case Study', 'jchck' ),
		'search_items'        => __( 'Search Case Studies', 'jchck' ),
		'not_found'           => __( 'No Case Studies found', 'jchck' ),
		'not_found_in_trash'  => __( 'No Case Studies found in Trash', 'jchck' ),
		'parent_item_colon'   => __( 'Parent Case Study:', 'jchck' ),
		'menu_name'           => __( 'Case Studies', 'jchck' ),
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