<?php wp_footer(); ?>
<footer>
	<div class="left">
		<?php wp_nav_menu(
			array(
				'theme_location' => 'social-networks',
				'container_class'=> 'nav-social-networks-footer',
				)
			); 
		?>
		<?php wp_nav_menu(
			array(
				'theme_location' => 'contact',
				'container_class'=> 'nav-contact',
				)
			); 
		?>
	</div>
	<div class= "center">
		<?php
			$custom_logo_id = get_theme_mod('custom_logo');
			$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
			
		?>
		<a href="localhost/wordpress">
			<img
				alt="logo"
				src="<?php echo $logo[0] ?>"
			>
		</a>
	</div>
	<div class = "right">
		<h6>Sitios de interés</h6>
		<?php wp_nav_menu(
			array(
				'theme_location' => 'interest-sites',
				'container_class'=> 'nav-interest-sites',
				)
			); 
		?>
	</div>
</footer>
</body>
</html>