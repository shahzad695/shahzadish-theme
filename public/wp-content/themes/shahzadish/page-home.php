<?php get_header();?>

<div class="row">
    <?php get_search_form()?>

    <div id="shahzadish-carousel" class="carousel slide">

        <div class="carousel-inner">
            <?php
                    $categories_in = ['include'  => '6,7,8'];

                    $categories = get_categories($categories_in);
                    $count=0;             
                    $bullets='';

                    foreach($categories as $cat){
                                    
                                    ?>

            <?php
                                    $args=[
                                        'type'             =>   'post',
                                        'posts_per_page'   =>   1,
                                        'category__in'      =>    $cat->term_id,
                                        'category__not_in'  =>    [1]
                                            ];

                                    $latestPost = new WP_Query($args);

                                    if ($latestPost->have_posts()){
                                        while($latestPost->have_posts()){
                                                 $latestPost->the_post();?>
            <div class="carousel-item <?php if($count==0){echo 'active';}?>">
                <?php the_post_thumbnail('thumbnail')?>
                <div class="carousel-caption d-none d-md-block">
                    <h3><?php the_title();?><a href="<?php echo get_permalink();?>"></a></h3>
                    <small><?php the_category()?></small>
                </div>
            </div>
            <?php $bullets .= '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'.$count.'" class="'; ?>
            <?php if($count===0){$bullets .= 'active';}?>
            <?php $bullets .= '" aria-current="';?> <?php if($count===0){$bullets .= 'true';}?>
            <?php $bullets .= '" aria-label="Slide '.$count.'"></button>'?>

            <?php   }   }
             wp_reset_postdata();
             $count=$count+1;

              }  ?>
            <div class="carousel-indicators">
                <?php echo $bullets?>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#shahzadish-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#shahzadish-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="row">

    <div class="col-xs-12 col-sm-8">
        <?php if (have_posts()){
        while(have_posts()){
        the_post();
        get_template_part('content', get_post_format());

         }}?>


    </div>
    <div class="col-xs-12 col-sm-4">
        <?php  get_sidebar();?>
    </div>
</div>
<?php get_footer();?>