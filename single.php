
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
		<div class="publicacion">
			<div class="columna"><?php the_tags(__('Etiquetas en este post:'), ', ', '<br>'); ?></div>
			<div class="columna"><?php _e( 'Categorizado en: ' ); the_category(', '); ?><br></div>
			<div class="columna"><?php _e('Escrito por: '); ?> <span><?php the_author(); ?></span></div>
			<div class="clear"></div>
		</div>
		<article id="post-<?php the_ID(); //poner diferente id en cada entrada?>" <?php post_class(); ?>>
			<?php the_content(); ?>
			<?php comments_template(); ?>
		</article>
		<?php edit_post_link(); ?>	
	</div>

<?php endwhile; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>