<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title>Document</title>
	<?php wp_head(); ?>
</head>
<!-- no va a dar un body difetente en cada página web, para agregar estilos diferentes -->
<body <?php body_class(); ?>>

<div id="page">
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="logo">
				<!-- name, description estan en Ajustes, generales -->
				<a href="<?php echo esc_url( home_url('/') ); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg">
				</a>
			</div>
			<nav id="site-navigation" class="main-navigation">
				<!-- si creamos otro menu, tenemos que especificar el nombre del menu creado -->
				<?php wp_nav_menu(array('theme_location' => 'menu_principal')); ?>
			</nav>
			<!-- limpiar floats con clear -->
			<div class="clear"></div>
		</div>
	</header>

	<div id="contenido" class="container">
	