<?=$this->load->view(branded_view('common/header'));?>

<style>


.banner {
	overflow: hidden;
    color: #fff;
    text-align: left;
    padding-top: 10px;
    padding-bottom: 40px;
    margin-bottom: 50px;
    position: relative;
    overflow: hidden;
	min-height: 680px!important;
}

.dashboard-page .banner {
    background: url("https://everpayinc.com/assets/images/features_bkg.jpg") center center;
    background-size: cover;
    margin: 0;
    text-align: center;
	height: 655px!important;
}

.banner .container {
    position: absolute;
    width: 100%;
    top: 18%!important;
}

@media (min-width: 992px)
.dashboard-page .banner {
    min-height: 780px;
}

.dashboard-page .banner h1 {
    font-size: 4.9rem!important;
    margin-bottom: 25px;
    margin-top: 0;
	padding-left: 20px;
    color: #000;
	margin: 0 auto;
    font-weight: 300;
    text-shadow: 0px 1px 0px #eee;
}

.dashboard-page .banner h3 {
    font-size: 20px;
    max-width: 47%;
    margin-bottom: 20px;
	color: #666666;
	    text-shadow: 0px 1px 0px #eee;
	   font-weight: 300;
}

.dashboard-page .banner p {
    color: #000;
    line-height: 24px;
    margin: 0 0 20px;
    font-family: 'Open Sans', sans-serif;
    max-width: 99%;
	 display: block;
	margin-top: 15px;
    margin-bottom: 30px;
	padding: 15px;
		   font-weight: 400;
}

@media (min-width: 768px)
.dashboard-page .banner h3 {
    display: block;
}


@media (min-width: 768px)
.dashboard-page .banner h3 {
    display: block;
}

.js-intro-text {
	padding-left:20px;
}

@media (min-width: 992px)
.dashboard-page .banner .intro-text {
    position: relative;
    overflow: visible;
    text-align: left;
    margin: 0;
    z-index: 100;
}

@media (min-width: 768px)
.dashboard-page .banner .intro-text {
    max-width: 620px;
}



.dashboard-page .banner .intro-text {
    position: relative;
    overflow: visible;
    text-align: left;
    margin: 0;
    z-index: 100;
	background-color: transparent!important;
}

.dashboard-page .banner.intro-text {
    max-width: 620px;
    padding: 0px 20px;
    background-color: transparent;
    float: left;
    text-align: left!important;
}

.dashboard-page .banner .page-hero {
    text-align: center;
}


.dashboard-page .banner .btn-play:hover {
    background: rgba(255,255,255,0.3);
    -webkit-transition: .2s ease;
    transition: .2s ease;
}

.dashboard-page .banner .btn-play {
    background: rgba(255,255,255,0.2);
    width: 79px;
    height: 79px;
    border: 6px solid #fff;
    cursor: pointer;
    position: relative;
    margin:40px auto 60px;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    background-clip: padding-box;
    -webkit-box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    display: block;
    visibility: hidden;
}

.btn.btn-success:hover, a.btn.btn-success:hover {
    background-color: #ae3610;
    color: #fff;
}
.btn.btn-success:hover, a.btn.btn-success:hover {
    background-color: #ae3610;
    color: #fff;
}
@media (min-width: 768px)
.banner .btn {
    width: 420px;
}

.banner .btn {
    border: 1px solid #9585bf;
    padding: 14px 40px;
}

.btn.btn-success, a.btn.btn-success {
    background-color: #9585bf;
    color: #fff;
    border-color: transparent;
}
.btn.btn-lg, a.btn.btn-lg {
    line-height: 30px;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 15px;
}
.banner .btn {
    margin-top: 10px;
}
.btn.btn-success, a.btn.btn-success {
    background-color: #9585bf;
    color: #fff;
    border-color: transparent;
}
.btn.btn-lg, a.btn.btn-lg {
    line-height: 30px;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 15px;
}



p {
    color: #858d91;
    line-height: 24px;
    margin: 0 0 20px;
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
}

.center-heading p {
    margin-top: 10px;
}

p.sub-text {
    font-style: normal;
    font-size: 18px;
    line-height: 29px;
    font-weight: 300;
    color: #858d91!important;
}

.parallax-buttons a {
    display: inline-block;
    margin: 5px;
    margin-top: 40px;
}

#home-parallax {
    background: url('') no-repeat;
    padding: 60px 0;
}

