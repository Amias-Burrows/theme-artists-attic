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
		
			} else {
				echo '<div id="no-results">';
				echo '<h3>No results found!</h3>';
				echo '<p>Try searching for something else...</p>';

				get_search_form();
				echo '</div>';
			}
		
		?>
	</div>
	<?php
		the_posts_pagination();
	?>
</main>
<?php
	get_footer();
?>
