<?=$this->load->view(branded_view('common/header'));?>

<style type="text/css" media="screen">

.about-page .banner-diagonal {
    background: #fff;
    min-height: 100%;
    height: auto;
    max-height: 872px;
    padding: 0;
    position: relative;
    margin: 0;
}

.about-page  .banner-diagonal h1 {
    font-size: 44px!important;
    line-height: 44px;
    margin: 0 0 44px 0;
    color: #111;
}

.about-page  .banner-diagonal p {
    max-width: 100%;
    font-size: 24px;
    font-weight: 300;
    color: #666;
    margin: 0;
	margin-top:10px;
	margin-bottom: 40px;
}


.about-page .banner-diagonal .owl-carousel {
    min-height: 200px;
}

.about-page .banner-diagonal .owl-carousel {
    max-height: 560px;
    overflow: hidden;
}
.owl-carousel.owl-loaded {
    display: block;
}

.owl-carousel {
    width: 100%;
    -webkit-tap-highlight-color: transparent;
    position: relative;
    z-index: 1!important;
}

.owl-carousel .owl-stage {
    position: relative;
}

.owl-carousel .owl-stage-outer {
    position: relative;
    overflow: hidden;
    -webkit-transform: translate3d(0,0,0);
}

.owl-carousel .owl-item {
    position: relative;
    min-height: 1px;
    float: left;
    -webkit-backface-visibility: hidden;
    -webkit-tap-highlight-color: transparent;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

owl-carousel .owl-item img {
    transform-style: preserve-3d;
}
.owl-carousel .owl-item img {
    display: block;
    width: 100%;
}

@media (min-width: 992px)
.about-page .banner-diagonal .owl-nav {
    bottom: 70px;
    margin-right: -480px;
}

@media (min-width: 768px)
.about-page .banner-diagonal .owl-nav {
    width: auto;
    right: 50%;
    bottom: 70px;
    margin-right: -350px;
}

.about-page .banner-diagonal .owl-nav {
    text-align: center;
    position: absolute;
    width: 100%;
    bottom: -10px;
    z-index: 9;
    display: none;
}


@media (min-width: 768px)
.about-page .info-post-slider {
    margin-top: -50px;
    padding-bottom: 50px;
}
.about-page .info-post-slider {
    margin-top: -10px;
    text-align: center;
    border-bottom: 1px solid #d8d8d8;
    padding-bottom: 30px;
    position: relative;
    z-index: 99;
}

.about-page .missions {
    padding: 50px 0;
    text-align: center;
}


.about-page .missions h2 {
    font-size: 40px;
    line-height: 52px;
}
.about-page .missions h2 {
    font-size: 24px;
    line-height: 29px;
    color: #000;
    margin-top: 0;
    margin-bottom: 20px;
}
.about-page h1, .about-page h2 {
    font-weight: 300;
}

.about-page .missions p {
    max-width: 780px;
    margin: 0 auto;
    font-size: 18px;
    line-height: 30px;
}

p {
    display: block;
    -webkit-margin-before: 1em;
    -webkit-margin-after: 1em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
}

@media (min-width: 992px)
.about-page .team {
    width: auto;
    margin-right: 0;
}

@media (min-width: 768px)
.about-page .team {
    padding: 50px 0;
    width: auto;
    margin-right: 0;
}
.about-page .team {
    background: #1f242e;
    text-align: center;
    width: auto;
    margin-right: 0;
    padding: 30px 0;
}

.about-page a {
    text-decoration: none;
}

.about-page .info-post-slider .btn {
    padding: 14px 40px;
    margin: 0;
}


.btn.btn-lg, a.btn.btn-lg {
    line-height: 36px;
    font-size: 16px;
}

.btn, a.btn {
    -webkit-transition: background-color .2s ease;
    -moz-transition: background-color .2s ease;
    -ms-transition: background-color .2s ease;
    -o-transition: background-color .2s ease;
    transition: background-color .2s ease;
    text-transform: uppercase;
    letter-spacing: 2px;
    border: 0;
    font-weight: bold;
    border: 1px solid #d0d2d3;
    border-radius: 3px;
}

.btn.btn-success, a.btn.btn-success {
    background-color: #9585bf;
    color: #fff!important;
    border: 1px solid #9585bf;
}

.about-page .info-post-slider {
    margin-top: -50px;
    padding-bottom: 50px;
}
.about-page .info-post-slider {
    text-align: center;
    border-bottom: 1px solid #d8d8d8;
    position: relative;
    z-index: 99;
}
.about-page .banner-diagonal .owl-carousel {
    max-height: 616px;
    overflow: hidden;
}
.owl-carousel .owl-stage-outer {
    position: relative;
    overflow: hidden;
    -webkit-transform: translate3d(0,0,0);
}


.about-page .team {
    width: auto;
    margin-right: 0;
}

.about-page .team {
    padding: 50px 0;
    width: auto;
}


.about-page .team h2 {
    font-size: 40px;
    line-height: 48px;
    margin-bottom: 40px;
    color: #fff;
}


.about-page .team article {
    font-size: 12px;
    min-height: 220px;
    max-height: 0;
}
.about-page .team article {
    color: #979797;
    margin-bottom: 20px;
    position: relative;
}

.about-page .team article {
    float: left;
    width: 20%;
    padding-right: 0;
    background-clip: content-box;
}


about-page .team article img {
    width: 100px;
    height: 100px;
    max-width: 100%;
}
.about-page .team article img {
    border-radius: 50%;
    background-clip: padding-box;
    overflow: hidden;
}

about-page .team article h4 {
    display: block;
}
.about-page .team article h4 {
    font-size: 20px;
    color: #fff;
    line-height: 22px;
    margin-bottom: 12px;
}

.about-page .team article p {
    display: block;
}
.about-page .team article p {
    font-size: 12px;
    margin: 0;
    line-height: 1.4;
    padding: 0 12px;
}


.about-page .team article .hover {
    background: #fff;
    width: 100%;
    visibility: hidden;
    opacity: 0;
    position: absolute;
    z-index: 99;
    -webkit-border-radius: 0 0 4px 4px;
    border-radius: 0 0 4px 4px;
    background-clip: padding-box;
    -webkit-box-shadow: 0 3px 3px rgba(0,0,0,0.36);
    box-shadow: 0 3px 3px rgba(0,0,0,0.36);
}

.about-page .team-slider {
    display: none;
}
.about-page .team-slider {
    position: absolute;
    left: -9999em;
    top: -999em;
    width: 100%;
}

.about-page .where-we-are .map img {
    width: 100%;
    height: auto;
    opacity: .2;
}

.about-page .where-we-are .map {
    margin-top: 30px;
}
.about-page .where-we-are .map {
    position: relative;
    max-width: 1400px;
    display: block;
    margin: 0 auto;
}

.about-page .where-we-are .tooltip.hq {
    background: #9585bf;
}
.about-page .where-we-are .tooltip-1 {
    top: 40.92%;
    left: 14.09%;
}

.about-page .where-we-are .tooltip-2 {
    top: 88.85%;
    left: 29.3%;
}


.about-page .where-we-are .tooltip-3 {
    top: 28.9%;
    left: 45.8%;
}


.about-page .where-we-are .tooltip.tooltip-4 {
    top: 81.7%;
    left: 91.5%;
}

.about-page .where-we-are .tooltip-5 {
    top: 38.5%;
    left: 26.8%;
}

.about-page .where-we-are .tooltip-6 {
    top: 43.3%;
    left: 12.8%;
}

.about-page .where-we-are .tooltip-7 {
    top: 84%;
    left: 28%;
}

.about-page .where-we-are .tooltip-8 {
    top: 38.5%;
    left: 21.7%;
}



.about-page .contacts {
    padding-bottom: 50px;
}
.about-page .contacts {
    background-color: #24242a;
    text-align: center;
    padding: 30px 0;
}


@media (min-width: 768px)
.about-page .team-slider {
    display: none;
}
.about-page .team-slider {
    position: absolute;
    left: -9999em;
    top: -999em;
    width: 100%;
}

.about-page .where-we-are .tooltip {
    position: absolute;
    height: 1.4%;
    width: .8%;
    cursor: pointer;
    border-radius: 30px;
    background-clip: padding-box;
    background: #fff;
    display: block;
    z-index: 99;
}

.animated.bounceIn, .animated.bounceOut {
    -webkit-animation-duration: .75s;
    animation-duration: .75s;
}
.animated.bounceIn, .animated.bounceOut {
    -webkit-animation-duration: .75s;
    animation-duration: .75s;
}
.animated.bounceIn, .animated.bounceOut {
    -webkit-animation-duration: .75s;
    animation-duration: .75s;
}
.animated.bounceIn, .animated.bounceOut {
    -webkit-animation-duration: .75s;
    animation-duration: .75s;
}
.bounceIn {
    -webkit-animation-name: bounceIn;
    animation-name: bounceIn;
}
.animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}
.tooltip {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 12px;
    font-weight: normal;
    line-height: 1.4;
    opacity: 0;
}

