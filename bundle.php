<?php
namespace App\Intranet;

class Bundle extends \Coxis\Core\BundleLoader {
	public function run() {
		\Coxis\Admin\Libs\AdminMenu::instance()->menu[0]['childs'][] = array('label' => __('Users'), 'link' => 'users');
		\Coxis\Admin\Libs\AdminMenu::instance()->home[] = array('img'=>\URL::to('intranet/icon.svg'), 'link'=>'users', 'title' => __('Users'), 'description' => __('Manage your users'));
		parent::run();
	}
}
return new Bundle;