<?php
	get_header();
?>
<main>
	<?php
		
		wp_nav_menu(
			array(
				'menu' => 'homepage',
				'menu_id' => 'artists-masonry',
				'container' => 'ul',
				'theme_location' => 'homepage',
				'walker' => new walker_homepage()
			)
		);

		if (have_posts()) {

			while(have_posts()) {

				the_post();
				the_content();

			}

		}

	?>
</main>
<?php
	get_footer();
?>
