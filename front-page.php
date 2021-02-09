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
		</div>
		<div class="bottom" id="hidden-desktop">
			<h1><?php bloginfo('name'); ?></h1>
			<p><?php bloginfo('description'); ?></p>
		</div>
	</div>
</header>

<!-- Sitios destacados -->
<?php
	$args = array(
		'post_type' => 'featured-sites',
		'post_per_page' => -1, 
		'order'         => 'ASC',
		'orderby'       => 'title'
	);
	$featured_sites = new WP_Query($args);
?>
<section class="generic-1">
	<div class="title">
		<div class="center-triangle"><div class="triangle"></div></div>
		<h2>Sitios destacados</h2>
	</div>
	<div class="content">
		<?php  
			if($featured_sites->have_posts()){
				while($featured_sites->have_posts()){
					$featured_sites->the_post();
				?>
				<div 
					class="featured-site" 
					style = "background-image: url(<?php the_post_thumbnail_url();?>)"
				>
					<div class="information">
						<h3><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
						<button>Informes</button>
					</div>
				</div>
				<?php	
				}
			}
		?>
	</div>
</section>

<?php get_footer(); ?>