<?=$this->load->view(branded_view('cp/header')); ?>


<style>
/* -------------------------------- 

Primary style

-------------------------------- */
html * {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

*, *:after, *:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}


a {
  text-decoration: none;
}

img {
  max-width: 100%;
}

/* -------------------------------- 

Modules - reusable parts of our design

-------------------------------- */
.cd-container {
  /* this class is used to give a max-width to the element it is applied to, and center it horizontally when it reaches that max-width */
  width: 90%;
  max-width: 1170px;
  margin: 0 auto;
}
.cd-container::after {
  /* clearfix */
  content: '';
  display: table;
  clear: both;
}

.cd-img-replace {
  /* replace text with background images */
  display: inline-block;
  overflow: hidden;
  text-indent: 100%;
  white-space: nowrap;
}
.hide-bullets {
    list-style:none;
    margin-left: -40px;
    margin-top:20px;
}

.thumbnail {
    padding: 0;
}

.carousel-inner>.item>img, .carousel-inner>.item>a>img {
    width: 100%;
}

/* -------------------------------- 

Main components 

-------------------------------- */

#cd-gallery-items {
  margin-top: 1.5em;
}
#cd-gallery-items > li {
  position: relative;
  margin-bottom: 6em;
}
#cd-gallery-items > li img {
  width: 100%;
  display: block;
}
@media only screen and (min-width: 768px) {
  #cd-gallery-items {
    margin-top: 2em;
  }
  #cd-gallery-items > li {
    width: 48%;
    float: left;
    margin-right: 4%;
    margin-bottom: 6.5em;
  }
  #cd-gallery-items > li:nth-child(2n) {
    margin-right: 0;
  }
}
@media only screen and (min-width: 1170px) {
  #cd-gallery-items {
    margin-top: 2.5em;
  }
  #cd-gallery-items > li {
    width: 31%;
    float: left;
    margin-bottom: 7em;
    margin-right: 3.5%;
  }
  #cd-gallery-items > li:nth-child(2n) {
    margin-right: 3.5%;
  }
  #cd-gallery-items > li:nth-child(3n) {
    margin-right: 0;
  }
}

.cd-item-wrapper {
  -webkit-perspective: 500px;
  -moz-perspective: 500px;
  perspective: 500px;
  -webkit-perspective-origin: 50% -30%;
  -moz-perspective-origin: 50% -30%;
  perspective-origin: 50% -30%;
}
.cd-item-wrapper li {
  position: absolute;
  top: 0;
  left: 0;
  /* Force Hardware Acceleration in WebKit */
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}
.cd-item-wrapper li.cd-item-front {
  position: relative;
  z-index: 3;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
}
.cd-item-wrapper li.cd-item-middle {
  z-index: 2;
}
.active .cd-item-wrapper li.cd-item-middle {
  /* 3D effect on touch devices */
  -webkit-transform: translate3d(0, 0, -20px);
  -moz-transform: translate3d(0, 0, -20px);
  -ms-transform: translate3d(0, 0, -20px);
  -o-transform: translate3d(0, 0, -20px);
  transform: translate3d(0, 0, -20px);
  opacity: .8;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
}
.cd-item-wrapper li.cd-item-back {
  z-index: 1;
}
.active .cd-item-wrapper li.cd-item-back {
  /* 3D effect on touch devices */
  -webkit-transform: translate3d(0, 0, -40px);
  -moz-transform: translate3d(0, 0, -40px);
  -ms-transform: translate3d(0, 0, -40px);
  -o-transform: translate3d(0, 0, -40px);
  transform: translate3d(0, 0, -40px);
  opacity: .4;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
}
.cd-item-wrapper li.cd-item-out {
  /* picture not visible - use this class in case you have more than 3 pictures per item */
  z-index: 0;
  opacity: 0;
  -webkit-transform: translate3d(0, 0, -60px);
  -moz-transform: translate3d(0, 0, -60px);
  -ms-transform: translate3d(0, 0, -60px);
  -o-transform: translate3d(0, 0, -60px);
  transform: translate3d(0, 0, -60px);
}
.cd-item-wrapper li.move-right {
  -webkit-transform: translate3d(200px, 0, 0);
  -moz-transform: translate3d(200px, 0, 0);
  -ms-transform: translate3d(200px, 0, 0);
  -o-transform: translate3d(200px, 0, 0);
  transform: translate3d(200px, 0, 0);
  opacity: 0;
  z-index: 4 !important;
}
.cd-item-wrapper li.hidden {
  /* used to hide the picture once it's pushed out - to the right */
  display: none !important;
}
.no-csstransitions .cd-item-wrapper li.cd-item-middle, .no-csstransitions .cd-item-wrapper li.cd-item-back {
  /* 3D effect not visible on browsers that don't support transitions */
  display: none;
}

