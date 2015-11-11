<?php if (have_rows('the_map')): ?>
	<div class="acf-map">
		<?php while (have_rows('the_map')) : the_row();
			$pin 	= get_sub_field('pin_location');
			$text 	= get_sub_field('text_field');
		?>
		<div class="marker" data-lat="<?php echo $pin['lat']; ?>" data-lng="<?php echo $pin['lng']; ?>">
			<p><?php echo $pin['address']; ?></p>
			<p><?php echo $text; ?></p>
		</div>
		<?php endwhile; ?>
	</div>
<?php endif; ?>
