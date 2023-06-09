<?php get_header();?>
<div class="row">

    <div class="col-xs-12 col-sm-8">


        <?php if (have_posts()){
             while(have_posts()){
                    the_post();?>
        <article>
            <h3><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></h3>

            <small><?php the_category(' ')?>||<?php the_tags()?>||<?php edit_post_link()?></small>
            <?php if(has_post_thumbnail()){?>
            <div class="pull-right"> <?php the_post_thumbnail('thumbnail')?></div>
            <?php }?>
            <?php the_content()?>
            <hr>
            <div class="row">
                <div class="col-6 text-right">
                    <?php previous_post_link()?>
                </div>
                <div class="col-6 text-left">
                    <?php next_post_link()?>
                </div>

            </div>

            <?php }};?>
        </article>
    </div>
    <div class="col-xs-12 col-sm-4">

        <?php get_sidebar();?>
    </div>
</div>
<?php get_footer();?>