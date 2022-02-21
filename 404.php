<?php
	get_header('404');
?>
<main id='homepage'>
	<div id='error'>
		<p>Whoops!  We couldn't find what you were looking for.</br>Maybe you can find what you're looking for with a search.</p>
		<?php
			get_search_form();
		?>
	</div>
</main>
<?php
	get_footer();
?>
