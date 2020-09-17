<?php

/**
 * The plugin bootstrap file
 *
 * This file includes all of the dependencies used by the plugin, registers the activation and deactivation functions, and defines a function that starts the plugin.
 *
 * @link              http://www.jonotaegi.com/
 * @since             1.0.0
 * @package           Health_Endpoint
 *
 * @wordpress-plugin
 * Plugin Name:       Health Endpoint
 * Plugin URI:        http://wordpress.org/extend/plugins/health-endpoint/
 * Description:       Creates a health check API endpoint (/health) that returns an HTTP 200 OK success status response code.
 * Version:           1.0.0
 * Author:            Jon Otaegi
 * Author URI:        http://www.jonotaegi.com/
 * License:           GPLv3
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       health-endpoint
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'HEALTH_ENDPOINT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-health-endpoint-activator.php
 */
function activate_health_endpoint() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-health-endpoint-activator.php';
	Health_Endpoint_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-health-endpoint-deactivator.php
 */
function deactivate_health_endpoint() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-health-endpoint-deactivator.php';
	Health_Endpoint_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_health_endpoint' );
register_deactivation_hook( __FILE__, 'deactivate_health_endpoint' );

/**
 * The core plugin class that is used to define internationalization, admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-health-endpoint.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks, then kicking off the plugin from this point in the file does not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_health_endpoint() {

	$plugin = new Health_Endpoint();
	$plugin->run();

}
run_health_endpoint();
