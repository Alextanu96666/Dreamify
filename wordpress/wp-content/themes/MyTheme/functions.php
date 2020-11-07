<?php

wp_enqueue_script("jQuery");

add_filter( 'auto_update_plugin', '__return_true' );

function loadResources() {

	// Load the stylesheet.
	wp_enqueue_style('style', get_stylesheet_uri());
	// wp_enqueue_style('style', get_template_directory_uri() . '/cross-browser-style.css');


	wp_enqueue_script('jquery');

	// Loading in my custom WIP script for animation and transitions.
	// wp_enqueue_script('script', get_template_directory_uri() . '/extra/script.js', array ('jquery'));



}
add_action('wp_enqueue_scripts', 'loadResources');

function register_my_menus() {
    register_nav_menus(
      array(
        'main-menu' => __( 'Main Menu' ),
        
       )
     );
   }
   add_action( 'init', 'register_my_menus' );


    wp_enqueue_script('main',get_template_directory_uri().'/main.js?12321',array('jquery'));


