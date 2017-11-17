</div><!-- END/.container-fluid-->

</div><!-- END/.container-fluid-->
</div><!-- END/.container-fluid-->
</div><!-- END/.app-body -->
	
</main><!-- END #main -->


	<footer id="footer" class="main-footer sticky footer-type-1">
			<div class="col-md-12">
				<div class="footer-inner margin-top-0">
			<div class="site-footer-links col-sm-2"></div>

<div class="footer-text footer-site-links col-sm-4 text-lg-left text-xs-center text-xs-center">                                        
			<p class="site-footer-links copyright p-top-md-5">&copy; <?=date('Y');?> <strong>EverPay</strong> </p> 
                        </div> 

<div class="site-footer-links col-sm-2">
<ul class="text-lg-left text-xs-center text-xs-center hidden" id="">
<li class="cpl-link2"><a href="/legal/privacy/">Privacy</a></li>
<li class="cpl-link1"><a href="/legal/">Legal</a></li>
<li class="cpl-link1"><a href="/legal/security/">Security</a></li>
<li class="cpl-link0"><a href="https://status.everpayinc.com" target="_blank" data-status-link-for="everpayapp" title="Visit our status page">Status</a></li>
</ul>
</div>

                  <ul  class="site-footer-links col-sm-4 text-lg-left text-xs-center text-xs-center list-inline m-top-md-5">
                   &nbsp; &nbsp;<li class="cpl-link2"><a href="https://www.everpayinc.com/legal" target="_blank" >Legal</a></li>
                    <li class="cpl-link1"><a href="https://www.everpayinc.com/terms" target="_blank" >Terms</a></li>
                   <li class="cpl-link0">Powered by&nbsp; <b><a href="https://www.elektropay.com" target="_blank" >Elektropay<sup>™</sup></a></b></small>  &nbsp;<small> V <?=$this->config->item('opengateway_version');?>. <?
		
			if (defined("_LICENSENUMBER")) {
				echo 'License Number: ' . _LICENSENUMBER;
			}
			
			?></small></li>
				</ul>		
					</div>
					
					
					<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
					<div class="go-up"></div>
					
				</div><!-- /footer-inner -->
</div><!-- /col-md-12 end -->
				
			</footer>


</div><!--END/#wrapper -->

<!-- BEGIN MODALS -->


<!-- BEGIN MODAL-new-customer-->
<div class="modal fade bootbox-prompt" id="AddcustomerModal" tabindex="-1" role="dialog">
	  	<div class="modal-dialog">
		    <div class="modal-content">
			
			      	<div class="modal-header">
			        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        	<h4 class="modal-title" id="AddcustomerModalLabel">
			        		Add New Customer
			        	</h4>
			      	</div>
			      	<div class="modal-body">
					
