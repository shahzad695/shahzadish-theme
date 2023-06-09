<?php get_header();?>
<div class="row">

    <div class="col-xs-12 col-sm-8">
        <?php if (have_posts()){?>
        <header>
            <?php the_archive_title('<h1 class="page-title">', '</h1>')?>
            <?php the_archive_description('<header class="taxonomy-description">', '</header>')?>
        </header>
        <?php while(have_posts()){
        the_post();
        get_template_part('content', 'archive');

         }}?>
        <?php the_posts_navigation()?>

    </div>
    <div class="col-xs-12 col-sm-4">
        <?php  get_sidebar();?>
    </div>
</div>
<?php get_footer();?>