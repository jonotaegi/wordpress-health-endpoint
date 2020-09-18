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
if (!defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('HEALTH_ENDPOINT_VERSION', '1.0.0');

/**
 * Filter the list of public query vars in order to allow the WP::parse_request to register the query variable.
 *
 * @since    1.0.0
 * @param array $public_query_vars The array of public query variables.
 * @return array
 */
function health_check_query_var($public_query_vars) {
    $public_query_vars[] = "health_check";
    return $public_query_vars;
}

/**
 * Hook the parse_request action and serve the health endpoint when custom query variable is set to 'true'.
 *
 * @since    1.0.0
 * @param WP $wp Current WordPress environment instance
 */
function health_check_request($wp) {
    if (isset($wp->query_vars["health_check"]) && "true" === $wp->query_vars["health_check"]) {
        // Use the global instance created by WordPress
        global $wpdb;

        // Check the connection:
        if (!$wpdb->check_connection($allow_bail = false)) {
            die(__("No DB connection"));
        }

        header("Content-length: 0");

        exit;
    }
}


/**
 * Register the rewrite rule for /health request.
 *
 * @since    1.0.0
 */
function health_endpoint_rewrite() {
    add_rewrite_rule("^health$", "index.php?health_check=true", "top");

    flush_rewrite_rules();
}

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks, then kicking off the plugin from this point in the file does not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_health_endpoint() {

    add_filter("query_vars", "health_check_query_var", 10, 1);

    add_action("parse_request", "health_check_request", 10, 1);

    add_action("init", "health_endpoint_rewrite", 10);

}

run_health_endpoint();
