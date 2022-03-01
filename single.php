<?php
	if (in_category('gallery')) {
		get_header('gallery');
	} else {
		get_header('page');
	};
?>
<main>
<?php
	
	if (have_posts()) {

		while (have_posts()) {

			the_post();
			if (in_category('gallery')) {
				get_template_part('template-parts/content', 'gallery');
			} else {
				get_template_part('template-parts/content', 'article');
			}

		}

	}

?>
</main>
<?php
	get_footer();
?>
