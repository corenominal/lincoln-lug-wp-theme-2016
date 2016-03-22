<?php
/**
 * Enqueue CSS and JS
 */
function llug_enqueue_scripts()
{ 
    /**
     * Default Styles
     */
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/vendor/reset.css', false );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/vendor/font-awesome-4.5.0/css/font-awesome.min.css', false );
    wp_enqueue_style( 'grid12', get_template_directory_uri() . '/css/vendor/grid12.css', false );
    wp_enqueue_style( 'llug_css', get_template_directory_uri() . '/css/llug.css', false );
    
    /**
     * Default Scripts
     */
    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/vendor/jquery-1.11.3.min.js', array(), false, true );
    wp_enqueue_script( 'jquery_plugins', get_template_directory_uri() . '/js/vendor/jquery.plugins.combined.js', array(), false, true );
    wp_enqueue_script( 'llug_js', get_template_directory_uri() . '/js/llug.js', array(), false, true );

    /**
     * Conditionals
     */
    if ( is_home() || is_front_page() )
    {
        wp_enqueue_style( 'llug_homepage', get_template_directory_uri() . '/css/homepage.css', false );
    }

}
add_action( 'wp_enqueue_scripts', 'llug_enqueue_scripts' );