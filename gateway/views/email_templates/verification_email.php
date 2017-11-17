<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Verification Code</title>
</head>
<body>
	<p>Hello,<br/>
		Your Verification code for <a href="<?php echo $this->config->item('base_url');?>"><?php echo $this->config->item('server_name');?></a> is : <?php echo $code;?>
	</p>
</body>
</html>