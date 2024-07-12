<?php

/**
 * Plugin Name:       Property (Custom Post Type + Meta Data)
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       property-cpt-md
 *
 * @package wp-dev-box
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

// Setup.
if (!defined('PLUGIN_DIR')) {
	define('PLUGIN_DIR', plugin_dir_path(__FILE__));
}
if (!defined('PLUGIN_FILE')) {
	define('PLUGIN_FILE', __FILE__);
}

require_once PLUGIN_DIR . '/includes/register-post-type.php';
require_once PLUGIN_DIR . '/includes/register-post-meta.php';
require_once PLUGIN_DIR . '/includes/register-block.php';
require_once PLUGIN_DIR . '/includes/enqueue-editor-scripts.php';

// Commented as a the same behaviour is enabled via JS code (see scripts/editor.js).
// left here for reference of how to do this with PHP code.

/* require_once PLUGIN_DIR . '/includes/restrict-blocks.php'; */
