<?php

namespace Dgd\ExamplePlugin\App\Views\Admin;

use Dgd\ExamplePlugin\App\Models\Member;
use Dgd\ExamplePlugin\Common\Abstracts\Base;
use WP_User;

class UserProfile extends Base
{
	public function init()
	{
		$render = [$this, 'render'];

		add_action('show_user_profile', $render);
	}

	public function render($user = null)
	{
		$data = (object) [
			'example' => 'here is some example data passed to template',
		];

		include $this->plugin->templatePath() . '/admin/user-profile.php';
	}
}
