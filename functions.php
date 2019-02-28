<?php  

function turismo_scripts(){
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'turismo_scripts' );

?>