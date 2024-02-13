<div class="row">
    <?php query_posts('category_name=deportes')?><!--Para elegir categoria en slider-->
    <?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i < 10) : the_post(); ?>
    <!--Codigo que se ejecutara cuando encuentre algun post-->
        <div class="Note1">
            <div class="HeadNote1">
                <div class="HeadNote1Arrow"><a href="<?php the_permalink();?>"><h1><?php 
                    $title = get_the_title();
                    echo substr($title, 0, 30).'...';
                ?></h1></a></div>
            </div>
            <div class="BodyHead1">
                <div class="ImgNote1" style="background: url(<?php
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail_url('full');
                    }
                    ?>);background-size:cover;">
                    <div class="TitleNoteIn1">
                        <h2>
                        <?php $extracto = get_the_content();
                        $extracto = strip_tags($extracto);
                        echo substr($extracto, 0, 200).'...'; ?>
                        <a href="<?php the_permalink();?>">Seguir leyendo</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    <?php $i++; endwhile; else: ?>
    <!--Codigo que se ejecutara si no encuentra post-->
    <h1>Error 404 no se encontraron portadas.</h1>
    <?php endif; ?>
    <?php wp_reset_query();?>
</div>