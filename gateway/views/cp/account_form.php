<?=$this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>'));?>



<style>
select {
font-family: inherit;
font-size: inherit;
line-height: inherit;
width: 85%!important;
}
</style>

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
	
<h1 class="margin-none"><strong class="text-primary"> <?=$form_title;?></strong></h1>
</div>
</div>
             </div>
</header>

<div class="row-fluid">
<div class="widget-box">
<div class="widget-body">			
<div class="widget-main">

<div class="row">

<div class="col-md-6 col-sm-12">
<!-- BEGIN PORTLET-->
<div class="portlet">
<div class="widget-main">
		
<form class="form-horizontal well" id="form_account" method="post" enctype="multipart/form-data" action="<?=site_url($form_action);?>">

<div class="widget-body">
<fieldset>
	<h2>System Information</h2>
	
	<ul class="form-body">
		<li>
<div class="widget-header">
			<h3 class="widget-title">Username: <strong class="text-primary">
				<?=$form['username'];?>
			</strong>
</h3>
		</div>
		</li>

<div class="hr hr-8"></div>
		<li>
<div>
					<label for="email">Email Address
						<small class="text-warning"></small>
					</label>

					<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-envelope"></i>
					</span>
<input type="text" autocomplete="off" class="form-control required email mark_empty" rel="email@example.com" id="email" name="email" value="<?=$form['email'];?>" />
					</div>
				</div>
			
		</li>
<hr>
		<li>
<div>
			<label for="password">Password</label>
<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-key"></i>
					</span>
			<input type="password" autocomplete="off" class="form-control" id="password" name="password" value="" />

					</div>
				</div>
		</li>
<hr>
		<li>
<div>

			<label for="password2">Repeat Password</label>
<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-key"></i>
					</span>
			<input type="password" autocomplete="off" class="form-control" id="password2" name="password2" value="" />
</div>
				</div>
		</li>

		<li>
			<div class="help">Leave password fields blank to keep your current password.</div>
		</li>

	</ul>
</fieldset>
<div class="hr hr-8"></div>
<fieldset>
	<h2>Personal Information</h2>
	
	<ul class="form-body">

		<li>
<div>
<label for="first_name">
First Name
						<small class="text-warning"></small>
					</label>

					<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-user"></i>
					</span>
<input class="form-control required mark_empty" class="form-control First Name" type="text" id="first_name" name="first_name" value="<?=$form['first_name'];?>" />
</div></div>		
<hr>
<div>
<label for="last_name">
Last Name
						<small class="text-warning"></small>
					</label>

					<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-user"></i>
					</span>
<input  class="form-control required mark_empty" rel="Last Name" type="text" id="last_name" name="last_name" value="<?=$form['last_name'];?>" />
</div></div>		
		</li>
<hr>
		<li>
<div>

<label for="company">
Company
						<small class="text-warning"></small>
					</label>

					<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-building"></i>
					</span>
			<input type="text" class="form-control required" id="company" name="company" value="<?=$form['company'];?>" />
</div></div>		
</li>
<hr>
		<li>
			<label for="company_logo">Company Logo</label>
			<input type="file" class="text" id="company_logo" name="company_logo"  />
			<?php $logo=$form['company_logo'];
			if($logo!=""){ ?>
			<img src="<?php echo site_url();?>/upload/<?php echo $form['company_logo'];?>" height="80" width="80"/>
			<?php } else{?>
             <img src="<?php echo site_url();?>/upload/avatar.png" height="80" width="80"/>
			<?php }?>
		</li>
<hr>
		<li>
<div>
					<label for="address_1">
Mailing Address
						<small class="text-warning"></small>
					</label>

					<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-building"></i>
					</span>
			<input type="text" class="form-control required" name="address_1" id="address_1" value="<?=$form['address_1'];?>" />
</div>
</div>		

</li>
<hr>
		<li>

<div>
					<label for="address_2">
Address Line 2
						<small class="text-warning"></small>
					</label>

					<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-building"></i>
					</span>
			<input type="text" class="form-control" name="address_2" id="address_2" value="<?=$form['address_2'];?>" />
</div>
</div>
		</li>
<hr>
		<li>


<div>
					<label for="city">
City
						<small class="text-warning"></small>
					</label>

					<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-globe"></i>
					</span>
			<input type="text" class="form-control required" name="city" id="city" value="<?=$form['city'];?>" />
</div>
</div>
		</li>
<hr>
		<li>

<div>
					<label for="Country">
