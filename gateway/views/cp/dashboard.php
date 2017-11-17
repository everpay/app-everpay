<?=
$this->load->view(branded_view('cp/header'));
error_reporting(0);
?>

<link href="https://cdn.everpayinc.com/assets/css/dashboard-components.css" type="text/css" rel="stylesheet" />


<?php

class graph
{

    function __construct()
    {
        //echo "<pre>";print_r($_SERVER);exit;
        if ($_SERVER['HTTP_HOST'] == 'localhost') {
            $Host = "localhost";
            $UserName = "everpay_master";
            $Pass = "Parise03";
            $db = "everpay_engine";
        } else {
            $Host = "localhost";
            $UserName = "everpay_master";
            $Pass = "Parise03";
            $db = "everpay_engine";
        }
        $this->con = mysql_connect($Host, $UserName, $Pass);
        if (!$this->con) {
            echo "Database Not Connected";
            die;
        }
        mysql_select_db($db);
    }

    function __destruct()
    {
        if (isset($this->con)) {
            mysql_close($this->con);
        }
    }

    function write_log($msg = "")
    {
        $fp = fopen("APP_INFO_CRON", "a+");
        fwrite($fp, date("Y-m-d h:i:s") . "  :" . $msg . "\r\n");
        fclose($fp);
    }

    function IsAppIdAvailable($i)
    {

        $sql = "select PackageName from tblapp where PackageName = '$i'";
        $res = mysql_query($sql);
        return mysql_num_rows($res);
    }

    function GetIds()
    {
        $result = array();
        $delete_app = '';
        $res = mysql_query($this->sql);
        while ($res1 = mysql_fetch_assoc($res)) {
            $result[] = $res1['app'];
            //$delete_app.="'".$res1['app']."',";
        }

        return $result;
    }

    function get_order_data()
    {
        $r = array();
        $sql = "SELECT count(order_id) as cnt, DATE(timestamp) as dateonly FROM orders GROUP BY dateonly order by dateonly asc limit 7";
        $res = mysql_query($sql);
        while ($row = mysql_fetch_assoc($res)) {
            array_push($r, (object) array(
                        'dateonly' => $row['dateonly'],
                        'cnt' => $row['cnt']
            ));
        }

        return $r;
    }

    function delete_temp_id($i)
    {
        $sql = "delete from temp where app='$i'";
        mysql_query($sql);
    }

}

$obj = new graph();
$data = json_encode($obj->get_order_data());
//$data='{ "date": "2014-09-21", "duration": 5 },{ "date": "2014-09-20", "duration": 7 },{ "date": "2014-09-19", "duration": 2 },{ "date": "2014-09-18", "duration": 2 },{ "date": "2014-09-17", "duration": 4 },{ "date": "2014-09-16", "duration": 10 }';
?>




<script type="text/javascript">
    $(document).ready(function() {
        $.post('<?php echo base_url(); ?>index.php/dashboard/get_order_data/',
                function(data)
                {
                    Morris.Area({
                        element: 'chart_div',
                        data: data,
                        xkey: 'x',
                        ykeys: ['y'],
                        lineColors: ['#3498DB'],
                        pointFillColors: ['#2980B9'],
                        labels: ['Total Amount'],
                        parseTime: false,
                        yLabelFormat: function(y) {
                            return  '$' + y;
                        },
                        xLabelAngle: 45,
                        resize: true,
                        redraw: true
                    });
                }, 'json'
                );

        $.post('<?php echo base_url(); ?>index.php/dashboard/get_failed_transaction_data/',
                function(data)
                {
                    Morris.Area({
                        element: 'failed_transaction_chart_div',
                        data: data,
                        xkey: 'x',
                        ykeys: ['y'],
                        lineColors: ['#F66C5F'],
                        pointFillColors: ['#F66C5F'],
                        labels: ['Failed Transactions'],
                        parseTime: false,
                        yLabelFormat: function(y) {
                            return   y;
                        },
                        xLabelAngle: 45,
                        resize: true,
                        redraw: true
                    });
                }, 'json'
                );

        $.post('<?php echo base_url(); ?>index.php/dashboard/get_successful_transaction_data/',
                function(data)
                {
                    Morris.Area({
                        element: 'successful_transaction_chart_div',
                        data: data,
                        xkey: 'x',
                        ykeys: ['y'],
                        lineColors: ['#15C65F'],
                        pointFillColors: ['#15C65F'],
                        labels: ['Successfull Transactions'],
                        parseTime: false,
                        yLabelFormat: function(y) {
                            return  y;
                        },
                        xLabelAngle: 45,
                        resize: true,
                        redraw: true
                    });
                }, 'json'
                );
    });
</script>


<script type="text/javascript">
    $(function() {

        // pop up .popover-test
        $('.popover-test').popover();

        // pop up #example1, #example2, #example3 with same content
        $('[rel=popover]').popover({
            html: true,
            content: function() {
                return $('#popover_content_wrapper').html();
            }
        });

    });

</script>



<!-- END PAGE HEADER-->

<div id="dashboard" class="content-wrapper mt-3" style="height:100%;">

<div class="row-fluid mt-3 row-info">

<div class="col-md-4 mt-3">
<a class="ep_message_box ep_message_box-standard ep_message_box-rounded ep_color-grey" href="#">
<div class="ep_message_box-icon">
<i class="icon-budicon-294"></i>
</div>
<p><span>Account</span><br>Gateway API interactive documentation.</p>
  <strong class="mb-3">$<?php echo $fees_today; ?></strong>
  <small><?=date('D');?></small>
