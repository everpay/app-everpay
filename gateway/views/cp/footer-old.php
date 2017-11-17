	
</div>	

</div>
	</div>	




<div id="footer" style="display: none;">
		Powered by <a href="http://www.elektropay.net">Elektropay.com</a> v<?=$this->config->item('opengateway_version');?>.  Copyright &copy; 2015-<?=date('Y');?>, Everpay Corporation. 
		<?php
		
			if (defined("_LICENSENUMBER")) {
				echo 'License Number: ' . _LICENSENUMBER;
			}
			
			?>
	</div>

<div class="clearfix"></div>

<!-- Notyfy -->
<div class="container-fluid">
<!-- FOOTER -->
<div id="" class="copyright">  
<div>
<div class="container-fluid">
<div class="row-fluid">

<div class="col-lg-4">
<p style="padding-top:10px; font-size: 12px; color: #eee!important;">
<a style="font-size:12px;padding-top:10px;">&copy; 2015 Everpayinc.com</a></p></div>

<div class="col-lg-4">
<p style="padding-top:10px; font-size: 12px; color: #eee!important;"><a class="" target="#"> Support </a> | 
<a class="" data-toggle="modal" data-target="#SiteTermsModal"> Terms </a> | 
<a class="" data-toggle="modal" data-target="#PrivacyModal"> Privacy </a> | <a class="" data-toggle="modal" data-target="#LegalModal"> Legal </a> 
</p>
</div>

<div class="col-lg-4">
<div class="pull-left">
<img class="" alt="" style="padding-top:10px; max-width: 55%; height: auto;" src="<?=branded_include('images/credit-card-logos.png');?>">
</div>
</div>

</div><!-- /.row-fluid -->
    </div><!-- /.container -->
  </div>
</div><!-- /#footer -->
</div><!-- /.row -->



</div><!-- /.page-container -->
<!-- BEGIN ADD CUSTOMER MODAL -->

<div id="modal-form" class="modal in" tabindex="-1" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	<h4 class="blue bigger">Add A New Customer</h4>
			</div>

			<div class="modal-body">
				<div class="row">
<div class="">    
        <div class="donate">
    <div class="lc">
        <form method="post" action="" class="donate-form" novalidate="">
                <fieldset class="donate-step donate-range-container" id="donate-step-1">
                    <legend class="donate-step-legend"><span class="form-step">1</span> Enter the charge amount:</legend>
                    <div class="g g-2up">
                    <div class="field-container gi">
                        <label for="donate-amount">Amount:</label>
                        <input type="float" step="any" class="donate-amount " parsley-type="float" id="donate-amount" data-parsley-id="0433"><ul class="parsley-errors-list" id="parsley-id-0433"></ul>
                    </div>
                    </div>
                </fieldset><!--end .donate-step-->

                <fieldset class="donate-step closed" id="donate-step-2">
                    <legend class="donate-step-legend"><span class="form-step">2</span> Enter your information:</legend>
                    <div class="g g-2up">
                        <div class="field-container gi">
                            <label for="donate-name">Name</label>
                            <input type="text" id="donate-name" placeholder="First Last" autocomplete="off" required="" data-parsley-error-message="Please enter your full name" data-parsley-id="2958"><ul class="parsley-errors-list" id="parsley-id-2958"></ul>
                        </div>
                        <div class="field-container gi">
                            <label for="donate-email">E-mail</label>
                            <input type="email" id="donate-email" placeholder="your@email.com" required="" data-parsley-error-message="Please enter a valid e-mail address" data-parsley-id="4245"><ul class="parsley-errors-list" id="parsley-id-4245"></ul>
                        </div>
                        <div class="field-container gi">
                            <label for="donate-address">Address</label>
                            <input type="text" id="donate-address" placeholder="123 Main St, Apt 2" autocomplete="off" required="" data-parsley-error-message="Please enter your street address" data-parsley-id="6465"><ul class="parsley-errors-list" id="parsley-id-6465"></ul>
                        </div>
                        <div class="field-container gi">
                            <label for="donate-city">City, State</label>
                            <input type="text" id="donate-city" placeholder="Pittsburgh, PA" autocomplete="off" required="" data-parsley-error-message="Please enter your city and state, separated by a comma" pattern="\,+" html5="" data-parsley-pattern="\,+" data-parsley-id="6083"><ul class="parsley-errors-list" id="parsley-id-6083"></ul>
                        </div>
                        
                    </div><!--end .g-2up-->
                </fieldset><!--end .donate-step-->
                
                <fieldset class="donate-step closed" id="donate-step-3">
                    <legend class="donate-step-legend"><span class="form-step">3</span> Credit card info:</legend>
                    <div class="credit-card-group">
                        <span class="card-image"></span><input placeholder="1234 5678 9012 3456" pattern="[0-9]*" type="text" class="card-number" id="card-number" maxlength="38" data-parsley-id="4392"><ul class="parsley-errors-list" id="parsley-id-4392"></ul>
                        <input placeholder="MM/YY" pattern="[0-9]*" type="text" class="card-expiration hide" maxlength="10" data-parsley-id="2256"><ul class="parsley-errors-list" id="parsley-id-2256"></ul>
                        <input placeholder="CVV" pattern="[0-9]*" type="text" class="card-cvv hide" maxlength="6" data-parsley-id="4295"><ul class="parsley-errors-list" id="parsley-id-4295"></ul>
                        <input placeholder="ZIP" pattern="[0-9]*" type="text" class="card-zip hide" maxlength="10" data-parsley-id="7134"><ul class="parsley-errors-list" id="parsley-id-7134"></ul>
                    </div><span class="card-instruction">Please enter your credit card number</span>
                </fieldset><!--end .donate-step-->
                <button class="donate-submit btn">Pay Now</button>
        </form><!--end .donate-form-->
    </div><!-- end .lc-->
</div><!-- end .donate-slider-->
</div>
			</div>
</div>
			<div class="modal-footer">
				<button class="btn btn-sm" data-dismiss="modal">
					<i class="elektropay-icon fa fa-times"></i>
					Cancel
				</button>

				<button class="btn btn-sm btn-primary">
					<i class="elektropay-icon fa fa-check"></i>
					Save
				</button>
			</div>

		</div>
	</div>
</div>
<!-- END QUICK ADD CUSTOMER MODAL -->



<!-- BEGIN QUICK ADD CHARGE MODAL -->

<div id="modal-charge" class="modal in" tabindex="-1" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
<div class="modal-content">

 
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	 <div id="top_switch">
                <button id="btn-paymenttype-cc" class="switch_button switch_button_active" value="cc">Credit card</button>
                <button id="btn-paymenttype-elv" class="switch_button" value="elv">ELV</button>
            </div>
</div>


       <div id="paymill_example_form">
			<div class="modal-body">
				<div class="row">
<div class=""> 

<form class="form-horizontal" id="payment-form" method="post" action="<?=site_url('transactions/post');?>">

                <div class="payment_errors">&nbsp;</div>

                <div id="payment-form-cc">


 <div class="checkout">
   
 <div class="checkout-header">
      <h1 class="checkout-title">
                   Payment Details
        <div class="checkout-price">
</div>
      </h1>
    </div>
<p>
<fieldset>
                    <label for="amount" class="amount-label field-left"></label>
                    <input id="amount" class="checkout-input amount field-left" type="text" value="10.00" name="amount">
                </fieldset>
</p>
    <p>
      <input type="text" class="checkout-input checkout-name" placeholder="Card holder name" autofocus>
      <input type="text" class="checkout-input checkout-exp" value="USD" name="currency">
      <input type="text" class="checkout-input checkout-cvc" placeholder="CVC" maxlength="4">
    </p>

    <p>
      <input type="text" class="checkout-input checkout-card" pattern="[0-9]{13,16}" id="elv-holdername" placeholder="**** **** **** ****" maxlength="19">
      <input type="text" class="checkout-input checkout-exp" placeholder="MM">
      <input type="text" class="checkout-input checkout-exp" placeholder="YY">
</p>
 
</div>

</div>

                <div id="payment-form-elv" style="display: none;">

  <div class="checkout">
<p>
                    <label for="amount" class="amount-label field-left"></label>
                    <input id="amount" class="checkout-input amount field-left" type="text" value="10.00" name="amount">
                </p>

                    <p>
                        <label for="elv-holdername" class="elv-holdername-label field-full"></label>
                        <input id="elv-holdername" class="checkout-input checkout-name elv-holdername field-full" type="text">
                    </p>
                    <p>
                        <label for="elv-account" class="elv-account-label field-left"></label>
                        <input id="elv-account" class="checkout-input checkout-card elv-account field-left" type="text" placeholder="01234****">
                 <input id="elv-bankcode" class="checkout-input checkout-checknumber elv-bankcode field-right" type="text" placeholder="Check #">
                    </p>
 <p>
          <input id="elv-routing" class="checkout-input checkout-routing elv-routing field-left" type="text"maxlength="9" placeholder="Routing #">
                        <input id="elv-bankcode" class="checkout-input checkout-swift elv-swiftcode field-right" type="text" placeholder="SWIFT Code">
                    </p>

                  </div>

                </div>

			<div class="modal-footer">
                <fieldset>

			<div id="buttonwrapper">
<button class="btn cancel-button btn-danger btn-lg" data-dismiss="modal">
					
					Cancel

