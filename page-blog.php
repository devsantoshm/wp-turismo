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
		desde page-blog.php
	</div>
	
<?php endwhile; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>