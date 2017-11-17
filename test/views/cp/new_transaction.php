<?=$this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/form.transaction.js') . '"></script>')); ?>
	
        <!-- START @PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="<?=branded_include('js/jquery.validate.min.js');?>"></script>
	<script type="text/javascript" src="<?=branded_include('js/jquery.bootstrap.wizard.min.js');?>"></script>
		<script type="text/javascript" src="<?=branded_include('js/new_charge.js');?>"></script>
   <!-- card js -->
	<script type="text/javascript" src="<?=branded_include('js/card.js');?>"></script>
        <!--/ END PAGE LEVEL PLUGINS -->
	<style>

.box-small {
    position: relative;
    padding: 20px 20px 30px;
    margin: 0.2% auto;
    background: #FAFAFA;
    box-sizing: border-box;
    max-width: 480px;
}

.nav-section {
    display: inline-block;
    position: relative;
    vertical-align: middle;
    top: -8px;
	left:-10px;
}

#process-trans-nav {
    background-color: #fff;
    width: 100%;
padding-top: 2px;
    padding-bottom: 10px;
    text-align: center;
}

#process-trans-nav i.fa-angle-right {
    padding: 23px 35px;
    font-size: 32px;
    position: relative;
    top: 1px;
	    text-decoration: none;
    color: #34404f;
}



#process-trans-nav .nav-section i {
    display: inline-block;
    vertical-align: middle;
    font-size: 24px;
    margin-right: 8px;
}

#proces-trans-nav i.fa-angle-right {
    padding: 23px 30px;
    font-size: 30px;
    position: relative;
    top: 1px;
}

#process-trans-nav .nav-section span {
    font-weight: 700;
    margin: 0;
    width: 110px;
    font-size: 21px;
    position: relative;
    top: 2px;
}

#process-trans-nav .nav-section a {
    font-size: 21px;
    line-height: 18px;
    text-decoration: none;
    color: #34404f;
    cursor: pointer;
    border: 0;
    outline: 0;
}

#process-trans-nav  {
    color: #868b92;
	margin-bottom:5px;
}

#process-trans-nav  a:hover[href]>i, #process-trans-nav  a:hover[href]>span, #process-trans-nav  .selected span, #process-trans-nav  .selected i {
    color: #868b92;
}
#process-trans-nav  .nav-section i {
    display: inline-block;
    vertical-align: middle;
    font-size: 26px;
    margin-right: 8px;
}

.nav-section a {
padding-left: 10px;
padding-right:10px;
}
#process-trans-nav a {
    color: #666;
}
.hide {
    display: none !important;
}

.panel-body {
    margin-top: 10px;
	    padding: 1px!important;
}
.tab-pane {
    position: relative;
    padding-top: 20px!important;
}
.form-horizontal {
    margin-top: 0px!important;
}

.nav.nav-tabs {
    border-bottom: 0px solid #f1f1f1!important;
    margin-bottom: 2px!important;
    /* margin-top: 10px; */
}

</style>

	<div id="CoverPop-cover">
<? if (empty($gateways)) { ?>
<p class="hidden warning no_gateway"><span>You do not have any active gateways available to process this transaction.  The submit button has been disabled.  To
begin processing transactions, you should <a class="btn btn-primary btn-lg" href="<?=site_url('settings/new_gateway');?>">setup a new payment gateway</a>.</span></p>
<? } ?>
</div>


<div class="panel panel-tab rounded shadow hidden">

                                    <!-- Start tabs heading -->
                                    <div class="panel-heading no-padding">
                                        <ul class="nav nav-tabs nav-pills">
                                            <li class="">
                                                <a href="#tab4-1" data-toggle="tab" aria-expanded="false">
                                                    <i class="fa fa-user"></i>
                                                    <div>
                                                        <span class="text-strong">Step 1</span>
                                                        <span>Personal</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#tab4-2" data-toggle="tab" aria-expanded="false">
                                                    <i class="fa fa-file-text"></i>
                                                    <div>
                                                        <span class="text-strong">Step 2</span>
                                                        <span>Product</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#tab4-3" data-toggle="tab" aria-expanded="false">
                                                    <i class="fa fa-credit-card"></i>
                                                    <div>
                                                        <span class="text-strong">Step 3</span>
                                                        <span>Payment</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="#tab4-4" data-toggle="tab" aria-expanded="true">
                                                    <i class="fa fa-check-circle"></i>
                                                    <div>
                                                        <span class="text-strong">Step 4</span>
                                                        <span>Confirmation</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- /.panel-heading -->
                                    <!--/ End tabs heading -->

                                    <!-- Start tabs content -->
                                    <div class="panel-body">