</a>
</div>

<div class="col-md-4 mt-3">
<a class="ep_message_box ep_message_box-standard ep_message_box-rounded ep_color-grey" href="#">
<div class="ep_message_box-icon">
<i class="icon-budicon-112"></i>
</div>
<p><span>Overview</span>
<br><strong class="mb-0">Charges: $</strong><?php echo $total_sales_today; ?> 
<br><strong class="mb-0">Fees: $</strong><?php echo $fees_today; ?>
<br><strong class="mb-0">Net: $</strong><?php echo $net_today; ?>
</p>
 
</a>
</div>


<div class="col-md-4 mt-3">
<a class="ep_message_box ep_message_box-standard ep_message_box-rounded ep_color-grey" href="#">
<div class="ep_message_box-icon">
<i class="icon-budicon-604"></i>
</div>
<p><span>Deposits</span><br>Gateway API interactive documentation.</p>
  <div class="h1 text-muted text-center mt-0 mb-1">$<?php echo $total_sales; ?></div>
  <small><?=date('D');?></small>
</a>
</div>

 </div><!-- END/ #row-info-->

        <!-- END DASHBOARD INFO -->

<div class="clearfix"></div>

<div id="year-payments" class="year-payments mt-0 ml-1 mb-5">

<section id="projects" class="tp--section tp--portfolio tp--portfolio-2 tp--portfolio-hover-2 p-top-md-0 p-bottom-md-0">

<ul id="portfolio" class="tp--portfolio-grid everpay_feature_grid list-unstyled row-fluid" data-isotope-options='{ "columnWidth": 345, "itemSelector": ".tp--portfolio-item" }'>

<li>

<ul class="list-unstyled col-lg-4 col-md-4">

<li class="tp--activity">
<h5>Activity</h5>
<div class="tp--padded">
<div class="tp--contentwrap">
<div class="row-fluid text-left valign__middle2 mt-0">

 <? if (!empty($log)) { ?>
 
<? foreach ($log as $line) { ?>

<?= $line; ?>
        
<? } ?>


<? } else { ?>

<div class="well margin-top-0">
<p class="lead"> There is nothing recent.</p> 
</div>

<? } ?>

            
</div>		
</div>
</div>
</li>
</ul>

<ul class="list-unstyled tp--portfolio-grid everpay_feature_grid col-lg-8 col-md-8">

<li class="tp--portfolio-item">
<h5>Overview</h5>

          <div class="row-fluid">
                 <div class="card-body">

                  <div class="row-fluid">

                    <div class="col-lg-8 col-md-8 px-0">
                      <div class="chart-wrapper" style="height: 320px;">
                        <canvas id="dashboard-chart" height="320"></canvas>
                      </div>
                    </div>

                    <div class="col-md-4 px-4">
                      <div>Visits
                        <span class="font-weight-bold float-right">(40% - 29.703 Users)</span>
                      </div>
                      <div class="progress progress-sm mt-2 mb-3">
                        <div class="progress-bar bg-success" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                      <div>Unique
                        <span class="font-weight-bold float-right">(20% - 24.093 Unique Users)</span>
                      </div>
                      <div class="progress progress-sm mt-2 mb-3">
                        <div class="progress-bar bg-info" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                      <div>Pageviews
                        <span class="font-weight-bold float-right">(60% - 78.706 Views)</span>
                      </div>
                      <div class="progress progress-sm mt-2 mb-3">
                        <div class="progress-bar bg-warning" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                      <div>New Users
                        <span class="font-weight-bold float-right">(80% - 22.123 Users)</span>
                      </div>
                      <div class="progress progress-sm mt-2 mb-3">
                        <div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                      <div>Bounce Rate
                        <span class="font-weight-bold float-right">(40.15%)</span>
                      </div>
                      <div class="progress progress-sm mt-2 mb-3">
                        <div class="progress-bar bg-success" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                      <div>Visits
                        <span class="font-weight-bold float-right">(40% - 29.703 Users)</span>
                      </div>
                      <div class="progress progress-sm mt-2 mb-3">
                        <div class="progress-bar bg-success" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>

                      <div>Unique
                        <span class="font-weight-bold float-right">(20% - 24.093 Unique Users)</span>
                      </div>
                      <div class="progress progress-sm mt-2 mb-3">
                        <div class="progress-bar bg-info" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>

                </div>
            </div>
          </div>

 <div class="row-fluid">

            <div class="col-sm-6 col-lg-3">
              <div class="social-box facebook">
                <i class="fa fa-facebook"></i>
                <div class="chart-wrapper">
                  <canvas id="social-box-chart-1" height="90"></canvas>
                </div>
                <ul>
                  <li>
                    <strong>89k</strong>
                    <span>friends</span>
                  </li>
                  <li>
                    <strong>459</strong>
                    <span>feeds</span>
                  </li>
                </ul>
              </div>
              <!--/.social-box-->
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
              <div class="social-box twitter">
                <i class="fa fa-twitter"></i>
                <div class="chart-wrapper">
                  <canvas id="social-box-chart-2" height="90"></canvas>
                </div>
                <ul>
                  <li>
                    <strong>973k</strong>
                    <span>followers</span>
                  </li>
                  <li>
                    <strong>1.792</strong>
                    <span>tweets</span>
                  </li>
                </ul>
              </div>
              <!--/.social-box-->
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">

              <div class="social-box linkedin">
                <i class="fa fa-linkedin"></i>
                <div class="chart-wrapper">
                  <canvas id="social-box-chart-3" height="90"></canvas>
                </div>
                <ul>
                  <li>
                    <strong>500+</strong>
                    <span>contacts</span>
                  </li>
                  <li>
                    <strong>292</strong>
                    <span>feeds</span>
                  </li>
                </ul>
              </div>
              <!--/.social-box-->
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
              <div class="social-box google-plus">
                <i class="fa fa-google-plus"></i>
                <div class="chart-wrapper">
                  <canvas id="social-box-chart-4" height="90"></canvas>
                </div>
                <ul>
                  <li>
                    <strong>894</strong>
                    <span>followers</span>
                  </li>
                  <li>
                    <strong>92</strong>
                    <span>circles</span>
                  </li>
                </ul>
              </div>
              <!--/.social-box-->
            </div>
            <!--/.col-->
          </div>
          <!--/.row-->


