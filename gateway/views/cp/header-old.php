<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$this->navigation->PageTitle();?></title>
<!-- Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<!-- BEGIN APPLE ICONS STYLES -->
        <link href="<?=branded_include('img/ico/favicon.png');?>" rel="shortcut icon" />

<!-- BEGIN GLOBAL MANDATORY STYLES -->

<!-- JQueryUI v1.9.2 -->
<link href="<?=branded_include('dist/theme/scripts/jquery-ui-1.9.2.custom/css/smoothness/jquery-ui-1.9.2.custom.min.css');?>"type="text/css" />

	<!-- Uniform -->
<link href="<?=branded_include('js/pixelmatrix-uniform/css/uniform.default.css');?>" rel="stylesheet" type="text/css" media="screen" />

<!-- Glyphicons -->
<link href="<?=branded_include('css/glyphicons.css');?>" rel="stylesheet" type="text/css" />

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Latest compiled and minified CSS -->
<link href="<?=branded_include('css/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css');?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet"href="<?=branded_include('css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
<!-- elektropay gateway theme -->
<link href="<?=branded_include('css/datepicker.css');?>" rel="stylesheet" type="text/css" />
<link href="<?=branded_include('css/plugins.css');?>" rel="stylesheet" type="text/css" />
<link href="<?=branded_include('css/animation.css');?>" rel="stylesheet" type="text/css" />	

<!-- Notyfy -->
	<link href="<?=branded_include('css/jquery.notyfy.css');?>"type="text/css" />
	<link href="<?=branded_include('js/notyfy/themes/default.css');?>"type="text/css" />

<!-- elektropay admin styling -->
<link href="<?=branded_include('css/universal.css');?>" rel="stylesheet" type="text/css" media="screen" />
<link href="<?=branded_include('css/elektropay.min.css');?>" rel="stylesheet" type="text/css" media="screen" />
<link href="<?=branded_include('css/components.css');?>" rel="stylesheet" type="text/css" />
<!-- payment form styling CSS -->
<link href="<?=branded_include('css/paymill_styles.css');?>" rel="stylesheet" type="text/css" />

<!-- flat styling CSS -->
<link href="<?=branded_include('css/flat.css');?>" rel="stylesheet" type="text/css" />

<link href="<?=branded_include('css/ui.jqgrid.css');?>" rel="stylesheet" type="text/css" />


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>


