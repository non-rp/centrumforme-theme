<?php
/**
 * Theme setup: feature support, navigation menus, widget areas, content width.
 *
 * @package Forme
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register theme feature support and navigation menus.
 */
function forme_setup() {
	// Make the theme available for translation (/languages).
	load_theme_textdomain( 'forme', FORME_DIR . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);

	add_theme_support(
		'custom-logo',
		array(
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// Header and footer share the same menu in the design; both locations are exposed.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary (header)', 'forme' ),
			'footer'  => esc_html__( 'Footer', 'forme' ),
		)
	);
}
add_action( 'after_setup_theme', 'forme_setup' );

/**
 * Set the content width for embeds and large images.
 *
 * @global int $content_width
 */
function forme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'forme_content_width', 640 );
}
add_action( 'after_setup_theme', 'forme_content_width', 0 );

/**
 * Register the blog sidebar widget area.
 */
function forme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'forme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'forme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'forme_widgets_init' );
