<?php if (have_rows('the_map')): ?>
	<div class="acf-map">
		<?php while (have_rows('the_map')) : the_row();
			$pin 	= get_sub_field('pin_location');
			$text 	= get_sub_field('text_field');
			$img	= get_sub_field('city_image');
		?>
		<div class="marker" data-lat="<?php echo $pin['lat']; ?>" data-lng="<?php echo $pin['lng']; ?>">
			<h6 class="mt0 mb1"><?php echo $pin['address']; ?></h6>
			<p class="mb2"><?php echo $text; ?></p>
			<img class="pin-img" src="<?php echo $img; ?>">
		</div>
		<?php endwhile; ?>
	</div>
<?php endif; ?>
