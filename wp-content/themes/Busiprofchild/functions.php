<?php

add_action('wp_enqueue_scripts','custom_style');

function custom_style(){

    wp_enqueue_style('parent-style',get_template_directory_uri().'/style.css');//je charge une feuille de style ,  celle du parent
                                                                                //get_template_directory_uri() qui ramene le repertoire du theme parent 
    wp_enqueue_style('child-style',get_stylesheet_directory_uri().'/style.css');//je charge une feuille de style , celle du theme enfant
                                                                                //get_stylesheet_directory_uri() qui ramene le repertoire ou se situe 

}
//Ajouter une zone de menu pesonnalisée 

if ( function_exists('register_nav_menus')){

    register_nav_menus(array(
            'menufooter' => 'Menu du bas',

    ));
}

//Ajouter une zone de widgets
if( function_exists('register_sidebar')){

    register_sidebar(array(
            'name'  => 'zone de widgets personnelle',
            'id'    => 'sidebar-perso',
            'before_widget' => '<div class="embed-responsive embed-responsive-16by9">',
            'after_widget' =>'</div>'

    ));
    //Les deux dernieres entrees sont valables si on est certain de ne mettre qu'une video 16/9 dans le widget 
}

//Déclaratoin de repertoire ou seront stockés les fichiers de traduction du text domain
add_action('after_setup_theme','busiprofchild_load_textdomain');

function busiprofchild_load_textdomain(){
    load_theme_textdomain('busiprofchild',get_stylesheet_directory().'/languages');
}