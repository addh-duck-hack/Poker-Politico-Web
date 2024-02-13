<div class = "row">
<?php query_posts('category_name=deportes')?><!--Para elegir categoria en slider-->
<?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i < 2) : the_post(); ?>
<!--Codigo que se ejecutara cuando encuentre algun post-->
    <div class ="PrinCont2">
        <div class ="ImgCon"style="background: url(<?php echo get_avatar_url(get_the_author_meta('ID'), 250); ?>)">
        </div>
        <div class ="TituloPrin">
        <h1><?php the_title(); ?></h1>
        </div>
        <div class ="TheAutor"> 
            <p><?php the_author();?></p>
        </div>
        <div class="TheDate">
            <p><?php the_date(); ?></p>
        </div>
    </div>
<?php $i++; endwhile; else: ?>
<!--Codigo que se ejecutara si no encuentra post-->
<h1>Error 404 no se encontraron portadas.</h1>
<?php endif; ?>
<?php wp_reset_query();?>
</div>


