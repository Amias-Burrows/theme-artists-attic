		<footer>
			<?php
				dynamic_sidebar('footer-widget');
			?>
			<div id='footer-nav-left'>
				<span>Quick Links</span>
				<?php
					wp_nav_menu(
						array(
							'menu' => 'footer_1',
							'container' => '',
							'theme_location' => 'footer_1'
						)
					);
				?>
			</div>
			<div id='footer-nav-middle'>
				<span>Main Menu</span>
				<?php
					wp_nav_menu(
						array(
							'menu' => 'footer_2',
							'container' => '',
							'theme_location' => 'footer_2'
						)
					);
				?>
			</div>
			<div id='footer-nav-right'>
				<span>Interact with us</span>
				<?php
					wp_nav_menu(
						array(
							'menu' => 'footer_3',
							'container' => '',
							'theme_location' => 'footer_3'
						)
					);
				?>
			</div>
			<div id='bottom-logo'>
				<?php
					if (function_exists('the_custom_logo')) {
						$custom_logo_id = get_theme_mod('custom_logo');
						$logo = wp_get_attachment_image_src($custom_logo_id);
					}
				?>
					<img id='logo' src='<?php echo $logo[0] ?>' alt='Site Logo'/>
			</div>
			<section id='smallprint'>
				<p>Charity Registration Number: 1198542</p>
				<p>Address: <a href='https://www.google.com/maps/place/Carlinghow+Mills,+Bradford+Rd,+Batley+WF17+8LN/@53.7182943,-1.6428807,17z/data=!4m5!3m4!1s0x48796005a4c7d4a1:0x4caba1804401dc5b!8m2!3d53.7182943!4d-1.640692'>C4D Carlinghow Mills, Batley, West Yorkshire, WF17 8LL</a></p>
			</section>
		</footer>
	</body>
	<?php
		wp_footer();
	?>
</html>
