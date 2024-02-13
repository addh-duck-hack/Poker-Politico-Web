<div class="row">
    <div class="col-12">
       <div class="categoria-nota3">
        <h1>Categoria</h1>
       </div>
   </div> 
    <div class="col-12">
        <div class="row row-nota6">
            <?php query_posts('category_name=capturas')?><!--Para elegir categoria en slider-->
            <?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i < 4) : the_post(); ?>
            <!--Codigo que se ejecutara cuando encuentre algun post-->
                <?php if($i == 1): ?>
                    <div class="col-12 imgNota6-1">
                        <img class="imgNota6" src="<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail_url('full');} ?>">
                        <div class="dateNota6-1">
                            <h3><?php the_date(); ?></h3>
                        </div>
                    </div>
                <?php else:?>
                    <?php if($i == 2): ?>
                        <div class="col-6 imgNota6-2">
                            <img class="imgNota6" src="<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                            the_post_thumbnail_url('full');} ?>">
                            <div class="dateNota6-2">
                                <h3><?php the_date(); ?></h3>
                            </div>
                        </div>
                    <?php else:?>
                        <div class="col-6 imgNota6-3">
                            <img class="imgNota6" src="<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                            the_post_thumbnail_url('full');} ?>">
                            <div class="dateNota6-3">
                                <h3><?php the_date(); ?></h3>
                            </div>
                        </div>
                    <?php endif;?>
                <?php endif;?>
                
            <?php $i++; endwhile; else: ?>
            <!--Codigo que se ejecutara si no encuentra post-->
            <h1>Error 404 no se encontraron portadas.</h1>
            <?php endif; ?>
            <?php wp_reset_query();?>
        </div>
    </div>
</div>