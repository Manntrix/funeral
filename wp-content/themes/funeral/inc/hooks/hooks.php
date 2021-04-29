<?php

/**
 * Post content.
 *
 * @see get_blog_posts_layout()
 */

add_action( 'Funeral_action_blog_layout', 'Funeral_get_blog_posts_layout', 10 );
add_action( 'Funeral_action_blog_data_layout', 'Funeral_get_blog_posts_data_layout', 10 );
add_action( 'Funeral_action_page_data_layout', 'Funeral_get_page_data_layout', 10 );
add_action( 'Funeral_action_get_posts_navigation', 'Funeral_posts_navigation', 10 );
add_action( 'Funeral_action_get_footer', 'Funeral_footer_layout', 10 );