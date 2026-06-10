<?php
/**
 * Functions which enhance the theme by hooking into WordPress.
 *
 * @package Forme
 */

defined( 'ABSPATH' ) || exit;

/**
 * Add custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function forme_body_classes( $classes ) {
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'forme_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function forme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'forme_pingback_header' );

/**
 * Allow SVG uploads (used for the theme's icon set).
 *
 * @param array $mimes Allowed mime types.
 * @return array
 */
function forme_allow_svg_upload( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
}
add_filter( 'upload_mimes', 'forme_allow_svg_upload' );

/**
 * Fix the detected mime type for SVG files, restricted to users who can manage options.
 *
 * @param array  $data      File data (ext, type, proper_filename).
 * @param string $file      Full path to the file.
 * @param string $filename  The name of the file.
 * @param array  $mimes     Allowed mime types.
 * @param string $real_mime The actual mime type detected.
 * @return array
 */
function forme_fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ) {
	if ( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ) {
		$is_svg = in_array( $real_mime, array( 'image/svg', 'image/svg+xml' ), true );
	} else {
		$is_svg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	if ( $is_svg ) {
		if ( current_user_can( 'manage_options' ) ) {
			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		} else {
			$data['ext']  = false;
			$data['type'] = false;
		}
	}

	return $data;
}
add_filter( 'wp_check_filetype_and_ext', 'forme_fix_svg_mime_type', 10, 5 );

/**
 * Render SVG attachments as images in the media library.
 *
 * @param array $response Attachment data prepared for JS.
 * @return array
 */
function forme_show_svg_in_media_library( $response ) {
	if ( 'image/svg+xml' === $response['mime'] ) {
		$response['sizes'] = array(
			'medium' => array( 'url' => $response['url'] ),
			'full'   => array( 'url' => $response['url'] ),
		);
	}

	return $response;
}
add_filter( 'wp_prepare_attachment_for_js', 'forme_show_svg_in_media_library' );
