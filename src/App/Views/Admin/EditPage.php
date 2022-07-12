<?php

namespace Dgd\FilterByParent\App\Views\Admin;

use Dgd\FilterByParent\Common\Abstracts\Base;

/**
 * @props https://www.tutdepot.com/add-a-parent-pages-filter-function-your-wordpress-admin-section/
 */
class EditPage extends Base
{
	private $key = 'selected_parent_page';

	public function init()
	{
		add_filter('parse_query', [$this, 'filterBySelectedParent']);
		add_action('restrict_manage_posts', [$this, 'renderParentPageFilter']);
	}

	function filterBySelectedParent($query)
	{
		global $pagenow;

		if (is_admin() && $pagenow == 'edit.php' && !empty($_GET[$this->key])) {
			$query->query_vars['post_parent'] = $_GET[$this->key];
		}
	}

	function renderParentPageFilter()
	{
		global $wpdb;

		if (!isset($_GET['post_type']) || $_GET['post_type'] != 'page') {
			return;
		}

		$sql = "SELECT ID, post_title FROM " . $wpdb->posts . " WHERE post_type = 'page' AND post_parent = 0 AND post_status = 'publish' ORDER BY post_title";
		$parentPages = $wpdb->get_results($sql, OBJECT_K);
		$current = isset($_GET[$this->key]) ? $_GET[$this->key] : '';

		$select = '<select name="' . $this->key . '">';
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
