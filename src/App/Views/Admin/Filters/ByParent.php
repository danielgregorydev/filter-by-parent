<?php

namespace Dgd\FilterByParent\App\Views\Admin\Filters;

/**
 * @props https://www.tutdepot.com/add-a-parent-pages-filter-function-your-wordpress-admin-section/
 */
class ByParent extends AbstractFilter
{
	public $key = 'selected_parent_page';

	function filter($query)
	{
		if ($this->isEditPage() && $this->filteringRequested()) {
			$query->query_vars['post_parent'] = $_GET[$this->key];
		}
	}

	function render()
	{
		global $wpdb;

		if (!$this->isPostType('page')) {
			return;
		}

		$sql = "SELECT ID, post_title FROM " . $wpdb->posts . " WHERE post_type = 'page' AND post_parent = 0 AND post_status = 'publish' ORDER BY post_title";
		$parentPages = $wpdb->get_results($sql, OBJECT_K);
		$current = isset($_GET[$this->key]) ? $_GET[$this->key] : '';

		$select = '<select name="' . $this->key . '">';
		$select .= '<option value="">Filter by page parent</option>';
		$select .= '<option value="">All Pages</option>';

		foreach ($parentPages as $page) {
			$select .= sprintf(
				'<option value="%s"%s>%s</option>',
				$page->ID,
				$page->ID == $current ? ' selected="selected"' : '',
				$page->post_title
			);
		}

		$select .= '</select>';

		echo $select;
	}
}
