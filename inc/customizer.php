<?php
/**
 * _jchck Theme Customizer
 *
 * @package _jchck
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function _jchck_customize_register( $wp_customize ) {
	$wp_customize->get_jchcketting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_jchcketting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_jchcketting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', '_jchck_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function _jchck_customize_preview_js() {
	wp_enqueue_jchckcript( '_jchck_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', '_jchck_customize_preview_js' );
