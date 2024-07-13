<?php

/**
 * This file contains the functions related to filtering block metadata.
 *
 * @package wp-dev-box
 * @since 1.0.0
 */

/**
 * Filters core/quote block metadata to add a new style variation
 * to its metadata before registering it.
 *
 * @param array $metadata Metadata for registering a block type.
 * @return array
 */
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