<i class="elektropay-icon fa fa-times"></i>
				</button>

      <button id="elektropay-submit-button" class="submit-button btn btn-primary btn-lg" type="submit charge">

<i class="fa fa-check"></i>
</button>
</div>
                </fieldset>
</div>
            </form>
        </div>

                                
		</div>
	</div>
</div>
</div><!-- END paymill_example_form -->
<!-- END QUICK ADD CHARGE MODAL -->




<!-- BEGIN QUICK ADD RECURRING CHARGE MODAL -->





<!-- END QUICK ADD RECURRING CHARGE MODAL -->




<!-- BEGIN QUICK ADD INVOICE MODAL -->

<div id="modal-invoice" class="modal" tabindex="1" aria-hidden="true" style="display: ;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h4 class="blue bigger">Please fill the following form fields</h4>
			</div>

			<div class="modal-body">
				<div class="row">
					<div class="col-xs-12 col-sm-5">
						<div class="space"></div>

						<label class="ace-file-input ace-file-multiple"><input type="file"><span class="ace-file-container" data-title="Drop files here or click to choose"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon ace-icon fa fa-cloud-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
					</div>

					<div class="col-xs-12 col-sm-7">
						<div class="form-group">
							<label for="form-field-select-3">Location</label>

							<div>
								<select class="chosen-select" data-placeholder="Choose a Country..." style="display: none;">
									<option value="">&nbsp;</option>
									<option value="AL">Alabama</option>
									<option value="AK">Alaska</option>
									<option value="AZ">Arizona</option>
									<option value="AR">Arkansas</option>
									<option value="CA">California</option>
									<option value="CO">Colorado</option>
									<option value="CT">Connecticut</option>
									<option value="DE">Delaware</option>
									<option value="FL">Florida</option>
									<option value="GA">Georgia</option>
									<option value="HI">Hawaii</option>
									<option value="ID">Idaho</option>
									<option value="IL">Illinois</option>
									<option value="IN">Indiana</option>
									<option value="IA">Iowa</option>
									<option value="KS">Kansas</option>
									<option value="KY">Kentucky</option>
									<option value="LA">Louisiana</option>
									<option value="ME">Maine</option>
									<option value="MD">Maryland</option>
									<option value="MA">Massachusetts</option>
									<option value="MI">Michigan</option>
									<option value="MN">Minnesota</option>
									<option value="MS">Mississippi</option>
									<option value="MO">Missouri</option>
									<option value="MT">Montana</option>
									<option value="NE">Nebraska</option>
									<option value="NV">Nevada</option>
									<option value="NH">New Hampshire</option>
									<option value="NJ">New Jersey</option>
									<option value="NM">New Mexico</option>
									<option value="NY">New York</option>
									<option value="NC">North Carolina</option>
									<option value="ND">North Dakota</option>
									<option value="OH">Ohio</option>
									<option value="OK">Oklahoma</option>
									<option value="OR">Oregon</option>
									<option value="PA">Pennsylvania</option>
									<option value="RI">Rhode Island</option>
									<option value="SC">South Carolina</option>
									<option value="SD">South Dakota</option>
									<option value="TN">Tennessee</option>
									<option value="TX">Texas</option>
									<option value="UT">Utah</option>
									<option value="VT">Vermont</option>
									<option value="VA">Virginia</option>
									<option value="WA">Washington</option>
									<option value="WV">West Virginia</option>
									<option value="WI">Wisconsin</option>
									<option value="WY">Wyoming</option>
								</select><div class="chosen-container chosen-container-single" style="width: 0px;" title=""><a class="chosen-single" tabindex="-1" style="width: 210px;"><span>&nbsp;</span><div><b></b></div></a><div class="chosen-drop" style="width: 210px;"><div class="chosen-search"><input type="text" autocomplete="off" style="width: 200px;"></div><ul class="chosen-results"></ul></div></div>
							</div>
						</div>

						<div class="space-4"></div>

						<div class="form-group">
							<label for="form-field-username">Username</label>

							<div>
								<input class="input-large" type="text" id="form-field-username" placeholder="Username" value="alexdoe">
							</div>
						</div>

						<div class="space-4"></div>

						<div class="form-group">
							<label for="form-field-first">Name</label>

							<div>
								<input class="input-medium" type="text" id="form-field-first" placeholder="First Name" value="Alex">
								<input class="input-medium" type="text" id="form-field-last" placeholder="Last Name" value="Doe">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button class="btn btn-sm" data-dismiss="modal">
					<i class="ace-icon fa fa-times"></i>
					Cancel
				</button>

				<button class="btn btn-sm btn-primary">
					<i class="ace-icon fa fa-check"></i>
					Save
				</button>
			</div>
		</div>
	</div>
</div>

<!-- END QUICK ADD INVOICE MODAL -->






<!-- BEGIN QUICK ADD PRODUCT MODAL -->





<!-- END QUICK ADD NEW GATEWAY MODAL -->




<!-- BEGIN QUICK ADD NEW GATEWAY MODAL -->





<!-- END QUICK ADD PRODUCT MODAL -->






</div><!-- END portlet-body -->
</div><!-- END db-content -->
</div><!-- END container-fluid -->
</div><!-- END box-row -->
</div><!-- END mp-box db-container -->
</div><!-- END CONTENT -->
</div><!-- END page-wrap -->

<!-- Processor modal -->

<div class="modal fade" id="ProcessorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
        <h2 class="modal-title" id="myModalLabel"></h2>
<br>
      </div>
      <div class="modal-body">
  <div class="row">
     <div class="col-md-12">
<div id="supported_processors">
<h2 class="margin-none" style="margin-bottom: 10px; text-align: center">Supported <strong class="text-primary">Payment</strong> <span class="hidden-phone"> Processors</span></h2>
  <p class="lead"> With Elektropay you can connect to multiple processors at the same time, or switch processors any time, giving you the flexibility you need for obtaining the most competitive interchange rates.</p>
<br>
<img class="featurette-image img-responsive" alt="Processors logos" src="<?=branded_include('img/processors-logos.png');?>">
<h2 class="margin-none" style="margin-bottom: 10px; text-align: center">Missing your processor?</h2>
<br>
<p style="margin-left: 20px; margin-right: 10px;">If you would like us to integrate with a processor who’s not on the list above, reach out to us:
<a href="mailto:support@elektropay.com">support@elektropay.com</a>
</p>
<br>
<p style="margin-left: 20px; margin-right: 10px;">If you don’t already have a preferred processor, we can help you select one.</p>
<br></br>
</div>

</div>
</div>
      </div>
   
    </div>
  </div>
</div>

<!-- Terms modal -->

<div class="modal fade modal-lg" id="SiteTermsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
        <h2 class="modal-title" id="myModalLabel"></h2>
<br>
      </div>
      <div class="modal-body">
  <div class="row">
     <div class="col-md-12">
