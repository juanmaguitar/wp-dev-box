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

require_once THEME_DIR . '/constants.php';

require_once THEME_DIR . '/includes/boxed-brown-style/register-block-style-php-handle';
require_once THEME_DIR . '/includes/boxed-orange/register-block-style.php';
require_once THEME_DIR . '/includes/hand-drawn-blue/register-block-style-js.php';
require_once THEME_DIR . '/includes/hand-drawn-purple/filter-block-metadata.php';
require_once THEME_DIR . '/includes/hand-drawn-red/register-block-style-php-inline.php';
// another block style variation is defined via "/styles/block/hd-green.json"
