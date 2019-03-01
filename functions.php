<?php  

function turismo_scripts(){
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'turismo_scripts' );

//Mostrar la opción menu en wp-admin
register_nav_menus( array(
	'menu_principal' => __('Menu Principal', 'turismoWP')
) );

//Activar la opción de subir imagen en el post de wp-admin 
add_theme_support( 'post-thumbnails' );
add_image_size( 'destacada', 1100, 418, true ); //true para recortar la imagen


//quitar el margin-top de la barra de menu en el frontend al loguear en wp-admin
add_filter( 'show_admin_bar', '__return_false' );

?>