<div class="card text-dark text-center bg-light hidden">
 <div class="card-block pb-0">

<? if (isset($no_chart)) { ?>
<div class="h1 text-muted text-center mt-5 mb-2">
<i class="icon-budicon-131 budi-biggest"></i>
</div>
<div class="col-xs-12 text-center mb-1">
<p class="lead text-center mb-0" style="padding-top: 0%;"> No Chart To Display <button type="button" class="ml-2 btn btn-outline-secondary btn-sm">Add Data <i class="fa fa-share" aria-hidden="true"></i></button></p>
</div>

<? } else { ?>

<div id="chart_div" style="position:relative; height: auto;">
<div class="ch-tooltip"></div>
</div>
<div class="h5 text-muted text-center mt-0 mb-2">
<span>Today: <?=$this->config->item('currency_symbol');?><?=money_format("%!^i",$total_sales_today);?></span> | <span>Total: <?=$this->config->item('currency_symbol');?><span class="counter display-inline no-margin"><?=money_format("%!^i",$total_sales);?></span> 
</div>
<!---<img src="<?= site_url('writeable/rev_chart_' . $this->user->Get('client_id') . '.png'); ?>" alt="Revenue Chart" style="width:100%; height: 320px" />--->
	
<div class="caption">
<div class="caption-text">
<div>
<a href="<?= site_url('transactions/'); ?>" class="">
<strong>
<small>Payments: </small>
<span class="tp--text">View Orders;</span>
        </strong>
		</a>
		</div>
            </div>
          </div>	      
<? } ?>           
                  
</div>

</li>




<li class="tp--portfolio-item col-lg-6 hidden">

<h5>Details</h5>	

<div class="card text-dark text-left bg-light">
<div class="card-block pb-0">

<div class="card-header">
<span class="strong">Business: &nbsp; </span><span class="editable-click"><?= $this->user->Get('company') ?> </span>
</div>

<div class="card-header">
<span class="">Merchant: &nbsp;<span class="editable-click"><?= $this->user->Get('client_id') ?> </span> </span>
</div>

<div class="card-header">
<span class="strong">User: &nbsp; </span><span class="editable-click"><?= $this->user->Get('email') ?> </span>
</div>
<div class="card-header">
<span class="strong"> API ID: &nbsp; </span> <span class="editable-click key_value"><?= $this->user->Get('api_id') ?></span>
<span class="text-center"><a role="button" href="javascript:void(0)"><i class="fa fa-eye"></i></a></span>
</div>

<div class="card-header">
<span class="strong">Type: &nbsp;<span class="editable-click"><?= $this->user->Get('plan_name') ?> </span> </span>
</div>

<div class="card-header">
<span class="bold">Status: &nbsp;</span>
<? if ($row['suspended'] == '1') { ?>
<span class="btn btn-outline-danger btn-sm hidden"><small><i class="fa fa-circle"></i> Suspended</small></span>
<? } else { ?>
<span class="btn btn-outline-success btn-md"><small><i class="icon budicon-390"></i> Active</small></span> 
<? } ?>
</span>
</div>


                </div>
               </div>

</li>



<li class="tp--portfolio-item col-lg-6 hidden">

<h5 class="hidden-lg hidden-md">Customers</h5>

<div class="card text-dark text-center bg-light">
<a role="button" href="javascript:void(0)"> 
   <div class="card-block pb-0">
                    
                  <div class="h1 text-muted text-center mt-5 mb-5">
                    <i class="icon-budicon-290 budi-biggest"></i>
                    </div>
                      
<div class="h5 text-muted text-center mt-0 mb-2"><span>Today: <?php echo $total_user_of_the_day; ?></span> | <span>Total: <?php echo $total_user; ?></span> </div>
                                   </div>
       </a>
                             </div>
	
 <div class="caption">
            <div class="caption-text">
              <div>
                <a href="<?= site_url('customers/'); ?>" target="_self" class="">
		<strong>
           <small>Customers Matter: </small>
 <span class="tp--text"> View List&nbsp; </span>
        </strong>
		</a>
		</div>
            </div>
          </div>
		  
        </li>

<li class="tp--portfolio-item col-lg-6 hidden">

<h5 class="hidden-lg hidden-md">Invoices</h5>

<div class="card text-dark text-center bg-light">
<a role="button" href="javascript:void(0)"> 
   <div class="card-block pb-0">
                    
                  <div class="h1 text-muted text-center mt-5 mb-5">
                    <i class="icon-budicon-275 budi-biggest"></i>
                    </div>
                      
