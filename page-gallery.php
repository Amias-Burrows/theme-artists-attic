<?php
	get_header('page');
?>
<main class='ignore-width'>
<?php
	
	if (have_posts()) {
	
		while (have_posts()) {
		
			the_post();
			the_content();
		
		}
	
	}

?>
</main>
<?php
	get_footer();
?>