Country
						<small class="text-warning"></small>
					</label>

					<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-globe"></i>
					</span>
			<select id="country" name="country" class="form-control required"><?php
			foreach ($countries as $country) {
				if ($form['country'] == $country['iso2']) { ?>
					<option  selected="selected"  value="<?php echo $country['iso2'];?>" ><?php echo $country['name'];?></option><?php
				} else { ?>
					<option><?php echo $country['name']; ?></option><?php
				}
			} ?></select>
</div>
</div>
		</li>
<hr>
		<li>

<div>
					<label for="state">
Region
						<small class="text-warning"></small>
					</label>

					<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-building"></i>
					</span>
			<input type="text" class="text" name="state" id="state" value="<?=$form['state'];?>" />
			<select id="state_select" class="form-control" name="state_select"><?php
			foreach ($states as $state) {
				if ($form['state'] == $state['code']) { ?>
					<option  selected="selected"  value="<?=$state['code'];?>"><?=$state['name'];?></option><?php
				} else { ?>
					<option value="<?=$state['code'];?>"><?=$state['name'];?></option><?php
				}
			} ?></select>
</div>
</div>
		</li>
<hr>
		<li>
<div>
					<label for="postal_code">
                                            Postal Code
						<small class="text-warning"></small>
					</label>

					<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-building"></i>
					</span>

			<input type="text" class="form-control required" name="postal_code" id="postal_code" value="<?=$form['postal_code'];?>" />
</div>
</div>
		</li>
<hr>
		<li>
<div>
					<label for="phone">
						Phone
						<small class="text-warning">(999) 999-9999</small>
					</label>

					<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-phone"></i>
					</span>

		<input class="form-control input-mask-phone" type="text" id="phone" name="phone" value="<?=$form['phone'];?>" />
					</div>
				</div>
		</li>
<hr>
		<li>

<div>
					<label for="timezone">
						Timezone
						<small class="text-warning">(GMT)</small>
					</label>

					<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-globe"></i>
					</span>
<?=timezone_menu($form['gmt_offset']);?>
</div>
				</div>
		</li>
	</ul>
