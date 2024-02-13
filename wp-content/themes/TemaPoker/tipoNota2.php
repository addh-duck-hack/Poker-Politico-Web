<div class="row">
    <?php query_posts('category_name=entretenimiento')?><!--Para elegir categoria en slider-->
    <?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i <= 2) : the_post(); ?>
    <!--Codigo que se ejecutara cuando encuentre algun post-->
        <div class="ContePa"> 
            <div class= "ArribaPar">
            <div class ="ImgNota2" style="background: url(<?php echo get_avatar_url(get_the_author_meta('ID'), 250); ?>)">
            </div>
            <a href="<?php the_permalink();?>"><h2 class ="Titulo2"><?php $title = get_the_title();
                    echo substr($title, 0, 35).'...'; ?></h2></a>
            </div>
            <div class ="AbajoPar">
            <a href="<?php the_permalink();?>"><div class ="ImgComple" style="background: url(<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail_url('full');
                    } ?>)"></div></a>
            </div>
        </div>
    <?php $i++; endwhile; else: ?>
    <!--Codigo que se ejecutara si no encuentra post-->
    <h1>Error 404 no se encontraron portadas.</h1>
    <?php endif; ?>
    <?php wp_reset_query();?>

</div>