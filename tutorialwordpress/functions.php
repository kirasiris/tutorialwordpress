<?php
 // Registrar Clase Nav Walker
 require_once('wp-bootstrap-navwalker.php');
 
function wpb_theme_setup(){
    // Registrando la funcion para el menu principal
	register_nav_menus(array(
      'primary' => __('Menu Principal')
    ));
	
	 // Soporte para archivo
	 add_theme_support('post-thumbnails');
	 add_theme_support('post-formats' , array('video'));  // esta linea es para "post formats" en el backend de wordpress
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
	// Widget front-page
		
		register_sidebar(array(
		'name' => 'Call To Action',
		'id' => 'call-to-action',
		'before_widget' => '<div class="well">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		));
		
		register_sidebar(array(
		'name' => 'Box 1',
		'id' => 'box1',
		'before_widget' => '<div class="">',
		'after_widget' => '</div>',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
		));
		
		register_sidebar(array(
		'name' => 'Box 2',
		'id' => 'box2',
		'before_widget' => '<div class="">',
		'after_widget' => '</div>',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
		));
		
		register_sidebar(array(
		'name' => 'Box 3',
		'id' => 'box3',
		'before_widget' => '<div class="">',
		'after_widget' => '</div>',
		'before_title' => '<h1>',
		'after_title' => '</h1>',
		));
		
		}
		
	add_action('widgets_init', 'wpb_init_widgets');
?>

<?php 
// Customizer File
require get_template_directory(). '/includes/customizer.php';
?>