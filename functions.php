<?php  

function turismo_scripts(){
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'bxslider', get_template_directory_uri() . '/css/jquery.bxslider.min.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery'); //cargar el jquery de wordpress
	wp_enqueue_script( 'bxsliderjs', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), '4.0', true );//el array para que cargue después de jquery y el true para que cargue en el footer
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true );	
}
add_action( 'wp_enqueue_scripts', 'turismo_scripts' );

//Mostrar la opción menu en wp-admin
register_nav_menus( array(
	'menu_principal' => __('Menu Principal', 'turismoWP')
) );

//Activar la opción de subir imagen en el post de wp-admin 
add_theme_support( 'post-thumbnails' );
add_image_size( 'destacada', 1100, 418, true ); //true para recortar la imagen
add_image_size( 'guia-toronto', 350, 210, true );
add_image_size( 'consejos', 720, 380, true );

/* ACTIVAR WIDGET EN WP-ADMIN*/
function turismo_widgets(){
	register_sidebar( array(
		'name' => __('Blog Sidebar'),
		'id' => 'sidebar-2',
		'description' => 'Widgets de Testimoniales',
		'before_widget' => '<aside id="%1$s" class="%2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );

	register_sidebar( array(
		'name' => __('Imagenes Página principal'),
		'id' => 'front-page',
		'description' => 'Widgets para Página principal',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	) );
}
add_action( 'widgets_init', 'turismo_widgets' );

//quitar el margin-top de la barra de menu en el frontend al loguear en wp-admin
add_filter( 'show_admin_bar', '__return_false' );

?>