<?php
//wp lo toma automaticamente con una nueva opcion plantilla llamada guia toronto   
/*
+ Template Name: Guia Toronto
*/
?>
<?php get_header(); ?>

<?php while(have_posts()): the_post();?>

	<?php if(has_post_thumbnail()): ?>
		<div class="destacada">
			<?php the_post_thumbnail('destacada'); // Mostrar imagen seleccionada del post en wp-admin ?>
			<h2><?php the_title(); ?></h2>
		</div>
	<?php else: ?>
		<h2 class="noimagen"><?php the_title(); ?></h2>
	<?php endif; ?>

	<div id="primary" class="primary">
		<?php $args = array(
			'cat' => array(5,4,3),
			'posts_per_page' => 6,
			'orderby' => 'date',
			'order' => 'DESC'
		); ?>
		<?php $guiaToronto = new WP_Query($args); ?>
		<?php while($guiaToronto->have_posts()): $guiaToronto->the_post();//con the_post accedemos a los métodos?>
		<div class="post-guia">
			<div class="imagen">
				<a href="<?php the_permalink(  ); ?>">
					<?php the_post_thumbnail('guia-toronto'); ?>
				</a>
				<div class="categoria">
					<?php the_category(); ?>
				</div>
			</div>
			<div class="contenido">
				<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); //trae el contenido recortado ?>
				<a href="<?php the_permalink(  ); ?>">Leer más</a>
				<div class="clear"></div>
			</div>
			<div class="info-post">
				<p class="autor">Por: <span><?php the_author(); ?></span></p>
				<p class="fecha"><?php the_time(get_option( 'date_format' )); ?></p>
				<div class="clear"></div>
			</div>
		</div>
		<?php endwhile; wp_reset_postdata(); //para que continue con el otro loop ?>
	</div>
	
<?php endwhile; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>