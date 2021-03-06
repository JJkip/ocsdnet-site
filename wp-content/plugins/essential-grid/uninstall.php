<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   Essential_Grid
 * @author    ThemePunch <info@themepunch.com>
 * @link      http://www.themepunch.com/essential/
 * @copyright 2014 ThemePunch
 */

// If uninstall not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

require_once plugin_dir_path( __FILE__ ) . '/public/essential-grid.class.php';

global $wpdb;

//Delete Database Tables
$wpdb->query( "DROP TABLE ". $wpdb->prefix . Essential_Grid::TABLE_GRID);
$wpdb->query( "DROP TABLE ". $wpdb->prefix . Essential_Grid::TABLE_ITEM_SKIN);
$wpdb->query( "DROP TABLE ". $wpdb->prefix . Essential_Grid::TABLE_ITEM_ELEMENTS);
$wpdb->query( "DROP TABLE ". $wpdb->prefix . Essential_Grid::TABLE_NAVIGATION_SKINS);

//Delete Options
delete_option('tp_eg_role');
delete_option('tp_eg_grids_version');
delete_option('tp_eg_custom_css');

delete_option('tp_eg_output_protection');

delete_option('tp_eg_update-check');
delete_option('tp_eg_update-check-short');
delete_option('tp_eg_latest-version');
delete_option('tp_eg_code');
delete_option('tp_eg_username');
delete_option('tp_eg_api-key');
delete_option('tp_eg_valid');
delete_option('tp_eg_valid-notice');

delete_option('esg-widget-areas');