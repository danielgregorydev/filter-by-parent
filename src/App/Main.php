<?php

namespace Dgd\FilterByParent\App;

use Dgd\FilterByParent\App\Views\Admin\EditPage;

class Main
{
	public function init()
	{
		$editPage = new EditPage();
		$editPage->init();
	}
}
