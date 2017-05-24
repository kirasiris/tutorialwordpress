<?php
  function wpb_customize_register($wp_customize){

	// Front Page Section
	$wp_customize->add_section('showcase', array(
	'title' => __('Showcase' , 'tutorialwordpress'),
	'subtitle' => sprintf(__('Options for Showcase', 'tutorialwordpress')),
	'priority' => 130
	));
	

	// Imagen de Background/Background Imge
	$wp_customize-> add_setting('showcase_image', array(
	'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
	'type' => 'theme_mod'
	));
	
	$wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label'   => __('Imagen de Fondo', 'tutorialwordpress'),
      'section' => 'showcase',
      'settings' => 'showcase_image',
      'priority'  => 1
    )));
	// Titulo/Title
	$wp_customize-> add_setting('showcase_title', array(
	'default' => _x('Titulo', 'tutorialwordpress'),
	'type' => 'theme_mod'
	));
	
	$wp_customize -> add_control('showcase_title' , array(
	'label' => __('Titulo' , 'tutorialwordpress'),
	'section' => 'showcase' ,
	'priority' => 2
	));
	// Subtitulo/Subtitle
	$wp_customize-> add_setting('showcase_subtitle', array(
	'default' => _x('Subtitulo', 'tutorialwordpress'),
	'type' => 'theme_mod'
	));
	
	$wp_customize -> add_control('showcase_subtitle' , array(
	'label' => __('Subtitulo' , 'tutorialwordpress'),
	'section' => 'showcase' ,
	'priority' => 3
	));
	// Descripcion/ Description
	$wp_customize-> add_setting('showcase_description', array(
	'default' => _x('Descripcion', 'tutorialwordpress'),
	'type' => 'theme_mod'
	));
	
	$wp_customize -> add_control('showcase_description' , array(
	'label' => __('Descripcion' , 'tutorialwordpress'),
	'section' => 'showcase' ,
	'priority' => 4
	));
	
	$wp_customize->add_setting('btn_url', array(
      'default'   => _x('http://test.com', 'tutorialwordpress'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('btn_url', array(
      'label'   => __('Button URL', 'tutorialwordpress'),
      'section' => 'showcase',
      'priority'  => 5
    ));
	
    $wp_customize->add_setting('btn_text', array(
      'default'   => _x('Read More', 'tutorialwordpress'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('btn_text', array(
      'label'   => __('Button Text', 'tutorialwordpress'),
      'section' => 'showcase',
      'priority'  => 6
    ));
	
  }
  
add_action('customize_register', 'wpb_customize_register');