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

	function artists_menu_images($wp_customize) {
		$wp_customize->add_section('artists_section', array(
			'title' => __('Homepage Menu Images'),
			'description' => 'This is the section where you can add the images for the homepage menu',
			'panel' => 'nav_menus',
			'priority' => 3
		));
		$wp_customize->add_setting('artists_image_1');
		$wp_customize->add_control(WP_Customize_Control($wp_customize, 'artists_image_1', array(
			'label' => 'Image 1',
			'section' => 'artists_section'
		)));
		$wp_customize->add_setting('artists_image_2');
		$wp_customize->add_control(WP_Customize_Control($wp_customize, 'artists_image_2', array(
			'label' => 'Image 2',
			'section' => 'artists_section'
		)));
		$wp_customize->add_setting('artists_image_3');
		$wp_customize->add_control(WP_Customize_Control($wp_customize, 'artists_image_3', array(
			'label' => 'Image 3',
			'section' => 'artists_section'
		)));
		$wp_customize->add_setting('artists_image_4');
		$wp_customize->add_control(WP_Customize_Control($wp_customize, 'artists_image_4', array(
			'label' => 'Image 4',
			'section' => 'artists_section'
		)));
		$wp_customize->add_setting('artists_image_5');
		$wp_customize->add_control(WP_Customize_Control($wp_customize, 'artists_image_5', array(
			'label' => 'Image 5',
			'section' => 'artists_section'
		)));
		/*
		$artists_locations = get_nav_menu_locations();
		$artists_menu = wp_get_nav_menu_object( $locations['homepage'] );
		$artists_items = wp_get_nav_menu_items( $menu =&amp;gt;term_id, array('order' =&amp;gt; 'DESC');
		if ( ! $artists_items ) {
			foreach ($artists_items as $item) {
				$wp_customize->add_setting('artists_image_section_' . $item->title);
				$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'artists_image_section_' . $item->title, array(
					'label' => 'Image for ' . $item->title,
					'section' => 'artists_section',
					'settings' => 'artists_image_section_' . $item->title,
				)));
			};
		};
		 */
	}

	add_action('after_setup_theme', 'artists_theme_support');
	add_action('widgets_init', 'artists_widgets_init');
	add_action('init', 'artists_menus');
	add_action('wp_enqueue_scripts', 'artists_register_styles');
	add_action('wp_enqueue_scripts', 'artists_register_scripts');
	add_action('customize_register', 'artists_menu_images');


	require('inc/walker.php');
?>
