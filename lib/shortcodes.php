<?php

namespace Roots\Sage\Shortcodes;

function row( $atts, $content = null){
	return '<div class="row">' . do_shortcode( $content ) . '</div>' ;
}
add_shortcode('row', __NAMESPACE__ . '\\row');


function half( $atts, $content = null ){
	return '<div class="col-md col-xs-12">' . do_shortcode( $content ) . '</div>';
}
add_shortcode('half', __NAMESPACE__ . '\\half');

function right( $atts, $content = null ){
	return '<div class="row end-xs"><div class="col-sm-6">' . do_shortcode( $content ) . '</div></div>';
}
add_shortcode('right', __NAMESPACE__ . '\\right');

 