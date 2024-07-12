<?php

/**
 * This file contains the functions related to registering block styles via PHP.
 * (passing a handle to "register_block_style")
 *
 * Block Style registration
 * - enqueue_block_editor_assets > assets/js/block-styles.js > registerBlockStyle
 * Styles definition:
 * - Editor: load theme main style.css by add_editor_style
 * - Frontend: load theme main style.css by wp_enqueue_style
 */

// ------------------------------------------------------------------------------

// Enqueue to load main style.css in the frontend
// @link  https://developer.wordpress.org/reference/functions/wp_enqueue_style/

function bse__enqueue_style__style_css_blue()
{
	wp_enqueue_style(
		'style-css',
		THEME_STYLE_URL,
		array(),
		microtime(),
	);
}

add_action('wp_enqueue_scripts', 'bse__enqueue_style__style_css_blue'); // Load frontend styles.

// ------------------------------------------------------------------------------

// Adds the `style.css` file as an editor stylesheet.
// https://developer.wordpress.org/reference/functions/add_editor_style/

function bse__editor_styles__style_blue()
{
	add_editor_style('style.css');
}

add_action('after_setup_theme', 'bse__editor_styles__style_blue'); // Load editor styles.

// ------------------------------------------------------------------------------

// Enqueues the `assets/js/block-styles.js` file,
// which is used to register the custom block style.
// @link  https://developer.wordpress.org/reference/functions/wp_enqueue_script/

function bse__enqueue_block_variations_script()
{
	wp_enqueue_script(
		'block-styles-js',
		get_theme_file_uri('assets/js/block-styles.js'),
		array(
			'wp-blocks',
			'wp-i18n',
		),
		microtime(),
		true
	);
}

add_action('enqueue_block_editor_assets', 'bse__enqueue_block_variations_script');

// ------------------------------------------------------------------------------
