<div id='comments'>
	<span>
		<?php
			if (! have_comments()) {
				echo 'No comments. Leave one below';
			} else {
				echo 'Comments';
			}
		?>
	</span>
	<?php
		wp_list_comments(
			array(
				'max_depth' => 4,
				'style' => 'div'
			)
		);
	?>
	<?php
		if (is_user_logged_in()) {
			echo "<div id='user'>";
		} else {
			echo "<div id='guest'>";
		}
		if (comments_open()) {
			comment_form(
				array(
				)
			);
		}
		echo "</div>";
	?>
</div>
