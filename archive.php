<?php
	get_header('search');
?>
<main id='homepage' class='ignore-width'>
	<div class='artists-masonry'>
		<?php
			
			if (have_posts()) {
		
				while (have_posts()) {
		
					the_post();
					get_template_part('template-parts/content', 'archive');
		
				}
		
			}
		
		?>
	</div>
</main>
<?php
	get_footer();
?>
