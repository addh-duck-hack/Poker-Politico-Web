<?php get_header(); ?>
<?php require 'tabBar.php';?>
<div class="container-fluid">
    <div class="row borde-rojo">
        <div class="col-12">
        <h1 class="contenido-titulo text-center">Resultado para: <?php echo $_GET['s']; ?></h1>
        </div>
    </div>
    <br><br>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
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
        <?php wp_reset_query();?>
        <?php endwhile; ?>
        <div class="pagination">
        <span class="in-left"><?php next_posts_link('« Anterior'); ?></span>
        <span class="in-right"><?php previous_posts_link('Siguiente »'); ?></span>
        </div>
    <?php else : ?>
        <p><?php _e('Ups!, no hay entradas para la categoria seleccionada.'); ?></p>
    <?php endif; ?>
    <?php wp_reset_query();?>
</div>
<?php get_footer(); ?>