<?php
/**
 * This file is responsible for registering the block.
 *
 * @package wp-dev-box
 */

/**
 * Enqueue plugin specific editor scripts.
 *
 * @return void
 */
function wpdevbox_enqueue_editor_scripts() {

	// enqueue the script.
	wp_enqueue_script(
		'wpdevbox-meta-custom-editor',
		PLUGIN_DIR . '/build/editor.js',
		array( 'wp-blocks', 'wp-dom-ready' ),
		microtime(), // set a unique version every load.
		false
	);

	// Add Post Types custom data as a variable for our JS to reference.
	wp_localize_script(
		'wpdevbox-meta-custom-editor',
		'postData',
		array(
			'postType' => get_post_type( get_the_id() ),
		)
	);
}
add_action( 'enqueue_block_editor_assets', 'wpdevbox_enqueue_editor_scripts' );
