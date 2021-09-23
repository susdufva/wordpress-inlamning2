<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; // Parent blossom-shop theme
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') 
    );
}

function add_themes_features() {
    add_theme_support('post-thumbnail');
}
add_action('after_setup_theme', 'add_themes_features'); 

function myname(){
    echo '<p class="container"> Sida av Susanna Dufva </p>';
}
add_action('blossom_shop_after_footer', 'myname');

function my_footer(){
    echo "test";
}
add_action('wp_footer', 'my_footer');

function change_price($price){
    $price .= ' per package';
    return $price;
}
add_filter('woocommerce_get_price_html', 'change_price');
