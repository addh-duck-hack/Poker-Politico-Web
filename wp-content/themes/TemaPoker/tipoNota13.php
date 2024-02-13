<div class="row tipo-nota-13">
    <div class="col-md-6 col-sm-12">
        <h2>Entretenimiento</h2>
        <?php query_posts('category_name=entretenimiento')?><!--Para elegir categoria en slider-->
        <?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i < 4) : the_post(); ?>
        <!--Codigo que se ejecutara cuando encuentre algun post-->
            <div class="row">
                <div class="col-4 cont-img-nota-13">
                <a href="<?php the_permalink();?>">
                    <img class="img-nota-13" src="
                    <?php
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail_url('full');
                    }
                    ?>">
                </a>
                </div>
                <div class="col-8 cuerpo-tipo-nota-13">
                    <a href="<?php the_permalink();?>">
                        <h1><?php 
                            $title = get_the_title();
                            if (strlen($title) > 50){
                                echo substr($title, 0, 50).'...';
                            }else{
                                echo $title;
                            }
                        ?></h1>
                    </a>
                    <div class="content-tipo-nota-13">
                        <h4>
                            <?php 
                                $content = get_the_content();
                                $content = strip_tags($htmlLabels,"",$content);
                                if (strlen($content) > 120){
                                    echo substr($content, 0, 120).'...';
                                }else{
                                    echo $content;
                                }
                            ?>
                            <a href="<?php the_permalink();?>">Seguir leyendo</a>
                        </h4>
                    </div>
                    <div class="TextL">                    
                        <div class="ImgAutor" style="background: url(<?php echo get_avatar_url(get_the_author_meta('ID'), 220); ?>);background-size:cover"></div>
                        <div class="AutorText">por&nbsp;<?php echo get_the_author(); ?></div>
                    </div>
                </div>
            </div>
        <?php $i++; endwhile; else: ?>
        <!--Codigo que se ejecutara si no encuentra post-->
        <h1>Error 404 no se encontraron portadas.</h1>
        <?php endif; ?>
        <?php wp_reset_query();?>
    </div>
    <div class="col-md-6 col-sm-12">
        <h2>Cultura</h2>
        <?php query_posts('category_name=cultura')?><!--Para elegir categoria en slider-->
        <?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i < 4) : the_post(); ?>
        <!--Codigo que se ejecutara cuando encuentre algun post-->
            <div class="row">
                <div class="col-4 cont-img-nota-13">
                <a href="<?php the_permalink();?>">
                    <img class="img-nota-13" src="
                    <?php
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail_url('full');
                    }
                    ?>">
                </a>
                </div>
                <div class="col-8 cuerpo-tipo-nota-13">
                    <a href="<?php the_permalink();?>">
                        <h1><?php 
                            $title = get_the_title();
                            if (strlen($title) > 50){
                                echo substr($title, 0, 50).'...';
                            }else{
                                echo $title;
                            }
                        ?></h1>
                    </a>
                    <div class="content-tipo-nota-13">
                        <h4>
                            <?php 
                                $content = get_the_content();
                                $content = strip_tags("<strong>","",$content);
                                if (strlen($content) > 120){
                                    echo substr($content, 0, 120).'...';
                                }else{
                                    echo $content;
                                }
                            ?>
                            <a href="<?php the_permalink();?>">Seguir leyendo</a>
                        </h4>
                    </div>
                    <div class="TextL">                    
                        <div class="ImgAutor" style="background: url(<?php echo get_avatar_url(get_the_author_meta('ID'), 220); ?>);background-size:cover"></div>
                        <div class="AutorText">por&nbsp;<?php echo get_the_author(); ?></div>
                    </div>
                </div>
            </div>
        <?php $i++; endwhile; else: ?>
        <!--Codigo que se ejecutara si no encuentra post-->
        <h1>Error 404 no se encontraron portadas.</h1>
        <?php endif; ?>
        <?php wp_reset_query();?>
    </div>
</div>