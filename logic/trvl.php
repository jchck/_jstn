<?php

namespace Jchck\Trvl;

/**
* Registers a new post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
function trvl() {

	$labels = array(
		'name'                => __( 'Pics', 'jchck' ),
		'singular_name'       => __( 'Pic', 'jchck' ),
		'add_new'             => _x( 'Add New Pic', 'jchck', 'jchck' ),
		'add_new_item'        => __( 'Add New Pic', 'jchck' ),
		'edit_item'           => __( 'Edit Pic', 'jchck' ),
		'new_item'            => __( 'New Pic', 'jchck' ),
		'view_item'           => __( 'View Pic', 'jchck' ),
		'search_items'        => __( 'Search Pics', 'jchck' ),
		'not_found'           => __( 'No Pics found', 'jchck' ),
		'not_found_in_trash'  => __( 'No Pics found in Trash', 'jchck' ),
		'parent_item_colon'   => __( 'Parent Pic:', 'jchck' ),
		'menu_name'           => __( 'Trvl Pics', 'jchck' ),
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
		'menu_icon'           => 'dashicons-images-alt',
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array()
	);

	register_post_type( 'trvl', $args );
}

add_action( 'init', __NAMESPACE__ .  '\\trvl' );
