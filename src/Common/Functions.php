<?php

namespace Dgd\ExamplePlugin\Common;

use Dgd\ExamplePlugin\Common\Abstracts\Base;

/**
 * Main function class for external uses
 *
 * @see customMemberId()
 * @package DgdCustomMemberId\Common
 */
class Functions extends Base
{
	public function getExampleGlobal()
	{
		return $this->plugin->exampleGlobal();
	}
}
