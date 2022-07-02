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
			'title' => __('Homepage Menu Images', 'artists')
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

	function artists_masonry($wp_customize) {
		$options = get_pages();
		$options += get_categories();

			// Title section for the masonry setting section
		$wp_customize->add_section('artists_masonry_section', array(	
			'title' => __('Homepage Menu', 'artists_masonry'),
			'priority' => 170
		));

			// TITLE FOR FIRST ELEMENT
		$wp_customize->add_setting('artists_masonry_element_1_title', array(
			'default' => 'Title'
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'artists_masonry_element_1_title', array(
			'label' => 'First Block Title',
			'settings' => 'artists_masonry_element_1_title',
			'section' => 'artists_masonry_section'
		)));

			// DESCRIPTION FOR FIRST ELEMENT
		$wp_customize->add_setting('artists_masonry_element_1_description', array(
			'default' => 'Description'
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'artists_masonry_element_1_description', array(
			'label' => 'First Block Description',
			'settings' => 'artists_masonry_element_1_description',
			'section' => 'artists_masonry_section'
		)));
		
			// LINK FOR FIRST ELEMENT
		$wp_customize->add_setting('artists_masonry_element_1_link', array(
			'default' => 'Select a page or category from the dropdown'
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'artists_masonry_element_1_link', array(
			'label' => 'First Block Link',
			'settings' => 'artists_masonry_element_1_link',
			'section' => 'artists_masonry_section',
			'type' => 'select',
			'choices' => $options
		)));

			// IMAGE FOR FIRST ELEMENT
		$wp_customize->add_setting('artists_masonry_elements_1_image');
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'artists_masonry_elements_1_image', array(
			'label' => 'First Block Background Image',
			'settings' => 'artists_masonry_element_1_image',
			'section' => 'artists_masonry_section'
		)));
		
			// TITLE FOR SECOND ELEMENT
		$wp_customize->add_setting('artists_masonry_element_2_title', array(
			'default' => 'Title'
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'artists_masonry_element_2_title', array(
			'label' => 'First Block Title',
			'settings' => 'artists_masonry_element_2_title',
			'section' => 'artists_masonry_section'
		)));

			// DESCRIPTION FOR SECOND ELEMENT
		$wp_customize->add_setting('artists_masonry_element_2_description', array(
			'default' => 'Description'
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'artists_masonry_element_2_description', array(
			'label' => 'First Block Description',
			'settings' => 'artists_masonry_element_2_description',
			'section' => 'artists_masonry_section'
		)));
		
			// LINK FOR SECOND ELEMENT
		$wp_customize->add_setting('artists_masonry_element_2_link', array(
			'default' => 'Select a page or category from the dropdown'
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'artists_masonry_element_2_link', array(
			'label' => 'First Block Link',
			'settings' => 'artists_masonry_element_2_link',
			'section' => 'artists_masonry_section',
			'type' => 'select',
			'choices' => $options
		)));

			// IMAGE FOR SECOND ELEMENT
		$wp_customize->add_setting('artists_masonry_elements_2_image');
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'artists_masonry_elements_2_image', array(
			'label' => 'First Block Background Image',
			'settings' => 'artists_masonry_element_2_image',
			'section' => 'artists_masonry_section'
		)));

			// TITLE FOR THIRD ELEMENT
		$wp_customize->add_setting('artists_masonry_element_3_title', array(
			'default' => 'Title'
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'artists_masonry_element_3_title', array(
			'label' => 'First Block Title',
			'settings' => 'artists_masonry_element_3_title',
			'section' => 'artists_masonry_section'
		)));

			// DESCRIPTION FOR THIRD ELEMENT
		$wp_customize->add_setting('artists_masonry_element_3_description', array(
			'default' => 'Description'
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'artists_masonry_element_3_description', array(
			'label' => 'First Block Description',
			'settings' => 'artists_masonry_element_3_description',
			'section' => 'artists_masonry_section'
		)));
		
			// LINK FOR THIRD ELEMENT
		$wp_customize->add_setting('artists_masonry_element_3_link', array(
			'default' => 'Select a page or category from the dropdown'
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'artists_masonry_element_3_link', array(
			'label' => 'First Block Link',
			'settings' => 'artists_masonry_element_3_link',
			'section' => 'artists_masonry_section',
			'type' => 'select',
			'choices' => $options
		)));

			// IMAGE FOR THIRD ELEMENT
		$wp_customize->add_setting('artists_masonry_elements_3_image');
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'artists_masonry_elements_3_image', array(
			'label' => 'First Block Background Image',
			'settings' => 'artists_masonry_element_3_image',
			'section' => 'artists_masonry_section'
		)));

			// TITLE FOR FOURTH ELEMENT
		$wp_customize->add_setting('artists_masonry_element_4_title', array(
			'default' => 'Title'
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'artists_masonry_element_4_title', array(
			'label' => 'First Block Title',
			'settings' => 'artists_masonry_element_4_title',
			'section' => 'artists_masonry_section'
		)));

			// DESCRIPTION FOR FOURTH ELEMENT
		$wp_customize->add_setting('artists_masonry_element_4_description', array(
			'default' => 'Description'
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'artists_masonry_element_4_description', array(
			'label' => 'First Block Description',
			'settings' => 'artists_masonry_element_4_description',
			'section' => 'artists_masonry_section'
		)));
		
			// LINK FOR FOURTH ELEMENT
		$wp_customize->add_setting('artists_masonry_element_4_link', array(
			'default' => 'Select a page or category from the dropdown'
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'artists_masonry_element_4_link', array(
			'label' => 'First Block Link',
			'settings' => 'artists_masonry_element_4_link',
			'section' => 'artists_masonry_section',
			'type' => 'select',
			'choices' => $options
		)));

			// IMAGE FOR FOURTH ELEMENT
		$wp_customize->add_setting('artists_masonry_elements_4_image');
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'artists_masonry_elements_4_image', array(
			'label' => 'First Block Background Image',
			'settings' => 'artists_masonry_element_4_image',
			'section' => 'artists_masonry_section'
		)));

			// TITLE FOR FIFTH ELEMENT
		$wp_customize->add_setting('artists_masonry_element_5_title', array(
			'default' => 'Title'
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'artists_masonry_element_5_title', array(
			'label' => 'First Block Title',
			'settings' => 'artists_masonry_element_5_title',
			'section' => 'artists_masonry_section'
		)));

			// DESCRIPTION FOR FIFTH ELEMENT
		$wp_customize->add_setting('artists_masonry_element_5_description', array(
			'default' => 'Description'
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'artists_masonry_element_5_description', array(
			'label' => 'First Block Description',
			'settings' => 'artists_masonry_element_5_description',
			'section' => 'artists_masonry_section'
		)));
		
			// LINK FOR FIFTH ELEMENT
		$wp_customize->add_setting('artists_masonry_element_5_link', array(
			'default' => 'Select a page or category from the dropdown'
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'artists_masonry_element_5_link', array(
			'label' => 'First Block Link',
			'settings' => 'artists_masonry_element_5_link',
			'section' => 'artists_masonry_section',
			'type' => 'select',
			'choices' => $options
		)));

			// IMAGE FOR FIFTH ELEMENT
		$wp_customize->add_setting('artists_masonry_element_5_image');
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'artists_masonry_elements_5_image', array(
			'label' => 'First Block Background Image',
			'settings' => 'artists_masonry_element_5_image',
			'section' => 'artists_masonry_section'
		)));

			// TITLE FOR SIXTH ELEMENT
		$wp_customize->add_setting('artists_masonry_element_6_title', array(
			'default' => 'Title'
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'artists_masonry_element_6_title', array(
			'label' => 'First Block Title',
			'settings' => 'artists_masonry_element_6_title',
			'section' => 'artists_masonry_section'
		)));

			// DESCRIPTION FOR SIXTH ELEMENT
		$wp_customize->add_setting('artists_masonry_element_6_description', array(
			'default' => 'Description'
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'artists_masonry_element_6_description', array(
			'label' => 'First Block Description',
			'settings' => 'artists_masonry_element_6_description',
			'section' => 'artists_masonry_section'
		)));
		
			// LINK FOR SIXTH ELEMENT
		$wp_customize->add_setting('artists_masonry_element_6_link', array(
			'default' => 'Select a page or category from the dropdown'
		));
		$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'artists_masonry_element_6_link', array(
			'label' => 'First Block Link',
			'settings' => 'artists_masonry_element_6_link',
			'section' => 'artists_masonry_section',
			'type' => 'select',
			'choices' => $options
		)));

			// IMAGE FOR SIXTH ELEMENT
		$wp_customize->add_setting('artists_masonry_element_6_image');
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'artists_masonry_elements_6_image', array(
			'label' => 'First Block Background Image',
			'settings' => 'artists_masonry_element_6_image',
			'section' => 'artists_masonry_section'
		)));
	}

	add_action('after_setup_theme', 'artists_theme_support');
	add_action('widgets_init', 'artists_widgets_init');
	add_action('init', 'artists_menus');
	add_action('wp_enqueue_scripts', 'artists_register_styles');
	add_action('wp_enqueue_scripts', 'artists_register_scripts');
	add_action('customize_register', 'artists_masonry');


	require('inc/walker.php');
?>