<form action="#" id="form-wizard" class="tab-content form-horizontal" novalidate="novalidate">
                                            <div class="tab-pane fade in active inner-all" id="tab5-1">
                                                <h4 class="panel-header">Personal</h4>
                                                <div class="form-group has-error has-feedback">
                                                    <label class="col-sm-2">First Name <span class="asterisk">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" name="firstname" aria-required="true" aria-invalid="true"><label id="firstname-error" class="error" for="firstname" style="display: inline-block;">This field is required.</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Last Name</label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" name="lastname">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 has-error has-feedback">
                                                    <label class="col-sm-2">Gender <span class="asterisk">*</span></label>
                                                    <div class="col-sm-4">
                                                        <div class="rdio rdio-theme inline mr-10">
                                                            <input id="male5" name="gender" type="radio" aria-required="true">
                                                            <label for="male5">Male</label>
                                                        </div>
                                                        <div class="rdio rdio-theme inline">
                                                            <input id="female5" name="gender" type="radio">
                                                            <label for="female5">Female</label>
                                                        </div>
                                                        <label for="gender" class="error" style="display: inline-block;">This field is required.</label>
                                                        <input type="text" class="hide" id="gender">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade inner-all" id="tab5-2">
                                                <h4 class="page-header">Product</h4>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Product ID <span class="asterisk">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" name="productid">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Product Name <span class="asterisk">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" name="productname">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <label class="col-sm-2">Category <span class="asterisk">*</span></label>
                                                    <div class="col-sm-4">
                                                        <select class="form-control" name="category">
                                                            <option value="">Choose One</option>
                                                            <option value="Iphone">Iphone</option>
                                                            <option value="Android">Android</option>
                                                            <option value="Blackberry">Blackberry</option>
                                                        </select>
                                                        <label for="category" class="error" style="display: none;"></label>
                                                        <input type="text" class="hide" id="category">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade inner-all" id="tab5-3">
                                                <h4 class="page-header">Payment</h4>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Credit Card Type <span class="asterisk">*</span></label>
                                                    <div class="col-sm-4">
                                                        <select class="form-control" name="creditcard">
                                                            <option value="">Choose Credit Card</option>
                                                            <option value="amex">American Express</option>
                                                            <option value="discover">Discover</option>
                                                            <option value="mastercard">MasterCard</option>
                                                            <option value="visa">Visa</option>
                                                        </select>
                                                        <label for="creditcard" class="error" style="display: none;"></label>
                                                        <input type="text" class="hide" id="creditcard">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2">Expiration</label>
                                                    <div class="col-sm-4">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <select class="form-control">
                                                                    <option value="">Date Month</option>
                                                                    <option value="01">01 - Jan</option>
                                                                    <option value="02">02 - Feb</option>
                                                                    <option value="03">03 - Mar</option>
                                                                    <option value="04">04 - Apr</option>
                                                                    <option value="05">05 - May</option>
                                                                    <option value="06">06 - Jun</option>
                                                                    <option value="07">07 - Jul</option>
                                                                    <option value="08">08 - Aug</option>
                                                                    <option value="09">09 - Sep</option>
                                                                    <option value="10">10 - Oct</option>
                                                                    <option value="11">11 - Nov</option>
                                                                    <option value="12">12 - Dec</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <select class="form-control">
                                                                    <option value="">Year</option>
                                                                    <option value="2007">2007</option>
                                                                    <option value="2008">2008</option>
                                                                    <option value="2009">2009</option>
                                                                    <option value="2010">2010</option>
                                                                    <option value="2011">2011</option>
                                                                    <option value="2012">2012</option>
                                                                    <option value="2013">2013</option>
                                                                    <option value="2014">2014</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2016">2016</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0">
                                                    <label class="col-sm-2">Credit Card Number <span class="asterisk">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control" name="creditcardnumber">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade inner-all" id="tab5-4">
                                                <h4 class="page-header">Confirmation</h4>
                                                <div class="ml-10">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                                <button type="submit" class="btn btn-success ml-10">Submit</button>
                                            </div>
                                        </form>
                                    </div><!-- /.panel-body -->
                                    <!--/ End tabs content -->

                                    <!-- Start pager -->
                                    <div class="panel-footer">
                                        <ul class="pager wizard no-margin">
                                            <li class="previous"><a href="javascript:void(0);">Previous</a></li>
                                            <li class="next disabled"><a href="javascript:void(0);">Next</a></li>
                                        </ul>
                                    </div><!-- /.panel-footer -->
                                    <!--/ End pager -->

                                </div>






	<div class="row-fluid">
