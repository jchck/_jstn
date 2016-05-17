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
<?} elseif (is_front_page() || is_page( 'ck' )) { ?>
	<h1 class="mt4 mb1 h1-fp"><span class="hide">Justin Chick</span>I’m a front-end developer with over 6 years experience in the WordPress ecosystem.</h1>
	<p class="h2 mb1">I believe in simple, extendable, and reusable code.</p>
	<p class="h2 m0 mb4">I believe in design that lets users do what they need to. Quickly.</p>
<?} else { ?>
	<h1 class="<?= Titles\classes(); ?>">
		<?= Titles\title(); ?>
	</h1>
<?}