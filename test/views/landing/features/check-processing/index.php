<?=$this->load->view(branded_view('common/header'));?>

<style rel="stylesheet">

.navbar-inverse {
   background-color: #05101b!important;
}

.banner {
color: #fff;
text-align: center;
padding-top: 0px;
padding-bottom: 1px;
margin-bottom: 1px;
position: relative;
overflow: hidden;
background-color: #05101b;
background: linear-gradient(180deg,#05101b 0%,#05101b 200%);
padding: 0px;
margin-top: -30px;
border-bottom: 1px solid rgba(255,255,255,0.05);
}

.banner .container {
position: absolute;
width: 100%;
top: 28%;
}

.banner .carousel-indicators {
bottom: 0%;
}

#myCheckCarousel {
	  background: url('https://everpayinc.com/assets/img/showcase-2.jpg') no-repeat;
	  
background-color: #05101b;
  height: 680px;
  margin-bottom: 20px;
}

.slide-text {
  margin-top: 180px;
}

section p, section ul {
  font: inherit;
  line-height: 20px;
  color: #444;
  margin-top: 20px;
  margin-right: 20px;
}

.carousel-inner {
  margin-bottom: 25px;
}

section .title-icon {
  background: url(https://everpayinc.com/assets/images/pricing_icons-2x-b0ee865a.png) no-repeat;
  width: 225px;
  height: 190px;
  background-position: -25px -225px;
  background-size: 225px;
}

</style>
<!--  ================================================== End Header -->
<div id="myCheckCarousel" class="carousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
            <!--<ol class="carousel-indicators">
                <li data-target="#myCardCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCardCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCardCarousel" data-slide-to="2" class="active"></li>
            </ol>-->   
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="item item-c-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center slide-text">
                                <p class="animated slideInLeft delay-1">Just Real Simple </p>
                                <div class="divide15"></div>
                                <h1 class="animated slideInLeft delay-2">Check Processing</h1>
                                <div class="divide15"></div>

<p class="animated slideInLeft delay-3"><a href="#how-it-works" class="jumbotron-icon"><i class="fa fa-chevron-down fa-3"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div><!--item-->

                <div class="item item-c-slide active left">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center slide-text">
                                <p class="animated slideInLeft delay-1">Just Real Simple</p>
                                <div class="divide15"></div>
                                <h1 class="animated slideInLeft delay-2">Checks By Phone</h1>
                                <div class="divide15"></div>
              <p class="animated slideInLeft delay-3"><a href="#how-it-works" class="jumbotron-icon"><i class="fa fa-chevron-down fa-3"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div><!--item-->
                <div class="item item-c-slide next left">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center slide-text">
                                <p class="animated slideInLeft delay-1">Just Real Simple</p>
                                <div class="divide15"></div>
                                <h1 class="animated slideInLeft delay-2">Checks By Mail</h1>
                                <div class="divide15"></div>
  <p class="animated slideInLeft delay-3"><a href="#how-it-works" class="jumbotron-icon"><i class="fa fa-chevron-down fa-3"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div><!--item-->
            </div><!--carousel inner-->
            <!-- Carousel nav -->
            <!--<a class="carousel-control left" href="#myCardCarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control right" href="#myCardCarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>-->
        </div>

<div class="pjax-container">
<div class="bg-default">


<section class="how-it-works" id="how-it-works">
<div class="row">
<div class="col-md-12 content-gold med-top-padding med-bottom-padding">
<div class="col-offset-1 section-title section-title-full">
<div class="container">
<h2 class="title-wrapper"><span>How it works</span></h2>
</div>

<div class="col-md-4">
<div class="title-icon"></div>
</div>

<div class="body-copy body3 col-md-8">ACH Debits are submitted to the ACH Network, a processing system that handles bank-to-bank payments. Everpay manages the transaction between the merchant and their customers.</div>
</div>

<div class="divide60"></div>
<div class="row">
<div class="row-fluid">

                        <div class="col-sm-12">
                            <div class="center-heading">
                        <a href="<?=site_url('pricing/');?>" class="btn border-white btn-lg">Compare Our Plans</a>

<span class="float-left" style="color:#FFF;">or</span>

                        <a href="<?=site_url('signup/');?>" class="btn border-black btn-lg">Claim Your Account</a>
</div>
</div>
</div>
</div>


</div>

</section>
</div>
</div>


         </div>     
      </div>

</div>
</div>


<div class="bg-white" id="how-it-works-diagram">

<div class="row">
<section class="how-it-works">

<div class="container">
<div class="col-md-12 step-boxes">
<a><div class="box box-active" data-step="1"><h1>1.</h1><p>Customer gives authorization to the merchant to debit his account</p></div></a> 
<a><div class="box" data-step="2"><h1>2.</h1><p>Merchant passes debit request to Everpay</p></div></a> 
<a><div class="box" data-step="3"><h1>3.</h1><p>Everpay submits debit to the ODFI</p></div></a> 
<a><div class="box" data-step="4"><h1>4.</h1><p>ODFI contacts the Federal Reserve</p></div></a> 
<a><div class="box" data-step="5"><h1>5.</h1><p>Federal Reserve notifies the RDFI</p></div></a> 
<a><div class="box box-last" data-step="6"><h1>6.</h1><p>RDFI transfers funds to ODFI</p></div></a></div>
</section>
</div>

<div class="row">
<section>

 <div class="divide60"></div>
<div class="med-bottom-margin">
<div class="container">
<div class="row">
<div class="col-md-12">
<div id="how-it-works-carousel" class="carousel slide">
<div class="carousel-inner"><div class="item active" data-step="1">
<div class="carousel-caption">
<p></p>
<p>The customer provides bank account information on the merchant's<br>website and authorizes you to debit his account.</p></div>
<img src="https://everpayinc.com/assets/app/images/ach_debits_flow_1-01-2x-4e4c3da2.png" alt="Step 1"></div>
<div class="item" data-step="2"><div class="carousel-caption"><p></p>
<p>Bank account information is tokenized and the debit request<br>is passed from the merchant to Everpay’s servers.</p></div><img src="https://everpayinc.com/assets/app/images/ach_debits_flow_2-01-2x-7d452d42.png" alt="Step 2"></div>
<div class="item" data-step="3"><div class="carousel-caption"><p></p>
<p>Everpay submits debit instructions to the ODFI, the Originating<br>Depository Financial Institution, who is making the debit request.</p></div>
<img src="https://everpayinc.com/assets/app/images/ach_debits_flow_3-01-2x-e21fcf02.png" alt="Step 3"></div>
<div class="item" data-step="4"><div class="carousel-caption"><p></p>
<p>The ODFI sends debit instructions<br>to the Federal Reserve.</p></div>
<img src="https://everpayinc.com/assets/app/images/ach_debits_flow_4-01-2x-b952c3ca.png" alt="Step 4"></div>
<div class="item" data-step="5"><div class="carousel-caption"><p></p>
<p>The Federal Reserve notifies the RDFI, the Receiving<br>Depository Financial Institution, of the debit authorization.</p></div><img src="https://everpayinc.com/assets/app/images/ach-debits/ach_debits_flow_5-01-2x-2c5647ec.png" alt="Step 5"></div>
<div class="item" data-step="6"><div class="carousel-caption"><p></p>
<p>The RDFI moves funds to the ODFI’s bank account. Funds are now available in escrow.<br>The marketplace may wish to settle funds to the seller using <a href="https://everpayinc.com/docs/1.1/guides/credits/">Everpay’s payout service</a>.</p></div>
<img src="https://everpayinc.com/assets/app/images/ach_debits_flow_6-01-2x-d04a6aed.png" alt="Step 6"></div></div>
<a class="carousel-control left" href="#how-it-works-carousel" data-slide="prev">
<i class="icon-arrow-backward-dashboard"></i></a> 
<a class="carousel-control right" href="#how-it-works-carousel" data-slide="next">
<i class="icon-arrow-forward-dashboard"></i></a><ol class="carousel-indicators"><li data-target="#how-it-works-carousel" data-slide-to="0" class="active"></li><li data-target="#how-it-works-carousel" data-slide-to="1"></li><li data-target="#how-it-works-carousel" data-slide-to="2"></li><li data-target="#how-it-works-carousel" data-slide-to="3"></li><li data-target="#how-it-works-carousel" data-slide-to="4"></li><li data-target="#how-it-works-carousel" data-slide-to="5"></li></ol></div></div>
</div></div></div>

</section>
</div>
</div></div>

<div class="bg-default" id="payment-schedule">
<div class="container"><div class="row"><div class="col-md-12"><section class="payment-schedule"><div class="box-pad-top"><div class="section-title section-title-full"><div class="title-wrapper"><span>Payment schedule</span></div></div><div class="col-md-3 section-description">
<div class="section-side-body">Everpay will batch ACH debits for submission each weekday. The ACH network operates only on banking days, so submission will not occur on bank holidays.</div></div><div class="col-md-8 pull-right"><div class="schedule-times"><div class="title">ACH Debit Submission Times</div><div class="col-md-3 box"><h2>Mon</h2><h1>3:30</h1><h3>pm Pacific</h3></div><div class="col-md-3 box"><h2>Tue</h2><h1>3:30</h1><h3>pm Pacific</h3></div><div class="col-md-3 box"><h2>Wed</h2><h1>3:30</h1><h3>pm Pacific</h3></div><div class="col-md-3 box"><h2>Thu</h2><h1>3:30</h1><h3>pm Pacific</h3></div><div class="col-md-3 box box-last"><h2>Fri</h2><h1>3:30</h1><h3>pm Pacific</h3></div><div class="clear"></div></div><div class="holidays"><table border="1" class="table"><thead><tr><th colspan="4">Bank Holidays (2014)</th></tr></thead><tbody><tr><td class="first">New Year's Day</td><td>Jan 1</td><td class="first">Labor Day</td><td>Sep 1</td></tr><tr><td class="first">Martin Luther King, Jr's Birthday</td><td>Jan 20</td><td class="first">Columbus Day</td><td>Oct 13</td></tr><tr><td class="first">Washington's Birthday</td><td>Feb 17</td><td class="first">Veterans Day</td><td>Nov 11</td></tr><tr><td class="first">Memorial Day</td><td>May 26</td><td class="first">Thanksgiving Day</td><td>Nov 27</td></tr><tr><td class="first">Independence Day</td><td>Jul 4</td><td class="first">Christmas Day</td><td>Dec 25</td></tr></tbody></table></div></div></div></section></div></div><div class="row" id="bank-account-verification"><div class="col-md-12"><section class="bank-account-verification"><div class="box-pad-top"><div class="section-title section-title-full"><div class="title-wrapper"><span>Bank account verification</span></div></div><div class="col-md-3 section-description"><div class="section-side-body">To debit a bank account, Balanced needs to verify it through a micro-verification process. You can manage the procedure though the Balanced API without directing customers off your website. To minimize ACH debit failures, follow our best practices guide and example forms for collecting payment information.</div><div class="section-side-link"><a href="https://balancedpayments.zendesk.com/entries/22773060-ACH-Debits-Best-Practices">View best practices for ACH Debits</a></div></div><div class="graphic"></div></div></section></div></div>


<div class="row" id="payment-status">
<div class="col-md-12">
<section class="payment-status"><div class="box-pad-top"><div class="section-title section-title-full"><div class="title-wrapper"><span>Payment status</span></div></div><div class="col-md-3 section-description"><div class="section-side-body">Track the status of the ACH debit throughout its lifecycle.</div></div><div class="graphic payment-status pull-right"></div><div class="legend col-md-8 pull-right"><p><span class="key">Pending:</span>ACH debit is submitted to Everpay.</p><p><span class="key">Succeeded:</span>A “succeeded” status is displayed as the expected state of the debit 3–4 business days after debit submission; however, there is no immediate confirmation regarding the success of the debit.</p><p><span class="key">Failed:</span>If the debit fails, Everpay will be notified in 3–7 business days. The status will update from “Pending” to “Failed” or “Succeeded” to “Failed” depending on when the failed notice is received.</p></div></div>
</section></div></div>

<div class="row" id="payment-status"><div class="col-md-12">
<section class="payment-status"><div class="box-pad-top"><div class="section-title section-title-full"><div class="title-wrapper"><span>ACH debit refund status</span></div></div><div class="col-md-3 section-description"><div class="section-side-body">The status of an ACH debit refund is updated throughout its lifecycle.</div></div><div class="graphic refunding-a-payment pull-right"></div><div class="legend col-md-8 pull-right"><p><span class="key">Pending:</span>ACH debit refund is submitted to Everpay.</p><p><span class="key">Succeeded:</span>A “succeeded” status is displayed as the expected state of the refund one day after refund submission; however, there is no immediate confirmation regarding the success of the refund.</p>
<p><span class="key">Failed:</span>If the refund fails, Everpay will be notified in 1–4 business days. The status will update from “pending” to “failed” or “succeeded” to “failed” depending on when the failed notice is received.</p></div></div></section></div></div><div class="row" id="bank-statement-description"><div class="col-md-12"><section class="bank-statement-description"><div class="box-pad-top"><div class="section-title section-title-full"><div class="title-wrapper"><span>Bank statement descriptor</span></div></div><div class="col-md-3 section-description"><div class="section-side-body">Modify the bank statement<br>soft descriptor on a<br>per-transaction basis.</div><div class="section-side-link"><a href="https://docs.balancedpayments.com/current/overview#soft-descriptors">Learn more about setting<br>the soft descriptor</a></div></div><div class="col-md-8 pull-right"><div class="graphic"></div><p class="footnote">Bank statement soft descriptor max. character length: 14</p></div></div></section></div></div><div class="row" id="chargebacks-disputes"><div class="col-md-12"><section class="chargebacks-disputes"><div class="box-pad-top"><div class="section-title section-title-full"><div class="title-wrapper"><span>Chargebacks &amp; Disputes</span></div></div><div class="col-md-3 section-description"><div class="section-side-body">In the event of a chargeback, Everpay will notify you to help gather the documents necessary to fight the chargeback.</div><div class="section-side-link"><a href="https://everpayinc.com/support/hc/en-us/articles/200135910-How-are-credit-card-chargebacks-and-disputes-handled-">Learn more about the<br>chargeback process</a></div></div><div class="col-md-8 pull-right"><div class="graphic"></div></div></div></section></div></div>

<div class="row" id="ach-debits">
<div class="col-md-12">
<section class="ach-debits"><div class="box-pad-top">
<div class="pricing col-md-12 content">
<div class="section-title section-title-full">
<div class="title-wrapper pull-left"><span>Pricing</span></div>
</div>
<div class="col-md-3">
<div class="section-icon"><i class="icon-ach-debit non-interactive"></i></div></div>
<div class="col-md-8 pull-right">
<div class="panel">
<div class="panel-heading main-price"><span class="percent">1</span> <span class="plus">+</span> 
<span class="cent">30</span> 
<span class="per">per transaction ($5 cap)</span></div>
<ul class="list-group">
<li class="list-group-item">
<span>Micro-deposit verification</span> 
<span class="pull-right">$0</span></li>
<li class="list-group-item"><span>Refund</span> 
<span class="note">(processing fee of 1% is returned, but the 30¢ is non-refundable)</span> 
<span class="pull-right">$0</span></li><li class="list-group-item"><span>Failure</span> 
<span class="pull-right">$0</span></li><li class="list-group-item"><span>Chargeback</span> 
<span class="pull-right">$15</span></li>
</ul>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>


<div class="divide60"></div>

</div>
<section id="cta-1" style="margin-bottom: -25px;">
            <div class="container">
                <h1>Solve your payments problem today.</h1>
                <a href="//everpayinc.com/signup" class="btn border-white btn-lg">Get Started</a>
            </div>
        </section>
?<?=$this->load->view(branded_view('common/footer'));?>