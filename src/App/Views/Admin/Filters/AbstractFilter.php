<?php

namespace Dgd\FilterByParent\App\Views\Admin\Filters;

use Dgd\FilterByParent\Common\Abstracts\Base;

abstract class AbstractFilter extends Base
{
	public $key;

	abstract public function filter($query);
	abstract public function render();

	protected function isEditPage()
	{
		global $pagenow;

		return is_admin() && $pagenow == 'edit.php';
	}

	protected function isPostType($type = '')
	{
		return isset($_GET['post_type']) && $_GET['post_type'] == $type;
	}

	protected function filteringRequested()
	{
		return isset($_GET[$this->key]) && !empty($_GET[$this->key]);
	}

	protected function getFilteredValue()
	{
		return $this->filteringRequested() ? $_GET[$this->key] : '';
	}
}