.cd-item-info {
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  height: 70px;
  line-height: 70px;
  background-color: #f2f2f2;
  padding: 0 1em;
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
  z-index: 5;
}
.cd-item-info:after {
  content: "";
  display: table;
  clear: both;
}
.cd-item-info b {
  float: left;
  font-weight: bold;
}
.cd-item-info b a {
  color: #323d55;
}
.cd-item-info b a:hover {
  text-decoration: underline;
}
.cd-item-info em {
  float: right;
  color: #7385ad;
}

.cd-item-navigation a {
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  width: 36px;
  height: 66px;
  background-color: rgba(216, 216, 216, 0.4);
  background-image: url("../img/cd-icon-arrow.svg");
  background-repeat: no-repeat;
  background-position: center center;
  z-index: 4;
  display: none;
  border-radius: 0.25em;
}
.no-touch .cd-item-navigation a:hover {
  background-color: rgba(216, 216, 216, 0.6);
}
.cd-item-navigation a.visible {
  display: block;
  -webkit-animation: cd-fade-in 0.4s;
  -moz-animation: cd-fade-in 0.4s;
  animation: cd-fade-in 0.4s;
}
.cd-item-navigation li:nth-child(1) a {
  left: 14px;
  -webkit-transform: translateY(-50%) rotate(180deg);
  -moz-transform: translateY(-50%) rotate(180deg);
  -ms-transform: translateY(-50%) rotate(180deg);
  -o-transform: translateY(-50%) rotate(180deg);
  transform: translateY(-50%) rotate(180deg);
}
.cd-item-navigation li:nth-child(2) a {
  right: 14px;
}
.no-csstransitions .cd-item-navigation {
  display: none;
}

@-webkit-keyframes cd-fade-in {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}
@-moz-keyframes cd-fade-in {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}
@keyframes cd-fade-in {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}
.cd-3d-trigger {
  position: absolute;
  bottom: 10px;
  right: 10px;
  width: 44px;
  height: 44px;
  background: url("<?=branded_include('img/cd-icon-3d.svg');?>") no-repeat center center;
  z-index: 4;
}
.no-touch .cd-3d-trigger {
  display: none;
}

.no-touch #cd-gallery-items > li:hover .cd-item-middle, .no-touch #cd-gallery-items > li:hover .cd-item-back {
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
}
.no-touch #cd-gallery-items > li:hover .cd-item-middle {
  /* 3D effect on no-touch devices */
  -webkit-transform: translate3d(0, 0, -20px);
  -moz-transform: translate3d(0, 0, -20px);
  -ms-transform: translate3d(0, 0, -20px);
  -o-transform: translate3d(0, 0, -20px);
  transform: translate3d(0, 0, -20px);
  opacity: .8;
}
.no-touch #cd-gallery-items > li:hover .cd-item-back {
  /* 3D effect on no-touch devices */
  -webkit-transform: translate3d(0, 0, -40px);
  -moz-transform: translate3d(0, 0, -40px);
  -ms-transform: translate3d(0, 0, -40px);
  -o-transform: translate3d(0, 0, -40px);
  transform: translate3d(0, 0, -40px);
  opacity: .4;
}


