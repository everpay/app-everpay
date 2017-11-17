<?php

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
	function GetClientLog ($client_id, $latest = 10, $date_format = 'Y-m-d H:i:s') {
		// include time_since helper
		$this->load->helper('time_since');

		$this->db->where('client_id',$client_id);
		$this->db->limit(8);
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

             $line .= '<table class="table table-responsive table-hover mb-0">';
             $line .= '<tbody>'; 
             $line .= '<tr>';
                                $line .= '<td class="text-center">';
                                
                                 $line .= '<div class="avatar">';
                         $line .= '<img src="https://admin.everpayinc.com/console/assets/img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">';
                                   $line .= '<span class="avatar-status badge-danger"></span>';
                                   $line .= '</div>';
                                   $line .= '</td>';
                               
                                 $line .= '<td class="text-left">';
								 
			           if (isset($variables['customer_id'])) {
                   
				$line .= '<div><a href="customers/edit/' . $variables['customer_id'] . '">';

				if (!empty($variables['customer_first_name'])) {
					$line .= $variables['customer_first_name'] . ' ' . $variables['customer_last_name'];
				}
				else {
					$line .= 'Customer #' . $variables['customer_id'];
				}

				$line .= '</a></div>';


			}
			else {



                              $line .= '<div><a> A customer</a></div>';

			}

			// generate date
			$date_line = time_since($client_id, $row['client_log_date']);

			// prepend currency symbol
			if (isset($variables['amount'])) {
				$variables['amount'] = $this->config->item('currency_symbol') . $variables['amount'];
			}

			if ($row['trigger_id'] == '1') {
				// charge
				$line .= '<div class="small text-muted"><span>was <a href="' . site_url('transactions/charge/' . $variables['charge_id']) . '">charged | ' . $variables['amount'] . '</a> ' . $date_line;
  $line .= '</span></div>';
			}

			elseif ($row['trigger_id'] == '2') {
				// recurring charge

                              $line .= '<div class="small text-muted">';

				$line .= '<span> was <a href="' . site_url('transactions/charge/' . $variables['charge_id']) . '">charged | ' . $variables['amount'] . '</a> for <a href="' . site_url('transactions/recurring/' . $variables['recurring_id']) . '">recurring charge #' . $variables['recurring_id'] . '</a> ' . $date_line;
  $line .= '</span>';
			}
			elseif ($row['trigger_id'] == '3') {

                              $line .= '<div class="small text-muted">';
				$line .= '\'s<span> <a href="' . site_url('transactions/recurring/' . $variables['recurring_id']) . '">recurring charge #' . $variables['recurring_id'] . '</a> expired ' . $date_line; 
 			}
			elseif ($row['trigger_id'] == '4') {

                              $line .= '<div class="small text-muted">';
				$line .= '\'s<span>  <a href="' . site_url('transactions/recurring/' . $variables['recurring_id']) . '">recurring charge #' . $variables['recurring_id'] . '</a> was cancelled ' . $date_line;
			}
			elseif ($row['trigger_id'] == '9') {

                              $line .= '<div class="small text-muted">';
				$line .= '\'s <span> customer profile was created' . $date_line;
			}
			elseif ($row['trigger_id'] == '10') {

                              $line .= '<div class="small text-muted">';
				$line .= '<span> began a new <a href="' . site_url('transactions/recurring/' . $variables['recurring_id']) . '">recurring charge #' . $variables['recurring_id'] . '</a> ' . $date_line;
}

  $line .= '</span>';
  
  $line .= '</div>';

  $line .= '</td>';

  $line .= '<td class="text-center">';
 
  $line .= '<i class="fa fa-cc-amex" style="font-size:24px"></i>';

  $line .= '</td>';

 $line .= '</tr>';
 
 $line .= '</tbody>';

 $line .= '</table>';

$return[] = $line;

		}
		return $return;
	}

}