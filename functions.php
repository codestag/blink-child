<?php
/**
 * Blink Child Theme
 *
 * Place any custom functionality/code snippets here.
 *
 * @since Blink Child 1.0
 */

/**
 * Include child theme styles.
 *
 * @return void
 */
function blink_child_styles() {
	$theme = wp_get_theme();
	wp_enqueue_style( 'blink-style', get_template_directory_uri() . '/style.css', array(), $theme->parent()->get( 'Version' ) );
	wp_enqueue_style( 'blink-child-style', get_stylesheet_uri(), array( 'blink-style' ), $theme->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'blink_child_styles' );
