<?=$this->load->view(branded_view('cp/header'));?>
<style>
input[type=checkbox], input[type=radio] {
box-sizing: border-box;
padding-right: 10px;
margin-top: 4px!important;
position: relative !important;
}
#dataset_form .pagination {
	overflow: visible !important;
}
</style>

 
<script type="text/javascript">
$(function () {
       $(".tip").tooltip();
});
</script>

<div class="row">


<div class="col-lg-12 col-sm-12">

<div class="widget-box transparent">
<div class="widget-body">
<div class="widget-main padding-1">

<div class="row-fluid">
<div class="row">	

<header class="section-header">
              <div class="container-960 center">
<div class="copywriting">
<div class="heading" data-animation="fadeInUp" data-animation-delay=".2s">
	
<h1 class="margin-none">Manage<strong class="text-primary"> Gateway</strong><a class="btn btn-success btn-sm pull-right" style="color:#fff; margin-right:30px;" href="<?=site_url('settings/new_gateway');?>"><span class="fa fa-edit"></span> New Gateway </a></h1>


</div>
</div>
             </div>
             </header>      

<div class="col-lg-12 col-sm-12">


	<div class="widget-body">


<div class="portlet-body">


<?=$this->dataset->TableHead();?>
<?
if (!empty($this->dataset->data)) {
	foreach ($this->dataset->data as $row) {
	?>
		<tr>
			<td><input type="checkbox" name="check_<?=$row['id'];?>" value="1" class="action_items" /></td>
			<td><?=$row['id'];?></td>
			
<td><?=$row['gateway'];?></td>
			
<td><?=$row['date_created'];?></td>
			
<td class="options"><a class="btn btn-link btn-xs" href="<?=site_url('settings/edit_gateway/' . $row['id']);?>"><span class="fa fa-edit"></span> edit</a> 
<? if ($this->user->Get('default_gateway_id') == $row['id']) { ?> <b class="label label-success"><i class="fa fa-exclamation-circle"></i> default</b>
<? } else { ?>
			
<a class="btn btn-link btn-xs" href="<?=site_url('settings/make_default_gateway/' . $row['id']);?>"><span class="fa fa-exclamation"></span> make default</a><? } ?></td>
		
</tr>
	
<?
	}
}
else {
?>


<tr><td colspan="7">Empty data set.</td></tr>


<?
}	
?>


<?=$this->dataset->TableClose();?>


</div><!-- END PORTLET-->
</div><!-- /.widget-body -->

</div><!-- /.col-md-12 -->


</div><!-- /.row -->
</div><!-- /.row -->

<div class="clearfix" style="min-height: 40px"></div>

</div><!-- /.widget-main -->
</div><!-- /.widget-body -->
</div><!-- /.col-sm-12 -->
</div><!-- /.widget-box -->
</div><!-- /.row -->	

<?=$this->load->view(branded_view('cp/footer'));?>