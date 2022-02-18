<?php
	get_header();
?>
<main>
	<?php
		
		wp_nav_menu(
			array(
				'menu' => 'homepage',
				'container' => '',
				'container_class' => 'artists_masonry',
				'theme_location' => 'homepage'
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
