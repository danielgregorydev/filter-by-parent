<?php

namespace Dgd\ExamplePlugin;

/**
 * Plugin Name: Example Plugin
 * Description: Example plugin description.
 * Author: Daniel Gregory
 * Version: 0.0.1
 */

if (!defined('CUSTOM_MEMBER_ID_PLUGIN_FILE')) {
	define('CUSTOM_MEMBER_ID_PLUGIN_FILE', __FILE__);
}

require_once(plugin_dir_path(__FILE__) . '/vendor/autoload.php');

$main = new App\Main();
$main->init();

/**
 * Create a main function for external uses
 *
 * @return \ThePluginName\Common\Functions
 * @since 1.0.0
 */
function examplePlugin(): \Dgd\ExamplePlugin\Common\Functions
{
	return new \Dgd\ExamplePlugin\Common\Functions();
}
