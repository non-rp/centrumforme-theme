<?php
/**
 * Forme theme bootstrap.
 *
 * Defines the theme constants and loads the modular includes in /inc.
 * Author: Valentyn Melnychenko — https://vmel.dev
 *
 * @package Forme
 */

defined( 'ABSPATH' ) || exit;

if ( ! defined( 'FORME_VERSION' ) ) {
	// Bump on each release; used for asset cache-busting.
	define( 'FORME_VERSION', '1.0.0' );
}

define( 'FORME_DIR', get_template_directory() );
define( 'FORME_URI', get_template_directory_uri() );

require FORME_DIR . '/inc/setup.php';             // Theme supports, menus, widget areas.
require FORME_DIR . '/inc/enqueue.php';            // Front-end styles & scripts.
require FORME_DIR . '/inc/post-types.php';         // Custom post types & taxonomies.
require FORME_DIR . '/inc/acf.php';                // ACF JSON sync, options page, helpers.
require FORME_DIR . '/inc/class-forme-nav-walker.php'; // BEM nav walker + menu helper.
require FORME_DIR . '/inc/template-tags.php';      // Custom template tags.
require FORME_DIR . '/inc/template-functions.php'; // WP hook enhancements + SVG support.
