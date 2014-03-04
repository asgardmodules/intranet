<?php
namespace Coxis\Intranet\Hooks;

class IntranetHooks extends \Coxis\Hook\HooksContainer {
	/**
	@Hook('start')
	*/
	public static function start($chain) {
		\Coxis\Intranet\Libs\Auth::attemptRemember();
	}

	/**
	@Hook('exception_Coxis\Auth\NotAuthenticatedException')
	*/
	public static function NotAuthenticatedException($chain, $exception) {
		\Coxis\Core\App::get('response')->setCode(401);
		return 'You must be authenticated';
	}
}