<?php $this->load->view(branded_view('cp/header'));?>

<header class="section-header"><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
              <div class="container-960 center">
<div class="copywriting">
<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	
<h1 class="margin-none">Recurring <strong class="text-primary"> Charges</strong><a class="btn btn-success btn-sm pull-right" style="color:#fff; margin-right:30px;" href="<?=site_url('/transactions/create');?>"><span class="fa fa-edit"></span> New Charge </a></h1>
</div>
</div>
             </div>
             </header>


<div class="row">	
<div class="col-sm-12">

<div class="widget-box transparent">
<div class="widget-body">
<div class="widget-main padding-1">

<div class="row-fluid">

<?php $this->dataset->TableHead();?>
<?php
if (!empty($this->dataset->data)) {
	foreach ($this->dataset->data as $row) {
	?>
		<tr>
			<td><?=$row['id'];?></td>
			<td class="<? if ($row['status'] == 'active') { ?>ok<? } else { ?>failed<? } ?>">&nbsp;</td>
			<td><?=$row['start_date'];?></td>
			<td><?=$row['last_charge_date'];?></td>
			<td><?=$row['next_charge_date'];?></td>
			<td><?=$this->config->item('currency_symbol');?><?=$row['amount'];?></td>
			<td><? if (isset($row['customer'])) { ?><?=$row['customer']['last_name'];?>, <?=$row['customer']['first_name'];?><? } ?></td>
			<td><? if (isset($row['plan']['name'])) { ?><?=$row['plan']['name'];?><? } ?></td>
			<td class="options"><a href="<?=site_url('transactions/recurring/' . $row['id']);?>" class="btn btn-primary btn-xs" >details</a></td>
		</tr>
	<?php
	}
}
else {
?>
<tr><td colspan="9">
<div class="alert alert-warning alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
<p class="lead center">You Have No Records To Display.</p>
    </div>
</td>
</tr>

<?php } ?>

<?=$this->dataset->TableClose();?>

</div><!-- /.row-fluid -->

</div><!-- /.widget-main -->
</div><!-- /.widget-body -->
</div><!-- /.widget-box -->


</div><!-- /.col-sm-12 -->
</div><!-- /.row -->

<?=$this->load->view(branded_view('cp/footer'));?>