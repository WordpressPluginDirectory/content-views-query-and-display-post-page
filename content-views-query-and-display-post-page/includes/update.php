<?php
/**
 * Check update, do update
 *
 * @package   PT_Content_Views
 * @author    PT Guy <http://www.contentviewspro.com/>
 * @license   GPL-2.0+
 * @link      http://www.contentviewspro.com/
 * @copyright 2014 PT Guy
 */
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

// Compare stored version and current version
$stored_version = get_option( PT_CV_OPTION_VERSION );
if ( $stored_version ) {
	if ( version_compare( $stored_version, PT_CV_VERSION, '<' ) ) {
		update_option( PT_CV_OPTION_VERSION, PT_CV_VERSION );
	}

	// Delete deprecated post meta
	if ( version_compare( $stored_version, '2.3.2', '<' ) && cv_is_active_plugin( 'cornerstone' ) ) {
		global $wpdb;
		// phpcs:ignore WordPress.DB.DirectDatabaseQuery.DirectQuery, WordPress.DB.DirectDatabaseQuery.NoCaching
		$wpdb->query(
			"DELETE FROM $wpdb->postmeta WHERE meta_key = 'cv_comp_cornerstone_content'"
		);
	}

	// Delete deprecated option
	if ( version_compare( $stored_version, '2.1.2', '<' ) ) {
		delete_option( 'cv_pretty_pagination_url' );
	}

	// Delete transients
	if ( version_compare( $stored_version, '1.9.9', '<' ) ) {
		if ( !(defined( 'DOING_AJAX' ) && DOING_AJAX) ) {
			global $wpdb;
			// phpcs:ignore WordPress.DB.DirectDatabaseQuery.DirectQuery, WordPress.DB.DirectDatabaseQuery.NoCaching
			$wpdb->query( $wpdb->prepare( "DELETE FROM {$wpdb->options} WHERE option_name LIKE %s OR option_name LIKE %s", '_transient_timeout_pt-cv-%', '_transient_pt-cv-%' ) );
		}
	}

	// Delete view_count post meta
	if ( version_compare( $stored_version, '1.8.8.0', '<=' ) ) {
		if ( !get_option( 'pt_cv_version_pro' ) ) {
			global $wpdb;
			// phpcs:ignore WordPress.DB.DirectDatabaseQuery.DirectQuery, WordPress.DB.DirectDatabaseQuery.NoCaching
			$wpdb->query(
				$wpdb->prepare(
					"DELETE FROM $wpdb->postmeta WHERE meta_key = %s", '_' . PT_CV_PREFIX_ . 'view_count'
				)
			);
		}
	}
}