<div class="form-content">
<form id="new-customer" class="form-horizontal" method="post" action="<?=site_url($form_action);?>" role="form" novalidate="novalidate">
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">Internal ID</label>
					    <div class="col-sm-10 col-md-8">
					      <input type="text" class="form-control required" required name="internal_id" id="internal_id" readonly value="<?php echo $customer_unique_id; ?>">
					      <span class="help-block">This identifier  can be used via the API to
			               synchronize customer data on our system with other software or apps by providing a cross-system unique identifier.</span>
						</div>
				  	</div>
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">First name</label>
					    <div class="col-sm-10 col-md-8">
					      <input type="text" class="form-control required" required name="first_name" id="first_name" value="<?php echo $_REQUEST['first_name'] ?>">
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">Last name</label>
					    <div class="col-sm-10 col-md-8">
					      <input type="text" class="form-control required" required name="last_name" id="last_name" value="<?php echo $_REQUEST['last_name'] ?>">
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">Company</label>
					    <div class="col-sm-10 col-md-8">
					    	<input type="text" class="form-control"  name="company" id="company" value="<?php echo $_REQUEST['company'] ?>">
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">Email address</label>
					    <div class="col-sm-10 col-md-8">
					      	<input type="email" class="form-control required"  required name="email" id="email" value="<?php echo $_REQUEST['email'] ?>">
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">Phone number</label>
					    <div class="col-sm-10 col-md-8">
					    	<div class="has-feedback">
								<input type="text" class="form-control required"  required name="phone" id="phone" value="<?php echo $_REQUEST['phone'] ?>">
						      	<!-- <i class="ion-information-circled form-control-feedback" data-toggle="tooltip" title="" data-original-title="Tooltip helper example"> -->
						      	</i>
							</div>
					    </div>
				  	</div>
				  	<!-- <div class="form-group">
					    <label class="col-sm-2 col-md-2 control-label">Credit card number</label>
					    <div class="col-sm-10 col-md-8">
					    	<div class="has-feedback">
					      		<input type="text" class="form-control mask-cc" name="customer[cc]">
					      		<i class="ion-information-circled form-control-feedback" data-toggle="tooltip" title="" data-original-title="Credit card masked input example">
						      	</i>
							</div>
					    </div>
				  	</div> -->
				  	
				  		<div class="form-group">
						    <label class="col-sm-2 col-md-2 control-label">Address1</label>
						    <div class="col-sm-10 col-md-8">
						      	<input type="text" class="form-control required"  required name="address_1" id="address_1" value="<?php echo $_REQUEST['address_1'] ?>">
						    </div>
						</div>
						
				  		<div class="form-group">
						    <label class="col-sm-2 col-md-2 control-label">Address2</label>
						    <div class="col-sm-10 col-md-8">
						      	<input type="text" class="form-control"   name="address_2" id="address_2" value="<?php echo $_REQUEST['address_2'] ?>">
						    </div>
						</div>
						
				  		<div class="form-group">
						    <label class="col-sm-2 col-md-2 control-label">Country</label>
						    <div class="col-sm-10 col-md-8">
						      	<select geoname="country_short" id="country" name="country" class="form-control required" required>
						      		<option value="">Please select country</option><? foreach ($countries as $country) { ?>
						      		<option <? if ($form['country'] == $country['iso2']) { ?> selected="selected" <? } ?> value="<?=$country['iso2'];?>"><?=$country['name'];?></option><? } ?>
                                </select>
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-sm-2 col-md-2 control-label">State</label>
						    <div class="col-sm-10 col-md-8">
						      	<input type="text" class="form-control required"  required name="state" id="state" value="<?php echo $_REQUEST['state'] ?>">
						    </div>
						</div>
						<!-- <div class="form-group">
						    <label class="col-sm-2 col-md-2 control-label">State</label>
						    <div class="col-sm-10 col-md-8">
						      	<select geoname="administrative_area_level_1_short" id="state" class="form-control required" required name="state">
						      		<option value="">Please select state</option>
						      		<?php
								foreach ($states as $state) {
									if ($form['state'] == $state['code']) { ?>
										<option  selected="selected"  value="<?=$state['code'];?>"><?=$state['name'];?></option><?php
									} else { ?>
										<option value="<?=$state['code'];?>"><?=$state['name'];?></option><?php
									}
								    } ?>
							   </select>
						    </div>
						</div> -->
						<div class="form-group">
						    <label class="col-sm-2 col-md-2 control-label">City</label>
						    <div class="col-sm-10 col-md-8">
						      	<input type="text" class="form-control required"  required name="city" id="city" value="<?php echo $_REQUEST['city'] ?>">
						    </div>
						</div>
						<div class="form-group">
						    <label class="col-sm-2 col-md-2 control-label">Postal code</label>
						    <div class="col-sm-10 col-md-8">
						      	<input type="text" class="form-control required"  required name="postal_code" id="postal_code" value="<?php echo $_REQUEST['postal_code'] ?>">
						    </div>
						</div>
						
						<!-- <div class="form-group">
						    <div class="col-sm-3 col-sm-offset-2">
						      	<input type="text" class="form-control" placeholder="City" name="customer[city]">
						    </div>
						    <div class="col-sm-3">
						      	<input type="text" class="form-control" placeholder="State" name="customer[state]">
						    </div>
						    <div class="col-sm-2 col-md-2">
						      	<input type="text" class="form-control" placeholder="Zip code" name="customer[zip]">
						    </div>
					  	</div> -->
				  	
				  	<!-- <div class="form-group">
					    <label for="inputPassword3" class="col-sm-2 col-md-2 control-label">Extra notes</label>
					    <div class="col-sm-10 col-md-8">
					    	<textarea class="form-control" rows="4" name="customer[notes]"></textarea>
					    </div>
				  	</div> -->
				  	<!-- <div class="form-group">
					    <label for="inputPassword3" class="col-sm-2 col-md-2 control-label">Customer tags</label>
					    <div class="col-sm-10 col-md-8">
					      	<div class="select2-container select2-container-multi" id="s2id_customer-tags" style="width: 100%;"><ul class="select2-choices">  <li class="select2-search-choice">    <div>client</div>    <a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-choice">    <div>developer</div>    <a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-choice">    <div>lead</div>    <a href="#" onclick="return false;" class="select2-search-choice-close" tabindex="-1"></a></li><li class="select2-search-field">    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" id="s2id_autogen1" style="width: 34px;">  </li></ul><div class="select2-drop select2-drop-multi select2-display-none">   <ul class="select2-results">   </ul></div></div><input type="hidden" id="customer-tags" style="width:100%" value="client,developer,lead" name="customer[tags]" tabindex="-1" class="select2-offscreen">
					    </div>
				  	</div> -->
				  	<!-- <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      	<div class="checkbox">
					        	<label>
					 <input type="checkbox" name="customer[send_marketing]"> Send marketing emails
				        		</label>
					      	</div>
					    </div>
				  	</div> -->
					
										</div>
			      	</div><!-- End MODAL-body-->
					
			      	<div class="modal-footer">
					<div class="col-sm-offset-2 col-sm-10">
				 <button type="reset" class="btn btn-default btn-lg" data-dismiss="modal">Reset <i class="fa fa-refresh"></i></button>
				 <button type="submit" class="btn btn-success btn-lg">Add Customer <i class="fa fa-check"></i></button>
			    		</div>
				        	</form>
			      	</div>
			
		    </div>
	  	</div>
	</div>

