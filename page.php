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
include 'templates/pages/'.strtolower(get_the_title()).'.php';

// Now include the footer
get_footer();
?>