.cd-single-item {
  position: relative;
  background: #ffffff; }

.cd-slider-wrapper {
  position: relative;
  z-index: 1;
  -webkit-transition: width 0.4s;
  -moz-transition: width 0.4s;
  transition: width 0.4s;
  /* Force Hardware Acceleration in WebKit */
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  will-change: width; }
  @media only screen and (min-width: 1024px) {
    .cd-slider-wrapper {
      width: 50%; }
      .cd-slider-active .cd-slider-wrapper {
        width: 100%; } }

.cd-slider {
  position: relative;
  z-index: 1;
  overflow: hidden; }
  .cd-slider::before {
    /* never visible - this is used in jQuery to check the current MQ */
    content: 'mobile';
    display: none; }
  .cd-slider li {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    height: 100%;
    width: 100%;
    -webkit-transform: translateX(100%);
    -moz-transform: translateX(100%);
    -ms-transform: translateX(100%);
    -o-transform: translateX(100%);
    transform: translateX(100%);
    -webkit-transition: -webkit-transform 0.3s;
    -moz-transition: -moz-transform 0.3s;
    transition: transform 0.3s; }
    .cd-slider li img {
      display: block;
      width: 100%; }
    .cd-slider li.selected {
      position: relative;
      z-index: 2;
      -webkit-transform: translateX(0);
      -moz-transform: translateX(0);
      -ms-transform: translateX(0);
      -o-transform: translateX(0);
      transform: translateX(0); }
    .cd-slider li.move-left {
      -webkit-transform: translateX(-100%);
      -moz-transform: translateX(-100%);
      -ms-transform: translateX(-100%);
      -o-transform: translateX(-100%);
      transform: translateX(-100%); }
  @media only screen and (min-width: 1024px) {
    .cd-slider {
      cursor: pointer; }
      .cd-slider::before {
        /* never visible - this is used in jQuery to check the current MQ */
        content: 'desktop'; }
      .cd-slider::after {
        /* slider cover layer - to indicate the image is clickable */
        content: '';
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(81, 62, 93, 0.4) url("<?=branded_include('img/cd-icon-zoom.svg');?>") no-repeat center center;
        /* size of the icon */
        background-size: 48px;
        opacity: 0;
        z-index: 4;
        -webkit-transition: opacity 0.2s;
        -moz-transition: opacity 0.2s;
        transition: opacity 0.2s; }
      .no-touch .cd-slider:hover::after {
        opacity: 1; }
      .cd-slider-active .cd-slider {
        cursor: auto; }
        .cd-slider-active .cd-slider::after {
          display: none; } }

@media only screen and (min-width: 1024px) {
  .cd-slider-navigation li, .cd-slider-pagination {
    opacity: 0;
    visibility: hidden;
    -webkit-transition: opacity 0.4s 0s, visibility 0s 0.4s;
    -moz-transition: opacity 0.4s 0s, visibility 0s 0.4s;
    transition: opacity 0.4s 0s, visibility 0s 0.4s; }
    .cd-slider-active .cd-slider-navigation li, .cd-slider-active .cd-slider-pagination {
      opacity: 1;
      visibility: visible;
      -webkit-transition: opacity 0.4s 0.4s, visibility 0s 0.4s;
      -moz-transition: opacity 0.4s 0.4s, visibility 0s 0.4s;
      transition: opacity 0.4s 0.4s, visibility 0s 0.4s; } }
.cd-slider-navigation li {
  position: absolute;
  z-index: 2;
  top: 50%;
  bottom: auto;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%); }
  .cd-slider-navigation li:first-of-type {
    left: 10px; }
  .cd-slider-navigation li:last-of-type {
    right: 10px; }
  .cd-slider-navigation li a {
    display: block;
    width: 48px;
    height: 48px;
    background: url("<?=branded_include('img/cd-icon-arrow.svg');?>") no-repeat center center;
    -webkit-transition: opacity 0.2s 0s, visibility 0s 0s;
    -moz-transition: opacity 0.2s 0s, visibility 0s 0s;
    transition: opacity 0.2s 0s, visibility 0s 0s;
    /* image replacement */
    overflow: hidden;
    text-indent: 100%;
    white-space: nowrap; }
    .cd-slider-navigation li a.inactive {
      opacity: 0;
      visibility: hidden;
      -webkit-transition: opacity 0.2s 0s, visibility 0s 0.2s;
      -moz-transition: opacity 0.2s 0s, visibility 0s 0.2s;
      transition: opacity 0.2s 0s, visibility 0s 0.2s; }
    .no-touch .cd-slider-navigation li a:hover {
      opacity: .7; }
  .cd-slider-navigation li:first-of-type a {
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    transform: rotate(180deg); }
  @media only screen and (min-width: 1024px) {
    .cd-slider-navigation li:first-child {
      left: 30px; }
    .cd-slider-navigation li:last-child {
      right: 30px; } }

