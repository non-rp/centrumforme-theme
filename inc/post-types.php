<?php
/**
 * Custom post types and taxonomies.
 *
 * Replaces content that used to be hardcoded in the page templates:
 *   - psychotherapist : the team roster (was ~600 lines of duplicated bios)
 *   - training        : workshops & webinars (was duplicated cards + footer popups)
 *
 * @package Forme
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register the `psychotherapist` post type.
 */
function forme_register_psychotherapist_cpt() {
	$labels = array(
		'name'          => _x( 'Psychoterapeuci', 'post type general name', 'forme' ),
		'singular_name' => _x( 'Psychoterapeuta', 'post type singular name', 'forme' ),
		'menu_name'     => _x( 'Psychoterapeuci', 'admin menu', 'forme' ),
		'add_new'       => __( 'Dodaj nowego', 'forme' ),
		'add_new_item'  => __( 'Dodaj psychoterapeutę', 'forme' ),
		'edit_item'     => __( 'Edytuj psychoterapeutę', 'forme' ),
		'new_item'      => __( 'Nowy psychoterapeuta', 'forme' ),
		'view_item'     => __( 'Zobacz psychoterapeutę', 'forme' ),
		'search_items'  => __( 'Szukaj psychoterapeutów', 'forme' ),
		'all_items'     => __( 'Wszyscy psychoterapeuci', 'forme' ),
	);

	register_post_type(
		'psychotherapist',
		array(
			'labels'       => $labels,
			'public'       => true,
			'has_archive'  => false,
			'menu_icon'    => 'dashicons-groups',
			'menu_position'=> 20,
			'supports'     => array( 'title', 'thumbnail', 'page-attributes' ),
			'rewrite'      => array( 'slug' => 'psychoterapeuta' ),
			'show_in_rest' => true,
		)
	);
}
add_action( 'init', 'forme_register_psychotherapist_cpt' );

/**
 * Register the `training` post type (workshops and webinars).
 */
function forme_register_training_cpt() {
	$labels = array(
		'name'          => _x( 'Szkolenia', 'post type general name', 'forme' ),
		'singular_name' => _x( 'Szkolenie', 'post type singular name', 'forme' ),
		'menu_name'     => _x( 'Szkolenia', 'admin menu', 'forme' ),
		'add_new'       => __( 'Dodaj nowe', 'forme' ),
		'add_new_item'  => __( 'Dodaj szkolenie', 'forme' ),
		'edit_item'     => __( 'Edytuj szkolenie', 'forme' ),
		'new_item'      => __( 'Nowe szkolenie', 'forme' ),
		'view_item'     => __( 'Zobacz szkolenie', 'forme' ),
		'search_items'  => __( 'Szukaj szkoleń', 'forme' ),
		'all_items'     => __( 'Wszystkie szkolenia', 'forme' ),
	);

	register_post_type(
		'training',
		array(
			'labels'       => $labels,
			'public'       => true,
			'has_archive'  => false,
			'menu_icon'    => 'dashicons-welcome-learn-more',
			'menu_position'=> 21,
			'supports'     => array( 'title', 'thumbnail', 'page-attributes' ),
			'rewrite'      => array( 'slug' => 'szkolenie' ),
			'show_in_rest' => true,
		)
	);
}
add_action( 'init', 'forme_register_training_cpt' );

/**
 * Register the `training_audience` taxonomy (Nauczyciele / Rodzice).
 *
 * Lets the teacher and parent template pages query the right trainings.
 */
function forme_register_training_audience_taxonomy() {
	$labels = array(
		'name'          => _x( 'Grupy odbiorców', 'taxonomy general name', 'forme' ),
		'singular_name' => _x( 'Grupa odbiorców', 'taxonomy singular name', 'forme' ),
		'menu_name'     => __( 'Grupy odbiorców', 'forme' ),
		'all_items'     => __( 'Wszystkie grupy', 'forme' ),
		'edit_item'     => __( 'Edytuj grupę', 'forme' ),
		'add_new_item'  => __( 'Dodaj grupę', 'forme' ),
	);

	register_taxonomy(
		'training_audience',
		array( 'training' ),
		array(
			'labels'            => $labels,
			'hierarchical'      => true,
			'public'            => true,
			'show_admin_column' => true,
			'rewrite'           => array( 'slug' => 'grupa' ),
			'show_in_rest'      => true,
		)
	);
}
add_action( 'init', 'forme_register_training_audience_taxonomy' );
