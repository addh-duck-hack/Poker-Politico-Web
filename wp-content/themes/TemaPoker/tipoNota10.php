<div class="rowN10">
    <div class="col-9">
        <div class="HeadRow10">
            <h3 class="textCenter">INTERNACIONAL</h3>
        </div>
        <div class="xRowCol">
        <?php query_posts('category_name=internacional')?><!--Para elegir categoria en slider-->
        <?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i < 5) : the_post(); ?>
        <?php if( $i == 1 ) : ?>
            <div class="xROwCol7">
                <div class="ContPic10" ><div class="imgNote10" style="background: url(<?php
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail_url('full');
                    }
                    ?>);background-size:cover;"></div></div>
                <div class="HTextNot10"><h1><?php 
                    $title = get_the_title();
                    echo substr($title, 0, 50).'...';
                ?></h1></div>
                <div class="TextNot10"><h2>  <?php $extracto = get_the_content();
                        $extracto = strip_tags($extracto);
                        echo substr($extracto, 0, 240).'...'; ?>
                        <a href="<?php the_permalink();?>">Seguir leyendo</a>
                    </h2>
                </div>
                <div class="FTextNot10">
                    <div class="TextL">                    
                        <div class="ImgAutor" style="background: url(<?php echo get_avatar_url(get_the_author_meta('ID'), 220); ?>);background-size:cover"></div>
                        <div class="AutorText">por&nbsp;<?php echo get_the_author(); ?></div>
                    </div>
                    <div class="TextR"><h3><?php echo get_the_date( 'M, Y'); ?></h3></div>
                </div>
            </div>
        <?php else: ?>
            <div class="xROwCol5">
                <div class="HTextNot510H">
                    <div class="HTextNot510HT">
                        <h1><?php $title = get_the_title();echo substr($title, 0, 100).'...';?></h1>
                    </div>
                    <div class="HTextNot510HI">
                        <div class="imgNote510" style="background: url(<?php
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                the_post_thumbnail_url('full');
                            }
                            ?>);background-size:cover;">
                        </div>
                    </div>
                </div>
                <div class="HTextNot510F"><h3><?php echo get_the_date( 'M, Y'); ?></h3></div>
            </div>
        <?php endif; ?>
        
        <?php $i++; endwhile; else: ?>
        <!--Codigo que se ejecutara si no encuentra post-->
        <h1>Error 404 no se encontraron portadas.</h1>
        <?php endif; ?>
        <?php wp_reset_query();?>
        </div>
    </div>    
    <div class="col-3">
        <div class="HeadRow10">
            <h3 class="textCenter">TWITTER</h3>
        </div>
        <div class="COntTwitter">
            <a class="twitter-timeline" href="https://twitter.com/PokerPolitico">Tweets by Poker pol&acute;tico</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
</div>