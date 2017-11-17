<?=$this->load->view(branded_view('cp/header'));?>

<style>
input[type=submit] {
color: #444;
-webkit-appearance: button;
cursor: pointer;
width: 180px;
}
</style>

<div class="row">
<header class="section-header">
<div class="container-960 center">
<div class="copywriting">
<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	
<h1 class="margin-none">Recurring <strong class="text-primary">Plans</strong></h1>
<a class="btn btn-success btn-sm pull-right" style="color:#fff; margin-right:30px;" href="<?=site_url('plans/new_plan');?>"><span class="fa fa-plus-circle"></span> New Recurring Plan </a>
</div>
</div>
             </div>
             </header>


<div class="widget-main padding-1">

<div class="row-fluid">
<div class="col-lg-12 col-md-12 col-sm-12">
	<div class="widget-body">
<?=$this->dataset->TableHead();?>


<?php
if (!empty($this->dataset->data)) {
	foreach ($this->dataset->data as $row) {
	?>
		
<tr>
			
<td><input type="checkbox" name="check_<?=$row['id'];?>" value="1" class="action_items" /></td>
			
<td><?=$row['id'];?></td>
			
<td><?=$row['name'];?></td>
			
<td><? if ($row['amount'] == '0.00') { ?>free<? } else { ?><?=$row['amount'];?><? } ?></td>
	
<td><?=$row['interval'];?> days</td>
			
<td><? if ($row['free_trial'] == '0') { ?>none<? } else { ?><?=$row['free_trial'];?> days<? } ?></td>
			
<td><a href="<?=dataset_link('customers/index',array('plan_id' => $row['id']));?>"><?=$row['num_customers'];?> customers</a></td>
			
<td class="options"><a class="btn btn-primary btn-xs" href="<?=site_url('plans/edit/' . $row['id']);?>"><span class="fa fa-pencil"></span> edit</a></td>
		
</tr>
	


<?
	}
}
else {
?>

<tr>
<td colspan="8">Empty data set.</td>

</tr>


<?
}	
?>


<?=$this->dataset->TableClose();?>


		</div><!-- /.widget-body -->
</div><!-- /.col-sm-12 -->
</div><!-- /.row-fluid -->
 </div><!-- /.widget-main -->

</div><!-- /.row -->


<?=$this->load->view(branded_view('cp/footer'));?>