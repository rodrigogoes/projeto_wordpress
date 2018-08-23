<?php // CÓDIGO LATERAL ?>

<?php get_header(); ?>
<div class="container" style="width: 1500px">



 <?php // IMPRIMIR POSTS  ?>
   
              <div class='row' style="margin-right: 15px">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
              echo "<div class='card' style='margin-right: 5px; margin-top: 5px' >
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
       
       <?php the_post_thumbnail( array( '500, 500') ); 
         ?>
       </div>
     </div>

        
        <?php endwhile; else : ?>
        <p><?php _e( 'Nenhum post encontrado!' ); ?></p>
        <?php endif; ?>

</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>