.about-page .where-we-are {
    background-color: #26262d;
    text-align: center;
    position: relative;
    padding-top: 30px;
    padding-bottom: 30px;
    overflow: hidden;
}

.about-page .where-we-are h2 {
    color: #fff;
}

about-page .where-we-are p {
    font-size: 24px!important;
    line-height: 34px;
}

.about-page .where-we-are p {
    color: #a7b5b9;
    margin-top: 10px;
    font-size: 24px;
	line-height: 34px;
}


.about-page .advisors {
    padding: 50px 0;
}
.about-page .advisors {
    text-align: center;
    border-bottom: 1px solid #d8d8d8;
    padding: 30px 0;
}

.about-page .advisors h2 {
    font-size: 40px;
    line-height: 48px;
    margin-bottom: 40px;
color: #444444;
}


.about-page .advisors section {
    padding: 0 70px;
    width: auto;
    margin-right: 0;
}

.about-page .advisors section article {
    float: left;
    width: 20%;
    padding-right: 0;
    background-clip: content-box;
}

.about-page .advisors article p {
    display: block;
}
.about-page .advisors article p {
    font-size: 12px;
    line-height: 1.4;
    padding: 0 15px;
    margin: 0;
    text-transform: uppercase;
}

.about-page .advisors {
    text-align: center;
    border-bottom: 1px solid #d8d8d8;
    padding: 30px 0;
}