<!-- End MODAL-new-customer-->

<!-- BEGIN MODAL-CARD-AUTH-->
<div class="modal fade in">
<div data-mc-modal="" class="single-box modal-widget" style="display: block; opacity: 1; transform: translateY(0px);">
<div class="modal-widget-container">
<form novalidate="" name="createForm" class="form-horizontal dialog-form ng-invalid ng-invalid-required ng-dirty">
<div class="modal-widget-header">New Gateway <a class="close-btn right transparent" href="" ng-click="dialogClose()">Close modal&gt;<i class="icon-remove white"></i></a></div>
<div class="modal-widget-body">
    <div class="section-title">Gateway Details
        <data-mc-learn-more-link href="docs/#gateways"><div class="support right"><span><a href="docs/apidoc/authorization" target="_blank" role="link">Learn More</a></span></div></data-mc-learn-more-link></div>
    <div class="details-widget-body">
        <div class="left">
            <div class="details-widget-item">
                <label class="paymentFieldLabel" for="inputAmount">Amount <span class="mandatory">*</span> <div class="tooltip-container ng-scope" data-key="authDetails.amount" data-placement="right" data-original-title="" title=""><i class="icon-info-sign"></i></div></label>

                <!-- ngIf: !multiCurrencySupported -->
                <!-- ngIf: multiCurrencySupported --><div ng-if="multiCurrencySupported" class="ng-scope">
                    <div class="currency-input-container ng-isolate-scope" amount="form.amount" currency="form.currency" mcmax="9999900" mcmin="50" autofocus="autofocus">
    <div class="cd-dropdown cd-active"><span style="z-index: 1004;">USD</span><input type="hidden" name="cd-dropdown" value="2"><ul style="height: 125px;"><li data-value="0" style="z-index: 1003; top: 25px; left: 0px; margin-left: 0px; opacity: 1; transform: none; transition: all 300ms ease; width: 45px;"><span>EUR</span></li><li data-value="1" style="z-index: 1002; top: 50px; left: 0px; margin-left: 0px; opacity: 1; transform: none; transition: all 300ms ease; width: 45px;"><span>INR</span></li><li data-value="2" style="z-index: 1001; top: 75px; left: 0px; margin-left: 0px; opacity: 1; transform: none; width: 45px; transition: all 300ms ease;"><span>USD</span></li><li data-value="3" style="z-index: 1000; top: 100px; left: 0px; margin-left: 0px; opacity: 1; transform: none; width: 45px; transition: all 300ms ease;"><span>GBP</span></li></ul></div>
    <input name="amount" type="text" class="currency-input currency-input-container ng-dirty" ng-model="amountModel" mcmin="50" mcmax="9999900" data-mc-amount="" min="1" maxlength="10" data-currencyinput="" autofocus="autofocus">
