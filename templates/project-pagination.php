<div class="clearfix">
	<?php if ( get_adjacent_post( false, '', true ) ): ?>
		<span class="btn btn-blue btn-sm pull-left">
			<?php previous_post_link('%link', 'Previous'); ?>
		</span>
	<?php endif; ?>

	<?php if ( get_adjacent_post( false, '', false ) ): ?>
		<span class="btn btn-blue btn-sm pull-right">
			<?php next_post_link('%link', 'Next'); ?>
		</span>
	<?php endif; ?>
</div>