h1.typed-text {
    color: #fff;
    text-transform: none;
    margin-bottom: 20px;
    font-weight: 700;
}

.typed-text .element {
    color: #9585bf;
    font-weight: 600;
}

.typed-cursor {
    opacity: 1;
    -webkit-animation: blink 0.7s infinite;
    -moz-animation: blink 0.7s infinite;
    animation: blink 0.7s infinite;
    color: #9585bf;
}

.graphic img.small {
    display: block;
    padding: 23px 0 1px;
    width: 95%;
    float: right;
    margin-top: 50px;
}

#apple-android-logos {
    background-image: url('https://everpayinc.com/assets/app/img/apple-android-logos.png');
    width: 116px;
    height: 56px;
    margin: auto;
    margin-top: 20px;
	padding-bottom: 30px;
	
}

#compatible-with {
    color: #666;
    font-size: 12px;
    font-weight: 600;
    text-align: center;
    line-height: 1.8em;
    margin-bottom: 20px;
margin-top: 30px;
	padding-top: 30px;
	    display: block;
}


#cta-2 h1 {
    color: #333;
    margin-bottom: 40px;
    font-weight: 400;
}

.border-theme {
    border: 2px solid #9585bf;
    color: #9585bf!important;
}

.border-theme:hover {
    background-color: #9585bf;
    border-color: #9585bf;
    color: #fff!important;
}


</style>

<div class="dashboard-page">

<div class="spinner-container" style="display: none;">
<div class="auth0-spinner"><div class="spinner"></div>
<div class="spinner-bg"></div>
</div>
</div>
     <section id="video-wrap">
            <div class="parallax-overlay"></div> 
            <a id="video" class="player" data-property="{videoURL:'https://youtu.be/Ik6WVvz7zws',containment:'#video-wrap', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>
            <div class="video-wrap-content text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                                    <h1>Grow Your Business</h1>
                    <p>
               A powerful tool to simplify payments & much more
                    </p>
					
					 <div class="purchase-now">
					<a href="<?=site_url('contact/');?>" class="btn btn-lg btn-info">Request A Quote</a>
					 &nbsp; &nbsp;
                        <a href="<?=site_url('signup/');?>" class="btn btn-lg btn-success">Claim Your Account</a>
                   
           				   </div>
					
                    <div class="purchase-now hidden">
                        <a href="<?=site_url('signup/');?>" class="btn btn-lg border-white">Claim Your Account</a>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--video section end-->



<div class="banner hidden">
<div class="container">

<div class="js-intro-text intro-text animated slideInLeft">
  <div class="row">
   <div class="col-sm-8 col-sm-offset-2">
<h1>Grow Your Business</h1>
<p>
               A simplier way to collect payments and more
                    </p>
                    <div class="purchase-now">
					<a href="<?=site_url('contact/');?>" class="btn btn-lg btn-info">Request A Quote</a>
					 &nbsp; &nbsp;
                        <a href="<?=site_url('signup/');?>" class="btn btn-lg btn-success">Claim Your Account</a>
                   
           				   </div>
					
                        </div>
                    </div>
					</div>
 
 <div class="page-hero">
 
 <div class="main-screenshot">
 
</div>

</div>

</div>

</div>
</div>

</div><!--banner section end-->


<div class="shop-services">
            <div class="container">
                <div class="row">

 <div class="col-md-3 col-sm-6">
                        <div class="shop-service-box">
                            <h4><i class="fa fa-credit-card"></i> Simple Payments</h4>
                            <p>
                              The complete solution to accept payments from anywhere in the world.
                            </p>
<a href="<?=site_url('why/');?>" class="btn btn-link btn-sm" data-analytics-action="features- pricing" data-analytics-label="ca:/">Learn more</a>
                        </div>  
                    </div><!--shop service col end-->

                    <div class="col-md-3 col-sm-6">
                        <div class="shop-service-box">
                            <h4><i class="fa fa-dollar"></i>Simple Pricing</h4>
                            <p>
                        We have no hidden fees, and never charge for card storage, reporting, or PCI-compliance. 
                            </p>
<a href="<?=site_url('how/#security-compliance');?>" class="btn btn-link btn-sm" data-analytics-action="security- compliance" data-analytics-label="ca:/">Learn more</a>
                        </div>  
                    </div><!--shop service col end-->
                   
                    <div class="col-md-3 col-sm-6">
                        <div class="shop-service-box">
                            <h4><i class="fa fa-cogs"></i>Simple API's</h4>
                            <p>
                             A developers dreamland, designed for social platforms, startups & enterprises alike. 
                            </p>
