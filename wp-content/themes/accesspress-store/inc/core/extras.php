<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package AccessPress Store
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function accesspress_store_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	$widget_title_style = esc_attr( get_theme_mod( 'accesspress_widget_layout_type', 'title_style_two' ) );

	if($widget_title_style == 'title_style_two'){
		$classes[] = 'apwidget_title';
	}

	/**
	 * Add Class for WebPage Layout
	*/
	$classes[]= esc_attr( get_theme_mod('accesspress_webpage_layout') );

	return $classes;
}
add_filter( 'body_class', 'accesspress_store_body_classes' );
