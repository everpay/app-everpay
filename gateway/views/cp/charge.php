<?=$this->load->view(branded_view('cp/header'));?>

<style>
table.dataset td.label {
color: #444;
}

.table-striped>tbody>tr:nth-child(odd)>td, .table-striped>tbody>tr:nth-child(odd)>th {
background-color: #f9f9f9;
font-size: 14px;
color: #444;
}

.table>tbody>tr>td {
padding-top: 10px!important;
line-height: 1.42857143;
vertical-align: top;
border-top: 0px solid #ddd!important;
text-align: right;
font-size: 14px;
color: #444;
text-align: left;
}

</style>

<div class="content-wrapper">

<div class="row">

<div class="col-md-6 col-md-offset-3">
<div class="panel panel-primary">
<div class="panel-body">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h3 class="modal-title">Details for Charge <strong class="text-success">#<?=$id;?></strong></h3>
      </div> 
	  
<? if (isset($recurring_id)) { ?>
<a class="charge_recurring" href="<?=site_url('transactions/recurring/' . $recurring_id);?>">This charge is related to recurring charge #<?=$recurring_id;?>.</a>
<? } ?>
<div class="content panel-body flip-scroll">

<table class="table">
<thead class="flip-content">
		<tr>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="width: 25%" class="label">Amount</td>
			<td style="width: 75%"><?=$this->config->item('currency_symbol');?><?=$amount;?><? if ($refunded == "0" and $status == "ok") { ?>  <a class="btn btn-warning btn-xs pull-right" href="<?=site_url('transactions/refund/'  . $id);?>">issue refund <i class="fa fa-history"></i></a><? } ?></td>
		</tr>
		<tr>
			<td class="label">Coupon</td>
			<td><? if (!empty($coupon)) { ?><?=$coupon;?><? } ?></td>
		</tr>
		<tr>
			<td class="label">Transaction Date</td>
			<td><?=$date;?></td>
		</tr>
		<tr>
			<td class="label">Status</td>
			<?
				if ($refunded == "1" or $status == "failed") {
					$status_image = "failed";
				}
				else {
					$status_image = "ok";
				}
				
				if ($refunded == "1") {
					$status = "refunded on " . $refund_date;
				}
				elseif ($type == 'recurring_repeat' and $status == 'failed') {
					$status = 'recurring repeat failed';
				}
				
			?>
			<td><img src="<?=branded_include('images/' . $status_image . '.png');?>" alt="" />&nbsp;<?=$status;?></td>
		</tr>
		<tr>
			<td class="label">Credit Card </td>
			<td><? if (!empty($card_last_four)) { ?>**** <?=$card_last_four;?><? } ?></td>
		</tr>
		<tr>
			<td class="label">Processing Gateway</td>
			<td><a href="<?=site_url('settings/edit_gateway/' . $gateway['gateway_id']);?>"><?=$gateway['alias'];?></a></td>
		</tr>
	</tbody>
	<? if (isset($customer)) { ?>
	<thead>
		<tr>
			<td colspan="2"><h3>Customer Information <a class="btn btn-info btn-sm pull-right" href="<?=site_url('customers/edit/' . $customer['id']);?>">edit <i class="fa fa-user"></i></a></h3>  </td>
		</tr>
	</thead>
	<tbody>
		<? if (!empty($customer['first_name'])) { ?>
		<tr>
			<td class="label">Name</td>
			<td><?=$customer['first_name'];?> <?=$customer['last_name'];?></td>
		</tr>
		<? } ?>
		<? if (!empty($customer['email'])) { ?>
		<tr>
			<td class="label">Email</td>
			<td><?=$customer['email'];?></td>
		</tr>
		<? } ?>
		<? if (!empty($customer['company'])) { ?>
		<tr>
			<td class="label">Company</td>
			<td><?=$customer['company'];?></td>
		</tr>
		<? } ?>
		<? if (!empty($customer['address_1'])) { ?>
		<tr>
			<td class="label">Address</td>
			<td>    <?=$customer['address_1'];?>
					<? if (!empty($customer['address_2'])) { ?><br /><?=$customer['address_2'];?><? } ?>
					<? if (!empty($customer['city'])) { ?><br /><?=$customer['city'];?><? } ?><? if (!empty($customer['state'])) { ?>, <?=$customer['state'];?><? } ?>
					<? if (!empty($customer['country'])) { ?><br /><?=$customer['country'];?><? } ?>
					<? if (!empty($customer['postal_code'])) { ?><br /><?=$customer['postal_code'];?><? } ?>
					</p>
			</td>
		</tr>
		<? } ?>
		<? if (!empty($customer['phone'])) { ?>
		<tr>
			<td class="label">Phone</td>
			<td><?=$customer['phone'];?></td>
		</tr>
		<? } ?>
		<? if (!empty($customer['internal_id'])) { ?>
		<tr>
			<td class="label">Internal ID</td>
			<td><?=$customer['internal_id'];?></td>
		</tr>
		<? } ?>
	</tbody>	
	<? } ?>
	<? if (isset($details) and !empty($details)) { ?>
	<thead>
		<tr>
			<td colspan="2"><h3>Authorization Codes</h3></td>
		</tr>
	</thead>
	<tbody>
	<? foreach ($details as $name => $value) { ?>
		<? if (!empty($value) and $name != "order_authorization_id") { ?>
		<tr>
<p class="lead success">
			<td><?=$name;?></td>
			<td><?=$value;?></td>
</p>
		</tr>
		<? } ?>
	<? } ?>
	</tbody>
	<? } ?>
</table>
</div><!--/content-->

          <div class="modal-footer">
            <a href="<?=site_url('transactions/refund/'  . $id);?>" class="btn btn-danger button-previous disabled btn-lg" data-dismiss="modal">Close <i class="fa fa-times"></i></a>

            <a class="btn btn-warning btn-lg" href="<?=site_url('transactions/refund/'  . $id);?>"> Issue Refund <i class="fa fa-history"></i></a>
          <a class="btn btn-success btn-lg" href="<?=site_url('transactions/create/'  . $id);?>">  New Charge <i class="fa fa-plus-square-o"></i></a>
          </div>


</div><!--/portlet-->
</div><!--/portlet-body-->
</div><!--/col-lg-6-->

</div><!--/content-->
</div><!--/row-->
<?=$this->load->view(branded_view('cp/footer'));?>