<?php
 // Registrar Clase Nav Walker
 require_once('wp-bootstrap-navwalker.php');
 
 // Soporte para archivo
 add_theme_support('post-thumbnails');
 
 function wpb_theme_setup(){
    // Registrando la funcion para el menu principal
	register_nav_menus(array(
      'primary' => __('Menu Principal')
    ));
	
	}
	add_action('after_setup_theme','wpb_theme_setup');
	
	// Largura de Excerpt
	function set_excerpt_length(){
		return 45;
		}
	add_filter('excerpt_length' , 'set_excerpt_length');
	
	
	// Sidebar y Posicion de Widgets
	function wpb_init_widgets($id){
		register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="well" id="sidebar" style="border-radius: 0px;" >',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		));	
		
		}
		
	add_action('widgets_init', 'wpb_init_widgets');
?>