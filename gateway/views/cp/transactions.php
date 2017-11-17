<?= $this->load->view(branded_view('cp/header')); ?>

<style>


.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: 700;
  line-height: 33px;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;
}

#datatables .content-wrapper td {
  padding: 10px 9px;
}

.dataTables_paginate {
  float: none;
  text-align: center;
  margin-top: 20px;
}

.paging_full_numbers {
  height: 22px;
  line-height: 22px;
}

.paging_full_numbers a.paginate_button, .paging_full_numbers a.paginate_active {
  border: 1px solid #ddd;
  padding: 5px 10px;
  cursor: pointer;
  color: #428bca !important;
  border-left: 0px;
}

.paging_full_numbers a.paginate_button {
  background-color: #fff;
}

#datatables .content-wrapper thead {
  display: table-header-group;
  vertical-align: middle;
  border-color: inherit;
margin-top:20px;
margin-bottom:20px;
padding-bottom: 10px;
  border-spacing: 2px;
  border-color: gray;
}

table.dataTable tr.odd td.sorting_1 {

}



#reports .dataTables_wrapper td {
    padding: 5px 6px!important;
}

</style>


<div class="row-fluid">
<div class="col-lg-12 col-md-12 col-sm-12">
<div class="content">

<?php if (!empty($this->dataset->data)) : ?>	
<table id="transactions-table" class="table table-hover table-outline mb-0 hidden-sm-down" cellspacing="0" width="100%" aria-describedby="orders-datatable_info" role="grid">
   
<?=$this->dataset->TableHead();?>
	
<thead class="hidden thead-default">
    <tr>

<th tabindex="0" rowspan="1" colspan="1" class="sorting_asc text-center" role="columnheader" aria-controls="orders-datatable" aria-sort="ascending" aria-label="Order
                : activate to sort column descending" style="width: 40px;">Charge
                </th>
                                                
     
    <th tabindex="0" rowspan="1" colspan="1" class="sorting text-center" role="columnheader" aria-controls="orders-datatable" aria-label="Total
                : activate to sort column ascending" style="width: 40px;">Amount
                </th>

         <th tabindex="0" rowspan="1" colspan="1" class="sorting" role="columnheader" aria-controls="orders-datatable" aria-label="Customer
                : activate to sort column ascending" style="width: 220px;"><i class="icon-budicon-292"></i> Customer
                </th>
          <th  tabindex="0" rowspan="1" colspan="1" class="sorting text-center" role="columnheader" aria-controls="orders-datatable" aria-label="Total
                : activate to sort column ascending" style="width: 190px;">Type</th> 
                                    <th class=" hidden-xs">Gateway</th> 

                                  <th class="text-center hidden-xs" style="width: 80px;"><i class="icon-budicon-170"></i></th>

                                    <th class="text-center">Status</th>

 <th tabindex="0" rowspan="1" colspan="1" class="sorting" role="columnheader" aria-controls="orders-datatable" aria-label="Date
                : activate to sort column ascending" style="width: 170px;">Date</th> 

                                   

                 <th class="text-center" style="width: 20px;"><i class="icon-budicon-330"></i></th> 
                                </tr> 
                        
            </thead>

<tbody role="alert" aria-live="polite" aria-relevant="all">
     
<?php foreach ($this->dataset->data as $row) :?>
                      
    <tr class="items-list js-trigger-settings" rel="<?=$row['id'];?>">
                                         
       <td class="sorting_1 text-center"> <div class="mt-3"><a href="<?= site_url('transactions/charge/' . $row['id']); ?>">#<?= $row['id']; ?></a></div></td>
                                            <td class="text-center"> <div class="mt-3"><?= $this->config->item('currency_symbol'); ?><?= $row['amount']; ?></div></td>

                                            <td class="user-image"> 
