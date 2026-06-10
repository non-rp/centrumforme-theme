<?php
/**
 * Front-end styles and scripts.
 *
 * @package Forme
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue theme styles and scripts.
 *
 * Styles:
 *   - forme-style      WordPress theme header + blog/article styles (style.css).
 *   - forme-main       Compiled design styles (assets/dist/css/style.css, built from assets/src SCSS).
 *   - forme-additional Late overrides (additional/additional.css).
 * Scripts:
 *   - forme-app        Compiled JS bundle (assets/dist/js/app.js).
 *   - forme-additional Late tweaks (additional/additional.js).
 */
function forme_scripts() {
	wp_enqueue_style( 'forme-style', get_stylesheet_uri(), array(), FORME_VERSION );
	wp_enqueue_style( 'forme-main', FORME_URI . '/assets/dist/css/style.css', array(), FORME_VERSION );
	wp_enqueue_style( 'forme-additional', FORME_URI . '/additional/additional.css', array( 'forme-main' ), FORME_VERSION );

	wp_enqueue_script( 'forme-app', FORME_URI . '/assets/dist/js/app.js', array(), FORME_VERSION, true );
	wp_enqueue_script( 'forme-additional', FORME_URI . '/additional/additional.js', array(), FORME_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'forme_scripts' );
