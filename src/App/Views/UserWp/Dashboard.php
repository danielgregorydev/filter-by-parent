<?php

namespace Dgd\ExamplePlugin\App\Views\UserWp;

use Dgd\ExamplePlugin\App\Models\Member;
use Dgd\ExamplePlugin\Common\Abstracts\Base;

class Dashboard extends Base
{

	public function init()
	{
		add_action('uwp_template_form_title_after', [new Dashboard(), 'render']);
	}
	/**
	 * Adds the users membership id to their profile page
	 */
	public function render()
	{
		$data = (object) [
			'user' => new Member()
		];

		include $this->plugin->templatePath() . '/user-wp/dashboard.php';
	}
}
