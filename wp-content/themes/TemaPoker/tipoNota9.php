<div class="row">
    <?php query_posts('category_name=')?><!--Para elegir categoria en slider-->
    <?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i < 3) : the_post(); ?>
    <!--Codigo que se ejecutara cuando encuentre algun post-->
		<div class="dPrinNotaDS">
			<div class="dTitNotaDS">
				<h1><?php $extracto = the_title() ;
                     $extracto = strip_tags($extracto);
                     echo substr($extracto, 0, 70).'...'; ?></h1>
			</div>
			<div class="dImgNotaDS" style="background: url(<?php
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail_url('full');
                    }
                    ?>);background-position:center;background-size:100% 100%;">>
				<div class="dFecNotaDS">
					<p>Agosto 2021</p>
				</div>
			</div>
			<div class="dExtNotaDS">
				<p><?php $extracto = the_content() ;
                                $extracto = strip_tags($extracto);
                                echo substr($extracto, 0, 100).'...'; ?></p>
			</div>
		</div>
	<?php $i++; endwhile; else: ?>
    <!--Codigo que se ejecutara si no encuentra post-->
    <h1>Error 404 no se encontraron portadas.</h1>
    <?php endif; ?>
    <?php wp_reset_query();?>
</div>