<?=$this->load->view(branded_view('cp/header'), array('head_files' => '
<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/formmapper.js') . '"></script>')); ?>
  
<script type="text/javascript" src="<?=branded_include('js/jquery.payment.js');?>"></script>

<style type="text/css">
/* Reset
---------------------------------- */
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big,
cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd,
ol, ul, li, fieldset, form, label, input, select, legend, table, caption, tbody, tfoot, thead, tr, th, td, hr, button
{margin:0; padding:0; border:0; outline:0; font-size:100%; vertical-align: baseline; background:transparent; box-sizing:border-box;}
ol, ul {list-style:none;}
h1, h2, h3, h4, h5, h6, li {line-height:100%;}
blockquote, q {quotes:none;}
table {border-collapse:collapse; border-spacing:0;}
input, select, textarea, button {font-family:inherit; font-size:1em;}
textarea {overflow:auto;}

.label {
    text-shadow: none !important;
    /* font-size: 12px; */
    font-weight: 300;
    padding: 5px 6px 5px 6px;
    font-family: "Open Sans", sans-serif;
    border-radius: 3px!important;
}

#sidebar-flat .current-user .name span {
    position: relative;
    top: 1px;
    left: 5px;
    color: #eeeeee;
}

    .has-error input {
      border-width: 2px;
    }

    .validation.text-danger:after {
      content: 'Validation failed';
    }

    .validation.text-success:after {
      content: 'Validation passed';
    }
	
.plan-mouseover .plan-name {
  background-color: #4e9a06 !important;
}
 
.btn-plan-select {
  padding: 8px 25px;
  font-size: 18px;
}
.linksColumn {
  float: left;
  margin-right: 10px;
  margin-left: -20px;
  width: 280px;
  line-height: 18px;
  padding: 20px;
  font-size: 14px;
  color: #fefefe;
}
.linksColumn h3 {
margin-top: 10px;
margin-bottom: 10px;
color: #FFFFFF;
}

.linksColumn ul, ol {
  margin-top: 0;
  margin-left: -10px;
  list-style-type: none;
}

.linksColumn li {
color: #FFFFFF;
font-weight: 500;
  font-size: 13px;
  list-style-type: none;
}

.pageColumn {
  float: left;
  margin-right: 10px;
  margin-left: -20px;
  width: 480px;
  line-height: 18px;
  padding: 20px;
  font-size: 14px;
  color: #fefefe;
}
.pageColumn h2 {
margin-top: 1px;
margin-bottom: 10px;
color: #FFFFFF;
}

.pageColumn ul, ol {
  margin-top: 0;
  margin-left: -20px;
  margin-right: 40px;
  list-style-type: none;
}

.pageColumn li {
color: #FFFFFF;
font-weight: 500;
  font-size: 14px;
  list-style-type: none;
}


.xe-widget.xe-counter, .xe-widget.xe-counter-block .xe-upper, .xe-widget.xe-progress-counter .xe-upper {
  background: #fff;
  padding: 28px;
  line-height: 1;
  display: inline-block!important;
  width: 100%;
  margin-bottom: 20px;
  overflow: inherit;
}

.profile-avatar {
  text-align: center;
  padding-top: 2px;
  padding-bottom: 10px;
  background-position: 50% 50%;
  background-size: cover;
  position: relative;
}
.avatar-name {
  text-align: center;
font-weight: 700;
color: #999;
}

.main-details {
  border-bottom: 1px solid #DFE2E9;
}


.avatar .social i {
  font-size: 19px;
  margin: 0 5px;
  color: #444;
}

.modal .modal-header h2 {
  font: normal normal normal 32px "Proxima Nova Semi Bold",arial,sans-serif;
  line-height: 0px;
  color: #000;
  padding: 0;
  margin: 0;
  margin-top: -25px;
}


#account #content #panel.profile form {
  width: 95%!important;
  margin-top: 10px!important;
}

.fa-lg {
  font-size: 24px !important;
}




#pricing .pricing-wizard .step-panel.active {
  opacity: 1;
  z-index: 2;
}

#pricing .pricing-wizard .choose-plan .plans .plan:hover .info .details {
  color: #73ACE9;
}

#pricing .pricing-wizard .choose-plan .plans .plan .info .details {
  color: #888;
}

