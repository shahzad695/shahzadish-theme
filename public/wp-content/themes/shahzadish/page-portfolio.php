<?php
/*
Template Name: Portfilio Page
*/
get_header()
?>

<?php 
$args=[
    
    'post_type'=>'portfolio',
    'posts_per_page'=>3,
];
$portfolioQuery=new WP_Query($args);

if ($portfolioQuery->have_posts()){ 
while($portfolioQuery->have_posts()){
         $portfolioQuery->the_post();
    get_template_part('content', 'archive');

 }}

get_footer()
?>