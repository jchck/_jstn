<?php

use Jchck\Assets;
use Jchck\Footer;
use Jchck\Wrapper;

?>
<!doctype html>
<html amp <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-white black' ); ?>>
	<div class="md-px4 sm-px2 px2">
		<div class="flex flex-column">
			<?php if (!is_404()) {
				get_template_part( 'templates/header' );
			} ?>
			<div class="flex flex-wrap <?= Wrapper\classes(); ?>">
				<?php include Wrapper\template_path(); ?>
			</div>
			<?php if (Footer\footer_check()) {
				get_template_part( 'templates/footer' );
			} ?>
		</div>
	</div>
	<?php if (is_page_template( 'template-landing-seo.php' )) {
		get_template_part( 'templates/footer', 'landing' );
	} ?>
	<?= Assets\prism_js(); ?>
	<?php wp_footer(); ?>
</body>
</html>