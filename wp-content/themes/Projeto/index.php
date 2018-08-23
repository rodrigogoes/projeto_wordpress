<?php // CÓDIGO LATERAL ?>

<?php get_header(); ?>
<div class="container">


 <?php // IMPRIMIR POSTS  ?>
   
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
              echo "<div class='card'>
              <div class='card-header bg-dark text-white'>";?>
        
        <h1>
            <a href="<?php echo get_attachment_link(); ?>">
                <?php the_title();
              echo "</div>
              <div class='card-body'>"; ?>
            </a>
        </h1>
        <p>
            <?php the_content(); ?>
        </p>
        
        <p><?php comments_number('0 Comentários', '1 Comentário', '% Comentários' );?></p>
       
       <?php the_post_thumbnail( array( '500, 500') );   ?>
        
        <?php endwhile; else : ?>
        <p><?php _e( 'Nenhum post encontrado!' ); ?></p>
        <?php endif; ?>


</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>