<?php

namespace Jchck\Titles;

function title(){
	/**
	 *
	 * This controls output of the page title
	 *
	 */
	
	if ( is_home() ) {
		if ( get_option( 'page_for_posts', true ) ) {
			return get_the_title( get_option( 'page_for_posts', true ) );
		} else {
			return __( 'Latest Posts', 'jchck' );
		}
	} elseif ( is_post_type_archive( 'work' )){
		return sprintf( __('Case Studies'), 'jchck' );
	} elseif ( is_archive() ) {
		return get_the_archive_title();
	} elseif ( is_search() ) {
		return sprintf( __( 'Search Results for %s', 'jchck' ), get_search_query() );
	} elseif ( is_404() ) {
		return __( '404: Not Found', 'jchck' );
	} elseif (is_page( 'resume' )) {
		return __( 'Justin Chick Who?', 'jchck' );
	} else {
		return get_the_title();
	}
}

function classes(){
	/**
	 *
	 * This controls the added css classes to the page-title.php <h1> block
	 *
	 */
	if ( is_home() || is_archive()) {
		$classes = 'mt0 pt2 bold';
	} elseif( is_singular( 'work' )) {
		$classes = 'mt0 mb0 bold right-align';
	} elseif (is_page( 'resume' )) {
		$classes = 'border-top mt0 mb2 sm-mb1 pt2 bold';
	} elseif ( is_singular() || is_page() ) {
		$classes = 'border-top mt0 mb0 pt2 bold';
	} elseif ( is_404()) {
		$classes = 'mt2 pt2 mb2';
	} else {
		$classes = null;
	}
	return $classes;
}


/**
 *
 * Filter output of get_the_archive_title()
 * @see http://wordpress.stackexchange.com/a/175903
 *
 */
add_filter( 'get_the_archive_title', function($title){
	if (is_category()) {
		$title = single_cat_title( '', false );
	} elseif (is_tag()) {
		$title = single_cat_title( '', false );
	}
	return $title . ' Articles';
});


function landing_subtitle(){
	if (is_page( 'ck' )) {
		$subtitle = 'Justin Chick';
	} elseif (is_page_template( 'template-landing-seo.php' )) {
		$subtitle = 'WordPress Development in Williamstown';
	} else {
		$subtitle = 'Subtitle';
	}
	return $subtitle;
}