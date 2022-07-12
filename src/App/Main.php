<?php

namespace Dgd\ExamplePlugin\App;

use Dgd\ExamplePlugin\App\Models\Example;
use Dgd\ExamplePlugin\App\Views\Admin\UserProfile;

class Main
{
	public function init()
	{
		$example = new Example();
		$example->init();

		/**
		 * Views
		 */

		$profile = new UserProfile();
		$profile->init();
	}
}