<a href="<?=site_url('docs/');?>" class="btn btn-link btn-sm" data-analytics-action="features- pricing" data-analytics-label="ca:/">Learn more</a>
                        </div>  
                    </div><!--shop service col end-->


                    <div class="col-md-3 col-sm-6">
                        <div class="shop-service-box">
                            <h4><i class="fa fa-truck"></i>Simple Support</h4>
                            <p>
                     Our experts are standing by to answer your questions. 
                            </p>
<a href="<?=site_url('support/');?>" class="btn btn-link btn-sm" data-analytics-action="support" data-analytics-label="ca:/support">Get some</a>
                        </div>  
                    </div><!--shop service col end-->

                </div>
            </div>
        </div>

            <div class="divide50"></div>
			
<section id="home-parallax" class="parallax" data-stellar-background-ratio="0.5" style="background-position: 0% 1055.5px;">
            <div class="container">
			  <div class="center-heading">
              <h1 class="typed-text wow animated fadeIn animated" data-wow-duration="700ms" data-wow-delay="100ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 100ms;color:#444;"><strong><span class="element" data-elements="Simple Payments Acceptance">Payments </span><span class="typed-cursor">|</span>
                With A Global Reach</strong>
                    </h1>
					</div>
					
			<div class="row">	
                    <div class="col-sm-5 left">
                        <div class="no-padding-inner">
                          <img src="<?=branded_include('img/elektroswipe-app-icon.png');?>"> 
                        </div>
                    </div>
				<div class="col-sm-6 margin30 right">
				
				<h3 class="wow animated fadeInDownfadeInRight animated margin30" style="visibility: visible;"></h3>
				 <div class="divide20"></div>
   <p class="lead sub-text">In addition to international payment methods like Visa, MasterCard and PayPal, choose from over 80 other alternative payment methods based on your customer’s preference and location.&nbsp; Because more payment options equals more success.</p>

   <p class="lead sub-text">Also our dynamic currency conversion feature allows your customers to pay in their native currency while you get paid in yours.</p>
<p></p>

 <span class="parallax-buttons">
 
                    <a href="<?=site_url('why/');?>" class="btn border-black btn-lg">Learn More</a>
                    <a href="<?=site_url('signup/');?>" class=" btn btn-success btn-lg">Get Started</a>
                </span>	
</div>

</div>

<div id="rates-and-fees" class="no-padding-inner margin30">
	<div class="col-md-12 margin30">
		
			 <div class="center-heading">
			<h1 class="typed-text wow animated fadeIn animated" data-wow-duration="700ms" data-wow-delay="100ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 100ms;color:#444;"><strong><span class="element" data-elements="Simple Payments Acceptance">Low Fees </span>
                 With No Strings Attached</strong></h1>
				</div>
				<div class="row">
			<div class="col-md-4 col-sm-6">
					
					<h3 class="">Low service fee</h3>
					
						 <p class="lead sub-text">You can get a low merchant service fee of 2.95% per transaction and $1.00 charge for a Everpay transactions</p>
				</div>
				<div class="col-md-4 col-sm-6">
					<h3 class="">No contract</h3>
						 <p class="lead sub-text">There is no minimum contract term with Everpay.</p>
				</div>
				<div class="col-md-4 col-sm-6">
					<h3 class="">Cost per month</h3>
					 <p class="lead sub-text">$75 <em>one-time</em> per swiper and $10 per month.</p>
				</div>
			
		</div>
	</div>
</div>

            </div>
        </section>
<section id="cta-2">
            <div class="container">
                <h1>Solve your payments problem today.</h1>
				
                <a href="//everpayinc.com/why" class="btn border-black btn-lg">See How Do It</a>
                <a href="//everpayinc.com/signup" class="btn border-theme btn-lg">Claim Account</a>
            </div>
        </section>
		
		
<div class="divide50"></div>