<div class="h5 text-muted text-center mt-0 mb-2"><span>Today: <?php echo $total_user_of_the_day; ?></span> | <span>Total: <?php echo $total_user; ?></span> </div>
                                   </div>
       </a>
                             </div>

	      <div class="caption">
            <div class="caption-text">
              <div>
                <a href="<?= site_url('invoices/'); ?>" class="">
		<strong>
           <small>Get paid: </small>
 <span class="tp--text">View Invoicess&nbsp; </span>
        </strong>
		</a>
		</div>
            </div>
          </div>

        </li>
</ul>

</li>

      </ul>
     

</section>     

</div>
</div>

<!-- END DASHBOARD GRAPHS -->

<hr>
<div class="hidden" style="display:none;">
        <!-- BEGIN QUICK BUTTONS-->
<div class="row-fluid mt-5">
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="card text-dark text-center bg-light">
<a role="button" href="javascript:void(0)"> 
                            <div class="card-block pb-1">
                         <small class="h4 text-center text-muted text-uppercase font-weight-bold">Transactions</small>   
                         <div class="h1 text-muted text-center mt-3 mb-0">
                          <i class="icon-budicon-131 budi-biggest"></i>
                        </div>
                         <div class="h1 text-center text-muted mt-0 mb-1"><?php echo $total_orders; ?></div>
                         </div>
       </a>
                            </div>
      </div>

 <div class="col-md-3 col-sm-6 col-xs-12">
<div class="card text-dark text-center bg-light">
<a role="button" href="javascript:void(0)"> 
<div class="card-block pb-1">
<small class="h4 text-center text-muted text-uppercase font-weight-bold">Invoices</small>
                <div class="h1 text-muted text-center mt-3 mb-0">
                    <i class="icon-budicon-275 budi-biggest"></i>
                </div>
        <div class="h1 text-muted text-center mt-0 mb-1">0</div>
 </div>
 </a>
</div>
      </div>

<div class="col-md-3 col-sm-6 col-xs-12">
<div class="card text-dark text-center bg-light">
<a role="button" href="javascript:void(0)"> 
   <div class="card-block pb-0">
                   <small class="h4 text-center text-muted text-uppercase font-weight-bold">Customers</small>
                    
                  <div class="h1 text-muted text-center mt-3 mb-0">
                    <i class="icon-budicon-290 budi-biggest"></i>
                    </div>
                      
                <div class="h1 text-muted text-center mt-0 mb-1"><?php echo $total_user; ?></div>
                                   </div>
       </a>
                             </div>
      </div>

<div class="col-md-3 col-sm-6 col-xs-12">
<div class="card text-dark text-center bg-light">
<a role="button" href="javascript:void(0)"> 
<div class="card-block pb-1">
<small class="h4 text-center text-muted text-uppercase font-weight-bold">Total</small>
                <div class="h1 text-muted text-center mt-3 mb-0">
                    <i class="icon-budicon-111 budi-biggest"></i>
                </div>
                <div class="h1 text-muted text-center mt-0 mb-1">$<?php echo $total_sales; ?></div>
</div>
       </a>
       </div>
      </div>

                        </div>
                        <!--/.col-->

                            </div><!--/.row-fluid-->
	

<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 mb-4">

<div id="year-payments">
        <!-- BEGIN DASHBOARD CHARTS-->

        <div class="row year-payments">
		
        <!-- BEGIN DASHBOARD GRAPHS -->
		<div class="col-xs-12">
			<h5>Payments along the year</h5>
			 <? if (isset($no_chart)) { ?>
                          <p></p>

               <div class="well margin-top-30">
<p class="lead" style="padding-top: 20px; height: 180px;"> No Chart Data To Display</p>
                </div>
                <? } else { ?>
		<div id="chart_div" style="position:relative;">
			<div class="ch-tooltip"></div>
				</div>
<!---<img src="<?= site_url('writeable/rev_chart_' . $this->user->Get('client_id') . '.png'); ?>" alt="Revenue Chart" style="width:100%; height: 320px" />--->
		      
<? } ?>
            
</div><!-- END/ .col-xs-12-->

</div><!-- END/ .row-payments-->

        </div><!-- END/ #row-payments-->

        <!-- END DASHBOARD GRAPHS -->


<div class="row-stats">
<h5 class="text-left" >Overview</h5>
<!-- Stat Boxes widget -->
<div class="client-stat-boxesloaded row-fluid">

<div class="widget-content row row-stats">

<a class="col-md-3 stat-box-users" href="#" class="font-lg font-grey-mint" id="example1" rel="popover" data-original-title="Payment Types">
  <span>Charges</span>
  <strong class="mb-3">$<?php echo $total_sales_today; ?></strong>
  <small><?=date('D');?></small>
</a>

<div class="col-md-3 stat-box-active-users">
  <span>Fees</span>
  <strong class="mb-3">$<?php echo $fees_today; ?></strong>
  <small><?=date('D');?></small>
</div>

<div class="col-md-3 stat-box-logins">
  <span>Deposits</span>
  <strong class="mb-3">$<?php echo $net_today; ?></strong>
  <small><?=date('D');?></small>
</div>

<div class="col-md-3 stat-box-logins">
<span>Total</span>
<strong class="mb-3">$<?php echo $total_sales; ?></strong>
<small><?=date('Y');?></small>
</div>

     </div><!-- END/ .widget-content-->

	</div><!-- END/ .client-stats-->
		