#epagination span:hover, .active {
 background: #FFF!important;
  color: #999;
  cursor: pointer;
}

#pricing .pricing-wizard .choose-plan .plans .action {
  text-align: center!important;
  margin-top: 40px;
}


#pricing .pricing-wizard .choose-plan .plans .plan .current-plan {
  font-size: 16px;
padding-left: 10px;
}


.price {
  background: none repeat scroll 0 0 transparent!important;
  cursor: pointer;
  display: block;
  float: left;
  letter-spacing: 0.2px;
  margin: 0 4px 0 0!important;
  padding: 5px 10px;
  font-size: 2.6em!important;
}


.plans {
top: -20px;
}

.price:hover {
  background: transparent;
 color: #444!important;
}

.details {
  padding: 0 2px;
  margin-top: 5px;
}

/* Form
---------------------------------- */
label {
  position: absolute;
  top: 0;
  left: -9999px;
  width: 1px;
  height: 1px;
  overflow: hidden;
}


input {
  margin-bottom: 10px;
  border: 1px solid #CCC;
  width: 95%;
  padding: 15px 15px 15px 60px;
}

input:focus {
  outline: 0;
  background-color: #FFFFF2 !important;
}

#month,
#year {
  float:left;
  width: 50%;
  padding-left: 15px;
}

#month {
  border-right: none;
  border-radius: 3px 0 0 3px;
}

#year {
  border-radius: 0 3px 3px 0;
}

input[type="text"], input[type="password"] {
    border: 1px solid #D0D0D0;
    color: #444;
    font-size: 16px;
    height: 20px;
    line-height: 20px;
    outline: 0 none;
    margin-bottom: 4px;
    box-sizing: content-box;
}

.current-plan {
	margin-top:6px;
	text-align: center;
}


/* 
Inspired by http://dribbble.com/shots/890759-Ui-Kit-Metro/attachments/97174
*/
*, *:before, *:after {
  /* Chrome 9-, Safari 5-, iOS 4.2-, Android 3-, Blackberry 7- */
  -webkit-box-sizing: border-box; 

  /* Firefox (desktop or Android) 28- */
  -moz-box-sizing: border-box;

  /* Firefox 29+, IE 8+, Chrome 10+, Safari 5.1+, Opera 9.5+, iOS 5+, Opera Mini Anything, Blackberry 10+, Android 4+ */
  box-sizing: border-box;
}

