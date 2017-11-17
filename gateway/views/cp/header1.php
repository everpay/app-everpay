<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$this->navigation->PageTitle();?></title>
<!-- Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<!-- BEGIN APPLE ICONS STYLES -->
        <link href="<?=branded_include('https://db.tt/xketQSS3');?>" rel="shortcut icon" />

<!-- BEGIN GLOBAL MANDATORY STYLES -->

<!-- JQueryUI v1.9.2 -->
<link href="<?=branded_include('dist/theme/scripts/jquery-ui-1.9.2.custom/css/smoothness/jquery-ui-1.9.2.custom.min.css');?>"type="text/css" />

<!-- Glyphicons -->
<link href="<?=branded_include('css/glyphicons.css');?>" rel="stylesheet" type="text/css" />

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link href="<?=branded_include('css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />

<link href="<?=branded_include('css/animation.css');?>" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
<!-- elektropay gateway theme -->
<link href="<?=branded_include('css/datepicker.css');?>" rel="stylesheet" type="text/css" />	

<link href="<?=branded_include('css/prettyPhoto.css');?>" rel="stylesheet" type="text/css" />
<!-- Notyfy -->
	<link href="<?=branded_include('css/jquery.notyfy.css');?>"type="text/css" />
	<link href="<?=branded_include('js/notyfy/themes/default.css');?>"type="text/css" />

<!-- Everpay extras -->		

<link href="<?=branded_include('css/ui.jqgrid.css');?>" rel="stylesheet" type="text/css" />

<!-- payment form styling CSS -->

<link href="<?=branded_include('css/paymill_styles.css');?>" rel="stylesheet" type="text/css" />

<!-- Everpay gateway styling -->

<link href="<?=branded_include('css/components-rounded.css');?>" id="style_components" rel="stylesheet" type="text/css" />

<link href="<?=branded_include('css/universal.css');?>" rel="stylesheet" type="text/css" media="screen" />

<link href="<?=branded_include('css/animate.min.css');?>" rel="stylesheet" type="text/css" />
	
<link href="<?=branded_include('css/everpay.min.css');?>" rel="stylesheet" type="text/css" media="screen" />	
		


<!--[if !IE]> -->
<script type="text/javascript" src="<?=branded_include('js/jquery.2.1.1.min.js');?>"></script>
<!-- <![endif]-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript" src="<?=branded_include('js/jquery.dlmenu.js');?>"></script>

<!--[if IE]>
<script type="text/javascript">
	window.jQuery || document.write("<script src="<?=branded_include('js/jquery1x.min.js');?>">"+"<"+"/script>");
</script>
<![endif]-->



<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<!-- BEGIN CORE PLUGINS -->

<script type="text/javascript" src="<?=branded_include('js/jquery-migrate-1.2.1.min.js');?>"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<!-- END CORE PLUGINS -->
<script type="text/javascript" src="<?=branded_include('js/date.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/datePicker.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/universal.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/ace-extra.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/card.js');?>"></script>

<script>
  $('#UpgradeButton').on('click', function () {
    var $btn = $(this).button('loading')
    // business logic...
    $btn.button('reset')
  })
</script> 


 <style type="text/css">
::selection {
	background:#4096ee;
	color:#fff;
}

::-moz-selection {
	background:#4096ee;
	color:#fff;
}

::-webkit-selection {
	background:#4096ee;
	color:#fff;
}

/******************************************************************
Main CSS
******************************************************************/

.navbar-inverse {
background-color: #fff!important;
border-color: #080808;
}


.page-header-top > .top-menu > .navbar-nav > li.dropdown {
margin: 0;
padding: 0 4px;
height: 50px;
display: inline-block;
top: 10px!important;
}

