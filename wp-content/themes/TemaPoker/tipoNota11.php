<div class="row">
    <div class="col-12 tipo-nota-11" style="background: url(<?php bloginfo('template_url'); ?>/imagen/fondoMadera22.jpg);">
        <div class="row">
            <div class="col-sm-0 col-md-1"></div>
            <div class="col-sm-12 col-md-10">
                <h1>P O L Í T I C A</h1>
            </div>
            <div class="col-sm-0 col-md-1"></div>
        </div>
        <div class="row sub-titulo-nota-11">
            <div class="col-sm-1 col-md-3"></div>
            <div class="col-sm-11 col-md-9">
                <h2>el as bajo la manga</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6 col-sm-12">
                <?php query_posts('category_name=politica')?><!--Para elegir categoria en slider-->
                <?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i < 4) : the_post(); ?>
                <!--Codigo que se ejecutara cuando encuentre algun post-->
                    <div class="row">
                        <div class="col-4 cont-img-nota-11">
                        <a href="<?php the_permalink();?>">
                            <img class="img-nota-11" src="
                            <?php
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                the_post_thumbnail_url('full');
                            }
                            ?>">
                        </a>
                        </div>
                        <div class="col-8 cuerpo-tipo-nota-11">
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
            <div class="col-xl-4 col-md-6 hidden-sm">
                <?php query_posts('category_name=politica')?><!--Para elegir categoria en slider-->
                <?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i < 7) : the_post(); ?>
                <!--Codigo que se ejecutara cuando encuentre algun post-->
                    <div class="row <?php if ($i < 4) {
                        echo "hidden";
                    }?>">
                        <div class="col-4 cont-img-nota-11">
                        <a href="<?php the_permalink();?>">
                            <img class="img-nota-11" src="
                            <?php
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                the_post_thumbnail_url('full');
                            }
                            ?>">
                        </a>
                        </div>
                        <div class="col-8 cuerpo-tipo-nota-11">
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
            <div class="col-4 hidden-md hidden-sm">
                <?php query_posts('category_name=politica')?><!--Para elegir categoria en slider-->
                <?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i < 10) : the_post(); ?>
                <!--Codigo que se ejecutara cuando encuentre algun post-->
                    <div class="row <?php if ($i < 7) {
                        echo "hidden";
                    }?>">
                        <div class="col-4 cont-img-nota-11">
                        <a href="<?php the_permalink();?>">
                            <img class="img-nota-11" src="
                            <?php
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                the_post_thumbnail_url('full');
                            }
                            ?>">
                        </a>
                        </div>
                        <div class="col-8 cuerpo-tipo-nota-11">
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
    </div>
</div>