.about-page .advisors article {
    margin-bottom: 0;
}

</style>
<!--  ================================================== End Header -->

<div class="about-page">

<div class="banner-diagonal">
<div class="owl-carousel owl-theme owl-loaded owl-text-select-on">

<div class="owl-stage-outer">
<div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 1008px;">
<div class="owl-item active" style="width: 1008px; margin-right: 0px;">
<img src="//everpayinc.com/assets/app/img/bg-3.jpg" alt="">
</div>
</div>
</div>

<div class="owl-controls">

<div class="owl-nav">
<div class="owl-prev" style=""></div>
<div class="owl-next" style=""></div>
</div>
<div class="owl-dots" style="display: none;"></div>
</div>

</div>

<div class="info-post-slider">
<div class="container">
<h1 class="animated fadeInDown" style="visibility: visible;">About Us</h1>
<p>We're a team of developers that got tired of the friction caused by complex and limited payment environments. So we built a zero-friction, infinitely extensible, enterprise-class web-scale cloud solution that makes payments easy.</p>
<a href="#meet-the-team" data="scroll-to" class="btn btn-success btn-lg">MEET THE TEAM</a>
</div>
</div>

</div>

<div class="missions">
<div class="container">
<h2>Our Mission</h2>
<p>Zero-friction payments and commerce for the rest of us.</p>
</div>
</div>


<div id="meet-the-team" class="team team-random">
<div class="container">
<h2>The Team</h2>
<section>

<article></article>
<article></article>
<article></article>
<article></article>
<article></article>

</section>

</div>
</div><!--END#meet-the-team--->


<div class="advisors hidden">
<div class="container">
<h2>Advisors</h2>
<section>

<article>
<a href="https://twitter.com/gblock" target="_blank"><img src="/lib/about/img/glenn.png" alt="Glenn Block"></a>
<h4><a href="https://twitter.com/gblock" target="_blank">Glenn Block</a></h4>
<p>Product Manager at Splunk. Ex Microsoft. OSS.</p>
</article>

