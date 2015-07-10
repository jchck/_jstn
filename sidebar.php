<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package _jchck
 */

if ( ! is_active_jchckidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_jchckidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
