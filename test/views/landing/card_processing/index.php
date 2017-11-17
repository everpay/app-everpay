<?=$this->load->view(branded_view('common/header'));?>

<style>

#myCardCarousel {
  background: url(https://everpayinc.com/assets/app/img/showcase.jpg) no-repeat;
  height: 660px;
  margin-bottom: -10px;
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


</style>
<!--  ================================================== End Header -->
<div id="myCardCarousel" class="carousel slide" data-ride="carousel">
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
                                <h1 class="animated slideInLeft delay-2">Card Processing</h1>
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
                                <h1 class="animated slideInLeft delay-2">Card Processing</h1>
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
                                <h1 class="animated slideInLeft delay-2">Card Processing</h1>
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

<section class="how-it-works" id="how-it-works">
                    <div class="row">
                        <div class="col-md-12 content-blue med-top-padding med-bottom-padding">

  <div class="container">
                            <div class="offset1 section-title section-title-full">
                                <div class="title-wrapper">
                                    <span>How it works</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="title-icon"></div>
                            </div>
                            <div class="body-copy body3 col-md-7">
                                Everpay supports all major card brands from Visa and MasterCard to Discover and American Express. Funds are captured in U.S. currency and available for immediate access in your Everpay balance.
                            

 <div class="divide60"></div>
<div class="row">
<div class="row-fluid">

                        <div class="col-sm-12">
                            <div class="center-heading">
                        <a href="<?=site_url('pricing/');?>" class="btn border-white btn-lg">Compare Our Plans</a>

<span class="float-left" style="color:#FFF;">or</span>

                        <a href="<?=site_url('signup/');?>" class="btn border-theme btn-lg">Claim Your Account</a>
</div>
</div>
</div>
</div>
                    </div>
 </div>
</div>
                        </div>
                </section>
<div class="divide60"></div>
   <div class="container">

<div class="bg-white" id="card-process">
 
        <div class="row">
            <section class="card-process">
                <div class="col-md-12">
                    <h3><p>Once a card is charged, funds are placed in your <a href="https://everpayinc.com/docs/1.1/guides/escrow/">escrow account</a> (held by Everpay). You may then pay out to your own bank account or use Everpay’s <a href="/payouts">Payouts solution</a> to pay your sellers.</p>
</h3>
                    <div class="process">
                        <div class="graphic"></div>
                        <p id="card_process-1">Charge your customer’s debit or credit card</p>
                        <p id="card_process-2">Funds are available immediately in your escrow balance</p>
                        <p id="card_process-3-1">Collect your funds by paying out to your bank account</p>
                        <p id="card_process-3-2">Pay your sellers using Everpay’s <a href="/payouts">Payouts solution</a></p>
                    </div>
                </div>
            </section>
        </div>
    </div>


<div class="divide60"></div>
<hr>

<div class="bg-default" id="collecting-card-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
  <div class="container">
                <section class="collecting-card-info">
                    <div class="box-pad-top">
                        <div class="section-title section-title-no-width">
                            <div class="title-wrapper">
                                <span style="color:#444;">Collecting Card Info</span>
                            </div>
                        </div>
                        <div class="col-md-4 no-margin-left">
                            <div class="section-side-body">
                                Charge a card by collecting the card number and expiration date. Information is securely passed through <a href="https://everpayinc.com/docs/1.1/guides/elektropay-js/">elektropay.js</a>, bypassing your servers and removing your need to become <a href="http://everpayinc.com/support/hc/en-us/articles/200173030-Do-I-need-to-be-PCI-compliant-">PCI compliant</a>.
                            </div>
                            <div class="section-side-link">
                                <a href="https://everpayinc.com/support/hc/en-us/articles/201035880-Verifications-Authorizations-and-Captures-Best-practices">View card processing best practices</a>
                            </div>
                        </div>
                        <div class="col-md-8 no-margin-left">
                            <div class="graphic"></div>
                        </div>
                    </div>
</div>
                </section>
            </div>
        </div>

<div class="divide40"></div>

<hr>

        <div class="row" id="recurring-billing">
            <div class="col-md-12">
                <section class="recurring-billing">
                    <div class="box-pad-top">
                        <div class="section-title section-title-no-width">
                            <div class="title-wrapper">
                                <span style="color:#444;">Recurring billing</span>
                            </div>
                        </div>
                        <div class="col-md-3 no-margin-left">
                          <div class="section-side-body">
                              Everpay’s open-source, recurring payments system, <a href="https://github.com/everpay/reup">ReUp</a>, allows you to schedule charges at specific times.
                          </div>
                          <div class="section-side-link">
                              <a href="http://everpayreup.readthedocs.org/en/latest/index.html">Learn more about ReUP</a>
                          </div>
                        </div>
                        <div class="col-md-8 no-margin-left">
                            <div class="graphic"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>


<div class="divide40"></div>

<hr>
        <div class="row" id="card-authorizations">
            <div class="col-md-12">
                <section class="card-authorizations">
                    <div class="box-pad-top">
                        <div class="section-title section-title-full">
                            <div class="title-wrapper">
                                <span style="color:#444;">Card authorizations</span>
                            </div>
                        </div>
                        <div class="col-md-3 no-margin-left">
                            <div class="section-side-body">
                                Reserve funds on a credit card for up to seven days by issuing a card authorization.
                            </div>
                            <div class="section-side-link">
                                <a href="https://everpayinc.com/docs/1.1/guides/cardholds/">Learn more about authorization use cases such as crowdfunding</a>
                            </div>
                        </div>
                        <div class="graphic"></div>
                    </div>
                </section>
            </div>
        </div>


<div class="divide40"></div>
<hr>

        <div class="row" id="card-statement-descriptor">
            <div class="col-md-12">
                <section class="card-statement-descriptor">
                    <div class="box-pad-top">
                        <div class="section-title section-title-no-width">
                            <div class="title-wrapper">
                                <span style="color:#444;">Card statement descriptor</span>
                            </div>
                        </div>
                        <div class="col-md-3 no-margin-left">
                            <div class="section-side-body">
                                Modify the card statement soft descriptor on a per-transaction basis. Each descriptor begins with BAL* followed by your 18-character-long description.
                            </div>
                            <div class="section-side-link">
                                <a href="https://everpayinc.com/docs/1.1/guides/credits/#bank-statement-descriptor">Learn more about setting the soft descriptor</a>
                            </div>
                        </div>
                        <div class="col-md-8 no-margin-left">
                            <div class="graphic"></div>
                            <p class="footnote">Card statement soft descriptor max. character length: 18</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>

<div class="divide40"></div>
<hr>

         <div class="row" id="chargebacks-disputes">
            <div class="col-md-12">
                <section class="chargebacks-disputes">
                    <div class="box-pad-top">
                        <div class="section-title section-title-no-width">
                            <div class="title-wrapper">
                                <span style="color:#444;">Chargebacks &amp; Disputes</span>
                            </div>
                        </div>
                        <div class="col-md-3 no-margin-left">
                            <div class="section-side-body">
                                In the event of a chargeback, Everpay will notify you to help gather the documents necessary to fight the chargeback.
                            </div>
                            <div class="section-side-link">
                                <a href="https://balancedpayments.com/support/hc/en-us/articles/200135910-How-are-credit-card-chargebacks-and-disputes-handled-">Learn more about the chargeback process</a>
                            </div>
                        </div>
                        <div class="col-md-8 no-margin-left">
                            <div class="graphic"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

<div class="divide40"></div>
<hr>
        <div class="row" id="card-processing">
            <div class="col-md-12">
                <section class="card-processing">
                    <div class="box-pad-top">
                        <div class="pricing col-md-12 content">
                            <div class="section-title section-title-no-width">
                                <div class="title-wrapper pull-left">
                                    <span style="color:#444;">Pricing</span>
                                </div>
                            </div>
                            
              <div class="section-icon"><i class="icon-card-processing  non-interactive"></i></div>
                            
                            <div class="col-md-8 pull-right">
                              <div class="panel">
                                <div class="panel-heading main-price">

                                  
                                  <span class="percent">2.9</span>
                                  <span class="plus">+</span>
                                  

                                  
                                  <span class="cent">30</span>
                                  

                                  

                                  <span class="per">per transaction</span>
                                </div>

                                <ul class="list-group">
                                  
                                  <li class="list-group-item">
                                    <span>Foreign currency conversion</span>
                                    
                                      <span class="note">(2% fee on top of card processing rate)</span>
                                    
                                    <span class="pull-right">2%</span>
                                  </li>
                                  
                                  <li class="list-group-item">
                                    <span>Authorization hold</span>
                                    
                                    <span class="pull-right">$0</span>
                                  </li>
                                  
                                  <li class="list-group-item">
                                    <span>Refund</span>
                                    
                  <span class="note">(processing fee of 2.9% is returned, but the 30¢ is non-refundable)</span>
                                    
                                    <span class="pull-right">$0</span>
                                  </li>
                                  
                                  <li class="list-group-item">
                                    <span>Failure</span>
                                    
                                    <span class="pull-right">$0</span>
                                  </li>
                                  
                                  <li class="list-group-item">
                                    <span>Chargeback</span>
                                    
                                    <span class="pull-right">$15</span>
                                  </li>
                                  
                                </ul>
                              </div>
                              <div class="card-icons">
                                <i class="icon-american-express"></i>
                                <i class="icon-visa"></i>
                                <i class="icon-mastercard"></i>
                                <i class="icon-discover"></i>
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
﻿<?=$this->load->view(branded_view('common/footer'));?>