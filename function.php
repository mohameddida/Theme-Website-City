<?php 
function stageApp_register_style(){

    $version = wp_get_theme()->get('Version');


    wp_enqueue_style('stageApp_mainStyle', get_template_directory_uri(),"assets/css/main.css",array('stageApp_styl'),$version,'all');
    wp_enqueue_style('stageApp_styl', get_template_directory_uri(),"assets/css/styl.css",array(),$version,'all');
    wp_enqueue_style('stageApp_styles', get_template_directory_uri(),"assets/css/styles.css",array(),'1.0','all');
    wp_enqueue_style('stageApp_style', get_template_directory_uri(),"/style.css",array(),$version,'all');
    wp_enqueue_style('stageApp_aos', "https://unpkg.com/aos@2.3.1/dist/aos.css",array(),$version,'all');
    wp_enqueue_style('stageApp_fonts', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" ,array(),$version,'all');



}
add_action('wp-enqeueue_scripts','stageApp_register_style');

?>