<section id="home-parallax" class="parallax" data-stellar-background-ratio="0.5" style="background-position: 0% 1055.5px;">
            <div class="container">
			  <div class="center-heading">
              <h1 class="typed-text wow animated fadeIn animated" data-wow-duration="700ms" data-wow-delay="100ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 100ms;color:#444;"><strong><span class="element" data-elements="Simple Payments Acceptance">Invoicing </span><span class="typed-cursor">|</span>
                Made Super Simple</strong>
                    </h1>
					</div>
					
				<div class="col-sm-12">
			<div class="row">	
			
                    <div class="col-sm-1"></div>
				<div class="col-sm-5 margin30 left">
				<h3 class="wow animated fadeInDownfadeInRight animated margin30" style="visibility: visible;"></h3>
				 <div class="divide40"></div>
   <p class="lead sub-text">Create, send and get PAID With Everpay's <b>Finvoice</b> advanced features & support. 10 beautiful invoice templates to choose from, customize invoice colors, email clients payment links or attach PDF's. Choose from 30+ payment gateways, Multiple currencies supported including Bitcoin, Alerts and notifications when invoices are paid, plus tons of advanced features to help you get paid quicker!</p>
<p></p>

 <span class="parallax-buttons">
 
                    <a href="<?=site_url('how/');?>" class="btn border-black btn-lg">Learn More</a>
                    <a href="<?=site_url('signup/');?>" class=" btn btn-success btn-lg">Get Started</a>
</span>

               </div>


                    <div class="col-sm-5 right">
                       <div class="graphic">
						 <img src="<?=branded_include('img/imac-small.png');?>" class="small"> 
                        </div>
                    </div>
					
					</div>

                    <div class="col-sm-1"></div>					

</div>
            </div>
        </section>
		
		
		
<div class="divide50"></div>

<hr>

<section id="home-parallax" class="parallax" data-stellar-background-ratio="0.5" style="background-position: 0% 1055.5px;">
            <div class="container">
			
                <div class="col-sm-8 col-sm-offset-2">
			  <div class="center-heading">
              <h1 class="typed-text wow animated fadeIn animated" data-wow-duration="700ms" data-wow-delay="100ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 100ms;color:#444;"><strong><span class="element" data-elements="Get Your Mobile Payments Started">Simple </span><span class="typed-cursor">|</span>
                Mobile Payments</strong>
                    </h1>
					 <span class="center-line"></span>
                        <p class="lead sub-text wow animated fadeIn animated" data-wow-duration="700ms" data-wow-delay="300ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 300ms;">
Everpay’s innovative technology detects whether your customers are on a PC, mobile or tablet.
                        </p>
					</div>
					</div>
					
					<div class="col-sm-12">
			<div class="row">	
			
                    <div class="col-sm-5 left">
                       <div class="graphic" style="padding:1px 15px 30px 40px;">
						 <img src="<?=branded_include('img/swipe-iphone_ok.png');?>" class="small" style="margin-top:-5px;"> 
                        </div>
						 <div class="divide40"></div>
						<div id="compatible-with">
        ESwipe is compatible with Apple and Android devices.
      </div>
	  						<div id="apple-android-logos"></div>
                    </div>
					
				<div class="col-sm-7 margin30 right">
				<h3 class="wow animated fadeInDownfadeInRight animated margin30" style="visibility: visible;"></h3>
			
   <p class="lead sub-text"><strong>Never miss a sale again!</strong> Transform your mobile device into a secure credit card terminal. Get a free credit card swiper with your approved account. </p>
<p class="lead sub-text">Mobile InApp Payments is an embedded Software Development Kit (SDK) for mobile in-app payments.  As this module becomes a native part of the application, it eliminates the need to open a new web browser for payments.</p>

 <span class="parallax-buttons">
 
                    <a href="<?=site_url('why/');?>" class="btn border-black btn-lg">Learn More</a>
                    <a href="<?=site_url('signup/');?>" class=" btn btn-success btn-lg">Get Started</a>
</span>

               </div>

					
					</div>

</div>
            </div>
        </section>
		<div class="intro-text-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="animated slideInDown">Already Have A Merchant Account?
                        </h4>

                        <p>
                          Use our commerce gateway and have access to multiple processors.
                        </p>                   
                    </div>
                    <div class="col-sm-4">
                        <a href="<?=site_url('signup/');?>" class="btn border-white btn-lg">Connect It Now</a>
                    </div>
                </div>
            </div>
        </div>
			

            <div class="divide50"></div>

<div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="center-heading">
                        <h1 class="typed-text wow animated fadeIn animated" data-wow-duration="700ms" data-wow-delay="100ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 100ms;color:#444;"><strong><span class="element">Master </span> Your Business</strong></h1>
                        <span class="center-line"></span>
                        <p class="lead sub-text wow animated fadeIn animated" data-wow-duration="700ms" data-wow-delay="300ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 300ms;">
