<?php

namespace Roots\Sage\Shortcodes;

function row( $atts, $content = null){
	return '<div class="row">' . do_shortcode( $content ) . '</div>' ;
}
add_shortcode('row', __NAMESPACE__ . '\\row');


function half( $atts, $content = null ){
	return '<div class="col-sm">' . do_shortcode( $content ) . '</div>';
}
add_shortcode('half', __NAMESPACE__ . '\\half');