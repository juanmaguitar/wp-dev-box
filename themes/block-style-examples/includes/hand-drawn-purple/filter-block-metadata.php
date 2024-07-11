<?php

/**
 * This file contains the functions related to registering block styles
 * via extening the block metadata before registering it.
 *
 * Block Style registration
 * - block_type_metadata filter
 * Styles definition:
 * - Editor: inline by register_block_style
 * - Frontend: inline by register_block_style
 */

// ------------------------------------------------------------------------------

// Enqueue to load main style.css in the frontend
// @link  https://developer.wordpress.org/reference/functions/wp_enqueue_style/

function bse__enqueue_style()
{
	wp_enqueue_style(
		'style-css',
		get_theme_file_uri('assets/css/hand-drawn-purple.css'),
		array(),
		microtime(),
	);
}

add_action('wp_enqueue_scripts', 'bse__enqueue_style'); // Load frontend styles.

// ------------------------------------------------------------------------------

/* hand-drawn-blue - Load JS asset to register Block Style via JS. */

// Adds the `style.css` file as an editor stylesheet.
// https://developer.wordpress.org/reference/functions/add_editor_style/

function bse__editor_styles()
{
	add_editor_style('assets/css/hand-drawn-purple.css');
}

// ------------------------------------------------------------------------------

// Filters core/quote block metadata to add a new style variation
// to its metadata before registering it.
// @link  https://developer.wordpress.org/reference/hooks/block_type_metadata/

function filter_block_quote_metadata($metadata)
{
	if ('core/quote' === $metadata['name']) {
		$new_style = array(
			'name'  => 'hand-drawn-purple',
			'label' => __('HD Purple', 'block-style-examples'),
		);

		$metadata['styles'][] = $new_style;
	}
	return $metadata;
}


add_filter('block_type_metadata', 'filter_block_quote_metadata');