<div id="supported_processors">
<div class="content" style="padding-left:20px; text-align:left;">
    <h1 style="padding-bottom:20px; text-align:center;"><strong> Our Website Terms </strong></h1>

    <p class="lead">
      By using Everpay, its related services, and the everpayinc.com web site
      ("Service"), a service of Everpay Corporation. ("Everpay"), you are agreeing to be
      bound to the following terms and conditions ("Terms of Service").<br>

      Everpay reserves the right to update and change its Terms of Service at
      its discretion without notice. Any new features in excess to the current
      Service shall be subject to the Terms of Service.  Continued use of the
      Service after any such changes shall constitute your consent to such
      changes.  You can review the most current version of the Terms of Service
      at any time at: https://www.everpayinc.com/terms/<br>

      Violation of any of the terms below will result in the termination of
      your account.  While Everpay prohibits such conduct and Content on the
      Service, you understand and agree that Everpay cannot be responsible for
      the Content posted on the Service and you nonetheless may be exposed to
      such materials.  You agree to use the Service at your own risk.
    </p>

    <h3>Account terms</h3>

    <ol class="lead" style="list-style:none;">
      <li>You must be 13 years or older to use this Service.</li>
      <li>
        You must be a human. Accounts registered by bots or other automated
        methods are not permitted and will be deleted without notice.
      </li>
      <li>
        You must provide your legal full name, a valid email address, and any
        other pertinent information requested in order to complete the signup
        process.
      </li>
      <li>
        As a merchant, you must reside in the United States of America.  As a
        customer, you can be located anywhere in the world.
      </li>
      <li>
        Your login may only be used by one person.  Multiple people using a
        single account is not permitted.
      </li>
      <li>
        You are responsible for maintaining the security of your account and
        password.  Everpay cannot and will not be liable for any loss or damage
        from your failure to comply with this security obligation.
      </li>
      <li>
        You are responsible for all Content posted and activity that occurs
        under your account, even when Content is posted by others who have
        accounts under your account.
      </li>
      <li>
        You may not use the Service for any illegal or unauthorized purpose.
        You must not, in the use of the Service, violate any laws in your
        jurisdiction (including but not limited to copyright laws).  Should you
        engage in any illegal activities through the Service, you agree to hold
        Everpay blameless and not liable for any damages or crimes that may
        occur as a result.  You will also have your account immediately shut
        down, and all data deleted.
      </li>
      <li>
        You understand that the Service uses a third-party payment processor
        Everpay (<a href="https://everpayinc.com">https://everpayinc.com</a>) to handle payment
        transactions, and that all monetary transactions made through your use
        of the Service are subject to any additional fees Everpay may
        charge.  These charges will be passed on to your merchant account and
        shown deducted from each deposit.
      </li>
    </ol> 

    <h2>Payment, refunds, upgrades and downgrades</h2>

    <ul class="lead" style="list-style:none;">
      <li>
        While a credit card is not required upon initial sign up, a valid
        credit card is required for paying accounts.
      </li>
      <li>
        The Service charges feeds based on a percentage of each sale.  For
        every order you receive, a certain percentage is deducted to pay for
        the Service.  In addition to Everpay fees, our payment processor(s)
        charges a fee as well.  These fees will be withheld from each deposit
        and are non-refundable.
      </li>
      <li>
        All fees exclude any taxes, levies, or duties imposed by taxing
        authorities, and you shall be responsible for payment of all such
        taxes, levies, or duties.
      </li>
      <li>
        The Service does not withhold any taxes on behalf of the merchant under
        any circumstance.  You are responsible for the payment of all such
        taxes.
      </li>
    </ul> 

    <h3>Cancellation and termination</h3>

    <ul class="lead" style="list-style:none;">
      <li>
        It is your responsibility to ensure that your account has been properly
        cancelled.  You can cancel your account at any time by contacting <a href="mailto:cancelaccount@everpayinc.com?subject=I+want+to+cancel+my+account">cancelaccount@everpayinc.com</a>.
      </li>
      <li>
        All of your Content will be immediately deleted from the Service upon
        cancellation. This information can not be recovered once your account
        is cancelled.
      </li>
      <li>
        Your cancellation will be effective immediately once initiated.
      </li>
      <li>
        Everpay has the right to suspend or terminate your account and refuse
        any and all current or future use of the Service for any reason at any
        time. Everpay, in its sole discretion, reserves the right to refuse
        service to anyone for any reason at any time.
      </li>
    </ul>

    <h3>Modifications to the Service and prices</h3> 

    <ul class="lead" style="list-style:none;">
      <li>
        Everpay reserves the right at any time and from time to time to modify
        or discontinue, temporarily or permanently, the Service (or any part
        thereof) with or without notice.
      </li>
      <li>
        Prices of all Services, including but not limited to Everpay transaction
        fees and the credit card processing fees, are subject to change.  Such
        notice may be provided at any time by posting the changes to the Everpay
        Site (Everpayinc.com) or the Service itself.
      </li>
      <li>
        Everpay shall not be liable to you or to any third party for any
        modification, price change, suspension or discontinuance of the
        Service.
      </li>
    </ul>

    <h2>Copyright and content ownership</h2>

    <ul class="lead" style="list-style:none;">
      <li>
        All content posted on the Service is must comply with U.S. copyright
        law.
      </li>
      <li>
        We claim no intellectual property rights over the material you provide
        to the Service.  Your store and materials uploaded for sale remain
        yours.
      </li>
      <li>
        Everpay does not pre-screen Content, but Everpay and its designee have
        the right (but not the obligation) in their sole discretion to refuse
        or remove any Content that is available via the Service.
      </li>
      <li>
        The look and feel of the Service is copyright Everpayinc.com.
        All rights reserved.  You may not duplicate, copy, or reuse any portion
        of the HTML/CSS or visual design elements without express written
        permission from Everpay.
      </li>
    </ul>

    <h3>General conditions</h3>

    <ul class="lead" style="list-style:none;">
      <li>
        Your use of the Service is at your own risk. The service is provided on an "as is" and "as available" basis.
      </li>
      <li>
        Technical support is available to our merchant accounts. Contact <a href="mailto:techsupport@everpay.com">techsupport@everopay.com</a>.
      </li>
      <li>
        You acknowledge and understand that Everpay uses third-party vendors to
        provide the necessary hardware, software, networking, storage, and
        related technology required to run the Service.
      </li>
      <li>
        You must not modify, adapt or hack the Service or modify another
        website so as to falsely imply that it is associated with the Service
        or Everpay.
      </li>
      <li>
        You agree not to reproduce, duplicate, copy, sell, resell or exploit
        any portion of the Service, use of the Service, or access to the
        Service.
      </li>
      <li>
        Verbal, physical, written or other abuse (including threats of abuse or
        retribution) of any Everpay employee, member, merchant, customer, or
        officer will result in immediate account termination and potential
        criminal charges.
      </li>
      <li>
        Everpay does not warrant that (i) the service will meet your specific
        requirements, (ii) the service will be uninterrupted, timely, or
        error-free, (iii) the quality of any products, services, information,
        or other material purchased or obtained by you through the service will
        meet your expectations.
      </li>
      <li>
        You expressly understand and agree that Everpay shall not be liable for
        any direct, indirect, incidental, special, consequential or exemplary
        damages, including but not limited to, damages for loss of profits,
        goodwill, use, data or other intangible losses (even if Everpay has been
        advised of the possibility of such damages), resulting from: (i) the
        use or the inability to use the service; (ii) the cost of procurement
        of substitute goods and services resulting from any goods, data,
        information or services purchased or obtained or messages received or
        transactions entered into through or from the service; (iii)
        unauthorized access to or alteration of your transmissions or data;
        (iv) statements or conduct of any third-party on the service; (v) or
        any other matter relating to the service.
      </li>
      <li>
        You expressly understand and agree that Everpay shall not be liable for
        any payments and monetary transactions that occur through your use of
        the Service, as a customer or merchant.  You expressly understand and
        agree that all credit card transactions are handled by the third-party
        payment platform the Service uses: Everpay (<a href="https://www.everpayinc.com">https://everpayinc.com</a>).  You agree
        Everpay shall not be liable for any issues regarding financial and
        monetary transactions between you and any other party.
      </li>
      <li>
        The failure of Everpay to aggressively enforce any right or provision of
        the Terms of Service shall not be construed as a waiver of such right
        or provision.  The Terms of Service outlines the entire agreement
        between you and Everpay and supersedes any prior agreements between you
        and Everpay including prior iterations of the Terms of Service.
      </li>
      <li>
        Questions about the Terms of Service should be sent to <a href="mailto:hello@everpayinc.com">hello@everpayinc.com</a>.
      </li>
    </ul>
  </div>
<br><br>
</div>

</div>
</div>
      </div>
   
    </div>
  </div>
</div>

<!-- Privacy modal -->

<div class="modal fade modal-lg" id="PrivacyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
        <h2 class="modal-title" id="myModalLabel"></h2>
<br>
      </div>
      <div class="modal-body">
  <div class="row">
     <div class="col-md-12">
<div id="supported_processors">

<div class="content" style="padding-left:20px; text-align: left;">
      <h1 style="padding-bottom:20px; text-align: center;"><strong>The Everpay Privacy Policy</strong></h1>

      <p class="lead">
        We collect the email addresses of everyone who uses our product, both
        merchants and customers.  We also collect usage and survey information
        for the betterment of our service.  The information we collect is not
        shared with or sold to any other organization for commercial purposes,
        except under the following conditions:
      </p>

      <ul style="list-style:none;">
        <li>
          When requested in order to investigate, prevent, or take action
          regarding illegal<br>activities, such as fraud or threats to the
          physical safety of any person.
        </li>
        <li>
          When violations of our Terms of Service are being investigated.
        </li>
        <li>We transfer information when an acquisition or merger happens.</li>
      </ul>

      <h3>Use of gathered information</h3>

      <p class="lead">
        Everpay Corporation will collect your personal information only when you
        purchase a product or subscription sold by one of our merchants, when
        you voluntarily sign up for a merchant or customer account, or when you
        sign up for one of our mailing lists.  Your personal information will
        never be sold or shared with any third-parties, except in the cases
        mentioned above.
      </p>

      <h3>Cookies <span class="weak">(not the yummy kind)</span></h3>

      <p class="lead">
        A cookie is a small text file, which often includes an anonymous unique
        identifier, that is stored in your browser.  This is associated with
        data on the Everpay servers and is required for the use of any Everpay
        website.
      </p>

      <h3>Data storage</h3>

      <p class="lead">
        Everpay Corporation uses third-party vendors and hosting partners for certain
        aspects of our service.  Everpay Corporation owns all of the code, databases,
        and all rights to the software.  You retain all rights to your data.
      </p>

      <h2>IP address</h2>

      <p class="lead">
        Your IP address is associated with the place from which you connect to
        the Internet.  We may use your IP address to help fix problems with the
        Everpay website, gather broad demographic information, and assist you in
        servicing your merchant or customer account on Everpayinc.com
      </p>

      <h3>Occasional emails</h3>

      <p class="lead">
        As a merchant or customer on our website, you may receive occasional
        email announcements or newsletters.  If you choose not to receive these
        periodic mailings, you can click the "unsubscribe" link in the footer
        of each one of them.  If you unsubscribe from general announcements,
        specific emails pertaining to your account?like
        an order receipt?will still be sent.
      </p>

      <h2>Committed to individual privacy</h2>

      <p class="lead">
        Everpay Corporation is committed to anything that preserves individual privacy
        rights on the Internet, including the <a href="https://www.eff.org/">EFF</a>.
      </p>

      <h3>Changes</h3>

      <p class="lead">
        Everpay Corporation. may periodically update this policy.  We will notify you of
        any significant changes by sending you an email, or placing a prominent
        notice on our site.  You can always access, amend, correct, or delete
        your personal information.
      </p>
    </div>

<br><br>
</div>

</div>
</div>
      </div>
   
    </div>
  </div>
</div>


<!-- legal modal -->

<div class="modal fade modal-lg in" id="LegalModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: block;"><div class="modal-backdrop fade in" style="height: 9730px;"></div>
  <div class="modal-dialog modal-lg">
<style>
table {
border-collapse: collapse;
border-spacing: 0;
border: 1px solid gray;
width: 100%;
font-size: 14px;
}

.legalTable {
font-size: 18px;
}


</style>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
        <h1 class="modal-title center" id="myModalLabel"><b>MERCHANT PROCESSING AGREEMENT</b></h1>
<br>
      </div>

   <div class="modal-body">
  <div class="row">

<section class="col-md-12"> 
<div class="container-fluid"> 
<div class="merchantAgreement-top">
<div id="legalNavigation" class="navbar navbar-inverse navbar-static-top legalNav smint fxd" role="navigation" style="position: relative; top: -10px; margin-bottom: 20px; color: #111;">

<div class="container-fluid center">
<ul class="legalMenu nav nav-tabs style=" text-align:="" center;""="">
<li><a id="s1" href="#account">Account</a></li>
<li><a id="s2" href="#fees" class="">Fees</a></li>
<li><a id="s3" href="#reserve" class="active">Reserve</a></li>
<li><a id="s4" href="#card-types">Card Types</a></li>
<li><a id="s5" href="#returns">Returns &amp; Loses</a></li>
<li><a id="s6" href="#privacy">Privacy</a></li>
<li><a id="s7" href="#termination">Termination</a></li>
<li><a id="s8" href="#property-rights">Property Rights</a></li>
<li><a id="s9" href="#confidential">Confidentiality</a></li>
</ul>

</div>
</div>
<div class="container-fluid">
<div class="row-fluid">
<div class="legalContent-lf"></div>

<div class="col-md-12" style="text-align: left;">
<p class="lead">This <b>MERCHANT AGREEMENT </b>is made between YOU (hereinafter "You", "Your", "Yours", and/or "Merchant") and EVERPAY, INC. (hereinafter "Everpay") with respect to Your use of Everpay's payment processing services (hereinafter the "Agreement"). Your receipt of payment processing services from Everpay shall be governed by and shall be subject to each of the below terms and conditions. Accordingly it is important for You to carefully read the below terms and conditions.</p>
</div>
</div>
</div>
</div>
</div>
</section></div>

<div class="middle">
<div class="wrapper">
<div class="container-fluid legalContent">

<div class="row-fluid">

<div class="s1">
<div class="legalContentBottom-lf">

<div class="legalBottom-heading"><h2><span>Your</span> Account</h2></div>

<div class="legalBottom-image"><img src="https://everpayinc.com/apps/branding/default/img/yourAccount.jpg" border="0" alt="Everpay"></div>
</div>

<div id="" class="legalContentBottom-rt" style="text-align: left;">

<p><strong>1. Your Everpay Account.</strong> <br> By submitting a Merchant Application and agreeing to the terms of this Agreement, You hereby authorize Everpay to establish a Everpay Account for You (hereinafter Your "Account"). You hereby understand and acknowledge that Your use of Your Account shall be subject to the terms and conditions set forth in this Agreement. Everpay shall in no way be obligated to open an Account for You and reserves the right to refuse to provide the processing services set forth in this Agreement to any individual, business, and/or other business, for any reason.</p>
<p><strong>2. Application and Underwriting. </strong><br> You will be asked to fill out and submit an application on the Everpay website (hereinafter the "Website") in order to receive a Everpay merchant account (hereinafter "Merchant Application"). You will be asked to provide Your contact information, including name, address, telephone number, and e-mail address, in addition to Your Social Security Number. Everpay may also request that You provide proof of Your identity and a voided check for the account into which funds will be settled pursuant to this Agreement. You hereby represent and warrant that all of the information contained in Merchant Application is true and accurate. You further authorize Everpay to investigate the information contained in Your Merchant Application and to utilize credit reporting agencies and any other source reasonably necessary to verify the accuracy of any information that You have provided to Everpay. You further authorize the credit reporting agencies to release any information that they may have regarding You or Your business to Everpay. As part of the underwriting process, Everpay may request that You provide additional information. Your failure to timely provide Everpay with the additional information requested may result in the immediate rejection of Your Merchant Application. Everpay will typically notify You of the status of Your Merchant Application within one (1) business day of it being submitted. Circumstances may arise which require additional time to consider and review Your Merchant Application, in which case, Everpay will notify You of the revised timeline.</p>
<p><strong>3. Your User Name and Password. </strong><br> If Your Merchant Application is approved, You will receive an Everpay Account. You will be provided with a unique user name and password which can be used to log on to the gateway portal provided by Everpay for the purpose of accessing data and information related to transactions settled in Your Account, the fees charged under this Agreement, and your Account profile (hereinafter the "Merchant Portal"). You may utilize the temporary user name and password which Everpay provides You with, or after logging into the Merchant Portal, You may choose a new user name and password. You are to protect the integrity of Your user name and password and shall not disseminate Your user name or password to any individual who is not directly authorized by Everpay to access data and information related to transaction settled in Your Account.</p>
<p><strong>4. Services. </strong><br> Everpay will provide you with payment processing services to facilitate Your acceptance of any valid check, credit or debit card identified herein (hereinafter the "Services"). You must have an existing ability to process transactions online. Everpay can provide you with physical Card terminals, shopping carts, or virtual terminals. The Services are only designed for processing transactions completed by Your customers online. If You do not have the necessary online presence or means to process credit or debit card transactions online, Everpay will refer You to a provider of that service.</p>
<p><strong>5. Card Acceptance. </strong> <br> You will honor any valid credit or debit card (hereinafter the "Card" or "Cards") properly tendered for use that falls within Your designated categories of acceptance, check each Card for validity and currency, and examine one or more Card security features before completing a Card transaction. When accepting any Card and completing any Card transaction, You must follow all procedures and rules set forth in, or incorporated by reference into, this Agreement, including but not limited to, obtaining authorization for all sales transactions from the holder of the Card (hereinafter "Cardholder"). In the event Everpay, for whatever reason, is unable to obtain, or due to system delays chooses not to wait to obtain, authorization from its Bank, who is unable to obtain or chooses not to wait to obtain authorization from an Association, Everpay may at its option "stand-in" for such entities and authorize the sales transaction based on criteria established by Everpay, and You shall remain responsible for such sales transaction as if it was actually settled in accordance with this Agreement. Any authorization obtained by You shall be noted by You in the appropriate place on the sales transaction. All sales transactions and credit vouchers will be on forms acceptable to Everpay or in a format approved by Everpay in writing, and will be completed to include the Cardholder's signature, the signature of the authorized user (if different), the date, a description of the merchandise sold or services rendered, and the total charges therefor. At least one copy of the sales transaction receipt or credit voucher will be electronically delivered to the Cardholder. All sales transactions that You deliver to Everpay will represent the obligations of a Cardholder in amounts set forth therein for merchandise sold or services rendered only and shall not involve any element of credit for any other purpose.</p>
<p><strong>6. Card Sales. </strong><br> You shall only complete and deliver to Everpay sales transactions produced as the direct result of bona fide sales made by You to Cardholders and for only those products and/or services identified by You, for Everpay, in connection with Your Merchant Application. You shall obtain Everpay's prior written approval before accepting Cards for the purchase of products and/or services not identified on Your Merchant Application. You are expressly prohibited from processing, factoring, laundering, offering and/or presenting to Bank sales transactions which are produced as a result of sales made by any person or entity other than Yourself.</p>
<p><strong>7. Account Servicing Documents. </strong><br> All records pertaining to the transactions that You process by and/or through Everpay, the funds that are settled into Your Account, and the fees that You are charged by Everpay pursuant to this Agreement, shall be available to You via the Merchant Portal. Everpay does not maintain and will not provide You with paper copies of these records.</p>

</div>
</div>

<div id="fees" class="s2">
<div class="legalContentBottom-lf">
<div class="legalBottom-heading"><h2>Fees</h2></div>
<div class="legalBottom-image"><img src="https://everpayinc.com/apps/branding/default/img/fees.jpg" border="0" alt="Everpay"></div>
</div>
<div class="legalContentBottom-rt">
<p><strong>8. Processing Fees. </strong><br> You will be charged the following fees for the Services provided by Everpay pursuant to this Agreement, which shall be charged in the currency of the United States, unless otherwise stated:</p>
<div class="sublevelTwo">
<p><strong>8.1. Product Monthly Fees. </strong></p>
<p>You will be responsible for paying Everpay the following monthly fee based upon the Service Level which you select:</p>
<br>
<ul class="legalTable">
<li>
<div class="legalTable-lf">Service Level</div>
<div class="legalTable-rt">Monthly Fee</div>
</li>
<li>
<div class="legalTable-lf">Start Up</div>
<div class="legalTable-rt">$9.99</div>
</li>
<li>
<div class="legalTable-lf">Standard</div>
<div class="legalTable-rt">$29.99</div>
</li>
<li>
<div class="legalTable-lf">Big Business</div>
<div class="legalTable-rt">$49.99</div>
</li>
<li>
<div class="legalTable-lf">Enterprise</div>
<div class="legalTable-rt">$99.99</div>
</li>
</ul>
<br>
<p><strong>8.2 Transaction Fees. </strong></p>
<p>You will be responsible for paying Everpay a fee per transaction that you process through or with Everpay. The Transaction Fees are expressed as a percentage of the amount of the transaction completed by the Cardholder (%), plus a fixed amount. Transaction Fees may be subject to change based upon the monthly sales volume that You process through or with Everpay. Transaction Fees associated with any American Express� Direct Payment or Virtual Terminal Payment you accept are set forth separately below:</p>
<br>
<table style="width: 480px;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td width="194"><strong>Everpay Services</strong></td>
<td align="left"><strong>Fees</strong></td>
</tr>
</tbody>
</table>
<table class="legalTable" style="width: 480px;" border="0" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td>&nbsp;</td>
<td><span style="text-decoration: underline;"> Monthly Sales Volume </span></td>
<td><span style="text-decoration: underline;"> Fee </span></td>
</tr>
<tr>
<td>Secure page</td>
<td>$0.01 - $3,000.00</td>
<td>3.49% + $0.35</td>
</tr>
<tr>
<td>checkout*</td>
<td>$3,000.01 or greater</td>
<td>3.49% + $0.35</td>
</tr>
</tbody>
</table>
<br>
<p><strong>8.3 </strong></p>
<p>The following Transaction Fees are charged by us on behalf of American Express and shall apply to payments made using an American Express Card:</p>
<br>
<table style="width: 480px;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td width="194"><strong>American Express Payments</strong></td>
<td align="left"><strong>Fees</strong></td>
</tr>
</tbody>
</table>
<table class="legalTable" style="width: 480px;" font-size:="" 16px;="" border="0" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td>&nbsp;</td>
<td><span style="text-decoration: underline;"> Fee </span></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>Secure page</td>
<td>3.49% + $0.35</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>checkout</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
<br>
<p>Everpay may adjust, increase, change, or add fees and/or charges for the Services at any time upon providing written notice to You, and such fees and/or charges shall be immediately payable by You when assessed by Everpay. If Everpay elects to change or add fees pursuant to this provision, You may terminate this Agreement upon providing written notice to Everpay of Your desire to do so. If Merchant fails to object to the changed or added fees within thirty (30) days of receiving notice from Everpay of the addition or change, Merchant shall waive any right to object, and shall continue to be bound by the terms and conditions of this Agreement and any added or changed fees addressed in the notice sent to Merchant.</p>
</div>
</div>
</div>
<br>
<div id="reserve" class="s3">
<div class="legalContentBottom-lf reserveLf">
<div class="legalBottom-heading"><h2>Reserve</h2></div>
<div class="legalBottom-image"><img src="https://everpayinc.com/apps/branding/default/img/reserve.jpg" border="0" alt="Everpay"></div>
</div>
<div class="legalContentBottom-rt">
<p><strong>9. Reserve. </strong><br> Everpay in its sole discretion may place a Reserve on funds when Everpay believes there may be a high level of risk associated with Your Account ("Reserve"). If Everpay places a reserve on your Account, a specified percentage of the amounts settled and received into your Account will be subject to a hold, and will not be disbursed to You until such time as Everpay determines that the risk associated with Your Account has dissipated. Everpay may choose to hold these funds in Your Account, or may segregate the reserve funds in an account designated by Everpay for that purpose ("Reserve Account").</p>
<div class="sublevelTwo">
<p><strong>9.1. </strong></p>
<p>You expressly authorize us to establish a Reserve pursuant to the terms and conditions set forth in this Section 9. The amount of such Reserve shall be set by Everpay, in Everpay's sole discretion, based upon your processing history and the potential risk of loss to Everpay or the Banks as Everpay or the Banks may determine from time to time.</p>
<br>
<p><strong>9.2.</strong></p>
<p>The Reserve Account shall be fully funded upon three (3) days' notice from Everpay to You, or in instances of fraud or ed fraud or Your breach for this Agreement, Reserve Account funding may be immediate. Such Reserve Account may be funded by all or any combination of the following: (i) one or more debits to Your Account; (ii) any payments otherwise due to You under this Agreement; (iii) Your delivery to Everpay of a letter of credit approved by Everpay; or (iv) if Everpay agrees, Your pledge to Everpay of a freely transferable and negotiable certificate of deposit. Any such letter of credit or certificate of deposit shall be issued or established by a financial institution acceptable to us and shall be in a form satisfactory to us. In the event of termination of this Agreement by any party, an immediate Reserve account may be established without notice in the manner provided above.</p>
<br>
<p><strong>9.3.</strong></p>
<p>Any Reserve Account will be held by us for the greater of twelve (12) months after termination of this Agreement or for such longer period of time as is consistent with our liability for transactions You processed with or through Everpay and Chargebacks in accordance with Card Organization Rules.</p>
<br>
<p><strong>9.4.</strong></p>
<p>We may elect to hold funds pursuant to this Section 9 in master account(s) with your funds allocated to separate sub accounts. Unless specifically required by law, you shall not be entitled to interest on any funds held by us in a Reserve Account.</p>
<br>
<p><strong>9.5.</strong></p>
<p>If your funds in the Reserve Account are not sufficient to cover the Charge backs, adjustments, fees and other charges and amounts due from you, or if the funds in the Reserve Account have been released, you agree to promptly pay us such sums upon request.</p>
<br>
<p><strong>9.6. </strong></p>
<p>To secure your obligations to us and our respective Affiliates under this Agreement and any other agreement for the provision of related equipment or related services (including any obligations for which payments on account of such obligations are subsequently invalidated, declared to be fraudulent or federal law, common law or equitable cause), You grant to Everpay a first priority lien and security interest in and to (i) the Reserve Account and (ii) any of Your funds pertaining to the transactions contemplated by this Agreement now or hereafter in Everpay's possession, whether now or hereafter due or to become due to You from Everpay. Any such funds, money or amounts now or hereafter in our possession may be commingled with other funds of Everpay, or, in the case of any funds held pursuant to the foregoing paragraphs, with any other funds of other customers of Everpay. In addition to any rights now or hereafter granted under applicable law and not by way of limitation of any such rights, You hereby authorize Everpay at any time, without notice or demand to You or to any other Person, to set off, recoup and to appropriate and to apply any and all such funds against and on account of Your obligations to Everpay and Everpay's respective Affiliates under this Agreement and any other agreement with us our respective Affiliates for any related equipment or related services (including any check services), whether such obligations are liquidated, unliquidated, fixed, contingent, matured or unmatured. You agree to duly execute and deliver to Everpay such instruments and documents as we may reason ably request to perfect and confirm the lien, security interest, right of set off, recoupment and subordination set forth in this Agreement.</p>
</div>
<br>
<p><strong>10. Right of Set-Off. </strong><br> Everpay shall have the right to set off any amounts owed by You under this Agreement against any funds credited to or owing to You under this Agreement by Everpay. Everpay may exercise this right of set off at any time and without prior notice to You. Everpay's election not to exercise the right to set-off amounts owed by You under this Agreement shall in no way operate as waiver of its right to do so or the right to recover the owed fees from You.</p>
<p><strong>11. Payment Cards Accepted.</strong><br> Everpay is authorized to accept all MasterCard, Visa, American Express, Diner's Club, and Discover Network Transactions, and hereby authorizes You to accept payment from these specific sources.</p>
<p><strong>12. Authorization Re: Settled Funds. </strong><br> Merchant hereby authorizes Everpay to debit, credit, and/or other settle any transactions, fees, fines, assessments, expenses, or the like, processed or incurred by Merchant pursuant to this Agreement. You will typically settle funds into Your account within one (1) to two (2) business days after the Cardholder transaction has been completed. There are circumstances which might lead to longer processing times.</p>
<br>
<div class="sublevelTwo">
<p><strong>12.1. When you Receive Funds. </strong></p>
<p>Settled funds from Your Account will be transferred electronically to the bank account that you have on file with Everpay during normal business banking hours. Settled funds will be transferred in the currency of the United States.</p>
<br>
<p><strong>12.2. Funding Limits. </strong></p>
<p>Depending on the degree to which You have been approved with Everpay, Everpay may limit the amount you may process within a single month to $10,000.00 USD per month. Additionally, Everpay may delay settlements of large sums of money while Everpay reviews the processed transaction.</p>
</div>
</div>
</div>
<br>
<div id="card-types" class="s4">
<div class="legalContentBottom-lf cardtypeLf">
<div class="legalBottom-heading"><h2>Card Types</h2></div>
<div class="legalBottom-image"><img src="https://everpayinc.com/apps/branding/default/img/types.jpg" border="0" alt="Everpay"></div>
</div>
<div class="legalContentBottom-rt">
<p><strong>13. Third Party Fines and Assessments. </strong><br> You shall be responsible for all amounts imposed or assessed by third parties such as, but not limited to, VISA, MasterCard, Discover, Other Networks, and Your own suppliers. Such amounts include, but are not limited to, fees, fines, assessments, penalties, loss allocations, etc. Any changes or increases in such amounts shall automatically become effective upon notice to Merchant and shall be immediately payable by Merchant when assessed by Everpay. If Everpay elects to pay the amount of the assessment on Your behalf, You will be charged a cost of funds fee, the amount of which shall be determined by Everpay in its reasonable discretion, and which You may be charged by Everpay from time to time.</p>
<p><strong>14. Returns. </strong><br> You shall establish, maintain and disclose to Cardholders a fair and consistent policy for the exchange or return of merchandise, give proper credit or refund for all such exchanges or returns and issue credit vouchers for amounts due the Cardholder. Merchant shall be solely liable for the amount of any return or exchange, and any fees, costs, expenses, or fines associates with or related to the return or exchange.</p>
<p><strong>15. Chargebacks/Excessive Risk. </strong><br> You shall be responsible for establishing, implementing, and maintaining a risk monitoring policy with respect to excessive returns or chargebacks received from Cardholders and shall act promptly to resolve any disputes with Cardholders. Merchant agrees to reacquire and pay Everpay the amount of any sales transaction which Everpay regards as a risk in its reasonable discretion and Everpay shall have the right at any time to charge Your Account for any sales transaction with written notice as provided for herein. You hereby irrevocably assign to Everpay the right to resolve disputes with Cardholders on Your behalf, which Everpay may or may not elect to exercise. You may advise Everpay in the defense of chargebacks, compliance cases, and similar actions, and hereby agree to provide Everpay with any information reasonably required to resolve such a dispute. You shall bear sole responsibility for any chargebacks, returns, refunds, or reversed transactions that are incurred for transactions that You process with or through Everpay. If Everpay determines in its reasonable discretion that You are having an excessive amount of chargebacks, Everpay may implement a program to monitor Your transactions, may suspend the Services provided pursuant to this Agreement, or may terminate this Agreement.</p>
</div>
</div>
<div id="returns" class="s5">
<div class="legalContentBottom-lf returnLf">
<div class="legalBottom-heading"><h2>Returns &amp; Loses</h2></div>
<div class="legalBottom-image"><img src="https://everpayinc.com/apps/branding/default/img/hang.jpg" border="0" alt="Everpay"></div>
</div>
<div class="legalContentBottom-rt">
<p><strong>16. Losses. </strong><br> All losses incurred by Everpay attributable to You or Your transactions will be Your sole responsibility, including without limitation, all chargebacks, fines, fees, expenses, and other costs.</p>
<p><strong>17. Expenses Incurred. </strong><br> Any expenses that You incur in connection with Your transacting business and processing transactions as contemplated under this Agreement, or incurred in performing pursuant to this Agreement, including but not limited to transportation, meals, lodging, entertainment, fees to other persons, agents, or advisers, state taxes, federal taxes, salaries, penalties, interest, damages, fines, costs, or liabilities that arise from or are related to Your duties and obligations set forth in this Agreement, shall be paid solely by You. Everpay shall have no obligation to reimburse You for any such expenses. If You choose to retain third party services with respect to Your business, and provided You receive written authorization from Everpay to do so, Everpay shall determine reasonable compensation for and shall be solely liable to third party suppliers employed by You.</p>
<p><strong>18. Taxes Incurred. </strong><br> You understand and hereby acknowledge that You shall be solely responsible for any tax liabilities, including but not limited sales, use, excise, or other taxes, arising from Your business activities or the specific transactions that You process through or with Everpay.</p>
<p><strong>19. Customer Service. </strong><br> You must establish and consistently implement the ability to properly handle Your customer inquiries regarding transactions, returns, exchanges, refunds, product inquiries, and the like.</p>
<p><strong>20. Security and Privacy. </strong><br> You shall be in full compliance with all rules, regulations, guidelines and procedures adopted by any Card Association or Payment Network relating to the privacy and security of Cardholder and Card transaction data as they may be amended from time to time, including but not limited to Payment Card Industry Data Security Standard (hereinafter "PCI") and/or the Payment Application Data Security Standard (hereinafter "PA-DSS"). You will not, under any circumstances, disclose any Cardholder account number or any information relating to any Cardholder's account number to any person other than Everpay, the Banks, or as might otherwise be required by law.</p>
<p><strong>21. Compliance with Applicable Rules and Regulations. </strong><br> You shall abide by and be in full compliance with all applicable state, federal, and local laws, statutes, rules, regulations, guidelines and procedures with respect or in any way related to Your transactions (hereinafter "Applicable Rules and Regulations"). You shall also abide by and be in full compliance with any rules, regulations, guidelines, and/or procedures adopted or promulgated by any Card Association, including but not limited to, Visa, MasterCard, Discover or any other payment network (hereinafter "Card Association Rules").</p>
<p><strong>22. Compliance with Processing Bank Rules and Procedures. </strong><br> You understand and acknowledge that Everpay has agreements with banks pursuant to which Your transactions are processed and settled (hereinafter the "Banks"). Merchant hereby agrees to abide by and be in full compliance with all rules and procedures adopted or promulgated by the Banks.</p>
</div>
</div>
<div id="privacy" class="s6">
<div class="legalContentBottom-lf cardtypeLf">
<div class="legalBottom-heading"><h2>Privacy</h2></div>
<div class="legalBottom-image"><img src="https://everpayinc.com/apps/branding/default/img/privacy.jpg" border="0" alt="Everpay"></div>
</div>
<div class="legalContentBottom-rt">
<p><strong>23. Prohibited Business Activities. </strong><br> By entering into this Agreement, you also hereby agree that you will not accept any payments from any individual, business, and/other entity, or otherwise conduct any business which is in any way related to or could be regarded as: (1) any illegal activity; (2) affiliate marketing; (3) credit repair services; (4) debt counseling or consolidation services; (5) pharmaceuticals or neutraceuticals; (6) telemarketing; (7) prepaid illegal drugs or illegal drug paraphernalia; (8) alcohol; (9) sales in any foreign currency; (10) betting, gambling, or any other wagers; (11) transactions with high risk of returns or chargebacks; (12) cross-marketing or up-sell businesses; (13) telemarketing; (14) adult entertainment; and/or (15) firearms or weapons.</p>
<p><strong>24. Inspection of Your Business. </strong><br> Everpay shall have the right to demand an inspection of Your Business premises, records, practices and policies, during regular business hours, upon written notice of said inspection having been given to You. Everpay shall also have the right to demand an audit of Your Business premises, records, practices, policies, or the transactions that You have processed through or with Everpay. If Everpay demands such an audit, You shall be responsible for all fees, costs, and expenses arising from the audit.</p>
<p><strong>25. Your Privacy and Privacy of Others. </strong><br> Everpay will have access to the information and data arising from the performance of this Agreement and Your use of the Services. Everpay will handle this information in accordance with the Privacy Policy which is accessible via the Website.</p>
<p><strong>26. Your Security. </strong><br> Everpay has implemented technical and organizational measures through the use of strategic third party services providers, designed to secure your personal information from accidental loss and from unauthorized access, use, alteration or disclosure. However, Everpay cannot guarantee that unauthorized third parties will never be able to defeat those measures or use your personal information for improper purposes. You acknowledge that you provide your personal information at your own risk.</p>
<p><strong>27. Notices. </strong><br> Everpay usually communicates with You electronically, in which case notice will be deemed received by Merchant when sent by Everpay. Otherwise, all notices, requests, demands and other communications given pursuant to this Agreement, unless specified otherwise herein, shall be in writing and shall be delivered by hand, overnight mail, or registered or certified mail, postage prepaid, to the addresses noted below. If by US Mail, notice shall be regarded as received three (3) days after a documented record of the communication being sent. If by overnight mail, the notice shall be regarded as received one (1) day after a documented record of the communication being sent. If by hand,</p>
<p>If to Everpay, notice under this Agreement may be sent to: 3635 S. Ft. Apache Rd, Suite 200-8, Las Vegas NV 89147.</p>
<p>If to You, notice under this Agreement may be sent pursuant to the contact information set forth in the Merchant Application.</p>
<p><strong>28. Everpay's Termination of this Agreement. </strong><br> You shall be in default of this Agreement, and Everpay, at its election, shall have the right to immediately terminate Merchant's Account and this Agreement, at any time if: (1) Merchant fails to abide by the duties, terms, conditions, representations, or warranties of this Agreement; (2) Merchant fails to pay or reimburse the fees, expenses or charges referenced herein when they become due; (3) Merchant fails to abide by Everpay's policies and procedures; (5) Merchant fails to abide by the Applicable Rules and Regulations; (4) Merchant fails to provide accurate information to Everpay, whether incident to or independent of the Merchant Application; (6) Merchant fails to process a minimum gross transactional volume per month established by Everpay; (7) Merchant is subject a voluntarily or involuntarily bankruptcy proceeding or becomes financially insolvent; (8) Everpay believes in its reasonable discretion that there has been a material deterioration in Merchant's financial condition; (9) Merchant ceases to do business; (10) there is a change of ownership of Merchant which affects more than 30% of the then outstanding ownership share in Merchant; and (11) Merchant's representations as set forth herein are discovered to be false.</p>
<p>If Your Account is terminated for any reason or no reason, you agree: (a) to continue to be bound by this Agreement, (b) to immediately stop using the Services, (c) that Everpay shall reserve the right (but have no obligation) to delete all of your information and account data stored on our servers, and (d) that Everpay shall not be liable to you or any third party for termination of access to the Services or for deletion of your information or account data.</p>
</div>
</div>
<div id="termination" class="s7">
<div class="legalContentBottom-lf returnLf">
<div class="legalBottom-heading"><h2>Termination</h2></div>
<div class="legalBottom-image"><img src="https://everpayinc.com/apps/branding/default/img/termination.jpg" border="0" alt="Everpay"></div>
</div>
<div class="legalContentBottom-rt">
<p><strong>29. Everpay's Suspension of Services. </strong><br> Everpay may elect to suspend the provision of Services under this Agreement, in lieu of terminating this Agreement, if You are found to be in default of this Agreement.</p>
<p><strong>30. Right of First Refusal. </strong><br> Should You terminate this Agreement at any point in time, You hereby represent, warrant, and agree that before entering into any agreement with any third party to process Cards, or to receive support that is in way similar to the Services as set forth in this Agreement, Everpay shall have the right of first refusal with respect to providing such services to You under the same terms and conditions as offered by the third party instead of Your entering into such agreement with the third party.</p>
<p><strong>31. No Authority to Bind. </strong><br> Neither You nor any of Your employees, consultants, contractors or agents, are agents, employees, partners or joint ventures of Everpay, nor do You have any authority to bind Everpay by contract or otherwise, to any obligation. You will not represent anything to the contrary, either expressly, implicitly, by appearance or otherwise.</p>
<p><strong>32. Intellectual Property/Ownership of Services. </strong><br> You hereby understand and acknowledge that in entering into this Agreement, it has obtained a non exclusive, non-assignable, non-transferable, and right to use the Services only. Everpay shall at all times retain exclusive ownership of the Services, including any intellectual property rights in the Services, as between You and Everpay, including without limitation, any materials delivered to You hereunder and any invention, development, product, trade name, trademark, service mark, software program, or derivative thereof, developed in connection with providing the Services or during the term of this Agreement. Everpay further retains all rights, title, interest, and ownership, as between You and Everpay, in all data and other information provided to You by Everpay in performing pursuant to this Agreement. All designs, marks, art, images, and logos (the "Marks") related to Everpay are registered trademarks of Everpay or its affiliates, or in the case that trademarks have not been registered, Everpay and its affiliates, and specifically, the Banks and Card Associations, shall retain all rights, title, interest, and ownership in the Marks. You may not copy, imitate or use the Marks without our prior written consent. In addition, all page headers, custom graphics, button icons, and scripts are service marks, trademarks of Everpay. You may not copy, imitate, or use the Marks without Everpay's prior written consent. All rights, title, interest, and ownership in and to the Everpay website, any content thereon, the technology related to the Services, and any and all technology and any content created or derived from any of the property discussed in this Paragraph, shall remain the exclusive property of Everpay</p>
</div>
</div>
<div id="property-rights" class="s8">
<div class="legalContentBottom-lf propertyLf">
<div class="legalBottom-heading"><h2>Property Rights</h2></div>
<div class="legalBottom-image"><img src="https://everpayinc.com/apps/branding/default/img/balance.jpg" border="0" alt="Everpay"></div>
</div>
<div class="legalContentBottom-rt">
<p><strong>33. Merchant's Representations and Warranties. </strong><br> You hereby represent and warrant to Everpay as follows:</p>
<div class="sublevelTwo">
<p><strong>33.1. Information Provided. </strong></p>
<p>All information that You have provided to Everpay, including but not limited to the information and documents requested in the Merchant Application, is true and accurate.</p>
<br>
<p><strong> 33.2. Authorized to Proceed.</strong></p>
<p>The person or entity executing this Agreement has the full authority, right and power to enter into and execute this Agreement, and that the execution and delivery of this Agreement to Elektropay has been expressly authorized and approved. You have duly organized, authorized and is in good standing under the laws of the state of its organization, and is duly authorized to do business in each other state in which You do business. There is no law, regulation, or any agreement to which You are presently bound, or any pending or contemplated litigation to which You are a party, that would in any way affect Your ability to perform this Agreement.</p>
<br>
<p><strong> 33.3. Compliance with Laws, Policies, and Procedures.</strong></p>
<p>You hereby acknowledge and agree to comply with Everpay's, and the Processing Bank's policies and procedures, and the Applicable Rules and Regulations, which are incorporated to this Agreement by reference. Merchant understands, and hereby acknowledges, that these policies, rules, and regulations may change from time to time. Merchant agrees to accept and abide by all such amendments.</p>
<br>
<p><strong>33.4. Data Security Compliance.</strong></p>
<p>You hereby acknowledge and agree to comply with privacy and security requirements under the Payment Card Industry Data Security Standard or the Applicable Rules and Regulations, with regards to Merchant's use, access, and storage of credit card information belonging to cardholders, which You obtain or have access to.</p>
<br>
<p><strong>33.5. No Assignment of Services. </strong></p>
<p>You shall not enter into any agreement with any other individual, business, and/or other entity to perform the services set forth in this Agreement.</p>
</div>
</div>
</div>

<div id="confidential" class="s9">
<div class="legalContentBottom-lf confidentialityLf">
<div class="legalBottom-heading"><h2>Confidentiality</h2></div>
<div class="legalBottom-image"><img src="https://everpayinc.com/apps/branding/default/img/cloud.jpg" border="0" alt="Everpay"></div>
</div>
<div class="legalContentBottom-rt">
<p><strong>34. Confidentiality. </strong><br> Everpay views the Services, its processes, software, records, merchants, merchant's customers, vendors, contractors, banking relationships, and other strategic relationships disclosed or made known to You during the course of Your dealing with Everpay as confidential and/or proprietary in nature (hereinafter referred to as "Confidential Information"). You hereby agree that You will not use for Your own purposes, will not disclose to any third party, and will retain in strictest confidence all Confidential Information during the term of this Agreement, and that after termination of this Agreement You will use the same degree of care and discretion in protecting and preserving the Confidential Information that You are required to use pursuant to this Agreement. You will not be obligated to maintain the confidentiality of information: (a) that is or becomes within the public domain through no act of the disclosing party in breach of this Agreement, (b) was in Your possession prior to its disclosure under this Agreement, and You can prove that You had such possession, (c) received from another source that has no restriction on use or disclosure, or (d) is required to be disclosed by state or federal law. You further agree that the existence of this Agreement and its terms and conditions shall be considered Confidential Information, and that the terms and conditions set forth in this Agreement shall not be disclosed to any third party.</p>
<p><strong>35. Indemnification. </strong><br> You hereby agree to indemnify, defend, and to hold harmless Everpay, its officers, directors, shareholders, affiliates, and agents, from and against any and all liability, claims, losses, judgments, lawsuits, decrees, disputes, demand, proceeding, or anything of the like, arising out of or related to: (1) any dispute between You and a customer or Cardholder with respect or related to any transaction processed by or through Everpay; (2) the accuracy of any information provided by You to Everpay; (3) any alleged infringement of another party's intellectual property rights; (4) Your breach of the duties, terms, obligations, representations, and/or warranties set forth in this Agreement; (5) Your failure to protect the identity of Customers, their credit card information, and other information which the Customer or any other regulating agency might regard as private and confidential; (6) any action taken by the Processing Bank or the Card Associations with respect to Your Account; and/or (7) Your negligence, misrepresentation, omission, or fraud which results in liability, loss, or damage to Everpay.</p>
<p><strong>36. Limitation of Liability. </strong><br> You understand and hereby acknowledge, that there are risks associated with accepting payment cards in conducting business, and You hereby assume any such risk arising from Your acceptance of cards or receiving the Services described in this Agreement. You further understand and acknowledge that Everpay shall not be responsible for any damages, claims, losses, judgments, disputes, proceedings lawsuits, liability, or anything of the like, incurred by or directed at You arising out of or related to Your own conduct, performance of this Agreement, or operation of Your business. Everpay shall not be liable for lost profits, lost business or any incidental, special, consequential or punitive damages (whether or not arising out of circumstances known or foreseeable by Bank) suffered by You, its customers or any third party in connection with the Services provided hereunder. Everpay's liability related to or arising out of this Agreement shall in no event exceed an amount equal to the lesser of (i) the actual monetary damages incurred by You or (ii) fees paid to and retained by Everpay for the particular Services in question for the three calendar months immediately preceding the date on which Everpay received a written notice from You setting forth an allegation that Everpay failed to adequately perform pursuant to this Agreement.</p>
<p><strong>37. Disclaimer of Warranties. </strong><br> Except for those express warranties made in this Agreement, Everpay hereby disclaims all representations and warranties with respect to the provision of Services hereunder, including without limitation, any express or implied warranties of merchant ability or fitness for a particular use or purpose.</p>
<p><strong>38. Agreement to Arbitrate. </strong><br> The Parties further agree that any claim, dispute, or controversy arising out of or related to this Agreement shall be submitted to final and binding arbitration before JAMS, or its successor, in Montreal, Quebec, in accordance with the laws of the Province of Quebec (including but not limited to the Quebec Arbitration Act), before a single arbitrator agreeable to the Parties. The arbitration shall be conducted pursuant to the JAMS Comprehensive Arbitration Rules and Procedures in effect at the time of the filing of the demand for arbitration, which You can access and review at http://www.jamsadr.com/rules-comprehensive-arbitration/. The arbitration fees shall be equally split and shared by You and Everpay. If either Sales Agent or Everpay's refuses to submit an alleged claim, dispute, or controversy arising out of this Agreement to arbitration, the refusing party shall have waived, and will be unable to recover any fees and costs incurred, if they would otherwise be available to that party in any such action.</p>
<p><strong>39. Choice of Law and Jurisdiction. </strong><br> This Agreement shall be interpreted under the laws of the State of Florida without regard to any conflict of law provisions. The Parties hereby agree that this Agreement was negotiated in Montreal, Quebec, and that any action, dispute, or claim between the Parties arising out of or related to this Agreement, shall be heard in Montreal, Quebec. The Parties to this Agreement hereby consent to jurisdiction in that court and agree to accept service by mail and hereby waive any defense of any kind related to jurisdiction or venue.</p>
<p><strong>40. Modification. </strong><br> The Parties may choose to amend and/or modify the terms of this Agreement. Any such amendment or modification must be confirmed in writing with the express consent of the Parties.</p>
<p><strong>41. Entire Agreement/Super session. </strong><br> This Agreement constitutes the entire understanding and agreement of the parties with respect to the subject matter of this Agreement, and supersedes all prior agreements or understandings, written or oral, between the Parties with respect to the subject matter of this Agreement. This Agreement supersedes all other agreements and/or understandings between the Parties, both written and oral, with respect to the matters set forth herein.</p>
<p><strong>42. Advice of Counsel/Interpretation. </strong><br> The Parties to this Agreement, and each of them, hereby confirm and admit that each has read and understands this Agreement, and that each has either been fully advised and represented by counsel or has had the opportunity to seek the advice of counsel, with respect to this Agreement and all negotiations giving rise to it. This Agreement is the result of the negotiations of the Parties, and each has had significant input into the drafting and construction of this Agreement, and thus, the normal rule of construction to the effect that any ambiguities are to be resolved against the drafting party shall not be employed in the interpretation of this Agreement. The Parties understand and agree that this Agreement shall be construed fairly as to all parties and not in favor of or against any of the parties regardless of which party has prepared this Agreement, such that the application of Quebec Civil Code, providing "[i]n cases of uncertainty not removed by the preceding rules, the language of a contract should be interpreted most strongly against the party who caused the uncertainty to exist," is hereby waived.</p>
<p><strong>43. Survival. </strong><br> In the event that one or more of the provisions, or portions thereof, of this Agreement is determined to be illegal or unenforceable, the remainder of this Agreement shall not be affected thereby and each remaining provision or portion thereof shall continue to be valid and effective and shall be enforceable to the fullest extent permitted by law.</p>

</div>

</div>
</div>
</div>
</div>
</div>
   </div> 
   
</div>

</div>
</div>




<!-- Cookie Policy modal -->

<div class="modal fade modal-lg" id="CookieNoticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
        <h3 class="modal-title" id="myModalLabel"><strong>
Everpay Cookie Policy  </strong></h3>
<br>
      </div>

   <div class="modal-body">
  <div class="row">
 <div style="text-align: left;">
<p class="lead">Everpays use of cookies and other technologies when you use our websites, mobile sites, or mobile apps and you can find out more about cookies and how to control them</p>

<h3><b>Your Consent</b></h3>

<p>By using our websites, mobile sites and mobile apps you accept the use of cookies in accordance with this cookie policy or any alternate policy provided by the specific site or app. This policy applies additional to any other Terms of Use or contract provision for the particular Everpay service being used. If you do not accept the use of cookies, please disable them as explained below or in any other notice provided to you when you visit a Everpay website or download a Everpay app.</p>

<h3><b>What Is A Cookie?</b></h3>

<p>Cookies are text files containing small amounts of information which are downloaded to your device when you visit a website. Cookies are then sent back to the originating website on each subsequent visit, or to another website that recognizes that cookie. Cookies are useful because they allow a website to recognize a user's device.</p>

<p>Cookies do lots of different jobs, like letting you navigate between website pages efficiently, remembering your preferences and generally improve user experience. Cookies are widely used on the internet and allow a website/portal to recognize a user's device, without uniquely identifying the individual person using the computer. These technologies help to make it easier for you to log on and use the site, provide feedback to us as to which parts of the website you visit, so we can assess the effectiveness of the site and provide a better user experience. They can also help to ensure that adverts you see online are more relevant to you and your interests.</p>

<p>For more information about cookies, including how to see what cookies have been set and how to manage, block and delete them, see http://www.allaboutcookies.org. You may also be able to configure your browser not to accept cookies, although please bear in mind that this may affect your ability to use the services we provide.</p>

<h3><b>Is There More Than One Flavor?</b></h3>

<p>There are different types of cookies and they are usually split into the following categories, but note that not all these types will be used on every website you visit and some cookies fit into multiple categories:</p>

<p><b>Strictly Necessary Cookies</b></p>

<p>These cookies are essential in order to enable you to move around the website and use its features, such as accessing secure areas of the website. Without these cookies, services you have asked for, like shopping baskets or e-billing, cannot be provided. So, basically, these cookies enable services you have specifically asked for.</p>

<p><b>Performance Cookies</b></p>

<p>These cookies collect information about how visitors use a website. For instance, which pages visitors go to most often and if they get error messages from web pages. These cookies don't collect information that uniquely identifies a visitor. All information that these cookies collect is aggregated and therefore anonymous. It is only used to improve how a website works. So, basically, these cookies collect anonymous information on the website pages you visited.</p>

<p><b>Functionality Cookies</b></p>

<p>These cookies allow the website to remember choices you make (such as your user name, language or the region you are in) and provide enhanced, more personal features. For instance, a website may be able to provide you with local weather reports or traffic news by storing in a cookie the region in which you are currently located. These cookies can also be used to remember changes you have made to text size, fonts and other parts of web pages that you can customize. They may also be used to provide services you have asked for such as watching a video or commenting on a blog. The information these cookies collect may be anonymised and they cannot track your browsing activity on other websites.  So, basically, these cookies remember choices you make to improve your user experience.</p>   

<p><b>'Targeting Cookies</b></p>

<p>These cookies are used to deliver adverts more relevant to you and your interests. They are also used to limit the number of times you see an advertisement as well as help measure the effectiveness of advertising campaigns. They are usually placed by advertising networks with the website operator's permission. They remember that you have visited a website and this information is shared with other organisations such as advertisers. Quite often targeting or advertising cookies will be linked to site functionality provided by the other organisation. So, basically, these cookies collect information about your browsing habits in order to make advertising relevant to you and your interests. </p>  

<h3><b>How To Control And Delete Cookies Through Your Browser</b></h3>

<p>The ability to disable or delete cookies can also be carried out by changing your browser's settings. In order to do this, follow the instructions provided by your browser (usually found in the Help, Edit or Tools facility). Some pages may not work if you completely disable all cookies, but many third party cookies can be safely blocked.  If you do switch off cookies at a browser level, your device won't be able to accept cookies from any website. This means you will struggle to access the secure area of any website you use and you won't enjoy the best browsing experience when you are online. </p>


<h3> What Cookies Do We Provide On <strong><a>www.everpayinc.com?</a></strong></h3>


<h3><b>Third party Optimizely cookies</b></h3>

<p>In addition to the first party cookies referred to above, third party cookies are served by Optimizely from the log3.optimizely.com domain for the purpose of comparing two versions of the same website page, allowing Everpay the opportunity to create better websites. Further information about Optimizely's use of user data is available in their privacy policy at <a>www.optimizely.com/privacy.</a> Details on how to opt out of all Optimizely tracking are available at www.optimizely.com/opt_out.</p>

<div class="row">

<div class="col-md-3">
<h3><b>Cookie Name</b></h3>

<p>optimizelyBuckets</p>

<p>optimizelyEndUserId</p>

<p>optimizelyPendingLogEvents</p>

<p>optimizelySegments</p>

</div>

<div class="col-md-4">
<h3><b>Description</b></h3>

<p>Used to store the different versions of a web page variants for better comparison and performance testing, to ensure the user gets a consistent experience	.

</p><p>The main purpose of this cookie is performance of the user's experience and the appearance of the site.	
</p></div>

<div class="col-md-2">
<h3><b>Expiry</b></h3>

<p>10 years

</p><p>10 years

</p><p>10 years

</p><p>10 years

</p></div>

</div>
 

</div>

</div>
</div>
      </div>
   
    </div>
  </div>

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<!--[if !IE]> -->
<script type="text/javascript" src="<?=branded_include('js/jquery.2.1.1.min.js');?>"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<![endif]-->

<!-- BEGIN CORE PLUGINS -->


<script type="text/javascript" src="<?=branded_include('js/jquery-migrate-1.2.1.min.js');?>"></script>

<script type="text/javascript" src="<?=branded_include('js/jquery.slimscroll.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/jquery.blockui.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/jquery.cokie.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/jquery.uniform.min.js');?>"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->

<script type="text/javascript" src="<?=branded_include('js/parsley.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/translation.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/BrandDetection.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/Iban.js');?>"></script>
	
	<!-- Dashboard Custom Script -->
<script type="text/javascript" src="<?=branded_include('js/elektropay-index.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/ace-elements.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/ace.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/back-to-top.js');?>"></script>

<script type="text/javascript" src="<?=branded_include('js/jquery.dlmenu.js');?>"></script>


		<script>
			$(function() {
				$( '#dl-menu' ).dlmenu({
					animationClasses : { classin : 'dl-animate-in-5', classout : 'dl-animate-out-5' }
				});
			});
		</script>
<script type="text/javascript" src="<?=branded_include('js/date-time/bootstrap-datepicker.min.js');?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#business_start').datepicker({
			autoclose:true,
			endDate: 'today',
			todayHighlight: true
		}).on('changeDate', function(e) {
			// console.log(e);
		});
	});
</script>
<!-- END PAGE LEVEL SCRIPTS -->

<div class="hidden" id="base_url"><?=base_url();?></div>
<div class="hidden" id="current_url"><?=current_url();?></div>
</body>
</html>