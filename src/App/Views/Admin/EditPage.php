<?php

namespace Dgd\FilterByParent\App\Views\Admin;

use Dgd\FilterByParent\App\Views\Admin\Filters\ByPageLevel;
use Dgd\FilterByParent\App\Views\Admin\Filters\ByParent;
use Dgd\FilterByParent\Common\Abstracts\Base;

class EditPage extends Base
{
	private $filters = [
		ByParent::class,
		ByPageLevel::class
	];

	public function init()
	{
		$this->processFilters();
	}

	private function processFilters()
	{
		foreach ($this->filters as $c) {
			$filter = new $c;

			add_filter('parse_query', [$filter, 'filter']);
			add_action('restrict_manage_posts', [$filter, 'render']);
		}
	}
}
