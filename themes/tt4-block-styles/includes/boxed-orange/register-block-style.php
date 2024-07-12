<?php

/**
 * This file contains the functions related to registering block styles via PHP.
 * (passing the styles definition via "inline_style" property)
 *
 * Block Style registration
 * - register_block_style
 * Styles definition:
 * - Editor: inline by main theme.json
 * - Frontend: inline by main theme.json
 */

// ------------------------------------------------------------------------------

// Registers custom block styles via PHP
// @link  https://developer.wordpress.org/reference/functions/register_block_style/

function bse__register_block_styles__boxed_orange()
{
	register_block_style(
		'core/quote',
		array(
			'name'  => 'boxed-orange',
			'label' => __('Boxed Orange', 'block-style-examples'),
		)
	);
}

add_action('init', 'bse__register_block_styles__boxed_orange');
