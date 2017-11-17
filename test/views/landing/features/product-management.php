<?=$this->load->view(branded_view('common/header'));?>

    <title>Balanced - Payments processing, escrow, and payouts in one simple API | Card Processing</title>
    <link rel="shortcut icon" href="https://www.everpayinc.com/favicon.ico" type="image/x-icon">
    <script async="" src="./card_process/analytics.js"></script><script type="text/javascript">var _pageStartTime=(new Date()).getTime()</script>
    <!--[if lt IE 9]>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
        <script type="text/javascript" src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <link href="./card_process/css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./card_process/root-02835be4.css" type="text/css"><script type="text/javascript" src="./card_process/jquery.min.js"></script>
    <script type="text/javascript" src="./card_process/balanced-lib.min-44d640fc.js"></script>
    <script type="text/javascript" src="./card_process/balanced.min-59007a6d.js"></script><script src="./card_process/bootstrap.min.js"></script></head><body class="layout-v4 card-processing">
<style>

#myCardCarousel {
  background: url(https://everpayinc.com/assets/img/showcase-3.jpg) no-repeat;
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
                                <h1 class="animated slideInLeft delay-2">Product Management</h1>
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
                                <h1 class="animated slideInLeft delay-2">Product Management</h1>
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
                                <h1 class="animated slideInLeft delay-2">Product Management</h1>
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



<div class="pjax-container">
<div class="bg-default">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
         
                <div class="row large-bottom-margin">
                    <div class="page-subtitle">
                      <div class="col-md-12">
                        Accept credit and debit card payments.<br>Process any U.S. or international card without a separate merchant account and gateway.
                      </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>

<div class="bg-white" id="card-process">
    <div class="container">
        <div class="row">
            <section class="card-process">
                <div class="col-md-12">
                    <h3><p>Once a card is charged, funds are placed in your <a href="https://docs.balancedpayments.com/1.1/guides/escrow/">escrow account</a> (held by Balanced). You may then pay out to your own bank account or use Balanced's <a href="https://www.everpayinc.com/payouts">Payouts solution</a> to pay your U.S. sellers.</p>
</h3>
                    <div class="process">
                        <div class="graphic"></div>
                        <p id="card_process-1">Charge your customer's debit or credit card</p>
                        <p id="card_process-2">Funds are available immediately in your escrow balance</p>
                        <p id="card_process-3-1">Collect your funds by paying out to your bank account</p>
                        <p id="card_process-3-2">Pay your sellers using Balanced's <a href="https://www.everpayinc.com/payouts">Payouts solution</a></p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<div class="bg-default" id="collecting-card-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section class="collecting-card-info">
                    <div class="box-pad-top">
                        <div class="section-title section-title-no-width">
                            <div class="title-wrapper">
                                <span>Collecting card info</span>
                            </div>
                        </div>
                        <div class="col-md-3 no-margin-left">
                            <div class="section-side-body">
                                Charge a card by collecting the card number and expiration date. Information is securely passed through <a href="https://docs.balancedpayments.com/1.1/guides/balanced-js/">balanced.js</a>, bypassing your servers and removing your need to become <a href="http://support.balancedpayments.com/hc/en-us/articles/200173030-Do-I-need-to-be-PCI-compliant-">PCI compliant</a>.
                            </div>
                            <div class="section-side-link">
                                <a href="https://support.balancedpayments.com/hc/en-us/articles/201035880-Verifications-Authorizations-and-Captures-Best-practices">View card processing best practices</a>
                            </div>
                        </div>
                        <div class="col-md-8 no-margin-left">
                            <div class="graphic"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="row" id="recurring-billing">
            <div class="col-md-12">
                <section class="recurring-billing">
                    <div class="box-pad-top">
                        <div class="section-title section-title-no-width">
                            <div class="title-wrapper">
                                <span>Recurring billing</span>
                            </div>
                        </div>
                        <div class="col-md-3 no-margin-left">
                          <div class="section-side-body">
                              Balanced's open-source, recurring payments system, <a href="https://github.com/balanced/billy">Billy</a>, allows you to schedule charges at specific times.
                          </div>
                          <div class="section-side-link">
                              <a href="http://balancedbilly.readthedocs.org/en/latest/index.html">Learn more about Billy</a>
                          </div>
                        </div>
                        <div class="col-md-8 no-margin-left">
                            <div class="graphic"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="row" id="card-authorizations">
            <div class="col-md-12">
                <section class="card-authorizations">
                    <div class="box-pad-top">
                        <div class="section-title section-title-full">
                            <div class="title-wrapper">
                                <span>Card authorizations</span>
                            </div>
                        </div>
                        <div class="col-md-3 no-margin-left">
                            <div class="section-side-body">
                                Reserve funds on a credit card for up to seven days by issuing a card authorization.
                            </div>
                            <div class="section-side-link">
                                <a href="https://docs.balancedpayments.com/1.1/guides/cardholds/">Learn more about authorization use cases such as crowdfunding</a>
                            </div>
                        </div>
                        <div class="graphic"></div>
                    </div>
                </section>
            </div>
        </div>

        <div class="row" id="card-statement-descriptor">
            <div class="col-md-12">
                <section class="card-statement-descriptor">
                    <div class="box-pad-top">
                        <div class="section-title section-title-no-width">
                            <div class="title-wrapper">
                                <span>Card statement descriptor</span>
                            </div>
                        </div>
                        <div class="col-md-3 no-margin-left">
                            <div class="section-side-body">
                                Modify the card statement soft descriptor on a per-transaction basis. Each descriptor begins with BAL* followed by your 18-character-long description.
                            </div>
                            <div class="section-side-link">
                                <a href="https://docs.balancedpayments.com/1.1/guides/credits/#bank-statement-descriptor">Learn more about setting the soft descriptor</a>
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

         <div class="row" id="chargebacks-disputes">
            <div class="col-md-12">
                <section class="chargebacks-disputes">
                    <div class="box-pad-top">
                        <div class="section-title section-title-no-width">
                            <div class="title-wrapper">
                                <span>Chargebacks &amp; Disputes</span>
                            </div>
                        </div>
                        <div class="col-md-3 no-margin-left">
                            <div class="section-side-body">
                                In the event of a chargeback, Balanced will notify you to help gather the documents necessary to fight the chargeback.
                            </div>
                            <div class="section-side-link">
                                <a href="https://support.balancedpayments.com/hc/en-us/articles/200135910-How-are-credit-card-chargebacks-and-disputes-handled-">Learn more about the chargeback process</a>
                            </div>
                        </div>
                        <div class="col-md-8 no-margin-left">
                            <div class="graphic"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        
    </div>
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