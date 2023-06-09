<article id="<?php the_ID()?> " <?php post_class()?>>


    <header>

        <h3><?php the_title();?><a href="<?php echo get_permalink();?>"></a></h3>
        <small>Posted on:<?php the_time('F,j,Y')?> at <?php the_time('g:i:a')?> in
            <?php the_category()?></small>
    </header>

    <div class="row">
        <?php if(has_post_thumbnail()){?>
        <div class="col-xs-12 col-sm-4">
            <div class="thumbnail"> <?php the_post_thumbnail('thumbnail')?></div>
        </div>
        <div class="col-xs-12 col-sm-8">

            <p><?php the_excerpt();?></p>
        </div>


        <?php } else{?>
        <div class="col-xs-12">

            <p><?php the_excerpt();?></p>
        </div>

        <?php }?>



    </div>

</article>