<?php

namespace Dgd\FilterByParent\App\Views\Admin\Filters;

class ByPageLevel extends AbstractFilter
{
	public $key = 'selected_page_level';

	function filter($query)
	{
		if ($this->isEditPage() && $this->filteringRequested()) {
			$query->query_vars['post_parent'] = 0;
		}
	}

	function render()
	{
		if (!$this->isPostType('page')) {
			return;
		}

		$select = '<select name="' . $this->key . '">';
		$select .= '<option value="">Page Level</option>';
		$select .= '<option value="">All Pages Levels</option>';
		$selected = $this->getFilteredValue() == "parent" ? "selected" : "";
		$select .= '<option value="parent"' . $selected . '>Parent Pages Only</option>';
		$select .= '</select>';

		echo $select;
	}
}
