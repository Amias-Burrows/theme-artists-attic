<?php
	get_header();
?>
<main class='ignore-width'>
	<div class='artists-masonry'>
		<div class='result'>
			<?php
			if (get_theme_mod('artists_masonry_element_1_image') != null) {
				?><img id='thumbnail' src='<?php echo get_theme_mod('artists_masonry_element_1_image'); ?>' alt='<?php echo get_theme_mod('artists_masonry_element_1_title'); ?>'/><?php
			} else {
				?><img id='thumbnail' src='https://picsum.photos/1024/600?blur=3&random=1' alt='<?php echo get_theme_mod('artists_masonry_element_1_title'); ?>'/><?php
			}
			?>
			<div id='content'>
				<a href='<?php echo get_theme_mod('artists_masonry_element_1_link'); ?>'><?php echo get_theme_mod('artists_masonry_element_1_title'); ?></a>
				<p id='excerpt'><?php echo get_theme_mod('artists_masonry_element_1_description'); ?></p>
			</div>
		</div>
		<div class='result'>
			<?php
			if (get_theme_mod('artists_masonry_element_2_image') != null) {
				?><img id='thumbnail' src='<?php echo get_theme_mod('artists_masonry_element_2_image'); ?>' alt='<?php echo get_theme_mod('artists_masonry_element_2_title'); ?>'/><?php
			} else {
				?><img id='thumbnail' src='https://picsum.photos/1024/600?blur=3&random=2' alt='<?php echo get_theme_mod('artists_masonry_element_2_title'); ?>'/><?php
			}
			?>
			<div id='content'>
				<a href='<?php echo get_theme_mod('artists_masonry_element_2_link'); ?>'><?php echo get_theme_mod('artists_masonry_element_2_title'); ?></a>
				<p id='excerpt'><?php echo get_theme_mod('artists_masonry_element_2_description'); ?></p>
			</div>
		</div>
		<div class='result'>
			<?php
			if (get_theme_mod('artists_masonry_element_3_image') != null) {
				?><img id='thumbnail' src='<?php echo get_theme_mod('artists_masonry_element_3_image'); ?>' alt='<?php echo get_theme_mod('artists_masonry_element_3_title'); ?>'/><?php
			} else {
				?><img id='thumbnail' src='https://picsum.photos/1024/600?blur=3&random=3' alt='<?php echo get_theme_mod('artists_masonry_element_3_title'); ?>'/><?php
			}
			?>
			<div id='content'>
				<a href='<?php echo get_theme_mod('artists_masonry_element_3_link'); ?>'><?php echo get_theme_mod('artists_masonry_element_3_title'); ?></a>
				<p id='excerpt'><?php echo get_theme_mod('artists_masonry_element_3_description'); ?></p>
			</div>
		</div>
		<div class='result'>
			<?php
			if (get_theme_mod('artists_masonry_element_4_image') != null) {
				?><img id='thumbnail' src='<?php echo get_theme_mod('artists_masonry_element_4_image'); ?>' alt='<?php echo get_theme_mod('artists_masonry_element_4_title'); ?>'/><?php
			} else {
				?><img id='thumbnail' src='https://picsum.photos/1024/600?blur=3&random=4' alt='<?php echo get_theme_mod('artists_masonry_element_4_title'); ?>'/><?php
			}
			?>
			<div id='content'>
				<a href='<?php echo get_theme_mod('artists_masonry_element_4_link'); ?>'><?php echo get_theme_mod('artists_masonry_element_4_title'); ?></a>
				<p id='excerpt'><?php echo get_theme_mod('artists_masonry_element_4_description'); ?></p>
			</div>
		</div>
		<div class='result'>
			<?php
			if (get_theme_mod('artists_masonry_element_5_image') != null) {
				?><img id='thumbnail' src='<?php echo get_theme_mod('artists_masonry_element_5_image'); ?>' alt='<?php echo get_theme_mod('artists_masonry_element_5_title'); ?>'/><?php
			} else {
				?><img id='thumbnail' src='https://picsum.photos/1024/600?blur=3&random=5' alt='<?php echo get_theme_mod('artists_masonry_element_5_title'); ?>'/><?php
			}
			?>
			<div id='content'>
				<a href='<?php echo get_theme_mod('artists_masonry_element_5_link'); ?>'><?php echo get_theme_mod('artists_masonry_element_5_title'); ?></a>
				<p id='excerpt'><?php echo get_theme_mod('artists_masonry_element_5_description'); ?></p>
			</div>
		</div>
		<div class='result'>
			<?php
			if (get_theme_mod('artists_masonry_element_6_image') != null) {
				?><img id='thumbnail' src='<?php echo get_theme_mod('artists_masonry_element_6_image'); ?>' alt='<?php echo get_theme_mod('artists_masonry_element_6_title'); ?>'/><?php
			} else {
				?><img id='thumbnail' src='https://picsum.photos/1024/600?blur=3&random=6' alt='<?php echo get_theme_mod('artists_masonry_element_6_title'); ?>'/><?php
			}
			?>
			<div id='content'>
				<a href='<?php echo get_theme_mod('artists_masonry_element_6_link'); ?>'><?php echo get_theme_mod('artists_masonry_element_6_title'); ?></a>
				<p id='excerpt'><?php echo get_theme_mod('artists_masonry_element_6_description'); ?></p>
			</div>
		</div>
	</div>
	<?php

		if (have_posts()) {

			while(have_posts()) {

				the_post();
				the_content();

			}

		}

	?>
</main>
<?php
	get_footer();
?>