</div>
                </div><!-- end ngIf: multiCurrencySupported -->
                <div class="errors">
                    <span ng-show="createForm.amount.$error.mcMax" class="ng-binding ng-hide">Amount cannot exceed 99,999.00</span>
                    <span ng-show="createForm.amount.$error.mcMin" class="ng-binding ng-hide">Amount cannot be less than 0.50</span>
                    <span ng-show="errors.amount" class="ng-binding ng-hide"></span>
                </div>
            </div>

            <div class="details-widget-item">
                <label class="paymentFieldLabel" for="inputDescription">Description <div class="tooltip-container ng-scope" data-key="authDetails.description" data-placement="right" data-original-title="" title=""><i class="icon-info-sign"></i></div></label>
                <input id="inputDescription" type="text" ng-model="form.description" name="description" size="33" tabindex="4" class="ng-pristine ng-valid">
            </div>
        </div>
        <div class="right">

            <div class="details-widget-item">
                <label>Pay Using <div class="tooltip-container ng-scope" data-key="authDetails.paymentType" data-placement="right" data-original-title="" title=""><i class="icon-info-sign"></i></div></label>
                <div class="btn-group controls pay-by-btn-group" data-toggle="buttons-checkbox">
                    <button type="button" class="button ng-pristine ng-valid active" ng-model="paymentOption" btn-radio="'creditcard'" tabindex="2">Credit Card</button>
                    <span> or </span>
                    <button type="button" class="button ng-pristine ng-valid" ng-model="paymentOption" btn-radio="'customer'" tabindex="3">Customer Card</button>
                </div>
            </div>

            <div class="details-widget-item ng-hide" ng-show="paymentOption=='customer'">
                <div ng-hide="customers.total > 0" class="">
                    <div class="subtle form-hints pad-top"><i class="icon-warning-sign brand"></i> You must <a class="highlight" ng-click="openCreateCustomerModal()">create a new customer</a> with card details before using this option.</div>
                </div>

                <div ng-show="customers.total > 0" class="ng-hide">
                    <div>
                        <label for="customer" ng-class="{subtle: createCustomer}" class="subtle">Select Customer <span class="mandatory">*</span>
                            <div class="tooltip-container ng-scope" data-key="authDetails.selectCustomer" data-placement="right" data-original-title="" title=""><i class="icon-info-sign"></i></div>
                        </label>
                    </div>
                    <select ng-disabled="createCustomer" id="customer" name="customer" class="large-input ng-pristine ng-valid" ng-model="form.customer" ng-options="customer.id as customer.name for customer in customers.list | filter:customerFilter | orderBy:'name'" tabindex="5" disabled="disabled"><option value="" class="">Please select a customer</option></select>
                    <div class="errors">
                        <span ng-show="errors.card" class="ng-hide">Please select a gateway</span>
                    </div>
                    <div class="muted form-hints subtle" ng-class="{subtle: createCustomer}">Selecting a customer will charge the card on file for the selected customer.</div>
                </div>
            </div>

            <div ng-show="paymentOption=='creditcard'" class="">

                <div class="details-widget-item">
                    <div class="errors">
                        <span ng-show="errors.card" class="ng-binding ng-hide"></span>
                    </div>
                    <label class="paymentFieldLabel" for="inputNumber">Card Number <span class="mandatory">*</span> <div class="tooltip-container ng-scope" data-key="cardDetails.cardNumber" data-placement="right" data-original-title="" title=""><i class="icon-info-sign"></i></div></label>
                    <div>
                        <input autocomplete="off" mc-card-input="" ng-disabled="customerAlreadyCreated" id="inputNumber" type="text" name="number" ng-model="form.card" x-required="" tabindex="5" class="ng-pristine ng-invalid ng-invalid-required">
                        <div class="errors">
                            <span ng-show="errors['card.number']" class="ng-binding ng-hide"></span>
                        </div>
                    </div>
                </div>

                <div class="details-widget-item details-widget-last-item">
                    <div class="clearfix">
                        <div class="span6">
                            <label class="block-label clearfix" for="expMonth">Expiry Date (MM/YY)<span class="mandatory">*</span> <div class="tooltip-container ng-scope" data-key="authDetails.cardExpiry" data-placement="right" data-original-title="" title=""><i class="icon-info-sign"></i></div></label>

                            <input autocomplete="off" title="Credit card month expiry date" mc-number="" ng-disabled="customerAlreadyCreated" id="expMonth" name="expMonth" ng-model="form.card.expMonth" class="large-mini left pad-right ng-pristine ng-valid" tabindex="6" placeholder="MM" maxlength="2">
                            <input autocomplete="off" title="Credit card year expiry date" mc-number="" ng-disabled="customerAlreadyCreated" id="expYear" name="expYear" ng-model="form.card.expYear" class="large-mini left ng-pristine ng-valid" tabindex="7" placeholder="YY" maxlength="2">
                            <div class="errors">
                                <span ng-show="errors['card.expMonth'] &amp;&amp; !errors['card.expYear']" class="ng-binding ng-hide"></span>
                                <span ng-show="errors['card.expYear']" class="ng-binding ng-hide"></span>
                            </div>
                        </div>
                        <div class="span3">
                            <label for="inputCvc">CVC <div class="tooltip-container ng-scope" data-key="cardDetails.cvc" data-placement="right" data-original-title="" title=""><i class="icon-info-sign"></i></div></label>
                            <input autocomplete="off" mc-number="" class="input-mini ng-pristine ng-valid" ng-disabled="customerAlreadyCreated" id="inputCvc" type="text" name="cvc" ng-model="form.card.cvc" tabindex="8">
                            <div class="errors">
                                <span ng-show="errors['card.cvc']" class="ng-binding ng-hide"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div ng-show="paymentOption=='creditcard'" class="">
        <div class="section-title clickable" ng-click="createCustomer=!createCustomer;">More Details <i class="icon-caret-down"></i></div>
        <div class="add-details" slide-show="createCustomer" style="display: block; opacity: 1; transform: translateY(0px);">
            <div class="details-widget-body">
                <div class="left">
                    <div class="details-widget-item">
                        <label for="inputName">Customer Name <div class="tooltip-container ng-scope" data-key="customerDetails.name" data-placement="right" data-original-title="" title=""><i class="icon-info-sign"></i></div></label>
                        <div>
                            <input autocomplete="off" ng-disabled="customerAlreadyCreated" id="inputName" type="text" name="name" ng-model="form.card.name" tabindex="10" autofocus="" class="ng-pristine ng-valid">
                            <div class="errors">
                                <span ng-show="errors.name" class="ng-binding ng-hide"></span>
                            </div>
                        </div>
                    </div>

                    <div class="details-widget-item">
                        <label for="addressLine2">Address (line 2)</label>
                        <div>
                            <input autocomplete="off" ng-disabled="customerAlreadyCreated" id="addressLine2" type="text" name="addressLine2" ng-model="form.card.addressLine2" tabindex="12" class="ng-pristine ng-valid">
                            <div class="errors">
                                <span ng-show="errors['card.addressLine2']" class="ng-binding ng-hide"></span>
                            </div>
                        </div>
                    </div>

                    <div class="details-widget-item">
                        <label for="addressState">State</label>
                        <div>
                            <select title="Select state" ng-disabled="customerAlreadyCreated" ng-options="key as value for (key , value) in appConfig.constants.states" ng-model="form.card.addressState" name="addressState" id="addressState" tabindex="14" class="ng-pristine ng-valid"><option value="?" selected="selected"></option><option value="AK">Alaska</option><option value="AL">Alabama</option><option value="AR">Arkansas</option><option value="AZ">Arizona</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DC">District of Columbia</option><option value="DE">Delaware</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="IA">Iowa</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="MA">Massachusetts</option><option value="MD">Maryland</option><option value="ME">Maine</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MO">Missouri</option><option value="MS">Mississippi</option><option value="MT">Montana</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="NE">Nebraska</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NV">Nevada</option><option value="NY">New York</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VA">Virginia</option><option value="VT">Vermont</option><option value="WA">Washington</option><option value="WI">Wisconsin</option><option value="WV">West Virginia</option><option value="WY">Wyoming</option></select>
                            <div class="errors">
                                <span ng-show="errors['card.addressState']" class="ng-binding ng-hide"></span>
                            </div>
                        </div>
                    </div>

                    <div class="details-widget-item">
                        <label for="inputEmail">Email Address <div class="tooltip-container ng-scope" data-key="customerDetails.email" data-placement="right" data-original-title="" title=""><i class="icon-info-sign"></i></div></label>
                        <div>
                            <input autocomplete="off" ng-disabled="customerAlreadyCreated || !createCustomer" id="inputEmail" type="email" name="email" ng-model="form.email" x-required="" min="1" tabindex="16" class="ng-pristine ng-invalid ng-invalid-required ng-valid-email">
                            <div class="errors">
                                <span ng-show="errors.email" class="ng-binding ng-hide"></span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="right">

                    <div class="details-widget-item">
                        <label for="addressLine1">Address</label>
                        <div>
                            <input autocomplete="off" ng-disabled="customerAlreadyCreated" id="addressLine1" type="text" name="addressLine1" ng-model="form.card.addressLine1" tabindex="11" class="ng-pristine ng-valid">
                            <div class="errors">
                                <span ng-show="errors['card.addressLine1']" class="ng-binding ng-hide"></span>
                            </div>
                        </div>
                    </div>

                    <div class="details-widget-item">
                        <label for="addressCity">City</label>
                        <div>
                            <input autocomplete="off" ng-disabled="customerAlreadyCreated" id="addressCity" type="text" name="addressCity" ng-model="form.card.addressCity" tabindex="13" class="ng-pristine ng-valid">
                            <div class="errors">
                                <span ng-show="errors['card.addressCity']" class="ng-binding ng-hide"></span>
                            </div>
                        </div>
                    </div>

                    <div class="details-widget-item">
                        <label for="addressZip">Zip</label>
                        <div>
                            <input autocomplete="off" mc-number="" ng-disabled="customerAlreadyCreated" id="addressZip" type="text" name="addressZip" ng-model="form.card.addressZip" tabindex="15" class="ng-pristine ng-valid">
                            <div class="errors">
                                <span ng-show="errors['card.addressZip']" class="ng-binding ng-hide"></span>
                            </div>
                        </div>
                    </div>

                    <div class="details-widget-item">
                        <label for="inputName"></label>
                        <div>
                            <div class="subtle pad-top"><i class="icon-info-sign brand"></i> To create a customer and save card details please enter a customer name and email address.</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="add-details" slide-show="!createCustomer" style="opacity: 0; transform: translateY(0px); display: none;">
            <a class="highlight add-details" href="" ng-click="createCustomer=true;paymentOption='creditcard'" tabindex="9">Add customer card details</a>
        </div>
    </div>