.btn-nav {
    background-color: #fff;
    border: 1px solid #e0e1db;
    -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
    -moz-box-sizing: border-box;    /* Firefox, other Gecko */
    box-sizing: border-box;         /* Opera/IE 8+ */
}
.btn-nav:hover {
    color: #9585bf;
    cursor: pointer;
    -webkit-transition: color 1s; /* For Safari 3.1 to 6.0 */
    transition: color 1s;
}
.btn-nav.active {
    color: #9585bf;
    padding: 2px;
	border-top: 6px solid #9585bf;
	border-bottom: 6px solid #9585bf;
    border-left: 0;
    border-right: 0;
    box-sizing:border-box;
    -moz-box-sizing:border-box;
    -webkit-box-sizing:border-box;
    -webkit-transition: border 0.3s ease-out, color 0.3s ease 0.5s;
    -moz-transition: border 0.3s ease-out, color 0.3s ease 0.5s;
    -ms-transition: border 0.3s ease-out, color 0.3s ease 0.5s; /* IE10 is actually unprefixed */
    -o-transition: border 0.3s ease-out, color 0.3s ease 0.5s;
    transition: border 0.3s ease-out, color 0.3s ease 0.5s;
    -webkit-animation: pulsate 1.2s linear infinite;
    animation: pulsate 1.2s linear infinite;
}
.btn-nav.active:before {
	content: '';
	position: absolute;
	border-style: solid;
	border-width: 6px 6px 0;
	border-color: #9585bf;
	display: block;
	width: 0;
	z-index: 1;
	margin-left: -12px;
	top: 0;
	left: 50%;
}
.btn-nav .glyphicon {
    padding-top: 10px;
	font-size: 40px;
}
.btn-nav.active p {
    margin-bottom: 5px;
}
@-webkit-keyframes pulsate {
 50% { color: #000; }
}
@keyframes pulsate {
 50% { color: #000; }
}
@media (max-width: 480px) {
    .btn-group {
        display: inline-block !important;
        float: none !important;
    }
}
@media (max-width: 600px) {
    .btn-nav .glyphicon {
        padding-top: 8px;
        font-size: 26px;
    }
}

.label-default {
color: #fff1important;
}
</style>



<!-- BEGIN PROFILE PAGE -->
<div id="pricing">

<div id="account">

<div class="clearfix" style="height:20px;"></div>
<div id="sticker">

    <div class="row">
	<div class="row-fluid">
		<div class="btn-group btn-group-justified">
            <div class="btn-group col-lg-2 col-md-2 col-sm-3 col-xs-3">
                <a href="<?= site_url('account'); ?>">
				<button type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-user"></span>
    			    <p>Profile</p>
	                </button></a>
            </div>
             <div class="btn-group col-lg-2 col-md-2 col-sm-3 col-xs-3">
                   <a href="<?= site_url('account/billing'); ?>">
				   <button type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-credit-card"></span>
    			    <p>Billing</p>
                </button></a>
            </div>
             <div class="btn-group col-lg-2 col-md-2 col-sm-3 col-xs-3">
                  <a href="<?= site_url('account/notifications'); ?>"> 
				  <button type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-comment"></span>
    			    <p>Notifications</p>
                </button></a>
            </div>
             <div class="btn-group col-lg-2 col-md-2 col-sm-3 col-xs-3">
                  <a href="<?= site_url('account/support'); ?>"> 
				  <button type="button" class="btn btn-nav">
                    	<span class="glyphicon glyphicon-question-sign"></span>
    			    <p>Support</p>
                </button></a>
            </div>
             <div class="btn-group col-lg-2 col-md-2 col-sm-3 col-xs-3">
                 <a href="<?= site_url('#'); ?>">  
				 <button type="button" class="btn btn-nav active">
                    <span class="glyphicon glyphicon-new-window"></span>
    			    <p>Upgrade</p>
                </button></a>
            </div>
             <div class="btn-group col-lg-2 col-md-2 col-sm-3 col-xs-3">
                  <a href="<?= site_url('account/close'); ?>"> 
				  <button type="button" class="btn btn-nav">
                    <span class="glyphicon glyphicon-remove-sign"></span>
    			    <p>Close</p>
                </button></a>
            </div>
        </div>
	</div>

</div><!-- END/ .col-md-12-->

</div><!-- END/ #page-menu-->

	
<div class="pricing-wizard">
					<div class="step-panel active choose-plan">
						<div class="instructions">
							<strong>Please choose a plan below</strong> that best suites your needs, you can cancel your account, upgrade or downgrade any time.
							</div>
						
<div class="current-plan field">
<div class="label label-default">Your current selection is the: <b><?= $this->user->Get('plan_name') ?></b> plan at ($<?=$plans[$this->user->Get('plan_id')]['amount']?>/month)</h5></div>
			
				</div>
    <div class="row-fluid pricing-table pricing-four-column hidden">
        <div class="col-md-4 plan">
          <div class="plan-name-bronze">
            <h2>Bronze</h2>
           	<div class="price"> <span>$8.99 / Month</span>   </div>
          </div>
          <ul>
            <li class="plan-feature">10 Users</li>
            <li class="plan-feature">5TB Disk Space</li>
            <li class="plan-feature"><a href="#" class="btn btn-primary btn-plan-select"><i class="icon-white icon-ok"></i> Select</a></li>
          </ul>
        </div>
        <div class="col-md-4 plan">
          <div class="plan-name-silver">
            <h2>Silver <span class="badge badge-warning">Popular</span></h2>
           	<div class="price"> <span><strike>$10.99</strike>   <font color="red">$9.99 - <span class="label label-warning">Sale</span></font></span>   </div>
          </div>
          <ul>
            <li class="plan-feature">50 Users</li>
            <li class="plan-feature">10TB Disk Space</li>
            <li class="plan-feature"><div class="select"><i class="fa fa-check"></i></div></li>
          </ul>
        </div>
        <div class="col-md-4 plan">
          <div class="plan-name-gold">
            <h2>Gold</h2>
         	<div class="price">   <span>$15.99 / Month</span>   </div>
          </div>
          <ul>
            <li class="plan-feature">Unlimited Users</li>
            <li class="plan-feature">Unlimited Space</li>
            <li class="select"><i class="fa fa-check"></i></li>
          </ul>
        </div>
    </div>
						
						
						<div class="plans">
							
							<div class="col-md-3">
							<div class="plan clearfix">
								<div class="price">
									$29/mo
								</div>
								<div class="info">
									<div class="name">
										Studio
									</div>
									<div class="details">
										<ul>
            <li class="plan-feature">10 Users</li>
            <li class="plan-feature">5TB Disk Space</li>
            <li class="plan-feature">Free Apps</li>
          </ul>
										</div>
									
									<div class="select">
										<i class="fa fa-check"></i>
									</div>
								</div>
							</div></div>
							
							<div class="col-md-3">
							<div class="plan clearfix">
								<div class="price">
									$39/mo
								</div>
								<div class="info">
									<div class="name">
										Team
									</div>
									<div class="details">
										<ul>
            <li class="plan-feature">10 Users</li>
            <li class="plan-feature">5TB Disk Space</li>
            <li class="plan-feature">Free Apps</li>
          </ul>
		  </div>
									<div class="select">
										<i class="fa fa-check"></i>
									</div>
								</div>
							</div></div>
							<div class="col-md-3">
							<div class="plan clearfix">
								<div class="price">
									$59/mo
								</div>
								<div class="info">
									<div class="name">
										Business
									</div>
								<div class="details">
										<ul>
            <li class="plan-feature">10 Users</li>
            <li class="plan-feature">5TB Disk Space</li>
            <li class="plan-feature">Free Apps</li>
          </ul>
		  </div>
									<div class="select">
										<i class="fa fa-check"></i>
									</div>
								</div>
							</div></div>
							<div class="col-md-3">
							<div class="plan clearfix">
								<div class="price">
									$149/mo
								</div>
								<div class="info">
									<div class="name">
										Enterprise
									</div>
									<div class="details">
										<ul>
            <li class="plan-feature">10 Users</li>
            <li class="plan-feature">5TB Disk Space</li>
            <li class="plan-feature">Free Apps</li>
          </ul>
		  </div>
									<div class="select">
										<i class="fa fa-check"></i>
									</div>
								</div>
							</div></div>

							<div class="action">
								<a href="#" class="section__btn section__btn--round" data-step="1">
									Enter Your Billing info 
									<i class="fa fa-chevron-right"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="step-panel billing col-md-8">
						<div class="secure clearfix">
							<span class="lock pull-left">
								<i class="fa fa-lock"></i>
								Secure Billing Form
							</span>
							<div class="accepted-cards pull-right">
								<img src="<?= branded_include('images/credit_card_types.gif'); ?>" />
							</div>
						</div>

	<form id="billing-form" class="form-horizontal" method="POST" action="#" role="form" novalidate autocomplete="on">

      <div class="form-group">
        <label for="cc-number" class="control-label">Card number formatting <small class="text-muted">[<span class="cc-brand"></span>]</small></label>
        <input id="cc-number" type="tel" class="input-lg form-control cc-number mobile-margin-bottom" autocomplete="cc-number" placeholder="â€¢â€¢â€¢â€¢ â€¢â€¢â€¢â€¢ â€¢â€¢â€¢â€¢ â€¢â€¢â€¢â€¢" required>
      </div>

      <div class="form-group">
        <label for="cc-exp" class="control-label">Card expiry formatting</label>
        <input id="cc-exp" type="tel" class="input-lg form-control cc-exp mobile-margin-bottom" autocomplete="cc-exp" placeholder="â€¢â€¢ / â€¢â€¢" required>
      </div>

      <div class="form-group">
        <label for="cc-cvc" class="control-label">Card CVC formatting</label>
        <input id="cc-cvc" type="tel" class="input-lg form-control cc-cvc mobile-margin-bottom" autocomplete="off" placeholder="â€¢â€¢â€¢" required>
      </div>

<div class="box">
      <form class="form" action="/" method="POST">
        <fieldset>
          <div class="fieldLine">
            <label for="holdername">Name on card</label>
            <input type="text" id="holdername" placeholder="Name on card" name="holdername" required>
          </div>

          <div class="fieldLine">
            <label for="card">Credit Card Number</label>
            <input type="text" id="card" placeholder="Credit card number" name="card" required>
          </div>

          <div class="fieldLine">
            <label for="month">Expiration Date</label>
            <input id="month" type="text" placeholder="MM" name="month" required>
            <input id="year" type="text" placeholder="YYYY" name="year" required>
          </div>
        </fieldset>

     </form>
    </div>


							<div class="form-group">
							    <label class="col-sm-3 control-label">Name on Card</label>
							    <div class="col-sm-9">
							      <input type="text" class="form-control" placeholder="Your full name" name="customer[first_name]" />
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
							
						  	<div class="address hidden">
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
			

<div class="clearfix" style="height:15px;"></div>

<script type="text/javascript">
		$(function () {
			var $plans = $(".plans .plan");
			$plans.click(function () {
				$plans.removeClass("selected");
				$(this).addClass("selected");
			});

			var $step_triggers = $("[data-step]");
			var $step_panels = $(".step-panel");
			var $tabs = $(".steps .step");

			$step_triggers.click(function (e) {
				e.preventDefault();
				var go_to_step = $(this).data("step");
				
				$step_panels.removeClass("active");
				$step_panels.eq(go_to_step).addClass("active");

				$tabs.removeClass("active");
				$tabs.eq(go_to_step).addClass("active");

				if (go_to_step === 1) {
					$("#billing-form input:text:eq(0)").focus();
				}
			});
		});
	</script>
	
 <script>
    jQuery(function($) {
      $('[data-numeric]').payment('restrictNumeric');
      $('.cc-number').payment('formatCardNumber');
      $('.cc-exp').payment('formatCardExpiry');
      $('.cc-cvc').payment('formatCardCVC');

      $.fn.toggleInputError = function(erred) {
        this.parent('.form-group').toggleClass('has-error', erred);
        return this;
      };

      $('form').submit(function(e) {
        e.preventDefault();

        var cardType = $.payment.cardType($('.cc-number').val());
        $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
        $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
        $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
        $('.cc-brand').text(cardType);

        $('.validation').removeClass('text-danger text-success');
        $('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');
      });

    });
  </script>



<div id="panel" class="profile hidden">
 <div class="row">	
        <!-- BEGIN PANEL-->
        <div class="row-fluid">

 <div class="widget-body margin-top-10">


<div class="pricing-wizard">
		<div class="step-panel active choose-plan">
<div class="current-plan field">
		<p class="lead"><label><b>Your Current Plan:</b></label> <?= $this->user->Get('plan_name') ?>  ($<?=$plans[$this->user->Get('plan_id')]['amount']?>/month)</p>
			</div>
			<div class="instructions">
				<strong>Please choose a plan below</strong> that best suites your needs, you can cancel your account, upgrade or downgrade any time.
			</div>

			<div class="plans">
				<div class="plan clearfix">
					<div class="price">
						$9/mo
					</div>
					<div class="info">
						<div class="name">
							Start Up
						</div>
						<div class="details">
							1 user, 3% per transaction fee
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
							Standard
						</div>
						<div class="details">
							5 users, 1.2% per transaction fee
						</div>
						<div class="select">
							<i class="fa fa-check"></i>
						</div>
					</div>
				</div>
				<div class="plan clearfix">
					<div class="price">
						$49/mo
					</div>
					<div class="info">
						<div class="name">
							Premium
						</div>
						<div class="details">
							10 users, no transaction fees
						</div>
						<div class="select">
							<i class="fa fa-check"></i>
						</div>
					</div>
				</div>
				<div class="plan clearfix">
					<div class="price">
						$199/mo
					</div>
					<div class="info">
						<div class="name">
							Enterprise
						</div>
						<div class="details">
							Unlimited users and no transaction fees
						</div>
						<div class="select">
							<i class="fa fa-check"></i>
						</div>
					</div>
				</div>

				<div class="action">
					<a href="#" class="btn btn-success btn-lg" data-step="1">
						Upgrade Now 
						<i class="fa fa-check"></i>
					</a>
				</div>
			</div>
		</div>

		<div class="step-panel billing">
			<div class="secure clearfix">
				<span class="lock pull-left">
					<i class="fa fa-lock"></i>
					Secure
				</span>
				<div class="accepted-cards pull-right">
					<img alt="Credit card types" src="<?= branded_include('img/credit_card_types.gif'); ?>">
				</div>
			</div>

<form id="billing-form" class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=site_url($form_action);?>">
			  	<div class="form-group">
				    <label class="col-sm-3 control-label">Name on Card</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="Your full name" name="customer[first_name]">
				    </div>
			  	</div>
			  	<div class="address">
			  		<div class="form-group">
					    <label class="col-sm-3 control-label">Address</label>
					    <div class="col-sm-9">
					      	<input type="text" class="form-control" placeholder="Address" name="customer[address]">
					    </div>
					</div>
					<div class="form-group">
					    <div class="col-sm-5 col-sm-offset-3">
					      	<input type="text" class="form-control mobile-margin-bottom" placeholder="City" name="customer[city]">
					    </div>
					    <div class="col-sm-4">
					      	<input type="text" class="form-control" placeholder="Zip/Postal" name="customer[state]">
					    </div>
				  	</div>
				  	<div class="form-group">
					    <div class="col-sm-5 col-sm-offset-3">
					      	<input type="text" class="form-control mobile-margin-bottom" placeholder="Country" name="customer[city]">
					    </div>
					    <div class="col-sm-4">
					      	<input type="text" class="form-control" placeholder="State" name="customer[state]">
					    </div>
				  	</div>
			  	</div>
			  	<div class="form-group">
				    <label class="col-sm-3 control-label">Card Number</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" placeholder="••••  ••••  ••••  ••••" name="customer[first_name]">
				    </div>
			  	</div>
			  	<div class="form-group">
			  		<label class="col-sm-3 control-label">Expiration &amp; CVC</label>
				    <div class="col-sm-5">
				      	<input type="text" class="form-control mobile-margin-bottom" placeholder="MM/YYY" name="customer[city]">
				    </div>
				    <div class="col-sm-4">
				      	<input type="text" class="form-control" placeholder="CVC" name="customer[state]">
				    </div>
			  	</div>
			  	
			  	<div class="instructions">
			  		Your credit card will be charged for the monthly <strong>Business plan of $59.00 USD</strong> on April 12, 2014. This will cover your subscription from: April 12, 2014 to May 12, 2014.
			  	</div>

			  	<div class="action clearfix">
			  		<a href="#" data-step="0" class="btn btn-default new pull-left">
			  			<i class="fa fa-chevron-left"></i>
			  			Plans
			  		</a>
					<a href="#" class="btn btn-success new pull-right">
						Start my subscription
						<i class="fa fa-chevron-right"></i>
					</a>
				</div>
			
		</div>
	</div>
</div><!--/widget-body-->
</form><!--/form-->

<div class="clearfix"></div>


  </div><!-- END/ #Pricing -->

</div><!--/#panel2-->
</div><!--/widget-body-->





<!-- richard -->
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[
    var pwdwidget = new PasswordWidget('repeatpwddiv','repeatpwd');
    pwdwidget.enableGenerate = false;
    pwdwidget.enableShowStrength=false;
    pwdwidget.enableShowStrengthStr =false;
    pwdwidget.MakePWDWidget(false);
    
    var pwdwidget = new PasswordWidget('newpwddiv','newpwd');
    pwdwidget.MakePWDWidget();
        
    var frmvalidator  = new Validator("changepwd");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("newpwd","req","Please provide a new password");
    

// ]]>
</script>

<script>
var activeEl = 2;
$(function() {
    var items = $('.btn-nav');
    $( items[activeEl] ).addClass('active');
    $( ".btn-nav" ).click(function() {
        $( items[activeEl] ).removeClass('active');
        $( this ).addClass('active');
        activeEl = $( ".btn-nav" ).index( this );
    });
});
</script>
<!-- anooj -->

<script>
$(function(){
	$("#sticker").sticky({topSpacing:60});
});
</script>


</div><!--/.col-md-l2-->
 
  </div><!-- END/ #account-->

 </div><!-- END/ #pricing-->
 
<?=$this->load->view(branded_view('cp/footer'));?>