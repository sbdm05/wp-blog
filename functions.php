<?php

function blog_style(){
    wp_enqueue_style('main', get_stylesheet_uri()); 
    wp_enqueue_style('style-google', '//fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap'); 
}

add_action('wp_enqueue_scripts', 'blog_style' ); 



//Ajout de l'image mise en avant pour chaque article
add_theme_support('post-thumbnails'); 

// Créer un emplacement de menu
register_nav_menus(array(
    'menu-header'  => esc_html__('Menu haut', 'monblog')
)); 

function widgets_spots($id){
    register_sidebar(array(
        'name'  => 'Barre Latérale',
        'id'    => 'sidebar', 
        'before_title' => '<h3 class="widget-title">',
        'after_title'  => '</h3>'
    )); 
    register_sidebar(array(
        'name'  => 'Footer Gauche',
        'id'    => 'footerleft', 
        'before_title' => '<h3 class="widget-title">',
        'after_title'  => '</h3>'
    )); 
    register_sidebar(array(
        'name'  => 'Footer Central',
        'id'    => 'footercentral', 
        'before_title' => '<h3 class="widget-title">',
        'after_title'  => '</h3>'
    )); 
    register_sidebar(array(
        'name'  => 'Footer Droit',
        'id'    => 'footerright', 
        'before_title' => '<h3 class="widget-title">',
        'after_title'  => '</h3>'
    )); 
}



//Créer un emplacement de widgets
add_action('widgets_init', 'widgets_spots');