If you already have a website or a store front, you'll likely have everything you need to get up and running in just a few minutes.
                        </p>
                    </div>
                </div>
            </div>
            <div class="divide70"></div>
            <div class="row">
                <div class="col-md-4 col-sm-12 margin30">
                    <div class="service-box-4 wow animated fadeIn animated" data-wow-duration="700ms" data-wow-delay="100ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 100ms;">
                        <div class="service-ico">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="service-text">
                            <h4>Merchant Solutions</h4>
                            <p>
                            Everpay is your payments platform for almost any type of business.
                            </p>
     <p><a href="<?=site_url('#');?>">More info <i class="fa fa-angle-right"></i></a></p>
                        </div>
                    </div><!--service box-->
                </div><!--service 4 col end-->
                <div class="col-md-4 col-sm-12 margin30">
                    <div class="service-box-4 wow animated fadeIn animated" data-wow-duration="700ms" data-wow-delay="200ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 200ms;">
                        <div class="service-ico">
                            <i class="fa fa-image"></i>
                        </div>
                        <div class="service-text">
                            <h4>Invoicing Solutions</h4>
                            <p>
                              So easy, Add customer info, send out payment link, get paid!
                            </p>
                            <p><a href="<?=site_url('how/');?>">More info <i class="fa fa-angle-right"></i></a></p>
                        </div>
                    </div><!--service box-->
                </div><!--service 4 col end-->
                <div class="col-md-4 col-sm-12 margin30">
                    <div class="service-box-4 wow animated fadeIn animated" data-wow-duration="700ms" data-wow-delay="300ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 300ms;">
                        <div class="service-ico">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="service-text">
                            <h4>Analytic Solutions</h4>
                            <p>
                           All the tools, from transaction history, statements and logs.
                            </p>
                            <p><a href="<?=site_url('why/#analytics');?>">More info <i class="fa fa-angle-right"></i></a></p>
                        </div>
                    </div><!--service box-->
                </div><!--service 4 col end-->
               
 <div class="col-md-4 col-sm-12 margin30">
                    <div class="service-box-4 wow animated fadeIn animated" data-wow-duration="700ms" data-wow-delay="400ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 400ms;">
                        <div class="service-ico">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div class="service-text">
                            <h4>Compliance Solutions</h4>
                            <p>
                             Everpay provides a safe and secure environment that goes beyond industry standards.
                            </p>
                            <p><a href="<?=site_url('how/');?>">More info <i class="fa fa-angle-right"></i></a></p>
                        </div>
                    </div><!--service box-->
                </div><!--service 4 col end-->
                <div class="col-md-4 col-sm-12 margin30">
                    <div class="service-box-4 wow animated fadeIn animated" data-wow-duration="700ms" data-wow-delay="500ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 500ms;">
                        <div class="service-ico">
                            <i class="fa fa-credit-card"></i>
                        </div>
                        <div class="service-text">
                            <h4>Payment Solutions</h4>
                            <p>
                            Accept all major forms of payment from around the globe all without switching providers.
                            </p>
              <p><a href="<?=site_url('how/');?>">More info <i class="fa fa-angle-right"></i></a></p>
                        </div>
                    </div><!--service box-->
                </div><!--service 4 col end-->
                <div class="col-md-4 col-sm-12 margin30">
                    <div class="service-box-4 wow animated fadeIn animated" data-wow-duration="700ms" data-wow-delay="600ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 600ms;">
                        <div class="service-ico">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <div class="service-text">
                            <h4>Gateway Solutions</h4>
                            <p>
                        Connect your merchant account with our Elektropay Gateway and start doing some commerce.
                            </p>
               <p><a href="<?=site_url('why/');?>">More info <i class="fa fa-angle-right"></i></a></p>
                        </div>
                    </div><!--service box-->
                </div><!--service 4 col end-->

