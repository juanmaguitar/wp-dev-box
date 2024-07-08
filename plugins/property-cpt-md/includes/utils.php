<?php
/**
 * This file contains utility functions.
 *
 * @package wp-dev-box
 */

/**
 * Write logs to the error log.
 *
 * @param  mixed $data Data to log (can be either text or array).
 * @return void
 */
function write_log( $data ) {
	if ( true === WP_DEBUG ) {
		if ( is_array( $data ) || is_object( $data ) ) {
			error_log( print_r( $data, true ) );
		} else {
			error_log( $data );
		}
	}
}
