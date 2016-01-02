<?php

namespace Roots\Sage\Launches;

/**
* Registers a new post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
function launches() {

	$labels = array(
		'name'                => __( 'Launches', 'text-domain' ),
		'singular_name'       => __( 'Launch', 'text-domain' ),
		'add_new'             => _x( 'Add New Launch', 'text-domain', 'text-domain' ),
		'add_new_item'        => __( 'Add New Launch', 'text-domain' ),
		'edit_item'           => __( 'Edit Launch', 'text-domain' ),
		'new_item'            => __( 'New Launch', 'text-domain' ),
		'view_item'           => __( 'View Launch', 'text-domain' ),
		'search_items'        => __( 'Search Launches', 'text-domain' ),
		'not_found'           => __( 'No Launches found', 'text-domain' ),
		'not_found_in_trash'  => __( 'No Launches found in Trash', 'text-domain' ),
		'parent_item_colon'   => __( 'Parent Launch:', 'text-domain' ),
		'menu_name'           => __( 'Launches', 'text-domain' ),
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
			'title', 'editor')
	);

	register_post_type( '12-launches', $args );
}

add_action( 'init', __NAMESPACE__ . '\\launches' );