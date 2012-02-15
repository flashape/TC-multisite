<?php
/*
 * Template Name: Landing Page
 * This template displays only content; no header, footer, etc
 */
 
// Remove Header
remove_action('genesis_header', 'genesis_header_markup_open', 5);
remove_action('genesis_header', 'genesis_header_markup_close', 15);
remove_action('genesis_header', 'genesis_do_header');
 
// Remove Navigation
remove_action('genesis_after_header', 'genesis_do_nav');
remove_action('genesis_after_header', 'genesis_do_subnav');
 
// Remove Breadcrumbs
remove_action('genesis_before_loop', 'genesis_do_breadcrumbs');
 
// Remove Footer
remove_action('genesis_footer', 'genesis_do_footer');
remove_action('genesis_footer', 'genesis_footer_markup_open', 5);
remove_action('genesis_footer', 'genesis_footer_markup_close', 15);
 
genesis(); // requires Genesis 1.3+