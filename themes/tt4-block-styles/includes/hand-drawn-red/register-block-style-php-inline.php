<?php

/**
 * This file contains the functions related to registering block styles via PHP.
 * (passing the styles definition via "inline_style" property)
 *
 * Block Style registration
 * - register_block_style
 * Styles definition:
 * - Editor: inline by register_block_style
 * - Frontend: inline by register_block_style
 */

// ------------------------------------------------------------------------------

// Registers custom block styles via PHP
// @link  https://developer.wordpress.org/reference/functions/register_block_style/

function bse__register_block_styles()
{
	register_block_style(
		'core/quote',
		array(
			'name'         => 'hand-drawn-red',
			'label'        => __('HD Red', 'block-style-examples'),
			'inline_style' => '.wp-block-quote.is-style-hand-drawn-red {
				color: red;
				border: 2px solid currentColor;
				overflow: hidden;
				box-shadow: var(--wp--preset--shadow--natural);
				border-radius: 255px 15px 225px 15px/15px 225px 15px 255px !important;
			}',
		)
	);
}

add_action('init', 'bse__register_block_styles');
