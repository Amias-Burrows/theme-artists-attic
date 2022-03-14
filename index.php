<?php
	get_header('archive');
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
	<?php
		the_posts_pagination();
	?>
</main>
<?php
	get_footer();
?>
