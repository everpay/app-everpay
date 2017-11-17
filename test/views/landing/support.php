<?=$this->load->view(branded_view('common/header'));?>

<style>

.help-support-page {
    color: rgba(0,0,0,0.5);
}

.header-dark .banner {
    padding-top: 160px;
}

.help-support-page .banner {
    padding-bottom: 50px;
    margin-bottom: 0;
    background: linear-gradient(180deg,#2b2f3e 0%,#6e8086 150%);
}
.banner {
    color: #fff;
    text-align: center;
    padding-top: 60px;
    padding-bottom: 60px;
    margin-bottom: 50px;
    position: relative;
    overflow: hidden;
    background-color: #14204d;
    background: linear-gradient(180deg,#16214d 0%,#44c7f4 200%);
    padding: 80px 0;
}

.banner h1 {
    color: #fff;
    font-size: 2.5rem;
    font-weight: 300;
    margin-bottom: 0;
}

.banner p {
    max-width: 580px;
    font-size: 1.4rem;
    margin: auto;
    margin-top: 10px;
    color: rgba(255,255,255,0.8);
}

.help-support-page .banner .search {
    margin-top: 30px;
    position: relative;
    display: inline-block;
}

.help-support-page .banner input {
    border: 0;
    border-radius: 100px;
    padding: 12px 30px 12px 40px;
    width: 360px;
    color: #16214d;
    margin: 0;
    font-size: 20px;
    height: 66px;
    text-align: center;
    border: 4px solid #6e8086;
}



input[type="search"] {
    -webkit-appearance: none;
}
input[type="search"] {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
input[type="search"] {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    -webkit-appearance: textfield;
}
input, button, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}


#myCardCarousel {
  background: url(https://everpayinc.com/assets/app/img/bgs/video_woman_cover2.jpg) no-repeat;
  height: 620px;
  margin-bottom: -10px;
  width: auto;
}

.slide-text h1 {
    color: #fff!important;
    font-weight: 700;
    font-size: 75px;
    letter-spacing: 0.10em;
    line-height: 80px;
    margin-bottom: 0px;
    text-transform: uppercase;
    text-shadow: 0 1px 2px rgba(0,0,0,.25);
}

.slide-text {
  margin-top: 180px;
}

.slide-text a {
	top:220px;
    color: #fff!important;
    font-weight: 700;
    font-size: 48px;
    text-shadow: 0 1px 2px rgba(0,0,0,.25);
}


section p, section ul {
  font: inherit;
  line-height: 20px;
  color: #444;
  margin-top: 20px;
  margin-right: 20px;
}

form {
    display: block;
    margin-top: 0em;
}

.search-results {
    display: block;
    padding-top: 0;
}
.help-support-page .support-items {
    background: #f9f9f9;
    text-align: center;
    border-top: 1px solid #fff;
    border-bottom: 1px solid #fff;
}

.help-support-page .bg-green {
    background: #7ed321;
    text-transform: uppercase;
    color: #fff;
    font-weight: bold;
    padding: 14px;
    font-size: 12px;
    letter-spacing: 1px;
    text-align: center;
    margin-bottom: 20px;
}


.help-support-page .block-links p {
    font-size: 1rem;
}
.help-support-page .support-icon {
    font-size: 40px;
    color: #738696;
    opacity: .5;
    font-weight: 100;
    top: -4px;
    position: relative;
}

</style>
<!--  ================================================== End Header -->

<div class="help-support-page js-search-container first-time">
<div class="banner">
<div class="container">
<i class="icon-budicon-787 icon-banner"></i>
<h1> Help &amp; Support</h1>
<p>Need help getting started? Stuck? Want to learn more?</p>

<form>
<div class="search">
<input type="search" placeholder="How can we help you?" class="js-search-input"></div>
</form>

</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-12">
<div class="search-results js-search-results" style="display: block;"></div>
</div></div></div><div class="block-links">
<div class="support-items">
<div class="container">
<div class="row">
<div class="col-md-4">
<a href="//everpayinc.com/docs" class="illustration i-1"></a>
<h4>Tutorial Navigator</h4>
<p>Check out our SDKs, samples, and tutorials to help build your next masterpiece - mobile, web, native, and APIs.</p><p><a href="https://auth0.com/docs">View More</a></p></div><div class="col-md-4"><a href="https://auth0.com/docs/api" class="illustration i-2"></a><h4>DOCUMENTATION &amp; API</h4><p>Learn about our features <br>and common scenarios.</p><p><a href="https://auth0.com/docs/api">View More</a></p></div><div class="col-md-4"><a href="https://ask.auth0.com" class="illustration i-3"></a><h4>COMMUNITY</h4><p>Post, discuss, ask questions, and be part <br>of our awesome community.</p><p><a href="https://ask.auth0.com">View More</a></p></div></div></div></div><div class="bg-green">All systems are up and running</div><div class="container support-links"><div class="row"><div class="col-md-1 hidden-sm hidden-xs"><p class="pull-right"><i class="icon-budicon-796 support-icon"></i></p></div><div class="col-md-3"><h4>Chat with us</h4><p>Got any technical questions? Our developers hang out in #auth0 on freenode.</p><p><a href="http://chat.auth0.com">Chat Now</a></p></div><div class="col-md-1 hidden-sm hidden-xs"><p class="pull-right"><i class="icon-budicon-777 support-icon"></i></p></div><div class="col-md-3"><h4>Contact us by email</h4><p>Can't find the answer? We’re here to help. Get in touch and we’ll get back to<em> you in a flash</em>.</p><p><a href="mailto:support@auth0.com">support@auth0.com</a></p></div><div class="col-md-1 hidden-sm hidden-xs"><p class="pull-right"><i class="icon-budicon-583 support-icon"></i></p></div><div class="col-md-3"><h4>Product Feedback</h4><p>Help us make Auth0 even better by sharing your ideas and feature requests with our team.</p><p><a href="http://feedback.auth0.com">Share Feedback</a></p>
</div>
</div>
</div>
</div>
</div>



<?=$this->load->view(branded_view('common/footer'));?>