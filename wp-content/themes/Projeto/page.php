<?php // CÓDIGO DA PÁGINA ESTÁTICA ?>
<?php get_header(); ?>

<div class="container">  

	<?php 
		if (have_posts()) : while (have_posts()) : the_post();
			the_content();
		endwhile; else: ?>
		<h2>Nada Encontrado</h2>
	<?php endif ?>

</div> 

<?php get_sidebar(); ?>
 
<?php get_footer(); ?>