.cd-slider-pagination {
  /* you won't see this element in the html but it will be created using jQuery */
  position: absolute;
  z-index: 2;
  bottom: 30px;
  left: 50%;
  right: auto;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%);
  visibility: hidden; }
  .cd-slider-pagination:after {
    content: "";
    display: table;
    clear: both; }
  .touch .cd-slider-pagination {
    visibility: hidden; }
  .cd-slider-pagination li {
    display: inline-block;
    float: left;
    margin: 0 5px; }
    .cd-slider-pagination li.selected a {
      background: #f5f4f3; }
  .cd-slider-pagination a {
    display: block;
    height: 12px;
    width: 12px;
    border-radius: 50%;
    border: 1px solid #f5f4f3;
    /* fix a bug in IE9/10 - transparent anchor not clickable */
    background-color: rgba(255, 255, 255, 0);
    /* image replacement */
    overflow: hidden;
    text-indent: 100%;
    white-space: nowrap; }

.cd-slider-wrapper .cd-close {
  display: none;
  position: absolute;
  z-index: 2;
  top: 30px;
  right: 30px;
  width: 48px;
  height: 48px;
  background: url("<?=branded_include('img/cd-icon-close.svg');?>") no-repeat center center;
  /* image replacement */
  overflow: hidden;
  text-indent: 100%;
  white-space: nowrap;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: -webkit-transform 0.3s 0s, visibility 0s 0.4s;
  -moz-transition: -moz-transform 0.3s 0s, visibility 0s 0.4s;
  transition: transform 0.3s 0s, visibility 0s 0.4s; }
  .cd-slider-active .cd-slider-wrapper .cd-close {
    visibility: visible;
    opacity: 1;
    -webkit-transition: -webkit-transform 0.3s 0s, visibility 0s 0s, opacity 0.4s 0.4s;
    -moz-transition: -moz-transform 0.3s 0s, visibility 0s 0s, opacity 0.4s 0.4s;
    transition: transform 0.3s 0s, visibility 0s 0s, opacity 0.4s 0.4s; }
  .no-touch .cd-slider-active .cd-slider-wrapper .cd-close:hover {
    -webkit-transform: scale(1.2);
    -moz-transform: scale(1.2);
    -ms-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2); }
  @media only screen and (min-width: 1024px) {
    .cd-slider-wrapper .cd-close {
      display: block; } }

