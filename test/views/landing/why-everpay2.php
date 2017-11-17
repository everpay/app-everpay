<?=$this->load->view(branded_view('common/header'));?>



<style rel="stylesheet">
@media screen and (min-width: 992px)
.banner {
    padding-top: 160px;
}
@media (min-width: 992px)
.why-page .banner {
    min-height: 655px!important;
}
@media (min-width: 768px)
.why-page .banner {
    padding-top: 160px;
}

.why-page .banner {
    background: url("/assets/app/img/bgs/video-preview.png") center center;
    background-size: cover;
    margin: 0;
    text-align: center;
	height: 655px!important;
}



.hero {
    background: url("/assets/img/bgs/hero-homepage-md.jpg") center center;
    background-size: cover;
    margin: 0;
    text-align: center;
	height: 655px!important;
}

.hero .caption {
    padding: 57px 0;
	top: 22%;
}


.hero .caption {
    position: relative;
    z-index: 2;
    width: 100%;
    padding: 38px 0 23px;
    color: #fff;
    text-align: center;
    background:  transparent;
}

.hero .caption h1 {
    font-size: 3.6em!important;
    line-height: 44px;
    margin: 0 0 44px 0;
    color: #fff;
	text-shadow: 0px 1px 0px #000;
}

.hero .caption h2 {
    font-size: 2.8em!important;
    line-height: 36px;
    margin: 0 0 36px 0;
    color: #fff;
	text-shadow: 0px 1px 0px #000;
}



.hero .caption p {
    font-size: 20px!important;
    line-height: 20px;
	max-width: 620px;
	    margin: 0px auto;
    text-align: center;
    color: #fff;
	text-shadow: 0px 1px 0px #000;
	margin-bottom: 10px;
}


.hero .caption h3 {
    font-size: 2.2em;
    font-weight: 400;
    color: #eee;
	text-shadow: 0px 1px 0px #000;
    letter-spacing: normal;
    line-height: 24px;
	padding-bottom:10px;
    margin-bottom: 10px;
}


.center-title-block ul {
    text-align: left;
    max-width: 590px;
    padding: 0;
    margin: auto;
    margin-top: 10px;
    margin-bottom: 20px;
	list-style: none!important;
}

.center-title-block ul li {
    text-align: left;
    max-width: 590px;
    padding: 0;
    color: #444;
	text-shadow: 0px 1px 0px #000;
    margin: auto;
	font-weight:600;
    margin-top: 5px;
    margin-bottom: 5px;
	    font-size: 1.1em!important;
    line-height: 24px;
	list-style: none!important;
}

.center-title-block h4 {
    text-align: left;
    padding: 0;
    color: #05101b;
	text-transform: ;
	text-shadow: 0px 1px 0px #000;
    margin: auto;
	font-weight:600;
    margin-top: 5px;
    margin-bottom: 5px;
    max-width: 680px;
	    font-size: 1.4em!important;
} 





.center-title-block p {
    max-width: 780px;
	    text-align: center;
}

.why-page .center-title-block p {
    font-size: 16px;
    color: #9b9b9b;
    font-weight: 300;
    margin-top: 10px;
    margin: auto;
}

.why-page .banner h1 {
    font-size: 3.6em!important;
    line-height: 44px;
    margin: 0 0 44px 0;
    color: #666;
}

@media (min-width: 768px)
.why-page .banner p {
    font-size: 24px;
}

.why-page .banner p {
    max-width: 100%;
    font-size: 24px;
    font-weight: 300;
    color: #666;
    margin: 0;
    visibility: hidden;
}