div#main {
	width: 360px;
	margin: 200px auto 20px auto;
}
.title {
	line-height: 1.2em;
	position: relative;
	margin-left: 40px;
}
div.icon {
	margin-top: 4px;
	float: left;
	width: 31px;
	height: 30px;
	background-image: url(../images/magnify.gif);
	background-repeat: no-repeat;
	-webkit-transition-property: background-position, color;
	-webkit-transition-duration: .2s, .1s;
	-webkit-transition-timing-function: linear, linear;
	-moz-transition-property: background-position, color;
	-moz-transition-duration: .2s, .1s;
	-ms-transition-duration: .2s, .1s;
	-ms-transition-timing-property: linear, linear;
	-o-transition-property: background-position, color;
	-o-transition-duration: .2s, .1s;
	-o-transition-timing-property: linear, linear;
	transition-property: background-position, color;
	transition-duration: .2s, .1s;
	transition-timing-property: linear, linear;
}
div.icon:hover {
	background-position: 0px -30px;
	cursor: pointer;
}
input#search {
	width: 360px;
	height: 38px;
	padding: 10px;
	margin-top: -8px;
	margin-bottom: 10px;
        margin-left: 20px;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	outline: none;
	border: 1px solid #ababab;
	font-size: 20px;
	line-height: 25px;
	color: #ababab;
}
input#search:hover, input#search:focus {
	color: #3b3b3b;
	border: 1px solid #36a2d2;
	-moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25) inset, 0 1px 0 rgba(255, 255, 255, 1);
	-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25) inset, 0 1px 0 rgba(255, 255, 255, 1);
	box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25) inset, 0 1px 0 rgba(255, 255, 255, 1);
}
h4#results-text {
	display: none;
}
ul#results {
	display: none;
	width: 360px;
	margin-top: 4px;
	border: 1px solid #ababab;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	-webkit-box-shadow: rgba(0, 0, 0, .15) 0 1px 3px;
	-moz-box-shadow: rgba(0,0,0,.15) 0 1px 3px;
	box-shadow: rgba(0, 0, 0, .15) 0 1px 3px;
}
ul#results li {
	padding: 8px;
	cursor: pointer;
	border-top: 1px solid #cdcdcd;
	transition: background-color .3s ease-in-out;
	-moz-transition: background-color .3s ease-in-out;
	-webkit-transition: background-color .3s ease-in-out;
}
ul#results li:hover {
	background-color: #F7F7F7;
}
ul#results li:first-child {
	border-top: none;
}
ul#results li h3, ul#results li h4 {
	transition: color .3s ease-in-out;
	-moz-transition: color .3s ease-in-out;
	-webkit-transition: color .3s ease-in-out;
	color: #616161;
	line-height: 1.2em;
}
ul#results li:hover h3, ul#results li:hover h4  {
	color: #3b3b3b;
	font-weight: bold;
}

#header_notification_bar{
	margin-top: 8px;
	margin-bottom: 10px;
        margin-left: 10px;
}

.btn-circle {
border-radius: 25px;
}

#map-canvas{
height: 380px;
width: 100%; 
background-size: 75%;
}

li { list-style-type: none; }

header { 
	width: 100%; 
	height: 50px; 
	margin: auto;
	border-bottom: 1px solid #EEE;
}

.page-logo {
float: left;
display: block;
width: 255px;
height: 75px;
margin-left: 10.5%;
margin-top:8px;
}


nav { width: 100%; text-align: left;padding-left: 10px; }
nav a { 
	display: block; 
	padding: 15px 0;
	color: #F0EADC;	
padding-left: 0px; 
}

nav a:hover { background: #ccc; color: #FFF; } 
nav li [class*=" fa-"], li [class*=" glyphicon-"], li [class*=" icon-"] {
display: inline-block;
width: 1.25em;
text-align: right;
margin-right: 15px;
}
nav li:last-child a { border-bottom: none; }

.nav>li>a {
position: relative;
display: block;
padding: 16px 12px!important;
font-size: 14px;
}


.nav>li>a:hover, .nav>li>a:focus {
	color: #444;
	outline: none;
	text-decoration: none;
}


/*-----------------------------------------*/

.navbar-menu {
border-right: 1px solid #fff;
color: #777777;
display: block;
float: left;
height: 90px;
padding: 18px 27px;
position: absolute;
text-decoration: none;
width: 85px;
}

.side-menu {
	width: 180px;
	height: 100%;
	position: absolute;
	background: #3D82AB;
	left: -180px;
        display: block;
	transition: all .3s ease-in-out;
	-webkit-transition: all .3s ease-in-out;
	-moz-transition: all .3s ease-in-out;
	-ms-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
font-size:15px;
text-indent: 10px;	
}
.side-menu-icon {
	padding: 10px 20px;
	background: #E5DAC0;
	color: #987D3E;
	cursor: pointer;
	float: right;
	margin-top: 4px;
	border-radius: 5px;
}
#menuToggle { display: none; }

#menuToggle:checked ~ .menu { position: absolute; left: 0; }

.modal-lg {
width: 100%!important;
margin: 0px auto;
}

.legalTable-lf{
font-size: 14px;

}


</style>



<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<script type="text/javascript">

var LocationData = [
	[49.2812668, -123.1035942, "26 E Hastings St, Vancouver" ], 
	[49.2814064, -123.1025187, "71 E Hastings St, Vancouver" ], 
	[49.2812336, -123.1020622, "122 E Hastings St, Vancouver" ], 
	[49.2813564, -123.1012253, "138 E Hastings St, Vancouver" ], 
	[72,71, "242 E Hastings St, Vancouver" ]
];

function initialize()
{
	var map = 
	    new google.maps.Map(document.getElementById('map-canvas'));
	var bounds = new google.maps.LatLngBounds();
	var infowindow = new google.maps.InfoWindow();
	
	for (var i in LocationData)
	{
		var p = LocationData[i];
		var latlng = new google.maps.LatLng(p[0], p[1]);
		bounds.extend(latlng);
		
		var marker = new google.maps.Marker({
			position: latlng,
			map: map,
			title: p[2]
		});
	
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.setContent(this.title);
			infowindow.open(map, this);
		});
	}
	
	map.fitBounds(bounds);
}