<?php
$email = $row['email'];
$size = 28; $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?s=" . $size;
?>
                                    
                     <img src="<?php echo $grav_url; ?>" class="avatar avatar-xs img-avatar text-left pull-left mt-1" alt=" <?= $row['customer']['email']; ?>">
                                    
                          <span class="user-name text-left">
           <strong><a href="<?= site_url('transactions/charge/' . $row['id']); ?>" class="name"><?php if (isset($row['customer'])) { ?><?= $row['customer']['first_name']; ?> <span class="truncate"> <?= $row['customer']['last_name']; ?></span><?php } ?></strong></span>
              <div class="user-email small text-muted text-left truncate"> <?= $row['customer']['email']; ?></div></a>
                          </span>
                                            </td>
 <td class=""><div class="mt-0"><i class="fa fa-cc-mastercard mt-2" style="font-size:24px"></i> <?php if (!empty($row['card_last_four'])) { ?>**** **** **** <?= $row['card_last_four']; ?><?php } ?></div></td>
                                            <td class="hidden-xs"><span class="label label-default"><?= $gateways[$row['gateway_id']]; ?></span></td>

                                            <td class="options hidden-xs"><?php if (isset($row['recurring_id'])) { ?><a href="<?= site_url('transactions/recurring/' . $row['recurring_id']); ?>"><?= $row['recurring_id']; ?></a><?php } ?></td>

 <td class="user-cb text-center"> 
<?php if ($row['refunded'] == '1') { ?> 
<span class="label label-warning"></span>Refunded</span>
<?php } else { ?>
<span class="label label-default"><?= $row['status']; ?>  </span>
<?php } ?>
                                            </td>

   <td class="">
<div class="small text-muted">Source:</div>
<strong><a href="<?= site_url('transactions/charge/' . $row['id']); ?>"><?= $row['date']; ?></a></strong>
</td>

<td class="options actions">
<a class="btn btn-link text-muted mt-1" href="<?= site_url('transactions/charge/' . $row['id']); ?>" data-toggle="tooltip" data-placement="top" title="Details"><i class="icon-budicon-522"></i></a>
</td>
                        
                                        </tr>
									<?php endforeach; ?>

								
</tbody>
                             <?=$this->dataset->TableClose();?>   
								
								<?php else : ?>
								
<div class="empty mt-20 mb-20">
<div id="no-data-view">

 <div class="jumbotron jumbotron-icon">
 <br />
<i class="icon-budicon-131 budi-biggest"></i>
</div>
    <h2>Payments</h2>
 <p>You haven't created any payments yet.  <a href="<?= site_url('docs_url'); ?>/#payments" target="_blank" class="arrow">Learn more</a></p>
    
    <div class="controls">
        <p>
 <a id="create" href="<?=site_url('/transactions/create/');?>" class="btn btn-primary btn-lg"><span><i class="fa fa-plus"></i> Add Your First Payment</span></a>
        </p>
    </div>
</div>
<?php endif; ?>
  
  <div class="modal fade" id="new-payment-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	  	<div class="modal-dialog">
		    <div class="modal-content">
		    	<form method="post" action="#" role="form">
			      	<div class="modal-header">
			        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>
			        	<h4 class="modal-title" id="myModalLabel">
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
  
  

<div class="clearfix" style=""></div>  
</div><!-- END .content-->
</div><!-- END .col-md-12-->
</div><!-- END .row-fluid-->

<script type="text/javascript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#ep-table').dataTable();
} );
</script>


<!-- <script type="text/javascript">
    
    jQuery(document).ready(function () {
        jQuery('#ep-table').dataTable({
            "pagingType": "full_numbers",
            "iDisplayLength": "10",
            "sPaginationType": "bootstrap",
           // "order": [[3, "desc"]],
            "bLengthChange": true,
           // "bFilter": true,
           // "bSort": true,
           // "bInfo": true,
            //"bAutoWidth": true,
            aLengthMenu: [
                [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]
            ],
            aoColumns: [
                {bSortable: false},
                {bSortable: false},
                {bSortable: false},
                {bSortable: false},
                {bSortable: false},
                {bSortable: false},
                {bSortable: false},
                {bSortable: false},
            ],
        });
    });
</script>-->

</div><!-- END /.content-->

</div><!-- END /.col-md-12-->

</div><!-- END /.row-fluid-->

<?= $this->load->view(branded_view('cp/footer')); ?>
