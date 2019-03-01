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
}
add_action( 'widgets_init', 'turismo_widgets' );

//quitar el margin-top de la barra de menu en el frontend al loguear en wp-admin
add_filter( 'show_admin_bar', '__return_false' );

?>