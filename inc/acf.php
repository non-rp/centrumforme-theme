<?php
/**
 * Advanced Custom Fields integration.
 *
 * - Points ACF local JSON load/save at the theme's /acf-json folder so field
 *   groups are version-controlled and auto-sync on activation.
 * - Registers the theme options page.
 * - Provides forme_field(), a guarded get_field() wrapper so the theme never
 *   fatals when ACF is not active.
 *
 * Requires: Advanced Custom Fields PRO (options page, repeater, etc.).
 *
 * @package Forme
 */

defined( 'ABSPATH' ) || exit;

/**
 * Save field groups as JSON into the theme.
 *
 * @param string $path Default save path.
 * @return string
 */
function forme_acf_json_save_point( $path ) {
	return FORME_DIR . '/acf-json';
}
add_filter( 'acf/settings/save_json', 'forme_acf_json_save_point' );

/**
 * Load field groups from the theme JSON folder.
 *
 * @param array $paths Default load paths.
 * @return array
 */
function forme_acf_json_load_point( $paths ) {
	$paths[] = FORME_DIR . '/acf-json';

	return $paths;
}
add_filter( 'acf/settings/load_json', 'forme_acf_json_load_point' );

/**
 * Register the theme options page (ACF PRO).
 */
function forme_register_options_page() {
	if ( ! function_exists( 'acf_add_options_page' ) ) {
		return;
	}

	acf_add_options_page(
		array(
			'page_title' => __( 'Ustawienia motywu', 'forme' ),
			'menu_title' => __( 'Ustawienia motywu', 'forme' ),
			'menu_slug'  => 'forme-settings',
			'capability' => 'edit_theme_options',
			'icon_url'   => 'dashicons-admin-customizer',
			'position'   => 59,
			'redirect'   => false,
		)
	);
}
add_action( 'acf/init', 'forme_register_options_page' );

/**
 * Guarded get_field() wrapper.
 *
 * @param string     $selector Field name.
 * @param int|string $post_id  Post ID or 'option'. Defaults to current post.
 * @param mixed      $default  Value to return when the field is empty/ACF is off.
 * @return mixed
 */
function forme_field( $selector, $post_id = false, $default = '' ) {
	if ( ! function_exists( 'get_field' ) ) {
		return $default;
	}

	$value = get_field( $selector, $post_id );

	return ( null === $value || '' === $value || false === $value ) ? $default : $value;
}

/**
 * Convenience accessor for an options-page field.
 *
 * @param string $selector Field name.
 * @param mixed  $default  Fallback value.
 * @return mixed
 */
function forme_option( $selector, $default = '' ) {
	return forme_field( $selector, 'option', $default );
}