</fieldset>
<div class="hr hr-8"></div>
<fieldset>
	<h2>Business Info</h2>
	<ul class="form-body">
		<li>
			<div>
				<label for="tax_id">Tax ID
					<small class="text-warning"></small>
				</label>
				<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-envelope"></i>
					</span>
					<input class="form-control required mark_empty" type="text" id="tax_id" name="tax_id" value="<?=$form['tax_id'];?>" />
				</div>
			</div>
		</li>
		<hr>
		<li>
			<div>
				<label for="business_start">Business Start Date
					<small class="text-warning"></small>
				</label>
				<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-date"></i>
					</span>
					<input class="form-control required mark_empty" type="text" id="business_start" name="business_start" value="<?=$form['business_start'];?>" />
				</div>
			</div>
		</li>
		<hr>
		<li>
			<div>
				<label for="business_category">Business Category
					<small class="text-warning"></small>
				</label>
				<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-envelope"></i>
					</span>
					<select class="form-control required mark_empty" id="business_category" name="business_category">
						<option value="">--Select--</option>
						<?php foreach($business_categories as $category) { ?>
						<option <?php if($form['business_category'] == $category->id) echo 'selected="selected"'; ?> value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
						<?php } ?>
					</select>
					<!-- <input class="form-control required mark_empty" type="text" id="business_category" name="business_category" value="<?=$form['business_category'];?>" /> -->
				</div>
			</div>
		</li>
		<hr>
		<li>
			<div>
				<label for="business_address">Business Address
					<small class="text-warning"></small>
				</label>
				<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-building"></i>
					</span>
					<input class="form-control required mark_empty" type="text" id="business_address" name="business_address" value="<?=$form['business_address'];?>" />
				</div>
			</div>
		</li>
		<hr>
		<li>
			<div>
				<label for="business_city">Business City
					<small class="text-warning"></small>
				</label>
				<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-globe"></i>
					</span>
					<input class="form-control required mark_empty" type="text" id="business_city" name="business_city" value="<?=$form['business_city'];?>" />
				</div>
			</div>
		</li>
		<hr>
		<li>
			<div>
				<label for="business_state">Business State
					<small class="text-warning"></small>
				</label>
				<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-building"></i>
					</span>
					<input class="form-control required mark_empty" type="text" id="business_state" name="business_state" value="<?=$form['business_state'];?>" />
				</div>
			</div>
		</li>
		<hr>
		<li>
			<div>
				<label for="business_zip">Business Zip
					<small class="text-warning"></small>
				</label>
				<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-building"></i>
					</span>
					<input class="form-control required mark_empty" type="text" id="business_zip" name="business_zip" value="<?=$form['business_zip'];?>" />
				</div>
			</div>
		</li>
		<hr>
		<li>
			<div>
				<label for="business_country">Business Country
					<small class="text-warning"></small>
				</label>
				<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-building"></i>
					</span>
					<select class="form-control required mark_empty" id="business_country" name="business_country">
						<option value="">--Select--</option>
						<?php foreach($business_countries as $country) { ?>
						<option <?php if($form['business_country'] == $country->country_id) echo 'selected="selected"';?> value="<?php echo $country->country_id; ?>"><?php echo $country->name; ?></option>
						<?php } ?>
					</select>
					<!-- <input class="form-control required mark_empty" type="text" id="business_country" name="business_country" value="<?=$form['business_country'];?>" /> -->
				</div>
			</div>
		</li>
		<hr>
		<li>
			<div>
				<label for="business_phone">Business Phone
					<small class="text-warning"></small>
				</label>
				<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-phone"></i>
					</span>
					<input class="form-control required mark_empty" type="text" id="business_phone" name="business_phone" value="<?=$form['business_phone'];?>" />
				</div>
			</div>
		</li>
		<hr>
		<li>
			<div>
				<label for="business_fax">Business Fax
					<small class="text-warning"></small>
				</label>
				<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-fax"></i>
					</span>
					<input class="form-control required mark_empty" type="text" id="business_fax" name="business_fax" value="<?=$form['business_fax'];?>" />
				</div>
			</div>
		</li>
		<hr>
		<li>
			<div>
				<label for="business_url">Business URL
					<small class="text-warning"></small>
				</label>
				<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-link"></i>
					</span>
					<input class="form-control required mark_empty" type="text" id="business_url" name="business_url" value="<?=$form['business_url'];?>" />
				</div>
			</div>
		</li>
		<hr>
		<li>
			<div>
				<label for="business_monthly_vol">Business Monthly Volume
					<small class="text-warning"></small>
				</label>
				<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-dollar"></i>
					</span>
					<select  class="form-control required mark_empty" id="business_monthly_vol" name="business_monthly_vol">
						<option value="">--Select--</option>
						<?php foreach($monthly_vol_list as $key=>$val) { ?>
						<option <?php if($form['business_monthly_vol'] == $key) echo 'selected="selected"';?> value="<?php echo $key; ?>" ><?php echo $val; ?></option>
						<?php } ?>
					</select>
					<!-- <input class="form-control required mark_empty" type="text" id="business_monthly_vol" name="business_monthly_vol" value="<?=$form['business_monthly_vol'];?>" /> -->
				</div>
			</div>
		</li>
		<hr>
		<li>
			<div>
				<label for="bank_routing_number">Bank Routing Number
					<small class="text-warning"></small>
				</label>
				<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-envelope"></i>
					</span>
					<input class="form-control required mark_empty" type="text" id="bank_routing_number" name="bank_routing_number" value="<?=$form['bank_routing_number'];?>" />
				</div>
			</div>
		</li>
		<hr>
		<li>
			<div>
				<label for="bank_acc_number">Bank Account Number
					<small class="text-warning"></small>
				</label>
				<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-envelope"></i>
					</span>
					<input class="form-control required mark_empty" type="text" id="bank_acc_number" name="bank_acc_number" value="<?=$form['bank_acc_number'];?>" />
				</div>
			</div>
		</li>
		<hr>
		<li>
			<div>
				<label for="bank_acc_type">Bank Account Type
					<small class="text-warning"></small>
				</label>
				<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-envelope"></i>
					</span>
					<select  class="form-control required mark_empty" id="bank_acc_type" name="bank_acc_type">
						<option value="">--Select--</option>
						<option <?php if($form['bank_acc_type'] == 'CHECKING') echo 'selected="selected"';?> value="CHECKING">CHECKING</option>
						<option <?php if($form['bank_acc_type'] == 'CURRENT') echo 'selected="selected"';?> value="CURRENT">CURRENT</option>
						<option <?php if($form['bank_acc_type'] == 'PERSONAL') echo 'selected="selected"';?> value="PERSONAL">PERSONAL</option>
						<option <?php if($form['bank_acc_type'] == 'TRANSACTION') echo 'selected="selected"';?> value="TRANSACTION">TRANSACTION</option>
					</select>
					<!-- <input class="form-control required mark_empty" type="text" id="bank_acc_type" name="bank_acc_type" value="<?=$form['bank_acc_type'];?>" /> -->
				</div>
			</div>
		</li>
		<hr>
		<li>
			<div>
				<label for="bank_name">Bank Name
					<small class="text-warning"></small>
				</label>
				<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-envelope"></i>
					</span>
					<input class="form-control required mark_empty" type="text" id="bank_name" name="bank_name" value="<?=$form['bank_name'];?>" />
				</div>
			</div>
		</li>
		<hr>
		<li>
			<div>
				<label for="bank_acc_name">Bank Account Name
					<small class="text-warning"></small>
				</label>
				<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-envelope"></i>
					</span>
					<input class="form-control required mark_empty" type="text" id="bank_acc_name" name="bank_acc_name" value="<?=$form['bank_acc_name'];?>" />
				</div>
			</div>
		</li>
		<hr>
		<li>
			<div>
				<label for="is_non_us">Is Non-US Bank
					<small class="text-warning"></small>
				</label>
				<div class="input-group">
					<input type="checkbox" name="is_non_us" id="is_non_us" <?php if($form['is_non_us'] == 1) echo 'checked="checked"'; ?> class="checkbox" />
					<!-- <input class="form-control required mark_empty" type="text" id="is_non_us" name="is_non_us" value="<?=$form['is_non_us'];?>" /> -->
				</div>
			</div>
		</li>
		<hr>
		<li>
			<div>
				<label for="bank_swift_number">Bank Swift Number
					<small class="text-warning"></small>
				</label>
				<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-envelope"></i>
					</span>
					<input class="form-control required mark_empty" type="text" id="bank_swift_number" name="bank_swift_number" value="<?=$form['bank_swift_number'];?>" />
				</div>
			</div>
		</li>
		<hr>
		<li>
			<div>
				<label for="bank_address">Bank Address
					<small class="text-warning"></small>
				</label>
				<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-building"></i>
					</span>
					<input class="form-control required mark_empty" type="text" id="bank_address" name="bank_address" value="<?=$form['bank_address'];?>" />
				</div>
			</div>
		</li>
	</ul>
