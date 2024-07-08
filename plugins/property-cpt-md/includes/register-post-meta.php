<?php
/**
 * This file is responsible for registering the custom fields of posts (post meta).
 *
 * @package wp-dev-box
 */

/**
 * Registers the custom fields (post meta) for the property post type.
 *
 * @return void
 */
function fsd_property_post_meta() {

	register_post_meta(
		'property',
		'squareFootage',
		array(
			'show_in_rest' => true,
			'single'       => true,
			'type'         => 'integer',
		)
	);

	register_post_meta(
		'property',
		'bedrooms',
		array(
			'show_in_rest' => true,
			'single'       => true,
			'type'         => 'integer',
		)
	);

	register_post_meta(
		'property',
		'bathrooms',
		array(
			'show_in_rest' => true,
			'single'       => true,
			'type'         => 'number', // Half baths exist, so we want number, NOT integer here.
		)
	);

	register_post_meta(
		'property',
		'price',
		array(
			'show_in_rest' => true,
			'single'       => true,
			'type'         => 'number',
		)
	);
}

add_action( 'init', 'fsd_property_post_meta' );
