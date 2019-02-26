<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title>Document</title>
</head>
<!-- no va a dar un body difetente en cada página web, para agregar estilos diferentes -->
<body <?php body_class(); ?>>

<div id="page">
	<header id="masthead" class="site-header">
		<div class="container">
			<h1 class="site-title">
				<!-- name, description estan en Ajustes, generales -->
				<a href="<?php echo esc_url( home_url('/') ); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg">
				</a>
			</h1>
		</div>
	</header>

	<div id="contenido" class="container">
	