.cd-item-info {
  padding: 50px 5%; }
  .cd-item-info h2, .cd-item-info p {
    max-width: 480px; }
  .cd-item-info h2 {
    font-size: 2.4rem;
    font-weight: bold; }
  .cd-item-info p {
    line-height: 1.6;
    margin: 1em 0;
    color: #666666; }
  .cd-item-info .add-to-cart {
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    -o-appearance: none;
    appearance: none;
    border: none;
    padding: .8em 1.6em;
    background-color: #f42e4e;
    color: #ffffff;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-family: "PT Sans", sans-serif;
    font-size: 1.6rem;
    font-weight: bold;
    cursor: pointer;
    border-radius: 4px; }
  @media only screen and (min-width: 1024px) {
    .cd-item-info {
      position: absolute;
      width: 50%;
      top: 0;
      right: 0;
      padding: 60px 60px 0;
      margin: 0; } }

.cd-content p {
  width: 90%;
  max-width: 768px;
  padding: 4em 0;
  margin: 0 auto;
  color: #afa8a0;
  line-height: 1.8; }

.info {
    padding: 10px;
    border-radius: 0 0 5px 5px;
    margin-top: 1px;
}

separator p {
    line-height: 20px;
    margin-bottom: 0;
    margin-top: 10px;
    text-align: center;
}

.btn-add {
    border-right: 1px solid #E1E1E1;
}
.btn-add {
    width: 50%;
    float: left;
}

.cd-btn {
    display: inline;
    padding: 0.5em 1em;
    color: #85d6de;
    border: 2px solid #85d6de;
    font-weight: 700;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    -webkit-transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1);
    transition-timing-function: cubic-bezier(0.75, 0, 0.125, 1);
	    border-radius: 25px;
}

.cd-btn :hover {
    background: transparent;
    color: #85d6de;
}

.separator p {
    line-height: 20px;
    margin-bottom: 0;
    margin-top: 10px;
    text-align: center;
}

.separator p i {
    margin-right: 5px;
}

.btn-details {
    width: 50%;
    float: left;
    padding-left: 10px;
}

.carousel-inner .active.left { left: -33%; }
.carousel-inner .next        { left:  33%; }
.carousel-inner .prev        { left: -33%; }
.carousel-control.left,.carousel-control.right {background-image:none;}
.item:not(.prev) {visibility: visible;}
.item.right:not(.prev) {visibility: hidden;}
.rightest{ visibility: visible;}

.Section {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    position: relative;
    height: 100vh;
    overflow-y: scroll;
    min-width: 600px;
}

.Gateways-toolbar {
    font-family: freight-sans-pro,Verdana,Geneva,sans-serif;
    padding: 20px 20px 0;
    background: #fff;
}

.GatewayList {
    display: flex;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 15px!important;
    -webkit-flex-direction: row;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
}

.Gateway-tile {
    box-sizing: border-box;
    min-width: 290px;
    width: 25%;
}

.Gateway-tile-inner {
    box-shadow: 0 1px 0 rgba(204,190,173,.2);
    border: 1px solid rgba(204,190,173,.5);
    font-family: 'Freight Sans',Verdana,Geneva,sans-serif;
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    box-sizing: border-box;
    text-align: center;
    border-radius: 4px;
    padding: 30px 20px;
    position: relative;
    -webkit-flex-flow: column;
    -ms-flex-flow: column;
    flex-flow: column;
    background: #fff;
    overflow: hidden;
    cursor: pointer;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin: 10px;
}

.Gateway-tile-logo {
    background-position: center center;
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    display: inline-block;
    text-indent: -9999px;
    position: relative;
    margin: 15px auto;
    text-align: left;
    font-size: 1.8em;
    height: 1em;
    width: 4em;
}