.why-page .banner .btn-play:hover {
    background: rgba(255,255,255,0.3);
    -webkit-transition: .2s ease;
    transition: .2s ease;
}
.why-page .banner .btn-play {
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
.why-page .banner .btn {
    width: auto;
}
.why-page .banner .btn {
    border: 1px solid #9585bf;
    padding: 14px 40px;
    visibility: hidden;
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


.why-page section.demo-steps {
    background: #f1f1f1;
    text-align: center;
    padding: 50px 0;
}


@media (min-width: 768px)
.why-page .center-title-block {
    padding: 0;
}

.why-page .center-title-block {
    max-width: 960px;
    padding: 0 15px;
}

@media (min-width: 768px)
.why-page .center-title-block p {
    font-size: 16px;
}
.why-page .center-title-block p {
    font-size: 16px;
    color: #9b9b9b;
    font-weight: 300;
    margin-top: 10px;
}
.center-title-block p {
    color: #798291;
    font-size: 1.3rem;
    margin-top: 0;
    color: rgba(0,0,0,0.5);
}

.why-page section.demo-steps .center-title-block h3 {
    margin-top: 10px;
    font-size: 1.9em;
    font-weight: 400;
	color:#9585bf!important;
    letter-spacing: normal;
    line-height: 24px;
    margin-bottom: 10px!important;
}

.why-page section.demo-steps .center-title-block h3 {
    margin-top: 10px;
}
@media (min-width: 768px)
.why-page .center-title-block h3 {
    font-size: 30px;
	color:#9585bf;
}

@media (min-width: 768px)
.demo-steps .number-step {
    margin: -32px 0 70px;
}

.demo-steps .number-step {
    max-width: 800px;
    width: auto;
    margin-right: 0;
    display: inline-block;
    vertical-align: top;
    margin: -36px 0 70px;
}

.demo-steps .started-steps {
    border-top: 1px solid #d8d8d8;
    margin: 90px 0 20px;
    position: relative;
}

.demo-steps {
    background: #f1f1f1;
    text-align: center;
    padding: 20px 0;
		color:#444;
}

.demo-steps .number-step .step {
    color: #9b9b9b;
    padding-left: 10px;
    padding-right: 10px;
}
.demo-steps .number-step .step {
    float: left;
    width: 25%;
    padding-right: 0;
    background-clip: content-box;
}

@media (min-width: 768px)
.demo-steps .number-step .step span {
    width: 64px;
    height: 64px;
    font-size: 30px;
    line-height: 2.0;
}
.demo-steps .number-step .step span {
    background: #f1f1f1;
    width: 50px;
    height: 50px;
    display: inline-block;
    font-size: 22px;
    font-weight: 300;
    text-align: center;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    background-clip: padding-box;
    border: 1px solid #c0c0c0;
    line-height: 2.2;
    -webkit-transition: .5s;
    transition: .5s;
}

.demo-steps .number-step .step.active span {
    background: #9585bf;
    color: #fff;
    border-color: transparent;
}


.demo-steps .number-step .step p {
    font-size: 16px;
    line-height: 1.4;
	display: block;
		color:#444;
		margin-top:10px;
}

.why-page section.demo-steps {
    background: #f1f1f1;
    text-align: center!important;
    padding: 50px 0;
}


.started-bottom {	
    text-align: center!important;
}

.started-bottom p {
    font-weight: 300;
    color: #4a4a4a;
    margin: 10px 0 0;
}

.started-bottom p{font-weight:300;color:#4a4a4a;margin:12px 0 0}
.started-bottom p a{color:#4a4a4a;font-weight:600}


.our-mission {
    padding: 50px 0 0;
}

.our-mission .center-title-block {
    max-width: 960px;
    padding: 0 15px;
}
.our-misssion .center-title-block p {
    font-size: 18px!important;
    color: #9b9b9b;
    font-weight: 300;
    margin-top: 10px;
}

.nav .nav-pills.no-mobile {
    display: block;
}

@media (min-width: 992px)
.nav .nav-pills a {
    margin: 0 40px;
}
@media (min-width: 768px)
.nav.nav-pills a {
    margin: 0 20px;
}


.nav.nav-pills a {
    display: inline-block;
    color: #9b9b9b;
    text-decoration: none;
    margin: 0 40px;
    padding-bottom: 20px;
    text-align: center;
}

.nav.nav-pills a.active i {
    color: #9585bf;
}

.nav.nav-pills a i {
	padding-top: 15px;
	margin-bottom:12px;
    font-size: 32px;
    font-weight: 100;
}

.nav.nav-pills a span {
    display: block;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
	    padding-top: 15px;
}

.nav.nav-pills a.active i{color:#9585bf}
.nav.nav-pills a.active span{color:#444444}

.swiper-container {
    margin: 0 auto;
    position: relative;
    overflow: hidden;
    z-index: 1;
}
.nav.nav-pills .content {
    width: auto;
}

.nav.nav-pills a.active i{color:#9585bf}
.nav.nav-pills a.active span{color:#444444}

.nav.nav-pills a:hover i {
    color:#FFFFFF;
}


.nav.nav-pills .active i>a:focus i {
    margin-bottom: 12px;
    font-size: 32px;
    font-weight: 100;
    color:#FFFFFF;
}


.nav .nav-pills>li.active i>a:hover, .nav.nav-pills>li.active i>a:focus {
color:#FFFFFF;
}

.nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus {
    color: #fff;
    background-color: #9585bf;
} 
.nav.nav-pills nth-child3 a.active: i {
    color: #44c7f4;
}

nav.nav-pills nth-child4 a.active: i {
    color: #ff9a57;
}


nav.nav-pills nth-child5 a.active: i {
    color: #01b48f;
}

.tab-content .old-new {
}

.tab-content .old-world {
    width: calc(50% + 150px);
    padding: 0 150px 0 0;
}

.tab-content .old-world, .tab-content .new-world {

    float: left;
    height: 478px;
}

.tab-content .old-world, .tab-content .new-world {
    position: relative;
}

.tab-content .on-content {
    position: absolute;
    top: 50%;
    padding: 0 72px;
}

.tab-content .tab-pane .old-world .on-content {
    opacity: 0;
    -webkit-transform: translate(100px,-200px);
    transform: translate(100px,-200px);
}

.tab-content {
    text-align: center;
    border-top: 1px solid #d8d8d8;
    border-bottom: 1px solid #d8d8d8;
    font-weight: 300;
    color: #231f20;
    height: 478px;
}

.tab-content h3 {
    font-size: 30px;
    margin: 12px 0 10px;
    color: #9b9b9b!important;
    font-weight: 400;
}

.tab-content .tab-pane:nth-child2 .new-world {
    background: #01b48f;
}

.tab-content .tab-pane:nth-child3 .new-world {
    background: #44c7f4;
}

.tab-content .tab-pane:nth-child4 .new-world {
    background: #ff9a57;
}

.tab-content .tab-pane:nth-child5 .new-world {
    background: #01b48f;
}



@media (min-width: 768px)
.old-world {
    width: calc(50% + 150px);
    padding: 0 150px 0 0;
}

.new-world {
    background: #9585bf;
    color: rgba(255,255,255,0.9);
    padding: 10px 0 30px;
}

.on-content {
    position: absolute;
    top: 50%;
    padding: 0 72px;
}

.old-new:before {
    content: "";
    display: table;
}

.old-new:after {
    clear: both;
}

.new-world {
    width: 50%;
    float: left;
    height: 478px;
}

.new-world.on-content {
    width: calc(100% + 150px);
    left: -150px;
}

.new-world h3 {
    color: #fff!important;
}

.tab-content h3 {
    font-size: 30px;
    margin: 12px 0 10px;
    color: #9b9b9b;
    font-weight: 400;
}

.old-world {
    padding: 10px 0 80px;
}


.new-world {
    background: #9585bf;
    color: rgba(255,255,255,0.9);
    padding: 10px 0 30px;
}

@media (min-width: 768px)
.old-world, .new-world {
    width: 50%;
    float: left;
    height: 478px;
}

.old-world, .new-world {
    position: relative;
	    width: 50%;
    float: left;
    height: 478px;
}

@media (min-width: 768px)
.old-world .on-content {
    opacity: 0;
    -webkit-transform: translate(100px,-200px);
    transform: translate(100px,-200px);
}

@media (min-width: 768px)
.old-world .on-content {
    width: calc(100% - 150px);
}

@media (min-width: 768px)
.on-content {
    position: absolute;
    top: 50%;
    padding: 0 72px;
}

.on-content h3 {
    font-size: 30px;
    margin: 12px 0 10px;
    color: #9b9b9b;
    font-weight: 400;
}

.old-world p {
    margin-bottom: 30px;
	    font-size: 18px;
		    color: #666;
}

.on-content p {
    font-size: 18px;
    margin: 0;
}

.on-content i {
    font-size: 40px;
    color: #9b9b9b;
}

.tab-content .tab-pane {
    position: absolute;
    width: 100%;
    display: block;
    opacity: 0;
    -webkit-transition: .5s .1s;
    transition: .5s .1s;
}

.makes-it-easy {
    text-align: center;
    padding: 50px 0 0;
}


.center-title-block h2 {
    font-size: 38px;
}

h2 {
    font-size: 2.8em!important;
    font-weight: 300;
    line-height: 42px;
    margin: 0 0 32px 0;
}

.center-title-block p {
    font-size: 18px!important;
	padding-bottom: 30px;
}

.features-list {
    padding-bottom: 30px;
}

.features-list .col-sm-4 {
    margin-bottom: 60px;
}

.features-list span {
    background: #abb3b9;
    width: 50px;
    height: 50px;
	margin : 0 auto;
    display: inline-block;
    -webkit-border-radius: 3px;
    border-radius: 3px;
	padding: 9px;
    background-clip: padding-box;
}

.features-list i {
    height: 50px;
    font-size: 32px;
    color: #fff;
    line-height: 2;
    text-align: center;
}

.features-list h5 {
    font-size: 14px;
    font-weight: 500;
    font-weight: bold;
    letter-spacing: .5px;
    margin: 20px 0 10px 0;
    text-transform: uppercase;
}

.features-list p {
    color: #444;
    padding-top: 0;
    margin-top: 0;
    font-size: 14px;
}



.our-mission .center-title-block {
    margin: 0 auto;
    max-width: 1050px;
    padding: 0 15px;
    margin-bottom: 80px;
}


.quote-partner {
    padding: 140px 20px;
}

.quote-partner {
    background: #1d222c;
    text-align: center;
    color: #fff;
    padding: 40px 20px;
    position: relative;
}

.quote-partner h5 {
    color: #eeeeee;
    text-transform: uppercase;
    font-size: 28px;
    margin-top: 10px;
    margin-bottom: 60px;
}

.quote-partner blockquote {
    margin: 0 0 55px;
    padding: 0;
    border: none;
    font-style: italic;
    font-weight: 300;
    font-size: 20px;
}
blockquote {
    padding: 10px 20px;
    margin: 0 0 20px;
    font-size: 17.5px;
    border-left: 5px solid #eee;
}

@media (min-width: 768px)
.quote-partner .author p {
    font-size: 18px;
    display: inline-block;
}

.testimonials h4 i {
    color: #ffffff;
    margin-right: 5px;
}

@media (min-width: 768px)
.quote-partner blockquote p {
    font-size: 24px;
}

.quote-partner blockquote p {
    margin: 0 auto;
    max-width: 1050px;
}

h1, h2, h3, h4, h5, p, pre {
    margin: 20px 0;
}

.quote-partner .author strong {
    font-size: 20px;
    margin-right: 5px;
    display: inline-block;
}


.quote-partner .author img {
    margin-right: 10px;
    margin-bottom: 0;
    display: inline-block;
}

.quote-partner .author img {
    width: 60px;
    -webkit-border-radius: 50%;
    border-radius: 50%;
    background-clip: padding-box;
    overflow: hidden;
    margin-bottom: 10px;
}

.testimonials p {
    color: #2196f3;
    font-size: 16px;
    font-weight: 400;
    font-style: normal;
}

.demo-steps .browser-step .browser-content {
    min-height: 458px;
    text-align: center;
    position: relative;
}

.why-page .browser {
    clear: both;
    width: auto;
    max-width: 100%;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    background-clip: padding-box;
    text-align: left;
    overflow: hidden;
}

.browser .browser-toolbar {
    width: 100%;
    background: #fff;
    border-bottom: 1px solid rgba(0,0,0,0.1);
    position: relative;
    -webkit-border-radius: 5px 5px 0 0;
    border-radius: 5px 5px 0 0;
    background-clip: padding-box;
    overflow: hidden;
}

.browser-step .browser-content {
    min-height: 458px;
    text-align: center;
    position: relative;
}

.browser-step.b1 #lock-demo-step .a0-panel {
    margin: 0 auto;
    -webkit-box-shadow: none;
    box-shadow: none;
}

#a0-lock.a0-theme-default .a0-panel {
    text-align: center;
    border-radius: 3px;
    -webkit-box-shadow: 0 1px 10px rgba(0,0,0,.4);
    box-shadow: 0 1px 10px rgba(0,0,0,.4);
    font-size: 13px;
    position: relative;
    color: #4d4d4d;
    display: block;
    zoom: 1;
}

#a0-lock .a0-panel {
    background: #fff;
    width: 280px;
    -webkit-transition: height 50ms ease-in;
    -moz-transition: height 50ms ease-in;
    transition: height 50ms ease-in;
}

#a0-lock a, #a0-lock button, #a0-lock div, #a0-lock h1, #a0-lock h2, #a0-lock html, #a0-lock input, #a0-lock select, #a0-lock span, #a0-lock textarea {
    font-family: sans-serif;
}


.browser-step-content {
    height: 510px;
}

.browser-step-content {
    max-width: 800px;
    height: 180px;
    margin: 0 auto;
    position: relative;
}


.demo-steps {
    background: #f1f1f1;
    text-align: center;
    padding: 50px 0;
}

nav.nav-pills a.active span {
    color: #4a4a4a;
}
nav.nav-pills a span {
    display: block;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
}

.nav.nav-pills a.active:nth-child(2) i {
    color: #c879b2;
    font-weight: 400;
}


.nav.nav-pills a.active:nth-child(3) i {
    color: #44c7f4;
    font-weight: 400;
}

.nav.nav-pills a.active:nth-child(4) i {
    color: #ff9a57;
    font-weight: 400;
}

.nav.nav-pills a.active:nth-child(5) i {
    color: #01b48f;
    font-weight: 400;
}

.tab-content h3 {
    font-size: 30px;
    margin: 12px 0 10px;
    color: #9b9b9b;
    font-weight: 400;
}

.tab-content .new-world i, .tab-content .new-world h3 {
    color: #fff;
}

.tab-content .new-world i {
    font-size: 45px;
}

.tab-content .tab-pane:nth-child(5) .new-world {
    background: #01b48f;
}
@media (min-width: 768px)
.tab-content .new-world {
    width: calc(50% - 150px);
    padding: 0;
}
.tab-content .new-world {
    background: #eb5424;
    color: rgba(255,255,255,0.9);
    padding: 10px 0 30px;
}
@media (min-width: 768px)
.tab-content .old-world, .tab-content .new-world {
    height: 478px;
}

.tab-content .old-world, .tab-content .new-world {
    position: relative;
}


tab-content .tab-pane .new-world .on-content {
    opacity: 0;
    -webkit-transform: translate(-100px,0);
    transform: translate(-100px,0);
}


.tab-content .new-world .on-content {
    width: calc(100% + 150px);
    left: -150px;
}


.tab-content .on-content {
    position: absolute;
    top: 50%;
    padding: 0 72px;
}

.browser-step-content {
    max-width: 800px;
    height: 10px;
    margin: 0 auto;
    position: relative;
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

<!-- START CONTENT================================================== -->

<div class="row-fluid">
<div class="why-page page-content">
<div class="banner">
<div class="container"><h1 class="animated fadeInDown" style="visibility: visible;">Why Everpay?</h1>
<p class="animated fadeInDown" style="visibility: visible;">Payments made simple for the rest of us</p>
<a href="//fast.wistia.net/embed/iframe/fu7ww3h1yx?popover=true" class="wistia-popover[height=720,playerColor=7b796a,width=1280] btn-play js-play-track animated fadeInUp" style="visibility: visible;"></a>
<a href="<?=$this->config->item('signup_url');?>" data-track="why-Everpay-banner" class="btn btn-success btn-lg animated fadeInUp" style="visibility: visible;">Create Free Account</a></div>
</div>

<section class="demo-steps"><div class="center-title-block">
<h2>Save time. Stress Less. Focus on your business.</h2>
<p>Bill, Collect and send payments with most popular payment providers running on any device or in the cloud.</p></div>
<div class="center-title-block">
<h3><br class="medium"> 4 Simple Steps to <strong>Start Getting Paid Quickly.<strong></strong></strong></h3></div>
<div class="started-steps">
<div class="number-step">
<div class="step s1"><span>1</span><p><b>Create Your Account</b> 
										&amp; Verify your email.	</p></div>
<div class="step s2"><span>2</span><p><b>Fill-in Your Company Details</b> 
										&amp; Upload your company logo.		</p></div>
<div class="step s3"><span>3</span><p><b>Setup Payment Provider</b> 
										Stripe, Paypal, Dwolla, Authorize.net</p></div> 
<div class="step s4 active"><span>4</span><p><b>Create invoices, swipe cards,</b> 
										email clients &amp;start getting paid!</p></div>
</div>


<div class="browser-step-content start-steps" style="visibility: hidden; animation-name: none;">
<div class="browser-step b1" style="opacity: 0; display: none;">
<div class="browser">
<div class="browser-toolbar">
<div class="btns">
<i class="close"></i>
<i class="min"></i>
<i class="max"></i>
</div>
<div class="location-bar"><i class="icon-budicon-285"></i>
<span class="green">https</span><span class="gray">://</span>
<span>app.everpayinc.com</span>
</div>
<div class="menu-button"><span></span><span></span><span></span></div></div><div class="browser-content"><div id="lock-demo-step"><div id="a0-lock" class="a0-lock a0-theme-default" dir="auto">

            <div class="a0-action">
                <button type="submit" class="a0-primary a0-next">Access</button>
                <div class="a0-db-actions">
                <div class="a0-create-account a0-buttons-actions">
  
  
  <a href="<?=$this->config->item('signup_url');?>" class="a0-sign-up a0-btn-small">
    Sign Up
  </a>
  
  
  <span class="a0-divider"></span>
  
  
  <a href="javascript: {}" class="a0-forgot-pass  a0-btn-small">Reset password</a>
  
</div>
</div>
            </div>
            
        </div>
    </form>
</div></div>

    <div class="a0-footer a0-hide">
    <a href="http://everpayinc.com" target="_new" class="a0-logo">
        <i class="a0-icon-badge"></i>
    </a>
</div>

</div>

        </div>
      </div>
    

<div class="started-bottom">
<a href="<?=$this->config->item('signup_url');?>" onclick="signup(this)" target="_blank" data-track="why-Everpay-get-started" class="btn btn-success btn-lg">Create Free Account</a>
<p>Or&nbsp;<a href="<?=site_url('howitworks');?>">see how</a> our dashboard works.</p>
</div>

</section>



<div class="row-fluid">
<section class="online-invoicing">
<div class="hero">
			<div class="caption">
				<h2>Create > Send > Get Paid.</h2>
				<h3>Easy Stackable <strong>Online Invoicing &amp; Product Management</strong></h3>
				<p> 
				Everpay's <b>FinVoice app makes generating invoices online so easy for you, Free and customizable invoice templates, create quotations, add your company logo, integrate with 30+ payment gateways,  email clients payment links or attach PDF's and get paid to directly to your card or bank account!</p>
				
				</p>
<p>&nbsp;
&nbsp;</p>

<a href="<?=$this->config->item('signup_url');?>" onclick="signup(this)" target="_blank" data-track="why-Everpay-get-started" class="btn btn-success btn-lg">Create Free Account</a>
<a href="<?=$this->config->item('invoicing_url');?>" onclick="testdrive(this)" target="_blank" data-track="take-Everpay-test-drive" class="btn btn-info btn-lg">Send A Test Invoice</a>
			</div><!-- .caption -->
		</div>

</section>
</div>
<div class="divide70"></div>

<div class="row-fluid">
<section class="easy-payments">
<div class="container">
<div class="rows">

<div class="center-title-block">

<h2>Mobile Payments For the Masses</h2>

<h3>innovative features for simplifying commerce created by experts in payments.</h3>
<p>6Pay is a mobile payment device that connects to your Apple™&nbsp;or Android™ <a href="/#everpay-compatible-smartphones/">compatible smartphone</a> via Bluetooth®. Together with Everpay's 6Pay app, you’ll be able to take customers payments on the spot via scan, swipe, or chip and PIN from:</p>
<ul>
			<li>All Major Credit Cards (Visa, MasterCard, American Express, Discover,  etc.)<a id="" name="" href="#"><br></a></li>
			<li>Pin-based Debit, Electronic Benefits (EBT) and Flexible Spending (FSA)</li>
			<li>Gift/Stored Value and Private Label Cards</li>
			<li>Electronic Check Conversion (ACH, ICL, Check21)</li>
			<li>Alternative Payments, such as Bill Me Later®, Interac®, Webmoney®.</li>
</ul>

<div class="center-title-block">
<h3>Everpay also provides a full set of tools to make integrated EMV (aka chip) card processing on this side of the pond a breeze.</h3>
	</div>
	
	</div>

<div class="container features-list">
<div class="row">

<div class="col-sm-5 left">
<h5>Extensibility</h5>
<p>No more closed, checkbox-based configuration tools. Everpay allows you to fully customize any stage of the payments and authorization cycle to adapt to new policies, new applications, and new platforms.</p>
<h5>Mobile-centric</h5>
<p>It's critical to support multiple mobile devices. Everpay makes it easy for you to take &nbsp; payments from your customers with most mobile phones (IOS, Android, Blackberry) now you can integrate your own devices and apps with our SDK's and Easy API's making it easy to take payments with the devices their most familiar with. </p>

</div>

<div class="col-sm-7 right">

                       <div class="graphic">
						 <img src="https://everpayinc.com/assets/app/img/elektroswipe-showcase_14.png" class="small" style="width:90%;margin-top:7%;"> 
                       		 </div>					
              				 </div>
                   </div>
				   
				   
<div class="divide20"></div>
<div class="center row-fluid" style="text-align:center;">
<a href="#" class="btn border-black btn-lg" data-toggle="modal" data-target=".app-download-modal-sm">Get Mobile App</a>
				&nbsp;&nbsp;
                <a href="//everpayinc.com/signup" class="btn border-theme btn-lg">Claim Account</a>
				 
 </div>


</div>
</div>

<div class="container features-list">

<div class="center-title-block">
<p>Manage all your accounts, transactions, users and 6Pay devices through the Everpay Commerce Center. You’ll even be able to view all your transaction history on your mobile phone or <a href="/store/#everpay-compatible-tablet-devices/">supported tablet devices</a>.</p>
<div class="graphic">
						 <img src="https://everpayinc.com/assets/app/img/swipe-transaction-list.png" class="small"> 
                        </div>
</div>

<div class="divide50"></div>

<div class="row">

<div class="col-sm-3">
<span><i class="icon-budicon-333"></i></span>
<h5>SAFE AND SECURE</h5>
Customer card details are not stored on either the 6Pay device or your smartphone and all transaction data is encrypted and processed in real-time**.</div>

<div class="col-sm-3">
<span><i class="icon-budicon-342"></i></span>
<h5>EASY TO USE</h5>
<p>Connecting to a robust, yet simple and secure HTTPS API is key to allowing seamless integration with other 3rd party apps. Everpay allows you to collect payments with almost any payment provider running on any device.</p>
</div>

<div class="col-sm-3">
<span><i class="icon-budicon-333"></i></span>
<h5>GET PAID QUICKLY</h5>
<p>When you can take card payments, you'll be paid straight into your everpay account (get paid via Bitcoin or by Bank Transfer) as early as the next business day, so there’s no need to chase unpaid invoices.</p>
</div>

<div class="col-sm-3">
<span><i class="icon-budicon-341"></i></span>
<h5>MULTIPLE DEVICES</h5>
<p>It's critical to support multiple devices. Everpay makes it easy for you to give &nbsp;your customers the ability to pay you with the currency they are most familiar with. You can have more than one 6Pay device for your business.</p>
</div>

</div>
</div>


</section>
</div>


<section id="cta-2">
            <div class="container">
                <h2>Take Your Business & Payments On The Go</h2>
				
                <a href="#" class="btn border-black btn-lg" data-toggle="modal" data-target=".app-download-modal-sm">Go Mobile</a>
				&nbsp;&nbsp;
                <a href="//everpayinc.com/signup" class="btn border-theme btn-lg">Get Started</a>
				
            </div>
			
<div class="modal fade app-download-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>
        </section>


<div class="divide70"></div>

<div class="row-fluid">

<section class="our-mission">
<div class="center-title-block">
<h2>Traditional Payments Acceptance is Going Cashless</h2>
<p>Payments in modern cloud-hybrid devices and API’s are getting more complex</p>
</div>

  <!-- Nav tabs -->
  <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(7.5px, 0px, 0px);">

  <ul id="swiper-wrapper" class="nav nav-pills swiper-wrapper mobile swiper-container swiper-container-horizontal" role="tablist">
    <li role="presentation" class="swiper-slide active swiper-slide-active"><a href="#payments" aria-controls="payments" role="tab" data-toggle="tab" style="margin-right: 30px;"><i class="icon-budicon-374"></i><span>Payments</span></a></li>
    <li role="presentation" class="swiper-slide nth-child2 swiper-slide-next"><a href="alternative-payments" aria-controls="alternative-payments" role="tab" data-toggle="tab" style="margin-right: 30px;"><i class="icon-budicon-661"></i><span>Alternatives</span></a></li>
    <li role="presentation" class="swiper-slide nth-child3"><a href="#apps-apis" aria-controls="apps-apis" role="tab" data-toggle="tab" style="margin-right: 30px;"><i class="icon-budicon-342"></i><span>Apps and APIs</span></a></li>
    <li role="presentation" class="swiper-slide nth-child4"><a href="#multiple-devices" aria-controls="multiple-devices" role="tab" data-toggle="tab" style="margin-right: 30px;"><i class="icon-budicon-243"></i><span>Multiple Devices</span></a></a></li>
    <li role="presentation" class="swiper-slide nth-child5"><a href="#retail" aria-controls="retail" role="tab" data-toggle="tab" style="margin-right: 30px;"><i class="icon-budicon-156"></i><span>Retail + Cloud</span></a></li>
 </ul>
   </div>



<div class="tab-content">

<div id="payments" class="tab-pane fade active">
<div class="old-new">

<div class="old-world">
<div class="on-content">
<h3 class="service-box-4 wow animated fadeOut animated animated">The Old World</h3>
<p>A few core applications running on-premises</p>
<i class="icon-budicon-435"></i>
</div>
</div>

<div class="new-world">
<div class="on-content">
<i class="icon-budicon-499"></i>
<h3 class="service-box-4 wow animated fadeIn animated animated">The New World</h3>
<p>Many specialized applications solving specific use cases</p>
</div>
</div>

</div>
</div>

<div id="alternative-payments" class="tab-pane fade" role="tabpanel">
<div class="old-new">

<div class="old-world">
<div class="on-content">
<h3 class="service-box-4 wow animated fadeOut animated animated">The Old World</h3>
<p>Single vendor stack</p>
<i class="icon-budicon-435"></i>
</div>
</div>

<div class="new-world">
<div class="on-content">
<i class="icon-budicon-499"></i>
<h3 class="service-box-4 wow animated fadeIn animated animated">The New World</h3>
<p>Mix and match of best­of­breed platforms, languages, and components</p></div>
</div>
</div>
</div>


<div id="apps-apis" class="tab-pane fade">
<div class="old-new">

<div class="old-world">
<div class="on-content">
<h3 class="service-box-4 wow animated fadeOut animated animated">The Old World</h3>
<p>Web applications or rich client applications</p>
<i class="icon-budicon-435"></i>
</div>
</div>

<div class="new-world">
<div class="on-content">
<i class="icon-budicon-499"></i>
<h3 class="service-box-4 wow animated fadeIn animated animated">The New World</h3>
<p>New Devices, HTML5 single page applications, mobile native apps consuming HTTP APIs</p>
</div>
</div>

</div>
</div>

<div id="multiple-devices" class="tab-pane fade" role="tabpanel">
<div class="old-new">

<div class="old-world">
<div class="on-content">
<h3 class="service-box-4 wow animated fadeOut animated animated">The Old World</h3>
<p>Desktop PCs and Knuckle busters</p>
<i class="icon-budicon-435"></i>
</div>
</div>

<div class="new-world">
<div class="on-content">
<i class="icon-budicon-499"></i>
<h3 class="service-box-4 wow animated fadeIn animated animated">The New World</h3>
<p>Laptops, tablets, phones, and the internet of things</p>
</div>
</div>

</div>
</div>

<div id="retail" class="tab-pane fade">
<div class="old-new">
<div class="old-world">

<div class="on-content">
<h3 class="aservice-box-4 wow animated fadeUp animated animated">The Old World</h3>
<p>Everything is on-premise behind the firewall</p>
<i class="icon-budicon-435"></i>
</div>
</div>

<div class="new-world">
<div class="on-content">
<i class="icon-budicon-499"></i>
<h3 class="animated slideInDown">The New World</h3>
<p>Mix between private cloud, public cloud, and on-premise</p>
</div>
</div>

</div>
</div>

</div>
</section>

<div class="divide70"></div>

<section class="makes-it-easy">

<div class="container">
<div class="rows">
<div class="center-title-block">
<h2>Everpay Makes it Easy</h2>
<p>Continous Innovation that simplify payments for rest of us, created by experts in commerce.</p></div>
<div class="col-lg-12 col-md-12 col-sm-12 features-list">
<div class="row">

<div class="col-sm-4"><span><i class="icon-budicon-333"></i></span>
<h5>Extensibility</h5>
<p>No more closed, checkbox-based configuration tools. Everpay allows you to fully customize any stage of the payments pipeline to adapt to new payment types, new applications, and new providers.</p></div>

<div class="col-sm-4">
<span><i class="icon-budicon-342"></i></span>
<h5>Simple APIs</h5>
<p>Connecting to a robust, simple and secure HTTPS API is key to allowing seamless integration with other tools and experiences. Everpay allows you to process your payments with most payment providers and processing networks on any device or cloud.</p></div>

<div class="col-sm-4">
<span><i class="icon-budicon-341"></i></span>
<h5>User-centered</h5>
<p>It's critical to support multiple payment providers. Everpay makes it easy for your customers to pay you with the method that are most familiar with. Our payment widget gives you a fully customizable, global payments acceptance with just a few lines of JavaScript.</p>
</div>
</div>

<div class="row">
<div class="col-sm-4">
<span><i class="icon-budicon-535"></i></span>
<h5>Standard Protocols</h5>
<p>Everpay supports industry standards such as Bitcoin, Apple Pay, JSON Web Token, OAuth 2.0, Ripple, Old School DailUp thus preventing vendor lock-in.</p>
</div>
<div class="col-sm-4">
<span><i class="icon-budicon-330"></i></span>
<h5>SDKs</h5>
<p>Applications are now built on a broad spectrum of technology sources. Everpay provides SDKs for all popular web, mobile and native platforms, allowing for deep integration with the language and stack of your preference.</p></div><div class="col-sm-4">
<span><i class="icon-budicon-692"></i></span>
<h5>Analytics</h5>
<p>Visibility into customers' activity means better, faster decision-making. Everpay gives you access to powerful reporting &amp; analytics so you can easily see what’s going on.</p></div></div>

<div class="row">
<div class="col-sm-4">
<span><i class="icon-budicon-156"></i></span>
<h5>Cloud Hybrid</h5>
<p>Everpay runs on-premises and in the cloud, allowing you to choose which option is right for business.</p>
</div>
<div class="col-sm-4">
<span><i class="icon-budicon-243"></i></span>
<h5>Device Agnostic</h5>
<p>Do you need to run our app on multiple devices? No problem. credit card payments and authorization is managed consistently across your customer’s device of choice.</p></div>
<div class="col-sm-4">
<span><i class="icon-budicon-189"></i></span>
<h5>Scalable &amp; Reliable</h5>
<p>Commerce is part of the main path for business. Everpay takes availability seriously. We offer a guaranteed SLA so you don’t have to worry, no matter how big your customer base is.</p></div>
</div></div></div></div>
</section>

<div class="divide70"></div>

<section class="testimonials parallax quote-partner" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="center-heading">
                            <h5>From our customers</h5>
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
                                    <i class="fa fa-quote-left"></i> It was such a hassle trying to find the right merchant account for my business, but after signing up with Everpay, I found that they really understood our business model and offered us multiple solutions! &nbsp; <i class="fa fa-quote-right"></i>
                                </h4>
                              <div class="author">
<strong>James Gardner,</strong><p>SVP of Product at MindCrew Technologies</p>
</div>
                            </div><!--testimonials item like paragraph-->
                            <div>
                                <img src="<?=branded_include('img/customer-2.jpg');?>" class="img-responsive customer-img" alt="">
                                <h4>
                                    <i class="fa fa-quote-left"></i> We took a strategic bet on Everpay by using their sophisticated payments infrastructure, rather than building it ourselves.  &nbsp;  <i class="fa fa-quote-right"></i>
                                </h4>
                          <div class="author">
<strong>Chiku Gardner,</strong><p>C.E.O at SoundGodz Inc.</p>
</div>
                            </div><!--testimonials item like paragraph-->
                            <div>
                                <img src="<?=branded_include('img/customer-3.jpg');?>" class="img-responsive customer-img" alt="">
                                <h4>
                                    <i class="fa fa-quote-left"></i> The Elektropay gateway by Everpay is one of the most easiest to use, I just added my products and starting taking orders minutes after!  &nbsp;  <i class="fa fa-quote-right"></i>
                                </h4>
                            <div class="author">
<strong>Jessica,</strong><p>Owner of Uskin LLC.</p>
</div>
                            </div><!--testimonials item like paragraph-->
                        </div>
                    </div>
                </div>
            </div>
        </section><!--testimonials-->
		
		


</div>
</div>

</div>
<!-- END CONTENT================================================== -->

<script>
$('#swiper-wrapper a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>
<?=$this->load->view(branded_view('common/footer'));?>