<article>
<a href="https://twitter.com/rauchg" target="_blank"><img src="/lib/about/img/guillermo.png" alt="Guillermo Rauch"></a><h4><a href="https://twitter.com/rauchg" target="_blank">Guillermo Rauch</a></h4><p>Creator of Socket.IO. Founder of Cloudup.</p></article><article><a href="https://twitter.com/dscape" target="_blank"><img src="/lib/about/img/nuno.png" alt="Nuno Job"></a><h4><a href="https://twitter.com/dscape" target="_blank">Nuno Job</a></h4><p>Director at YLD, ex Nodejitsu.</p></article><article><a href="http://en.wikipedia.org/wiki/Steve_Coast" target="_blank"><img src="/lib/about/img/steve.png" alt="Steve Coast"></a><h4><a href="http://en.wikipedia.org/wiki/Steve_Coast" target="_blank">Steve Coast</a></h4><p>Founder of OpenStreetMap.</p></article><article><a href="http://en.wikipedia.org/wiki/Tim_Bray" target="_blank"><img src="/lib/about/img/tim.png" alt="Tim Bray"></a><h4><a href="http://en.wikipedia.org/wiki/Tim_Bray" target="_blank">Tim Bray</a></h4><p class="width">Founder of two companies. Maker of internet standars. Veteran of sun Microsystems and Google.</p></article>

</section>
</div>
</div>


<div class="where-we-are">

<div class="container">
<h2>Where we are</h2><p>Offices</p>
</div>
<div class="map">
<img src="//everpayinc.com/assets/app/img/map.svg" alt="">
<div class="tooltip tooltip-1 hq wow bounceIn animated" style="visibility: visible; animation-name: bounceIn;">
<div class="glow wow blip animated" style="visibility: visible; animation-name: blip;"></div>
<div class="hold"><p>Toronto HQ</p>
<p class="grey">Bloor & Yonge St, Toronto, ON</p>
<a href="https://goo.gl/maps/s0qnv" target="_blank">View on Google Maps</a></div>
</div>
<div class="tooltip tooltip-2 hq wow bounceIn animated" style="visibility: visible; animation-name: bounceIn;">
<div class="glow wow blip animated" style="visibility: visible; animation-name: blip;"></div>
<div class="hold"><p>Argentina HQ</p><p class="grey"></p><a href="https://goo.gl/maps/j5hao" target="_blank">View on Google Maps</a></div></div>
<div class="tooltip tooltip-3 wow bounceIn animated" style="visibility: visible; animation-name: bounceIn;">
<div class="hold"><p>Brussels</p></div></div>
<div class="tooltip tooltip-4 wow bounceIn animated" style="visibility: visible; animation-name: bounceIn;">
<div class="hold"><p>Sydney</p></div>
</div>
<div class="tooltip tooltip-5 wow bounceIn animated" style="visibility: visible; animation-name: bounceIn;"><div class="hold"><p>Philadelphia</p></div></div><div class="tooltip tooltip-6 wow bounceIn animated" style="visibility: visible; animation-name: bounceIn;"><div class="hold"><p>Mountain View</p></div></div><div class="tooltip tooltip-7 wow bounceIn animated" style="visibility: visible; animation-name: bounceIn;"><div class="hold"><p>Córdoba</p></div></div><div class="tooltip tooltip-8 wow bounceIn animated" style="visibility: visible; animation-name: bounceIn;">
<div class="hold"><p>Miami</p></div>
</div>
</div>
</div>


