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

#myCarousel {
  background: url('https://everpayinc.com/assets/app/images/mobile-pay-bg.jpg') no-repeat;
  
   background-color: #05101b!important;
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

#big-background-gradient {
    height: 540px;
    background-color: #ffffff;
    background-image: -webkit-gradient(linear, 50% 100%, 50% 0%, color-stop(-20%, #ffffff), color-stop(10.76%, #ffffff), color-stop(80%, #ffffff));
    background-image: -webkit-linear-gradient(bottom, #ffffff -20%,#ffffff 10.76%,#ffffff 80%);
    background-image: -moz-linear-gradient(bottom, #afd692 -20%,#afd692 10.76%,#79af70 80%);
    background-image: -o-linear-gradient(bottom, #afd692 -20%,#afd692 10.76%,#79af70 80%);
    background-image: linear-gradient(bottom, #afd692 -20%,#afd692 10.76%,#79af70 80%);
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
                                <h1 class="animated slideInLeft delay-2">Mobile Swipe Solutions</h1>
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
                                <h1 class="animated slideInLeft delay-2">Mobile Payment Solutions</h1>
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
                                <h1 class="animated slideInLeft delay-2">Mobile POS Solutions</h1>
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

<section id="content-container" role="main">
    <div class="row">
<div id="big-background-gradient">
  <div id="promo-container">
    <div id="big-promo-phone">
      <div id="price-tag" style="display:none">
        <div id="price-per-month">$25 / month</div>
        <div id="price-per-transaction">29¢ + 1.59%–2.89% per transaction</div>
        <div id="price-byoa"><a href="/pricing">Already have a merchant account?</a></div>
      </div>
      <ul id="feature-list" style="margin-top: 1.5em">
        <li>1.59% Swiped Debit Transaction rate</li>
        <li>1.79% Swiped Credit Transaction rate</li>
        <li>Professional Receipts</li>
        <li>100% USA-based Customer Service Team</li>
      </ul>
              <a href="#full-movie" id="promo-movie-fancybox"></a>
            <div style="position: absolute; top: -1000px; left: -1000px;">
        <div id="full-movie" class="video-js-box" style="width: 568px; height: 320px; overflow: hidden;">
          <video class="video-js" width="568" height="320" controls preload poster="/video/swipe-promo-560-poster.jpg">
            <source src="/video/swipe-promo-560.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
            <source src="/video/swipe-promo-560.ogv" type='video/ogg; codecs="theora, vorbis"' />
            <!-- http://releases.flowplayer.org/flowplayer/flowplayer-3.2.7-src.zip -->
            <object class="vjs-flash-fallback" width="568" height="320" type="application/x-shockwave-flash"
                    data="/swf/flowplayer-3.2.7.swf">
              <param name="movie" value="/swf/flowplayer-3.2.7.swf" />
              <param name="allowfullscreen" value="true" />
              <param name="flashvars" value='config={"playlist":["/video/swipe-promo-560-poster.jpg", {"url": "/video/swipe-promo-560.mp4","autoPlay":false,"autoBuffering":true}]}' />
              <img src="/video/swipe-promo-560-poster.jpg" width="568" height="320" alt="Poster Image" title="No video playback capabilities." />
            </object>
          </video>
        </div>
      </div>
    </div>
    <div id="signup-form">
      <h2>Get Started with EverSwipe.</h2>
      <p class="signup-ninja">Make the Sale! Transform your mobile
         device into a secure credit card terminal. Get a free credit
         card swiper with your approved account.</p>
      <form action="https://everpayinc.com/signup" method="post" id="get-started">
                <input type="text" size="20" maxlength="40" name="first_name" placeholder="First Name" />
        <input type="text" size="20" maxlength="40" name="last_name"  placeholder="Last Name" /><br/>
        <input type="text" size="20" maxlength="40" name="phone"      placeholder="Phone" />
        <input type="text" size="20" maxlength="40" name="email"      placeholder="Email" required><br/>
        <button>Start Swiping!</button>
      </form>
      <p class="signup-byoa"><a href="/swipe/pricing">Already have a merchant account?</a></p>
      <div id="ninja-promise">
        <ul>
          <li>No setup or activation fee</li>
          <li>No monthly minimum</li>
          <li>No contract term,<br>cancel anytime</li>
        </ul>
      </div>
      <div id="credit-card-logos"></div>
      <div id="apple-android-logos"></div>
      <div id="compatible-with">
        The EverSwipe is compatible with<br>Apple and Android devices.
      </div>
    </div>
  </div>
</div>

    <div class="spacer"></div>
    </div> <!-- end of row  -->

    </section> <!-- end of #content-container  -->

<div class="divide60"></div>

<section id="cta-1" style="margin-bottom: -25px;">
            <div class="container">
                <h1>Solve your payments problem today.</h1>
                <a href="//everpayinc.com/signup" class="btn border-white btn-lg">Get Started</a>
            </div>
        </section>
﻿<?=$this->load->view(branded_view('common/footer'));?>