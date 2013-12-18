<?php
/**
@Prefix('admin/users')
*/
class IntranetAdminController extends \Coxis\Admin\Libs\Controller\EntityAdminController {
	static $_entity = 'Coxis\Intranet\Entities\User';
	static $_entities = 'users';

	function __construct() {
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
		$form = new \Coxis\Admin\Libs\Form\AdminEntityForm($entity, $this);
		
		return $form;
	}
}