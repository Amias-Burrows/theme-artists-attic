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
			<?php
				$post = get_post();
				$thumbnail = get_the_post_thumbnail_url($post->ID);
				if ($thumbnail == false) {
					$id = 'https://picsum.photos/1024/600?blur=3';
				} else {
					$id = $thumbnail;
				}
			?>
				<img id='background' src='<?php echo $id ?>' alt='Thumbnail'/>
			<div id='identity'>
				<h1 id="site-title"><?php echo get_bloginfo('name') ?></h1>
				<h2 id='title'><?php the_title() ?></h2>
			</div>
			<nav id='header-nav'>
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
