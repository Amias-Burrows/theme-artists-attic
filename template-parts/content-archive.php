<div class='result'>
	<?php
		$thumbnail = has_post_thumbnail();
		$term_id = get_queried_object_id();
		$term_thumbnail = has_term_thumbnail($term_id);
		if ($thumbnail) {
			$id = get_the_post_thumbnail(null, 'large');
		} else if ($term_thumbnail) {
			$id = get_term_thumbnail($term_id, $size = 'large', $attr = 'id="thumbnail"');
		} else {
			$id = '<img id="thumbnail" src="https://picsum.photos/1024/600?blur=3" alt="Thumbnail Image">';
		}
	?>
	<img id='thumbnail' src='<?php echo $id ?>' alt='Thumbnail Image'/>
	<div id='content'>
		<a href='<?php echo the_permalink(); ?>'>
			<h3 id='title'><?php the_title(); ?></h3>
		</a>
		<span id='date'>
			<?php 
				echo get_the_date();
				echo " | "; 
				if (!is_singular()) {
					echo "<ion-icon name='book'></ion-icon> Page";
				} else {
					comments_number();
				}
			?>
		</span>
		<p id='excerpt'><?php echo get_the_excerpt(get_the_ID())?></p>
		<div id='tags'>
			<?php
				the_tags('<span><ion-icon size="small" name="pricetag-outline"></ion-icon>', '</span><span><ion-icon size="small" name="pricetag-outline"></ion-icon>', '</span>');
			?>
		</div>
	</div>
</div>
