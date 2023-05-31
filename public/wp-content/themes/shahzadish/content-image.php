<h3><a href="<?php echo get_permalink();?>"><?php the_title();?></a></h3>
<?php the_post_thumbnail('thumbnail')?>
<small> Posted on:<?php the_time('F,j,Y')?> at <?php the_time('g:i:a')?> in <?php the_category()?></small>
<p><?php the_content();?></p>