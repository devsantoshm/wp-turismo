<?php
//wp lo toma automaticamente con una nueva opcion plantilla llamada consejos   
/*
+ Template Name: consejos
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
			'cat' => 8,
			'posts_per_page' => 5,
			'orderby' => 'date',
			'order' => 'DESC'
		); ?>
		<?php $consejos = new WP_Query($args); ?>
		<?php while($consejos->have_posts()): $consejos->the_post();//con the_post accedemos a los métodos?>
		
			<a href="<?php the_permalink(  ); ?>">
				<?php the_post_thumbnail('consejos'); ?>
			</a>
			<h2 class="consejos"><?php the_title(); ?></h2>
			<?php the_content(); ?>
			
		<?php endwhile; wp_reset_postdata(); //para que continue con el otro loop ?>
	</div>
	
<?php endwhile; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>