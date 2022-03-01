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
	<body id='page'>
		<header>
			<div id='identity'>
				<h1 id='title'><?php the_title() ?></h1>
			</div>
			<nav id='header-nav'>
				<ul id='menu'>
					<li>
						<button class='a' onclick='history.back()'><ion-icon size='large' name='return-up-back'></ion-icon></button>
					</li>
					<li>
						<a href='<?php echo get_home_url(); ?>'><ion-icon size='large' name='home'></ion-icon></a>
					</li>
			</nav>
		</header>