<div id="process-trans-nav" class="nav nav-tabs nav-justified">

	<a href="#tab1" id="regift-card" class="nav-section hide">
		<i class="fa fa-tags"></i>
		<span>Choose Transaction to Rebill</span>
	</a>

	<i class="fa fa-angle-right first hide"></i>

	<a  href="#tab5-1" id="select-a-brand" class="nav-section selected" data-toggle="tab">
		<i class="fa fa-usd"></i>
		<span>Choose Amount</span>
	</a>

	<i class="fa fa-angle-right second"></i>

	<a href="#tab5-2" id="delivery-options" class="nav-section" data-toggle="tab">
		<i class="fa fa-calendar-o"></i>
		<span>Pick Customer</span>
	</a>

	<i class="fa fa-angle-right third"></i>

	<a href="#tab5-3" id="checkout" class="nav-section" data-toggle="tab">
		<i class="fa fa-credit-card"></i>
		<span>Select Method</span>
	</a>
	
	
</div>
           
<div class="col-lg-8 col-lg-offset-2">
                  
<div id="wizard" class="form-wizard">
<div class="col-sm-12">  

<div class="panel-body">
					
<form class="tab-content form-horizontal" id="form_transaction" method="post" action="<?=site_url('transactions/post');?>">

<div class="tab-pane fade in active inner-all" id="tab5-1">
<div id="transaction_amount">
	<fieldset>
		<legend>Payment Information</legend>
		<ul class="form">
			<li>
				<label for="amount" class="full">Amount</label>
			</li>
			<li>
				<input type="text" class="text full required number" id="amount" name="amount" />
			</li>
			<li>
				<label for="coupon" class="full">Coupon</label>
			</li>
			<li>
					<? if ($coupons == FALSE) { ?> <select name="coupon"><option value="">No available coupons</option></select> <? } ?>
					<? if (!empty($coupons)) { ?>
						<? if ($coupons === TRUE) { ?>
							<input type="text" name="coupon" value="" />
						<? } else { ?> 
							<select name="coupon">
							<option value="">No coupon</option>
								<? foreach ($coupons as $coupon) { ?>
									<? if ($coupon['end_date'] === FALSE or (strtotime($coupon['end_date'])+86400) > time()) { ?>
										<option value="<?=$coupon['code'];?>"><?=$coupon['code'];?> - <?=$coupon['name'];?></option>
									<? } ?>
								<? } ?>
							</select>
						<? } ?>
					<? } ?>
				</select>
			</li>
		</ul>
	</fieldset>
</div>
</div> <!--END.tab-pane-->