</div>
<div class="modal-widget-footer">
    <a href="" ng-click="clearFields()" class="left clear-button">Clear Fields</a>
    <button class="large button button-primary right save-button" href="" ng-click="save()" ng-disabled="isSaveDisabled()" tabindex="17" mc-analytic="{category:'authorization', action: 'create'}">Run Authorization <i ng-show="saving" class="icon-spinner icon-spin ng-animate ng-hide-add ng-hide ng-hide-add-active"></i></button>
    <span data-ng-show="!appConfig.sessionLiveMode" class="button-warning-msg"><i class="icon-warning-sign"></i> This is a test Authorization</span>
</div>
</form>
</div>
</div>

</div>
<!-- END MODAL-CARD-AUTH-->

<!-- BEGIN MODAL-UPGRADE -->
<div class="modal fade bootbox-prompt in" id="modal-upgrade" aria-hidden="true" style="display:display: block; padding-right: 16px;"> 
<div class="modal-dialog modal-lg"> 
<div class="modal-content"> 
<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
<h1 class="modal-title"><i class="fa fa-check"></i> Unlock More Features</h1> </div> 

<div class="modal-body" style="padding: 0 20px;"> 
<style>
.form-horizontal .form-group {
    margin-right: 15px;
    margin-left: 15px;
}
.detail-view {
    border: 1px solid #eaeaea;
    padding: 10px;
}
</style>
<div id="account-billing-subscription" style="height:480px;" class="content-page current is-fixed-bar" data-title="Billing" data-route="/account/billing/subscription">

