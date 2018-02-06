<?php

add_action('wp_enqueue_scripts','custom_style');

function custom_style(){

    wp_enqueue_style('parent-style',get_template_directory_uri().'/style.css');//je charge une feuille de style ,  celle du parent
                                                                                //get_template_directory_uri() qui ramene le repertoire du theme parent 
    wp_enqueue_style('child-style',get_stylesheet_directory_uri().'/style.css');//je charge une feuille de style , celle du theme enfant
                                                                                //get_stylesheet_directory_uri() qui ramene le repertoire ou se situe 

}