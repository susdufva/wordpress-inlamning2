<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; // Parent blossom-shop theme
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this is only if you have Version in the style header
    );
}
/* 
function register_my_menus(){ /*kod för att skapa fungerande, klickbara menyer
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu', 'text_domain'),
            'mobile-menu' => __('Mobile Menu', 'text_domain')
        )
        );
} 
add_action ('init', 'register_my_menus');  */
/* 
function add_themes_features() {
    add_theme_support('woocommerce');
    add_theme_support('post-thumbnail');
}
add_action('after_setup_theme', 'add_themes_features'); */