<div class="tab-pane fade inner-all" id="tab5-2">
<div id="transaction_customer">
	<fieldset>
		<legend>Customer Information</legend>
		<ul class="form">
			<li>
				<div class="help">Optional: Enter any customer information to keep more detailed customer records, or link the charge
				to an existing customer.</div>
			</li>
			<li>
				<label for="customer_id">Existing Customer</label>
				<select id="customer_id" name="customer_id" <? if ($customers == FALSE) { ?> disabled="disabled"<? } ?>>
					<? if ($customers == FALSE) { ?><option value="">You do not have any customers</option><? } ?>
					<option value=""></option>
					<? if (is_array($customers)) { ?>
					<? foreach ($customers as $customer) { ?>
					<option value="<?=$customer['id'];?>"><?=$customer['last_name'];?>, <?=$customer['first_name'];?><? if (!empty($customer['email'])) { ?> (<?=$customer['email'];?>)<? } ?></option>
					<? } ?>
					<? } ?>
				</select>
			</li>
		</ul>
	</fieldset>
	<div id="transaction_customer_details">
	<fieldset>
		<legend>New Customer Details</legend>
		<ul class="form">
			<li>
				<label for="first_name">Name</label>
				<input class="text mark_empty" rel="First Name" type="text" id="first_name" name="first_name" />&nbsp;&nbsp;<label style="display:none" for="last_name">Last Name</label><input class="text mark_empty" rel="Last Name" type="text" id="last_name" name="last_name" />
			</li>
			<li>
				<label for="company">Company</label>
				<input type="text" class="text" id="company" name="company" />
			</li>
			<li>
				<label for="address_1">Street Address</label>
				<input type="text" class="text" name="address_1" id="address_1" />
			</li>
			<li>
				<label for="address_2">Address Line 2</label>
				<input type="text" class="text" name="address_2" id="address_2" />
			</li>
			<li>
				<label for="city">City</label>
				<input type="text" class="text" name="city" id="city" />
			</li>
			<li>
				<label for="Country">Country</label>
				<select id="country" name="country"><option value=""></option><? foreach ($countries as $country) { ?><option value="<?=$country['iso2'];?>"><?=$country['name'];?></option><? } ?></select>
			</li>
			<li>
				<label for="state">Region</label>
				<input type="text" class="text" name="state" id="state" /><select id="state_select" name="state_select"><option value=""></option><? foreach ($states as $state) { ?><option value="<?=$state['code'];?>"><?=$state['name'];?></option><? } ?></select>
			</li>
			<li>
				<label for="postal_code">Postal Code</label>
				<input type="text" class="text" name="postal_code" id="postal_code" />
			</li>
			<li>
				<label for="phone">Phone</label>
				<input type="text" class="text" id="phone" name="phone" />
			</li>
			<li>
				<label for="email">Email</label>
				<input type="text" class="text email mark_empty" rel="email@example.com" id="email" name="email" />
			</li>
		</ul>
	</fieldset>
	</div>
</div>

</div> <!--END.tab-pane-->


<div class="tab-pane fade inner-all" id="tab5-3">
<div id="transaction_cc">
	<fieldset>
		<legend>Credit Card Information</legend>
		<ul class="form">
			<li>
				<div class="help" style="margin:0;width:100%">Leave the credit card fields blank if you are using an external or offline payment method that doesn't require a credit card.</div>
			</li>
			<li>
				<label for="cc_number" class="full">Credit Card Number</label>
			</li>
			<li>
				<input type="text" class="text full number" id="cc_number" name="cc_number" />
			</li>
			<li>
				<label for="cc_name" class="full">Credit Card Name</label>
			</li>
			<li>
				<input type="text" class="text full" id="cc_name" name="cc_name" />
			</li>
			<li>
				<label for="cc_expiry" class="full">Credit Card Expiry</label>
			</li>
			<li>
				<select name="cc_expiry_month">
					<? for ($i = 1; $i <= 12; $i++) {
					       $month = str_pad($i, 2, "0", STR_PAD_LEFT);
					       $month_text = date('M',strtotime('2010-' . $month . '-01')); ?>
					<option value="<?=$month;?>"><?=$month;?> - <?=$month_text;?></option>
					<? } ?>
				</select>
				&nbsp;&nbsp;
				<select name="cc_expiry_year">
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
			</li>
			<li>
				<label for="cc_security" class="full">Credit Card Security Code</label>
			</li>
			<li>
				<input type="text" class="text full number" id="cc_security" name="cc_security" />
			</li>
		</ul>
	</fieldset>
