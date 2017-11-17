<?=$this->load->view(branded_view('cp/header')); ?>


<div class="row">

<header class="section-header">
              <div class="container-960 center">
<div class="copywriting">
<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	
<h1 class="margin-none">Setup<strong class="text-primary"> Gateway</strong></h1>
</div>
</div>
             </div>
             </header>


<div class="col-md-8">


<div class="portlet">
<div class="widget-main">
<form class="form" id="form_email" method="post" action="<?=site_url('settings/new_gateway_details');?>">
<fieldset>
	<legend>Select your gateway</legend>
	<label for="external_api" style="display:none">Gateway Type</label>
	<? foreach ($gateways as $gateway) { ?>
	<div class="gateway_listing">
		<h2><input type="radio" class="required" name="external_api" id="external_api" value="<?=$gateway['class_name'];?>" />&nbsp;<?=$gateway['name'];?><? if (!empty($gateway['purchase_link'])) { ?> <a class="purchase" href="<?=$gateway['purchase_link'];?>">Apply for an account now.</a><? } ?></h2>
		<p class="description"><?=$gateway['description'];?></p>
		<div class="monthly_fee"><?=$gateway['monthly_fee'];?><h3>Monthly Fee</h3></div>
		<div class="setup_fee"><?=$gateway['setup_fee'];?><h3>Setup Fee</h3></div>
		<div class="transaction_fee"><?=$gateway['transaction_fee'];?><h3>Transaction Fee</h3></div>
		<div style="clear:both"></div>
	
</div>
	
<? } ?>

</fieldset>



<div class="submit">
	
<input type="submit" class="btn btn-success btn-lg btn-block center" name="go_gateway" value="Continue setting up gateway" />

</div>


</form>


</div><!--/portlet-->
</div><!--/widget-->
</div><!--/col-md-8-->

<div class="col-md-4"></div><!--/col-md-4-->

</div><!--/row-->
<?=$this->load->view(branded_view('cp/footer'));?>