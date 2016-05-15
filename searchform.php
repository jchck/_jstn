<?php
	/**
	 *
	 * Overrides the default search form
	 * Called via get_search_field()
	 *
	 */
?>

<!-- <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search =)', 'submit button' ) ?>" />
</form> -->

<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
	<div class="relative mb3">
		<input class="block h3 p1 border-bottom border-width-skinny" type="text" required>
		<span class="highlight absolute col-12 left-0"></span>
		<span class="bar relative block"></span>
		<label class="h4 absolute">Name</label>
	</div>
	<div class="relative mb3">
		<input class="block h3 p1 border-bottom border-width-skinny" type="text" required>
		<span class="highlight absolute col-12 left-0"></span>
		<span class="bar relative block"></span>
		<label class="h4 absolute">Email</label>
	</div>
</form>