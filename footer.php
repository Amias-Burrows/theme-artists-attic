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
		</footer>
	</body>
	<?php
		wp_footer();
	?>
</html>
