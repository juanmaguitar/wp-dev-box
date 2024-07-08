<?php
/**
 * This file is responsible for registering the block.
 *
 * @package wp-dev-box
 */

require_once PLUGIN_DIR . '/includes/utils.php';

/**
 * Filters the list of allowed block types based on the editing context.
 *
 * This function restricts the custom block 'property-cpt-md/details' to be allowed only in the
 * "Property" post type.
 *
 * @param array|bool $allowed_block_types Array of block type slugs, or boolean to enable/disable all.
 * @param object     $block_editor_context The current block editor context, including the editor type and the post being edited.
 * @return array|boolean Modified array of allowed block types or true if all allowed.
 */
function restrict_property_cpt_md_details_block( $allowed_block_types, $block_editor_context ) {

	$disallowed_blocks = array(
		'property-cpt-md/details',
	);

	$post_type       = $block_editor_context->post->post_type;
	$is_not_property = ( 'property' !== $post_type );
	$is_post_editor  = ( 'core/edit-post' === $block_editor_context->name );
	$is_post_exist   = isset( $block_editor_context->post );

	if ( $is_post_editor && $is_post_exist && $is_not_property ) {

		// Get all registered blocks if $allowed_block_types is not already set.
		if ( ! is_array( $allowed_block_types ) || empty( $allowed_block_types ) ) {
			$registered_blocks   = WP_Block_Type_Registry::get_instance()->get_all_registered();
			$allowed_block_types = array_keys( $registered_blocks );
		}

		// Create a new array for the allowed blocks.
		$filtered_blocks = array();

		// Loop through each block in the allowed blocks list.
		foreach ( $allowed_block_types as $block ) {
			// Check if the block is not in the disallowed blocks list.
			if ( ! in_array( $block, $disallowed_blocks, true ) ) {
				// If it's not disallowed, add it to the filtered list.
				$filtered_blocks[] = $block;
			}
		}
		return $filtered_blocks;
	}

	// Allow all blocks in the Site Editor ('property-cpt-md/details' included ) when editing "Property" post type.
	return true;
}
add_filter( 'allowed_block_types_all', 'restrict_property_cpt_md_details_block', 10, 2 );
