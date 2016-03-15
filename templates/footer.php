<footer class="content-info">
	<div class="container-fluid wrap pb4 mb4">
		<?php if ( !is_page( array('Hire Justin', 'Follow Along', 'Hire Justin Step 2', 'Planner', 'ck') ) ) { ?>
			<div class="row middle-xs border-top-gray border-bottom-gray mt4" style="height: 33.3vh">
				<div class="col-xs-12">
					<h5 class="m0 text-center"><a class="btn btn-blue btn-sm" href="<?= esc_url(home_url('hire-justin')); ?>">Let's Work Together</a></h5>
				</div>
			</div>
		<? } ?>
		<?php if (is_page( 'ck' )): ?>
			<div class="row middle-xs" style="height: 33.3vh">
				<div class="col-xs-12">
					<ul class="list-inline text-center mb0">
						<li><a href="#">Biography</a></li>
						<li><a href="#">Portfolio</a></li>
						<li><a href="#">12 Launches</a></li>
						<li><a href="#">Notebook</a></li>
					</ul>
				</div>
			</div>
		<?php endif; ?>
		<div class="row mt4">
			<div class="col-xs-12">
				<p class="mb0 small text-center"><a href="<?= esc_url(home_url('colophon')); ?>">Colophon</a></p>
				<ul class="list-inline text-center m0">
					<li><a target="_blank" title="Justin Chick (jchck) on Github" href="https://github.com/jchck"><i class="i-github"></i></a></li>
					<li><a target="_blank" title="Justin Chick (jchck_) on Twitter" href="https://twitter.com/jchck_"><i class="i-twitter"></i></a></li>
					<li><a target="_blank" title="Justin Chick (jchck) on Medium" href="https://medium.com/@jchck"><i class="i-medium"></i></a></li>
					<li><a target="_blank" title="Justin Chick (jchck_) on Instagram" href="https://instagram.com/jchck_"><i class="i-instagram"></i></a></li>
				</ul>
			</div>
		</div>
		
	</div>
</footer>
