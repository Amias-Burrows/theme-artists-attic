<?php

	function artists_theme_support() {
		add_theme_support('title-tag');
		add_theme_support('custom-logo');
		add_theme_support('post-thumbnails');
		add_theme_support('custom-header');
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

	function artists_menu_images($wp_customize) {
		$wp_customize->add_panel('artists_panel', array(
			'title' => __('AR Burrows Controls', 'artists')
		));
		$wp_customize->add_section('artists_section', array(
			'title' => __('Homepage Menu Images'),
			'panel' => 'artists_panel'
		));
		$artists_menu = wp_get_nav_menu_items('homepage');
		if ( ! $artists_menu ) {
			foreach ($artists_menu as $item) {
				$wp_customize->add_setting('artists_image_section_' . $item->title);
				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'artists_image_section_' . $item->title, array(
					'label' => 'Image for ' . $item->title,
					'section' => 'artists_section',
					'settings' => 'artists_image_section_' . $item->title
				)));
			};
		};
	}

	add_action('after_setup_theme', 'artists_theme_support');
	add_action('widgets_init', 'artists_widgets_init');
	add_action('init', 'artists_menus');
	add_action('wp_enqueue_scripts', 'artists_register_styles');
	add_action('wp_enqueue_scripts', 'artists_register_scripts');
	add_action('customize_register', 'artists_menu_images');


	require('inc/walker.php');
?>
