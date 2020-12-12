<?php 
function load_stylesheets()
{
    wp_enqueue_style( 'style', get_stylesheet_uri() . '/css/');
}
?>
add_action('wp_enqueue_scripts','load_stylesheets');