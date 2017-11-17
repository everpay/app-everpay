<?

/* Default Values */

if (!isset($form)) {
	$form = array(
				'name' => '',
				'type' => 'free',
				'amount' => '0',
				'interval' => '30',
				'notification_url' => 'http://',
				'occurrences' => '0',
				'free_trial' => '0'
				);

} 

?>

<?=$this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/form.plan.js') . '"></script>'));?>
<script type="text/javascript">
$(function () {
       $(".tip").tooltip();
});
</script>

<div class="row">

<header class="section-header">
              <div class="container-960 center">
<div class="copywriting">
<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	
<h1 class="margin-none">Create <strong class="text-primary">Recurring Plan</strong></h1>
</div>
</div>
             </div>
             </header>



<div class="widget-main padding-1">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="widget-box">
<div class="widget-body">

<div class="widget-main">

<div class="row">

<div class="col-lg-6 col-md-6 col-sm-6">
	
<form class="form-horizontal well" id="form_plan" method="post" action="<?=site_url($form_action);?>">

<div class="portlet">					
<!-- BEGIN PORTLET-->
<div class="portlet-body">
<fieldset>
	<legend>Basic Info</legend>
	<ul class="form">
		<li>
			<label for="name" class="full">Plan Name</label>
		</li>
		<li>
			<input type="text" class="required full" id="name" name="name" value="<?=$form['name'];?>" />
		</li>
	</ul>
</fieldset>
<hr>
<fieldset>
	<legend>Charge Info</legend>
	<ul class="form">
		<li>
			<label for="amount">Charge Amount</label>
			<input <? if ($form['amount'] == '0.00' or $form['type'] == 'free') { ?>checked="checked" <? } ?> type="radio" name="plan_type" id="plan_type" value="free" />&nbsp;Free Plan&nbsp;&nbsp;&nbsp;
			<input <? if ($form['amount'] > 0) { ?>checked="checked" <? } ?> type="radio" name="plan_type" id="plan_type" value="paid" />&nbsp;Enter Price:&nbsp;<input type="text" class="number" name="amount" id="amount" value="<?=$form['amount'];?>" />
		</li>
<hr>
		<li>
			<label for="interval">Charge Interval (days)</label>
			<input type="text" class="text required number" name="interval" id="interval" value="<?=$form['interval'];?>" />
		</li>
<hr>
		<li>
			<div class="help">The customer will be charged every <i>interval</i> days until the subscription expires or is cancelled.</div>
		</li>
<hr>
		<li>
			<label for="occurrences">Total Occurrences</label>
			<input <? if ($form['occurrences'] == '0') { ?>checked="checked" <? } ?> type="radio" name="occurrences_radio" id="occurrences_radio" value="0" />&nbsp;Infinite&nbsp;&nbsp;&nbsp;
			<input <? if ($form['occurrences'] > '0') { ?>checked="checked" <? } ?> type="radio" name="occurrences_radio" id="occurrences_radio" value="1" />&nbsp;Enter # of Occurrences:&nbsp;<input type="text" class="text number" name="occurrences" id="occurrences" <? if ($form['occurrences'] != '0') { ?>value="<?=$form['occurrences'];?>"<? } ?> />
		</li>
		<li>
			<div class="help">The customer will be charged the specified amount this many times.</div>
		</li>
<hr>
		<li>
			<label for="free_trial">Free Trial Period (days)</label>
			<input <? if ($form['free_trial'] == '0') { ?>checked="checked" <? } ?> type="radio" name="free_trial_radio" id="free_trial_radio" value="0" />&nbsp;None (charge immediately)&nbsp;&nbsp;&nbsp;
			<input <? if ($form['free_trial'] > '0') { ?>checked="checked" <? } ?>  type="radio" name="free_trial_radio" id="free_trial_radio" value="1" />&nbsp;Enter # of Days:&nbsp;<input type="text" name="free_trial" class="text number" id="free_trial" <? if ($form['free_trial'] != '0') { ?>value="<?=$form['free_trial'];?>"<? } ?> />
		</li>
	</ul>
</fieldset>
<hr>
<fieldset>
	<legend>Technical Info</legend>
	<ul class="form">
		<li>
			<label for="notification_url">Notification URL</label>
			<input type="text" name="notification_url" id="notification_url" value="<?=$form['notification_url'];?>" style="width: 60%" />
		</li>
	</ul>
<hr>
</fieldset>
<div class="submit">
	<input type="submit" class="btn btn-primary btn-lg btn-block" name="go_plan" value="<?=ucfirst($form_title);?>" />
</div>
</form>

</div><!--/portlet-->
</div><!--/portlet-body-->
</div><!--/col-lg-6-->



<div class="col-sm-6">
<div class="portlet">					
<!-- BEGIN PORTLET-->
<div class="portlet-body">
<div class="alert alert-info fade in margin-top-40" role="alert">
<button type="button" class="close" data-dismiss="alert"> <i class="fa fa-times fa-lg"></i></button>

<h2>Notification URL's</h2>

<p class="lead">If specified, our servers will send an HTTP POST request to the notification URL when any of the following system triggers
							   are tripped:
							  <p class="lead">Each post will include the following variables:</p>
							   <ul>
								   	<li>"client_id" - Your client ID.</li>
								   	<li>"secret_key" - Your API secret key.</li>
								   	<li>"plan_id" - The ID of the plan.</li>
								   	<li>"customer_id" - The ID of the customer.</li>
					<li>"recurring_id" - The ID of the recurring subscription.</li>
				<li>"charge_id" - The ID of the specific charge, if the event relates to a charge.</li>
							   </ul>
</div><!--/portlet-->
</div><!--/portlet-body-->
</div><!--/col-lg-6-->

</div><!--/row-->
</div><!--/widget-main-->


</div><!--/widget-body-->
</div><!--/widget-main-->
</div><!--/widget-box-->
</div><!--/col-lg-12-->

</div><!--/row-fluid-->




<?=$this->load->view(branded_view('cp/footer'));?>