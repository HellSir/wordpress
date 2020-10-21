<?php
function wordsmith_scripts(){
    wp_enqueue_style('style-css',get_stylesheet_uri());
    wp_enqueue_style('main',get_template_directory_uri().'/css/main.css');
    wp_enqueue_style('vendor',get_template_directory_uri().'/css/vendor.css');
    wp_enqueue_style('fontawesome',get_template_directory_uri().'/css/font-awesome/css/fontawesome-all.css');

    wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery-3.2.1.min.js');
    wp_enqueue_script('plugins',get_template_directory_uri().'/js/plugins.js');
    wp_enqueue_script('main',get_template_directory_uri().'/js/main.js');
    wp_enqueue_script('modernizr',get_template_directory_uri().'/js/modernizr.js');

}
add_action('wp_enqueue_scripts','wordsmith_scripts');