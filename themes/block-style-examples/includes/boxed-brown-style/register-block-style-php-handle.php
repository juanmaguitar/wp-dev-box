<?php

/**
 * This file contains the functions related to registering block styles via PHP.
 * (passing a handle to "register_block_style")
 *
 * Block Style registration
 * - register_block_style
 * Styles definition:
 * - Editor: load CSS file (handle) by register_block_style
 * - Frontend: load CSS file by wp_enqueue_style
 */

// ------------------------------------------------------------------------------

// Enqueue to load 'boxed-brown-style' registered style in the frontend
// @link  https://developer.wordpress.org/reference/functions/wp_enqueue_style/

function bse__enqueue_style()
{
	wp_enqueue_style(
		'boxed-brown-style',
		get_theme_file_uri('/assets/css/boxed-quote-style.css'),
		array(),
		microtime(),
	);
}
add_action('init', 'bse__enqueue_style'); // Register handles for styles.

// ------------------------------------------------------------------------------

// Registers custom block styles via PHP
// @link  https://developer.wordpress.org/reference/functions/register_block_style/

function bse__register_block_styles()
{
	register_block_style(
		'core/quote',
		array(
			'name'         => 'boxed-brown',
			'label'        => __('Boxed Brown', 'block-style-examples'),
			'style_handle' => 'boxed-brown-style',
		)
	);
}

add_action('init', 'bse__register_block_styles');
