<?php
/**
 * Child theme site assets.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load the parent stylesheet before the child theme stylesheet.
 */
function blankslate_child_enqueue_parent_stylesheet() {
	$parent_theme = wp_get_theme()->parent();

	if ( ! $parent_theme ) {
		return;
	}

	wp_enqueue_style(
		'blankslate-parent-style',
		get_template_directory_uri() . '/style.css',
		array(),
		$parent_theme->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'blankslate_child_enqueue_parent_stylesheet', 9 );

/**
 * Load the custom site styles, font, and script across the website.
 */
function blankslate_child_enqueue_site_assets() {
	$theme_uri = get_stylesheet_directory_uri();
	$version   = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'tattoo-inter',
		'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap',
		array(),
		null
	);
	wp_enqueue_style(
		'tattoo-critical',
		$theme_uri . '/assets/css/tattoo-critical.css',
		array( 'tattoo-inter' ),
		$version
	);
	wp_enqueue_style(
		'tattoo-main',
		$theme_uri . '/assets/css/tattoo-main.css',
		array( 'tattoo-critical' ),
		$version
	);
	wp_enqueue_script(
		'tattoo-main',
		$theme_uri . '/assets/js/tattoo-main.js',
		array(),
		$version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'blankslate_child_enqueue_site_assets', 21 );
