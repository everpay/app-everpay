<?=$this->load->view(branded_view('cp/header'));?>

<header class="section-header">
              <div class="container-960 center">
<div class="copywriting">
<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	
<h1 class="margin-none center">Manage <strong class="text-primary">Coupons</strong></h1>
<a class="btn btn-success btn-sm pull-right" style="color:#fff; margin-right:30px;" href="<?=site_url('/coupons/add');?>"><span class="fa fa-plus-circle"></span> New Coupon </a>
</div>
</div>
             </div>
             </header>


<?=$this->dataset->TableHead();?>
<?php if (!empty($this->dataset->data)) : ?>
	<?php foreach ($this->dataset->data as $row) :?>
		<tr>
			<td><input type="checkbox" name="check_<?=$row['id'];?>" value="1" class="action_items" /></td>
			<td><?=$row['id'];?></td>
			<td><a class="btn btn-primary btn-sm pull-right" href="<?=site_url('coupons/edit/' . $row['id']);?>"><?=$row['name'];?></a></td>
			<td><?= $row['code'] ?></td>
			<? $end_date = ($row['end_date'] == FALSE) ? 'no expiry' : date('Y-m-d', strtotime($row['end_date'])); ?>
			<td><?= date('Y-m-d', strtotime($row['start_date'])) .' - ' . $end_date;?></td>
			<td><?= $coupon_options[$row['type_id']] ?></td>
		</tr>
	<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6"><p>No coupons match your filters.</p></td>
	</tr>
<?php endif; ?>

<?=$this->dataset->TableClose();?>

<?=$this->load->view(branded_view('cp/footer'));?>