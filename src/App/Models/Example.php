<?php

namespace Dgd\ExamplePlugin\App\Models;

use Dgd\ExamplePlugin\Common\Abstracts\Base;

class Example extends Base
{
	private $str;

	public function __construct($str = null)
	{
		parent::__construct();
		$this->str = $str;
	}

	public function init()
	{
		$action = [$this, 'doSomething'];

		add_action('init', $action);
	}

	public function doSomething()
	{
	}
}