</div>
<div id="transaction_recur">
	<fieldset>
		<legend>Recurring</legend>
		<ul class="form">
			<li>
				<input type="radio" name="recurring" value="0" checked="checked" /> This transaction does not recur.
			</li>
			<? if (is_array($plans)) { ?>
			<li>
				<input type="radio" name="recurring" value="1" /> Create a recurring transaction by plan.
				<select name="recurring_plan">
				<? foreach ($plans as $plan) { ?>
				<option value="<?=$plan['id'];?>"><?=$plan['name'];?></option>
				<? } ?>
				</select>
			</li>
			<? } else { ?>
			<li>
				<input type="radio" name="recurring" value="0" disabled="disabled" /> Create a recurring transaction by plan.
			</li>
			<? } ?>
			<li>
				<input type="radio" id="specify_recurring" name="recurring" value="2" /> Specify recurring transaction details
			</li>
		</ul>
	</fieldset>
	<div id="recurring_details">
	<fieldset>
		<legend>Recurring Details</legend>
			<ul class="form">
			<li>
				<label for="interval">Charge Interval</label>
				<input type="text" class="text number" id="interval" name="interval" />
			</li>
			<li>
				<div class="help">(Days) Customer will be charged every Interval days.</div>
			</li>
			<li>
				<label for="free_trial">Free Trial</label>
				<input type="text" class="text number" id="free_trial" name="free_trial" />
			</li>
			<li>
				<div class="help">(Days) Wait this many days before making the first charge.</div>
			</li>
			<li>
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
			</li>
			<li>
				<div class="help">Start the recurring charge at this date.  If a free trial is set, it will delay the first charge from this date.</div>
			</li>
			<li>
				<label for="recurring_end">Recur Until</label>
				<input type="radio" id="recurring_end" name="recurring_end" value="forever" checked="checked" /> Forever&nbsp;&nbsp;&nbsp;
				<label for="occurrences" style="display:none">Occurrences</label>
				<input type="radio" id="recurring_end" name="recurring_end" value="occurrences" /> <input type="text" class="text number" id="occurrences" name="occurrences" /> charges
				&nbsp;&nbsp;&nbsp;
				<input type="radio" id="recurring_end" name="recurring_end" value="date" /> Date: 
				<select name="end_date_day">
					<? for ($i = 1; $i <= 31; $i++) { ?>
					<option value="<?=$i;?>"><?=$i;?></option>
					<? } ?>
				</select>&nbsp;&nbsp;
				<select name="end_date_month">
					<? for ($i = 1; $i <= 12; $i++) {
					       $month = str_pad($i, 2, "0", STR_PAD_LEFT);
					       $month_text = date('M',strtotime('2010-' . $month . '-01')); ?>
					<option value="<?=$month;?>"><?=$month_text;?></option>
					<? } ?>
				</select>
				&nbsp;&nbsp;
				<select name="end_date_year">
					<?
						$now = date('Y');
						$future = $now + 5;
						for ($i = $now; $i <= $future; $i++) {
						?>
					<option value="<?=$i;?>"><?=$i;?></option>
						<?
						}
					?>
				</select>
			</li>
		</ul>
	</fieldset>
	</div>
</div>

<div id="transaction_gateway">
<? if (!empty($gateways)) { ?>
	<fieldset>
		<legend>Gateway</legend>
		<? if (count($gateways) == 1) { ?>
			<p>Transaction will be processed on your <?=$gateways[0]['gateway'];?> gateway.</p>
		<? } else { ?>
			<ul class="form">
				<li>
					<input type="radio" name="gateway_type" value="default" checked="checked" /> Use my default gateway
				</li>
				<li>
					<input type="radio" name="gateway_type" value="specify" /> Select gateway: 
					<select name="gateway">
						<? foreach ($gateways as $gateway) { ?>
							<option value="<?=$gateway['id'];?>" <? if ($this->user->Get('default_gateway_id') == $gateway['id']) {?> selected="selected"<? } ?>><?=$gateway['gateway'];?></option>
						<? } ?>
					</select>
				</li>
			</ul>
		<? } ?>
	</fieldset>
</div>
<? } ?>
</div> <!--END.tab-pane-->


</div><!-- /.panel-body -->

<div class="panel-footer">
                                        <ul class="pager wizard no-margin">
                                            <li class="previous"><a href="javascript:void(0);">Previous</a></li>
                                            <li class="next disabled"><a href="javascript:void(0);">Next</a></li>
                                        </ul>
                                    </div>

