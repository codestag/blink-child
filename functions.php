<?php
/**
 * Blink Child Theme
 *
 * Place any custom functionality/code snippets here.
 *
 * @since Blink Child 1.0
 */

function blink_child_styles() {
    wp_enqueue_style( 'blink-child', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'blink_child_styles', 999 );