.Status {
    -webkit-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    margin-left: 2px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.Status--circle {
    background-color: #3CC76A;
    border-radius: 100%;
    margin-right: 10px;
    box-shadow: none;
    height: 9px;
    width: 9px;
    top: 4px;
}

.Status--label {
    font-family: 'freight-sans-pro SC',Verdana,Geneva,sans-serif;
    color: #3CC76A;
    letter-spacing: 1;
    text-align: left;
    font-weight: 400;
}
.Status--label, .SubmitField-button, .SubmitField-loader {
    display: inline-block;
}
.Status--label, .StatusLabel {
    font-size: 12px;
    text-transform: lowercase;
}
.Status, .Status--circle, .StatusLabel-icon, .SubmitField, .Table2-column, .Table2-columnLabel {
    position: relative;
}




</style>

<section class="vertical col-md-12">

<div class="GatewayList">
<div class="row-fluid"> 
<form class="form" id="form_email" method="post" action="<?=site_url('settings/new_gateway_details');?>">


	<? foreach ($gateways as $gateway) { ?>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-b-30">
	<div class="Gateway-tile disabled">
	<div class="Gateway-tile-inner" name="<?=$gateway['name'];?>">
	
	<a href="#" rel="popover" data-trigger="hover click" data-container="body" data-placement="auto" data-toggle="popover" title="<?=$gateway['name'];?>" data-content="">
	<h1 class="Gateway-tile-logo" style="background-image: url('<?=$gateway['name'];?>')"><span><?=$gateway['name'];?></span></h1></a>
	

<div id="gateway-details" class="pop-content">
			<h2><input type="radio" class="required" name="external_api" id="external_api" value="<?=$gateway['class_name'];?>" /></h2>

<div class="col-sm-12 hidden margin-top-20">
		<? if (!empty($gateway['purchase_link'])) { ?> 
		<span><a class="cd-btn" href="<?=$gateway['purchase_link'];?>">Apply</a></span>
		&nbsp;
		<? } ?>
			<span><a type="submit" class="cd-btn" name="go_gateway" value="" />Setup </a></span>
</div><!-- .col-sm-12-->
			</div><!-- .pop-content-->
		<div class="Status">
		<noscript></noscript>
		<div class="Status--label" style="color:#CCBEAD;">Disabled</div>
		</div>

</div><!-- .Gateway-tile-inner-->
	</div><!-- .Gateway-tile-->
	</div><!-- .col-md4-->
	<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        placement : 'right',
        trigger : 'hover',
        html : true,
        content : '<div class="media"><a href="#" class="pull-left"><p class="small description text-left"><?=$gateway['description'];?></p></a><div class="media-body"><div class="monthly_fee margin-b-30"><?=$gateway['monthly_fee'];?><h3>Monthly Fee</h3></div><div class="setup_fee margin-b-30"><?=$gateway['setup_fee'];?><h3>Setup Fee</h3></div><div class="transaction_fee margin-b-30"><?=$gateway['transaction_fee'];?><h3>Trans Fee</h3></div><p><div class="col-sm-12 margin-b-30"><? if (!empty($gateway['purchase_link'])) { ?> <span><a class="btn cd-btn" href="<?=$gateway['purchase_link'];?>">Apply</a></span>&nbsp;<? } ?><span><a type="submit" class="cd-btn" name="go_gateway" value="" />Setup </a></span></div><!-- .col-sm-12--></p></a></div>'
    });
});
</script>

	<? } ?>



</form>


	</div><!-- .row-->
	</div><!-- .GatewayList-->
	
		</section><!-- .Section-->
		
		
		


<script type="text/javascript" src="<?=branded_include('js/main-new.js');?>"></script>
<script>
$(".pop").popover({ trigger: "manual" , html: true, animation:false})
    .on("mouseenter", function () {
        var _this = this;
        $(this).popover("show");
        $(".popover").on("mouseleave", function () {
            $(_this).popover('hide');
        });
    }).on("mouseleave", function () {
        var _this = this;
        setTimeout(function () {
            if (!$(".popover:hover").length) {
                $(_this).popover("hide");
            }
        }, 300);
});

           </script>

<!--<script type="text/javascript" >
var popover = $("[rel=details]").popover({
 trigger : 'hover',  
 placement : 'bottom',
 html: 'true'
  }).on('show.bs.popover', function() { 
  //I saw an answer here  with 'show.bs.modal' it is wrong, this is the correct, 
  //also you can use   'shown.bs.popover to take actions AFTER the popover shown in screen.
  $.ajax({
     url : 'data.php', 
     success : function(html) {
         popover.attr('data-content', html);
     }
  });
 });
</script>-->

<script type="text/javascript">
$(function () {
	
   var $popoverInbox = $('#example').popover({
        title: 'Click Inside',
        placement: 'bottom',        
        template: '<div class="popover-all"><div class="popover-arrow"></div><form class="form" id="form_email" method="post" action="<?=site_url('settings/new_gateway_details');?>"><div class="popover-inner"><h3 class="popover-title">Example</h3><div class="popover-content"><p> Clicks:0 </p></div></form></div></div>'
    });
 
   var count=0;
    
   $(document).on({
   	 
      click: function() {
      	count += 1;
        var dataPopover = $popoverInbox.data('popover');
	dataPopover.tip().find('.popover-content').html('<p> Clicks:'+count+' </p>');
      }
      
   }, '.popover-all');
 
 
 
});
 
