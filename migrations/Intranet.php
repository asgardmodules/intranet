<?php
class Intranet {
	public static function up() {
		$table = \Asgard\Core\App::get('config')->get('database/prefix').'user';
		\Asgard\Core\App::get('schema')->create($table, function($table) {
			$table->add('id', 'int(11)')
				->autoincrement()
				->primary();	
			$table->add('created_at', 'datetime')
				->nullable();	
			$table->add('updated_at', 'datetime')
				->nullable();	
			$table->add('username', 'varchar(255)')
				->nullable();	
			$table->add('password', 'varchar(255)')
				->nullable();	
			$table->add('email', 'varchar(250)')
				->nullable();	
			$table->add('confirmed', 'int(1)')
				->nullable();
		});
	}
	
	public static function down() {
		\Asgard\Core\App::get('schema')->drop(\Asgard\Core\App::get('config')->get('database/prefix').'user');
	}
}