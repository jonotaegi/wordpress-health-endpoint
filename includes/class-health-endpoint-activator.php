<?php

/**
 * Fired during plugin activation
 *
 * @link       http://www.jonotaegi.com/
 * @since      1.0.0
 *
 * @package    Health_Endpoint
 * @subpackage Health_Endpoint/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Health_Endpoint
 * @subpackage Health_Endpoint/includes
 * @author     Jon Otaegi
 */
class Health_Endpoint_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
        $destination = "{$_SERVER['DOCUMENT_ROOT']}/health.php";

        if(file_exists($destination)) {
                throw new Exception("Can't activate the plugin because a file already exists at '$destination'");
        } else {
            $source = plugin_dir_path( __FILE__ ) . "../files/health.php";

            if (!copy($source, $destination)) {
                throw new Exception("Failed to copy '$source' to '$destination'");
            }
        }
	}

}
