<?php
namespace Asgard\Intranet\Hooks;

class IntranetHooks extends \Asgard\Hook\HooksContainer {
	/**
	@Hook('start')
	*/
	public static function start($chain) {
		\Asgard\Intranet\Libs\Auth::attemptRemember();
	}

	/**
	@Hook('exception_Asgard\Auth\NotAuthenticatedException')
	*/
	public static function NotAuthenticatedException($chain, $exception) {
		\Asgard\Core\App::get('response')->setCode(401);
		return 'You must be authenticated';
	}
}