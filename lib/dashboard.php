<?php

namespace Roots\Sage\Dashboard;

/**
 * Cleanup the main dashboard
 * 
 * @link https://codex.wordpress.org/Dashboard_Widgets_API
 * @link https://codex.wordpress.org/Function_Reference/remove_meta_box
 */
function dashboard(){
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
}
add_action( 'admin_init', __NAMESPACE__ . '\\dashboard' );

/**
 * Create custom dashboard widget
 * 
 * @link https://www.engagewp.com/how-to-create-full-width-dashboard-widget-wordpress/
 */
function jchck_widget(){
	if (get_current_screen()->base !== 'dashboard'){
		return;
	}

	?>
		<div id="jchck-widget" class="welcome-panel" style="display:none; padding-bottom: 23px;">
			<div class="welcome-panel-content">
				<div style="max-width: 150px; margin: 0 auto 16px;">
					<?php get_template_part( 'templates/logo', 'jc' ); ?>
				</div>
				<p class="about-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="welcome-panel-column-container" style="text-align: center;">
					<div class="welcome-panel-column">
						<h3>Static Pages</h3>
						<p style="margin: 0"><a href="#" class="button button-primary button-hero">Add New Page</a></p>
						<p style="margin: 0"><a href="#" class="button button-primary button-hero">View All Pages</a></p>
					</div>
					<div class="welcome-panel-column">
						<h3>Blog Posts</h3>
						<p style="margin: 0"><a href="#" class="button button-primary button-hero">Add New Post</a></p>
						<p style="margin: 0"><a href="#" class="button button-primary button-hero">View All Posts</a></p>
					</div>
					<div class="welcome-panel-column">
						<h3>Support</h3>
						<p style="margin: 0"><a href="#" class="button button-primary button-hero">View Your Site</a></p>
						<p style="margin: 0"><a href="#" class="button button-primary button-hero">Email For Support</a></p>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$('#welcome-panel').after($('#jchck-widget').show());
			})
		</script>
	<?

}
add_action( 'admin_footer', __NAMESPACE__ . '\\jchck_widget' );


/**
 * Remove unused menu items
 * 
 * @link https://codex.wordpress.org/Function_Reference/remove_menu_page
 * @link https://codex.wordpress.org/remove_submenu_page
 */
function menu(){
	remove_menu_page( 'edit-comments.php' ); // Remove comments
	remove_menu_page( 'users.php' ); // Remove users
	remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag' ); // Remove tags
	remove_submenu_page( 'options-general.php', 'options-discussion.php' );  // Remove comment options
}
add_action( 'admin_menu', __NAMESPACE__ . '\\menu' );


/**
 * Remove unused things from the post editor
 * 
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