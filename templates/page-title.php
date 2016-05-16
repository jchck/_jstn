<?php

use Jchck\Titles;
use Jchck\Work;

?>

<?php if (is_singular( 'work' )) { ?>
	<div class="md-flex justify-between items-center border-top pt2 pb2">
		<h1 class="<?= Titles\classes(); ?>">
			<?= Titles\title(); ?>
		</h1>
		<a style="max-width: 270px" class="flex items-center logo-work right" href="<?= Work\link(); ?>" target="_blank">
			<div class="flex-auto">
				<p class="caps m0 mr2">Project Link</p>
			</div>
			<?= Work\svg(); ?>
		</a>
	</div>
<?} else { ?>
	<h1 class="<?= Titles\classes(); ?>">
		<?= Titles\title(); ?>
	</h1>
<?}