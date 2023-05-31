<article id="<?php the_ID()?> " <?php post_class()?>>

    <?php if(has_post_thumbnail()){?>
    <div class="thumbnail"> <?php the_post_thumbnail('thumbnail')?></div>
    <?php }?>

    <h3><?php the_title();?><a href="<?php echo get_permalink();?>"></a></h3>
    <small><?php the_category()?></small>
    </div>

</article>