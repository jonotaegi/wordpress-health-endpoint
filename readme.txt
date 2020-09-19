=== Health Endpoint ===
Contributors: jonotaegi
Tags: health check, api, endpoint, monitor, uptime, performance
Requires at least: 3.5
Tested up to: 5.5.1
Stable tag: 1.0.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Creates a /health endpoint that returns a 200 OK HTTP status code while WordPress is performing correctly.

== Description ==

This simple plugin creates a `/health` endpoint to let you monitor the status of your WordPress website. The endpoint tests the status of your database connection and returns a `200 OK` HTTP status code while your page is healthy. You can read more on HTTP status codes at the [Wikipedia article](https://en.wikipedia.org/wiki/List_of_HTTP_status_codes).

External tools such as website monitoring services can access the exposed endpoint at regular intervals. This can help you verify that your WordPress website is performing correctly.

You can find more information about the [Health Endpoint Monitoring Pattern](https://docs.microsoft.com/en-us/azure/architecture/patterns/health-endpoint-monitoring) at the [Microsoft Azure Documentation](https://docs.microsoft.com/en-us/azure/architecture/patterns/) website.

= Development =

This plugin is being developed on [GitHub](https://github.com/jonotaegi/wordpress-health-endpoint). If you want to collaborate, feel free to submit pull requests or report bugs on the issue tracker.

== Installation ==

= Automatic installation =

1. Log in to your "WordPress dashboard", navigate to the "Plugins" menu, and click "Add New."

2. In the search field type "Health Endpoint," then click "Search Plugins."

3. Once you’ve found it, you can install it by clicking "Install Now," and WordPress will take it from there.

= Manual installation =

1. Unzip all the files to your `/wp-content/plugins/health-endpoint` directory.

2. Log in to your "WordPress dashboard" and activate the "Health Endpoint" plugin from the "Plugins" page.

== Frequently Asked Questions ==

== Screenshots ==

== Changelog ==

= 1.0.0 =
* Initial release.
