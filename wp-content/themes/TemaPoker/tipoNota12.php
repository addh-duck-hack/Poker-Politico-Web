<div class="row special-row">
    <div class="col-xl-8 col-md-7 col-sm-12">
        <div class="col-12 height100per">
            <div id="carouselPrincipal" class="carousel slide carousel-fade height100per" data-ride="carousel">
                <ol class="carousel-indicators hidden-xs">
                    <?php query_posts('category_name=nacional')?><!--Para elegir categoria en slider-->
                    <?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i < 10) : the_post(); ?>
                        <!--Codigo que se ejecutara cuando encuentre algun post-->
                        <li data-target="#carouselPrincipal" data-slide-to="<?php echo ($i-1); ?>"<?php if (($i-1) == 0): ?>
                            class="active"
                        <?php endif; ?>></li>
                    <?php $i++; endwhile; endif; ?>
                    <?php wp_reset_query();?>
                </ol>
                <div class="carousel-inner height100per">
                    <?php query_posts('category_name=nacional')?><!--Para elegir categoria en slider-->
                    <?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i < 10) : the_post(); ?>
                    <!--Codigo que se ejecutara cuando encuentre algun post-->
                    <div class="carousel-item height100per <?php if (($i-1) == 0): ?>
                        active
                    <?php endif; ?>">
                        <div class="contenedor-textos">
                            <h2><?php the_title(); ?></h2>
                            <h3><?php $extracto = get_the_content() ;
                                $extracto = strip_tags($extracto);
                                echo substr($extracto, 0, 150).'...'; ?>
                                <a href="<?php the_permalink();?>">Seguir leyendo</a>
                            </h3>
                        </div>
                        <a href="<?php the_permalink();?>">
                            <img class="d-block w-100" src="
                            <?php
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                the_post_thumbnail_url('full');
                            }
                            ?>">
                        </a>
                    </div>
                    <?php $i++; endwhile; else: ?>
                    <!--Codigo que se ejecutara si no encuentra post-->
                    <h1>Error 404 no se encontraron portadas.</h1>
                    <?php endif; ?>
                    <?php wp_reset_query();?>
                </div>
                <a class="carousel-control-prev" href="#carouselPrincipal" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselPrincipal" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-5 col-sm-12">
        <div class="titulo-nota12">
            <h2>CIUDAD</h2>
        </div>
        <?php query_posts('category_name=ciudad')?><!--Para elegir categoria en slider-->
        <?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i < 5) : the_post(); ?>
        <!--Codigo que se ejecutara cuando encuentre algun post-->
            <div class="Nota4">
                <div class="InNota4">
                    <div class="Nota4L">
                        <div class="ImgNota4" style="background: url(<?php
                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                            the_post_thumbnail_url('full');
                        }
                        ?>);background-size:cover;"></div>
                    </div>
                    <div class="Nota4R">
                        <div class="Nota4RH"><a href="<?php the_permalink();?>"><h1><?php 
                            $title = get_the_title();
                            echo substr($title, 0, 25).'...';
                        ?></h1></a></div>
                        <!--<div class="Nota4RF"><?php the_date();?></div>-->
                        <div class="Nota4RB"><?php 
                            $title = get_the_content();
                            $title = strip_tags($title);
                            echo substr($title, 0, 125).'... ';
                        ?><a href="<?php the_permalink();?>">Seguir leyendo</a></div>
                        <!-- <div class="Nota4RL">
                            <div class="Nota4RLR"><div class="btnSegu">></div></div>
                        </div> -->
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