<div class="team-slider"><div class="overlay"><div class="close-slider"><i class="icon-budicon-471"></i></div></div><div class="slider"><div class="bx-wrapper" style="max-width: 760px; margin: 0px auto;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 310px;"><section style="width: 4315%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);"><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;" class="bx-clone"><div class="profile"><img src="https://www.gravatar.com/avatar/fd8e29ed66618ba98de8e0b09e09c353.png?size=200" alt="Sebastian Rodriguez Guevara"><h4>Sebastian Rodriguez Guevara</h4><p>DevOps Engineer</p></div><div class="hover"><p>Linux lover, former sysadmin. Beatles fan.</p></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;" class="bx-clone"><div class="profile"><img src="/lib/about/img/mark.png" alt="Mark Olson"><h4>Mark Olson</h4><p>CFO</p></div><div class="hover"><p>CFO. Compliance. Excel is my middle name.</p></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;" class="bx-clone"><div class="profile"><img src="https://www.gravatar.com/avatar/1329d9e3f4bc1d233788c89c04410bfe.png?size=200" alt="Victor Fernandez"><h4>Victor Fernandez</h4><p>Product Designer</p></div><div class="hover"><p>Design fundamentalist. Hipster developer. Lego assembly line expert.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/vctrfrnndz" target="_blank"></a></li><li class="git"><a href="https://github.com/vctrfrnndz" target="_blank"></a></li><li class="dribble"><a href="https://dribbble.com/vctrfrnndz" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://secure.gravatar.com/avatar/977b4137e1b2dd12d168726ede712b68?size=200" alt="Martin Cabral"><h4>Martin Cabral</h4><p>Engineer</p></div><div class="hover"><p>Code writer. Music Lover. Tennis player wannabe.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/mcabral_" target="_blank"></a></li><li class="git"><a href="https://github.com/cabralmartin" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;" class="active-slide"><div class="profile"><img src="https://www.gravatar.com/avatar/4d44bd6c8bbd97dfeb5e9c299aaa68c5?size=200" alt="Jose Romaniello"><h4>Jose Romaniello</h4><p>Head Of Engineering</p></div><div class="hover"><p>Coder. Dad. OSS contributor. Fernet Barista.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/jfroma" target="_blank"></a></li><li class="git"><a href="https://github.com/jfromaniello" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="/lib/about/img/german.png" alt="Germán Lena"><h4>Germán Lena</h4><p>Customer Success Engineer</p></div><div class="hover"><p>Love to make things. OSS, data analysis and visualization fan. Surf enthusiast.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/german_lena" target="_blank"></a></li><li class="git"><a href="https://github.com/glena" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://www.gravatar.com/avatar/1c9619a22f32012221bd59296dc9a1a2?size=200" alt="Damian Schenkelman"><h4>Damian Schenkelman</h4><p>Engineer</p></div><div class="hover"><p>Backend Ranger. Asado Advocate. Joke Teller. Human Reverse Proxy.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/dschenkelman" target="_blank"></a></li><li class="git"><a href="https://github.com/dschenkelman" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://www.gravatar.com/avatar/43103c16a95db00e7bab1f34d4d6ff8c?size=200" alt="Sebastian Iacomuzzi"><h4>Sebastian Iacomuzzi</h4><p>Engineer</p></div><div class="hover"><p>Backend Dev from Quemu Quemu, La Pampa. I know what "Zermatt" means.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/sebasiaco" target="_blank"></a></li><li class="git"><a href="https://github.com/siacomuzzi" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://www.gravatar.com/avatar/aad435650eb4a93583d6aaa19f3a91f4.png?size=200" alt="Gianpaolo Carraro"><h4>Gianpaolo Carraro</h4><p>VP of Sales &amp; Marketing</p></div><div class="hover"><p>Dotcom refugee. Poker dude. Ex-Microsoft. Three passports. Bad surfer. Sexy accent.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/gcarraro" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="/lib/about/img/jon.png" alt="Jon Gelsey"><h4>Jon Gelsey</h4><p>CEO</p></div><div class="hover"><p>CEO. Ex-Microsoft. Ex-Intel. Ex-Convex. Designer of super computers.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/jgelsey" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://www.gravatar.com/avatar/df6c864847fba9687d962cb80b482764?size=200" alt="Martín Gontovnikas"><h4>Martín Gontovnikas</h4><p>Director of Customer Acquisition</p></div><div class="hover"><p>I solved P vs NP problem. I &lt;3 JS, OSS, meat and a good beer in that order.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/mgonto" target="_blank"></a></li><li class="git"><a href="https://github.com/mgonto" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://www.gravatar.com/avatar/75685fa1a59cef5672f0c0c16e260142.png?size=200" alt="Rodrigo López Dato"><h4>Rodrigo López Dato</h4><p>Customer Success Engineer</p></div><div class="hover"><p>I write functional programs and bob my head in odd time signatures.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/rolodato" target="_blank"></a></li><li class="git"><a href="https://github.com/rolodato" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://www.gravatar.com/avatar/6c6e0fc118f7fe998f8621165e147d98?size=200" alt="Federico Jack"><h4>Federico Jack</h4><p>Director of Finance &amp; Operations</p></div><div class="hover"><p>Finance. Operations. Ultramarathon runner.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/fedejack" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile active"><img src="https://www.gravatar.com/avatar/5d93307289470aa3c717b245369d2f20.png?size=200" alt="Nicolas Garro"><h4>Nicolas Garro</h4><p>User Interface Designer</p></div><div class="hover"><p>a.k.a. Evil Rabbit. Material Designer. Sketch Jedi. Ex-Lead Designer at MTV Latam.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/evilrabbit_" target="_blank"></a></li><li class="dribble"><a href="https://dribbble.com/evilrabbit" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://www.gravatar.com/avatar/d48b998c2dce49ca309710eba498c562.png?s=200" alt="Nathan Totten"><h4>Nathan Totten</h4><p>Customer Success Engineer</p></div><div class="hover"><p>Developer, customer success, learning. Formerly, Microsoft and Iowa.</p><ul class="social"><li class="twitter"><a href="http://twitter.com/ntotten" target="_blank"></a></li><li class="git"><a href="https://github.com/ntotten" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://www.gravatar.com/avatar/3f695f9558dd12d86a90dbc59b284f9b.png?size=200" alt="Leonardo Helman"><h4>Leonardo Helman</h4><p>DevOps Engineer</p></div><div class="hover"><p>Developer. Sysadmin. Technical. Pilot.</p><ul class="social"><li class="git"><a href="https://github.com/lhelman" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://www.gravatar.com/avatar/647b1eea820b3fc8a5aee0383930b888.png?size=200" alt="Pablo Terradillos"><h4>Pablo Terradillos</h4><p>Engineer</p></div><div class="hover"><p>Developer. OSS fan. Half actor and Pokemon trainer.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/tehsis" target="_blank"></a></li><li class="git"><a href="https://github.com/tehsis" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="/lib/about/img/eugenio.png" alt="Eugenio Pace"><h4>Eugenio Pace</h4><p>Co-Founder, VP Customer Success</p></div><div class="hover"><p>Electrical engineer. Software practitioner. Amateur mechanic &amp; builder. &lt;3 customers.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/eugenio_pace" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="/lib/about/img/jared.png" alt="Jared Hanson"><h4>Jared Hanson</h4><p>Engineer</p></div><div class="hover"><p>Developer of Passport.js and other open source Node.js modules.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/jaredhanson" target="_blank"></a></li><li class="git"><a href="https://github.com/jaredhanson" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://secure.gravatar.com/avatar/7d590747a0cd8e24a4c86dd5fd9990ef?size=200" alt="Hern&amp;aacute;n Tierno"><h4>Hernán Tierno</h4><p>Engineer</p></div><div class="hover"><p>Passionate Software Developer. Love simple solutions and the Unix Philosophy.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/hernanhht" target="_blank"></a></li><li class="git"><a href="https://github.com/hernanhht" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://www.gravatar.com/avatar/5196c6f42d47f5583bbce2120affd4b1?size=200" alt="Matías Woloski"><h4>Matías Woloski</h4><p>Co-Founder, CTO</p></div><div class="hover"><p>Crypto Geek. Culture Maker. Piano Player.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/woloski" target="_blank"></a></li><li class="git"><a href="https://github.com/woloski" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://www.gravatar.com/avatar/53f70144dc9d7c76455fa91f858d4cec?size=200" alt="Tomasz Janczuk"><h4>Tomasz Janczuk</h4><p>Engineer</p></div><div class="hover"><p>Software - shaken, not stirred. Auth0 via MS (12 years), HP (1/2 years), and 47 Chapters.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/tjanczuk" target="_blank"></a></li><li class="git"><a href="https://github.com/tjanczuk" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://secure.gravatar.com/avatar/05a4170856a6157f81319595e42fdc5b?size=200" alt="Gabriel Andretta"><h4>Gabriel Andretta</h4><p>Engineer</p></div><div class="hover"><p>I like programming languages where parens hug the code.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/gnandretta" target="_blank"></a></li><li class="git"><a href="https://github.com/gnandretta" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://www.gravatar.com/avatar/27396b3fa24389198ef5d3e7e410e9c4?size=200" alt="Ricardo Rauch"><h4>Ricardo Rauch</h4><p>Head of Design</p></div><div class="hover"><p>Designer / Developer. He previously contributed to OSS projects. Sketch, Jade &amp; Stylus.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/rickyrauch" target="_blank"></a></li><li class="git"><a href="https://github.com/rickyrauch" target="_blank"></a></li><li class="dribble"><a href="https://dribbble.com/rickyrauch" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="/lib/about/img/patricio.png" alt="Patricio Reller"><h4>Patricio Reller</h4><p>Customer Success Engineer</p></div><div class="hover"><p>Jack of all trades, master of none.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/patricioyr" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://s.gravatar.com/avatar/ac6180a212130c95c85b7ba2913a02dc.png?size=200" alt="Peter Stromquist"><h4>Peter Stromquist</h4><p>Customer Success Engineer</p></div><div class="hover"><p>Family man. Fixed-gear biker. Ex-dev manager &amp; Ex-big-enterprise. Minimalist Platforms and Lightweight Frameworks.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/twistedstream" target="_blank"></a></li><li class="git"><a href="https://github.com/twistedstream" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="/lib/about/img/yvonne.jpg" alt="Yvonne Wilson"><h4>Yvonne Wilson</h4><p>Director of Customer Success</p></div><div class="hover"><p>Identity,  Security, Operational Excellence,  Scaling, Tech Adventurer, Cyclist &amp; Quilter.</p></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://avatars1.githubusercontent.com/u/655409?v=3&amp;s=460" alt="Sandrino Di Mattia"><h4>Sandrino Di Mattia</h4><p>Customer Success Engineer</p></div><div class="hover"><p>Developer. Father of 3. Microsoft Azure MVP.</p><ul class="social"><li class="twitter"><a href="https://www.twitter.com/sandrinodm" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://www.gravatar.com/avatar/bb92524137114d812aa1cbbe70d35365?size=200" alt="Geoffrey Goodman"><h4>Geoffrey Goodman</h4><p>Engineer</p></div><div class="hover"><p>Creater of Plunker. Self-taught programmer and former Big 4 accountant. Off the beaten path.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/filearts" target="_blank"></a></li><li class="git"><a href="https://github.com/ggoodman" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://www.gravatar.com/avatar/35b47dce0e2c9ced8b500dca20e1a657.png?size=200" alt="Benjamín Flores"><h4>Benjamín Flores</h4><p>User Interface Developer</p></div><div class="hover"><p>Dev passionate. Geek toys lover. Capital City hater. All is possible with cheerful music.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/beneliflo_" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="/lib/about/img/kelsey.png" alt="Kelsey Flittner"><h4>Kelsey Flittner</h4><p>Director of marketing and communications</p></div><div class="hover"><p>Brand. Marketing. Communications. I love chocolate. The end.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/kelseyoneal" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="/lib/about/img/erin.png" alt="Erin Staeger"><h4>Erin Staeger</h4><p>Executive Assistant</p></div><div class="hover"><p>Executive Assistant. Ex Accountant. Dog Lover.</p></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://secure.gravatar.com/avatar/73beae90bfcfea6bb084d34120e8b9cf?size=200" alt="Chris Keyser"><h4>Chris Keyser</h4><p>Customer Success Engineer</p></div><div class="hover"><p>Love writing code. Big tech survivor (Amazon, Microsoft). Navy nuke. Harley rider. Lousy golfer.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/chriskeyser" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="/lib/about/img/jeremy.png" alt="Jeremy Jacobs"><h4>Jeremy Jacobs</h4><p>Director of Sales &amp; Business development</p></div><div class="hover"><p>Expert Developer... of Relationships. CRM/Excel Geek. Hit a homerun at Yankee Stadium.</p></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://www.gravatar.com/avatar/34f27c88555c8c99b965d8137e16bfd9?size=200" alt="Cristian Douce"><h4>Cristian Douce</h4><p>Engineer</p></div><div class="hover"><p>Javascript Mechanic. Node.js zen-monk. OSS contributor. CDD &amp; HRDD.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/cristiandouce" target="_blank"></a></li><li class="git"><a href="https://github.com/cristiandouce" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="/lib/about/img/clayton.png" alt="Clayton Moulynox"><h4>Clayton Moulynox</h4><p>Director of Partner Success</p></div><div class="hover"><p>Technology partner enabler; status quo challenger; ex-Microsoft; an Aussie - G'day mate.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/claytonhm" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://www.gravatar.com/avatar/48537be253912e7348715f32cd21584b.png?s=200" alt="Federico Molina"><h4>Federico Molina</h4><p>Data Scientist</p></div><div class="hover"><p>Performance Marketer. Data Scientist. Poker Aficionado. Hubot Negative Points Accumulator.</p><ul class="social"><li class="twitter"><a href="https://www.twitter.com/federicomolina" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://www.gravatar.com/avatar/9d6add4b3a385afde6c23d6d56fbf838?size=200" alt="Alberto Pose"><h4>Alberto Pose</h4><p>Engineer</p></div><div class="hover"><p>I write code that writes code.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/thepose" target="_blank"></a></li><li class="git"><a href="https://github.com/pose" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://secure.gravatar.com/avatar/0489a38497cc617a224660284341921d?size=200" alt="Giray Özşeker"><h4>Giray Özşeker</h4><p>Data Intern</p></div><div class="hover"><p>Istanbul native, Texan for the last two years, recently Porteño. Four languages. Wannabe data scientist.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/ozgirayozTX" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://secure.gravatar.com/avatar/bb9128fac91692ad4f46a785d772dd39?s=200" alt="Pablo Seibelt"><h4>Pablo Seibelt</h4><p>Data Scientist</p></div><div class="hover"><p>Software Developer, Data Science Specialist &amp; Otaku. Mate and Chipá advocate.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/sicarul" target="_blank"></a></li><li class="git"><a href="https://github.com/sicarul" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://www.gravatar.com/avatar/b93af62499ed0f76f280acb37913f15d.png?size=200" alt="Hernan Zalazar"><h4>Hernan Zalazar</h4><p>Engineer (Native UX)</p></div><div class="hover"><p>Mobile wizard, jack of all trades. Beer &amp; Football fundamentalist. Scotch aficionado.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/hzalaz" target="_blank"></a></li><li class="git"><a href="https://github.com/hzalaz" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://www.gravatar.com/avatar/fd8e29ed66618ba98de8e0b09e09c353.png?size=200" alt="Sebastian Rodriguez Guevara"><h4>Sebastian Rodriguez Guevara</h4><p>DevOps Engineer</p></div><div class="hover"><p>Linux lover, former sysadmin. Beatles fan.</p></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="/lib/about/img/mark.png" alt="Mark Olson"><h4>Mark Olson</h4><p>CFO</p></div><div class="hover"><p>CFO. Compliance. Excel is my middle name.</p></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;"><div class="profile"><img src="https://www.gravatar.com/avatar/1329d9e3f4bc1d233788c89c04410bfe.png?size=200" alt="Victor Fernandez"><h4>Victor Fernandez</h4><p>Product Designer</p></div><div class="hover"><p>Design fundamentalist. Hipster developer. Lego assembly line expert.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/vctrfrnndz" target="_blank"></a></li><li class="git"><a href="https://github.com/vctrfrnndz" target="_blank"></a></li><li class="dribble"><a href="https://dribbble.com/vctrfrnndz" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;" class="bx-clone"><div class="profile"><img src="https://secure.gravatar.com/avatar/977b4137e1b2dd12d168726ede712b68?size=200" alt="Martin Cabral"><h4>Martin Cabral</h4><p>Engineer</p></div><div class="hover"><p>Code writer. Music Lover. Tennis player wannabe.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/mcabral_" target="_blank"></a></li><li class="git"><a href="https://github.com/cabralmartin" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;" class="bx-clone"><div class="profile"><img src="https://www.gravatar.com/avatar/4d44bd6c8bbd97dfeb5e9c299aaa68c5?size=200" alt="Jose Romaniello"><h4>Jose Romaniello</h4><p>Head Of Engineering</p></div><div class="hover"><p>Coder. Dad. OSS contributor. Fernet Barista.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/jfroma" target="_blank"></a></li><li class="git"><a href="https://github.com/jfromaniello" target="_blank"></a></li></ul></div></article><article style="float: left; list-style: none; position: relative; width: 20px; margin-right: 20px;" class="bx-clone"><div class="profile"><img src="/lib/about/img/german.png" alt="Germán Lena"><h4>Germán Lena</h4><p>Customer Success Engineer</p></div><div class="hover"><p>Love to make things. OSS, data analysis and visualization fan. Surf enthusiast.</p><ul class="social"><li class="twitter"><a href="https://twitter.com/german_lena" target="_blank"></a></li><li class="git"><a href="https://github.com/glena" target="_blank"></a></li></ul>
</div></article></section></div></div></div></div>

</div><!--END#about--->

<!-- Footer================================================== -->

<?=$this->load->view(branded_view('common/footer'));?>