<?php
/*============================================
Load parent Styles
=============================================*/
function harmony_enqueue_styles() {
	wp_enqueue_style( 'harmony-parent', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'harmony-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'harmony-parent' ));
}
add_action( 'wp_enqueue_scripts', 'harmony_enqueue_styles' );