<?php

/**
 * This file contains the functions related to enqueuing assets.
 *
 * @package wp-dev-box
 * @since 1.0.0
 */

/**
 * Enqueues the `assets/js/block-styles.js` file, which is used to create
 * custom block styles.
 *
 * @link  https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 */
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

/**
 * Adds the `style.css` file as an editor stylesheet.
 *
 * @link  https://developer.wordpress.org/reference/functions/add_editor_style/
 */
function bse__editor_styles()
{
	add_editor_style('style.css');
}

/**
 * Enqueues the `style.css` file for the front end.
 *
 * @link  https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 */
function bse__enqueue_styles()
{
	wp_enqueue_style(
		'style-css',
		THEME_STYLE_URL,
		array(),
		microtime(),
	);

	wp_enqueue_style('boxed-brown-style');
}
