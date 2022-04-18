<!DOCTYPE html>

<html lang='en'>
	<head>
		<meta charset='utf-8'/>
		<meta name='viewport' content='width=device-width,initial-scale=1'/>

		<link rel='shortcut icon' href='<?php echo get_template_directory_uri() . '/assets/img/favicon.ico'; ?>'/>
		<link rel='icon' type='image/ico' href='<?php echo get_template_directory_uri() . '/assets/img/favicon.ico'; ?>' sizes='32x32'/>
		<link rel='apple-touch-icon' sizes='32x32' href='<?php echo get_template_directory_uri() . '/assets/img/favicon.ico'; ?>'/>
		<?php
			wp_head();
		?>

	</head>
	<body id='homepage'>
		<header>
			<div id='content'>
				<?php
					if (function_exists('the_custom_logo')) {
						$custom_logo_id = get_theme_mod('custom_logo');
						$logo = wp_get_attachment_image_src($custom_logo_id);
					}
				?>
				<img id='header-site-logo' src='<?php echo $logo[0] ?>'/>
				<h1 id="site-title"><?php echo get_bloginfo('name'); ?></h1>
				<h2><?php single_cat_title(); ?></h2>
				<img id='background-image' src='<?php echo get_template_directory_uri() . '/assets/img/splash.png'; ?>'/>
			</div>
			<nav id='header-nav'>
				<button class='a' id='nav-handle'>
					<ion-icon name='apps' size='large'></ion-icon>
				</button>
				<?php
					wp_nav_menu(
						array(
							'menu' => 'primary',
							'container' => '',
							'theme_location' => 'primary',
							'items_wrap' => '<ul id="menu" class="">%3$s</ul>'
						)
					);
				?>
			</nav>
		</header>
