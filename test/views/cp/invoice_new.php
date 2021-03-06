<?

/* Default Values */

if (!isset($form)) {
	$form = array(
				'first_name' => '',
				'last_name' => '',
				'company' => '',
				'address_1' => '',
				'address_2' => '',
				'city' => '',
				'state' => '',
				'postal_code' => '',
				'country' => 'US',
				'suspended' => '0',
				'gmt_offset' => 'UM5',
				'phone' => '',
				'email' => '',
				'username' => '',
				'client_type' => '2'	
			);
} ?>
<?=$this->load->view(branded_view('cp/header'), array('head_files' => '<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>'));?>
	<!-- Imported styles on this page -->
	<link href="<?=branded_include('js/multiselect/css/multi-select.css');?>" rel="stylesheet" type="text/css" media="screen" />
	
	<div class="page-title">
		Invoice <strong>#097294</strong>
	</div>
	<div class="options pull-right">
		<a href="#"><i class="fa fa-print"></i> Print</a>
		<a href="#"><i class="fa fa-download"></i> Download</a>
	</div>
</div>
</div><!--/.menu-bar-->

<div id="invoice">
<div class="invoice-wrapper">
		<div class="intro">
			Hi <strong>John McClane</strong>, 
			<br>
			This is the receipt for a payment of <strong>$312.00</strong> (USD) you made to Admin Themes.

			<div class="status">Paid</div>
		</div>

		<div class="payment-info">
			<div class="row">
				<div class="col-sm-6">
					<span>Payment No.</span>
					<strong>883053045</strong>
				</div>
				<div class="col-sm-6 text-right">
					<span>Payment Date</span>
					<strong>Feb 09, 2014 - 03:44 pm</strong>
				</div>
			</div>
		</div>

		<div class="payment-details">
			<div class="row">
				<div class="col-sm-6">
					<span>Client</span>
					<strong>
						John McClane
					</strong>
					<p>
						989 5th Avenue <br>
						New York City <br>
						55839 <br>
						USA <br>
						<a href="#">
							john.mcclane@gmail.com
						</a>
					</p>
				</div>
				<div class="col-sm-6 text-right">
					<span>Payment To</span>
					<strong>
						Admin Themes LLC
					</strong>
					<p>
						344 9th Avenue <br>
						San Francisco <br>
						99383 <br>
						USA <br>
						<a href="#">
							react.themes@gmail.com
						</a>
					</p>
				</div>
			</div>
		</div>

		<div class="line-items">
			<div class="headers clearfix">
				<div class="row">
					<div class="col-xs-4">Description</div>
					<div class="col-xs-3">Quantity</div>
					<div class="col-xs-5 text-right">Amount</div>
				</div>
			</div>
			<div class="items">
				<div class="row item">
					<div class="col-xs-4 desc">
						React Theme Customization
					</div>
					<div class="col-xs-3 qty">
						3
					</div>
					<div class="col-xs-5 amount text-right">
						$60.00
					</div>
				</div>
				<div class="row item">
					<div class="col-xs-4 desc">
						About us Page
					</div>
					<div class="col-xs-3 qty">
						1
					</div>
					<div class="col-xs-5 amount text-right">
						$20.00
					</div>
				</div>
				<div class="row item">
					<div class="col-xs-4 desc">
						Landing Web Design 
					</div>
					<div class="col-xs-3 qty">
						2
					</div>
					<div class="col-xs-5 amount text-right">
						$18.00
					</div>
				</div>
			</div>
			<div class="total text-right">
				<p class="extra-notes">
					<strong>Extra Notes</strong>
					Please send all items at the same time to shipping address by next week.
					Thanks a lot.
				</p>
				<div class="field">
					Subtotal <span>$379.00</span>
				</div>
				<div class="field">
					Shipping <span>$0.00</span>
				</div>
				<div class="field">
					Discount <span>4.5%</span>
				</div>
				<div class="field grand-total">
					Total <span>$312.00</span>
				</div>
			</div>

			<div class="print">
				<a href="#">
					<i class="fa fa-print"></i>
					Print this receipt
				</a>
			</div>
		</div>
	</div>


</div>


<?=$this->load->view(branded_view('cp/footer'));?>