<?php
/*
 *  LEEVINE
 * ----
 * Wordpress theme created by James Latten(jameslatten.me).
 * 
 * @version: 1.0.0
 */

// Include header
get_header();

// CHeck to see if this is the front page
if(is_front_page())
{
    include 'templates/pages/home.php';
}

// Now include the footer
get_footer(); 
?>