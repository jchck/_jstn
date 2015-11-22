<?php

namespace Roots\Sage\Ads;

/**
* Registers a new post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
function ads() {

	$labels = array(
		'name'                => __( 'Ads', 'text-domain' ),
		'singular_name'       => __( 'Ad', 'text-domain' ),
		'add_new'             => _x( 'Add New Ad', 'text-domain', 'text-domain' ),
		'add_new_item'        => __( 'Add New Ad', 'text-domain' ),
		'edit_item'           => __( 'Edit Ad', 'text-domain' ),
		'new_item'            => __( 'New Ad', 'text-domain' ),
		'view_item'           => __( 'View Ad', 'text-domain' ),
		'search_items'        => __( 'Search Ads', 'text-domain' ),
		'not_found'           => __( 'No Ads found', 'text-domain' ),
		'not_found_in_trash'  => __( 'No Ads found in Trash', 'text-domain' ),
		'parent_item_colon'   => __( 'Parent Ad:', 'text-domain' ),
		'menu_name'           => __( 'Ads', 'text-domain' ),
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

	register_post_type( 'ads', $args );
}

add_action( 'init', __NAMESPACE__ . '\\ads' );