</div><!-- END/ .row-->
 
<div class="clearfix"></div>

<div id="dashboard" style="height: auto;">

<!-- BEGIN USER DATA-->
<div id="year-payments" class="row-fluid year-payments ml-1 mb-5">

<section id="projects" class="tp--section tp--portfolio tp--portfolio-2 tp--portfolio-hover-2 p-top-md-0 p-bottom-md-0">

<ul id="portfolio" class="tp--portfolio-grid everpay_feature_grid list-unstyled" data-isotope-options='{ "columnWidth": 345, "itemSelector": ".tp--portfolio-item" }'>

<li>

<ul class="pull-left list-unstyled col-lg-4">

<li class="tp--activity">
<h5>Activity</h5>
<div class="tp--padded">
<div class="tp--contentwrap">
<div class="row-fluid text-left valign__middle2 mt-0">

 <? if (!empty($log)) { ?>
 
<? foreach ($log as $line) { ?>

<?= $line; ?>
        
<? } ?>


<? } else { ?>

<div class="well margin-top-0">
<p class="lead"> There is nothing recent.</p> 
</div>

<? } ?>

            
</div>		
</div>
</div>
</li>
</ul>

<ul class="list-unstyled tp--portfolio-grid everpay_feature_grid col-lg-8">

<li class="tp--portfolio-item col-lg-6">

<h5>Details</h5>	

<div class="card text-dark text-left bg-light">
<div class="card-block pb-0">

<div class="card-header">
<span class="strong">Business: &nbsp; </span><span class="editable-click"><?= $this->user->Get('company') ?> </span>
</div>

<div class="card-header">
<span class="">Merchant: &nbsp;<span class="editable-click"><?= $this->user->Get('client_id') ?> </span> </span>
</div>

<div class="card-header">
<span class="strong">User: &nbsp; </span><span class="editable-click"><?= $this->user->Get('email') ?> </span>
</div>
<div class="card-header">
<span class="strong"> API ID: &nbsp; </span> <span class="editable-click key_value"><?= $this->user->Get('api_id') ?></span>
<span class="text-center"><a role="button" href="javascript:void(0)"><i class="fa fa-eye"></i></a></span>
</div>

<div class="card-header">
<span class="strong">Type: &nbsp;<span class="editable-click"><?= $this->user->Get('plan_name') ?> </span> </span>
</div>

<div class="card-header">
<span class="bold">Status: &nbsp;</span>
<? if ($row['suspended'] == '1') { ?>
<span class="btn btn-outline-danger btn-sm hidden"><small><i class="fa fa-circle"></i> Suspended</small></span>
<? } else { ?>
<span class="btn btn-outline-success btn-md"><small><i class="icon budicon-390"></i> Active</small></span> 
<? } ?>
</span>
</div>


                </div>
               </div>

</li>

<li class="tp--portfolio-item col-lg-6">
<h5>Overview</h5>
<div class="card text-dark text-center bg-light">
 <div class="card-block pb-0">

<? if (isset($no_chart)) { ?>
<div class="h1 text-muted text-center mt-5 mb-2">
<i class="icon-budicon-131 budi-biggest"></i>
</div>
<div class="col-xs-12 text-center mb-1">
<p class="lead text-center mb-0" style="padding-top: 0%;"> No Chart To Display <button type="button" class="ml-2 btn btn-outline-secondary btn-sm">Add Data <i class="fa fa-share" aria-hidden="true"></i></button></p>
</div>

<? } else { ?>
<div id="chart_div" style="position:relative; height: auto;">
<div class="ch-tooltip"></div>
</div>
<div class="h5 text-muted text-center mt-0 mb-2">
<span>Today: <?=$this->config->item('currency_symbol');?><?=money_format("%!^i",$total_sales_today);?></span> | <span>Total: <?=$this->config->item('currency_symbol');?><span class="counter display-inline no-margin"><?=money_format("%!^i",$total_sales);?></span> 
</div>
<!---<img src="<?= site_url('writeable/rev_chart_' . $this->user->Get('client_id') . '.png'); ?>" alt="Revenue Chart" style="width:100%; height: 320px" />--->
	
<div class="caption">
<div class="caption-text">
<div>
<a href="<?= site_url('transactions/'); ?>" class="">
<strong>
<small>Payments: </small>
<span class="tp--text">View Orders;</span>
        </strong>
		</a>
		</div>
            </div>
          </div>	      
<? } ?>           
                  
</div>
</div>

</li>

<li class="tp--portfolio-item col-lg-6">

<h5 class="hidden-lg hidden-md">Customers</h5>

<div class="card text-dark text-center bg-light">
<a role="button" href="javascript:void(0)"> 
   <div class="card-block pb-0">
                    
                  <div class="h1 text-muted text-center mt-5 mb-5">
                    <i class="icon-budicon-290 budi-biggest"></i>
                    </div>
                      
<div class="h5 text-muted text-center mt-0 mb-2"><span>Today: <?php echo $total_user_of_the_day; ?></span> | <span>Total: <?php echo $total_user; ?></span> </div>
                                   </div>
       </a>
                             </div>
	
 <div class="caption">
            <div class="caption-text">
              <div>
                <a href="<?= site_url('customers/'); ?>" target="_self" class="">
		<strong>
           <small>Customers Matter: </small>
 <span class="tp--text"> View List&nbsp; </span>
        </strong>
		</a>
		</div>
            </div>
          </div>
        </li>

