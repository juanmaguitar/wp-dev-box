<?php
/**
 * Theme functions file, which is auto-loaded by WordPress. Use this file to
 * load additional PHP files and bootstrap the theme.
 *
 * @author      Your Name <youremail@domain.tld>
 * @copyright   Copyright (c) 2023, Your Name
 * @link        https://yourwebsite.tld
 * @license     http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @package     wp-dev-box
 * @since       1.0.0
 */

// Setup.
define( 'THEME_STYLE_URL', get_stylesheet_uri() );
define( 'THEME_DIR', plugin_dir_path( __FILE__ ) );

require_once THEME_DIR . '/includes/register-assets.php';
require_once THEME_DIR . '/includes/enqueue-assets.php';
require_once THEME_DIR . '/includes/register-block-style.php';

add_action( 'init', 'bse__register_styles' ); // Register handles for styles.
add_action( 'wp_enqueue_scripts', 'bse__enqueue_styles' ); // Load frontend styles.

// hand-drawn-blue - Load JS asset to register Block Style via JS.
add_action( 'after_setup_theme', 'bse__editor_styles' ); // Load editor styles.
add_action( 'enqueue_block_editor_assets', 'bse__enqueue_block_variations_script' );

// hand-drawn-red - Register Block Style via PHP.
add_action( 'init', 'bse__register_block_styles' );
