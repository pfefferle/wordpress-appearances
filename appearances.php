<?php
/**
 * Plugin Name: Appearances
 * Plugin URI: https://github.com/pfefferle/wordpress-appearances
 * Description: Custom-Post-Types for speakings, podcasts and articles
 * Author: Matthias Pfefferle
 * Author URI: https://notiz.blog/
 * Version: 1.0.0
 * License: GPL-2.0-or-later
 * License URI: https://opensource.org/license/gpl-2-0/
 * Text Domain: rssclub
 * Update URI: https://github.com/pfefferle/wordpress-appearances
 */

namespace Appearances;

/**
 * Register Podcast post type
 */
function register_podcast_post_type() {
	\register_post_type(
		'podcast',
		array(
			'label'        => __( 'Podcast', 'appearances' ),
			'description'  => __( "Voices in my ear, \nstories weave through quiet hours, \nworlds unfold unseen.", 'appearances' ),
			'public'       => true,
			'supports'     => array(
				'title',
				'editor',
				'author',
				'comments',
				'revisions',
				'trackbacks',
				'post-formats',
				'custom-fields',
				'page-attributes',
			),
			'has_archive'  => true,
			'show_in_rest' => true,
			'menu_icon'    => 'dashicons-microphone',
			'rewrite'      => array(
				'slug' => 'podcasts',
			),
			'labels'       => array(
				'name'               => __( 'Podcast', 'appearances' ),
				'singular_name'      => __( 'Podcast', 'appearances' ),
				'all_items'          => __( 'All Podcast episodes', 'appearances' ),
				'new_item'           => __( 'New Podcast episode', 'appearances' ),
				'add_new'            => __( 'Add New', 'appearances' ),
				'add_new_item'       => __( 'Add New Podcast episode', 'appearances' ),
				'edit_item'          => __( 'Edit Podcast episode', 'appearances' ),
				'view_item'          => __( 'View Podcast episode', 'appearances' ),
				'search_items'       => __( 'Search Podcast episode', 'appearances' ),
				'not_found'          => __( 'No Podcast episode found', 'appearances' ),
				'not_found_in_trash' => __( 'No Podcast episode found in trash', 'appearances' ),
				'parent_item_colon'  => __( 'Parent Podcast episode', 'appearances' ),
				'menu_name'          => __( 'Podcast', 'appearances' ),
			),
		)
	);

	\register_taxonomy_for_object_type( 'post_tag', 'podcast' );
}
add_action( 'init', __NAMESPACE__ . '\register_podcast_post_type' );

/**
 * Register Publication post type
 */
function register_publication_post_type() {
	\register_post_type(
		'publication',
		array(
			'label'        => __( 'Publication', 'appearances' ),
			'description'  => __( "Words on paper breathe, \nthoughts set free to wander far, \nsilent voices speak.", 'appearances' ),
			'public'       => true,
			'supports'     => array(
				'title',
				'editor',
				'author',
				'comments',
				'revisions',
				'trackbacks',
				'post-formats',
				'custom-fields',
				'page-attributes',
			),
			'has_archive'  => true,
			'show_in_rest' => true,
			'menu_icon'    => 'dashicons-edit-page',
			'rewrite'      => array(
				'slug' => 'publications',
			),
			'labels'       => array(
				'name'               => __( 'Publication', 'appearances' ),
				'singular_name'      => __( 'Publication', 'appearances' ),
				'all_items'          => __( 'All Publications', 'appearances' ),
				'new_item'           => __( 'New Publication', 'appearances' ),
				'add_new'            => __( 'Add New', 'appearances' ),
				'add_new_item'       => __( 'Add New Publication', 'appearances' ),
				'edit_item'          => __( 'Edit Publication', 'appearances' ),
				'view_item'          => __( 'View Publication', 'appearances' ),
				'search_items'       => __( 'Search Publication', 'appearances' ),
				'not_found'          => __( 'No Publication found', 'appearances' ),
				'not_found_in_trash' => __( 'No Publication found in trash', 'appearances' ),
				'parent_item_colon'  => __( 'Parent Publication', 'appearances' ),
				'menu_name'          => __( 'Publication', 'appearances' ),
			),
		)
	);

	\register_taxonomy_for_object_type( 'post_tag', 'publication' );
}
add_action( 'init', __NAMESPACE__ . '\register_publication_post_type' );

/**
 * Register Speaking post type
 */
function register_speaking_post_type() {
	\register_post_type(
		'speaking',
		array(
			'label'        => __( 'Speaking', 'appearances' ),
			'description'  => __( "Words drift into air, \nbridging minds with fleeting sound, \nechoes linger near.", 'appearances' ),
			'public'       => true,
			'supports'     => array(
				'title',
				'editor',
				'author',
				'comments',
				'revisions',
				'trackbacks',
				'post-formats',
				'custom-fields',
				'page-attributes',
			),
			'has_archive'  => true,
			'show_in_rest' => true,
			'menu_icon'    => 'dashicons-slides',
			'rewrite'      => array(
				'slug' => 'speaking',
			),
			'labels'       => array(
				'name'               => __( 'Speaking', 'appearances' ),
				'singular_name'      => __( 'Speaking', 'appearances' ),
				'all_items'          => __( 'All Speakings', 'appearances' ),
				'new_item'           => __( 'New Speaking', 'appearances' ),
				'add_new'            => __( 'Add New', 'appearances' ),
				'add_new_item'       => __( 'Add New Speaking', 'appearances' ),
				'edit_item'          => __( 'Edit Speaking', 'appearances' ),
				'view_item'          => __( 'View Speaking', 'appearances' ),
				'search_items'       => __( 'Search Speaking', 'appearances' ),
				'not_found'          => __( 'No Speaking found', 'appearances' ),
				'not_found_in_trash' => __( 'No Speaking found in trash', 'appearances' ),
				'parent_item_colon'  => __( 'Parent Speaking', 'appearances' ),
				'menu_name'          => __( 'Speaking', 'appearances' ),
			),
		)
	);

	\register_taxonomy_for_object_type( 'post_tag', 'speaking' );
}
add_action( 'init', __NAMESPACE__ . '\register_Speaking_post_type' );
