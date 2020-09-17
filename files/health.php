<?php
require_once("wp-load.php");

// Use the global instance created by WordPress
global $wpdb;

// Check the connection:
if(!$wpdb->check_connection($allow_bail = false)) {
    die(__("No DB connection"));
}

header("Content-length: 0");
?>