<!--[if !IE]> -->
<script type="text/javascript" src="<?=branded_include('js/jquery.2.1.1.min.js');?>"></script>
<!-- <![endif]-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!--[if IE]>
<script type="text/javascript">
	window.jQuery || document.write("<script src="<?=branded_include('js/jquery1x.min.js');?>">"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript" src="<?=branded_include('js/date.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/datePicker.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/universal.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/ace-extra.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


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
	width: 220px;
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
				url: "https://elektropay.com/dashboard/search",
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
                        form.append("<input type='hidden' name='elektropayToken' value='" + token + "'/>");
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


<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

	<? if (isset($head_files)) { ?>
<?=$head_files;?>
<?php } ?>
 
</head>

<!-- BEGIN BODY -->

<body>


	<div id="notices"><?=get_notices();?></div>

<!-- NAVBAR ================================================== -->
	
<span id="ajax-loader"></span>
			<div></div>
<span id="back-to-top"></span>

<header class="navbar navbar-fixed-top bs-docs-nav" id="top" role="banner">
  <div class="row-fluid">
<div class="page-header">
	<!-- BEGIN HEADER TOP -->
	<div class="page-header-top">

			<!-- BEGIN LOGO -->
			<div class="page-logo">
<a href="<?=site_url('dashboard');?>"><img class="navbar-brand logo-default" src="<?=branded_include('img/logo/logo.png');?>"></a>
			</div>
			<!-- END LOGO -->
		<div class="container">
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler"></a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->
<li class="top-nav-search dropdown-dark dropdown-notification" id="header_notification_bar">
<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->	

<form id="search-form-nav-bar" class="navbar-form">

<input type="text" class="form-control" placeholder="search" id="search" autocomplete="off" >
<!--<a href="javascript:;" class="btn submit">	<i class="ace-icon fa fa-search nav-search-icon"></i></a>-->
<div class="results-text" style="position: absolute; display: none; max-height: 600px; z-index: 9999;"></div>
<h4 id="results-text">Showing results for: <b id="search-string">Array</b></h4>
<ul id="results"></ul>
</form>
</li>

<li class="dropdown dropdown-extended dropdown-dark dropdown-notification" id="header_notification_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"></a>
					
					</li>
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN TODO DROPDOWN -->
					<li class="dropdown dropdown-extended dropdown-dark dropdown-tasks" id="header_task_bar">
<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="fa fa-plus fa-3x" style="margin-top:4px;"></i>
						<span class=""></span>
						</a>
						<ul class="dropdown-menu extended tasks"style="width:180px;">
									<li>
<div class="slimScrollDiv" style="position: relative; width: 210px; height: 385px;">
<ul class="dropdown-menu-list" style="margin: 0 0 0px 0px; height: 375px; width: 180px;" data-handle-color="#637283" data-initialized="1">
									<li>
								<li><a href="#modal-charge" role="button" class="blue" data-toggle="modal"><i class="ace-icon fa fa-credit-card"></i> New Charge</a></li>

    <li><a href="<?=site_url('plans/new_plan');?>"><i class="ace-icon fa fa-refresh"></i> New Recurring</a></li>

    <li><a href="#modal-invoice" role="button" class="blue" data-toggle="modal"><i class="ace-icon fa fa-file-text"></i> New Invoice</a></li>

    <li><a href="#modal-form" role="button" class="blue" data-toggle="modal"><i class="ace-icon fa fa-users"></i> New Customer</a></li>

    <li><a href="<?=site_url('products/add');?>"><i class="ace-icon fa fa-barcode"></i> New Product</a></li>

    <li><a href="<?=site_url('coupons/add');?>"><i class="ace-icon fa fa-tag"></i> New Coupon</a></li>
  
    <li><a href="<?=site_url('settings/new_gateway');?>"><i class="ace-icon fa fa-rocket"></i> New Gateway</a></li>
	
									</li>
								</ul><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(99, 114, 131);"></div>
<div class="slimScrollBar"></div></div>
							</li>
						</ul>
					</li>
					<!-- END TODO DROPDOWN -->


					<li class="droddown dropdown-separator">
						<span class="separator"></span>
					</li>
					<!-- BEGIN INBOX DROPDOWN -->
					<li class="dropdown dropdown-extended dropdown-dark dropdown-inbox" id="header_inbox_bar">
<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="circle">0</span>
						<span class="corner"></span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
			<h3>You have <strong>0 New</strong> Notifications</h3>
								<a href="javascript:;">view all</a>
							</li>
							<li>
<div class="slimScrollDiv" style="position: relative; overflow: hidden; height: 295px;width: 280px;">
<ul class="dropdown-menu-list scroller" style="height: 295px; overflow: hidden; width: 280px;" data-handle-color="#637283" data-initialized="1">

<ul class="dropdown-menu-list scroller" style="margin-bottom:30px; padding:5px; color: #fff; font-size: 12px; height: 275px; width: 280px;!important" data-handle-color="#637283" data-initialized="1">
									<li>

									</li>
							
				<? if (!empty($log)) { ?>
	<? foreach ($log as $line) { ?>
		<li><span class="message" style="padding-right: 20px;"style="color: #fff;><?=$line;?></span></li>
	<? } ?>
<? } else { ?>
 <p class="soft small">No recent payment activity.</p>
<? } ?>
								</ul>
<div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; background: rgb(99, 114, 131);"></div>
<div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(234, 234, 234);">
</div>
</div>
							</li>
						</ul>
					</li>
					<!-- END INBOX DROPDOWN -->


					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <?php $logo=$this->user->Get('company_logo');
                            if($logo!=""){?>
						<img alt="" class="img-circle" src="<?php echo site_url(); ?>/upload/<?=$this->user->Get('company_logo')?>" height="36" width="36">
						<span class="username username-hide-mobile"> <?=$this->user->Get('username')?></span>
                    <?php } else{ ?>
                    <img alt="" class="img-circle" src="<?php echo site_url(); ?>/upload/avatar.png" height="40" width="40">
                        <span class="username username-hide-mobile"> <?=$this->user->Get('username')?></span>
                    <?php } ?>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
			<a id="account_link" href="<?=site_url('transactions/');?>">
				<i class="ace-icon fa fa-shopping-cart"></i>
				My Orders
			</a>
		</li>

<li class="divider"></li>
		<li>
			<a href="javascript:;">
				<i class="ace-icon fa fa-credit-card"></i>
				Start Selling
			</a>
		</li>

<li class="divider"></li>

	<li>
			<a id="account_link" href="<?=site_url('account/');?>">
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
			<!-- END TOP NAVIGATION MENU -->
		</div>
	</div>
	<!-- END HEADER TOP -->
</div>

  </div>
</header>

  
<input type="checkbox" id="sidebartoggler" name="" value="">

<div class="page-wrap">

  <label for="sidebartoggler" class="toggle">&#8803; </i></label>
	          			    
  <div class="page-content">
<div id="notices"><?=get_notices();?></div>

<div class="mp-box db-container">

<div class="box-row">
<div class="container-fluid">
<div class="db-content">

<div class="portlet-body">