<?=$this->load->view(branded_view('common/header'));?>

<style>

#myCarousel {
    background-image: url('https://everpayinc.com/assets/app/img/bgs/mobile-processing-with-a-smile.png') no-repeat;
}
#promo-container {
    margin-left: auto;
    margin-right: auto;
    width: 960px;
}



#ninja-promise ul li {
    margin-bottom: 20px;
}


#feature-list {
    color: #666;
    font-size: 18px;
    line-height: 1.5em;
    text-align: center;
}

ul {
    list-style: none;
}

#signup-form {
    display: inline;
    float: left;
    margin-left: 10px;
    margin-right: 10px;
    width: 380px;
    position: relative;
    left: 80px;
    margin-top: 56px;
    -webkit-border-radius: 7px;
    -moz-border-radius: 7px;
    -ms-border-radius: 7px;
    -o-border-radius: 7px;
    border-radius: 7px;
    -webkit-background-clip: padding;
    -moz-background-clip: padding;
    background-clip: padding-box;
    background-image: -webkit-gradient(linear, 50% 0%, 50% 440, color-stop(0%, #568e4d), color-stop(100%, rgba(86,142,77,0)));
    background-image: -webkit-linear-gradient(top, #568e4d 0%,rgba(86,142,77,0) 440px);
    background-image: -moz-linear-gradient(top, #568e4d 0%,rgba(86,142,77,0) 440px);
    background-image: -o-linear-gradient(top, #568e4d 0%,rgba(86,142,77,0) 440px);
    background-image: linear-gradient(top, #568e4d 0%,rgba(86,142,77,0) 440px);
}

#signup-form form input[name=first_name], #container #content-container #promo-container #signup-form form input[name=phone] {
    margin-right: 10px;
}

#signup-form form input[type=text] {
    font-size: 18px;
    border: 1px solid #5c8755;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    -ms-border-radius: 6px;
    -o-border-radius: 6px;
    border-radius: 6px;
    -webkit-background-clip: padding;
    -moz-background-clip: padding;
    background-clip: padding-box;
    background-color: #fff;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.3);
    -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.3);
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.3);
    padding: 10px 12px;
    margin: 0;
    margin-bottom: 16px;
    width: 135px;
}

#get-started input[type=text] {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 16px;
    padding: 5px;
    margin-bottom: 5px;
    width: 120px;
}

#big-promo-phone {
    display: inline;
    float: left;
    margin-left: 10px;
    margin-right: 10px;
    width: 460px;
    width: 460px;
    padding-top: 659px;
    margin-top: 52px;
    background-image: url('https://everpayinc.com/assets/app/img/swipe-iphone.png');
    background-repeat: no-repeat;
}

#ninja-promise {
    background-image: url('https://everpayinc.com/assets/app/img/ninja-promise.png');
    width: 348px;
    height: 348px;
    margin: auto;
    margin-bottom: 20px;
}
#signup-form h2 {
    font-size: 27px;
    font-weight: bold;
    text-align: center;
	color: #fefefe!important;
}

#ninja-promise ul {
    color: #847c66;
    font-size: 18px;
    list-style-type: disc;
    text-shadow: none;
    padding-top: 140px!important;
    margin-left: 70px;
}

#credit-card-logos {
    background-image: url('https://everpayinc.com/assets/app/img/credit-card-logos.png')!important;
    width: 301px;
    height: 50px;
    margin: auto;
}

#apple-android-logos {
    background-image: url('https://everpayinc.com/assets/app/img/apple-android-logos.png')!important;
    width: 116px;
    height: 56px;
    margin: auto;
    margin-top: 20px;
}

#compatible-with {
    color: #666;
    font-size: 18px;
    font-weight: 300px;
    text-align: center;
    line-height: 1.5em;
    margin-bottom: 60px;
}

#promo-container #signup-form p.signup-byoa {
    text-align: center;
    text-shadow: none;
}

p.signup-ninja {
    color: #eee;
    margin-top: 10px;
    font-weight: 300;
    font-size: 19px;
    line-height: 1.5em;
    padding-right: 140px;
    background-image: url(/images/nate2.png);
    background-position: 240px 0;
    background-repeat: no-repeat;
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
                                <h1 class="animated slideInLeft delay-2">Mobile Payments</h1>
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
                                <h1 class="animated slideInLeft delay-2">Mobile Payments </h1>
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
                                <h1 class="animated slideInLeft delay-2">Mobile Payments</h1>
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
            <source src="https://everpayinc.com/assets/video/swipe-promo-560.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
            <source src="https://everpayinc.com/assets/video/swipe-promo-560.ogv" type='video/ogg; codecs="theora, vorbis"' />
            <!-- http://releases.flowplayer.org/flowplayer/flowplayer-3.2.7-src.zip -->
            <object class="vjs-flash-fallback" width="568" height="320" type="application/x-shockwave-flash"
                    data="/swf/flowplayer-3.2.7.swf">
              <param name="movie" value="/swf/flowplayer-3.2.7.swf" />
              <param name="allowfullscreen" value="true" />
              <param name="flashvars" value='config={"playlist":["/video/swipe-promo-560-poster.jpg", {"url": "/video/swipe-promo-560.mp4","autoPlay":false,"autoBuffering":true}]}' />
              <img src="https://everpayinc.com/assets/video/swipe-promo-560-poster.jpg" width="568" height="320" alt="Poster Image" title="No video playback capabilities." />
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
      <p class="signup-byoa"><a href="/signup">Already have a merchant account?</a></p>
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