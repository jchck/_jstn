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
		'taxonomies'          => array( 'featured-work' ),
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
		'rewrite'             => array('slug' => 'case-studies'),
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'excerpt'
		)
	);

	register_post_type( 'work', $args );
}

add_action( 'init', __NAMESPACE__ . '\\work' );

/**
 * Create a taxonomy
 *
 * @uses  Inserts new taxonomy object into the list
 * @uses  Adds query vars
 *
 * @param string  Name of taxonomy object
 * @param array|string  Name of the object type for the taxonomy object.
 * @param array|string  Taxonomy arguments
 * @return null|WP_Error WP_Error if errors, otherwise null.
 */
function work_categories() {

	$labels = array(
		'name'					=> _x( 'Features', 'Taxonomy plural name', 'jchck' ),
		'singular_name'			=> _x( 'Feature', 'Taxonomy singular name', 'jchck' ),
		'search_items'			=> __( 'Search Features', 'jchck' ),
		'popular_items'			=> __( 'Popular Features', 'jchck' ),
		'all_items'				=> __( 'All Features', 'jchck' ),
		'parent_item'			=> __( 'Parent Feature', 'jchck' ),
		'parent_item_colon'		=> __( 'Parent Feature', 'jchck' ),
		'edit_item'				=> __( 'Edit Feature', 'jchck' ),
		'update_item'			=> __( 'Update Feature', 'jchck' ),
		'add_new_item'			=> __( 'Add New Feature', 'jchck' ),
		'new_item_name'			=> __( 'New Feature Name', 'jchck' ),
		'add_or_remove_items'	=> __( 'Add or remove Features', 'jchck' ),
		'choose_from_most_used'	=> __( 'Choose from most used jchck', 'jchck' ),
		'menu_name'				=> __( 'Feature', 'jchck' ),
	);

	$args = array(
		'labels'            => $labels,
		'public'            => false,
		'show_in_nav_menus' => true,
		'show_admin_column' => false,
		'hierarchical'      => true,
		'show_tagcloud'     => false,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => false,
		'query_var'         => true,
		'capabilities'      => array(),
	);

	register_taxonomy( 'featured-work', array( 'work' ), $args );
}

add_action( 'init', __NAMESPACE__ . '\\work_categories' );


if (class_exists( 'acf' )) {

	/**
	 *
	 * Return project SVG
	 *
	 */
	function svg(){
		$svg = get_field( 'project_svg_logo', false, false );

		return $svg;
	}

	/**
	 *
	 * Return link to project
	 *
	 */
	function link(){
		$link = get_field( 'project_url' );

		return $link;
	}
}