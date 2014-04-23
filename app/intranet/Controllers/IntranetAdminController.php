<?php
/**
@Prefix('admin/users')
*/
class IntranetAdminController extends \App\Admin\Libs\Controller\EntityAdminController {
	static $_entity = 'Asgard\Intranet\Entities\User';
	static $_entities = 'users';

	public function __construct() {
		$this->_messages = array(
			'modified'			=>	__('User modified with success.'),
			'created'			=>	__('User created with success.'),
			'many_deleted'			=>	__('Users modified with success.'),
			'deleted'			=>	__('User deleted with success.'),
			'unexisting'			=>	__('This user does not exist.'),
		);
		parent::__construct();
	}
	
	public function formConfigure($entity) {
		$form = new \App\Admin\Libs\Form\AdminEntityForm($entity, $this);
		
		return $form;
	}
}