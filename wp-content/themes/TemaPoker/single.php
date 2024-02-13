<?php get_header(); ?>
<?php require 'tabBar.php';?>
<div class="container">
   <div class="row" style="margin-top: 0;">
      <div class="col-12" style="margin-top: -30px;">
         <div>
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h3 class="contenido-titulo text-center"><?php the_title(); ?></h3>
            <br>
            <h6 class="contenido-autor text-right">Por: <?php the_author_posts_link(); ?></h6>
            <br>
            <div class="contenido-texto">
                <?php the_content(); ?>
            </div>
            <?php comments_template(); ?>
           <?php endwhile; else: ?>
              <h3>Error 404 no se encontro el post Solicitado.</h3>
           <?php endif; ?>
           <?php wp_reset_query();?>
         </div>
      </div>
   </div>
</div>
<?php get_footer(); ?>
