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
	} elseif ( is_archive() ) {
		return get_the_archive_title();
	} elseif ( is_search() ) {
		return sprintf( __( 'Search Results for %s', 'jchck' ), get_search_query() );
	} elseif ( is_404() ) {
		return __( 'Not Found', 'jchck' );
	} else {
		return get_thte_title();
	}
}