</script>

<script type="text/javascript">
$(".option").click(function(){
	$( this ).find( 'span' ).toggleClass( 'inactive' );
	$( this ).toggleClass('active');
	
});

$( "#btn-modal" ).click(function(){
	$( "#summary-list" ).empty();
	
	$( ".option" ).each(function() {
	  if( ! $( this ).children().hasClass( 'inactive' ))
	  	$( "#summary-list" ).append( "<li>" + $( this ).text() + "</li>" );

	});
	
	if( $( "#summary-list" ).children().length == 0 )
		$( "#summary-list" ).append( "<li>No options selected</li>" );
	
});

$( "#btn-reset" ).click( function(){
	$( ".option" ).each( function(){
		$( this ).children().addClass( 'inactive' );
		$( this ).removeClass( 'active' );

	});
});
</script>


 <script type="text/javascript" >	
	// Remember set you events before call bootstrapSwitch or they will fire after bootstrapSwitch's events
$("[name='external_api']").change(function() {
	if(!confirm('Do you wanna cancel me!')) {
		this.checked = true;
	}
});

$("[name='checkbox1'],[name='external_api'], [name='checkbox10']").bootstrapSwitch();

$("[name='external_api']").bootstrapSwitch({
	on: 'Enabled',
	off: 'Disabled',
	onClass: 'success',
	offClass: 'warning'
	    size: 'lg'
});

$("[name='checkbox4']").bootstrapSwitch({
    onLabel: 'closed',
    offLabel: 'open'
});

$("[name='checkbox5']").bootstrapSwitch({
    same: true
});

$("[name='checkbox6']").bootstrapSwitch({
    size: 'xs'
});
$("[name='checkbox7']").bootstrapSwitch({
    size: 'sm'
});
$("[name='checkbox8']").bootstrapSwitch({
    size: 'md'//default
});
$("[name='checkbox9']").bootstrapSwitch({
    size: 'lg'
});
</script>



 <script type="text/javascript" >
      jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
</script>

<?=$this->load->view(branded_view('cp/footer'));?>

<!-- Modal -->
<div class="modal fade" id="GatewayModal" tabindex="-1" role="dialog" aria-labelledby="GatewayModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
<form class="form" id="form_email" method="post" action="<?=site_url('settings/new_gateway_details');?>">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h1 class="modal-title" id="GatewayModalLabel">Setup <?=$gateway['class_name'];?></h1>
      </div>
      <div class="modal-body">
        <div class="row">
		
			<div class="item active">
                  <div class="col-lg-12 col-xs-12 col-md-12 col-sm-12 margin-b-20">
				  <h1><?=$gateway['name'];?> <input type="radio" class="hidden required" name="external_api" id="external_api" value="<?=$gateway['class_name'];?>" /></h1>
				  <div class="clearfix" style="height:40px;">
			      <p><?=$gateway['description'];?></p>
				 
	    <div class="monthly_fee"><h3>Monthly Fee: </h3> <?=$gateway['monthly_fee'];?></div>
		<div class="setup_fee"><h3>Setup Fee:</h3> <?=$gateway['setup_fee'];?></div>
		<div class="transaction_fee"><h3>Transaction Fee:</h3> <?=$gateway['transaction_fee'];?></div>
	
		</div>
		<hr>
        <ul id="summary-list">
        </ul>
      </div>
      <div class="modal-footer">
        <button href="<?=$gateway['purchase_link'];?>" type="button" class="btn btn-default" data-dismiss="modal">Apply</button>
        <button type="button" class="btn btn-primary">Save changes</button>
		</form>
      </div>
    </div>
  </div>
</div>
