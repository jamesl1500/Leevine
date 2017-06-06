<?php
/*
 * Main Functions File
 * ----
 * This will hold all of our functions
 *
 * @theme LEEVINE
 */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats' , array('quote'));



function my_custom_post_types() {
    register_post_type( 'quotes', array( 'public' => true, 'label' => 'Quotes' ) );
    //register_post_type( 'quote-of-the-day', array( 'public' => true, 'label' => 'Quote Of The Day' ) );
    //register_post_type( 'quotes', array( 'public' => true, 'label' => 'Quotes' ) );
}

add_action( 'init', 'my_custom_post_types' );