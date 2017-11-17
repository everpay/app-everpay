<?=
$this->load->view(branded_view('cp/header'));
error_reporting(0);
?>

<script type="text/javascript" src="<?= branded_include('js/jQuery.dtplugin.js'); ?>"></script>
<script type="text/javascript" src="<?= branded_include('js/datatable.example.js'); ?>"></script>

    <div class="page-header">
	   <h1>CI-DataTables Library Example</h1>
	</div>
	
	<div class="row">
	    <div class="col-md-12">
	        <div class="panel panel-default">
              <div class="panel-body">
              		<table id="sampleOrderTable">
              			<thead>
              				<tr>
							    <td><input type="text" /></td>
              					<td><input type="text" /></td>
              					<td><input type="text" /></td>
              					<td><input type="text" /></td>
              					<td><input type="text" /></td>
              					<td><input type="text" /></td>
              					<td><input type="text" /></td>
              				</tr>
              				<tr>
              					<th>Id#</th>
              					<th>Amount</th>
              					<th>Customer</th>
								<th>Card</th>
								<th>Status</th>
              					<th>Gateway</th>
              					<th>Charge Date</th>
              				</tr>
              			</thead>
              			<tbody></tbody>
              		</table>
              </div>
            </div>
	    </div>
	</div>
	
	
	


<?=$this->load->view(branded_view('cp/footer'));?>