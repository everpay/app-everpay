<?=$this->load->view(branded_view('cp/header'));?>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#ep-users').dataTable();
} );
</script>

<style>
table.dataTable thead th {
    padding: 5px 20px 5px 20px;
    border-top: 1px solid #05101b;
    font-weight: 500;
    cursor: pointer;
}
.alert {
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    font-size: 14px;
    border: 1px solid transparent;
    border-radius: 0.25rem;
}
</style>


<?php if ($this->user->Get('client_type_id') == '1') { ?>


<div class="row-fluid">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="content">			

<div class="col-lg-10 col-md-10 col-sm-10">

<div class="alert alert-warning alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
     As a <strong><b><?=$this->user->Get('client_type');?></b>Did you Know That</strong> you have the ability to Create, Update, Suspend, Unsuspend, and Delete client accounts.  Please do so with care.  You are the parent of all the client accounts you create.  You only have permission to modify the client accounts that you have created.
    </div>

<?php } elseif ($this->user->Get('client_type_id') == '3') { ?>

<div class="alert alert-warning alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>As an <b><?=$this->user->Get('client_type');?></b>, you have the ability to Create, Update, Suspend, Unsuspend,
and Delete client accounts across the entire system.  These accounts can be a Merchant Service Provider accounts (with permissions to create End User accounts),
or standalone End User accounts which do not have Client creation privileges.  Please do so with care.
    </div>
    </div>

<!-- BEGIN PORTLET-->
<div class="portlet-body">
<?php } ?>
<?//=$this->dataset->TableHead();?>
<?php
/*if (!empty($this->dataset->data)) {
	foreach ($this->dataset->data as $row) {*/
	?>
		<!--<tr rel="<?=$row['id'];?>">
			<td><input type="checkbox" name="check_<?=$row['id'];?>" value="1" class="action_items" /></td>
			<td><?=$row['id'];?></td>
			<td><?=$row['username'];?></td>
			<td><?=$row['last_name'];?>, <?=$row['first_name'];?></td>
			<td><?=$row['email'];?></td>
			<td><? if ($row['suspended'] == '1') { ?><span class="suspended"><img src="<?=branded_include('images/failed.png');?>" alt="Suspended" /> Suspended</span><? } else { ?>Active<? } ?></td>
<td class="options"><a class="btn btn-link btn-xs" href="<?=site_url('clients/edit/' . $row['id']);?>"><span class="glyphicon glyphicon-edit"></span> edit</a></td>
		</tr>-->
	<?php
	//}
//}
//else {
?>
<!--<tr><td colspan="7">Empty data set.</td></tr>-->
<?php
//}	
?>
<?//=$this->dataset->TableClose();?>


<div class="portlet">
<!-- BEGIN PORTLET-->
<div class="portlet-body">

<table id="ep-users" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>User name</th>
                <th>Name</th>
                <th>Email</th>
                <th>Account Status</th>
                <th>Action</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                 <th>ID</th>
                <th>User name</th>
                <th>Name</th>
                <th>Email</th>
                <th>Account Status</th>
                <th>Action</th>
            </tr>
        </tfoot>
 
        <tbody>
        	<?php
if (!empty($this->dataset->data)) {
	foreach ($this->dataset->data as $row) {
	?>
		<tr>
			
			<td><?=$row['id'];?></td>
			<td><?=$row['username'];?></td>
			<td><?=$row['last_name'];?>, <?=$row['first_name'];?></td>
			<td><?=$row['email'];?></td>
			<td><? if ($row['suspended'] == '1') { ?><span class="label label-danger suspended"><img src="<?=branded_include('images/failed.png');?>" alt="Suspended" /> Suspended</span><? } else { ?><span class="label label-success"> Activated <? } ?></span></td>
<td class="options"><a class="btn btn-primary btn-xs" href="<?=site_url('clients/edit/' . $row['id']);?>"><span class="fa fa-edit"></span> edit</a></td>
		</tr>
	<?php
	}
}?>

 </tbody>
    </table>


</div><!--/portlet-->




</div><!--/content-->
</div><!--/col-lg-12-->
</div><!--/row-fluid-->

<?=$this->load->view(branded_view('cp/footer'));?>
<script type="text/javascript" src="<?=branded_include('js/jquery-migrate-1.2.1.min.js');?>"></script>

<script type="text/javascript" src="<?=branded_include('js/jquery.slimscroll.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/jquery.blockui.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/jquery.cokie.min.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/uniform/jquery.uniform.min.js');?>"></script>