<div class="col-md-4 col-sm-12 margin30">
                    <div class="service-box-4 wow animated fadeIn animated" data-wow-duration="700ms" data-wow-delay="400ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 400ms;">
                        <div class="service-ico">
                            <i class="fa fa-code"></i>
                        </div>
                        <div class="service-text">
                            <h4>Developer Solutions</h4>
                            <p>
                           Integrate with 100+ of the top payment processors,identity services and social platforms.
                            </p>
                            <p><a href="https://everpay.3scale.net">More info <i class="fa fa-angle-right"></i></a></p>
                        </div>
                    </div><!--service box-->
                </div><!--service 4 col end-->
                <div class="col-md-4 col-sm-12 margin30">
                    <div class="service-box-4 wow animated fadeIn animated" data-wow-duration="700ms" data-wow-delay="500ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 500ms;">
                        <div class="service-ico">
                            <i class="fa fa-mobile"></i>
                        </div>
                        <div class="service-text">
                            <h4>Mobile Solutions</h4>
                            <p>
                        Download the ElektroSwipe Credit Card Terminal and enjoy it on your iPhone or Android Device.
                            </p>
                            <p><a href="<?=site_url('why/');?>">More info <i class="fa fa-angle-right"></i></a></p>
                        </div>
                    </div><!--service box-->
                </div><!--service 4 col end-->
                <div class="col-md-4 col-sm-12 margin30">
                    <div class="service-box-4 wow animated fadeIn animated" data-wow-duration="700ms" data-wow-delay="600ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 600ms;">
                        <div class="service-ico">
                            <i class="fa fa-share-alt"></i>
                        </div>
                        <div class="service-text">
                            <h4>Marketing Solutions</h4>
                            <p>
            Extend your marketing reach by leveraging the most popular communication channels.
                            </p>
                            <p><a href="<?=site_url('how/');?>">More info <i class="fa fa-angle-right"></i></a></p>
                        </div>
                    </div><!--service box-->
                </div><!--service 4 col end-->

            </div>
        </div>


<div class="intro-text-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h4 class="animated slideInDown">Everpay Is Making Payments Simple
                        </h4>

                        <p>
                          Everpay enables businesses with more ways for their customers to pay.
                        </p>                   
                    </div>
                    <div class="col-sm-4">
                        <a href="<?=site_url('signup/');?>" class="btn border-white btn-lg">Sign Up Now</a>
                    </div>
                </div>
            </div>
        </div>
		


        <section class="testimonials parallax" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="center-heading">
                            <h2>What Our Users Are Saying</h2>
                            <span class="center-line"></span>
                        </div>
                    </div>                   
                </div><!--center heading row-->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div id="testi-carousel" class="owl-carousel owl-spaced">
                            <div>
                                <img src="<?=branded_include('img/customer-1.jpg');?>" class="img-responsive customer-img" alt="">
                                <h4>
                                    <i class="fa fa-quote-left"></i> It was such a hassle trying to find the right merchant account for my business, but after signing up with Everpay, I found that they really understood our business model and offered us multiple solutions!
                                </h4>
                                <p>-Louis</p>
                            </div><!--testimonials item like paragraph-->
                            <div>
                                <img src="<?=branded_include('img/customer-2.jpg');?>" class="img-responsive customer-img" alt="">
                                <h4>
                                    <i class="fa fa-quote-left"></i>  In the island of Jamaica, there is not a lot of options for merchant accounts, after hearing about Everpay from a friend, I signed up online and was doing business the same day!
                                </h4>
                                <p>-James</p>
                            </div><!--testimonials item like paragraph-->
                            <div>
                                <img src="<?=branded_include('img/customer-3.jpg');?>" class="img-responsive customer-img" alt="">
                                <h4>
                                    <i class="fa fa-quote-left"></i> The Elektropay gateway by Everpay is one of the most easiest to use, I just added my products and starting taking orders minutes after!
                                </h4>
                                <p>-Jessica</p>
                            </div><!--testimonials item like paragraph-->
                        </div>
                    </div>
                </div>
            </div>
        </section><!--testimonials-->
<div class="divide70"></div>

<section class="services-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
           <div class="center-heading">
                        <h1 class="wow animated fadeIn animated" data-wow-duration="700ms" data-wow-delay="100ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 100ms;">Looking </strong> <strong>For More Features?</h1>
                        <span class="center-line"></span>
                        <p class="lead sub-text wow animated fadeIn animated" data-wow-duration="700ms" data-wow-delay="300ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 300ms;">
