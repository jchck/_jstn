<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package _jchck
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function _jchck_jetpack_jchcketup() {
	add_theme_jchckupport( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => '_jchck_infinite_jchckcroll_render',
		'footer'    => 'page',
	) );
} // end function _jchck_jetpack_jchcketup
add_action( 'after_jchcketup_theme', '_jchck_jetpack_jchcketup' );

/**
 * Custom render function for Infinite Scroll.
 */
function _jchck_infinite_jchckcroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function _jchck_infinite_jchckcroll_render
