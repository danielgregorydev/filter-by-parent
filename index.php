<?php

namespace Dgd\FilterByParent;

if (!defined('FILTER_BY_PARENT_PLUGIN_FILE')) {
	define('FILTER_BY_PARENT_PLUGIN_FILE', __FILE__);
}

/**
 * Plugin Name: Filter By Parent
 * Description: Filter content by post parent
 * Author: Daniel Gregory
 * Version: 0.0.1
 */

require_once(plugin_dir_path(__FILE__) . '/vendor/autoload.php');

$main = new App\Main();
$main->init();

/**
 * Create a main function for external uses
 *
 * @return \FilterByParent\Common\Functions
 * @since 1.0.0
 */
function filterByParent(): \Dgd\FilterByParent\Common\Functions
{
	return new \Dgd\FilterByParent\Common\Functions();
}
