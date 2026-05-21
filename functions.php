<?php
/**
 * FreeGroup2 for Sales — functions.php
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'FG2_THEME_VERSION' ) ) {
	define( 'FG2_THEME_VERSION', '1.0.0' );
}

/**
 * Theme supports & basic setup.
 */
function fg2_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);

	load_theme_textdomain( 'freegroup2-sales', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'fg2_setup' );

/**
 * Enqueue styles & scripts.
 */
function fg2_enqueue_assets() {
	// Required by WordPress to expose theme metadata even though we keep the actual styles in main.css.
	wp_enqueue_style(
		'fg2-style',
		get_stylesheet_uri(),
		array(),
		FG2_THEME_VERSION
	);

	wp_enqueue_style(
		'fg2-main',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'fg2-style' ),
		FG2_THEME_VERSION
	);

	wp_enqueue_script(
		'fg2-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		FG2_THEME_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'fg2_enqueue_assets' );

/**
 * Load Meta Box field definitions.
 */
require_once get_template_directory() . '/inc/meta-box-fields.php';

/**
 * Helper: get a meta value with fallback.
 *
 * @param string $key     Meta key.
 * @param string $default Default value when meta is empty.
 * @return string
 */
function fg2_meta( $key, $default = '' ) {
	if ( function_exists( 'rwmb_meta' ) ) {
		$value = rwmb_meta( $key );
		if ( '' !== $value && null !== $value && false !== $value ) {
			return $value;
		}
	}
	return $default;
}

/**
 * Helper: get a checkbox meta value.
 *
 * @param string $key Meta key.
 * @return bool
 */
function fg2_meta_bool( $key ) {
	if ( function_exists( 'rwmb_meta' ) ) {
		return (bool) rwmb_meta( $key );
	}
	return false;
}
