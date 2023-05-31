<?php
get_header();?>
<div class="row">


    <div class="col-xs-12 col-sm-8">

        <div class="row text-center">
            <?php if (have_posts()){$i=0;
             while(have_posts()){
            the_post();
            if($i==0){$column=12;}
            if($i>0 && $i<=2){$column=6;$class=' second-row-padding';}
            if($i>2){$column=4;$class=' third-row-padding';}?>
            <div class="col-<?php echo $column; echo $class;?>">
                <?php if(has_post_thumbnail()){
                $urlImage=wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); }?>
                <div class="blog-element" style="background-image: url(<?php echo $urlImage?>);">
                    <h3><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h3>
                    <small><?php the_category(' ')?></small>
                </div>
            </div>
            <?php $i++;
         }?>
            <div class="col-4 text-left">
                <?php next_posts_link('Older posts')?>
            </div>
            <div class="col-4 text-right">
                <?php previous_posts_link('New posts')?>
            </div>
            <?php };?>


        </div>
    </div>
    <div class="col-xs-12 col-sm-4">

        <?php get_sidebar()?>
    </div>
</div>
<?php get_footer();?>