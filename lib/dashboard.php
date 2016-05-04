<?php

namespace Roots\Sage\Dashboard;

/**
 * Remove unused things from the post editor
 * @link https://codex.wordpress.org/Function_Reference/remove_meta_box
 */
function posts(){
  remove_meta_box( 'authordiv', 'post', 'normal' ); // Remove authors
  remove_meta_box( 'commentstatusdiv', 'post', 'normal' ); // Remove comment status
  remove_meta_box( 'commentsdiv', 'post', 'normal' );  // Remove comments div
  remove_meta_box( 'postcustom', 'post', 'normal' ); // Remove custom fields
  remove_meta_box( 'slugdiv', 'post', 'normal' );  // Remove slug
  remove_meta_box( 'trackbacksdiv', 'post', 'normal' );  // Remove trackbacks
  remove_meta_box( 'tagsdiv-post_tag', 'post', 'normal' ); // Remove tags
}
add_action( 'admin_init', __NAMESPACE__ . '\\posts' );