<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Funeral
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function Funeral_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'Funeral_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function Funeral_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'Funeral_pingback_header' );

if ( ! function_exists( 'Funeral_title' ) ) :

    /**
     * Generate title for page, post, archive.
     */
    function Funeral_title() {
            if ( is_singular() ) :
                the_title( '<h1>', '</h1>' );
            elseif ( is_archive() ) :
                the_title( '<h4><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="blog-title">', '</a></h4>' );
            elseif ( is_404() ) :
                ?>
                <h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'Funeral' ); ?></h1>
            <?php
            else :
                the_title( '<h4><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="blog-title">', '</a></h4>' );
            endif;
    }

endif;

if ( ! function_exists( 'Funeral_excerpt' ) ) :

	/**
	 * Generate Excerpt.
	 */
	function Funeral_excerpt() {
        the_excerpt();
	}
	function Funeral_custom_excerpt_length( $length ) {
		return 15;
	}
	add_filter( 'excerpt_length', 'Funeral_custom_excerpt_length', 999 );

endif;