<li class="tp--portfolio-item col-lg-6">

<h5 class="hidden-lg hidden-md">Invoices</h5>

<div class="card text-dark text-center bg-light">
<a role="button" href="javascript:void(0)"> 
   <div class="card-block pb-0">
                    
                  <div class="h1 text-muted text-center mt-5 mb-5">
                    <i class="icon-budicon-275 budi-biggest"></i>
                    </div>
                      
<div class="h5 text-muted text-center mt-0 mb-2"><span>Today: <?php echo $total_user_of_the_day; ?></span> | <span>Total: <?php echo $total_user; ?></span> </div>
                                   </div>
       </a>
                             </div>

	      <div class="caption">
            <div class="caption-text">
              <div>
                <a href="<?= site_url('invoices/'); ?>" class="">
		<strong>
           <small>Get paid: </small>
 <span class="tp--text">View Invoicess&nbsp; </span>
        </strong>
		</a>
		</div>
            </div>
          </div>

        </li>
</ul>

</li>

      </ul>
     

</section>     

</div>

<hr>
<div class="hidden" style="display:none;">
        <!-- BEGIN QUICK BUTTONS-->
<div class="row-fluid mt-5">
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="card text-dark text-center bg-light">
<a role="button" href="javascript:void(0)"> 
                            <div class="card-block pb-1">
                         <small class="h4 text-center text-muted text-uppercase font-weight-bold">Transactions</small>   
                         <div class="h1 text-muted text-center mt-3 mb-0">
                          <i class="icon-budicon-131 budi-biggest"></i>
                        </div>
                         <div class="h1 text-center text-muted mt-0 mb-1"><?php echo $total_orders; ?></div>
                         </div>
       </a>
                            </div>
      </div>

 <div class="col-md-3 col-sm-6 col-xs-12">
<div class="card text-dark text-center bg-light">
<a role="button" href="javascript:void(0)"> 
<div class="card-block pb-1">
<small class="h4 text-center text-muted text-uppercase font-weight-bold">Invoices</small>
                <div class="h1 text-muted text-center mt-3 mb-0">
                    <i class="icon-budicon-275 budi-biggest"></i>
                </div>
        <div class="h1 text-muted text-center mt-0 mb-1">0</div>
 </div>
 </a>
</div>
      </div>

<div class="col-md-3 col-sm-6 col-xs-12">
<div class="card text-dark text-center bg-light">
<a role="button" href="javascript:void(0)"> 
   <div class="card-block pb-0">
                   <small class="h4 text-center text-muted text-uppercase font-weight-bold">Customers</small>
                    
                  <div class="h1 text-muted text-center mt-3 mb-0">
                    <i class="icon-budicon-290 budi-biggest"></i>
                    </div>
                      
                <div class="h1 text-muted text-center mt-0 mb-1"><?php echo $total_user; ?></div>
                                   </div>
       </a>
                             </div>
      </div>

<div class="col-md-3 col-sm-6 col-xs-12">
<div class="card text-dark text-center bg-light">
<a role="button" href="javascript:void(0)"> 
<div class="card-block pb-1">
<small class="h4 text-center text-muted text-uppercase font-weight-bold">Total</small>
                <div class="h1 text-muted text-center mt-3 mb-0">
                    <i class="icon-budicon-111 budi-biggest"></i>
                </div>
                <div class="h1 text-muted text-center mt-0 mb-1">$<?php echo $total_sales; ?></div>
</div>
       </a>
       </div>
      </div>

                        </div>
                        <!--/.col-->

                            </div><!--/.row-fluid-->
	

<div class="row-fluid">
<div class="col-md-6 col-sm-6 col-xs-12 mb-4">

<div id="year-payments">
        <!-- BEGIN DASHBOARD CHARTS-->

        <div class="row year-payments">
		
        <!-- BEGIN DASHBOARD GRAPHS -->
		<div class="col-xs-12">
			<h5>Payments along the year</h5>
			 <? if (isset($no_chart)) { ?>
                          <p></p>

               <div class="well margin-top-30">
<p class="lead" style="padding-top: 20px; height: 180px;"> No Chart Data To Display</p>
                </div>
                <? } else { ?>
		<div id="chart_div" style="position:relative;">
			<div class="ch-tooltip"></div>
				</div>
<!---<img src="<?= site_url('writeable/rev_chart_' . $this->user->Get('client_id') . '.png'); ?>" alt="Revenue Chart" style="width:100%; height: 320px" />--->
		      
<? } ?>
            
</div><!-- END/ .col-xs-12-->

</div><!-- END/ .row-payments-->

        </div><!-- END/ #row-payments-->

        <!-- END DASHBOARD GRAPHS -->

        <!-- BEGIN TRANSACTION STATS -->
		
<div class="row-stats">
		<!-- Stat Boxes widget -->
<div class="client-stat-boxes col-xs-12 loaded">
<div class="widget-content row row-stats">
<a class="col-md-4 stat-box-users" href="#" class="font-lg font-grey-mint" id="example1" rel="popover" data-original-title="Payment Types">
  <span>Charges</span>
  <strong>$<?php echo $total_sales_today; ?></strong>
  <small>Today</small>
</a>

<div class="col-md-4 stat-box-active-users">
  <span>Fees</span>
  <strong>$<?php echo $fees_today; ?></strong>
  <small>Today</small>
</div>

<div class="col-md-4 stat-box-logins">
  <span>Deposits</span>
  <strong class="font-lg font-grey-mint">$<?php echo $net_today; ?></strong>
  <small>Today</small>
