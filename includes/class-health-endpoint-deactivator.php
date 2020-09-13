<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://www.jonotaegi.com/
 * @since      1.0.0
 *
 * @package    Health_Endpoint
 * @subpackage Health_Endpoint/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Health_Endpoint
 * @subpackage Health_Endpoint/includes
 * @author     Jon Otaegi
 */
class Health_Endpoint_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
        $destination = "{$_SERVER['DOCUMENT_ROOT']}/health.php";

        if(file_exists($destination)) {
            if (!unlink($destination)) {
                throw new Exception("Failed to delete '$destination'");
            }
        }
	}

}