</fieldset>
<div class="hr hr-8"></div>
<fieldset>
	<h2>Security</h2>
	<ul class="form-body">

<div class="form-group">
	<li>
<label for="two_step_verification" class="control-label col-xs-12 col-sm-4 pull-left">Two-Step Verification</label>
<br>
	<div class="controls col-xs-12 col-sm-12">
		<div class="row">
			<div class="col-xs-6">
				<label>
<input name="switch-field-1" class="ace ace-switch ace-switch-2" type="checkbox">
					<span class="lbl"></span>
				</label>
			</div><!--/col-xs-3-->

			<div class="col-xs-6">
				<label>
<input class="ace ace-switch ace-switch-4" type="checkbox"name="two_step_verification" id="two_step_verification" <?php
			if(intval($form['two_step_verification']) == 1) {
				echo 'checked="checked"';
			} ?> style="display: block !important;position: relative !important;"/> (<?php
			if(intval($form['two_step_verification']) == 1) {
				echo 'Currently this feature is enabled';
			} else {
				echo 'Currently this feature is disabled.';
			}?>)</li>
<?php
		if(intval($form['two_step_verification']) == 1) { ?>
		<li class="col-xs-9">
<br>
			<label class="info" for="">Backup Codes</label>
			&nbsp;
			<?php echo $form['backup_codes'];?>
			&nbsp;<p>
			<a class="btn btn-success btn-xs center" href="<?=site_url('account/regenerate_codes');?>">Regenerate Codes</a></p>
		</li>
		<?php } ?>
					<span class="lbl"></span>
				</label>
			</div><!--/col-xs-6-->	
</div><!--/row-->

	</div><!--/col-xs-12-->
</div><!--/.form-group-->

</ul>
</fieldset>

<li>
<div class="form-actions center submit col-md-offset-1 col-md-6">
<input type="submit" class="btn btn-primary btn-lg btn-block" name="go_account" value="<?=ucfirst($form_title);?>" />
</div>
</li>
	
</form>

</div><!--/widget-body-->
</div><!--/widget-main-->
</div><!--/portlet-->
</div><!--/col-lg-8-->


<div class="col-lg-6 col-md-4 col-sm-12">
<p></p>
</div><!--/col-lg-6-->

</div><!--/row-->

</div><!--/widget-main-->
</div><!--/widget-box-->
</div><!--/row-fluid-->
</div><!--/row-->

<div class"clearfix"></div>
<?=$this->load->view(branded_view('cp/footer'));?>