<div class="hide form-group transaction submit">
<button type="submit" name="login_button" class="ladda-button btn-block" data-color="blue" data-style="expand-right" data-size="l"><span class="ladda-label">Sign In </span><span class="ladda-spinner"></span>
			<div class="ladda-progress" style="width: 164px;"></div>
				</button>
</div>
				</form>
				
			</div> <!--END.col-sm-12-->
		</div> <!--END #form-wizard-->
	</div> <!--END.col-md-7-->
	
 
  </div><!-- /.row-fluid -->

<!-- START @ADDITIONAL ELEMENT -->
        <div class="modal fade bootbox-prompt" id="modal-bootstrap-tour" tabindex="-1" role="dialog" aria-hidden="true" style="display: none block;">
            <div class="modal-dialog" role="document" style="margin: 150px auto;">
                <div class="modal-content">
				
                    <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Create Recurring Charge</h4>
                    </div>
					
                    <div class="modal-body">
                               <ul class="form well">
			<li>
				<input type="radio" name="recurring" value="0" checked="checked" /> This transaction does not recur.
			</li>
			<? if (is_array($plans)) { ?>
			<li>
				<input type="radio" name="recurring" value="1" /> Create a recurring transaction by plan.
				<select name="recurring_plan">
				<? foreach ($plans as $plan) { ?>
				<option value="<?=$plan['id'];?>"><?=$plan['name'];?></option>
				<? } ?>
				</select>
			</li>
			<? } else { ?>
			<li>
				<input type="radio" name="recurring" value="0" disabled="disabled" /> Create a recurring transaction by plan.
			</li>
			<? } ?>
			<li>
				<input type="radio" id="specify_recurring" name="recurring" value="2" /> Specify recurring transaction details
			</li>
		</ul>
	
		<h4>Recurring Details</h4>
			<ul class="form">
			<li>
				<label for="interval">Charge Interval</label>
				<input type="text" class="text number" id="interval" name="interval" />
			</li>
			<li>
				<div class="help">(Days) Customer will be charged every Interval days.</div>
			</li>
			<li>
				<label for="free_trial">Free Trial</label>
				<input type="text" class="text number" id="free_trial" name="free_trial" />
			</li>
			<li>
				<div class="help">(Days) Wait this many days before making the first charge.</div>
			</li>
			<li>
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
			</li>
			<li>
				<div class="help">Start the recurring charge at this date.  If a free trial is set, it will delay the first charge from this date.</div>
			</li>
			<li>
				<label for="recurring_end">Recur Until</label>
				<input type="radio" id="recurring_end" name="recurring_end" value="forever" checked="checked" /> Forever&nbsp;&nbsp;&nbsp;
				<label for="occurrences" style="display:none">Occurrences</label>
				<input type="radio" id="recurring_end" name="recurring_end" value="occurrences" /> <input type="text" class="text number" id="occurrences" name="occurrences" /> charges
				&nbsp;&nbsp;&nbsp;
				<input type="radio" id="recurring_end" name="recurring_end" value="date" /> Date: 
				<select name="end_date_day">
					<? for ($i = 1; $i <= 31; $i++) { ?>
					<option value="<?=$i;?>"><?=$i;?></option>
					<? } ?>
				</select>&nbsp;&nbsp;
				<select name="end_date_month">
					<? for ($i = 1; $i <= 12; $i++) {
					       $month = str_pad($i, 2, "0", STR_PAD_LEFT);
					       $month_text = date('M',strtotime('2010-' . $month . '-01')); ?>
					<option value="<?=$month;?>"><?=$month_text;?></option>
					<? } ?>
				</select>
				&nbsp;&nbsp;
				<select name="end_date_year">
					<?
						$now = date('Y');
						$future = $now + 5;
						for ($i = $now; $i <= $future; $i++) {
						?>
					<option value="<?=$i;?>"><?=$i;?></option>
						<?
						}
					?>
				</select>
			</li>
		</ul>
						
                    </div>
					
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="BlankonDashboard.callModal2()" data-dismiss="modal">Add Recurring <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
					
                </div>
            </div>
		</div>
<?=$this->load->view(branded_view('cp/footer'));?>
