<?php
/**
 * Plugin Name: Shipment status
 * Description: Made for update shipment status.
 * Version: 1.1.1.7
 * Author: Codup
 * Author URI: https://codup.co/
 * Text Domain: Shipment-status
 * Domain Path: /i18n/languages/
 * WC requires at least: 3.8.0
 * WC tested up to: 5.1.0
 *
 * @package Shipment-Status
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'SS_PLUGIN_DIR' ) ) {
	define( 'SS_PLUGIN_DIR', __DIR__ );
}

if ( ! defined( 'SS_PLUGIN_DIR_URL' ) ) {
	define( 'SS_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );
}

if ( ! defined( 'SS_ABSPATH' ) ) {
	define( 'SS_ABSPATH', dirname( __FILE__ ) );
}

require SS_PLUGIN_DIR . '/includes/class-ss-loader.php';
