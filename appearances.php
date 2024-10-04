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
			'description'  => __( '<p>2008 riefen Sebastian Küpers, Christian Scholz und ich den OpenWeb Podcast ins leben. Bis 2011 entstanden 33 Folgen zu Themen wie OpenID, OAuth und Microformats. 2012 haben wir uns entschieden den Podcast einzustellen und uns, für zwei Folgen, der Technikwürze anzuschließen.</p><p>Seit Februar 2019 bin ich Gast bei Marcel Weiß‘ „Hier und Jetzt“ Podcast. In regelmäßig unregelmäßigen Abständen (wahrscheinlich monatlich) werden wir über das Thema „Open Web“ sprechen.</p>', 'appearances' ),
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
			'description'  => __( 'Von der zweiten Ausgabe des SCREENGUIDE (vorher Webstandards) Magazins, bis Juni 2018 habe ich in meiner Kolumne „Pfefferles OpenWeb“, einmal im Quartal, die aktuellen Entwicklungen des „Open Webs“ zusammengefasst. In diesen 10 Jahren sind 36 Artikel über OpenID, Microformats, DataPortability und das IndieWeb zusammen gekommen. Darüber hinaus habe ich auch mehrere Artikel für die t3n, das PC-Magazin und die SCREENGUIDE (bzw. das Webstandards-Magazin) geschrieben.', 'appearances' ),
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
			'description'  => __( 'Ich halte Vorträge auf BarCamps, Webmontagen, (WordPress) Meetups oder WordCamps, meistens zu den Themen Microformats, OpenID, IndieWeb oder WordPress.', 'appearances' ),
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
