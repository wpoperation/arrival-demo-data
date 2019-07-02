<?php

$data = array(
	'corporate' => array(
		'categories'        => array( 'Corporate','One Page' ),
		'preview_url' => 'https://demo.wpoperation.com/arrival/',
		'xml_file'        => 'content.xml',
		'theme_settings'  => 'options.dat',
		'widgets_file'    => 'widgets.wie',
		'home_title'      => 'Home',
		'blog_title'      => 'blogs',
		'posts_to_show'   => '5',
		'is_shop' => false,
		'menus'         => array(
			'primary' => 'Main Menu',
			'top' => 'Top Menu'
		),
		'required_plugins'  => array(
			'free' => array(
				array(
					'slug'    => 'elementor',
					'init'    => 'elementor/elementor.php',
					'name'    => 'Elementor',
				),
				array(
					'slug'    => 'wpop-elementor-addons',
					'init'    => 'wpop-elementor-addons/wpop-elementor-addons.php',
					'name'    => 'Operation Elementor Addons',
				),
				array(
					'slug'    => 'smart-slider-3',
					'init'    => 'smart-slider-3/smart-slider-3.php',
					'name'    => 'Smart Slider',
				),
				array(
					'slug'    => 'contact-form-7',
					'init'    => 'contact-form-7/wp-contact-form-7.php',
					'name'    => 'Contact Form 7',
				),
			),
		),
	),

);