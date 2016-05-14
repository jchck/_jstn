<?php

namespace Jchck\Setup;

function setup(){

	/**
	 *
	 * Turn on features of Soil Plugin
	 * @see https://roots.io/plugins/soil/
	 *
	 */
	add_theme_support( 'soil-clean-up' );
	add_theme_support( 'soil-nav-walker' );
	add_theme_support( 'soil-nice-search' );
	add_theme_support( 'soil-jquery-cdn' );
	add_theme_support( 'soil-relative-urls' );

	/**
	 *
	 * Let plugins manage document title
	 * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
	 *
	 */
	add_theme_support( 'title-tag' );

	/**
	 *
	 * Register navigation menus
	 * @see http://codex.wordpress.org/Function_Reference/register_nav_menus
	 *
	 */
	register_nav_menus( [
		'primary_nav'	=> __( 'Primary Navigation', 'jchck' )
	] );

	/**
	 *
	 * Turn on HTML5 support
	 * @see http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
	 *
	 */
	add_theme_support( 'html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form'] );

	/**
	 *
	 * Add post thumbnail support
	 * @see http://codex.wordpress.org/Post_Thumbnails
	 *
	 */
	add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', __NAMESPACE__ . '\\setup');