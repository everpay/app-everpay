<?=$this->load->view(branded_view('cp/header'), array('head_files' => '
<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/formmapper.js') . '"></script>
<link rel="stylesheet" type="text/css" href="' . branded_include('css/geostyles.css') . '" />
<script type="text/javascript" src="' . branded_include('js/form.transaction.js') . '"></script>')); ?>
<link href="<?=branded_include('css/chekout_style.css');?>" rel="stylesheet" type="text/css" />
<link href="<?=branded_include('css/card.css');?>" rel="stylesheet" type="text/css" />

<style type="text/css">

.form-control {
display: block;
width: 100%;
height: 40px;
padding: 6px 12px;
font-size: 14px;
line-height: 1.428571429;
color: #555;
vertical-align: middle;
background-color: #fff;
background-image: none;
border: 1px solid #ccc;
border-radius: 4px;
-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
-webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

select {
border-radius: 0;
-webkit-box-shadow: none!important;
box-shadow: none!important;
color: #444;
background-color: #fff;
border: 1px solid #d5d5d5;
height: 40px;
font-size: 16px;
}
.map_canvas {display:none;}

ul.form li {
    display: block;
    clear: both;
    padding: 2px 0px;
}
#accordian .title h1 {
font-size: 2em;
font-weight: 400;
margin-top: 15px;
}
#accordian #reviewed #complete {
float: left;
width: 100%;
padding: 20px!important;
border-top: 0px dotted #aaa;
}
.fa-2x {
font-size: 2em;
padding-top: 10px;
}

legend {
display: block;
width: 100%;
padding: 0;
margin-bottom: 10px;
font-size: 21px;
line-height: inherit;
color: #333;
border: 0;
border-bottom: 0px solid #e5e5e5;
font-family: "Open Sans", sans-serif;
}
  .demo-container {
            width: 100%;
            max-width: 350px;
            margin: 50px auto;
        }

</style>


<div class="row">

<div class="col-md-6 col-md-offset-3">
<div class="panel panel-primary">
<div class="panel-body">

<h4 class="mt-0 mb-30">Payment Details</h4>
<div style="height:40px;"></div>
    <div class="assessment-container container-fluid">
        <div class="row">
            <div class="col-sm-12 form-box">
                <form id="payment-form" role="form" class="payment-form" action="javascript:void(0);">
                    <fieldset>
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>Lorem ipsum dolor sit amet</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                </p>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-6">
                                    <input type="text" class="form-control" placeholder="Firstname" id="fname">
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <input type="text" class="form-control" placeholder="Lastname" id="lname">
                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom:3px;">
                                <div class="row">
                                    <div class="form-group col-md-3 col-sm-3">
                                        <select class="form-control">
                                            <option>00</option>
                                            <option>00</option>
                                            <option>00</option>
                                            <option>00</option>
                                            <option>00</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-9 col-sm-9">
                                        <input type="text" class="form-control" placeholder="Contact Number" id="contact_number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" placeholder="Email" class="form-email form-control" id="email" required>
                            </div>

                            <div class="form-group">
                                <select class="form-control">
                                    <option>Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            
                            <button type="button" class="btn btn-next">Next</button>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span> Lorem ipsum dolor sit amet</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                </p>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Location</option>
                                    <option>Location</option>
                                    <option>Location</option>
                                    <option>Location</option>
                                    <option>Locationa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" id="pref_date">
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Preffered Time</option>
                                    <option>Location</option>
                                    <option>Location</option>
                                    <option>Location</option>
                                    <option>Location</option>
                                    <option>Locationa</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-previous">Previous</button>
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

<form class="form-horizontal" id="form_transaction" method="post" action="<?=site_url('transactions/post');?>">


<? if (empty($gateways)) { ?>
<div class="alert alert-warning alert-dismissible fade in warning no_gateway">
<h4>You do not have any active gateways available to process this transaction.</h4>
<p> The submit button has been disabled. To begin processing transactions, you should <a class="btn btn-link btn-xs" href="<?=site_url('settings/new_gateway');?>">setup a new payment gateway</a>.</p>
</div>
<? } ?>

<!--  Start here -->
<div class="col-sm-12">
<div class="go-right">

<div class="content" id="email">
<div class="row">

<div style="display:none; ">
  <div class="col-lg-6">
    <div class="input-group">
 <input type="hidden" name="amount" class="required form-control" id="amount" placeholder="Dollar Amount"/>
 </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div>

  <div class="col-lg-6">
    <div class="input-group">
<input type="text" class="form-control" name="amount_other" id="amount_other" placeholder="Dollar Amount"/>
  </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->

  <div class="col-lg-6">
    <div class="input-group">
<select name="currency_converter" id="currency_converter">
	<option value="">Select Currency</option>
	<?php foreach($valid_currencies as $curr) { ?>
	<option value="<?php echo $curr; ?>"><?php echo $curr; ?></option>
	<?php } ?>
</select>
  </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
<br>
<p></p>
  <div class="col-lg-12">
    <div class="input-group">
<p id="curr_loader"></p>
<p>Amount to be paid is : <span class="label label-success"><b><span id="target_amount"></span> USD</b></span></p>

  </div><!-- /input-group -->
  </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
<div class="row">
		<div class="paymentCont">
						<div class="headingWrap">
								<h3 class="headingTop text-center">Select Your Payment Method</h3>	
												</div>
						<div class="paymentWrap">
							<div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
					            <label class="btn paymentMethod active">
					            	<div class="method visa"></div>
					                <input type="radio" name="options" checked> 
					            </label>
					            <label class="btn paymentMethod">
					            	<div class="method master-card"></div>
					                <input type="radio" name="options"> 
					            </label>
					            <label class="btn paymentMethod">
				            		<div class="method amex"></div>
					                <input type="radio" name="options">
					            </label>
					             <label class="btn paymentMethod">
				             		<div class="method vishwa"></div>
					                <input type="radio" name="options"> 
					            </label>
					            <label class="btn paymentMethod">
				            		<div class="method ez-cash"></div>
					                <input type="radio" name="options"> 
					            </label>
					         
					        </div>        
						</div>
<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
<label for="coupon" class="full"></label>
					<? if ($coupons == FALSE) { ?> <select name="coupon" style="width:60%;"><option value="">No available coupons</option></select> <? } ?>
					<? if (!empty($coupons)) { ?>
						<? if ($coupons === TRUE) { ?>
							<input type="text" name="coupon" value="" />
						<? } else { ?> 
							<select name="coupon" style="width:99%;">
							<option value="">No coupon</option>
								<? foreach ($coupons as $coupon) { ?>
									<? if ($coupon['end_date'] === FALSE or (strtotime($coupon['end_date'])+84600) > time()) { ?>
										<option value="<?=$coupon['code'];?>"><?=$coupon['code'];?> - <?=$coupon['name'];?></option>
									<? } ?>
								<? } ?>
							</select>
						<? } ?>
					<? } ?>
				</select>
  </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->

  <div class="col-lg-6">
    <div class="input-group">
	<label for="customer_id"></label>	
<select id="customer_id" name="customer_id" style="width: 99%;" <? if ($customers == FALSE) { ?> disabled="disabled"<? } ?>>
	<? if ($customers == FALSE) { ?><option value="">You do not have any customers</option><? } ?>
					<option value="">Existing Customer</option>
					<? if (is_array($customers)) { ?>
					<? foreach ($customers as $customer) { ?>
					<option value="<?=$customer['id'];?>"><?=$customer['cc_lname'];?>, <?=$customer['cc_name'];?><? if (!empty($customer['email'])) { ?> (<?=$customer['email'];?>)<? } ?></option>
					<? } ?>
					<? } ?>
				</select>
  </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
<br>
<div class="col-lg-12">
<br>
<p></p>
<div class="help">Optional: Enter any customer information to keep more detailed customer records, or link the charge to an existing customer.</div>
<hr>
			</div>
          </div><!-- /#content-email -->
<div>	
<br>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<div class="panel panel-default">

        <div class="panel-heading" role="tab" id="headingThree">
          <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
       		<legend><span class="fa fa-plus-circle fa-2x"></span>  New Customer Details</legend>
            </a>
          </h4>
        </div>

        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          <div class="panel-body">

            <div class="content" id="address">
			
			 <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form class="form-horizontal" role="form">
        <fieldset>

          <!-- Form Name -->
          <legend>Address Details</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Line 1</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Address Line 1" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Line 2</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Address Line 2" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">City</label>
            <div class="col-sm-10">
              <input type="text" placeholder="City" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">State</label>
            <div class="col-sm-4">
              <input type="text" placeholder="State" class="form-control">
            </div>

            <label class="col-sm-2 control-label" for="textinput">Postcode</label>
            <div class="col-sm-4">
              <input type="text" placeholder="Post Code" class="form-control">
            </div>
          </div>



          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Country</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Country" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
			
			
			<div class="go-right hidden">
			<div>
				<label for="first_name">Customer</label>
				<input class="form-control mark_empty" rel="First Name" type="text" id="first_name" name="first_name" />&nbsp;&nbsp;<label style="display:none" for="last_name">Last Name</label><input class="form-control mark_empty" rel="Last Name" type="text" id="last_name" name="last_name" />
			</div>
<hr>
			<div>
				<label for="email"></label>
<input type="text" class="form-control mark_empty" rel="email@example.com" id="email" name="email" />
			</div>
<hr>
			<div>
				<label for="company"></label>
				<input type="text" class="form-control" id="company" name="company" placeholder="Company Name" />
			</div>
<hr>
			<div>
				<label for="address_1"></label>
		<input type="text" class="form-control" name="address_1" id="address_1" placeholder="Billing Address 1"/>
			</div>
<hr>
			<div>
				<label for="address_2"></label>
				<input type="text" class="form-control" name="address_2" id="address_2" placeholder="Address 2" />
			</div>
<hr>
			<div>
				<label for="city"></label>
				<input type="text" class="form-control" name="city" id="city" placeholder="City" />
			</div>
<hr>
			<div>
				<label for="Country"></label>
<select id="country" name="country"placeholder="Country" style="width:75%;"><option value=""></option><? foreach ($countries as $country) { ?><option <? if ($form['country'] == $country['iso2']) { ?> selected="selected" <? } ?> value="<?=$country['iso2'];?>"><?=$country['name'];?></option><? } ?></select>
			</div>
<hr>
			<div>
				<label for="state"></label>
<input type="text" class="form-control" placeholder="State/ Province" name="state" id="state" value="<?=$form['state'];?>" /><select id="state_select" name="state_select"><? foreach ($states as $state) { ?><option <? if ($form['state'] == $state['code']) { ?> selected="selected" <? } ?> value="<?=$state['code'];?>"><?=$state['name'];?></option><? } ?></select>
			</div>
<hr>
			<div>
				<label for="postal_code"></label>
	<input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Postal/ Zip Code" />
			</div>
<hr>
			<div>
				<label for="phone"></label>
				<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" />
			</div>
            
		</div>
		</div><!-- /#address -->

		</div><!-- /.panel-body -->
       
		</div><!-- /#collapseThree -->
				
	</div><!-- /.panel -->

</div><!-- /#panel panel-default -->

    </div><!-- / -->

</div><!-- /.go-right -->
      </div><!-- /.col-sm-4 -->

<div class="col-sm-12">

<div class="credit_card content" id="payment">

<legend>Card Details</legend>
<br>

<div class="go-right">
<span>
<div>
<input type="text" id="cc_name" name="cc_name" class="form-control" placeholder="Card Holder Full Name" />
<p></p>
<br>
			</div>

				<div>
<input type="text" value="" placeholder="xxxx-xxxx-xxxx-xxxx" id="cc_number" class="form-control" name="cc_number" />
<div><label for="card_number"></label></div>
		</div>

  <div class="expiry">			

				 <div class="month_select">
				<select name="cc_expiry_month" id="exp_month">
					<? for ($i = 1; $i <= 12; $i++) {
					       $month = str_pad($i, 2, "0", STR_PAD_LEFT);
					       $month_text = date('M',strtotime('2010-' . $month . '-01')); ?>
					<option value="<?=$month;?>"><?=$month;?> - <?=$month_text;?></option>
					<? } ?>
				</select>
			
                      </div>

                      <span class="divider">-</span>

                      <div class="year_select" style="width: 22%!important;">
				<select name="cc_expiry_year"id="exp_year">
					<?
						$now = date('Y');
						$future = $now + 15;
						for ($i = $now; $i <= $future; $i++) {
						?>
					<option value="<?=$i;?>"><?=$i;?></option>
						<?
						}
					?>
				</select>
			</div>

                      <span class="divider">-</span>
	<div class="sec_num" style="width: 38%; float:right; margin-top:-1px;" >
<input type="text" name="cvv" value="" id="cvv" placeholder="123" id="cc_security" class="form-control" name="cc_security" style="width: 50%;" />
</div>
            
		</div>
</div>
				      </div>

<div class="clearfix"></div>
<hr>
<div class="credit_card">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
          <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
           <legend> <span class="fa fa-plus-circle fa-2x"></span>  Add Recurring Details </legend>
            </a>
          </h4>
        </div>

   <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          <div class="panel-body">
		<div class="content" id="shipping">
			<div class="go-right">
			<div>

<label for="interval">Charge Interval</label>
<input type="text" class="form-control" id="interval" name="interval" />
			</div>
			<div>
<p class="help">(Days) Customer will be charged every Interval days.</p>
			</div>
			<div>
<div>

<label for="free_trial">Free Trial</label>
<input type="text" class="form-control" id="free_trial" name="free_trial" />
</div>
			</div>
			<div>
<div class="help">(Days) Wait this many days before making the first charge.</div>
			</div>
			<div>
<div>


				<label for="start_date">Start Date</label>

				<select name="start_date_day">
					<? for ($i = 1; $i <= 31; $i++) { ?>
					<option value="<?=$i;?>"<? if (date('j') == $i) { ?> selected="selected" <? } ?>><?=$i;?></option>
					<? } ?>
				</select>&nbsp;&nbsp;
				<select name="start_date_month">
					<? for ($i = 1; $i <= 12; $i++) {
					       $month = str_pad($i, 2, "0", STR_PAD_LEFT);
					       $month_text = date('M',strtotime('2010-' . $month . '-01')); ?>
					<option value="<?=$month;?>"<? if (date('m') == $month) { ?> selected="selected" <? } ?>><?=$month_text;?></option>
					<? } ?>
				</select>
				&nbsp;&nbsp;
				<select name="start_date_year">
					<?
						$now = date('Y');
						$future = $now + 5;
						for ($i = $now; $i <= $future; $i++) {
						?>
					<option value="<?=$i;?>"<? if (date('Y') == $i) { ?> selected="selected" <? } ?>><?=$i;?></option>
						<?
						}
					?>
				</select>
			</div>

			<div>
				<p class="help">Start the recurring charge at this date.  If a free trial is set, it will delay the first charge from this date.</div>
			</p>

			</div>

<div>
<label for="recurring_end">Recur Until</label> Forever&nbsp;&nbsp;&nbsp;
<label for="occurrences" style="display:none">Occurrences</label>

<input type="radio" id="recurring_end" name="recurring_end" value="forever" checked="checked" />
				
				<input type="radio" id="recurring_end" name="recurring_end" value="occurrences" /> <input type="text" class="form-control" id="occurrences" name="occurrences" /> charges
				&nbsp;&nbsp;&nbsp;
				<input type="radio" id="recurring_end" name="recurring_end" value="date" /> Date: 
				<select class="month_select" name="end_date_day">
					<? for ($i = 1; $i <= 31; $i++) { ?>
					<option value="<?=$i;?>"><?=$i;?></option>
					<? } ?>
				</select>&nbsp;&nbsp;
				<select class="month_select" name="end_date_month">
					<? for ($i = 1; $i <= 12; $i++) {
					       $month = str_pad($i, 2, "0", STR_PAD_LEFT);
					       $month_text = date('M',strtotime('2010-' . $month . '-01')); ?>
					<option value="<?=$month;?>"><?=$month_text;?></option>
					<? } ?>
				</select>
				&nbsp;&nbsp;
				<select  class="month_select" name="end_date_year">
					<?
						$now = date('Y');
						$future = $now + 5;
						for ($i = $now; $i <= $future; $i++) {
						?>
					<option value="<?=$i;?>"><?=$i;?></option>
						<?
						}
					?>
				</select></div>
</div>
			</div>
		</div><!-- /.go-right -->

          </div>
        </div>
      </div>

</div><!-- /#shipping-->
</div><!-- /.col-sm-4 -->



<div class="col-sm-4">
	<div class="payment" id="reviewed">
		<div class="go-right">
		<legend>Processing Gateway</legend>
<div class="">
		<div class="accepted">
<span><img src="<?=branded_include('img/Z5HVIOt.png');?>" /></span>
<span><img src="<?=branded_include('img/Le0Vvgx.png');?>" /></span>
<span><img src="<?=branded_include('img/D2eQTim.png');?>" /></span>
<span><img src="<?=branded_include('img/Pu4e7AT.png');?>" /></span>
<span><img src="<?=branded_include('img/ewMjaHv.png');?>" /></span>
<span><img src="<?=branded_include('img/3LmmFFV.png');?>" /></span>
		</div>
<br>

<div class="clearfix"></div>
<div class="security info left"> 
<br>
<? if (!empty($gateways)) { ?>
		<? if (count($gateways) == 1) { ?>

<p>Transaction will be processed on your <?=$gateways[0]['gateway'];?> gateway.</p>
		<? } else { ?>
			<div class="form">
				<div>
					<input type="radio" name="gateway_type" value="default" checked="checked" /> Use my default gateway
				</div>
				      <div>
<input type="radio" name="gateway_type" value="specify" /> Select gateway: 
                                      </div>
                                 <div>
<br>
					<select name="gateway">
						<? foreach ($gateways as $gateway) { ?>
							<option value="<?=$gateway['id'];?>" <? if ($this->user->Get('default_gateway_id') == $gateway['id']) {?> selected="selected"<? } ?>><?=$gateway['gateway'];?></option>
						<? } ?>
					</select>
				</div>
			</div>
		<? } ?>


</div>

<br>	
<? } ?>
</div>
<br>
<div class="secured right">
<img src="<?=branded_include('img/lock_big.png');?>" width="92" height="92" />
</diV>

</div>
<div class="clearfix"></div>
<hr>
<div id="complete" class="center">
<button type="submit" class="btn btn-success btn-lg btn-block center" id="complete" name="go_transaction" value="Submit Transaction" /> Submit Transaction <i class="fa fa-check"></i></button>
<p></p>

<div class="clearfix"></div>
<br>
<span class="sub">By selecting this button you agree to the purchase and subsequent payment for this order.</span> 
			</div>

		</div><!-- /.go-right-->
</form>

</div><!-- /.col-sm-4 -->

</div><!-- /.row -->

</div><!-- /#wrap-->

</div><!--/row-fluid-->

</div><!--/row-->

</div><!-- /#wrap-->


<script type="text/javascript">
	$('#currency_converter, #amount_other').change(function(e){
		if(e.target.id == 'amount_other') {
			$('#currency_converter').attr('disabled', 'disabled');
		} else if(e.target.id == 'currency_converter') {
			$('#amount_other').attr('disabled', 'disabled');
		}
		$('p#curr_loader').html('Loading...');
		$.ajax({
			url: 'currency_ajax',
			dataType: 'json',
			type: 'post',
			data: {
				amount: $('#amount_other').val(),
				from_Currency: $('#currency_converter').val()
			},
			success: function(data) {
				if(data.status === 200) {
					$('#amount').val(data.converted);
					$('span#target_amount').html(data.converted);
					$('p#curr_loader').html('');
				} else {
					$('p#curr_loader').html(data.message);
				}

				$('#currency_converter').removeAttr('disabled');
				$('#amount_other').removeAttr('disabled');
			},
			error: function() {
				$('p#curr_loader').html('Internal error, Please try later');
			}
		});
	});
</script>
<?=$this->load->view(branded_view('cp/footer'));?>