<div id="pricing" class="subscription-container col-md-12 detail-view" style="height:490px;">
		<div id="content">
			<div class="menubar">
				<div class="sidebar-toggler visible-xs">
					<i class="ion-navicon"></i>
				</div>

				<div class="page-title">
					Time to choose a plan <small>(Wizard Example)</small>
				</div>
			</div>

			<div class="content-wrapper">

				<div class="pricing-wizard">
					<h4>Simple Pricing, Wizard steps example</h4>

					<div class="step-panel active choose-plan">
						<div class="instructions">
							<strong>Please choose a plan below</strong> that best suites your needs, you can cancel your account, upgrade or downgrade any time.
						</div>

						<div class="plans">
							<div class="plan clearfix">
								<div class="price">
									$19/mo
								</div>
								<div class="info">
									<div class="name">
										Basic
									</div>
									<div class="details">
										2 people, 1 workspace, 1 GB storage
									</div>
									<div class="select">
										<i class="fa fa-check"></i>
									</div>
								</div>
							</div>
							<div class="plan clearfix">
								<div class="price">
									$29/mo
								</div>
								<div class="info">
									<div class="name">
										Studio
									</div>
									<div class="details">
										5 people, 1 workspace, 5 GB storage
									</div>
									<div class="select">
										<i class="fa fa-check"></i>
									</div>
								</div>
							</div>
							<div class="plan clearfix">
								<div class="price">
									$39/mo
								</div>
								<div class="info">
									<div class="name">
										Team
									</div>
									<div class="details">
										10 people, 1 workspace, 10 GB storage
									</div>
									<div class="select">
										<i class="fa fa-check"></i>
									</div>
								</div>
							</div>
							<div class="plan clearfix">
								<div class="price">
									$59/mo
								</div>
								<div class="info">
									<div class="name">
										Business
									</div>
									<div class="details">
										15 people, 1 workspace, 30 GB storage
									</div>
									<div class="select">
										<i class="fa fa-check"></i>
									</div>
								</div>
							</div>
							<div class="plan clearfix">
								<div class="price">
									$149/mo
								</div>
								<div class="info">
									<div class="name">
										Enterprise
									</div>
									<div class="details">
										Unlimited people, workspaces and storage
									</div>
									<div class="select">
										<i class="fa fa-check"></i>
									</div>
								</div>
							</div>

							<div class="action">
								<a href="#" class="btn btn-primary" data-step="1">
									Billing info 
									<i class="fa fa-chevron-right"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="step-panel billing">
						<div class="secure clearfix">
							<span class="lock pull-left">
								<i class="fa fa-lock"></i>
								Secure Billing Form
							</span>
							<div class="accepted-cards pull-right">
								<img src="images/credit_card_types.gif" />
							</div>
						</div>

						<form id="billing-form" class="form-horizontal" method="post" action="#" role="form">
						  	<div class="form-group">
							    <label class="col-sm-3 control-label">Name on Card</label>
							    <div class="col-sm-9">
							      <input type="text" class="form-control" placeholder="Your full name" name="customer[first_name]" />
							    </div>
						  	</div>
						  	<div class="address">
						  		<div class="form-group">
								    <label class="col-sm-3 control-label">Address</label>
								    <div class="col-sm-9">
								      	<input type="text" class="form-control" placeholder="Address" name="customer[address]" />
								    </div>
								</div>
								<div class="form-group">
								    <div class="col-sm-5 col-sm-offset-3">
								      	<input type="text" class="form-control mobile-margin-bottom" placeholder="City" name="customer[city]" />
								    </div>
								    <div class="col-sm-4">
								      	<input type="text" class="form-control" placeholder="Zip/Postal" name="customer[state]" />
								    </div>
							  	</div>
							  	<div class="form-group">
								    <div class="col-sm-5 col-sm-offset-3">
								      	<input type="text" class="form-control mobile-margin-bottom" placeholder="Country" name="customer[city]" />
								    </div>
								    <div class="col-sm-4">
								      	<input type="text" class="form-control" placeholder="State" name="customer[state]" />
								    </div>
							  	</div>
						  	</div>
						  	<div class="form-group">
							    <label class="col-sm-3 control-label">Card Number</label>
							    <div class="col-sm-9">
							      <input type="text" class="form-control" placeholder="â€¢â€¢â€¢â€¢  â€¢â€¢â€¢â€¢  â€¢â€¢â€¢â€¢  â€¢â€¢â€¢â€¢" name="customer[first_name]" />
							    </div>
						  	</div>
						  	<div class="form-group">
						  		<label class="col-sm-3 control-label">Expiration & CVC</label>
							    <div class="col-sm-5">
							      	<input type="text" class="form-control mobile-margin-bottom" placeholder="MM/YYY" name="customer[city]" />
							    </div>
							    <div class="col-sm-4">
							      	<input type="text" class="form-control" placeholder="CVC" name="customer[state]" />
							    </div>
						  	</div>
						  	
						  	<div class="instructions">
						  		Your credit card will be charged for the monthly <strong>Business plan of $59.00 USD</strong> on April 12, 2014. This will cover your subscription from: April 12, 2014 to May 12, 2014.
						  	</div>

						  	<div class="action clearfix">
						  		<a href="#" data-step="0" class="btn btn-default pull-left">
						  			<i class="fa fa-chevron-left"></i>
						  			Plans
						  		</a>
								<a href="#" class="btn btn-success pull-right">
									Start my subscription
									<i class="fa fa-chevron-right"></i>
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>




    <fieldset class="hidden billing-container">

				<div class="pricing-wizard">

					<div class="step-panel active choose-plan">
						<div class="instructions">
							<strong>Please choose a plan below</strong> that best suites your needs, you can cancel your account, upgrade or downgrade any time.
						</div>

						<div class="plans">
							<div class="plan clearfix">
								<div class="price">
									$9.95/mo
								</div>
								<div class="info">
									<div class="name">
										StartUp Plan
									</div>
									<div class="details">
										1 person, Virtual Terminal, 2,000 API calls
									</div>
									<div class="select">
										<i class="fa fa-check"></i>
									</div>
								</div>
							</div>
							<div class="plan clearfix">
								<div class="price">
									$19.95/mo
								</div>
								<div class="info">
									<div class="name">
										Standard Plan
									</div>
									<div class="details">
										5 user account, 1 Mobile POS, 5,000 API calls
									</div>
									<div class="select">
										<i class="fa fa-check"></i>
									</div>
								</div>
							</div>
							<div class="plan clearfix">
								<div class="price">
									$39/mo
								</div>
								<div class="info">
									<div class="name">
										Business Plan
									</div>
									<div class="details">
										15 users, Retail POS support, 25k API calls
									</div>
									<div class="select">
										<i class="fa fa-check"></i>
									</div>
								</div>
							</div>
							
							<div class="plan clearfix">
								<div class="price">
									$Contact Us 
								</div>
								<div class="info">
									<div class="name">
										Enterprise Plan
									</div>
									<div class="details">
										Unlimited accounts, support and API calls
									</div>
									<div class="select">
										<i class="fa fa-check"></i>
									</div>
								</div>
							</div>

							<div class="action">
								<a href="#" class="btn btn-success btn-lg" data-step="1">
									Billing info 
									<i class="fa fa-chevron-right"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="step-panel billing">
						<div class="secure clearfix">
							<span class="lock pull-left">
								<i class="fa fa-lock"></i>
								Secure Billing Form
							</span>
							<div class="accepted-cards pull-right">
								<img src="<?=branded_include('img/credit_card_types.gif');?>" />
							</div>
						</div>
