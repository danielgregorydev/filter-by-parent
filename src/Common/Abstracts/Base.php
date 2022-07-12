<?php

namespace Dgd\ExamplePlugin\Common\Abstracts;

use Dgd\ExamplePlugin\Config\Plugin;

abstract class Base
{
	/**
	 * @see Plugin
	 */
	protected Plugin $plugin;

	/**
	 * Base constructor.
	 *
	 * @since 1.0.0
	 */
	public function __construct()
	{
		$this->plugin = Plugin::init();
	}
}
