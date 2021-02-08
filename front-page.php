<?php get_header(); ?>
<header style = "background-image: url(<?php echo header_image();?>)">
	<div class="opacity appear-1" id="opacity">
		<div class="top">
			<div class="left">
				<a href="./">
					<?php
						if(function_exists('the_custom_logo')){
							$custom_logo_id = get_theme_mod('custom_logo');
							$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
						}
					?>
					<img
						alt="logo"
						src="<?php echo $logo[0] ?>"
					>
				</a>
			</div>
			
			<div class="right-desktop">
				<?php wp_nav_menu(
						array(
							'theme_location' => 'social-networks',
							'container_class'=> 'nav-social-networks-header',
						)
					); 
				?>
				<?php wp_nav_menu(
						array(
							'theme_location' => 'main',
							'container_class'=> 'nav-main',
						)
					); 
				?>
			</div>
</header>

<?php get_footer(); ?>