</div>

     </div><!-- END/ .widget-content-->

	</div><!-- END/ .client-stats-->
		
</div><!-- END/ .row-->
      

</div>
<div class="col-md-6 col-sm-6 col-xs-12 mb-4 year-payments">
<!-- BEGIN NOTIFICATIONS -->
		<div class="col-xs-12">
			<h5>Latest Activity</h5>
                          <p></p>
       <? if (!empty($log)) { ?>
                                    <table class="table table-responsive table-hover table-outline mb-1 col-sm-12">
                                        <thead class="thead-default">
                                            <tr>
                                                <th class="text-center"><i class="icon-people"></i>
                                                </th>
                                                <th>Customer</th>
                                                <th class="text-center">Country</th>
                                                <th>Activity</th>
                                                <th class="text-center"><i class="icon-settings"></i>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>


 <td class="text-center">
                                                    <div class="avatar">
                                                        <img src="../console/assets/img/avatars/1.jpg" class="img-avatar" alt="">
                                                        <span class="avatar-status badge-success"></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div> <? if (!empty($log)) { ?></div>
                                                    <div class="small text-muted">
                                                        <span>New</span>| Registered: Jan 1, 2015
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <img src="../console/assets/img/flags/USA.png" alt="USA" style="height:24px;">
                                                </td>
                                                <td>
                                                    <div class="small text-muted">Last login</div>
                                                    <strong>10 sec ago</strong>
                                                </td>

 <td class="text-center">
<button type="button" class="btn btn-link text-muted"><i class="icon-settings"></i>
</button>
</td>
                                            </tr>
                                        </tbody>
                                    </table> 
<? } ?>

<? } else { ?>
<div class="bold theme-font" style="padding-top: 5%;">
<div class="well margin-top-20">
<p class="lead"> There is nothing recent.</p> 
</div></div>
<? } ?>
<div class="row-fluid text-center margin-top-20">
<p><a href="<?= site_url('events'); ?>" class="btn btn-block">View More</a></p>
</div>
</div> <!--/.row-fluid-->


</div>
		
		
 <div class="row">
 <div class="col-xs-12 col-widgets">

			<div class="col-user-list col-user-latest-activity">
				<div class="latest-activity widget-box">
					<h5>Latest Activity</h5>

					<div class="widget-content">
       <? if (!empty($log)) { ?>
  <ul class="user-list" style="height:320px;">
    
                                <? foreach ($log as $line) { ?>
    <li>
      <a href="#">
        
          <time title=""></time>
        
        <img class="avatar" src="">
        <span class="username"><?= $line; ?></span>
        
        <span class="user-list-connection hide">Paypal</span>
        
        <span class="user-list-location hide">Buenos Aires, Argentina</span>
      </a>
    </li>
	
        <? } ?>
  </ul>
  
                                <? } else { ?>
            <li class="bold theme-font" style="padding-top: 5%;">
<div class="well margin-top-20">
<p class="lead"> There is nothing recent.</p> </div></li>
     </ul><!-- END .list-group -->
                                <? } ?>

</div>
					<p><a href="<?= site_url('events'); ?>" class="btn btn-block">View More</a></p>

				</div>

				</div>


			<div class="col-user-list col-user-last-payment">
				<!-- Last last Payment widget -->
				<div class="last-payment widget-box">
					<h5>New Customers</h5>

					<div class="widget-content">
  <ul class="user-list hidden">
    
    <li>
      <a href="#/users/bGlua2VkaW58MmRfanh5clhXRA">
        
          <time title="Sun Sep 13 2015 01:33:08 GMT-0400">a month ago</time>
        
        <img class="avatar" src="https://media.licdn.com/mpr/mprx/0_fxkuMxLkAG3FavaiSyq0MpvoPhNw29OiSZK1MjkJuL8s1td__MN8cgrcgmqv7A0fayQtns9_xWqd">
        <span class="username">Richard Rowe</span>

        
        <span class="user-list-connection">linkedin</span>
        
        <span class="user-list-location hide">Buenos Aires, Argentina</span>
      </a>
    </li>
    
    <li>
      <a href="#/users/ZmFjZWJvb2t8MTAxNTM0ODY5ODQyMTY4MTU">
        
          <time title="Sun Sep 13 2015 01:32:11 GMT-0400">a month ago</time>
        
        <img class="avatar" src="https://scontent.xx.fbcdn.net/hprofile-xpf1/v/t1.0-1/c4.6.50.50/p56x56/10423926_10153297068811815_2574425897854496868_n.jpg?oh=b9d878953e2b24000c20165057d3d6d5&amp;oe=5671E232">
        <span class="username">Richard Rowe</span>

        
        <span class="user-list-connection">facebook</span>
        
        <span class="user-list-location hide">Buenos Aires, Argentina</span>
      </a>
    </li>
    
    <li>
      <a href="#/users/YXV0aDB8NTVjZmQ4ZGJjZDFhOTEzZDY3MGIxOTdh">
        
          <time title="Sat Aug 15 2015 20:27:07 GMT-0400">2 months ago</time>
        
        <img class="avatar" src="https://secure.gravatar.com/avatar/f5b2e94b2af6fdd5568a34dbd4cf9e62?s=480&amp;r=pg&amp;d=https%3A%2F%2Fcdn.auth0.com%2Favatars%2Fri.png">
        <span class="username">richard.r@everpayinc.com</span>

        
        <span class="user-list-connection">Username-Password-Authentication</span>
        
        <span class="user-list-location hide">Buenos Aires, Argentina</span>
      </a>
    </li>
    
  </ul>

	 </div><!--end/ .widget-content-->

					<!-- <p><a href="<?= site_url('customers'); ?>" class="btn btn-block">View More</a></p>-->
		
			 </div><!--end/ .widget-box-->
 </div><!--end/ .row-->
			

 </div><!-- END.col-xs-12-->
 
 </div><!--end/ .row-->
 
  </div><!--end/ .hidden-->


