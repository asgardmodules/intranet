<?php
namespace Asgard\Intranet;

class Bundle extends \Asgard\Core\BundleLoader {
	public function run() {
		\Asgard\Admin\Libs\AdminMenu::instance()->menu[0]['childs'][] = array('label' => __('Users'), 'link' => 'users');
		\Asgard\Admin\Libs\AdminMenu::instance()->home[] = array('img'=>\Asgard\Core\App::get('url')->to('intranet/icon.svg'), 'link'=>'users', 'title' => __('Users'), 'description' => __('Manage your users'));
		parent::run();
	}
}