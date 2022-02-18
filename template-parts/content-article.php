<?php
	$post = get_post();
?>
<div id='post'>
	<div id='meta'>
		<img id='user-profile' src='<?php echo get_avatar_url($post->post_author) ?>' alt='User Profile Picture'/>
		<p><strong><a href='<?php echo get_the_author_meta('user_url', $post->post_author) ?>'><?php echo get_the_author_meta('display_name', $post->post_author ) ?></a></strong> | <?php the_date(); ?> | <a href='#comments'><?php comments_number() ?></a></p>
			
	</div>
	<div id='tags'>
		<?php
			the_tags('<span><ion-icon size="small" name="pricetag-outline"></ion-icon>', '</span><span><ion-icon size="small" name="pricetag-outline"></ion-icon>', '</span>');
		?>
	</div>
	<div id='content'>
		<?php
			the_content();
		?>
	</div>
</div>
<?php
	comments_template();
?>
