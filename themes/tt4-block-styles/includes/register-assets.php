<?php

/**
 * This file contains the functions related to registering assets handles.
 *
 * @package wp-dev-box
 * @since 1.0.0
 */

/**
 * Registers the `boxed-quote-style` handle.
 *
 * @link  https://developer.wordpress.org/reference/functions/wp_register_style/
 */
function bse__register_styles()
{
	wp_register_style(
		'boxed-brown-style',
		get_theme_file_uri('/assets/css/boxed-quote-style.css'),
		array(),
		microtime(),
	);
}