Easily customizable payment solutions to suit your needs, allows you to process multiple payment types, create invoices on the fly, comes with a no hassle mobile POS and works with most major payment processors.
                        </p>
                    </div>
                </div>
          
            <div class="divide70"></div>
                                      
                </div><!--center heading row-->
                <div class="row">
                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeInUp animated" data-wow-duration="700ms" data-wow-delay="100ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 100ms;">
                            <div class="services-box-icon">
                                <i class="fa fa-refresh"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Recurring Billing</h4>
                                <p>
                  Everpay makes recurring and subscription-based customer billing painfully easy.
                                </p>

                            <a href="/features/recurring-billing/">More info <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div><!--services box-->
                    </div><!--services col-->
                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeInUp animated" data-wow-duration="700ms" data-wow-delay="200ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 200ms;">
                            <div class="services-box-icon">
                                <i class="fa fa-barcode"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Product Management</h4>
                                <p>
                        Retail and online synced seamlessly, manage locations, update stock, change products.
                                </p>
<a href="how/">More info <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div><!--services box-->
                    </div><!--services col-->
                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeInUp animated" data-wow-duration="700ms" data-wow-delay="300ms" style="visibility: visible; -webkit-animation-duration: 700ms; -webkit-animation-delay: 300ms;">
                            <div class="services-box-icon">
                                <i class="fa fa-ticket"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Coupon Management</h4>
                                <p>
                         Easily add coupons to your payment forms and offer discounts to your customers.
                                </p>
<a href="how/">More info <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div><!--services box-->
                    </div><!--services col-->

                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="400ms" style="visibility: hidden; -webkit-animation-duration: 700ms; -webkit-animation-delay: 400ms; -webkit-animation-name: none;">
                            <div class="services-box-icon">
                                <i class="fa fa-shield"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Fraud Prevention</h4>
                                <p>
                 Protect your store with the all-in-one Fraud Prevention Platform provided by Subuno.
                                </p>
<a href="how/#fraud-prevention/">More info <i class="fa fa-angle-right"></i></a>                            </div>
                        </div><!--services box-->
                    </div><!--services col-->
                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="500ms" style="visibility: hidden; -webkit-animation-duration: 700ms; -webkit-animation-delay: 500ms; -webkit-animation-name: none;">
                            <div class="services-box-icon">
                                <i class="fa fa-code-fork"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Multiple Integrations</h4>
                                <p>
                              One single hub to connect, collect, manage, route your customer data and payment processors.
                                </p>
<a href="how/">More info <i class="fa fa-angle-right"></i></a>                            </div>
                        </div><!--services box-->
                    </div><!--services col-->
                    <div class="col-md-4 col-sm-6 margin20">
                        <div class="services-box wow animated fadeInUp" data-wow-duration="700ms" data-wow-delay="600ms" style="visibility: hidden; -webkit-animation-duration: 700ms; -webkit-animation-delay: 600ms; -webkit-animation-name: none;">
                            <div class="services-box-icon">
                                <i class="fa fa-mail-forward"></i>
                            </div><!--services icon-->
                            <div class="services-box-info">
                                <h4>Payup Checkout</h4>
                                <p>
                         Everpay's Payup offers an easy but customizable payment flow that works for you.
                                </p>
<a href="why/">More info <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div><!--services box-->
                    </div><!--services col-->
                </div><!--services row-->
            </div>
        </section>

<!--clients carousel-->

 </section><!--services with the showcase mockups-->
        <section id="clients-carousel">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                      <div class="center-heading">
                            <h2>Processor Certifications</h2>
                            <span class="center-line"></span>
                            <p class="lead">
                            We add new processors and functionalities frequently; please contact us if you need particular functions or the processor you would like to be added. 
                            </p>
                        </div>
                    </div>                   
                </div><!--center heading row-->
                <div id="clients-slider">       
          <div class="item"><a href="#"><img src="<?=branded_include('img/processors/firstdata.png');?>" alt=""></a></div>
         <div class="item"><a href="#"><img src="<?=branded_include('img/processors/tsys.png');?>" alt=""></a></div>
         <div class="item"><a href="#"><img src="<?=branded_include('img/processors/global.png');?>" alt=""></a></div>
         <div class="item" style="margin-top: 20px;"><a href="#"><img src="<?=branded_include('img/processors/rbs.png');?>" alt=""></a></div>
        <div class="item"><a href="#"><img src="<?=branded_include('img/processors/elavon.png');?>" alt=""></a></div>
                </div>
            </div>
        </section><!--clients carousel end-->




<section id="cta-1">
            <div class="container">
                <h1>Solve your payments problem today.</h1>
                <a href="//everpayinc.com/signup" class="btn border-white btn-lg">Get Started</a>
            </div>
        </section>
<?=$this->load->view(branded_view('common/footer'));?>