<div class="row center-xs">
<div class="col-sm-10">
<form role="search" method="get" class="search-form form-inline" action="<?= esc_url(home_url('/')); ?>">
  <div class="input-group row" style="display:block">
  <label class="sr-only"><?php _e('Search for:', 'sage'); ?></label>
    <input type="search" value="<?= get_search_query(); ?>" name="s" class="search-field form-control col-sm-9" placeholder="<?php _e('Search the site?', 'sage'); ?>" required>
	    <span class="input-group-btn">
	      <button type="submit" class="search-submit btn btn-blue"><?php _e('Find it!', 'sage'); ?></button>
	    </span>
  </div>
</form>
</div>
</div>