<form id="billing-form" class="form-horizontal" method="post" action="<?=site_url($form_action);?>" role="form" novalidate="novalidate">
	<div class="form-body">
						  	<div class="form-group">
							    <label class="col-sm-3 control-label">Name on Card</label>
							    <div class="col-sm-9">
							      <input type="text" class="form-control" placeholder="Your full name" name="customer[first_name]" />
							    </div>
						  	</div>
						  	<div class="address">
						  		<div class="form-group">
								    <label class="col-sm-3 control-label">Address</label>
								    <div class="col-sm-9">
								      	<input type="text" class="form-control" placeholder="Address" name="customer[address]" />
								    </div>
								</div>
								<div class="form-group">
								    <div class="col-sm-5 col-sm-offset-3">
								      	<input type="text" class="form-control mobile-margin-bottom" placeholder="City" name="customer[city]" />
								    </div>
								    <div class="col-sm-4">
								      	<input type="text" class="form-control" placeholder="Zip/Postal" name="customer[state]" />
								    </div>
							  	</div>
							  	<div class="form-group">
								    <div class="col-sm-5 col-sm-offset-3">
								      	<input type="text" class="form-control mobile-margin-bottom" placeholder="Country" name="customer[city]" />
								    </div>
								    <div class="col-sm-4">
								      	<input type="text" class="form-control" placeholder="State" name="customer[state]" />
								    </div>
							  	</div>
						  	</div>
						  	<div class="form-group">
							    <label class="col-sm-3 control-label">Card Number</label>
							    <div class="col-sm-9">
							      <input type="text" class="form-control" placeholder="â€¢â€¢â€¢â€¢  â€¢â€¢â€¢â€¢  â€¢â€¢â€¢â€¢  â€¢â€¢â€¢â€¢" name="customer[first_name]" />
							    </div>
						  	</div>
						  	<div class="form-group">
						  		<label class="col-sm-3 control-label">Expiration & CVC</label>
							    <div class="col-sm-5">
							      	<input type="text" class="form-control mobile-margin-bottom" placeholder="MM/YYY" name="customer[city]" />
							    </div>
							    <div class="col-sm-4">
							      	<input type="text" class="form-control" placeholder="CVC" name="customer[state]" />
							    </div>
						  	</div>
						  	
						  	<div class="instructions">
						  		Your credit card will be charged for the monthly <strong>Business plan of $59.00 USD</strong> on April 12, 2014. This will cover your subscription from: April 12, 2014 to May 12, 2014.
						  	</div>

						  	<div class="action clearfix">
						  		<a href="#" data-step="0" class="btn btn-default pull-left">
						  			<i class="fa fa-chevron-left"></i>
						  			Plans
						  		</a>
								<a href="#" class="btn btn-success btn-lg pull-right">
									Start my subscription
									<i class="fa fa-chevron-right"></i>
								</a>
							</div>
								</div>
						</form>
					</div>

  </fieldset>
    
  </div>

  
  </div>


