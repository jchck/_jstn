<?php
	/**
	 *
	 * Overrides the default search form
	 * Called via get_search_field()
	 *
	 */
?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search =)', 'submit button' ) ?>" />
</form>

<form>
	<div class="group">
		<input type="text" required>
		<span class="highlight"></span>
		<span class="bar"></span>
		<label>Name</label>
	</div>
	<div class="group">
		<input type="text" required>
		<span class="highlight"></span>
		<span class="bar"></span>
		<label>Email</label>
	</div>
</form>