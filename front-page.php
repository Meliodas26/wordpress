<?php get_header(); ?>
<header>
	<!--
		div - Top
		Include:
		- Logo
		- SocialNetworks
		- Navbar
	-->
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
							'theme_location' => 'socialNetworks-menu',
							'container_class' => 'social-networks'
          	)
          ); 
				?>
				<!--
				<div class="social-networks">
					<a href="#"><div class="a-yt"><em class="fab fa-youtube"></em></div></a>
					<a href="#"><div class="a-insta"><em class="fab fa-instagram"></em></div></a>
					<a href="#"><div class="a-face"><em class="fab fa-facebook-f"></em></div></a>
				</div>
				-->
				<nav aria-label class="nav-desktop">
					<?php wp_nav_menu(
	          	array(
								'theme_location' => 'main-menu',
								'container_class' => 'container-nav'
            	)
            ); 
					?>
					<!--
					<ul>
						<li class="li-top"><a href="#">Inicio</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Ejercicios espirituales</a></li>
						<li><a href="#">Jóvenes</a></li>
						<li><a href="#">Contacto</a></li>
						<li><a href="#" class="button">Donaciones</a></li>
					</ul>
					-->
				</nav>
			</div>
			<div class="right-mobile">
				<a onClick="viewNavbar_mobile()"><em class="fas fa-bars"></em></a>
			</div>
		</div>
		<div class="bottom" id="hidden-desktop">
			<h1>Lorem Ipsum Dolor</h1>
			<p>
				Sit cupidatat nisi aliqua adipisicing culpa sunt id veniam. 
				Consectetur amet ea dolor laborum sit aliqua dolor nulla anim.
			</p>
		</div>
	</div>
	<nav aria-label class="nav-mobile appear-1" id="nav-mobile">
		<div><a onClick="viewNavbar_mobile()"><em class="fas fa-times"></em></a></div>
			<ul>
				<li class="li-top"><a href="#">Inicio</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Ejercicios espirituales</a></li>
				<li><a href="#">Jóvenes</a></li>
				<li><a href="#">Contacto</a></li>
				<li><a href="#" class="button">Donaciones</a></li>
			</ul>
	</nav>
</header>
<nav aria-label class="navbar-desktop-fixed appear-1" id="navbar-desktop-fixed">
	<div class="left">
		<a href="./">
			<img 
				alt="logo"
				src=<?php echo wp_get_attachment_image( $attachment->ID, 'thumbnail' ); ?> 
			>
		</a>
	</div>
	<div class="div-ul">
		<ul>
			<li class="li-top"><a href="#">Inicio</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Ejercicios espirituales</a></li>
			<li><a href="#">Jóvenes</a></li>
			<li><a href="#">Contacto</a></li>
			<li><a href="#" class="button">Donaciones</a></li>
		</ul>
	</div>
</nav>
<nav aria-label class="navbar-mobile-fixed appear-1" id="navbar-mobile-fixed">
	<div class="left">
		<a href="./"><img src="./assets/img/logo.png" alt="logo"></a>
	</div>
	<div class="right">
		<a onClick="viewNavbar_mobile()"><em class="fas fa-bars"></em></a>
	</div>
</nav>
<?php get_footer(); ?>