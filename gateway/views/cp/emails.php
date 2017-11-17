<?=$this->load->view(branded_view('cp/header'));?>

<script type="text/javascript" src="<?=branded_include('js/bootstrap.min.js');?>"></script>


<header class="section-header">
              <div class="container-960 center">
<div class="copywriting">
<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	
<h1 class="margin-none">Manage<strong class="text-primary"> Emails <a class="btn btn-info pull-right" href="<?=site_url('settings/new_gateway');?>"> New Gateway </a></button></h1>
</div>
</div>
             </div>
             </header>

<div class="row-fluid">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="widget-box">
<div class="widget-body">			
<div class="widget-main">
<div class="row">


<?=$this->dataset->TableHead();?>
<?
if (!empty($this->dataset->data)) {
	foreach ($this->dataset->data as $row) {
	?>
		<tr>
			<td><input type="checkbox" name="check_<?=$row['id'];?>" value="1" class="action_items" /></td>
			<td><?=$row['id'];?></td>
			<td><?=$row['trigger'];?></td>
			<td><?=$row['to_address'];?></td>
			<td><?=$row['email_subject'];?></td>
			<td><? if ($row['is_html'] == 0) { ?>plaintext<? } else { ?>HTML<? } ?></td>
			<td><? if (isset($plans[$row['plan']])) { ?><?=$plans[$row['plan']];?><? } ?></td>
			<td class="options"><a class="btn btn-primary btn-xs" href="<?=site_url('settings/edit_email/' . $row['id']);?>">edit</a></td>
		</tr>
	<?
	}
}
else {
?>
<tr><td colspan="8">Empty data set.</td></tr>
<?
}	
?>
<?=$this->dataset->TableClose();?>


</div><!--/row--->



</div><!--/widget-body-->
</div><!--/widget-main-->
</div><!--/widget-box-->
</div><!--/col-lg-12-->
</div><!--/row-fluid-->


<?=$this->load->view(branded_view('cp/footer'));?>