google.maps.event.addDomListener(window, 'load', initialize);

	</script>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var dataTable = new google.visualization.DataTable();
        dataTable.addColumn('string', 'Date');
        dataTable.addColumn('number', 'Sales');
        // A column for custom tooltip content
        dataTable.addColumn({type: 'string', role: 'tooltip'});
        dataTable.addRows([
          ['today', 200,'600 order today'],
          ['11 Nov', 50, '1500 order 11 nov'],
          ['10 Nov', 150, '800 order 10 nov.'],
          ['9 Nov', 100, '800 order 9 nov'],
          ['8 Nov', 80, '1500 order 11 nov'],
          ['7 Nov', 30, '800 order 10 nov.'],
          ['6 Nov', 50, '800 order 9 nov']
        ]);

        var options = { legend: 'none' };
        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(dataTable, options);
      }
    </script>
<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
<script>
$(document).ready(function() {  

	// Icon Click Focus
	/*$('div.icon').click(function(){
		$('input#search').focus();
	});*/

	// Live Search
	// On Search Submit and Get Results
	function search() {
		var query_value = $('input#search').val();
		//alert(query_value);
		$('b#search-string').html(query_value);
		if(query_value !== ''){
			$.ajax({
				type: "POST",
				url: "https://everpayinc.com/dashboard/search",
				data: { query: query_value },
				cache: false,
				success: function(html){
					$("ul#results").html(html);
				}
			});
		}return false;    
	}

	$("input#search").live("keyup", function(e) {
		// Set Timeout
		clearTimeout($.data(this, 'timer'));

		// Set Search String
		var search_string = $(this).val();

		// Do Search
		if (search_string == '') {
			$("ul#results").fadeOut();
			$('h4#results-text').fadeOut();
		}else{
			$("ul#results").fadeIn();
			$('h4#results-text').fadeIn();
			$(this).data('timer', setTimeout(search, 100));
		};
	});

});		
</script>	

 <script>
   $('form').card({
    // a selector or jQuery object for the container
    // where you want the card to appear
    container: '.card-wrapper', // *required*
    numberInput: 'input#number', // optional — default input[name="number"]
    expiryInput: 'input#expiry', // optional — default input[name="expiry"]
    cvcInput: 'input#cvc', // optional — default input[name="cvc"]
    nameInput: 'input#name', // optional - defaults input[name="name"]

    width: 200, // optional — default 350px
    formatting: true, // optional - default true
    </script>


 <script type="text/javascript">
            $.noConflict();

            jQuery(document).ready(function ($) {
                var formlang = 'en';
                var doc = document;
                var body = $( doc.body );
                function translateForm(language){
                    formlang = language;
                    var lang;
                    if(translation[language] === undefined){
                        lang = translation['gb'];
                    }else{
                        lang = translation[language];
                    }

                    $("#btn-paymenttype-cc").text(lang["form"]["card-paymentname"]);
                    $(".card-number-label").text(lang["form"]["card-number"]);
                    $(".card-cvc-label").text(lang["form"]["card-cvc"]);
                    $(".card-holdername-label").text(lang["form"]["card-holdername"]);
                    $(".card-expiry-label").text(lang["form"]["card-expiry"]);
                    $("#btn-paymenttype-elv").text(lang["form"]["elv-paymentname"]);
                    $(".elv-account-label").text(lang["form"]["elv-account"]);
                    $(".elv-holdername-label").text(lang["form"]["elv-holdername"]);
                    $(".elv-bankcode-label").text(lang["form"]["elv-bankcode"]);
                    $(".amount-label").text(lang["form"]["amount"]);
                    $(".currency-label").text(lang["form"]["currency"]);
                    $(".submit-button").text(lang["form"]["submit-button"]);
                    $("#tooltip").attr('title', lang["form"]["tooltip"]);
                }

                $('.card-number').keyup(function() {
                    var detector = new BrandDetection();
                    var brand = detector.detect($('.card-number').val());
                    $(".card-number")[0].className = $(".card-number")[0].className.replace(/paymill-card-number-.*/g, '');
                    if (brand !== 'unknown') {
                        $('#card-number').addClass("paymill-card-number-" + brand);

                        if (!detector.validate($('.card-number').val())) {
                            $('#card-number').addClass("paymill-card-number-grayscale");
                        }

                        if (brand !== 'maestro') {
                            VALIDATE_CVC = true;
                        } else {
                            VALIDATE_CVC = false;
                        }
                    }
                });

                $('.card-expiry').keyup(function() {
                    if ( /^\d\d$/.test( $('.card-expiry').val() ) ) {
                        text = $('.card-expiry').val();
                        $('.card-expiry').val(text += "/");
                    }
                });


                function PaymillResponseHandler(error, result) {
                    if (error) {
                        $(".payment_errors").text(error.apierror);
                        $(".payment_errors").css("display","inline-block");
                    } else {
                        $(".payment_errors").css("display","none");
                        $(".payment_errors").text("");
                        var form = $("#payment-form");
                        // Token
                        var token = result.token;
                        form.append("<input type='hidden' name='everpayToken' value='" + token + "'/>");
                        form.get(0).submit();
                    }
                    $(".submit-button").removeAttr("disabled");
                }

                $("#payment-form").submit(function (event) {
                    $('.submit-button').attr("disabled", "disabled");

                    paymenttype = $('.switch_button_active').length ? $('.switch_button_active').val() : 'cc';
                    console.log(paymenttype);
                    switch (paymenttype) {
                        case "cc":
                            $('.submit-button').attr("disabled", "disabled");
                            if (false === paymill.validateHolder($('.card-holdername').val())) {
                                $(".payment_errors").text(translation[formlang]["error"]["invalid-card-holdername"]);
                                $(".payment_errors").css("display","inline-block");
                                $(".submit-button").removeAttr("disabled");
                                return false;
                            }
                            if ((false === paymill.validateCvc($('.card-cvc').val()))) {
                                if(VALIDATE_CVC){
                                    $(".payment_errors").text(translation[formlang]["error"]["invalid-card-cvc"]);
                                    $(".payment_errors").css("display","inline-block");
                                    $(".submit-button").removeAttr("disabled");
                                    return false;
                                } else {
                                    $('.card-cvc').val("000");
                                }
                            }
                            if (false === paymill.validateCardNumber($('.card-number').val())) {
                                $(".payment_errors").text(translation[formlang]["error"]["invalid-card-number"]);
                                $(".payment_errors").css("display","inline-block");
                                $(".submit-button").removeAttr("disabled");
                                return false;
                            }
                            var expiry = $('.card-expiry').val();
                            expiry = expiry.split("/");
                            if(expiry[1] && (expiry[1].length <= 2)){
                                expiry[1] = '20'+expiry[1];
                            }
                            if (false === paymill.validateExpiry(expiry[0], expiry[1])) {
                                $(".payment_errors").text(translation[formlang]["error"]["invalid-card-expiry-date"]);
                                $(".payment_errors").css("display","inline-block");
                                $(".submit-button").removeAttr("disabled");
                                return false;
                            }
                            var params = {
                                amount_int:     parseInt($('.amount').val().replace(/[\.,]/, '.') * 100),  // E.g. "15" for 0.15 Eur
                                currency:       $('.currency').val(),    // ISO 4217 e.g. "EUR"
                                number:         $('.card-number').val(),
                                exp_month:      expiry[0],
                                exp_year:       expiry[1],
                                cvc:            $('.card-cvc').val(),
                                cardholder:     $('.card-holdername').val()
                            };
                            break;

                        case "elv":
                            $('.submit-button').attr("disabled", "disabled");
                            if (!$('.elv-holdername').val()) {
                                $(".payment_errors").text(translation[formlang]["error"]["invalid-elv-holdername"]);
                                $(".payment_errors").css("display","inline-block");
                                $(".submit-button").removeAttr("disabled");
                                return false;
                            }
                            if (!paymill.validateAccountNumber($('.elv-account').val())) {
                                $(".payment_errors").text(translation[formlang]["error"]["invalid-elv-accountnumber"]);
                                $(".payment_errors").css("display","inline-block");
                                $(".submit-button").removeAttr("disabled");
                                return false;
                            }
                            if (!paymill.validateBankCode($('.elv-bankcode').val()) || $('.elv-bankcode').val().length > 10) {
                                $(".payment_errors").text(translation[formlang]["error"]["invalid-elv-bankcode"]);
                                $(".payment_errors").css("display","inline-block");
                                $(".submit-button").removeAttr("disabled");
                                return false;
                            }
                            var params = {
                                number:         $('.elv-account').val(),
                                bank:           $('.elv-bankcode').val(),
                                accountholder:  $('.elv-holdername').val()
                            };
                            break;
                    }

                    paymill.createToken(params, PaymillResponseHandler);
                    return false;
                });

                $("#language_switch").click(function(){
                    var language = formlang;
                    var newimg;

                    if(formlang == 'en'){
                        newimg = "../img/gb.png";
                        language = "de";
                    } else {
                        newimg = "../img/de.png";
                        language = "en";
                    }

                    $(this).attr("src", newimg);
                    translateForm(language);
                });

                $(".switch_button").click(function (event) {
                    if ($(this).hasClass('switch_button_active')){
                        return false;
                    }
                    if ($(this).val()=='cc') {
                        $('#btn-paymenttype-elv').removeClass('switch_button_active');
                        $('#btn-paymenttype-cc').addClass('switch_button_active');
                        $('#payment-form-cc').toggle();
                        $('#payment-form-elv').toggle();
                    } else {
                        $('#btn-paymenttype-cc').removeClass('switch_button_active');
                        $('#btn-paymenttype-elv').addClass('switch_button_active');
                        $('#payment-form-cc').toggle();
                        $('#payment-form-elv').toggle();
                    }
                });
                translateForm(formlang);
            });
        </script>

<script type="text/javascript">

$(document).ready(function(){
  $("#transaction_cc").click(function(){
		var address1=$("#address_one").val();
		var city=$("#city_one").val();
		var state=$("#state_one").val();
		var address2=$("#address_two").val();
		var cc_expiry_month=$("#cc_exp_month").val();
		var cc_expiry_year=$("#cc_exp_year").val();
		var cc_security=$("#cc_cvc").val();
		var name=$("#cc_name").val();
		var name = name.split(' ');
		var fname = name[0];
		var lname = name[1];
		
    	$("#address_1").val(address1);
		$("#state").val(state);
		$("#state_select").val(state);
    	$("#city").val(city);
    	$("#address_2").val(address2);
		$("#cc_expiry_month").val(cc_expiry_month);
    	$("#cc_expiry_year").val(cc_expiry_year);
    	$("#cc_security").val(cc_security);
		$("#first_name").val(fname);
		$("#last_name").val(lname);
  });
});
</script>
<script>	
$(document).ready(function () {
        $("#formmapper").formmapper({
          map: ".map_canvas",
          details: "form",
          markerOptions: {
            draggable: true
          }
        });
        $("#formmapper").bind("geocode:dragged", function(event, latLng){
		  $("#formmapper").formmapper("find",latLng.lat()+","+latLng.lng());
        });
        $("#find").click(function(){
          	$("#formmapper").trigger("geocode");
        }).click();			
		$('#formmapper').popover({'trigger': 'focus'});
      });
</script>


	<? if (isset($head_files)) { ?>
<?=$head_files;?>
<?php } ?>
 
</head>

<!-- BEGIN BODY -->

<body>

<!-- NAVBAR ================================================== -->
	
<span id="ajax-loader"></span>
			<div></div>
<span id="back-to-top"></span>
<div class="page-header">
<nav class="navbar navbar-inverse navbar-fixed-top page-header">
<div class="page-header-top">

<li class="dropdown dropdown-extended dropdown-dark dropdown-tasks" id="header_menu_bar">
						<span class=""></span>
						</a>
   <div class="dropdown dropdown-extended dropdown-dark">
      <a href="#" class="dropdown-toggle navbar-menu" data-toggle="dropdown">
        
        <span class=""><label for="sidebartoggler" class="toggle">&#8803; </i></label></span>
      </a>
						
      <ul class="dropdown-menu dropdown-menu-default dropdown-menu-list scroller" style="top:70px;">
	<li><?=$this->navigation->Output();?></li>
	<li><a href="//developers.everpayinc.com/">Developer Portal</a></li>
	<li><a href="<?=$this->config->item('support_url');?>"><i class="ace-icon fa fa-life-ring"></i> Help Center</a></li>
	<li><a href="//marketplace.everpayinc.com/">Add-ons</a></li>
        <li class="divider hidden-md hidden-lg"></li>
        <li class="hidden-md hidden-lg"><a class="nav-log-in" href="<?=site_url('account/logout');?>">
				<i class="ace-icon fa fa-key"></i> Log logout</a></li>
      </ul>

					<div class="droddown dropdown-separator">
						<span class="separator"></span>
					</div>
</div>
</li>

      <div class="container">
        <div class="navbar-header">
<div class="page-logo">

          <a class="navbar-brand" href="<?=site_url('dashboard');?>"><img src="https://db.tt/JJyPoUJX" width="40%"></a>
        </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse bs-navbar-collapse navbar-right" role="navigation">
<div class="top-menu">
            <ul class="nav navbar-nav">
	         <li>
<p></p>
	        </li>
	         <li class="">
	    <a href="<?=site_url('dashboard');?>"><i class="fa fa-building"></i> BUSINESS</a>
	         </li>
	         <li class="">
	    <a href="<?=site_url('ewallet/members/');?>"><i class="fa fa-user"></i> PERSONAL</a>
	         </li>
    <li class="">
	    <a href="//everpayinc.com/pos/"><i class="fa fa-bars"></i> POS</a>
	         </li>
 <li>
	          <a href="//everpayinc.com/invoicing/index.php/dashboard"><i class="fa fa-rss"></i> INVOICE </a>
	        </li>

	        <li>
	       <a href="//everpay.3scale.net/"><i class="fa fa-download"></i> DEVELOPERS</a>
	        </li>

	      
	       </ul>
	      <ul class="nav navbar-nav navbar-right header-button">
	  
  <li>
<p></p>
	          <br><br>
	         </li>

<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <img alt="" class="img-circle" src="<?=branded_include('images/customer.png');?>" height="22" width="32">
                        <span class="username username-hide-mobile"> <?=$this->user->Get('username')?></span>

<i class="ace-icon fa fa-caret-down"></i>
						</a>

						<ul class="dropdown-menu dropdown-menu-default dropdown-menu-list scroller">
							<li>
			<a id="account_link" href="<?=site_url('transactions/');?>">
				<i class="ace-icon fa fa-shopping-cart"></i>
				My Orders
			</a>
		</li>

<li class="divider"></li>
		<li>
			<a href="<?=site_url('transactions/create');?>">
				<i class="ace-icon fa fa-credit-card"></i>
				Start Selling
			</a>
		</li>

<li class="divider"></li>

	<li>
			<a id="account_link" href="<?=site_url('account');?>">
				<i class="ace-icon fa fa-user"></i>
				My Profile
			</a>
		</li>
		
<li class="divider"></li>
<li>
			<a href="<?=site_url('settings/api');?>">
				<i class="ace-icon fa fa-signal"></i>
				API Settings
			</a>
		</li>

	<li class="divider"></li>

<li>
			<a href="<?=site_url('settings/gateways');?>">
				<i class="ace-icon fa fa-cog"></i>
				Settings
			</a>
		</li>

	<li class="divider"></li>

	<li><a id="support" href="<?=$this->config->item('support_url');?>"><i class="ace-icon fa fa-life-ring"></i>   Support</a></li>

		<li class="divider"></li>
		<li>
			<a href="<?=site_url('account/logout');?>">
				<i class="ace-icon fa fa-key"></i>
				Logout
			</a>
		</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
	      </ul>
</div>
        </div><!--/.nav-collapse -->
      </div>
      </div>
    </nav>
      </div>
	<div id="notices"><?=get_notices();?></div> 

<input type="checkbox" id="sidebartoggler" name="" value="">

<div class="page-wrap">
         			    
  <div class="page-content">

<div class="mp-box db-container">

<div class="col-md-12">	

<div class="row-fluid">


<div class="db-content">

<div class="portlet-body">