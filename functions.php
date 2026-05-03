<?php
/**
 * Mroya Booking functions and definitions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * @package Mroya Booking
 * @since Mroya Booking 1.0.0
 */

function mroya_booking_enqueue_styles() {
	// Parent Theme stylesheet.
	wp_enqueue_style(
		'mroya-screen',
		get_parent_theme_file_uri( 'assets/css/screen.css' ),
		array( 'mroya-style' ),
		wp_get_theme()->get( 'Version' )
	);

	// Child Theme stylesheet.
	wp_enqueue_style(
		'mroya-booking-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'mroya-screen' ),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'mroya-booking-screen',
		get_stylesheet_directory_uri() . '/assets/css/screen.css',
		array( 'mroya-booking-style' ),
		wp_get_theme()->get( 'Version' )
	);

	// Child Theme scripts.
	wp_enqueue_script(
		'mroya-booking-screen',
		get_stylesheet_directory_uri() . '/assets/js/screen.js',
		array( 'mroya-screen' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'mroya_booking_enqueue_styles' );
