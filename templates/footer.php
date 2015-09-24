<footer class="content-info" role="contentinfo">
	<div class="container-fluid wrap pt4 pb4 mt4 mb4 border-top-gray">
		<?php if (!is_page( 'Hire Justin' )) { ?>
			<h3 class="m0 text-center">Get My Prospective</h3>
			<p class="m0 text-center">Sign up and you'll get my prospective in your email inbox once a week</p>
			<?php echo do_shortcode( '[gravityform id="2" title="false" description="false"]' ); ?>
		<? } ?>
		<div class="row">
			<div class="col-xs-12">
				<p class="mb0 small text-center"><a href="<?= esc_url(home_url('colophon')); ?>">Colophon</a></p>
				<ul class="list-inline text-center m0">
					<li><a target="_blank" title="Justin Chick (jchck) on Github" href="https://github.com/jchck"><i class="i-github"></i></a></li>
					<li><a target="_blank" title="Justin Chick (jchck_) on Twitter" href="https://twitter.com/jchck_"><i class="i-twitter"></i></a></li>
					<li><a target="_blank" title="Justin Chick (jchck_) on Instagram" href="https://instagram.com/jchck_"><i class="i-instagram"></i></a></li>
				</ul>
			</div>
		</div>
		
	</div>
</footer>
