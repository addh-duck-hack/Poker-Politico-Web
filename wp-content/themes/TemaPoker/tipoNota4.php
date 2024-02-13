<div class="row">
<?php query_posts('category_name=estados')?><!--Para elegir categoria en slider-->
    <?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i < 10) : the_post(); ?>
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
                        echo substr($title, 0, 30).'...';
                    ?></h1></a></div>
                    <div class="Nota4RF"><?php the_date();?></div>
                    <div class="Nota4RB"><?php 
                        $title = get_the_content();
                        echo substr($title, 0, 200).'...';
                    ?></div>
                    <div class="Nota4RL">
                        <div class="Nota4RLR"><div class="btnSegu">></div></div>
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