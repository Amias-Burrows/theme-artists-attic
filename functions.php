<?php

	function artists_theme_support() {
		add_theme_support('title-tag');
		add_theme_support('custom-logo');
		add_theme_support('post-thumbnails');
		add_post_type_support('page', 'excerpt');
	}

	function artists_widgets_init() {
		register_sidebar(
			array(
				'name' => 'Footer Widget',
				'id' => 'footer-widget',
				'description' => 'Footer Widget Area',
				'before_title' => '<span>',
				'after_title' => '</span>',
				'before_widget' => '<div class="widget">',
				'after_widget' => '</div>'
			)
		);
	}

	function artists_menus() {
		$locations = array(
			'primary' => 'Header Menu',
			'homepage' => 'Homepage Menu',
			'footer_1' => 'Footer Quick Links',
			'footer_2' => 'Footer Main Menu',
			'footer_3' => 'Footer Interact'
		);
		register_nav_menus($locations);
	}

	function artists_register_styles() {
		wp_enqueue_style('artists-style', get_template_directory_uri() . '/assets/css/main.css', array(), null, 'all');
	}
	

	function artists_register_scripts() {
		wp_enqueue_script('artists-icons-module', 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js', array(), null, true);
		wp_enqueue_script('artists-icons-nomodule', 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js', array(), null, true);
		wp_enqueue_script('artists-desk-nav-open', get_template_directory_uri() . '/assets/js/desk_nav_open.js', array(), null, true);
		wp_enqueue_script('artists-scroll-animation', get_template_directory_uri() . '/assets/js/scroll_animation.js', array(), null, true);
		wp_enqueue_script('artists-active-tab', get_template_directory_uri() . '/assets/js/active_tab.js', array(), null, true);
	}

	add_action('after_setup_theme', 'artists_theme_support');
	add_action('widgets_init', 'artists_widgets_init');
	add_action('init', 'artists_menus');
	add_action('wp_enqueue_scripts', 'artists_register_styles');
	add_action('wp_enqueue_scripts', 'artists_register_scripts');


	require('inc/walker.php');
?>
