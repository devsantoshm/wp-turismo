<?php  
/*
	Template Name: contacto No Sidebar
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

	<div class="no-sidebar post-<?php the_ID(); ?>">
		<?php the_content(); ?>
	</div>
	
<?php endwhile; ?>

<?php get_footer(); ?>