<div class="clearfix" style="height:40px;"></div>

<section class="tp--cta tp--cta-2 p-top-md-0 p-bottom-md-20 text-center">

      <div class="container p-top-md-20 p-bottom-md-0">
        
        <div class="row tp--col-sm-vertical-align">

          <div class="col-sm-12">
           <div class="landing--call--us">
    <p class="linxUsNow">
     Are You Looking For More Features?
    </p>
    <a href="<?= site_url('account/upgrade'); ?>" title="Upgrade Now" class="bigGreenCta">
	     <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-circled_phone"></use>
		<svg viewBox="0 0 64 64" id="icon-circled_phone" width="100%" height="100%">
		<title>Call us today for a risk-free trial</title>
		<circle class="circle" fill="#1da897" cx="32" cy="32" r="32"></circle>
		<g class="phone" fill="#ffffff">
			<path class="cls-1" d="M47.6,36a2.48,2.48,0,0,0-3.4,0l-3.9,3.9c-1.5,1.5-6.9-.2-11.2-4.5s-6-9.7-4.5-11.2l3.9-3.9a2.48,2.48,0,
				0,0,0-3.4L21.3,9.7a2.48,2.48,0,0,0-3.4,0l-4.2,4.2c-4.5,4.5.2,16.4,10.4,26.6S46.2,55.3,50.7,50.9l4.2-4.2a2.48,2.48,0,0,0,0-3.4L47.6,36"></path>
		</g>
		</svg>
	<span class="text"><a href="<?= site_url('account/upgrade'); ?>" class="btn btn-primary btn-lg text-center">Upgrade Now&nbsp;</a></span>
    </a>
</div>
          </div>
        </div>

      </div>
    </section>

 

<? if ($this->user->Get('client_type_id') == '1') { ?>
 <div class="row clearfix">

</div><!-- END.row clearfix-->	

<? } elseif ($this->user->Get('client_type_id') == '0') { ?>
 <div class="row clearfix hide">
					
<iframe width="100%" height="380" src="//everpay.slack.com/messages/" allowfullscreen></iframe>
	</div><!-- END.row clearfix-->	
	
<? } ?>

<div id="popover_content_wrapper" style="display: none">
    <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
<ul class="list-inline center" style="font-weight: 100;
  font-size: 12px;">
                <li style="padding-right: 10px;">
                 <span>   <i class="fa fa-cc-visa fa-2"></i> <strong class="small-num" style="padding-top: 12px;font-weight: 100;"> <?php echo $total_visa_transactions_amount_today; ?></strong> <span></span></span>
                </li>

                <li style="padding-right: 10px;">
                <span>    <i class="fa fa-cc-mastercard fa-2"></i> <strong class="small-num" style="padding-top: 12px;font-weight: 100;"> <?php echo $total_mastercard_transactions_amount_today; ?></strong> <span> </span></span>
                </li>

                <li style="padding-right: 10px;">
                <span>    <i class="fa fa-cc-amex fa-2"></i><strong class="small-num" style="padding-top: 12px;font-weight: 100;"> <?php echo $total_amex_transactions_amount_today; ?> <span></strong> </span></span>
                </li>


                <li style="padding-right: 10px;">
                    <span><i class="fa fa-cc-discover fa-2"></i>  <strong class="small-num" style="padding-top: 12px;font-weight: 100;"> <?php echo $total_discover_transactions_amount_today; ?> <span> </strong></span></span>
                </li>

                <li style="padding-right: 10px;">
                    <span><i class="fa fa-cc fa-2"></i> <strong class="small-numm" style="padding-top: 12px;font-weight: 100;"> <?php echo $total_cc_transactions_amount_today; ?></strong> <span> </span></span>
                </li>
                <li>
                    <span><i class="fa fa-check-circle-o fa-2"></i> <strong class="small-num" style="padding-top: 12px;font-weight: 100;"> <?php echo $total_other_transactions_amount_today; ?></strong> <span></span></span>
                </li>
</ul>
            </div><!-- END/ .ROW-->

    </div><!-- /#pop-over-content -->




</div><!-- END/ #section-->

</div><!-- END/ #dashboard-->

</div><!-- END/ #content-wrapper-->

 </div><!--end/-->


</div><!-- END/ #close-page-->


<script type="text/javascript" src="//cdn.everpayinc.com/assets/js/libs/toastr.min.js"></script>
<script type="text/javascript" src="//cdn.everpayinc.com/assets/js/libs/gauge.min.js"></script>
<script type="text/javascript" src="//cdn.everpayinc.com/assets/js/libs/moment.min.js"></script>
<script type="text/javascript" src="//cdn.everpayinc.com/assets/js/libs/daterangepicker.js"></script>
<script type="text/javascript" src="//cdn.everpayinc.com/assets/js/dashboard.min.js"></script>
<?= $this->load->view(branded_view('cp/footer')); ?>