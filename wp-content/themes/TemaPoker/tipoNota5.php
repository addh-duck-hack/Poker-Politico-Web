<div class="row">
    <?php query_posts('category_name=capturas')?><!--Para elegir categoria en slider-->
    <?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i < 10) : the_post(); ?>
    <!--Codigo que se ejecutara cuando encuentre algun post-->
        <div class="col-12">
            <div class="nota5">
                <a href="<?php the_permalink();?>"><h1><?php the_title(); ?></h1></a>
                <h2><?php $extracto = get_the_content() ;
                        $extracto = strip_tags($extracto);
                        echo substr($extracto, 0, 100).'...'; ?>
                        <a href="<?php the_permalink();?>">Seguir leyendo</a></h2>
            </div>
        </div>
    <?php $i++; endwhile; else: ?>
    <!--Codigo que se ejecutara si no encuentra post-->
    <h1>Error 404 no se encontraron portadas.</h1>
    <?php endif; ?>
    <?php wp_reset_query();?>
</div>