</div> 

<div class="modal-footer hidden"> 
<button type="button" class="btn btn-white" data-dismiss="modal">Close</button> <button type="button" class="btn btn-info">Save changes</button> 
</div> 

</div> 

</div> 
</div>
<!-- END .Modal-upgrade -->

<!-- END MODALS -->


<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<script type="text/javascript" src="//cdn.everpayinc.com/assets/js/truncate.js"></script>

<!-- <script type="text/javascript" src="//cdn.everpayinc.com/assets/js/universal.js"></script> -->

<div class="daterangepicker dropdown-menu ltr opensleft"><div class="calendar left"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_start" value=""><i class="fa fa-calendar glyphicon glyphicon-calendar"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"></div></div><div class="calendar right"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value=""><i class="fa fa-calendar glyphicon glyphicon-calendar"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"></div></div><div class="ranges"><ul><li data-range-key="Today">Today</li><li data-range-key="Yesterday">Yesterday</li><li data-range-key="Last 7 Days">Last 7 Days</li><li data-range-key="Last 30 Days">Last 30 Days</li><li data-range-key="This Month">This Month</li><li data-range-key="Last Month">Last Month</li><li data-range-key="Custom Range">Custom Range</li></ul><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" disabled="disabled" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div>




<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3HVySm47ow98HCEjXUpYcXJZRujb42t4";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->


<script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
          </script>
		  
          <script type="text/javascript">
            try {
              var pageTracker = _gat._getTracker("(UA-36810004-1)");
            pageTracker._trackPageview();
            } catch(err) {}
          </script>



<script>
  window.intercomSettings = {
    app_id: "z6ftuy9a",
    name: "Everpay Support", // Full name
    email: "support@everpayinc.com", // Email address
    created_at: 1312182000 // Signup date as a Unix timestamp
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/z6ftuy9a';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>



<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<div class="hidden" id="base_url"><?=base_url();?></div>
<div class="hidden" id="current_url"><?=current_url();?></div>
</body>
</html>