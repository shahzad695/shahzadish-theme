<?php

/*
  ======================
       Add Scripts
  ======================

*/
function shahzadish_enque_scripts(){
    wp_enqueue_style('bootstrap-style', get_template_directory_uri().'/css/bootstrap.min.css'
    , [], '1.00', 'all');
    wp_enqueue_style('custom-style', get_template_directory_uri().'/css/shahzadish.css'
    , [], '1.00', 'all');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', [], '1.00', true);
    wp_enqueue_script('custom-js', get_template_directory_uri().'/js/shahzadish.js', [], '1.00', true);
    wp_enqueue_script('jquery');

}

add_action('wp_enqueue_scripts', 'shahzadish_enque_scripts');


/*
  ======================
       Add Nav Menu
  ======================

*/

function shahzadish_theme_setup(){
    add_theme_support('menus');
    register_nav_menu('primary','Primary Navigation menu');
    register_nav_menu('secondary', 'Footer menu');
}
add_action('init','shahzadish_theme_setup');
function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);


/*
  ======================
       Add Sidebar
  ======================

*/
function shahzadish_sidebar_setup(){
    register_sidebar([
        'name'=>'Sidebar',
        'id'=>'sidebar-1',
        'class'=>'custom',
        'description'=>'Standard Sidebar',
        'before_widget'=>'<aside id="%1$s" class="widget %2$s">',
        'after_widget'=>'<aside/>',
        'before_title'=>'<h1 class="widget-title">',
        'after_title'=>'<h1/>'

        
    ]);
}
add_action('widgets_init','shahzadish_sidebar_setup');

/*
  ======================
    Add Theme Support
  ======================

*/

add_theme_support('custom-header');
add_theme_support('custom-background');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',['aside','video','image']);

/*
  ======================
   Head Info
  ======================

*/
function remov_version_no( ){
  return"";
}
add_filter('the_generator','remov_version_no');