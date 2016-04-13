<?php
    $args = array(
		//Type & Status Parameters
		'post_type'   => 'work',
		'post_status' => 'publish',
		
		//Order & Orderby Parameters
		'order'               => 'DESC',
		'orderby'             => 'date',
		
		//Pagination Parameters
		'posts_per_page'         => 5
			
		);

    $query = new WP_Query( $args );
?>

<section class="hero hero-top pt3 pb3 pt4-sm pb4-sm">
	<div class="wrap container-fluid">
		<h1 class="text-center m0">I build creative platforms to support your business goals.</h1>
	</div>
</section>

<section class="wrap-sm container-fluid mt3">
	<h2 class="text-center mt0">You're an entrepreneur, small business owner, or tech start-up...</h2>
	<p>You’ve got skills and expertise to spare, but you’re so busy running your business that your website is a little dusty. Or maybe there’s no site at all. You’re MIA online.</p>

	<p>abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz</p>

	<p>Quisque non lacus mi. Sed vulputate lorem sed nisi maximus porta. Nulla lacinia est non ante varius commodo. Suspendisse sodales tristique volutpat. Maecenas lacinia urna enim, in tincidunt ex vehicula sed. Duis eu maximus leo, vel pretium ipsum. Proin id tempor augue. Fusce viverra finibus lacus eget mollis. Nullam tempus tellus quis est tincidunt, eu molestie libero tempor. Sed eget sapien eget urna iaculis suscipit. Curabitur pharetra leo neque, ut hendrerit leo tempus ac. Phasellus pulvinar augue et imperdiet auctor. Mauris felis elit, ullamcorper sed velit nec, euismod dapibus mauris. Nunc libero lacus, semper a neque id, posuere scelerisque lacus. Nullam sodales magna velit, id posuere leo aliquet a. Sed eget nulla convallis, vulputate mauris a, fringilla tellus.</p>
	<blockquote>
		Maecenas lacinia urna enim, in tincidunt ex vehicula sed. Duis eu maximus leo, vel pretium ipsum. Proin id tempor augue.
	</blockquote>
	<h3 class="text-center mt2 mb2">That's why I do what I do.</h3>
	<p class="m0">Vestibulum vitae velit eu tortor fermentum accumsan tempor at tellus. Duis at fringilla odio. Curabitur ut quam eu mauris egestas malesuada a at nunc. Etiam ac auctor nisl. Phasellus id enim justo. Nulla quis ligula lobortis, convallis dui id, dictum mauris. Cras ultrices pharetra tortor, non dignissim massa. Duis vitae vehicula ipsum. Aenean molestie ex in justo placerat gravida. Etiam interdum eros leo, a tempus mauris ultrices ac. Maecenas elit odio, vestibulum id commodo ut, sagittis et massa.</p>
	<h3 class="text-center mt3 mb3 mt4-sm mb4-sm">Three Ways We Can Work Together</h3>
</section>

<section class="stragety pt2 pb2 pt4-sm pb4-sm small">
	<div class="container-fluid wrap">
		<div class="row center-xs">
			<div class="col-xs-10 col-sm-4">
				<h4 class="h5 text-center">Consult</h4>
				<p>Come with a problem, leave with a stragety. Vestibulum vitae velit eu tortor fermentum accumsan tempor at tellus. Duis at fringilla odio.</p>
				<p class="m0">$100</p>
			</div>
			<div class="col-xs-10 col-sm-4">
				<h4 class="h5 text-center">Intensive</h4>
				<p>Once I understand who you are and where you're going, I'll take you through the entire process. That means custom design, snappy content, and full intergration. It's fast, seamless, and it's the full package (with no shortcuts).</p>
				<p class="m0">$2,000</p>
			</div>
			<div class="col-xs-10 col-sm-4">
				<h4 class="h5 text-center">Partnership</h4>
				<p>I've got a long list of happy clients and over 6 years of experience. I want this process to feel simple and, dare I say, fun? I believe in clear communication, great relationships, and a web platform that works for you and customers.</p>
				<p class="m0">$5,000 +</p>
			</div>
		</div>
	</div>
</section>

<div class="container-fluid">
	<div class="row center-xs">

		<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

		<article <?php post_class('col-md-7 col-sm-10 col-xs-12 flex p0'); ?>>
			<a href="<?php the_permalink(); ?>" class="color-box color-targeting row middle-xs center-xs p3">
				<div class="col-md col-sm col-xs-4">
					<?php if (get_field('project_svg_logo')) {
						the_field('project_svg_logo');
					} else {
						get_template_part( 'templates/launches', 'jframe' );
					} ?>
				</div>
				<div class="col-md-10 col-sm-9 col-xs-12">
					<h3 class="mt0 ml1-md"><?php the_title(); ?></h3>
					<p class="m0 ml1-md"><?php the_field('project_summary') ?></p>
				</div>
			</a>
		</article>

		<?php endwhile; endif; wp_reset_postdata(); ?>

	</div>
</div>
