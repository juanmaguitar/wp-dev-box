<?php
/**
 * This file is responsible for registering the block.
 *
 * @package wp-dev-box
 */

/**
 * Registers the block on server.
 *
 * @return void
 */
function properties_cpt_md_block_init() {
	register_block_type( PLUGIN_DIR . '/build/blocks/property-cpt-md-details' );
}

add_action( 'init', 'properties_cpt_md_block_init' );
