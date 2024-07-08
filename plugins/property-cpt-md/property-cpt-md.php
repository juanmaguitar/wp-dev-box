<?php
/**
 * Plugin Name:       Property (Custom Post Type + Meta Data)
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       property-cpt-md
 *
 * @package wp-dev-box
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Setup.
define( 'PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_FILE', __FILE__ );

require_once PLUGIN_DIR . '/includes/register-post-type.php';
require_once PLUGIN_DIR . '/includes/register-post-meta.php';
require_once PLUGIN_DIR . '/includes/register-block.php';
