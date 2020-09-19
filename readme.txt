=== Health Endpoint ===
Contributors: Jon Otaegi
Tags: health, health check, health endpoint
Requires at least: 3.5
Tested up to: 5.5.1
Stable tag: 1.0.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Creates a health check API endpoint (/health) that returns an HTTP 200 OK success status response code if WordPress is performing correctly.

== Description ==

The `Health Endpoint` plugin creates a `/health` endpoint to let you monitor the status of your WordPress website. The endpoint will tests the status of the database connection and return an HTTP 200 OK success status response code as long as the application is healthy.

External tools - a monitoring service, service registry or load balancer - can access the exposed endpoint at regular intervals. This can help to verify that your WordPress website is performing correctly.

= Context and problem =

It's a good practice, and often a business requirement, to monitor web applications and back-end services, to ensure they're available and performing correctly. However, it's more difficult to monitor services running in the cloud than it is to monitor on-premises services.

There are many factors that affect cloud-hosted applications such as network latency, the performance and availability of the underlying compute and storage systems, and the network bandwidth between them. The service can fail entirely or partially due to any of these factors. Therefore, you must verify at regular intervals that the service is performing correctly to ensure the required level of availability.

= Solution =

Implement health monitoring by sending requests to an endpoint on the application. The application should perform the necessary checks, and return an indication of its status.

Services and tools are available that monitor web applications by submitting a request to a configurable set of endpoints, and evaluating the results against a set of configurable rules.

= When should I use this plugin? =

This plugin is useful for:

* Monitoring WordPress websites to verify availability.
* Monitoring WordPress websites to check response time.
* Complementing existing instrumentation in WordPress, such as performance tools and error handlers. Health verification checking doesn't replace the requirement for logging and auditing in WordPress.

= Where can I find more information about health monitoring? =

You can find more information about the `Health Endpoint Monitoring pattern` at the [Microsoft Docs website](https://docs.microsoft.com/en-us/azure/architecture/patterns/health-endpoint-monitoring).

= Development =

This plugin is being developed on [GitHub](https://github.com/jonotaegi/wordpress-health-endpoint). Please use the Support tab for potential bugs, issues, or enhancement ideas.

== Installation ==

= Automatic installation =

To do an automatic install of the Health Endpoint plugin, log in to your `WordPress dashboard`, navigate to the `Plugins` menu, and click `Add New.`

In the search field type `Health Endpoint,` then click `Search Plugins.` Once you’ve found it, you can install it by clicking `Install Now,` and `WordPress` will take it from there.

= Manual installation =

1. Unzip all the files to your `/wp-content/plugins/health-endpoint` directory.

2. Log in to your `WordPress dashboard` and activate the `Health Endpoint` plugin from the `Plugins` page.

== Frequently Asked Questions ==

== Screenshots ==

== Changelog ==

= 1.0.0 =
* Initial release.
