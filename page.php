<?php
	get_header('page');
?>
<main>
	<div id='content'>
		<?php
			
			if (have_posts()) {
		
				while (have_posts()) {
		
					the_post();
					the_content();
		
				}
		
			}
		


		?>
	</div>
</main>
<?php
	get_footer();
?>
